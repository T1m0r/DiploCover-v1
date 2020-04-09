<?php

namespace App\Http\Controllers\Profile;

use App\Models\Company;
use App\Models\DA;
use Carbon\Carbon;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Keygen\Keygen;

class CompanyProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:employee');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cid= Auth::user()->companyID;
        $emps = Employee::where('companyID',$cid)->get();
        $emp = Auth::user();
        $comp = Company::where('companyID',$cid)->first();
        $das = DA::where('companyID',$cid)->get();
        //dd($emps);

        return view('profiles.company.chome',compact('emp','emps','comp','das'));


    }

    public function add(){

        $comp = Company::where('companyID',Auth::user()->companyID)->first();
        $emps = Employee::where('companyID',Auth::user()->companyID)->get();
        if(count($emps) < 5 or Auth::user()->hasRole('Company.Premium')){
            return view('profiles.company.addemp',compact('comp'));
        }
        return redirect()->back()->with('fail',trans('messages.companyprofile_add_beta_5_empl'));


    }
    public function addemployee(Request $request){

        $this->validate($request,[
            'firstname'=>'required|max:70',
            'lastname'=>'required|max:70',
            'email'=>'required',
        ]);
        $emp = Employee::where('email',$request['email'])->get();
        if(!(count($emp)<1)){
            $errormsg = trans('messages.companyprofile_addempl_exist_error');
            return view('register.students.wc.fail', compact('errormsg'));
        }else {
            $empID = Keygen::numeric(18)->generate(true);
            $conf = random_int(100000, 9999999);
            $pswd = random_int(100000, 9999999);

            $now = Carbon::now(new \DateTimeZone('Europe/Vienna'));

            $empl = new Employee();
            $empl->emplID= $empID;
            $empl->name= $request['firstname']. ' '.$request['lastname'];
            $empl->firstname= $request['firstname'];
            $empl->lastname= $request['lastname'];
            $empl->companyID = Auth::user()->companyID;
            $empl->assignRole('Employee');
            $empl->email= $request['email'];
            $empl->password = $pswd;
            $empl->confirmcode = $conf;
            $empl->status = 0;
            $empl->remember_token = Hash::make(random_bytes(5));
            $empl->activated = 0;
            $empl->token = Hash::make(random_bytes(5));
            $empl->admin_ip_address = request()->ip();
            $empl->updated_at= $now;
            $empl->created_at= $now;
            $empl->save();

            $querydata = ['emplID'=>$empID, 'email'=>$request['email'],'cid'=>Auth::user()->companyID, 'confirmcode'=>$conf,'ti'=>Carbon::now()];
            $querystring = http_build_query($querydata);

            $link = route('emp_confirm') . '?' .$querystring;


            $data = array('name' => $request['email'], 'link' => $link);
            $to = $request['email'];
            Mail::send('mails.register.students.wc.mail', $data, function ($message) use ($to) {
                $message->to($to, $to)
                    ->subject(trans('messages.companyprofile_addempl_email_header'));
                $message->from('info@diplocover.at', 'DiploCover');
            });


            return view('register.students.wc.success');
        }
    }

    public function empm(){

        $emp= Auth::user();
        if(!($comp=Company::where('companyID',$emp->companyID)->where('emplID',$emp->emplID)->first())){
            return redirect()->back()->with('fail',trans('messages.companyprofile_empm_fail'));
        }

        $emps = Employee::where('companyID',$emp->companyID)->get();

        return view('profiles/company/empm',compact('emp','comp','emps'));

    }

    public function cedit(){

        $emp = Auth::user();
        $comp = Company::where('companyID',$emp->companyID)->first();

        return view('/profiles/company/edit',compact('emp','comp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function udfile(Request $request)
    {
        // this validate part doesn't work!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        if($this->validate($request,[
            'prpic' => 'max:2048|mimes:jpeg,png,jpg,gif,svg',
            'oth' => 'max:2048|mimes:docx,pdf,xlsx,jpeg,png,jpg,gif,svg',
            'oth1' => 'max:2048|mimes:docx,pdf,xlsx,jpeg,png,jpg,gif,svg',
        ])) {

            $comp = Company::where('companyID', Auth::user()->companyID)->first();
            // $st_pr = stud_profile::where('sID', Auth::user()->sID)->first();
            //dd($st);

            if ($request->hasFile('prpic')) {
                $pic = $request->file('prpic');
                $pic->move('storage/uploads/documents/company/' . $comp->companyID . '/', $pic->getClientOriginalName());
                $pdir = 'storage/uploads/documents/company/' . $comp->companyID . '/' . $pic->getClientOriginalName();
                $comp->update(['profpic' => $pdir]);
            }
            if ($request->hasFile('oth')) {
                $oth = $request->file('oth');
                $oth->move('storage/uploads/documents/company/' . $comp->companyID . '/', $oth->getClientOriginalName());
                $comp->update(['otherpath1' => 'storage/uploads/documents/company/' . $comp->companyID . '/' . $oth->getClientOriginalName()]);
            }
            if ($request->hasFile('oth2')) {
                $oth2 = $request->file('oth2');
                $oth2->move('storage/uploads/documents/company/' . $comp->companyID . '/', $oth2->getClientOriginalName());
                $comp->update(['otherpath2' => 'storage/uploads/documents/company/' . $comp->companyID . '/' . $oth2->getClientOriginalName()]);
            }
            $comp->update(['updated_at' => Carbon::now()]);
            //$red = urlencode($st->sID);

            return redirect()->back()->with('success',trans('messages.companyprofile_udfile_success'));

            //
        }else{
            return redirect()->back()->with('fail',trans('messages.companyprofile_udfile_error'));
        }
    }


    public function delete(){
        $emps = Employee::where('companyID',Auth::user()->companyID)->get();
        $comp = Company::where('companyID',Auth::user()->companyID)->first();

        $comp->update(['deleted_ip_address'=>\request()->ip()]);

        $comp->delete();
        foreach($emps as $emp){
            $emp->update(['deleted_ip_address'=>\request()->ip()]);
            $emp->delete();
        }

        return redirect('/');
    }

    public function udinfo(Request $request)
    {
        //
        if($this->validate($request,[
            'compname'=>'max:100',
            'prevtxt'=>'max:100',
            'url'=>'max:20',
            'contmail'=>'max:20',
        ])) {
            $comp = Company::where('companyID',Auth::user()->companyID)->first();
            if(isset($request['compname'])){
                $comp->update(['compname' => $request['compname']]);
            }
            if(isset($request['prevtxt'])){
                $comp->update(['prevtxt' => $request['prevtxt']]);
            }
            if(isset($request['url'])){
                $comp->update(['website' => $request['url']]);
            }
            if(isset($request['Contmail'])){
                $comp->update(['contmail' => $request['contmail']]);
            }

            return redirect()->back()->with('success',trans('messages.companyprofile_udinfo_success'));


        }
    }

    public function edit($emplID){

        $emp = Employee::where('emplID',$emplID)->first();
        //TODO if edit employee then add logic here

    }
    public function remove(Request $request){
        if($this->validate($request,[
            'emplID'=>'required',
        ])){

        }
        $empl = Employee::where('emplID',$request['emplID'])->first();
        $empl->update(['deleted_ip_address'=>\request()->ip()]);
        $empl->delete();
        return redirect()->back()->with('success',trans('messages.companyprofile_remove_success'));
    }
}
