@extends('layouts.unauth')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create new standalone Employee') }}</div>

                    <div class="card-body">
                        {{csrf_field()}}
                        {!! Form::open(array('action' => 'EmployeeController@stor_alone', 'method'=>'post')) !!}
                        {{Form::token()}}

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('title', 'Title:') !!}
                                    {!! Form::text('title', null,['placeholder'=>'Prof.','class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('job', 'Job:') !!}
                                    {!! Form::text('job', null,['placeholder'=>'Project Manager', 'required','class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('firstname', 'Firstname:') !!}
                                    {!! Form::text('firstname', null,['placeholder'=>'Your firstname', 'required','class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('lastname', 'Lastname:') !!}
                                    {!! Form::text('lastname', null,['placeholder'=>'Your lastname', 'required','class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('phonenumber', 'Phonenumber:') !!}
                                    {!! Form::text('phonenumber', null,['placeholder'=>'0657 636489','class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email:') !!}
                            {!! Form::email('email',null,['placeholder'=>'email@mail.com','required', 'class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::submit('Register', ['class'=>'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
