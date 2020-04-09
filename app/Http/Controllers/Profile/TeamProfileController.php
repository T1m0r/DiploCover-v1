<?php

namespace App\Http\Controllers\Profile;

use App\Models\Student;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TeamProfileController extends Controller
{

    public function index($tid)
    {
        //

        $tms = Student::where('teamID', $tid)->get();
        $tm = Team::where('teamID',$tid)->first();
        if($tm == null){
            return view('404');
        }

        return view('/profiles/team/extern',compact('tms','tm'));

    }

    public function teachindex($tid)
    {
        //

        $tms = Student::where('teamID', $tid)->get();
        $tm = Team::where('teamID',$tid)->first();
        if($tm == null){
            return view('404');
        }

        return view('/profiles/team/teach_team_ext_prof',compact('tms','tm'));

    }

    public function emplindex($tid)
    {
        //

        $tms = Student::where('teamID', $tid)->get();
        $tm = Team::where('teamID',$tid)->first();
        if($tm == null){
            return view('404');
        }

        return view('/profiles/team/empl_team_ext_prof',compact('tms','tm'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function create( Request $request)
    {
        //
        $this->validate($request,[
            'tname'=>'required',
        ]);

        $tid = random_int(1000000,9999999);

        if($request['tname']== null or $request['tname']== ""){
            $errormsg = trans('messages.teacherprofile_create_tfail');
            return view("register.students.wc.fail",compact('errormsg'));
        }
        $st = Student::where('sID', Auth::user()->sID)->first();
        if($st->teamID != null or $st->teamID != ""){
            $errormsg = trans('messages.teacherprofile_create_talready_member_fail');
            return view("register.students.wc.fail",compact('errormsg'));
        }
        $team = new Team();
        $team->teamID = $tid;
        $team->tname = $request['tname'];
        $team->sID =Auth::user()->sID;
        $team->save();

        $st->update(['teamID'=>$tid]);

        return redirect('/team/home');

    }

}
