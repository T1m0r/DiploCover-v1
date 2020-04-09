<?php

namespace App\Http\Controllers\Profile;

use App\Models\Company;
use App\Models\DA;
use App\Models\DAPhase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

class EmployeeHomeController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:employee');
    }


    public function index(){
        //dd(Auth::guard());
        //dd(Auth::user());

        /*if(Auth::user()->hasRole('Company') or Auth::user()->hasRole('Company.Premium')){
            return redirect('/chome');
        }else{
            return redirect()->back()->with('fail','Sorry but you don\'t have enough permission to do that :§');
        }*/



        $emp = Auth::user();
        $comp = Company::where('companyID',$emp->companyID)->first();
        $das = DA::where('emplID',Auth::user()->emplID)->orwhere('emplIDz',Auth::user()->emplID)->get();
        $phases = ["" => Lang::get('form.companyDA_stedit_selectph')] + DAPhase::pluck('status', 'phaseID')->all();
        if($emp->hasRole('Company')){
            if($comp->emplID == $emp->emplID){
                $role = 1;
                return view('profiles.Employee.home',compact('emp','comp','role','das','phases'));
            }
        }
        return view('profiles.Employee.home',compact('emp','das','comp','phases'));

    }


}
