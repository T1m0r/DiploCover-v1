@extends('layouts.apptch')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('profiles.teacher_grade_add_st_title') }}</div>

                    <div class="card-body">
                        {{csrf_field()}}
                        {!! Form::open(array('action' => 'Teacher\Grade\TeacherGradeController@creatests', 'method'=>'post')) !!}

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::hidden('gradeID', $gradeID,['required','class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('amount', __('profiles.teacher_grade_add_st_formlabel_amount')) !!}
                            {!! Form::number('amount',null,['class'=>'form-control', 'default'=>1,'placeholder'=>'1']) !!}
                        </div>


                        <div class="form-group">
                            {!!Form::submit(__('profiles.teacher_grade_add_st_form_submit'), ['class'=>'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
