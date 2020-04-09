@extends('layouts.apptch')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('profiles.teacher_newgrade_title') }}</div>

                    <div class="card-body">
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
                            {!! Form::number('amount',null,['class'=>'form-control', 'default'=>1,'placeholder'=>'1']) !!}
                        </div>


                        <div class="form-group">
                            {!!Form::submit(__('profiles.teacher_newgrade_form_submit'), ['class'=>'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
