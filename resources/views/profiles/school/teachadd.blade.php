@extends('layouts.apptch')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('profiles.school_add_teacher_title') }}</div>

                    <div class="card-body">
                        {{csrf_field()}}
                        {!! Form::open(array('action' => 'Register\TeacherRegisterController@schregisterteach', 'method'=>'post')) !!}
                        {{Form::token()}}
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('firstname', __('profiles.school_add_teacher_formlabel_firstname')) !!}
                                    {!! Form::text('firstname', null,['placeholder'=>'Firstname of the teacher', 'required','class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('lastname', __('profiles.school_add_teacher_formlabel_lastname')) !!}
                                    {!! Form::text('lastname', null,['placeholder'=>'Lastname of the teacher', 'required','class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', __('profiles.school_add_teacher_formlabel_email')) !!}
                            {!! Form::email('email',null,['placeholder'=>'email@mail.com','required', 'class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::submit(__('profiles.school_add_teacher_form_submit'), ['class'=>'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
