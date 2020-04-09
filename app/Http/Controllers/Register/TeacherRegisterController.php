<?php

namespace App\Http\Controllers\Register;

use App\Models\Role;
use App\Models\Teacher;
use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Keygen\Keygen;

class TeacherRegisterController extends Controller
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
        ]);
        $teach = Teacher::where('email',$request['email'])->get();
        if(!(count($teach)<1)){
            return redirect()->back()->with('fail',Lang::get('messages.teacherRegister_register_emailfail'));
        }else {
            $teachID = Keygen::numeric('22')->generate(true);
            $conf = Keygen::numeric(10)->generate(true);
            $pswd = Keygen::numeric(10)->generate(true);

            $teacher = new Teacher();
            $teacher->teachID= $teachID;

            $now = Carbon::now(new DateTimeZone('Europe/Vienna'));
            if($request->has('perm')){
                if($request['perm'] == 2){
                    $teacher->assignRole('School');

                }else{
                    $teacher->assignRole('teacher');
                }
            }else{
                $teacher->assignRole('teacher');

            }

            $teacher->sregistercode= $conf;
            $teacher->name= $request['firstname']. ' '.$request['lastname'];
            $teacher->firstname= $request['firstname'];
            $teacher->lastname= $request['lastname'];
            $teacher->email= Null;
            $teacher->password = $pswd;
            $teacher->roleID= 0;
            $teacher->updated_at= $now;
            $teacher->created_at= $now;
            $teacher->save();

            $querydata = ['tchid'=>$teachID, 'email'=>$request['email'],'confirmcode'=>$conf,'ti'=>Carbon::now()];
            $querystring = http_build_query($querydata);

            $link = route('tch_confirm') . '?' .$querystring;


            $data = array('name' => $request['email'], 'link' => $link);
            $to = $request['email'];
            Mail::send('mails.register.students.wc.mail', $data, function ($message) use ($to) {
                $message->to($to, $to)
                    ->subject(trans('messages.teacherregister_register_email_header'));
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
    public function schregisterteach(Request $request)
    {

        $this->validate($request,[
            'firstname'=>'required|max:70',
            'lastname'=>'required|max:70',
            'email'=>'required',
        ]);
        $teach = Teacher::where('email',$request['email'])->get();
        if(!(count($teach)<1)){
            $errormsg = trans('messages.teacherregister_schregister_email_fail');
            return view('register.students.wc.fail', compact('errormsg'));
        }else {
            $teachID = Keygen::numeric('22')->generate(true);
            $conf = Keygen::numeric(10)->generate(true);
            $pswd = Keygen::numeric(10)->generate(true);

            $teacher = new Teacher();
            $teacher->teachID= $teachID;

            $now = Carbon::now(new DateTimeZone('Europe/Vienna'));
            if($request->has('perm')){
                if($request['perm'] == 2){
                    $teacher->assignRole('School');

                }else{
                    $teacher->assignRole('teacher');
                }
            }else{
                $teacher->assignRole('teacher');

            }

            $teacher->sregistercode= $conf;
            $teacher->name= $request['firstname']. ' '.$request['lastname'];
            $teacher->firstname= $request['firstname'];
            $teacher->lastname= $request['lastname'];
            $teacher->schoolID= Auth::user()->schoolID;
            $teacher->email= Null;
            $teacher->password = $pswd;
            $teacher->roleID= 0;
            $teacher->updated_at= $now;
            $teacher->created_at= $now;
            $teacher->save();

            $querydata = ['tchid'=>$teachID, 'email'=>$request['email'],'confirmcode'=>$conf,'ti'=>Carbon::now()];
            $querystring = http_build_query($querydata);

            $link = route('tch_confirm') . '?' .$querystring;


            $data = array('name' => $request['email'], 'link' => $link);
            $to = $request['email'];
            Mail::send('mails.register.students.wc.mail', $data, function ($message) use ($to) {
                $message->to($to, $to)
                    ->subject(trans('messages.teacherregister_schregister_email_header'));
                $message->from('info@diplocover.at', 'DiploCover');
            });


            return redirect('school/manage/teacher');
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
        if(isset($_GET['tchid']) and isset($_GET['email']) and isset($_GET['confirmcode']) and isset($_GET['ti'])) {

            if(!$tch = Teacher::where('teachID', $_GET['tchid'])->first()){
                $errormsg = trans('messages.teacherregister_confirm_link_fail_teach');
                return view('register.students.wc.fail', compact('errormsg'));
            }
            if($tch->activated != 0){
                $errormsg = trans('messages.teacherregister_confirm_st_prof_fail');
                return view('register.students.wc.fail', compact('errormsg'));
            }else{
                if ($tch->sregistercode != $_GET['confirmcode']) {
                    $errormsg = trans('messages.teacherregister_confirm_link_scode');

                    return view('register.students.wc.fail', compact('errormsg'));
                } else {
                    if(Carbon::now()->diffInMinutes($_GET['ti']['date']) < 2160){
                        $tch->update(['email'=>$_GET['email']]);
                        $request->session()->put('tchid', $_GET['tchid']);
                        $request->session()->put('email', $_GET['email']);
                        return redirect('teacher/c/further/');//view('register.teacher.further');
                    }else{
                        $errormsg = trans('messages.teacherregister_confirm_link_fail_expired');
                        return view('register.students.wc.fail', compact('errormsg'));
                    }
                }
            }
        }else{
            $errormsg = trans('messages.teacherregister_confirm_link_email_fail');
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
            'abme'=>'max:1000',
            'prpic'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'intr'=>'max:200',
            'password'=>'required| max:60',
        ])) {
            if (!($request->session()->get('tchid') == null)) {

                if ($tch = Teacher::where('teachID', $request->session()->get('tchid'))->first()) {

                    $name = $request['firstname'].' '.$request['lastname'];
                    $pswd = Hash::make($request['password']);
                    $tch->title = $request['title'];
                    $tch->name = $name;
                    $tch->firstname = $request['firstname'];
                    $tch->lastname = $request['lastname'];
                    $tch->phonenumber = $request['phonenumber'];

                    if ($request->hasFile('prpic')) {
                        $pic = $request->file('prpic');
                        $pic->move('storage/uploads/documents/' . $tch->teachID . '/', $pic->getClientOriginalName());
                        $pdir =  'storage/uploads/documents/' . $tch->teachID . '/' . $pic->getClientOriginalName();
                        $tch->prfpic = $pdir;
                        //Session::put('imgdir', $pdir);
                    }
                    $tch->abme = $request['abme'];
                    $tch->intres = $request['intr'];
                    $tch->password = $pswd;
                    $tch->updated_at = Carbon::now();
                    $tch->save();
                    return redirect('/teacher/login');//redirect('/student/'.$red.'/profile');


                    /*} else {
                            $errormsg = "Sry we our Database doesn't want to save your information. :q Please try again in a few minutes! Thx :D";
                            return view('register.students.wc.fail', compact('errormsg'));
                        }*/
                } else {
                    $errormsg = trans('messages.teacherregister_further_session_error');
                    return view('register.students.wc.fail', compact('errormsg'));
                }

            } else {
                $errormsg = trans('messages.teacherregister_further_link_fail');
                return view('register.students.wc.fail', compact('errormsg'));
            }
        }
    }

}
