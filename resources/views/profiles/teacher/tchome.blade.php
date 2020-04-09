@extends('layouts.apptch')
@section('pgtitle',__('tags.pg_title_home'))
@section('head')
    <style>
        .btn-teach-home{
            background-color: #cce1ff;
        }
    </style>
@endsection
@section('content')
    <div class="col-sm-1 container-fluid"></div>
    <div class="col-sm-7 container-fluid"><br/>
        <div id="Schatten" class="panel-group">
            <div class="panel-heading">@lang('profiles.teacher_tchome_panel_grades_heading')</div>
            <div class="panel-body">
                @if(count($grades) <1)
                    <div class="panel panel-primary">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
                            <p>@lang('profiles.teacher_tchome_grade_nograde')</p>
                            {{csrf_field()}}
                            {!! Form::open(array('action' => 'Teacher\Grade\TeacherGradeController@new', 'method'=>'post')) !!}

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('name', __('profiles.teacher_newgrade_formlabel_gname')) !!}
                                        {!! Form::text('name', null,['placeholder'=>'1b','required','class'=>'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('amount', __('profiles.teacher_newgrade_formlabel_amount')) !!}
                                {!! Form::number('amount',null,['class'=>'form-control', 'default'=>1, 'max'=>'120','placeholder'=>'1']) !!}
                            </div>


                            <div class="form-group">
                                {!!Form::submit(__('profiles.teacher_newgrade_form_submit'), ['style'=>'width:20%','title'=>__('tags.teacher_home_grade_new_title') ,'class'=>'Createbutton btn btn-default btn-lg btn-block']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                @else
                    @foreach($grades as $grade)
                        <div class="panel panel-primary">
                            <div class="panel-heading">@lang('profiles.teacher_tchome_grade_gname') {{$grade->name}}
                                <div id="Status">@lang('profiles.teacher_tchome_grade_stcount') {{$grade->students}}</div>
                            </div>
                            <div class="panel-body">
                                <div>@lang('profiles.teacher_tchome_grade_gteach') {{$grade->teacher()->get()[0]->name}}</div>
                                <div>@lang('profiles.teacher_tchome_grade_team')</div>
                                <button title="@lang('tags.teacher_home_grade_show_more_title')" onclick="location.href ='/teacher/grade/{{urlencode($grade->gradeID)}}/index';"id="ShowMore" type="button" class="btn btn-success">@lang('profiles.teacher_tchome_grade_more')</button>

                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading">@lang('profiles.teacher_tchome_panel_da_heading')</div>
            <div id="panelbody"class="panel-body">
                @if(count($das) <1)
                    <p>@lang('profiles.teacher_tchome_da_noda')</p>
                @else
                    @foreach($das as $da)
                        <div class="panel panel-primary">
                            <div class="panel-heading">@lang('profiles.teacher_tchome_da_dan') {{$da->DAname}}
                                @if($da->status == null)
                                    <div id="Status">@lang('profiles.teacher_tchome_da_sta_notdefined')</div>
                                @else
                                    <div id="Status">@lang('profiles.teacher_tchome_da_sta') {{$da->status}}</div>
                                @endif
                            </div>
                            <div class="panel-body">
                                @if($da->emplID == null)
                                    <div>@lang('profiles.teacher_tchome_da_noempl')</div>
                                @else
                                    <div>@lang('profiles.teacher_tchome_da_empl') {{$da->employee()->first()->name}}</div>
                                @endif
                                <div>@lang('profiles.teacher_tchome_da_comp'){{$da->company()->first()->compname}}</div>
                                <div>@lang('profiles.teacher_tchome_da_team')</div>
                                {{---<button id="ShowMore" type="button" class="btn btn-success">@lang('profiles.teacher_tchome_da_more')</button>---}}
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    </div>
@endsection