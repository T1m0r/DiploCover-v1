@extends('layouts.apptch')
@section('pgtitle',__('tags.pg_title_team_profile'))
@section('head')
    <style>
    </style>
@endsection
@section('content')
    <div class="col-sm-7 container-fluid"><br/>
        <div class="center"><h1>{{$tm->tname}}</h1></div><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading">@lang('profiles.employee_team_profile_toverview')</div>
            <div class="panel-body">
                <div class="row container-fluid">
                    <table id="Klasse"style="width:100%">
                        <thead>
                        <tr>
                            <th></th>
                            <th>@lang('profiles.employee_team_profile_toverview_name')</th>
                            <th>@lang('profiles.employee_team_profile_toverview_klasse')</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tms as $tmm)
                            <tr>
                                <td><img src="{{asset($tmm->stprof()->first()->profpic)}}" style="height: 2em;" /></td>
                                <td>{{$tmm->firstname}} {{$tmm->lastname}}</td>
                                <td>{{$tmm->gradename()->first()->name}}</td>
                                <td><button style="width:100%" onclick="location.href='/teacher/student/{{urlencode($tmm->sID)}}/profile';" title="Profilepage" type="button" class="Profilebutton btn btn-default btn-lg btn-block">
                                        <i class="fa fa-user" style="color:black"></i></button></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <br/>
                    @if(isset($teach))
                        @if($teach != null)
                            <p>@lang('profiles.employee_team_profile_toverview_teach')</p>
                            <table id="Klasse"style="width:100%">
                                <thead>
                                <tr>
                                    <th>@lang('profiles.employee_team_profile_toverview_teach_lehrer')</th>
                                    <th>@lang('profiles.employee_team_profile_toverview_teach_name')</th>
                                    <th>@lang('profiles.employee_team_profile_toverview_teach_Schule')</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <td><img src="{{asset($teach->profpic)}}" style="height: 2em;" /></td>
                                    <td>{{$teach->title}} {{$teach->firstname}} {{$teach->lastname}}</td>
                                    <td>{{$teach->School()->first()->name}}</td>
                                    <td><button style="width:100%" onclick="location.href='/teacher/teacher/{{urlencode($teach->teachID)}}/profile';" title="Profilepage" type="button" class="Profilebutton btn btn-default btn-lg btn-block">
                                            <i class="fa fa-user" style="color:black"></i></button></td>
                                </tbody>
                            </table>
                        @endif
                    @endif
                </div>
            </div>
        </div>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><h4>@lang('profiles.employee_team_profile_contact')</h4></div>
            <div class="panel-body">
                <div class="ContactInfo">
                    <form action="/action_page.php">
                        <label class="fa fa-envelope" for="E-Mail"> @lang('profiles.employee_team_profile_contact_email')</label>
                        <p>{{$tm->student()->first()->email}}</p>
                    </form>
                </div>
            </div>
        </div><br/>
        @if(isset($ideas))
            @if(count($ideas)>0)
                <div id="Schatten"class="panel-group">
                    <div class="panel-heading"><h4>@lang('profiles.employee_team_profile_idea')</h4></div>
                    <div class="panel-body">
                        @foreach($ideas as $idea)
                            <div id="Schatten"class="panel-group">
                                <div class="panel-heading"><h4>{{$idea->iname}}</h4></div>
                                <div class="panel-body">
                                    {{$idea->ititle}}
                                </div>
                            </div><br/>
                        @endforeach
                    </div>
                </div>
            @endif
        @endif
    </div><br/>
@endsection
