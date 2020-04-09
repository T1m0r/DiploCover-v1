<?php

namespace App\Http\Controllers\Profile;

use App\Http\Middleware\Company;
use App\Models\DA;
use App\Models\Employee;
use App\Models\Idea;
use App\Models\School;
use App\Models\stud_profile;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileProfileController extends Controller
{
    //
    public function stteacher($tchid){
        if(count(Teacher::where('teachID',$tchid)->get()) == 1){
            $tch = Teacher::where('teachID',$tchid)->first();

            return view('profiles.profiles.student.teacher', compact('tch'));
        }else{
            return redirect()->back();
        }
    }

    public function stschool($schid){
        if(count(School::where('schoolID',$schid)->get()) == 1){
            $sch = School::where('schoolID',$schid)->first();

            return view('profiles.profiles.student.school', compact('sch'));
        }else{
            return redirect()->back();
        }

    }

    public function stemployee($empid){
        if(count(Employee::where('emplID',$empid)->get()) == 1){
            $emp = Employee::where('emplID',$empid)->first();

            return view('profiles.profiles.student.employee', compact('emp'));
        }else{
            return redirect()->back();
        }

    }

    public function stcompany($compid){
        if(count(\App\Models\Company::where('companyID',$compid)->get()) == 1){
            $comp = \App\Models\Company::where('companyID',$compid)->first();

            return view('profiles.profiles.student.company', compact('comp'));
        }else{
            return redirect()->back();
        }

    }
    public function ststud($stid){
        if(count(Student::where('sid',$stid)->get()) == 1 and count(stud_profile::where('sID',$stid)->get())){
            $st = Student::where('sid',$stid)->first();
            $st_prf = stud_profile::where('sID',$stid)->first();

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
                    $da = null;
                }
            }else{
                $team= null;
                $da= null;
            }
            $st_prf = stud_profile::where('sID',$stid)->first();

            return view('profiles.profiles.student.student',compact('st','st_prf','team','da'));
        }else{
            return view('404');
        }

    }
    public function stteam($tid){
        $tms = Student::where('teamID', $tid)->get();
        $tm = Team::where('teamID',$tid)->first();
        if($tm == null){
            return view('404');
        }
        $ideas = Idea::where('teamID',$tid)->get();
        if(count(Teacher::where('teachID',$tm->teachID)->get()) == 1){
            $teach = Teacher::where('teachID',$tm->teachID)->first();
            return view('profiles.profiles.student.team',compact('tms','tm','teach','ideas'));

        }else{
            return view('profiles.profiles.student.team',compact('tms','tm','ideas'));

        }

    }





    public function empempl($empid){
        //dd($empid);
        if(count(Employee::where('emplID',$empid)->get()) == 1){
            $emp = Employee::where('emplID',$empid)->first();

            return view('profiles.profiles.employee.employee', compact('emp'));
        }else{
            return redirect()->back();
        }
    }

    public function empcomp($compid){

        if(count(\App\Models\Company::where('companyID',$compid)->get()) == 1){
            $comp = \App\Models\Company::where('companyID',$compid)->first();

            return view('profiles.profiles.employee.company', compact('comp'));
        }else{
            return redirect()->back();
        }
    }

    public function empteach($tchid){
        if(count(Teacher::where('teachID',$tchid)->get()) == 1){
            $tch = Teacher::where('teachID',$tchid)->first();

            return view('profiles.profiles.employee.teacher', compact('tch'));
        }else{
            return redirect()->back();
        }
    }

    public function  empschool($schid){
        if(count(School::where('schoolID',$schid)->get()) == 1){
            $sch = School::where('schoolID',$schid)->first();

            return view('profiles.profiles.employee.school', compact('sch'));
        }else{
            return redirect()->back();
        }
    }

    public function empstud($stid){
        if(count(Student::where('sid',$stid)->get()) == 1 and count(stud_profile::where('sID',$stid)->get())){
            $st = Student::where('sid',$stid)->first();
            $st_prf = stud_profile::where('sID',$stid)->first();

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
                    $da = null;
                }
            }else{
                $team= null;
                $da= null;
            }
            $st_prf = stud_profile::where('sID',$stid)->first();

            return view('profiles.profiles.employee.student',compact('st','st_prf','team','da'));
        }else{
            return view('404');
        }
    }

    public function empteam($tid){

        $tms = Student::where('teamID', $tid)->get();
        $tm = Team::where('teamID',$tid)->first();
        if($tm == null){
            return view('404');
        }
        $ideas = Idea::where('teamID',$tid)->get();
        if(count(Teacher::where('teachID',$tm->teachID)->get()) == 1){
            $teach = Teacher::where('teachID',$tm->teachID)->first();
            return view('profiles.profiles.employee.team',compact('tms','tm','teach','ideas'));

        }else{
            return view('profiles.profiles.employee.team',compact('tms','tm','ideas'));

        }
    }





    public function tchteach($tchID){
        if(count(Teacher::where('teachID',$tchID)->get()) == 1){
            $tch = Teacher::where('teachID',$tchID)->first();

            return view('profiles.profiles.teacher.teacher', compact('tch'));
        }else{
            return redirect()->back();
        }
    }

    public function tchschool($schID){
        if(count(School::where('schoolID',$schID)->get()) == 1){
            $sch = School::where('schoolID',$schID)->first();

            return view('profiles.profiles.teacher.school', compact('sch'));
        }else{
            return redirect()->back();
        }
    }

    public function tchemp($empID){
        if(count(Employee::where('emplID',$empID)->get()) == 1){
            $emp = Employee::where('emplID',$empID)->first();

            return view('profiles.profiles.teacher.employee', compact('emp'));
        }else{
            return redirect()->back();
        }
    }

    public function  tchcomp($compID){
        if(count(\App\Models\Company::where('companyID',$compID)->get()) == 1){
            $comp = \App\Models\Company::where('companyID',$compID)->first();

            return view('profiles.profiles.teacher.company', compact('comp'));
        }else{
            return redirect()->back();
        }

    }

    public function tchstud($stID){
        if(count(Student::where('sid',$stID)->get()) == 1 and count(stud_profile::where('sID',$stID)->get())){
            $st = Student::where('sid',$stID)->first();
            $st_prf = stud_profile::where('sID',$stID)->first();

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
                    $da = null;
                }
            }else{
                $team= null;
                $da= null;
            }
            $st_prf = stud_profile::where('sID',$stID)->first();

            return view('profiles.profiles.teacher.student',compact('st','st_prf','team','da'));
        }else{
            return view('404');
        }
    }

    public function tchteam($tID){
        $tms = Student::where('teamID', $tID)->get();
        $tm = Team::where('teamID',$tID)->first();
        if($tm == null){
            return view('404');
        }
        $ideas = Idea::where('teamID',$tID)->get();
        if(count(Teacher::where('teachID',$tm->teachID)->get()) == 1){
            $teach = Teacher::where('teachID',$tm->teachID)->first();
            return view('profiles.profiles.teacher.team',compact('tms','tm','teach','ideas'));

        }else{
            return view('profiles.profiles.teacher.team',compact('tms','tm','ideas'));

        }
    }




}
