@extends('layouts.unauth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('form.errormsg') }}</div>
                    <div class="card-body">
                        <div class="alert alert-danger">
                            <h1>{{$errormsg}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
