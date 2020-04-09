<?php

namespace App\Http\Controllers\Profile;

use App\Models\DA;
use App\Models\DAPhase;
use App\Models\Grade;
use App\Models\School;
use App\Models\stud_profile;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;

class TeacherProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:teacher');
    }


    public function eedit()
    {
        //

        $tch = Auth::user();
        $school = School::where('schoolID',$tch->schoolID)->first();
        $das = DA::where('teachID',$tch->teachID)->get();
        $grades = Grade::where('teachID',$tch->teachID)->get();

        return view('/profiles/teacher/edit',compact('tch','school','das','grades'));

    }

    public function teachindex($sid)
    {
        //$sid =  urldecode($sid);
        $st = Student::where('sid', $sid)->first();
        if($st == null){
            return view('404');
        }
        if($st->teamID != null and $st != ""){
            if(count(Team::where('teamID',$st->teamID)->get()) ==1){
                $team = Team::where('teamID',$st->teamID)->first();
                if(count(DA::where('teamID',$team->teamID)->get()) <1){
                    $da=0;
                }else{
                    $da = DA::where('teamID',$team->teamID)->first();
                }
            }else{
                $team = null;
            }
        }
        $st_prf = stud_profile::where('sID',$sid)->first();
        if($st_prf == null){
            return view('404');
        }

        return view('profiles.student.teach_st_prof',compact('st','st_prf','team','da'));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updpswd(Request $request)
    {
        // this validate part doesn't work!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        if($this->validate($request,[
            'oldpswd' => 'max:80',
            'newpswd' => 'max:80|min:10',
            'newpswd2' => 'max:80|min:10',
        ])) {

            $tch = Auth::user();
            // $st_pr = stud_profile::where('sID', Auth::user()->sID)->first();
            //dd($st);

            if (Hash::check($request['oldpswd'],$tch->password)) {
                if ($request['newpswd'] == $request['newpswd2']) {
                    $tch->update(['password' =>Hash::make($request['newpswd'])]);
                    return redirect()->back()->with('success', trans('messsages.teacherprofile_updpswd_success'));
                } else {
                    return redirect()->back()->with('fail', trans('messages.teacherprofile_updpswd_rp_fail'));
                }
            } else {
                return redirect()->back()->with('fail', trans('messages.teacherprofile_updpswd_ver_fail'));
            }
        }
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function udfile(Request $request)
    {
        if($this->validate($request,[
            'prpic' => 'max:2048|mimes:jpeg,png,jpg,gif,svg',
        ])) {

            $tch = Auth::user();
            // $st_pr = stud_profile::where('sID', Auth::user()->sID)->first();
            //dd($st);

            if ($request->hasFile('prpic')) {
                $pic = $request->file('prpic');
                $pic->move('storage/uploads/documents/teacher/' . $tch->teachID . '/', $pic->getClientOriginalName());
                $pdir = 'storage/uploads/documents/teacher/' . $tch->teachID . '/' . $pic->getClientOriginalName();
                $tch->prfpic = $pdir;
                $tch->updated_at = Carbon::now();
                $tch->save();
                //$tch->update(['prfpic' => $pdir,'updated_at' => Carbon::now()]);
                //dd($tch);
            }
            //$red = urlencode($st->sID);

            return redirect()->back()->with('success',trans('messages.teacherprofile_udfile_success'));

            //
        }else{
            return redirect()->back()->with('fail',trans('messages.teacherprofile_udfile_fail'));
        }
    }

    public function udinfo(Request $request)
    {
        //
        if($this->validate($request,[
            'title'=>'max:20',
            'firstname'=>'max:100',
            'lastname'=>'max:100',
            'email'=>'max:60',
            'job'=>'max:20',
            'jobdesc'=>'max:1522',
            'phonenumber'=>'max:20',
        ])) {
            $tch = Teacher::where('teachID',Auth::user()->teachID)->first();

            if(isset($request['firstname'])){
                if($request['firstname'] != null and $request['firstname'] != "") {
                    $name = $request['firstname'] . ' ' . $tch->lastname;
                    $tch->update(['firstname' => $request['firstname'], 'name' => $name, 'updated_at' => Carbon::now()]);
                }
            }
            if(isset($request['lastname'])){
                if($request['lastname'] != null and $request['lastname'] != "") {
                    $name2 = $tch->firstname . ' ' . $request['lastname'];
                    $tch->update(['lastname' => $request['lastname'], 'name' => $name2, 'updated_at' => Carbon::now()]);
                }

            }
            if(isset($request['email'])){
                if($request['email'] != null and $request['email'] != "") {
                    if (Auth::user()->email != $request['email']) {
                        if (count(Teacher::where('email', $request['email'])->get()) != 0) {
                            return redirect()->back()->with('fail', __('messages.employee_edit_email_update_fail'));
                        } else {
                            $tch->update(['email' => $request['email'], 'updated_at' => Carbon::now()]);
                        }
                    }

                }

            }
            if(isset($request['title'])){
                if($request['title'] != null and $request['title'] != "") {
                    $tch->update(['title' => $request['title'], 'updated_at' => Carbon::now()]);
                }

            }
            if(isset($request['job'])){
                if($request['job'] != null and $request['job'] != "") {
                    $tch->update(['job' => $request['job'], 'updated_at' => Carbon::now()]);
                }

            }
            if(isset($request['jobdesc'])){
                if($request['jobdesc'] != null and $request['jobdesc'] != "") {
                    $tch->update(['jobdesc' => $request['jobdesc'], 'updated_at' => Carbon::now()]);
                }

            }
            if(isset($request['phonenumber'])){
                if($request['phonenumber'] != null and $request['phonenumber'] != "") {
                    $tch->update(['phonenumber' => $request['phonenumber'], 'updated_at' => Carbon::now()]);
                }
            }

            return redirect()->back()->with('success', trans('messages.teacherprofile_udinfo_success'));


        }
    }

    public function DAshboard(){

        $tch = Auth::user();
        $das = DA::where('teachID',Auth::user()->teachID)->get();
        $tchdashe = DA::where('emplID', Auth::user()->teachID)->get();
        $tchdasz = DA::where('emplIDz', Auth::user()->teachID)->get();
        $teams = Team::where('teachID',Auth::user()->teachID)->get();
        $phases = ["" => Lang::get('form.companyDA_stedit_selectph')] + DAPhase::pluck('status', 'phaseID')->all();



        $school = School::where('schoolID',$tch->schoolID)->first();

        return view('/profiles/teacher/grade/dashboard',compact('tch','school','das','teams','tchdashe','tchdasz','phases'));
    }


    public function gradedashboard(){

        $tch = Auth::user();
        //$das = DA::where('teachID',Auth::user()->teachID)->get();
        //$teams = Team::where('teachID',Auth::user()->teachID)->get();
        $grades = Grade::where('teachID',Auth::user()->teachID)->get();
        $gradestsinfo = array();
        $stsc=0;      //Student with Access to DiploCover
        $stswda=0;      //Student with DA
        $stswoda=0;     //Student without DA
        $stswot=0;      //Student without TEam
        $stswt=0;      //Student with TEam
        $stsnr=0;       //Student not registerd
        $stswotbwda=0;   // Students without Team but with DA
        $stswtbwoda=0;   // Students with Team but without DA
        $stswtada=0;   // Students with Team and with DA
        foreach($grades as $grade){
            $gradestsinfo = $gradestsinfo + ['stsc'.$grade->gradeID =>0,'stswda'.$grade->gradeID =>0,'stswoda'.$grade->gradeID =>0,'stswot'.$grade->gradeID =>0,
                    'stswt'.$grade->gradeID =>0,'stsnr'.$grade->gradeID =>0,'stswotbwda'.$grade->gradeID =>0,'stswtbwoda'.$grade->gradeID =>0,'stswtada'.$grade->gradeID =>0,];
            if($grade->students()->get()){
                foreach ($grade->students()->get() as $st) {
                    $gradestsinfo['stsc' . $grade->gradeID]++;

                    if (($st->name == null or $st->name == "") and ($st->email == null or $st->email == "")) {
                        $gradestsinfo['stsnr' . $grade->gradeID]++;

                    } else {
                        if ($st->teamID == null or $st->teamID == "") {
                            $gradestsinfo['stswot' . $grade->gradeID]++;

                            if ($st->DA()->get()) {
                                $gradestsinfo['stswda' . $grade->gradeID]++;

                            } else {
                                $gradestsinfo['stswotbwda' . $grade->gradeID]++;
                                $gradestsinfo['stswoda'.$grade->gradeID]++;;
                            }
                        } else {
                            $gradestsinfo['stswt'.$grade->gradeID]++;
                            if ($st->team()->get()[0]->DA()->get()) {
                                $gradestsinfo['stswda'.$grade->gradeID]++;
                                $gradestsinfo['stswtada'.$grade->gradeID]++;
                            } else {
                                $gradestsinfo['stswtbwoda'.$grade->gradeID]++;
                                $gradestsinfo['stswoda'.$grade->gradeID]++;
                            }
                        }
                    }
                }
            }

            $stsc=$stsc + $gradestsinfo['stsc'.$grade->gradeID];      //Student with Access to DiploCover
            $stswda=$stswda + $gradestsinfo['stswda'.$grade->gradeID];        //Student with DA
            $stswoda=$stswoda + $gradestsinfo['stswoda'.$grade->gradeID];       //Student without DA
            $stswot=$stswot + $gradestsinfo['stswot'.$grade->gradeID];        //Student without TEam
            $stswt=$stswt + $gradestsinfo['stswt'.$grade->gradeID];        //Student with TEam
            $stsnr=$stsnr + $gradestsinfo['stsnr'.$grade->gradeID];        //Student not registerd
            $stswotbwda=$stswotbwda + $gradestsinfo['stswotbwda'.$grade->gradeID];     // Students without Team but with DA
            $stswtbwoda=$stswtbwoda + $gradestsinfo['stswtbwoda'.$grade->gradeID];     // Students with Team but without DA
            $stswtada=$stswtada + $gradestsinfo['stswtada'.$grade->gradeID];     // Students with Team and with DA

        }


//'das','teams',
        $school = School::where('schoolID',$tch->schoolID)->first();

        return view('/profiles/teacher/grade/gradedashboard',compact('tch','school','grades','sts','stsc','stswda','stswoda','stswot','stswt','stsnr','stswotbwda','stswtbwoda','stswtada','gradestsinfo'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function teamaddtch()
    {
        //
        if(isset($_GET['tid']) and isset($_GET['time'])){
            if(Carbon::now()->diffInMinutes($_GET['time']['date']) < 2160){
                $tch  = Auth::user();
                $tid = $_GET['tid'];
                $tm = Team::where('teamID',$tid)->first();
                $tm->update(['teachID'=>$tch->teachID]);
                //dd($st);
                $tch->update(['teamID' => $tid]);

                return redirect('/tchome')->with('success',trans('messages.teacherprofile_teamadd_success'));
            }else{
                $errormsg=trans('messages.teacherprofile_teamadd_exp_fail');
                return view('register.students.wc.fail',compact('errormsg'));
            }

        }else{
            $errormsg=trans('messages.teacherprofile_teamadd_invalid_fail');
            return view('register.students.wc.fail',compact('errormsg'));
        }


    }


    public function delete(){

        $tch = Auth::user();
        $tch->update(['deleted_ip_address'=>\request()->ip()]);
        $tch->delete();
        return redirect('/');


    }


}
