<?php

namespace App\Http\Controllers\Profile;

use App\Models\DA;
use App\Models\DAPhase;
use App\Models\School;
use App\Models\Student;
use App\Models\Teacher;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

class SchoolProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:teacher');
    }

    public function index(){

        $tch = Auth::user();
        $school = School::where('schoolID',Auth::user()->schoolID)->first();
        $tchs = Teacher::where('schoolID',Auth::user()->schoolID)->get();
        $schdas = DA::where('schoolID', Auth::user()->schoolID)->get();
        if($tch->hasrole('School')){
            $perm = 1;
            return view('profiles.school.schome',compact('tch','school','tchs','perm','schdas'));
        }else{
            return redirect()->back->with('fail',trans('messages.schoolprofile_index__fail'));
        }



    }


    public function add(){

        $comp = Company::where('companyID',Auth::user()->companyID);

        return view('profiles.company.addemp',compact('comp'));

    }
    public function addemployee(Request $request){

        $this->validate($request,[
            'firstname'=>'required|max:70',
            'lastname'=>'required|max:70',
            'email'=>'required',
        ]);
        $emp = Employee::where('email',$request['email'])->get();
        if(!(count($emp)<1)){
            $errormsg = trans('schoolprofile_add_emp_fail');
            return view('register.students.wc.fail', compact('errormsg'));
        }else {
            $empID = Keygen::numeric(18)->generate(true);
            $conf = random_int(100000, 9999999);
            $pswd = random_int(100000, 9999999);

            $now = Carbon::now(new \DateTimeZone('Europe/Vienna'));

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
                    ->subject(trans('messages.schoolprofile_add_email_header'));
                $message->from('info@diplocover.at', 'DiploCover');
            });


            return view('register.students.wc.success');
        }
    }

    public function empm(){

        $emp= Auth::user();
        if(!($comp=Company::where('companyID',$emp->companyID)->where('emplID',$emp->emplID)->first())){
            return redirect()->back()->with('fail',trans('messages.schoolprofile_empm__empl_fail'));
        }

        $emps = Employee::where('companyID',$emp->companyID)->get();

        return view('profiles/company/empm',compact('emp','comp','emps'));

    }

    public function schedit(){

        $tch = Auth::user();
        $school = School::where('schoolID',$tch->schoolID)->first();

        return view('/profiles/school/edit',compact('tch','school'));
    }
    public function DAshboard(){

        $tch = Auth::user();
        $tchdas = Teacher::where('schoolID', Auth::user()->schoolID)->get();
        $das = DA::where('schoolID',Auth::user()->schoolID)->get();
        $phases = ["" => Lang::get('form.companyDA_stedit_selectph')] + DAPhase::pluck('status', 'phaseID')->all();

        $sts = Student::where('schoolID',Auth::user()->schoolID)->get();
        $stsc=0;      //Student with Access to DiploCover
        $stswda=0;      //Student with DA
        $stswoda=0;     //Student without DA
        $stswot=0;      //Student without TEam
        $stswt=0;      //Student with TEam
        $stsnr=0;       //Student not registerd
        $stswotbwda=0;   // Students without Team but with DA
        $stswtbwoda=0;   // Students with Team but without DA
        $stswtada=0;   // Students with Team and with DA
        foreach($sts as $st){
            $stsc = $stsc +1;
            if(($st->name == null or $st->name=="") and ($st->email == null or $st->email == "")){
                $stsnr = $stsnr +1;
            }else{
                if($st->teamID == null or $st->teamID ==""){
                    $stswot=$stswot+1;
                    if($st->DA()->get()){
                        $stswda = $stswda +1;
                    }else{
                        $stswotbwda = $stswotbwda+1;
                        $stswoda=$stswoda+1;
                    }
                }else{
                    $stswt =$stswt +1;
                    if($st->team()->get()[0]->DA()->get()){
                        $stswda=$stswda+1;
                        $stswtada=$stswtada+1;
                    }else{
                        $stswtbwoda=$stswtbwoda+1;
                        $stswoda=$stswoda+1;
                    }
                }
            }
        }

        $school = School::where('schoolID',$tch->schoolID)->first();

        return view('/profiles/school/dashboard',compact('tch','school','phases','das', 'tchdas','sts','stsc','stswda','stswoda','stswot','stswt','stsnr','stswotbwda','stswtbwoda','stswtada'));
    }
    public function teachm(){

        $tch = Auth::user();
        $tchs = Teacher::where('schoolID',$tch->schoolID)->get();


        $school = School::where('schoolID',$tch->schoolID)->first();

        return view('/profiles/school/teachm',compact('tch','school','tchs'));
    }

    public function rmv(Request $request){
        if($this->validate($request,[
            'teachID'=>'required'
        ])){
            $tch = Teacher::where('teachID',$request['teachID'])->first();
            //dd($tch);
            $name = $tch->name;
            $tch->delete();
            return redirect()->back()->with('success',trans('messages.schoolprofile_rmv') . $name);



        }

        return view('/profiles/school/teachm',compact('tch','school','tchs'));
    }

    public function delete(){

        Auth::user()->delete();
        return redirect('/');
    }



    public function udinfo(Request $request)
    {
        //
        if($this->validate($request,[
            'schname'=>'max:100',
            'contmail'=>'max:100',
            'prpic' => 'max:2048|mimes:jpeg,png,jpg,gif,svg',
        ])) {
            $sch = School::where('schoolID', Auth::user()->schoolID)->first();
            if (isset($request['schname'])) {
                if ($request['schname'] != null and $request['schname'] != "") {
                    $sch->schoolname = $request['schname'];
                }
            }
            if (isset($request['contmail'])) {
                if ($request['contmail'] != null and $request['contmail'] != "") {
                    $sch->contmail = $request['contmail'];
                }
            }
            if ($request->hasFile('prpic')) {
                if ($request['prpic'] != null and $request['prpic'] != "") {
                    $pic = $request->file('prpic');
                    $pic->move('storage/uploads/documents/school/' . $sch->schoolID . '/', $pic->getClientOriginalName());
                    $pdir = 'storage/uploads/documents/school/' . $sch->schoolID . '/' . $pic->getClientOriginalName();
                    $sch->prfpic = $pdir;
                }
            }
            if (($request['schname'] == null or $request['schname'] == "") and ($request['contmail'] == null and $request['contmail'] == "") and ($request['prpic'] == null and $request['prpic'] == "")){
                return redirect()->back()->with('fail', trans('messages.schoolprofile_udinfo_noinfo_fail'));
            }else {
            $sch->updated_at = Carbon::now();
            $sch->save();
            return redirect()->back()->with('success',trans('messages.schoolprofile_udinfo_success'));
        }
        }else{
            return redirect()->back()->with('success',trans('messages.schoolprofile_udinfo_wrong_fail'));
        }
    }

    public function edit($teachID){

        $tch = Teacher::where('teachID',$teachID)->first();


    }
    public function remove(Request $request){
        if($this->validate($request,[
            'emplID'=>'required',
        ])){

        }
        $empl = Employee::where('emplID',$request['emplID'])->first();
        $empl->update(['deleted_ip_address'=>\request()->ip()]);
        $empl->delete();
        return redirect()->back()->with('success',trans('messages.schoolprofile_remove_success'));
    }
}
