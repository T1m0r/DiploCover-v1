@extends('layouts.apptch')

@section('head')
    <style>
        button[id="Buttons"]{
            width: 275px;
            background-color: #919191;
            color: white;
            padding: 5px 10px;
            margin: 5px 0;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            text-align: center;}
        button[id="Buttons"] :hover {
            background-color: #e89696;}
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
            float:right;}
        #Profilbild{
            border-radius: 175px;
            display:block;
            margin:0 auto;}
        #Logo{
            border-radius: 175px}
        .hallo{text-align: center;}
    </style>
@endsection
@section('content')
    <div class="container-fluid" style="padding-top: 2em;">
        <div class="row">
            <div class="col-sm-3 container-fluid">
                <div id="panelbody"class="panel-body">
                    <button id="Buttons" onclick="location.href ='{{route('tch.home')}}';" style="width:100%" type="button" class="btn btn-default btn-lg btn-block">@lang('profiles.teacher_lnt_home')</button>
                    <button id="Buttons" onclick="location.href ='{{route('teacher.edit')}}';" style="width:100%" type="button" class="btn btn-default btn-lg btn-block">@lang('profiles.teacher_lnt_edit')</button>
                    <button id="Buttons" onclick="location.href ='{{route('teacher.da.dashboard')}}';"  style="width:100%" type="button" class="btn btn-default btn-lg btn-block">@lang('profiles.teacher_lnt_da_dashboard')</button>

                </div>
            </div>
            <div class="col-sm-1 container-fluid"></div>
            <div class="col-sm-7 container-fluid">
                <div class="row justify-content-center" style="display: -webkit-box;">
                    <img src="{{asset($school->prfpic)}}" alt="Logo" height="100">
                    <h1> {{$school->schoolname}}</h1>

                </div>
                <div id="panelgroup"class="panel-group">


                    <div class="panel panel-default">
                        <div class="panel-heading">@lang('profiles.teacher_grade_dashboard_panel_grades_heading')</div>
                        @if(count($grades)>0)
                            @foreach($grades as $grade)
                                <div id="panelbody"class="panel-body">
                                    <div class="panel panel-primary">
                                        @foreach($grades as $grade)
                                            <div class="panel panel-primary">
                                                <div class="panel-heading container-fluid">
                                                    <div class="col-lg-2 col-md-3">@lang('profiles.teacher_tchome_grade_gname') {{$grade->name}}</div>
                                                    <div class="col-lg-9 col-md-8"></div>
                                                    <div class="col-lg-1 col-md-1">
                                                        <form action="{{route('teacher.grade.rmv')}}" method="post" onclick="if(confirm('Sind Sie sicher das Sie diese KLasse löschen wollen? Dadurch werden alle Schüler und ihre Verknüpfungen (wie DA-Bewerbungen, etc) gelöscht!')){return true;}else{event.stopPropagation();event.preventDefault();};">
                                                            {{csrf_field()}}
                                                            <input type="hidden" name="gradeID" value="{{ $grade->gradeID }}" />
                                                            <button type="submit" class="btn btn-success"  data-toggle="tooltip" data-replacement="top" title="{{\Illuminate\Support\Facades\Lang::get('tags.gradedashboard_lang_error_btn_rmv')}}" ><i class="glyphicon glyphicon-trash" ></i></button>
                                                        </form>
                                                    </div>



                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6">@lang('profiles.teacher_tchome_grade_gteach') {{$grade->teacher()->get()[0]->name}}</div>
                                                        <div class="row col-lg-6 col-md-3"></div>
                                                        <div  class="col-lg-2 col-md-3" id="Status">@lang('profiles.teacher_tchome_grade_stcount') {{$grade->students}}</div>
                                                    </div>
                                                    <hr/>
                                                    <div>@lang('profiles.teacher_tchome_grade_team')
                                                    </div>
                                                    <button onclick="location.href ='/teacher/grade/{{urlencode($grade->gradeID)}}/index';"id="ShowMore" type="button" class="btn btn-success">@lang('profiles.teacher_tchome_grade_more')</button>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="panel panel-default">
                                <div class="panel-heading"></div>
                                <div class="panel-body">
                                    <p>@lang('profiles.teacher_grade_dashboard_0gradefail')</p>
                                    <button onclick="location.href ='/teacher/grade/new';" id="Erstell_Buttons" type="button" class="btn btn-default btn-lg btn-block">
                                        <i class="glyphicon glyphicon-plus"></i>
                                    </button>
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="panel panel-default">
                    </div>
                </div>
            </div>
            <div class="col-sm-1 container-fluid"></div>
        </div>
    </div>
@endsection