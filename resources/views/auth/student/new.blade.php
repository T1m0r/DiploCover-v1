@extends('layouts.unauth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        {{csrf_field()}}
                        {!! Form::open(['method'=>'POST', 'action'=>'StudentsController@store']) !!}

                            <div class="form-group row">
                                <label for="Amount" class="col-md-4 col-form-label text-md-right">{{ __('Amount') }}</label>

                                <div class="col-md-6">

                                    <div class="form-group">
                                        {!! Form::label('number', 'Amount:') !!}
                                        {!! Form::number('number', null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <button data-toggle="collapse" data-target="#newgrade" class="form-group">New Grade</button>
                            <!--Begin Dropdown New Grade -->
                            <div id="newgrade" class="form-group row collapse">
                                <label for="grade" class="col-md-4 col-form-label text-md-right">{{ __('Grade') }}</label>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!!Form::label('name', 'Grade-name:') !!}
                                        {!! Form::text('name', null, ['class' =>'form-control']) !!}
                                    </div>
                                </div>
                            </div><!--End Dropdown New Grade -->
                            <button data-toggle="collapse" data-target="#selectgrade" class="form-group">Select existing Grade</button>
                            <!--Begin Dropdown Choose Grade -->
                            <div id="selectgrade" class="form-group row collapse">
                                <div class="form-group">
                                    {!! Form::label('gradeID', 'Grade:') !!}
                                    {!! Form::select('gradeID', $grades,null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <!--end Dropdown Begfin -->



                        <div class="form-group">
                            {!! Form::label('email', 'Email:') !!}
                            {!! Form::email('email', null,['class'=>'form-control']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('status', 'Status:') !!}
                            {!! Form::select('status', array(1 =>'Active', 0=>'Not Active'),0,['class'=>'form-control']) !!}
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
