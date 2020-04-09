@extends('layouts.appemp')
@section('head')
    <style>
        body{
            font-family: "Times New Roman", Times, serif;}
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
        #Profilbild{
            border-radius: 175px;
            display:block;
            margin:0 auto;
            box-shadow: 1px 2px 5px #000000;}
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
        #annehemen{
            width: auto;
            background-color: #3feb18;
            color: white;
            padding: 5px 10px;
            margin:  5px 0;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            float:right;}
        .hallo{
            text-align: center;}
    </style>
@endsection
@section('content')
<div class="container-fluid">
    <br />
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10 container-fluid">
            <div class="hallo"><h1>@lang('profiles.company_applist_title')</h1></div><br />
            <div id="panelgroup"class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('profiles.company_applist_panel_heading')</div>
                    <div id="panelbody"class="panel-body">
                        @foreach($appls as $apply)
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <!--<button id="ShowMore" type="button" class="btn btn-success">Zur Gruppe</button>-->

                                    <div>@lang('profiles.company_applist_panel_school') {{$apply->Student()->first()->school()->first()->schoolname}}</div>
                                    <div>@lang('profiles.company_applist_panel_grade') {{$apply->Student()->first()->gradename()->first()->name}}</div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-sm-2">
                                        <div  class="hallo">@lang('profiles.company_applist_panel_teach')</div><br />
                                        @if(count($apply->Team()->first()->teacher()->get()) == 1)
                                            <img id="Profilbild"src="{{asset($apply->Team()->first()->teacher()->first()->prfpic)}}" alt="Avatar" height="50"><br />
                                            <div class="hallo">{{$apply->Team()->first()->teacher()->first()->name}}</div>
                                            <div class="hallo">{{$apply->Team()->first()->teacher()->first()->email}}</div>
                                        @else
                                            <p>@lang('profiles.company_applist_panel_noteach')</p>
                                        @endif
                                    </div>
                                    @if(count($apply->Team()->first()->members()->get()) > 5)
                                        <div class="error">@lang('profiles.company_applist_panel_team_invalide_fail')</div>
                                    @else
                                        @foreach($apply->Team()->first()->members()->get() as $member)

                                            <div class="col-sm-2">
                                                <div  class="hallo">{{$member->name}}</div><br />
                                                <img id="Profilbild" src="{{asset($member->stprof()->first()->profpic)}}" alt="Avatar" height="50"><br />
                                                <div class="hallo">@lang('profiles.company_applist_panel_email') {{$member->email}}</div>
                                            </div>

                                        @endforeach
                                    @endif
                                    @if($da->optfield == 1)
                                        @if($da->optfieldtitle != null)
                                            <div class="col-sm-2">
                                                <div  class="hallo">{{$da->optfieldtitle}} :</div><br />
                                                <div class="hallo">{{$apply->optfield}}</div>
                                            </div>
                                        @else
                                            <div class="col-sm-2">
                                                <div  class="hallo">{{$da->optfieldtitle}} :</div><br />
                                                <div class="hallo">{{$apply->optfield}}</div>
                                            </div>
                                    @endif

                                    <div class="col-sm-3"></div>
                                    <!--<div class="col-sm-3"><button id="ablehnen" type="button" class=" hallo btn btn-success">Bewerber ablehnen</button></div>-->
                                    @if(($da->teamID == null or $da->teamID =="") and($da->sID == null or $da->sID == ""))
                                        <form action="{{route('company.da.add.team')}}" method="post" onclick="if(confirm('Are you sure you want to select this Team for your DA?')){return true;}else{event.stopPropagation();event.preventDefault();};">
                                            {{csrf_field()}}
                                            <input type="hidden" name="daid" value="{{ $da->DAid }}" />
                                            <input type="hidden" name="teamid" value="{{ $apply->teamID }}" />
                                            <div class="col-sm-3">
                                                <button id="annehemen" type="submit" class=" hallo btn btn-success">@lang('profiles.company_applist_team_accept')</button>
                                            </div>
                                        </form>
                                    @endif
                                    <hr />
                                        <div class="row">
                                            @if($da->optfield == 1)
                                                @if($da->optfieldtitle != null)
                                                    <div class="col-sm-2">
                                                        <div  class="hallo">{{$da->optfieldtitle}} :</div><br />
                                                        <div class="hallo">{{$apply->optfield}}</div>
                                                    </div>
                                                @else
                                                    <div class="col-sm-2">
                                                        <div  class="hallo">{{$da->optfieldtitle}} :</div><br />
                                                        <div class="hallo">{{$apply->optfield}}</div>
                                                    </div>
                                                @endif

                                        </div>
                                    <!--<div class="col-sm-3"><button id="ShowMore" type="button" class=" hallo btn btn-success">Show More</button></div>--->
                                </div>
                            </div><br />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
@endsection

