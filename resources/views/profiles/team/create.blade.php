@extends('layouts.app')
@section('head')

@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Team') }}</div>

                    <div class="card-body">
                        {{csrf_field()}}
                        {!! Form::open(['method'=>'POST', 'action'=>'Profile\TeamProfileController@create']) !!}

                        <div class="form-group">
                            {!! Form::label('tname', 'Teamname:') !!}
                            {!! Form::text('tname',null,['class'=>'form-control','required','placeholder'=>'Team X-Force']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::submit('Create', ['class'=>'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jspace')


@endsection
