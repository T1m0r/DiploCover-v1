<?php

namespace App\Http\Controllers\Profile\DA;

use App\Models\Application;
use App\Models\DA;
use App\Models\Student;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Keygen\Keygen;

class StudentApplyDAController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:student');
    }


    public function info($DAid){
        $DAid = urldecode($DAid);
        if(count(DA::where('DAid',$DAid)->get())!=1){
            return redirect()->back()->with('fail',Lang::get('messages.studentapplyDA_info_error'));
        }
        $da = DA::where('DAid',$DAid)->first();
        if(count(Application::where('daID',$DAid)->where('teamID',Auth::user()->teamID)->GET()) == 1){
            $apl = 1;
        }else {
            $apl = 0;
        }
        //dd(trans('messages.studentapplyDA_apply_team_applied_success'));

        return view('profiles.da.stinfo',compact('da','apl'));


    }

    public function apply(Request $request){
        if($this->validate($request,[
            'daid'=>'required',
        ])){
            if(count(DA::where('DAid',$request['daid'])->get())!=1){
                return redirect()->back()->with('fail',Lang::get('messages.studentapplyDA_apply_error'));
            }else{
                $da = DA::where('DAid',$request['daid'])->first();
                $st = Auth::user();
                if($st->teamID == null or $st->teamID ==""){
                    return redirect()->back()->with('fail',Lang::get('messages.studentapplyDA_apply_team_fail'));
                }else{
                    if(count(Team::where('teamID',$st->teamID)->get()) != 1){
                        return redirect()->back()->with('fail',Lang::get('messages.studentapplyDA_apply_teamerror'));
                    }else{
                        $team = Team::where('teamID',$st->teamID)->first();
                        if(count(Student::where('teamID',$st->teamID)->get()) != (int)$da->size and $da->size!=100){
                            return redirect()->back()->with('fail',Lang::get('messages.studentapplyDA_apply_team_membersfail') .$da->size .Lang::get('messages.studentapplyDA_apply_team_membersfail_member'));
                        }else{
                            if(count(Application::where('teamID',$st->teamID)->where('daID',$da->DAid)->get()) != 0){
                                return redirect()->back()->with('fail',Lang::get('messages.studentapplyDA_apply_team_applied'));
                            }else{
                                $apply = new Application();
                                $apply->applID = Keygen::numeric(12)->generate(true);
                                $apply->daID = $da->DAid;
                                $apply->sID = $st->sID;
                                $apply->teamID = $team->teamID;
                                if($request->has('optionalfield')){
                                    if($request['optionalfield'] != null and $request['optionalfield']!= ""){
                                        $apply->optfield = $request['optionalfield'];
                                    }else{
                                        return redirect()->back()-with('fail', __('messages.StudentApplyDA_optfield_empty_fail'));
                                    }
                                }
                                $apply->appl_ip_address = $request->ip();
                                $apply->created_at = Carbon::now();
                                $apply->updated_at = Carbon::now();
                                $apply->save();
                                return redirect()->back()->with('success',Lang::get('messages.studentapplyDA_apply_team_applied_success').$da->DAname);
                            }
                        }
                    }
                }
            }
        }else{
            return redirect()->back()->with('fail',Lang::get('messages.studentapplyDA_apply_valfail'));
        }

    }

}
