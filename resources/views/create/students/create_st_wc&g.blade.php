@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        {{csrf_field()}}
                        {!! Form::open(['method'=>'POST', 'action'=>'StudentController@store']) !!}

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('number', 'Amount:') !!}
                                    {!! Form::number('number', null,['class'=>'form-control'], 'required') !!}
                                </div>
                            </div>
                        </div>
                            <div class="form-group">
                                {!! Form::label('gradeID', 'Grade:') !!}
                                {!! Form::select('gradeID', $grades,null,['class'=>'form-control', 'required']) !!}
                            </div>
                        <div class="form-group">
                            {!! Form::label('teach', 'Teacher:') !!}
                            {!! Form::select('teach', $teachers,null, ['class'=>'form-control', 'required']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('status', 'Status:') !!}
                            {!! Form::select('status', array(1 =>'Active', 0=>'Not Active'),0,['class'=>'form-control', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
