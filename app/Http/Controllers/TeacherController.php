<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Teacher;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('teacher.index.html');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $teachers = [""=>"choose school operator"]+Teacher::pluck('name', 'teachID')->where('schoolID' == null);


        return view('create.teacher.create-school', compact('teachers'));
    }

    public function createstand()
    {
        return view('create.teacher.create-standalone');
    }

    public function stor_alone(Request $request)
    {

        $this->validate($request,[
            'firstname'=>'required|max:70',
            'lastname'=>'required|max:70',
            'email'=>'required',
        ]);

        $teachID = random_bytes(10);
        $teachID = Hash::make($teachID);

        /*if(!($schoolID->unique())){
            return view('schools.create');
        }*/

        $conf = random_int(100000, 9999999);
        $pswd = random_int(100000, 9999999);

        $now = Carbon::now(new DateTimeZone('Europe/Vienna'));

        $teacher = new Teacher();
        $teacher->teachID= $teachID;
        $teacher->sregistercode= $conf;
        $teacher->name= $request['firstname']. ' '.$request['lastname'];
        $teacher->firstname= $request['firstname'];
        $teacher->lastname= $request['lastname'];
        $teacher->email= $request['email'];
        $teacher->roleID= '1';
        $teacher->pswd= $pswd;
        $teacher->updated_at= $now;
        $teacher->created_at= $now;
        $teacher->save();

        return redirect('/teacher/');



        //return view('teacher.create-school', compact('teachers'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'firstname'=>'required|max:70',
            'lastname'=>'required|max:70',
            'email'=>'required',
            'schoolID'=>'required',
            'registercode'=>'required',
        ]);

       if( Teacher::findorfail($request['schoolID'])){
            $reg =  Teacher::findorfail($request['schoolID']);
            var_dump($reg);
       }

        $teachID = random_bytes(10);
        $teachID = Hash::make($teachID);

        /*if(!($schoolID->unique())){
            return view('schools.create');
        }*/

        $conf = random_int(100000, 9999999);
        $pswd = random_int(100000, 9999999);

        $now = Carbon::now(new DateTimeZone('Europe/Vienna'));

        $teacher = new Teacher();
            $teacher->teachID= $teachID;
            $teacher->sregistercode= $conf;
            $teacher->name= $request['firstname']. ' '.$request['lastname'];
            $teacher->firstname= $request['firstname'];
            $teacher->lastname= $request['lastname'];
            $teacher->schoolID= $request['schoolID'];
            $teacher->email= $request['email'];
            $teacher->roleID= '1';
            $teacher->pswd= $pswd;
            $teacher->updated_at= $now;
            $teacher->created_at= $now;
        $teacher->save();

        return redirect('/teacher/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }


    public function check(Request $request){


        if(School::findorfail($request->schoolID)){
            return response()->json(['success'=>'The school number is valide']);
        }else{
            return response()->json(['fail'=>'This school number is not valide']);
        }



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */

    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
