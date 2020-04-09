<?php

namespace App\Http\Controllers\Register;

use App\Models\School;
use App\Models\Student;
use App\Models\Teacher;
use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Keygen\Keygen;

class SchoolRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin', ['only' => ['register']]);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function register(Request $request)
    {

        $this->validate($request,[
            'firstname'=>'required|max:70',
            'lastname'=>'required|max:70',
            'email'=>'required',
            'schname'=>'required|max:100'
        ]);
        $tch = Teacher::where('email',$request['email'])->get();
        if(!(count($tch)<1)){
            $errormsg = trans('messages.schoolregister_register_email_fail');
            return view('register.students.wc.fail', compact('errormsg'));
        }else {
            $tchID = Keygen::numeric(18)->generate(true);
            $conf = Keygen::numeric(10)->generate(true);
            $pswd = Keygen::numeric(10)->generate(true);

            $schid = Keygen::numeric(22)->generate(true);
            /*$cid = Hash::make($cid);
            $cidl = str_limit($cid,16,30);
            $cid = Hash::make($cidl);*/


            $now = Carbon::now(new DateTimeZone('Europe/Vienna'));


            $tch = new Teacher();
            $tch->teachID= $tchID;
            $tch->sregistercode= $conf;
            $tch->name= $request['firstname']. ' '.$request['lastname'];
            $tch->firstname= $request['firstname'];
            $tch->lastname= $request['lastname'];
            $tch->schoolID = $schid;
            $tch->email= $request['email'];
            $tch->password = $pswd;
            $tch->status = 0;
            $tch->remember_token = Hash::make(random_bytes(5));
            $tch->activated = 0;
            $tch->token = Hash::make(random_bytes(5));
            $tch->admin_ip_address = request()->ip();
            $tch->updated_at= $now;
            $tch->created_at= $now;
            $tch->save();
            $tch->assignRole('School');




            $schl = new School();
            $schl->schoolID = $schid;
            $schl->schoolname = $request['schname'];
            $schl->teachID = $tchID;
            $schl->pswd = $pswd;
            $schl->confirmcode = $conf;
            $schl->activated = 0;
            $schl->token = Hash::make($now);
            $schl->admin_ip_address = request()->ip();
            $schl->created_at = $now;
            $schl->updated_at = $now;
            $schl->save();



            $querydata = ['tchid'=>$tchID, 'email'=>$request['email'],'confirmcode'=>$conf,'ti'=>Carbon::now()];
            $querystring = http_build_query($querydata);

            $link = route('tch_confirm') . '?' .$querystring;


            $data = array('name' => $request['email'], 'link' => $link);
            $to = $request['email'];
            Mail::send('mails.register.students.wc.mail', $data, function ($message) use ($to) {
                $message->to($to, $to)
                    ->subject(trans('messages.schoolregister_register_email_header'));
                $message->from('info@diplocover.at', 'DiploCover');
            });


            return view('register.students.wc.success');
        }
    }













    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        //
        if($this->validate($request,[
            'schname'=>'required|max:100',
            'schmail'=>'required|max:100',
        ])){
            $code = Keygen::numeric(10)->generate(true);//str_limit(Hash::make(Carbon::now()),4).hexdec(uniqid()).str_random(4); //Hash::make(Carbon::now()),0);// str_limit(Hash::make(Carbon::now()),4).str_limit(Hash::make(Carbon::now()),4);
            $schID = Keygen::numeric(22)->generate(true);//substr(Hash::make($code),0,16);
            $sch = new School();
            $sch->schoolID = $schID;
            $sch->schoolname=$request['schname'];
            $sch->email="";//$request['cmail'];
            $sch->pswd = $code;
            $sch->created_at = Carbon::now();
            $sch->updated_at=Carbon::now();
            $sch->save();

            $querydata = ['email'=>$request['schmail'],'confcode'=>$code,'schid'=>$schID];
            $querystring = http_build_query($querydata);

            $link = route('sch_confirm') . '?' .$querystring;


            $data = array('name' => $request['schmail'], 'link' => $link);
            $to = $request['schmail'];
            Mail::send('mails.register.students.wc.mail', $data, function ($message) use ($to) {
                $message->to($to, $to)
                    ->subject(trans('messages.schoolregister_create_email_header'));
                $message->from('info@diplocover.at', 'DiploCover');
            });

        }else{
            return redirect()->back()->with('fail', trans('messages.schoolregister_create_fail'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*
     *
     * public function confirm(Request $request)
    {
        if(isset($_GET['tchid']) and isset($_GET['email']) and isset($_GET['confirmcode']) and isset($_GET['ti'])) {

            if(!$tch = Teacher::where('teachID', $_GET['tchid'])->first()){
                $errormsg = trans('messages.schoolregister_confirm_link_fail_teach');
                return view('register.students.wc.fail', compact('errormsg'));
            }
            if($tch->email != null or $tch->email != ""){
                $errormsg = trans('messages.schoolregister_confirm_link_fail_email');
                return view('register.students.wc.fail', compact('errormsg'));
            }else{
                if ($tch->sregistercode != $_GET['confirmcode']) {
                    $errormsg = trans('messages.schoolregister_confirm_link_confcode');

                    return view('register.students.wc.fail', compact('errormsg'));
                } else {
                    if(Carbon::now()->diffInMinutes($_GET['ti']['date']) < 2160){
                        $tch->update(['email'=>$_GET['email']]);
                        $request->session()->put('tchid', $_GET['tchid']);
                        $request->session()->put('email', $_GET['email']);
                        return redirect('teacher/c/further/');//view('register.teacher.further');
                    }else{
                        $errormsg = trans('messages.schoolregister_confirm_link_fail_expired');
                        return view('register.students.wc.fail', compact('errormsg'));
                    }
                }
            }
        }else{
            $errormsg = trans('messages.schoolregister_confirm_link_email_fail');
            return view('register.students.wc.fail', compact('errormsg'));
        }
    }
    public function further(Request $request)
    {
        //
        if($this->validate($request,[
            'comname'=>'required|max:100',
            'comweb'=>'required|max:100',
            'comail'=>'max:20',
            'coname'=>'max:40',
            'tel'=>'required| max:20',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'add' => 'max:2048',
            'codesc' => 'required|max:1000',
        ])) {
            if ($c = Company::where('companyID', Auth::user()->companyID)->first()) {
                $st_prof = stud_profile::where('sid', $request->session()->get('sid'))->get();
                $st = Student::where('sID',$request->session()->get('sid'))->first();
                if (count($st_prof) < 1) {
                    $name = $request['firstname'].$request['lastname'];
                    if ($st->update(['firstname' => $request['firstname'], 'lastname' => $request['lastname'],'name' => $name, 'title' => $request['title'], 'phonenumber' => $request['phonenumber']])) {
                        $st_pr = new stud_profile();
                        $st_pr->sID = $st->sID;
                        $st_pr->aboutme = $request['abme'];
                        $st_pr->intressts = $request['intr'];
                        $sch = $st->schoolb->schoolname;
                        $stool = "Student " . $sch;
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
                        $st->update(['email' => $request->session()->get('email'), 'password' => Hash::make($request['pswd'])]);  //Hash::make(
                        $red = urlencode($st->sID);

                        return redirect('/login');//redirect('/student/'.$red.'/profile');

                    } else {
                        $errormsg = trans('messages.schoolregister_further_db_error');
                        return view('register.students.wc.fail', compact('errormsg'));
                    }
                }else{
                    $errormsg = trans('messages.schoolregister_further_st_prof_fail');
                    return view('register.students.wc.fail', compact('errormsg'));
                }
            } else {
                $errormsg = trans('messages.schoolregister_further_session_error');
                return view('register.students.wc.fail', compact('errormsg'));
            }

        } else {
            $errormsg = trans('messages.schoolregister_further_link_fail');
            return view('register.students.wc.fail', compact('errormsg'));
        }
    }
     *
     */


}
