<?php

namespace App\Http\Controllers\Team;

use App\Models\Idea;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class StudentTeamController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:student');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tid = Auth::user()->teamID;

        if(($tid !=null or $tid != "") and count(Team::where('teamID', $tid)->get()) == 1){
            $team = Team::where('teamID',$tid)->first();
            $tms = Student::where('teamID',$tid)->get();

            $ideas = Idea::where('teamID',$tid)->get();

            $querydata = ['tid'=>$tid,'time'=>Carbon::now()];
            $querystring = http_build_query($querydata);

            $inv = route('team.add.member') . '?' .$querystring;
            if(count(Teacher::where('teachID',$team->teachID)->get()) ==1){
                $tch = Teacher::where('teachID',$team->teachID)->first();
            }else{
                $tch = 0;
            }
            $tchinv = route('team.add.tch') . '?' .$querystring;
            //
            return view('profiles.team.intern', compact('team','tms','inv','tchinv','tch','ideas'));
        }else{
            $errormsg=trans('messages.studentteam_index_fail');
            return view('errors.noteam',compact('errormsg'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rmv(Request $request)
    {
        if(!($this->validate($request,[
            'sID'=>'required',
        ]))){
            return redirect()->back()->with('fail',trans('messages.studentteam_rmv_fail_val'));
        }
        $sid = $request['sID'];
        if(!($st = Student::where('sID', $sid)->first())){
            return redirect()->back()->with('fail',trans('messages.studentteam_rmv_fail_sid'));
        }
        $tid = $st->teamID;
        if(Auth::user()->teamID == $tid){


            $td =Team::where('teamID', $tid)->first();
            $st->update(['teamID'=>'']);
            $m=$td->memberc;
            $mn = (int) $m-1;
            $td->update(['memberc' => $mn]);

            return redirect()->back()->with('success',trans('messages.studentteam_rmv_success'));
        }else{
            return redirect()->back()->with('fail',trans('messages.studentteam_rmv_fail_noteam'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function teamadd()
    {
        //
        if(isset($_GET['tid']) and isset($_GET['time'])){
            if(Carbon::now()->diffInMinutes($_GET['time']['date']) < 2160){

                $sid  = Auth::user()->sID;
                $tid = $_GET['tid'];

                $T = Team::where('teamID',$tid)->first();
                if($T->memberc >4){
                    $errormsg=trans('messages.studentteam_teamadd_fail_member');
                    return view('register.students.wc.fail',compact('errormsg'));
                }
                $st = Student::where('sID',$sid)->first();
                $st->update(['teamID' => $tid]);

                
                $m = $T->memberc;
                $mn = (int) $m +1;
                $T->update(['memberc' => $mn]);

                return redirect('team/home');
            }else{
                $errormsg=trans('messages.studentteam_teamadd_fail_expired');
                return view('register.students.wc.fail',compact('errormsg'));
            }

        }else{
            $errormsg=trans('messages.studentteam_teamadd_fail_invalide');
            return view('register.students.wc.fail',compact('errormsg'));
        }


    }

}
