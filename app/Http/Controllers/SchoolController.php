<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mem = Teacher::whereNull('schoolID')->orwhere('schoolID','')->pluck('name','teachID')->all();
        if(count($mem) < 1){
            $teachers = ["lo"=>"","" =>"Sorry at the moment is no operator availiable", "lolo"=>""];
            var_dump($teachers);
        }else {

            $teachers = ["" => "choose school operator"] + Teacher::whereNull('schoolID')->orwhere('schoolID', '')->pluck('name', 'teachID')->all();
        }

        return view('create.schools.create', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:70',
            'school'=>'required',
        ]);

        $schoolID = random_bytes(10);
        $schoolID = Hash::make($schoolID);

        /*if(!($schoolID->unique())){
            return view('schools.create');
        }*/

        $pswd = random_int(100000, 9999999);
        $conf = random_int(100000, 9999999);
        $regc = random_int(100000, 9999999);





        $school = new School();
        $school->schoolID= $schoolID;
        $school->schoolname= $request['name'];
        $school->teachID= $request['school'];
        $school->pswd= $pswd;
        $school->confirmcode= $conf;
        $school->schregistercode= $regc;
        $school->save();


        $o = Teacher::whereTeachid($request['school']);
        $o->update(['schoolID'=> $schoolID]);

         return redirect('/school/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        //
    }
}
