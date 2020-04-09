<?php

namespace App\Http\Controllers\Profile;

use App\Models\DA;
use App\Models\stud_profile;
use App\Models\Student;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;

class StudentProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('web');
    }



    public function index($sid)
    {
        //$sid =  urldecode($sid);
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
                    $da = DA::where('teamID',$team->teamID)->first();
                }
            }else{
                $team = null;
                $da = null;
            }
        }else{
            $team= null;
            $da= null;
        }
        $st_prf = stud_profile::where('sID',$sid)->first();
        if($st_prf == null){
            return view('404');
        }

        return view('profiles.student.prof',compact('st','st_prf','team','da'));

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
            'leb' => 'max:2048|mimes:docx,pdf',
            'zeug' => 'max:2048|mimes:pdf,docx,jpeg,png,jpg,gif,svg',
            'oth' => 'max:2048|mimes:docx,pdf,xlsx,jpeg,png,jpg,gif,svg',
            'oth1' => 'max:2048|mimes:docx,pdf,xlsx,jpeg,png,jpg,gif,svg',
        ])) {

            $st = Student::where('sID', Auth::user()->sID)->first();
            $st_pr = stud_profile::where('sID', Auth::user()->sID)->first();
            //dd($st);

            if ($request->hasFile('prpic')) {
                $pic = $request->file('prpic');
                $pic->move('storage/uploads/documents/' . $st->sID . '/', $pic->getClientOriginalName());
                $pdir = 'storage/uploads/documents/' . $st->sID . '/' . $pic->getClientOriginalName();
                $st_pr->update(['profpic' => $pdir]);
            }
            if ($request->hasFile('leb')) {
                $leb = $request->file('leb');
                $leb->move('storage/uploads/documents/' . $st->sID . '/', $leb->getClientOriginalName());
                $st_pr->update(['lebpath' => 'storage/uploads/documents/' . $st->sID . '/' . $leb->getClientOriginalName()]);
            }
            if ($request->hasFile('zeug')) {
                $zeug = $request->file('zeug');
                $zeug->move('storage/uploads/documents/' . $st->sID . '/', $zeug->getClientOriginalName());
                $st_pr->update(['zeugpath' => 'storage/uploads/documents/' . $st->sID . '/' . $zeug->getClientOriginalName()]);
            }
            if ($request->hasFile('oth')) {
                $oth = $request->file('oth');
                $oth->move('storage/uploads/documents/' . $st->sID . '/', $oth->getClientOriginalName());
                $st_pr->update(['otherpath1' => 'storage/uploads/documents/' . $st->sID . '/' . $oth->getClientOriginalName()]);
            }
            if ($request->hasFile('oth2')) {
                $oth2 = $request->file('oth2');
                $oth2->move('storage/uploads/documents/' . $st->sID . '/', $oth2->getClientOriginalName());
                $st_pr->update(['otherpath2' => 'storage/uploads/documents/' . $st->sID . '/' . $oth2->getClientOriginalName()]);
            }
            $st_pr->update(['updated_at' => Carbon::now()]);
            $red = urlencode($st->sID);

            return redirect()->back()->with('success',trans('messages.studentprofile_udfile_success'));

            //
        }else{
            return redirect()->back()->with('fail',trans('messages.studentprofile_udfile_fail'));
        }
    }

    public function udinfo(Request $request)
    {
        //
        if($this->validate($request,[
            'firstname'=>'max:100',
            'lastname'=>'max:100',
            'title'=>'max:20',
            'phonenumber'=>'max:20',
            'abme'=>'max:1500',
            'intr'=>'max:200',
        ])) {
            $st = Student::where('sID',Auth::user()->sID)->first();
            $st_prf = stud_profile::where('sID', Auth::user()->sID)->first();
            if(isset($request['firstname'])){
                if($request['firstname'] != null and $request['firstname'] != "") {
                    $name = $request['firstname'] . ' ' . $st->lastname;
                    $st->update(['firstname' => $request['firstname'], 'name' => $name]);
                }
            }
            if(isset($request['lastname'])){
                if($request['lastname'] != null and $request['lastname'] != "") {
                    $name2 = $st->firstname . ' ' . $request['lastname'];
                    $st->update(['lastname' => $request['lastname'], 'name' => $name2]);
                }
            }
            if(isset($request['title'])){
                if($request['title'] != null and $request['title'] != "") {
                    $st->update(['title' => $request['title']]);
                }
            }
            if(isset($request['phonenumber'])){
                if($request['phonenumber'] != null and $request['phonenumber'] != "") {
                    $st->update(['phonenumber' => $request['phonenumber']]);
                }
            }
            if(isset($request['abme'])){
                if($request['abme'] != null and $request['abme'] != "") {
                    $st_prf->update(['aboutme' => $request['abme']]);
                }
            }
            if(isset($request['intr'])){
                if($request['intr'] != null and $request['intr'] != "") {
                    $st_prf->update(['intressts' => $request['intr']]);
                }
            }
            if(isset($request['email'])){
                if($request['email'] != null and $request['email'] != ""){
                    if (Auth::user()->email != $request['email']) {
                        if (count(Student::where('email', $request['email'])->get()) != 0) {
                            return redirect()->back()->with('fail', __('messages.employee_edit_email_update_fail'));
                        } else {
                            $st->update(['email' => $request['email'], 'updated_at' => Carbon::now()]);
                        }
                    }
                }
            }

            return redirect()->back()->with('success',trans('messages.udinfo_success'));


        }
    }

    public function sedit()
    {
        //

        //echo "hallo";
        $st = Auth::user();
        if(count(stud_profile::where('sID',$st->sID)->get()) != 1){
            return redirect()->back()->with('fail',Lang::get('profiles.student_edit_st_prf_crit'));
        }
        $st_prf = stud_profile::where('sID', $st->sID)->first();

        if($st->firstname != null and $st->firstname != ""){
            $firstname = $st->firstname;
        }else{
            $firstname = Lang::get('profiles.student_edit_form_placeholder_firstname');
        }

        if($st->lastname != null and $st->lastname != ""){
            $lastname = $st->lastname;
        }else{
            $lastname = Lang::get('profiles.student_edit_form_placeholder_lastname');
        }

        if($st->title != null and $st->title != ""){
            $title= $st->title;
        }else{
            $title = Lang::get('profiles.student_edit_form_placeholder_title');
        }

        if($st->phonenumber != null and $st->phonenumber != ""){
            $phonenumber= $st->phonenumber;
        }else{
            $phonenumber = Lang::get('profiles.student_edit_form_placeholder_phonenumber');
        }

        if($st_prf->aboutme != null and $st_prf->aboutme != ""){
            $abme= $st_prf->aboutme;
        }else{
            $abme = Lang::get('profiles.student_edit_form_placeholder_abme');
        }

        if($st_prf->intressts != null and $st_prf->intressts != ""){
            $intr= $st_prf->intressts;
        }else{
            $intr = Lang::get('profiles.student_edit_form_placeholder_intr');
        }


        return view('/profiles/student/edit',compact('st','st_prf','firstname','lastname','title','phonenumber','abme','intr'));

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

            $st = Auth::user();
            // $st_pr = stud_profile::where('sID', Auth::user()->sID)->first();
            //dd($st);

            if (Hash::check($request['oldpswd'],$st->password)) {
                if ($request['newpswd'] == $request['newpswd2']) {
                    $st->update(['password' => Hash::make($request['newpswd'])]);
                    return redirect()->back()->with('success', trans('messages.studentprofile_updpswd_success'));
                } else {
                    return redirect()->back()->with('fail', trans('messages.studentprofile_updpswd_rp_fail'));
                }
            } else {
                return redirect()->back()->with('fail', trans('messages.studentprofile_updpswd_ver_fail'));
            }
        }
    }

    public function delete(){


        if(count(DA::where('sID',Auth::user()->sID)->get())>0){
            foreach (DA::where('sID',Auth::user()->sID)->get() as $da){

                $da->sID = null;
                $da->save();
            }
        }
        if(count(Team::where('sID',Auth::user()->sID)->get())>0){
            foreach (Team::where('sID',Auth::user()->sID)->get() as $team){
                $s = Student::where('teamID', $team->teamID)->get();
                if(count($s) >1){
                    if($s[0]->sID == Auth::user()->sID){
                        $team->sID = $s[1]->sID;
                    }else{
                        $team->sID = $s[0]->sID;
                    }
                    $team->save();
                }else {
                    $team->delete();
                }
            }
        }
        $st=Auth::user();
        $st->update(['deleted_ip_address'=>\request()->ip()]);
        $st->delete();
        return redirect('/');

    }
}
