@extends('layouts.appemp')
@section('pgtitle',__('tags.pg_title_chome'))
@section('head')
    <style>
        button[id="Buttons"]{
            width: auto;
            background-color: #7C7C7C;
            color: white;
            padding: 5px 10px;
            margin:  5px 0;
            border: none;
            border-radius: 50px;
            cursor: pointer;}
        button[id="Buttons"]:hover {
            background-color: #676767;}
        button[id="Erstell_Buttons"]{
            width:auto;
            background-color: white;
            color: black;
            padding: auto;
            margin: auto;
            border: none;
            border-radius: 100px;
            cursor: pointer;}
        #panelbody{
            webkit-box-shadow: 30px 32px 90px -11px rgba(99,125,116,0.75);
            moz-box-shadow: 30px 32px 90px -11px rgba(99,125,116,0.75);
            box-shadow: 30px 32px 90px -11px rgba(99,125,116,0.75);
            background-color:#ffffff}
        #ShowMore{
            width: auto;
            background-color: #7C7C7C;
            color: white;
            padding: 5px 10px;
            margin:  5px 0;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            float:right;}
        #Profilbild{
            float:left;
            border-radius: 100px;}
        #Logo{
            border-radius: 175px;
            display:block;
            margin:0 auto;}
        .hallo{
            text-align: center;}
    </style>
@endsection
@section('content')
<div class="container-fluid">
    <br />
    <div class="row">
        <div class="col-sm-3">
            <div id="panelgroup"class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">Mitarbeiter</div>
                    <div id="panelbody"class="panel-body">
                        <div class="btn-group-vertical col-sm-12 container-fluid">
                            @foreach($emps as $employ)
                            <button type="button" class="btn btn-default btn-lg btn-block">{{$employ->name}}
                                <img id="Profilbild"src="{{$employ->prfpic}}" alt="ProfilePicture" height="40">
                            </button>
                            @endforeach
                        </div>
                        <div><button id="ShowMore" onclick="location.href = '/company/empm'" type="button" class="btn btn-default btn-lg btn-block">Show More</button></div>
                        <div>
                            <button id="Buttons" onclick="location.href = '/cedit'" style="width:100%" type="button" class="btn btn-default btn-lg btn-block"> Company Settings</button>
                            <button id="Buttons" style="width:100%" type="button" class="btn btn-default btn-lg btn-block">Manage Da's</button>
                            <button id="Buttons" onclick="location.href = '/company/empm'" style="width:100%" type="button" class="btn btn-default btn-lg btn-block">Manage Emplo.</button>
                            <button id="Buttons" onclick="location.href = '/teacher/edit'" style="width:100%" type="button" class="btn btn-default btn-lg btn-block">Manage Emplo.</button>
                            <button id="Buttons" onclick="location.href = '/company/empm'" style="width:100%" type="button" class="btn btn-default btn-lg btn-block">Manage Emplo.</button>
                            <!--<button id="Buttons" style="width:100%" type="button" class="btn btn-default btn-lg btn-block">Manage Profile</button>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-7 container-fluid">
            <img id="Logo" src="{{asset($comp->profpic)}}" alt="Avatar" height="100">
            <div class="hallo"><h1>{{$comp->compname}}</h1></div>
            <div id="panelgroup"class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">Diplomarbeitsübersicht</div>
                    <div id="panelbody"class="panel-body">
                        @if(count($das) <=0)
                            <p>Sry you haven't created any DA yet.</p>
                        @else
                            @foreach($das as $da)
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Diplomarbeit:{{$da->DAname}}
                                        <div id="Status">Status: {{$da->status}}</div>
                                    </div>
                                    <div class="panel-body">
                                        <div>Firmen-Betreuer:</div>
                                        <div>Team: {{T}}</div>
                                        <button id="ShowMore" type="button" class="btn btn-success">Show more</button>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        <button id="Erstell_Buttons" onclick="window.location='{{route('company.da.add')}}'" type="button" class="btn btn-default btn-lg btn-block">
                            <i class="glyphicon glyphicon-plus" ></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
@endsection