<?php

namespace App\Http\Controllers\Profile;

use App\Models\DA;
use App\Models\Grade;
use App\Models\School;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

class TeacherHomeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:teacher');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //dd(Auth::guard());
        $tch = Auth::user();
        $grades = Grade::where('teachID',$tch->teachID)->get();
        $das = DA::where('teachID',$tch->teachID)->get();
        if(count(School::where('schoolID',$tch->schoolID)->get())==1){
            $school = School::where('schoolID',$tch->schoolID)->first();
            if($tch->hasRole('School')){
                if($school->teachID == $tch->teachID){
                    $perm = 1;
                }else{
                    $perm = 3;
                }
            }else{
                $perm = 0;
            }
            return view('profiles.teacher.tchome',compact('tch','grades','das','school','perm'));
        }else{
            $errormsg=Lang::get('messages.teacherHomeindexfail');
            return view('register.students.wc.fail',compact('errormsg'));
        }


    }

}
