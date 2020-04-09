@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('form.company_create_title') }}</div>

                    <div class="card-body">
                        {{csrf_field()}}
                        {!! Form::open(['method'=>'POST', 'action'=>'Register\CompanyRegisterController@create']) !!}

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('cname', __('form.company_create_form_cname')) !!}
                                    {!! Form::text('cname', null,['class'=>'form-control','placeholder'=>__('form.company_create_form_placeholder_cname'),'required']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('cmail', __('form.company_create_form_cmail')) !!}
                            {!! Form::email('cmail', null,['class'=>'form-control','placeholder'=>__('form.company_create_form_placeholder_cmail'),'required']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::submit(__('form.company_create_form_submit'), ['class'=>'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
