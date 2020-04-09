<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\School;
use App\Models\Student;
use App\Models\Teacher;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class GradeController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schools = [""=>"choose school"]+School::pluck('schoolname', 'schoolID')->all();
        $teachers = [""=>"choose grade teacher"]+Teacher::whereNull('gradeID')->orwhere('gradeID','')->pluck('name', 'teachID')->all();


        return view('create.grades.create', compact('schools','teachers'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createstudent()
    {
        $schools = [""=>"choose school"]+School::pluck('schoolname', 'schoolID')->all();
        $teachers = [""=>"choose grade teacher"]+Teacher::whereNull('gradeID')->orwhere('gradeID','')->pluck('name', 'teachID')->all();


        return view('create.grades.creat+stud', compact('schools','teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|max:20',
            'school'=>'required',
            'teacher'=>'required',
        ]);

        $gradeID = random_bytes(10);
        $gradeID = Hash::make($gradeID);

        $now = Carbon::now(new DateTimeZone('Europe/Vienna'));

        $pswd = random_int(1000000,9999999);


        $grade = new Grade();
        $grade->gradeID=$gradeID;
        $grade->schoolID=$request['school'];
        $grade->name=$request['name'];
        $grade->teachID=$request['teacher'];
        $grade->students=0;
        $grade->pswd=$pswd;
        $grade->created_at=$now;
        $grade->updated_at=$now;
        $grade->save();


        return redirect('/school/');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storestudent(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|max:20',
            'school'=>'required',
            'teacher'=>'required',
            'amount'=>'max:3',
        ]);

        $gradeID = random_bytes(10);
        $gradeID = Hash::make($gradeID);

        $now = Carbon::now(new DateTimeZone('Europe/Vienna'));

        $pswd = random_int(1000000,9999999);
        $sts = 0;

        $grade = new Grade();
        $grade->gradeID=$gradeID;
        $grade->schoolID=$request['school'];
        $grade->name=$request['name'];
        $grade->teachID=$request['teacher'];
        $grade->students=$sts;
        $grade->password=$pswd;
        $grade->created_at=$now;
        $grade->updated_at=$now;
        $grade->save();

        $am = (int)$request['amount'];

        for ($i=0;$i<$am;$i++){
            $sid = random_bytes(10);
            $sid = str_limit(Hash::make($sid),16);
            if(str_contains($sid,'/')){
                str_replace('/','l',$sid);
            }
            $scode = random_int(100000, 9999999);
            $remeber = str_limit(Hash::make(random_int(100000, 9999999)),10);
            $pswd = random_int(1000000,9999999);
            $now = Carbon::now(new DateTimeZone('Europe/Vienna'));
            $st = new Student();
            $st->sID = $sid;
            $st->scode = $scode;
            $st->schoolID = $request['school'];
            $st->gradeID = $gradeID;
            $st->roleID = 0;
            $st->status = 0;
            $st->password=$pswd;
            $st->remember_token = $remeber;
            $st->created_at=$now;
            $st->updated_at = $now;
            $st->save();

            $sts = $sts +1;
        }
        $gr=Grade::findorfail($gradeID)->first();
        $gr->update(['students' =>$sts]);



        return redirect('/school/');
    }

    /**
     * Display the specified resource.aa
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grade $grade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {
        //
    }
}
