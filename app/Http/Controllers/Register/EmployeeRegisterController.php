<?php

namespace App\Http\Controllers\Register;

use App\Models\Employee;
use App\Models\Role;
use App\Models\Teacher;
use DateTimeZone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class EmployeeRegisterController extends Controller
{

    public function regmailwoc(){




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
        ]);
        $emp = Employee::where('email',$request['email'])->get();
        if(!(count($emp)<1)){
            $errormsg = trans('messages.employeeregister_register_email_fail');
            return view('register.students.wc.fail', compact('errormsg'));
        }else {
            $empID = random_bytes(10);
            $empID = Hash::make($empID);
            $conf = random_int(100000, 9999999);
            $pswd = random_int(100000, 9999999);

            $now = Carbon::now(new DateTimeZone('Europe/Vienna'));

            $empl = new Employee();
            $empl->emplID= $empID;
            $empl->name= $request['firstname']. ' '.$request['lastname'];
            $empl->firstname= $request['firstname'];
            $empl->lastname= $request['lastname'];
            $empl->companyID = Auth::user()->companyID;
            $empl->assignRole('Employee');
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


            $querydata = ['emplID'=>$empID, 'email'=>$request['email'],'cid'=>Auth::user()->companyID, 'confirmcode'=>$conf,'ti'=>Carbon::now()];
            $querystring = http_build_query($querydata);

            $link = route('emp_confirm') . '?' .$querystring;


            $data = array('name' => $request['email'], 'link' => $link);
            $to = $request['email'];
            Mail::send('mails.register.students.wc.mail', $data, function ($message) use ($to) {
                $message->to($to, $to)
                    ->subject(trans('messages.employeeregister_register_email_header'));
                $message->from('info@diplocover.at', 'DiploCover');
            });


            return view('register.students.wc.success');
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function registerroot(Request $request)
    {

        $this->validate($request,[
            'firstname'=>'required|max:70',
            'lastname'=>'required|max:70',
            'email'=>'required',
            'cid'=>'required',
        ]);
        $emp = Employee::where('email',$request['email'])->get();
        if(!(count($emp)<1)){
            $errormsg = trans('messages.employeeregister_registerroot_email_fail');
            return view('register.students.wc.fail', compact('errormsg'));
        }else {
            $empID = random_bytes(10);
            $empID = Hash::make($empID);
            $conf = random_int(100000, 9999999);
            $pswd = random_int(100000, 9999999);

            $now = Carbon::now(new DateTimeZone('Europe/Vienna'));

            $empl = new Employee();
            $empl->emplID= $empID;
            $empl->name= $request['firstname']. ' '.$request['lastname'];
            $empl->firstname= $request['firstname'];
            $empl->lastname= $request['lastname'];
            $empl->companyID = $request['cid'];
            $empl->assignRole('Employee');
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


            $querydata = ['emplID'=>$empID, 'email'=>$request['email'],'cid'=>$request['cid'], 'confirmcode'=>$conf,'ti'=>Carbon::now()];
            $querystring = http_build_query($querydata);

            $link = route('emp_confirm') . '?' .$querystring;


            $data = array('name' => $request['email'], 'link' => $link);
            $to = $request['email'];
            Mail::send('mails.register.students.wc.mail', $data, function ($message) use ($to) {
                $message->to($to, $to)
                    ->subject(trans('messages.employeeregister_registerroot_email_header'));
                $message->from('info@diplocover.at', 'DiploCover');
            });


            return view('register.students.wc.success');
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
        if(isset($_GET['emplID']) and isset($_GET['email']) and isset($_GET['cid']) and isset($_GET['confirmcode']) and isset($_GET['ti'])) {

            if(!$emp = Employee::where('emplID', $_GET['emplID'])->first()){
                $errormsg = trans('messages.employeeregister_confirm_link_fail_empl');
                return view('register.students.wc.fail', compact('errormsg'));
            }
            if($emp->email == null or $emp->email == ""){
                $errormsg = trans('messages.employeeregister_confirm_link_fail_email_noemail');
                return view('register.students.wc.fail', compact('errormsg'));
            }else{
               if($emp->activated == 1){
                   $errormsg = trans('messages.employeeregister_confirm_link_fail_email');
                   return view('register.students.wc.fail', compact('errormsg'));
               } else{
                   if ($emp->confirmcode != $_GET['confirmcode']) {
                       $errormsg = trans('messages.employeeregister_confirm_link_fail_confcode');

                       return view('register.students.wc.fail', compact('errormsg'));
                   } else {
                       if($emp->companyID != $_GET['cid']){
                           $errormsg = trans('messages.employeeregister_confirm_link_fail_cid');
                           return view('register.students.wc.fail', compact('errormsg'));
                       }
                       if(Carbon::now()->diffInMinutes($_GET['ti']['date']) < 2160){
                           $emp->update(['email'=>$_GET['email']]);
                           $request->session()->put('emplID', $_GET['emplID']);
                           $request->session()->put('email', $_GET['email']);
                           return redirect('employee/c/further/');//view('register.teacher.further');
                       }else{
                           $errormsg = trans('messages.employeeregister_confirm_link_fail_expired');
                           return view('register.students.wc.fail', compact('errormsg'));
                       }
                   }
               }

            }
        }else{
            $errormsg = trans('messages.employeeregister_confirm_link_email_fail');
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
            'job'=>'max:60',
            'jobdesc'=>'max:1522',

            'prpic'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'password'=>'required| max:60',
        ])) {
            if (!($request->session()->get('emplID') == null)) {

                if ($emp = Employee::where('emplID', $request->session()->get('emplID'))->first()) {

                    $name = $request['firstname'].' '.$request['lastname'];
                    $pswd = Hash::make($request['password']);
                    $emp->title = $request['title'];
                    $emp->job = $request['job'];
                    $emp->jobdesc = $request['jobdesc'];
                    $emp->name = $name;
                    $emp->firstname = $request['firstname'];
                    $emp->lastname = $request['lastname'];
                    $emp->phonenumber = $request['phonenumber'];
                    $emp->password = $pswd;

                    if ($request->hasFile('prpic')) {
                        $pic = $request->file('prpic');
                        $pic->move('storage/uploads/documents/' . $emp->emplID . '/', $pic->getClientOriginalName());
                        $pdir =  'storage/uploads/documents/' . $emp->emplID . '/' . $pic->getClientOriginalName();
                        $emp->prfpic = $pdir;
                        //Session::put('imgdir', $pdir);
                    }
                    //$tch->intres = $request['intr'];
                    $emp->activated = 1;
                    $emp->signup_confirmation_ip_address = request()->ip();
                    $emp->updated_at = Carbon::now();
                    $emp->save();
                    return redirect('/employee/login');//redirect('/student/'.$red.'/profile');


                    /*} else {
                            $errormsg = "Sry we our Database doesn't want to save your information. :q Please try again in a few minutes! Thx :D";
                            return view('register.students.wc.fail', compact('errormsg'));
                        }*/
                } else {
                    $errormsg = trans('messages.employeeregister_further_session_error');
                    return view('register.students.wc.fail', compact('errormsg'));
                }

            } else {
                $errormsg = trans('messages.employeeregister_further_link_fail');
                return view('register.students.wc.fail', compact('errormsg'));
            }
        }
    }

}
