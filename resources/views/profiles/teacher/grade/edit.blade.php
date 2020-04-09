@extends('layouts.apptch')
@section('head')
    <style>
        body {font-family: Arial;}

        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            /*padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;*/
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">@lang('profiles.teacher_grade_edit_panel_title')</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            {{csrf_field()}}
                            {!! Form::open(['method'=>'POST', 'action'=>'Teacher\Grade\TeacherGradeController@update']) !!}
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::hidden('gradeID', $grade->gradeID) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('gradename', __('profiles.teacher_grade_edit_gname'))!!}
                                        {!! Form::text('gradename', null,['class'=>'form-control','placeholder'=>$grade->name]) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {!!Form::submit(__('profiles.teacher_grade_edit_update'), ['class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
