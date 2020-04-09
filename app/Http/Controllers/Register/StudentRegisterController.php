<?php

namespace App\Http\Controllers\Register;

use Illuminate\Support\Facades\Lang;
use Validator;
use App\Models\School;
use App\Models\stud_profile;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class StudentRegisterController extends Controller
{
    /*
     |--------------------------------------------------------------------------
     | Register Controller
     |--------------------------------------------------------------------------
     |
     | This controller handles the registration of new Student as well as their
     | validation and creation. By default this controller uses a trait to
     | provide this functionality without requiring any additional code.
     |
     */

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/sthome';

    //---------------------------------------------------------------------------------//


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function confirm(Request $request)
    {
        if (isset($_GET['sid']) and isset($_GET['scode'])) {

            if (!$st = Student::where('sID', $_GET['sid'])->first()) {
                $errormsg = trans('messages.studentregister_confirm_link_fail_sid');
                return view('register.students.wc.fail', compact('errormsg'));
            }
            if ($st->email != $_GET['email']) {
                $errormsg = trans('messages.studentregister_confirm_link_fail_email_noemail');
                return view('register.students.wc.fail', compact('errormsg'));
            }
            if ($st->scode != $_GET['scode']) {
                $errormsg = trans('messages.studentregister_confirm_link_fail_scode');
                return view('register.students.wc.fail', compact('errormsg'));
            } else {
                $st = Student::where('sid', $_GET['sid'])->where('scode', $_GET['scode'])->first();
                $code = $st->token;

                //
                if ($_GET['confirmcode'] == $code) {
                    $request->session()->put('sid', $_GET['sid']);
                    $request->session()->put('scode', $_GET['scode']);
                    $request->session()->put('email', $_GET['email']);
                    return view('register.students.wc.further');
                } else {
                    $errormsg = trans('messages.studentregister_confirm_link_fail_confcode');
                    return view('register.students.wc.fail', compact('errormsg'));
                }
            }
        }else{
            $errormsg = trans('messages.studentregister_confirm_link_fail');
            return view('register.students.wc.fail', compact('errormsg'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        //
        $this->validate($request,[
            'SID'=>'required|max:100',
            'scode'=>'required|max:100',
            'email'=>'required',
        ]);
        if(count(Student::where('sID',$request['SID'])->where('scode',$request['scode'])->get()) <1){
            return redirect()-back()->with('fail',Lang::get('auth.failed'));
        }
        $st = Student::where('sID',$request['SID'])->where('scode',$request['scode'])->first();

        if($st->activated == 0){
            if($st->email != "" or $st->email != null){
                $errormsg = Lang::get('messages.studentRegister_register_emailNVfail');
                return view('register.students.wc.fail', compact('errormsg'));
            }else{

                $code = Hash::make($request['scode']) . Hash::make($request['sID']);
                $code = Hash::make($code);
                $code = str_limit($code, 12);
                //var_dump($code);
                //dd($st);
                $st->update(['email'=>$request['email']]);
                $st->update(['token'=>$code]);

                $querydata = ['confirmcode'=>$code,'sid'=>$request['SID'], 'scode'=>$request['scode'], 'email'=>$request['email']];
                $querystring = http_build_query($querydata);

                //$link = route('st_confirm') . '?confirmcode=' . urlencode($code) . '&sid=' . urlencode($request['SID']) . '&scode=' . urlencode($request['scode']) . '&email=' . urlencode($request['email']);
                $link = route('st_confirm') . '?' .$querystring;


                $data = array('name' => $request['email'], 'link' => $link);
                $to = $request['email'];
                Mail::send('mails.register.students.wc.mail', $data, function ($message) use ($to) {
                    $message->to($to, $to)
                        ->subject(trans('messages.studentregister_register_email_header'));
                    $message->from('info@diplocover.at', 'DiploCover');
                });


                return view('register.students.wc.success');
            }
        }else{
            $errormsg = Lang::get('messages.studentRegister_register_emailRPfail');
            return view('register.students.wc.fail', compact('errormsg'));
        }

    }
    public function further(Request $request)
    {
        //
        if($this->validate($request,[
            'firstname'=>'required|max:100',
            'lastname'=>'required|max:100',
            'title'=>'max:20',
            'phonenumber'=>'max:20',
            'pswd'=>'required| max:60',
            'prpic' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'leb' => 'mimes:docx,pdf|max:2048',
            'zeug' => 'file|mimes:pdf,docx,jpeg,png,jpg,gif,svg|max:2048',
            'oth1' => 'mimes:docx,pdf,xlsx,jpeg,png,jpg,gif,svg|max:2048',
            'oth2' => 'mimes:docx,pdf,xlsx,jpeg,png,jpg,gif,svg|max:2048',
        ])) {
            if (!($request->session()->get('sid') == null)) {

                if ($st = Student::where('sid', $request->session()->get('sid'))->first()) {
                    $st_prof = stud_profile::where('sid', $request->session()->get('sid'))->get();
                    if (count($st_prof) < 1) {
                        $name = $request['firstname'].$request['lastname'];
                        if ($st->update(['firstname' => $request['firstname'], 'lastname' => $request['lastname'],'name' => $name, 'title' => $request['title'], 'phonenumber' => $request['phonenumber']])) {
                            $st_pr = new stud_profile();
                            $st_pr->sID = $st->sID;
                            $st_pr->aboutme = $request['abme'];
                            $st_pr->intressts = $request['intr'];
                            $sch = $st->schoolb->schoolname;
                            $stool = $sch;
                            $st_pr->Stschool = $stool;
                            $st_pr->Contact = $request['Contact'];
                            //$pic = $request->pic->store('profpic');
                            //$picdir = 'uploads/documents/' . $st->sID . '/'.$pic->getClientOriginalName();
                            //$pdir = 'uploads/documents/' . $st->sID . '/';
                            //$pic->move($pdir, $pic->getClientOriginalName());
                            //$st_pr->profpic = $picdir;
                            if ($request->hasFile('prpic')) {
                                $pic = $request->file('prpic');
                                $pic->move('storage/uploads/documents/' . $st->sID . '/', $pic->getClientOriginalName());
                                $pdir =  'storage/uploads/documents/' . $st->sID . '/' . $pic->getClientOriginalName();
                                $st_pr->profpic = $pdir;
                                Session::put('imgdir', $pdir);
                            }
                            if ($request->hasFile('leb')) {
                                $leb = $request->file('leb');
                                $leb->move('storage/uploads/documents/' . $st->sID . '/', $leb->getClientOriginalName());
                                $st_pr->lebpath = 'storage/uploads/documents/' . $st->sID . '/' . $leb->getClientOriginalName();
                            }
                            if ($request->hasFile('zeug')) {
                                $zeug = $request->file('zeug');
                                $zeug->move('storage/uploads/documents/' . $st->sID . '/', $zeug->getClientOriginalName());
                                $st_pr->zeugpath = 'storage/uploads/documents/' . $st->sID . '/' . $zeug->getClientOriginalName();
                            }
                            if ($request->hasFile('oth')) {
                                $oth = $request->file('oth');
                                $oth->move('storage/uploads/documents/' . $st->sID . '/', $oth->getClientOriginalName());
                                $st_pr->otherpath1 = 'storage/uploads/documents/' . $st->sID . '/' . $oth->getClientOriginalName();
                            }
                            if ($request->hasFile('oth2')) {
                                $oth2 = $request->file('oth2');
                                $oth2->move('storage/uploads/documents/' . $st->sID . '/', $oth2->getClientOriginalName());
                                $st_pr->otherpath2 = 'storage/uploads/documents/' . $st->sID . '/' . $oth2->getClientOriginalName();
                                $st_pr->otherpath2 = 'storage/uploads/documents/' . $st->sID . '/' . $oth2->getClientOriginalName();
                            }
                            $st_pr->created_at = Carbon::now();
                            $st_pr->updated_at = Carbon::now();
                            $st_pr->save();
                            $st->update(['activated' => 1, 'password' => Hash::make($request['pswd'])]);  //Hash::make(

                            $red = urlencode($st->sID);

                            return redirect('/login');//redirect('/student/'.$red.'/profile');

                        } else {
                            $errormsg = trans('messages.studentregister_further_db_error');
                            return view('register.students.wc.fail', compact('errormsg'));
                        }
                    }else{
                        $errormsg = trans('messages.studentregister_further_st_prof_fail');
                        return view('register.students.wc.fail', compact('errormsg'));
                    }
                } else {
                        $errormsg = trans('messages.studentregister_further_session_error');
                        return view('register.students.wc.fail', compact('errormsg'));
                    }

            } else {
                    $errormsg = trans('messages.studentregister_further_link_fail');
                    return view('register.students.wc.fail', compact('errormsg'));
                }
        }
    }

}
