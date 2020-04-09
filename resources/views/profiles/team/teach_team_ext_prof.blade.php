@extends('layouts.apptch')
@section('head')
    <style>
        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);}
        .container:hover .middle {
            opacity: 1;}
        .text {
            background-color: #4CAF50;
            border-radius: 5px;
            color: white;
            font-size: 15px;
            padding: auto;}
        #Teamname{
            font-size: 40px}
        #DasTeam{
            background-color: lightgrey;
            width: auto;
            border: 300px;
            padding: 25px;
            margin: 25px;}
        #Idea {
            width: 100%;
            height: 150px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
            font-size: 16px;
            resize: none;}
    </style>
@endsection
@section('content')
    <div id="DasTeam"class="row">
        <div class="container-fluid bg-3 text-center">
            <div id="Teamname"class="Team">{{$tm->tname}}</div>
        </div>
        <div class="container-fluid bg-3 text-center">
            <div id="Bild1" class="col-sm-4 container">
                <img src="{{asset($tms[0]->stprof->profpic)}}" alt="Avatar" class="img-circle">
                <div class="middle">
                    <div class="text">{{$tms[0]->name}}</div>
                </div>
            </div>
            @if(isset($tms[1]))
                <div id="Bild2" class="col-sm-4 container">
                    <img src="{{asset($tms[1]->stprof->profpic)}}" alt="Avatar" class="img-circle" >
                    <div class="middle">
                        <div class="text">{{$tms[1]->name}}</div>
                    </div>
                </div>
            @endif
            @if(isset($tms[2]))
                <div id="Bild3" class="col-sm-4 container">
                    <img src="{{asset($tms[2]->stprof->profpic)}}avatar.png" alt="Avatar" class="img-circle" >
                    <div class="middle">
                        <div class="text">{{$tms[2]->name}}</div>
                    </div>
                </div>
            @endif
        </div>
        <div class="container-fluid bg-3 text-center">
            @if(isset($tms[3]))
                <div id="Bild3" class="col-sm-6 container">
                    <img src="{{asset($tms[3]->stprof->profpic)}}" alt="Avatar" class="img-circle" >
                    <div class="middle">
                        <div class="text">{{$tms[3]->name}}</div>
                    </div>
                </div>
            @endif
            @if(isset($tms[4]))
                <div id="Bild3" class="col-sm-6 container">
                    <img src="{{asset($tms[4]->stprof->profpic)}}" alt="Avatar" class="img-circle" >
                    <div class="middle">
                        <div class="text">{{$tms[4]->name}}</div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <p id=Idea> Ich bin eine Idee</p>
@endsection
