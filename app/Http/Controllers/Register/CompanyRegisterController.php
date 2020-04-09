<?php

namespace App\Http\Controllers\Register;

use App\Models\Company;
use App\Models\Employee;
use App\Models\Student;
use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Keygen\Keygen;

class CompanyRegisterController extends Controller
{


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
            'cname'=>'required|max:100'
        ]);
        $emp = Employee::where('email',$request['email'])->get();
        if(!(count($emp)<1)){
            $errormsg = trans('messages.companyregister_register_email_fail');
            return view('register.students.wc.fail', compact('errormsg'));
        }else {
            $empID = random_bytes(10);
            $empID = Hash::make($empID);
            $conf = random_int(100000, 9999999);
            $pswd = random_int(100000, 9999999);

            $cid = random_bytes(5);
            $cid = Hash::make($cid);
            $cidl = str_limit($cid,16,30);
            $cid = Hash::make($cidl);


            $now = Carbon::now(new DateTimeZone('Europe/Vienna'));

            $comp = new Company();
            $comp->companyID = $cid;
            $comp->compname = $request['cname'];
            $comp->email = $request['email'];
            $comp->emplID = $empID;
            $comp->activated = 0;
            $comp->create_ip_address = request()->ip();
            $comp->created_at = $now;
            $comp->updated_at = $now;
            $comp->save();

            $empl = new Employee();
            $empl->emplID= $empID;
            $empl->name= $request['firstname']. ' '.$request['lastname'];
            $empl->firstname= $request['firstname'];
            $empl->lastname= $request['lastname'];
            $empl->companyID = $cid;
            $empl->email= $request['email'];
            $empl->password = $pswd;
            $empl->confirmcode = $conf;
            $empl->status = 0;
            $empl->remember_token = Hash::make(random_bytes(5));
            $empl->activated = 0;
            $empl->token = Hash::make(random_bytes(5));
            $empl->admin_ip_address = request()->ip();
            $empl->updated_at= $now;
            $empl->created_at= $now;
            $empl->save();
            $empl->assignRole('Company');

            $querydata = ['emplID'=>$empID, 'email'=>$request['email'],'cid'=>$cid, 'confirmcode'=>$conf,'ti'=>Carbon::now()];
            $querystring = http_build_query($querydata);

            $link = route('emp_confirm') . '?' .$querystring;


            $data = array('name' => $request['email'], 'link' => $link);
            $to = $request['email'];
            Mail::send('mails.register.students.wc.mail', $data, function ($message) use ($to) {
                $message->to($to, $to)
                    ->subject(trans('messages.companyregister_register_email_header'));
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
            'cname'=>'required|max:100',
            'cmail'=>'required|max:100',
        ])){
            $code =Keygen::numeric('14')->generate(true);//str_limit(Hash::make(Carbon::now()),4).hexdec(uniqid()).str_random(4); Hash::make(Carbon::now()),0);// str_limit(Hash::make(Carbon::now()),4).str_limit(Hash::make(Carbon::now()),4);
            $cID = Keygen::numeric('22')->generate(true);
            $c = new Company();
            $c->companyID = $cID;
            $c->name=$request['cname'];
            $c->email="";//$request['cmail'];
            $c->pswd = $code;
            $c->created_at = Carbon::now();
            $c->updated_at=Carbon::now();
            $c->save();

            $querydata = ['email'=>$request['cmail'],'confcode'=>$code,'cdo'=>$cID];
            $querystring = http_build_query($querydata);

            $link = route('comp_confirm') . '?' .$querystring;


            $data = array('name' => $request['cmail'], 'link' => $link);
            $to = $request['cmail'];
            Mail::send('mails.register.students.wc.mail', $data, function ($message) use ($to) {
                $message->to($to, $to)
                    ->subject(trans('messages.companyregister_create_email_header'));
                $message->from('info@diplocover.at', 'DiploCover');
            });

        }else{
            return redirect()->back()->with('fail',trans('messages.companyregister_create_fail'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function confirm(Request $request)
    {
        if(isset($_GET['email']) and isset($_GET['confcode']) and isset($_GET['cdo'])) {

            if(!$c = Company::where('companyID',$_GET['cdo'])->first()){
                $errormsg = trans('messages.companyregister_confirm_link_fail_comp');
                return view('register.students.wc.fail', compact('errormsg'));
            }
            if($c->email != null or $c->email != ""){
                $errormsg = trans('messages.companyregister_confirm_link_fai_email');
                return view('register.students.wc.fail', compact('errormsg'));
            }else{
                if($c->pswd == $_GET['confcode']){
                    if($c->update(['email' => $_GET['email']])){
                        return view('create.company.further');
                    }else{
                        $errormsg = trans('messages.companyregister_confirm_link_fail_scode');
                        return view('register.students.wc.fail', compact('errormsg'));
                    }

                }else{
                    $errormsg = trans('messages.companyregister_confirm_concode');
                    return view('register.students.wc.fail', compact('errormsg'));
                }


            }
        }else{
            $errormsg = trans('messages.companyregister_confirm_link_email_fail');
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
                    $st = Student::where('sID',$request->session()->get('sid'))->first();
                    $st_prof = stud_profile::where('sid', $request->session()->get('sid'))->get();
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
                            $errormsg = trans('messages.companyregister_further_db_error');
                            return view('register.students.wc.fail', compact('errormsg'));
                        }
                    }else{
                        $errormsg = "Sry it seems you already have a profile page :D";
                        return view('register.students.wc.fail', compact('errormsg'));
                    }
                } else {
                    $errormsg = trans('messages.companyregister_further_session_error');
                    return view('register.students.wc.fail', compact('errormsg'));
                }

            } else {
                $errormsg = trans('messages.companyregister_further_link_fail');
                return view('register.students.wc.fail', compact('errormsg'));
            }
    }

}
