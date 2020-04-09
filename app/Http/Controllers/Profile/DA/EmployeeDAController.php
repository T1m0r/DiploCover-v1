<?php

namespace App\Http\Controllers\Profile\DA;

use App\Models\Application;
use App\Models\Company;
use App\Models\DA;
use App\Models\DAPhase;
use App\Models\Employee;
use App\Models\Team;
use Backpack\LangFileManager\LangFileManagerServiceProvider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Keygen\Keygen;

class EmployeeDAController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:employee');
    }


    public function index(){

        $emp = Auth::user();
        $c=Company::where('companyID',$emp->companyID)->first();
        $das = DA::where('empID',$c->companyID)->get();

        return view('profiles.company.DAshboard',compact('emp','c','das'));


    }
    public function newda(){


        $emps = [""=>Lang::get('form.companyDAnewdaselect')]+Employee::where('companyID',Auth::user()->companyID)->pluck('name','emplID')->all();
        $tsize =array(''=>Lang::get('form.company_DA_newda_select_tsize_choose'),'1'=>Lang::get('form.company_DA_newda_select_tsize_st1'),'2'=>Lang::get('form.company_DA_newda_select_tsize_st2'),'3'=>Lang::get('form.company_DA_newda_select_tsize_st3'),'4'=>Lang::get('form.company_DA_newda_select_tsize_st4'),'5'=>Lang::get('form.company_DA_newda_select_tsize_st5'));
        $priv = array(''=>Lang::get('form.company_DA_newda_select_priv_choose'),'1'=>Lang::get('form.company_DA_newda_select_priv1'),'2'=>Lang::get('form.company_DA_newda_select_priv2'),'3'=>Lang::get('form.company_DA_newda_select_priv3'),'4'=>Lang::get('form.company_DA_newda_select_priv4'));
        return view('profiles.Employee.da.adda',compact('emps','tsize','priv'));


    }
    public function adda(Request $request){
        if($this->validate($request,[
            'daname'=>'required|min:3|max:200',
            'dadesc'=>'required|min:10|max:800',
            'tsize'=>'required',
            'emp'=>'required',
            'priv'=>'required',
            'optfield'=>'required',
        ])){

            $da = new DA();
            $da->DAid = Keygen::numeric(20)->generate(true);
            $da->DAname = $request['daname'];
            $da->DAdesc = $request['dadesc'];
            $da->companyID = Auth::user()->companyID;
            $da->emplID = $request['emp'];
            if($request['emp'] == $request['empz']){
                return redirect()->back()->with('fail',__('messages.employee_adda_empl_emplz_fail'));
            }
            $da->emplIDz = $request['empz'];
            $da->prog = 0;
            $da->size=$request['tsize'];
            $da->privacy = $request['priv'];
            $da->phase = 1;
            $da->status = Lang::get('messages.companyDA_adda_status');
            if($request['optfield'] == 0){
                $da->optfield = 0;
                if($request['optfieldtxt'] != null and $request['optfieldtxt'] != ""){
                    $da->optfieldtitle = $request['optfieldtxt'];
                }else{
                    $da->optfieldtitle = null;
                }
            }else if($request['optfield'] == 1){
                $da->optfield = 1;
            }else{
                return redirect()->back()->with('fail','xxxUnkown Error something went wrong with the other field');
            }
            $da->remember_token = Keygen::numeric(12)->generate(true);
            $da->activated = 1;
            $da->token = Keygen::numeric(18)->generate(true);
            $da->create_ip_address = request()->ip();
            $da->created_at = Carbon::now();
            $da->updated_at = Carbon::now();
            $da->save();

            return redirect('/emphome')->with('success',Lang::get('messages.companyDA_adda_success'));

        }else{
            return redirect()->back()->with('fail',Lang::get('messages.companyDA_adda_fail'));
        }


    }
    public function stedit(Request $request){
        if($this->validate($request,[
            'daid'=>'required',
        ])){

            $da=DA::where('DAid',$request['daid'])->first();
            if($da->emplID != Auth::user()->emplID and $da->emplIDz != Auth::user()->emplID){

                return redirect()->back()->with(Lang::get('messages.companyDA_stedit_compfail'));
            }else{
                $phases = ["" => Lang::get('form.companyDA_stedit_selectph')] + DAPhase::pluck('status', 'phaseID')->all();
                return view('profiles.employee.da.status_edit',compact('da','phases'));
            }
        }else{
            return redirect()->back()->with('fail',Lang::get('messages.companyDA_stedti_valfail'));
        }


    }
    public function addteamda(Request $request){
        if($this->validate($request,[
            'daid'=>'required',
            'teamid'=>'required',
        ])){

        $da = DA::where('daID', $request['daid'])->first();
        $t = Team::where('teamID', $request['teamid'])->first();
        if(count($t->DA()->get())>0){
            return redirect()->back()->with('fail',trans('companyda_addteamda_used_fail'));
        }
        $da->update(['teamID'=>$request['teamid'],'teachID'=>$t->teachID]);
        return redirect('/company/da/dashboard')->with('success','companyda_addteamda_success');
        }else{
            return redirect()->back()->with('fail',trans('form.companyda_addteamda_fail'));
        }

    }

    public function rmvteam(Request $request){
        $this->validate($request,[
           'daid'=>'required',
        ]);

        $da = DA::where('daID',$request['daid'])->first();
        $da->teamID = null;
        $da->save();
        return redirect('/company/da/dashboard')->with('success','companyda_rmvteamda_success');
    }

    public function stupdate(Request $request){
        //dd($request['phase']);
        //dd($request['phase'] == "" or $request['phase']==null);
        if($request['phase'] == "" or $request['phase']==null){
            return redirect('/emphome');
        }
        if(($this->validate($request,[
                'phase'=>'required',
                'DAid'=>'required'
            ]))){
            //dd($request['phase']);
            if(count(DA::where('DAid',$request['DAid'])->get()) !=1){
                return redirect('/emphome')->with('fail',Lang::get('messages.unkownERORR'));
            }else {
                $da = DA::where('DAid', $request['DAid'])->first();

                if($da->companyID == Auth::user()->companyID and ($da->emplID == Auth::user()->emplID or $da->emplIDz == Auth::user()->emplID)) {
                    //dd($request['phase']);
                    $phaseID = (int)$request['phase'];
                    //dd($da->phase()->get());
                    $da->phase = $phaseID;
                    $da->save();
                    return redirect('/emphome')->with('success', Lang::get('messages.companyDAstupdatesuccess'));
                }else{
                    return redirect('/emphome')->with('fail',Lang::get('messages.companyDAstupdatefail'));
                }
            }

        }else{

            return redirect()->back()->with('fail',Lang::get('messages.companyDAstupdatevalfail'));
        }


    }

    public function settings(Request $request)
    {
        if (($this->validate($request, [
            'daid' => 'required'
        ]))) {

            if (count(DA::where('DAid', $request['daid'])->get()) != 1) {
                return redirect('/emphome')->with('fail', Lang::get('messages.unkownERORR'));
            } else {
                $da = DA::where('DAid', $request['daid'])->first();
                if ($da->companyID != Auth::user()->companyID) {
                    return redirect()->back()->with(Lang::get('messages.companyDAsteditcompfail'));
                } else {
                    $priv = array('0'=>Lang::get('form.companyDAsettingselectpriv'),'1'=>Lang::get('form.companyDAsettingpriv1'),'2'=>Lang::get('form.companyDAsettingpriv2'),'3'=>Lang::get('form.companyDAsettingpriv3'),'4'=>Lang::get('form.companyDAsettingpriv4'));
                    $tsize = array('0'=>Lang::get('form.companyDAsettingselecttsize'),'1'=>Lang::get('form.companyDAsettingtsize1'),'2'=>Lang::get('form.companyDAsettingtsize2'),'3'=>Lang::get('form.companyDAsettingtsize3'),'4'=>Lang::get('form.companyDAsettingtsize4'),'5'=>Lang::get('form.companyDAsettingtsize5'));
                    $emps = ["0"=>Lang::get('form.companyDAsettingselectemp')]+Employee::where('companyID',Auth::user()->companyID)->pluck('name','emplID')->all();
                    return view('profiles.Employee.da.da_edit', compact('da', 'emps','tsize','priv'));
                }
            }

        } else {
            return redirect()->back()->with('fail', Lang::get('messages.companyDAsettingvalfail'));
        }
    }

    public function settingsupdate(Request $request){
       // dd($request);
        //dd($request['daid']);
        if (($this->validate($request, [
            'daid' => 'required'
        ]))) {


            //dd($request['daid']);

            $da = DA::where('DAid',$request['daid'])->first();
            //dd($da);
            if($request->has('daname')){
                if($request['daname'] != null and $request['daname'] != "" and $request['daname'] != "0"){
                    $da->DAname = $request['daname'];
                }
            }
            if($request->has('dadesc')){
                if($request['dadesc'] != null and $request['dadesc'] != "" and $request['dadesc'] != "0"){
                    $da->DAdesc = $request['dadesc'];
                }
            }
            if($request->has('prog')){
                if($request['prog'] != null and $request['prog'] != "" and $request['prog'] != "0"){
                    $da->prog = $request['prog'];
                }
            }
            if($request->has('tsize')){
                if($request['tsize'] != null and $request['tsize'] != "" and $request['tsize'] != "0"){
                    $da->size = $request['tsize'];
                }
            }
            if($request->has('emp')){
                if($request['emp']!= null and $request['emp']!= "" and $request['emp'] != "0"){
                    $da->emplID = $request['emp'];
                }
            }
            if($request->has('empz')){
                if($request['empz']!=null and $request['empz']!= "" and $request['empz'] != "0"){
                    $da->emplIDz = $request['empz'];
                }
            }
            if($request->has('priv')){
                if($request['priv']!=null and $request['priv']!= "" and $request['priv'] != "0"){
                    $da->privacy = $request['priv'];
                }
            }
            if($request->has('optfield')){
                if($request['optfield']!=null and $request['optfield']!= "" and $request['optfield'] != "0"){
                    $da->optfield = $request['optfield'];
                }
            }
            if($request->has('optfieldtxt')){
                if($request['optfieldtxt']!=null and $request['optfieldtxt']!= "" and $request['optfieldtxt'] != "0"){
                    $da->optfieldtitle = $request['optfieldtxt'];
                }
            }
            //dd($da);
            $da->updated_at = Carbon::now();
            $da->update();

            return redirect('/emphome')->with('success',Lang::get('messages.companyDAsettingupdatesuccess'));

        }else{
            return redirect()->back()->with('fail',Lang::get('messages.companyDAsettingupdatevalfail'));
        }


    }

    public function rmv(Request $request){
        if($this->validate($request,[
            'daid'=>'required',
        ])){

            $da = DA::where('DAid',$request['daid'])->first();
            $da->update(['deleted_ip_address'=>\request()->ip()]);
            $da->delete();

            return redirect('/emphome')->with('success',Lang::get('messages.companyDArmvsuccess'));

        }else{
            return redirect()->back()->with('fail',Lang::get('messages.companyDArmvvalfail'));
        }


    }

    public function applist(Request $request){
        if($this->validate($request,[
            'daid'=>'required',
        ])){
            //dd(DA::where('DAid',$request['daid'])->get());
            if(count(DA::where('DAid',$request['daid'])->get()) ==1) {
                $da = DA::where('DAid', $request['daid'])->first();
                if ($da->phase >= 2){
                    $appls = Application::where('daID', $da->DAid)->get();
                return view('profiles.Employee.da.applist', compact('da', 'appls'));
                }else{
                    return redirect('/emphome')->with('fail',Lang::get('messages.companyDAapplistphasefail'));
                }
            }

            return redirect('/emphome')->with('success',Lang::get('messages.companyDAapplistDAfail'));

        }else{
            return redirect()->back()->with('fail',Lang::get('messages.companyDAapplistvalfail'));
        }


    }

}
