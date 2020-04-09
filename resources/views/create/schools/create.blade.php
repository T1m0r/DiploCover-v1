@extends('layouts.unauth')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create new School') }}</div>

                    <div class="card-body">
                        {{csrf_field()}}
                        {!! Form::open(array('action' => 'SchoolController@store', 'method'=>'post')) !!}

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('name', 'School-name:') !!}
                                    {!! Form::text('name', null,['placeholder'=>'Muster HTL', 'required','class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>

                        @if(count($teachers) < 1)

                            <div class="form-group">
                                {!! Form::label('nop', 'We are very sorry but currently is no operator to choose availiable: You can create one:'.'<a href="/teacher/create/standalone">here.</a>') !!}
                            </div>

                        @else

                            <div class="form-group">
                                {!! Form::label('school', 'Select School operator:') !!}
                                {!! Form::select('school', $teachers,null,['required', 'class'=>'form-control']) !!}

                            </div>

                        @endif
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
