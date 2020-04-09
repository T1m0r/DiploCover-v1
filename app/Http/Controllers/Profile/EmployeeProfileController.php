<?php

namespace App\Http\Controllers\Profile;

use App\Models\Company;
use App\Models\DA;
use App\Models\Employee;
use App\Models\stud_profile;
use App\Models\Student;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use test\Mockery\Fixtures\EmptyTestCaseV5;

class EmployeeProfileController extends Controller
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


    public function eedit()
    {
        //

        $emp = Auth::user();
        $comp = Company::where('companyID',$emp->companyID)->first();

        return view('/profiles/Employee/edit',compact('emp','comp'));

    }

    public function emplindex($sid)
    {
        $sid =  urldecode($sid);
        $st = Student::where('sid', $sid)->first();
        if($st == null){
            return view('404');
        }
        if($st->teamID != null and $st != ""){
            if(count(Team::where('teamID',$st->teamID)->get()) ==1){
                $team = Team::where('teamID',$st->teamID)->first();
                if(count(DA::where('teamID',$team->teamID)->get()) <1){
                    $da=0;
                }else{
                    $da = DA::where(teamID,$team->teamID)->first();
                }
            }else{
                $team = null;
            }
        }
        $st_prf = stud_profile::where('sID',$sid)->first();
        if($st_prf == null){
            return view('404');
        }

        return view('profiles.student.emp_st_prof',compact('st','st_prf','team','da'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updpswd(Request $request)
    {
        // this validate part doesn't work!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        if($this->validate($request,[
            'oldpswd' => 'max:120',
            'newpswd' => 'max:120|min:10',
            'newpswd2' => 'max:120|min:10',
        ])) {

            $emp = Auth::user();
            // $st_pr = stud_profile::where('sID', Auth::user()->sID)->first();
            //dd($st);

            if (Hash::check($request['oldpswd'],$emp->password)) {
                if ($request['newpswd'] == $request['newpswd2']) {
                    $emp->update(['password' => Hash::make($request['newpswd'])]);
                    return redirect()->back()->with('success', trans('messages.employeeprofile_updpswd_success'));
                } else {
                    return redirect()->back()->with('fail', trans('messages.employeeprofile_updpswd_rp_fail'));
                }
            } else {
                return redirect()->back()->with('fail', trans('messages.employeeprofile_updpswd_pswd_missmatch'));
            }
        }
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
            'prfpic' => 'max:2048|mimes:jpeg,png,jpg,gif,svg',
        ])) {

            $emp = Employee::where('emplID',Auth::user()->emplID)->first();
            //dd($emp);

            if ($request->hasFile('prfpic')) {
                $pic = $request->file('prfpic');
                $pic->move('storage/uploads/documents/employee/' . $emp->emplID . '/', $pic->getClientOriginalName());
                $pdir = 'storage/uploads/documents/employee/' . $emp->emplID . '/' . $pic->getClientOriginalName();
                //dd($pdir);
                $emp->prfpic = $pdir;
                $emp->save();
                //dd($emp);
            }
            //$red = urlencode($st->sID);

            return redirect()->back()->with('success',trans('messages.employeeprofile_udfile_success'));

            //
        }else{
            return redirect()->back()->with('fail',trans('messages.employeeprofile_udfile_fail'));
        }
    }

    public function udinfo(Request $request)
    {
        //
        if($this->validate($request,[
            'firstname'=>'max:100',
            'lastname'=>'max:100',
            'title'=>'max:20',
            'job'=>'max:20',
            'jobdesc'=>'max:1522',
            'phonenumber'=>'max:20',
            'email'=>'max:28',
        ])) {
            $emp = Auth::user();

            if(isset($request['firstname'])){
                if($request['firstname'] != null and $request['firstname'] != "") {
                    $name = $request['firstname'] . ' ' . $emp->lastname;
                    $emp->update(['firstname' => $request['firstname'], 'name' => $name, 'updated_at' => Carbon::now()]);
                }
            }
            if(isset($request['lastname'])){
                if($request['lastname'] != null and $request['lastname'] != "") {
                    $name2 = $emp->firstname . ' ' . $request['lastname'];
                    $emp->update(['lastname' => $request['lastname'], 'name' => $name2, 'updated_at' => Carbon::now()]);
                }

            }
            if(isset($request['title'])){
                if($request['title'] != null and $request['title'] != "") {
                    $emp->update(['title' => $request['title'], 'updated_at' => Carbon::now()]);
                }

            }
            if(isset($request['job'])){
                if($request['job'] != null and $request['job'] != "") {
                    $emp->update(['job' => $request['job'], 'updated_at' => Carbon::now()]);
                }

            }
            if(isset($request['jobdesc'])){
                if($request['jobdesc'] != null and $request['jobdesc'] != "") {
                    $emp->update(['jobdesc' => $request['jobdesc'], 'updated_at' => Carbon::now()]);
                }

            }
            if(isset($request['phonenumber'])){
                if($request['phonenumber'] != null and $request['phonenumber'] != "") {
                    $emp->update(['phonenumber' => $request['phonenumber'], 'updated_at' => Carbon::now()]);
                }
            }
            if(isset($request['email'])){
                if($request['email'] != null and $request['email'] != "") {
                    if (Auth::user()->email != $request['email']) {
                        if (count(Employee::where('email', $request['email'])->get()) != 0) {
                            return redirect()->back()->with('fail', __('messages.employee_edit_email_update_fail'));
                        } else {
                            $emp->update(['email' => $request['email'], 'updated_at' => Carbon::now()]);
                        }
                    }
                }
            }

            return redirect()->back()->with('success',trans('messages.employeeprofile_udinfo_success'));


        }
    }

    public function delete(){

        $emp= Auth::user();
        $emp->update(['deleted_ip_address'=>\request()->ip()]);
        $emp->delete();
        return redirect('/');

    }

}
