@extends('layouts.unauth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('form.register_students_wc_success_title') }}</div>

                    <div class="card-body">
                        <div class="alert alert-success">
                            @lang('form.register_students_wc_success_msg_success')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
