<?php

namespace App\Http\Controllers\Profile;

use App\Models\stud_profile;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentHomeController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index($sid)
    {
        //

        $st = Student::where('sid', $sid)->first();
        if($st == null){
            return view('404');
        }
        $st_prf = stud_profile::where('sID',$sid)->first();
        if($st_prf == null){
            return view('404');
        }



        return view('/profiles/student/prof',compact('st','st_prf'));

    }

}
