<?php

namespace App\Http\Controllers\Teacher\Grade;

use App\Models\Grade;
use App\Models\School;
use App\Models\Student;
use App\Models\Team;
use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Keygen\Keygen;

class TeacherGradeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:teacher');
    }

    public function index($gradeID){
        $gradeID = urldecode($gradeID);
        if($grade = Grade::where('gradeID',$gradeID)->first()){
            $tch = Auth::user();
            $school = School::where('schoolID',Auth::user()->schoolID)->first();
            $students = Student::where('gradeID',$gradeID)->orderby('teamID')->get();
            $i = 0;
            if(Student::where('gradeID', $gradeID)->whereNotNull('name')->count() >= ($grade->students)/2){
                $loged = 1;
            }
            //dd($students);
            return view('profiles.teacher.grade.index',compact('grade','i','tch','school','students'));
        }
        $errormsg = trans('messages.teachergrade_index_fail');
        return view('register.students.wc.fail',compact('errormsg'));



    }

    public function edit(Request $request){
        if($this->validate($request,[
            'gradeID'=>'required',
        ]))
        $grade = Grade::where('gradeID',$request['gradeID'])->first();
        return view('profiles.teacher.grade.edit',compact('grade'));
    }

    public function update(Request $request){
        if($this->validate($request,[
        'gradeID'=>'required',
        'gradename'=>'required',
            ])){
            $grade = Grade::where('gradeID',$request['gradeID'])->first();

            $grade->update(['name'=>$request['gradename']]);
            return redirect('teacher/grade/dashboard')->with('success',trans('messages.teachergrade_update_success'));


        }else {
            return redirect()->back()->with('fail',trans('messages.teachergrade_update_fail'));
        }


    }

    public function rmv(Request $request){
        if($this->validate($request,[
            'gradeID'=>'required',
        ])) {
            $grade = Grade::where('gradeID', $request['gradeID'])->first();
            if($grade->teachID != Auth::user()->teachID){
                return redirect('/')->with('fail','Unknown ERROR !!! :O');
            }
            $sts = Student::where('gradeID',$request['gradeID'])->get();
            foreach($sts as $st){
                $st->update(['deleted_ip_address'=>\request()->ip()]);
                $st->delete();
            }
            $grade->update(['deleted_ip_address'=>\request()->ip()]);
            $grade->delete();

            return redirect()->back()->with('success',trans('messages.teachergrade_rmv_success'));
        }
    }
    public function rmvda(Request $request){
        if($this->validate($request,[
            'daID'=>'required',
        ])) {
            $da = DA::where('DAid', $request['daID'])->first();
            if($da->teachID != Auth::user()->teachID){
                return redirect('/')->with('fail','Unknown ERROR !!! :O');
            }
            $da->update(['teachID'=>""]);

            return redirect()->back()->with('success',trans('messages.teachergrade_rmvda_success'));
        }
    }
    public function rmvst(Request $request){
        if($this->validate($request,[
            'sID'=>'required',
        ])) {
            $st = Student::where('sID', $request['sID'])->first();
            $name = $st->name;
            $st->update(['deleted_ip_address'=>\request()->ip()]);
            $st->delete();

            return redirect()->back()->with('success',trans('messages.teachergrade_strmv_success').$name);
        }
    }
    public function rmvtm(Request $request){
        if($this->validate($request,[
            'teamID'=>'required',
        ])) {
            $team = Team::where('teamID', $request['teamID'])->first();
            if($team->teachID != Auth::user()->teachID){
                return redirect('/')->with('fail',trans('messges.teachergrade_rmvtm_fail'));
            }
            $team->update(['teachID'=>""]);

            return redirect()->back()->with('success',trans('messages.teachergrade_rmvtm_success'));
        }
    }





    public function new(Request $request){
        if($this->validate($request, [
            'name'=>'required|max:200',
            'amount'=>'required'
        ])){
            $tch = Auth::user();
            if(Auth::user()->schoolID == null or Auth::user()->schoolID == ""){
                return redirect()->back()->with('fail',trans('messages.teachergrade_new_fail_noschool'));
            }
            $school = School::where('schoolID',$tch->schoolID)->first();

            $gradeID = Keygen::numeric(18)->generate(true);
            $now = Carbon::now(new DateTimeZone('Europe/Vienna'));
            $sts = 0;

            $grade = new Grade();
            $grade->gradeID=$gradeID;
            $grade->schoolID=Auth::user()->schoolID;
            $grade->name=$request['name'];
            $grade->teachID=Auth::user()->teachID;
            $grade->students=$sts;
            $grade->password=" ";
            $grade->activated = 1;
            $grade->token = Keygen::numeric(12)->generate(true);
            $grade->create_ip_address = request()->ip();
            $grade->created_at=$now;
            $grade->updated_at=$now;
            $grade->save();

            $am = (int)$request['amount'];

            for ($i=0;$i<$am;$i++){
                $sid = Keygen::numeric(22)->generate(true);
                if(str_contains($sid,'/')){
                    str_replace('/','l',$sid);
                }
                $scode = Keygen::numeric(16)->generate(true);
                $remeber = Keygen::numeric(12)->generate(true);
                $pswd = Keygen::numeric(18)->generate(true);

                $st = new Student();
                $st->sID = $sid;
                $st->scode = $scode;
                $st->schoolID = Auth::user()->schoolID;
                $st->gradeID = $gradeID;
                $st->roleID = 0;
                $st->status = 0;
                $st->password=$pswd;
                $st->remember_token = $remeber;
                $st->activated = 0;
                $st->token = Keygen::numeric(12)->generate(true);
                $st->create_ip_address = request()->ip();
                $st->created_at=$now;
                $st->updated_at = $now;
                $st->save();
                $st->assignRole('student');

                $sts = $sts +1;
            }
            $gr=Grade::findorfail($gradeID)->first();
            $gr->update(['students' =>$sts]);

            return redirect('/tchome');
        }
        return redirect()->back()->with('fail',trans('messages.teachergrade_new_faill_ver'));
        //return view('profiles.teacher.newgrade',compact('tch','school'));

    }

    public function addst(Request $request){
        if($this->validate($request,[
            'gradeID'=>'required',
        ])) {
            $gradeID = $request['gradeID'];
            if(count(Grade::where('gradeID',$gradeID)->get())!=1){
                return redirect()->back()->with('fail',trans('messages.teachergrade_addst_fail'));
            }

            return view('profiles.teacher.grade.add',compact('gradeID'));
        }
    }
    public function creatests(Request $request){
        if($this->validate($request,[
            'gradeID'=>'required',
            'amount'=>'required',
        ])) {
            $grade = Grade::where('gradeID',$request['gradeID'])->first();
            $sts = (int)$grade->students;
            $am = (int)$request['amount'];

            for ($i=0;$i<$am;$i++){
                $sid = Keygen::numeric(22)->generate(true);

                $scode = Keygen::numeric(12)->generate(true);
                $remeber = Keygen::numeric(10)->generate(true);
                $pswd = Keygen::numeric(10)->generate(true);
                $now = Carbon::now(new DateTimeZone('Europe/Vienna'));
                $st = new Student();
                $st->sID = $sid;
                $st->scode = $scode;
                $st->schoolID = $grade->schoolID;
                $st->gradeID = $grade->gradeID;
                $st->roleID = 0;
                $st->status = 0;
                $st->password=$pswd;
                $st->remember_token = $remeber;
                $st->token = $remeber;
                $st->create_ip_address = request()->ip();
                $st->created_at=$now;
                $st->updated_at = $now;
                $st->save();

                $sts = $sts +1;
            }

            $grade->update(['students'=>$sts]);

            return redirect('/teacher/grade/'.urlencode($grade->gradeID).'/index')->with('success',trans('messages.teachergrade_creatests_success_1').$am.trans('messages.teachergrade_creatests_success_2'));
        }
    }




}
