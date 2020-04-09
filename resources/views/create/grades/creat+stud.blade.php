@extends('layouts.unauth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create new Grade') }}</div>

                    <div class="card-body">
                        {{csrf_field()}}
                        {!! Form::open(array('action' => 'GradeController@storestudent', 'method'=>'post')) !!}

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('name', 'Grade-name:') !!}
                                    {!! Form::text('name', null,['placeholder'=>'1b','required','class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('school', 'Select School:') !!}
                            {!! Form::select('school', $schools,null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('teacher', 'Select Grade master:') !!}
                            {!! Form::select('teacher', $teachers,null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('amount', 'Amount of Students:') !!}
                            {!! Form::number('amount',null,['class'=>'form-control', 'default'=>1,'placeholder'=>'1']) !!}
                        </div>


                        <div class="form-group">
                            {!!Form::submit('Create Grade', ['class'=>'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
