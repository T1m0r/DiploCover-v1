@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('form.company_further_title') }}</div>

                    <div class="card-body">
                        {{csrf_field()}}
                        {!! Form::open(['method'=>'POST', 'action'=>'Register\StudentRegisterController@register']) !!}

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('comname', __('form.company_further_form_cname')) !!}
                                    {!! Form::text('comname', null,['class'=>'form-control', 'required','placeholder'=>__('form.company_further_form_placeholder_cname')]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('comweb', __('form.company_further_form_cweb')) !!}
                            {!! Form::text('comweb',null,['class'=>'form-control','required','placeholder'=>__('form.company_further_form_placeholder_cweb')]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('comail', __('form.company_further_form_cmail')) !!}
                            {!! Form::email('comail', null,['class'=>'form-control', 'required', 'placeholder'=>__('form.company_further_form_placeholder_cmail')]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('coname', __('form.company_further_form_coname')) !!}
                            {!! Form::text('coname', null,['class'=>'form-control', 'required', 'placeholder'=>__('form.company_further_form_placeholder_coname')]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('tel', __('form.company_further_form_tel')) !!}
                            {!! Form::text('tel', null,['class'=>'form-control', 'placeholder'=>__('form.company_further_form_placeholder_tel')]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('logo', __('form.company_further_form_logo')) !!}
                            {!! Form::file('logo',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('add', __('form.company_further_form_add')) !!}
                            {!! Form::textarea('add', null,['class'=>'form-control', 'placeholder'=>__('form.company_further_form_placeholder_add')]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('codesc', __('form.company_further_form_codesc')) !!}
                            {!! Form::textarea('codesc', null,['class'=>'form-control', 'placeholder'=>__('form.company_further_form_placeholder_codesc')]) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::submit(__('form.company_further_form_submit'), ['class'=>'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
