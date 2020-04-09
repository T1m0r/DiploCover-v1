@extends('layouts.app')
@section('head')

@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h3>{{$ideas->iname}}</h3></div>

                    <div class="card-body">
                        <h5>{{$ideas->idesc}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
