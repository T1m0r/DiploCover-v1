@extends('layouts.appcomp')
@section('pgtitle',__('tags.pg_title_employee_applist'))
@section('head')
    <style>

    </style>
@endsection
@section('content')
    <div class="col-sm-1 container-fluid"></div>
    <div class="col-sm-7 container-fluid"><br/>
        <div class="center"><h1>Bewerbungsliste</h1></div><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"></div>
            <div id="panelbody"class="panel-body">
                @foreach($appls as $apply)
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <!--<button id="ShowMore" type="button" class="btn btn-success">Zur Gruppe</button>-->

                            <div>@lang('profiles.company_applist_panel_school') <a style="color: whitesmoke" href="/employee/school/{{urlencode($apply->Student()->first()->school()->first()->schoolID)}}/profile">{{$apply->Student()->first()->school()->first()->schoolname}}</a></div>
                            <div>@lang('profiles.company_applist_panel_grade') {{$apply->Student()->first()->gradename()->first()->name}}</div>
                            <div>@lang('profiles.company_applist_panel_team') <a style="color: whitesmoke" href="/employee/team/{{urlencode($apply->Student()->first()->team()->first()->teamID)}}/profile">{{$apply->Student()->first()->team()->first()->tname}}</a></div>
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
                                        <div  class="hallo"><a href="/employee/student/{{urlencode($member->sID)}}/profile">{{$member->name}}</a></div><br />
                                        <img id="Profilbild" src="{{asset($member->stprof()->first()->profpic)}}" alt="Avatar" height="50"><br />
                                        <div class="hallo">@lang('profiles.company_applist_panel_email') {{$member->email}}</div>
                                    </div>

                                @endforeach
                            @endif


                            <div class="col-sm-3"></div>
                            <!--<div class="col-sm-3"><button id="ablehnen" type="button" class=" hallo btn btn-success">Bewerber ablehnen</button></div>-->
                            @if(($da->teamID == null or $da->teamID =="") and($da->sID == null or $da->sID == ""))
                                <form action="{{route('company.da.add.team')}}" method="post" onclick="if(confirm(' @lang('profiles.emp_da_add_team_question') ')){return true;}else{event.stopPropagation();event.preventDefault();};">
                                    {{csrf_field()}}
                                    <input type="hidden" name="daid" value="{{ $da->DAid }}" />
                                    <input type="hidden" name="teamid" value="{{ $apply->teamID }}" />
                                    <div class="col-sm-3">
                                        <button id="annehemen" type="submit" class=" hallo btn btn-success">@lang('profiles.company_applist_team_accept')</button>
                                    </div>
                                </form>
                        @endif

                        <!--<div class="col-sm-3"><button id="ShowMore" type="button" class=" hallo btn btn-success">Show More</button></div>--->
                        </div>
                        <hr />
                        <div class="row">
                            @if($da->optfield == 1)
                                @if($da->optfieldtitle != null)
                                    <div class="col-sm-12">
                                        <div  class="hallo">{{$da->optfieldtitle}} :</div><br />
                                        <div class="hallo">{{$apply->optfield}}</div>
                                    </div>
                                @else
                                    <div class="col-sm-12">
                                        <div  class="hallo">{{$da->optfieldtitle}} :</div><br />
                                        <div class="hallo">{{$apply->optfield}}</div>
                                    </div>
                                @endif
                            @endif

                        </div>
                    </div><br />
                @endforeach
                {{---<div class="panel panel-primary">
                    <div class="panel-heading">Team:
                        <div id="Status">Status:</div>
                    </div>
                    <div class="panel-body">
                        <div>Lehrer-Betreuer:</div>
                        <div>Team:</div>
                        <button id="ShowMore" title="Show Teampage" type="button" class="btn btn-success">
                            <i class='fas fa-ellipsis-h' style="width:100%"></i>
                        </button>
                    </div>
                </div><br/>---}}
            </div>
        </div>
    </div>
{{--<div class="container-fluid">
    <br />
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10 container-fluid">
            <div class="hallo"><h1>@lang('profiles.company_applist_title')</h1></div><br />
            <div id="panelgroup"class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('profiles.company_applist_panel_heading')</div>
                    <div id="panelbody"class="panel-body">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>--}}
@endsection

