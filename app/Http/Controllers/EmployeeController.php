<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
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
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function stor_alone(Request $request)
    {
        //
        $this->validate($request,[
            'title'=>'max:70',
            'job'=>'required|max:100',
            'firstname'=>'required|max:70',
            'lastname'=>'required|max:70',
            'phonenumber'=>'max:70',
            'email'=>'required',
        ]);

        $emplID = random_bytes(10);
        $emplID = Hash::make($emplID);

        /*if(!($schoolID->unique())){
            return view('schools.create');
        }*/

        $conf = random_int(100000, 9999999);
        $pswd = random_int(100000, 9999999);

        $now = Carbon::now(new DateTimeZone('Europe/Vienna'));

        $emp = new Employee();
            $emp->emplID= $emplID;
            $emp->title= $request['title'];
            $emp->job = $request['job'];
            $emp->name= $request['firstname']. ' '.$request['lastname'];
            $emp->firstname= $request['firstname'];
            $emp->lastname= $request['lastname'];
            $emp->phonenumber= $request['phonenumber'];
            $emp->companyID= 000;
            $emp->email= $request['email'];
            $emp->roleID= '1';
            $emp->status= '0';
            $emp->pswd= $pswd;
            $emp->confirmcode= $conf;
            $emp->updated_at= $now;
            $emp->created_at= $now;
        $emp->save();

        return redirect('/teacher/');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //
        $this->validate($request,[
            'title'=>'max:70',
            'job'=>'required|max:100',
            'firstname'=>'required|max:70',
            'lastname'=>'required|max:70',
            'phonenumber'=>'max:70',
            'email'=>'required',
        ]);

        $emplID = random_bytes(10);
        $emplID = Hash::make($emplID);

        /*if(!($schoolID->unique())){
            return view('schools.create');
        }*/

        $conf = random_int(100000, 9999999);
        $pswd = random_int(100000, 9999999);

        $now = Carbon::now(new DateTimeZone('Europe/Vienna'));

        $emp = new Employee();
        $emp->emplID= $emplID;
        $emp->title= $request['title'];
        $emp->job = $request['job'];
        $emp->name= $request['firstname']. ' '.$request['lastname'];
        $emp->firstname= $request['firstname'];
        $emp->lastname= $request['lastname'];
        $emp->phonenumber= $request['phonenumber'];
        $emp->companyID= 000;
        $emp->email= $request['email'];
        $emp->roleID= '1';
        $emp->status= '0';
        $emp->pswd= $pswd;
        $emp->confirmcode= $conf;
        $emp->updated_at= $now;
        $emp->created_at= $now;
        $emp->save();

        return redirect('/teacher/');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
