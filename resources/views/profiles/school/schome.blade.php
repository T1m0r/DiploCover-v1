@extends('layouts.appschool')
@section('pgtitle',__('tags.pg_title_school_home'))
@section('head')
    <style>
        .btn-school-home{
            background-color: #cce1ff;
        }
    </style>
@endsection
@section('content')

    <div class="col-sm-1 container-fluid"></div>
    <div class="col-sm-7 container-fluid">
        @if(count($schdas) > 0)
            <div id="Schatten"class="panel-group">
                <div class="panel-heading">Diplomarbeiten der Schule</div>
                <div id="panelbody"class="panel-body">
                    @foreach($schdas as $da)
                        <div class="panel panel-primary">
                            <div class="panel-heading">Diplomarbeit: {{$da->DAname}}
                                <div id="Status">Status: {{$da->status}}</div>
                            </div>
                            <div class="panel-body">
                                @if(count($da->empteacher()->get()) > 0)
                                    <div>Haupt-Betreuer: {{$da->empteacher()->first()->name}}</div>
                                @endif
                                @if(count($da->empzteacher()->get())>0)
                                    <div>Lehrer-Betreuer: {{$da->empzteacher->first()->name}} </div>
                                @endif
                                @if(count($da->team()->get()) ==1)
                                    <div>Team: {{$da->team()->first()->name}}
                                        @foreach($da->team()->first()->members()->get() as $memb)
                                            <p>{{$memb->name}}, </p>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div><br/>
                    @endforeach
                </div>
            </div>
        @endif

        <div id="panelgroup"class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('profiles.school_schome_panel_teachers_heading')</div>
                <div id="panelbody"class="panel-body">
                    @foreach($tchs as $teacher)

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                {{$teacher->name}}
                            </div>
                            <div class="panel-body">
                                @if(count($teacher->grade()->get())>0)
                                    @foreach($teacher->Grade()->get() as $grade)
                                        <div class="panel-body">
                                            <div>@lang('profiles.school_schome_teacher_gname') {{$grade->name}}</div>
                                            <div>@lang('profiles.school_schome_teacher_students') {{$grade->students}}</div>

                                        </div>
                                        <hr>
                                    @endforeach
                                    <hr>
                                    @if(count($teacher->team()->get())>0)
                                        @foreach($teacher->team()-get() as $tm)
                                            <div>@lang('profiles.school_schome_teacher_team_tname') {{$tm->tname}}</div>
                                            @if(count($tm->da()->get())==1)
                                                <div>@lang('profiles.school_schome_teacher_team_da') {{$tm->da()->get()[0]->daname}}</div>
                                            @else
                                                <div>@lang('profiles.school_schome_teacher_team_da_noda') </div>
                                            @endif
                                            <hr>
                                        @endforeach
                                    @else
                                        <div>@lang('profiles.school_schome_teacher_teams_noteam')</div>
                                    @endif
                                @else
                                    <div>@lang('profiles.school_schome_teacher_grade_nograde')</div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                    <button id="Erstell_Buttons" onclick="location.href='{{route('school.add.teacher')}}';" type="button" class="btn btn-default btn-lg btn-block">
                        <i class="glyphicon glyphicon-plus"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection