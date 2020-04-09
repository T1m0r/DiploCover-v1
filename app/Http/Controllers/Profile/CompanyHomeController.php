<?php

namespace App\Http\Controllers\Profile;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyHomeController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:employee');
    }



    public function index()
    {
        $empl = Auth::user();
        if($empl->hasRole('Company')){
            $comp = Company::where('companyID',$empl->companyID)->first();
            if($comp->emplID == $empl->emplID){
                if($comp->prevtxt == null or $comp->prevtxt == ""){
                    redirect('');
                }
                redirect();
            }
        }

    }

}
