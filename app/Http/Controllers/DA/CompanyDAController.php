<?php

namespace App\Http\Controllers\DA;

use App\Models\DA;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Keygen\Keygen;

class CompanyDAController extends Controller
{
    //

    public function __construct()
    {

        $this->middleware('auth:employee');

    }

    public function index(){

    }

    public function add(Request $request){
        if($this->validate($request,[
            'daname'=>'required|min:10|max:256',
            'dadesc'=>'required|min:1|max:512',
            'priv'=>'required',
        ])){

            $da = new DA();
            $da->DaID = Keygen::numeric(18)->generate(true);
            $da->DAname = $request['daname'];
            $da->DAdesc = $request['dadesc'];
            $da->companyID = Auth::user()->companyID;
            if($request->has('size')){
                if($request['size'] > 5){
                    return redirect()->back()->with('fail',Lang::get('messages.companyDAaddfail'));
                }
                $da->size=$request['size'];
            }

            $da->privacy = $request['priv'];
            $da->save();

            return redirect()->back()->with('success',Lang::get('messages.companyDAaddsuccess'));


        }
    }


}
