@extends('layouts.unauth')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create new standalone Teacher') }}</div>

                    <div class="card-body">
                        {{csrf_field()}}
                        {!! Form::open(array('action' => 'Register\TeacherRegisterController@register', 'method'=>'post')) !!}
                        {{Form::token()}}
                        {{Form::token()}}
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('firstname', 'Firstname:') !!}
                                    {!! Form::text('firstname', null,['placeholder'=>'Firstname of the teacher', 'required','class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('lastname', 'Lastname:') !!}
                                    {!! Form::text('lastname', null,['placeholder'=>'Lastname of the teacher', 'required','class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email:') !!}
                            {!! Form::email('email',null,['placeholder'=>'email@mail.com','required', 'class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::submit('Create School', ['class'=>'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
