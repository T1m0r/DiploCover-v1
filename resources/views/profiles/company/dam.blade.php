@extends('layouts.app')
@section('head')
    <style>
        body {
            background-color: pink;
            font-family: "Times New Roman", Times, serif;}
        #Status,#Zum_Team{
            float:right}
        ul {
            list-style-type: none;
            margin: auto;
            padding: 0;
            width: auto;
            background-color: grey;
            position: fixed;
            height: 100%;
            overflow: auto;}
        li a {
            display: block;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;}
        li a:hover{
            background-color: #555;
            color: white;}
    </style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <ul>
            <li><a href="#home">DA ertstellen</a></li>
            <li><a href="#news">DA löschen</a></li>
            <li><a href="#contact">DA ändern</a></li>
            <li><a href="#about">DA kontrollieren</a></li>
        </ul>
        <div style="margin-left:20%;padding:auto;height:auto;">
            <div class="col-sm-11">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">Diplomarbeit:
                            <div id="Status"text="left"> Status:</div>
                        </div>
                        <div class="panel-body">Betreuer
                            <div id="Team"text="left">Team:</div>
                            <button id="Zum_Team"type="button" class="btn btn-success">Zum Team</button>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">Diplomarbeit:
                            <div id="Status"text="left"> Status:</div>
                        </div>
                        <div class="panel-body">Betreuer
                            <div id="Team"text="left">Team:</div>
                            <button id="Zum_Team"type="button" class="btn btn-success">Zum Team</button>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">Diplomarbeit:
                            <div id="Status"text="left"> Status:</div>
                        </div>
                        <div class="panel-body">Betreuer
                            <div id="Team"text="left">Team:</div>
                            <button id="Zum_Team"type="button" class="btn btn-success">Zum Team</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
