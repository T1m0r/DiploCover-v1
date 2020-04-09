@extends('layouts.unauth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('form.register_other_emplwoc_title') }}</div>

                    <div class="card-body">
                        {{csrf_field()}}
                        {!! Form::open(['method'=>'POST', 'action'=>'Register\EmployeeRegisterController@regmailwoc']) !!}

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('Emplname', __('form.register_other_emplwoc_form_empname')) !!}
                                    {!! Form::text('Emplname', null,['class'=>'form-control', 'required','placeholder'=>__('form.register_other_emplwoc_form_placeholder_empname')]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('schweb', __('form.register_other_emplwoc_form_cweb')) !!}
                            {!! Form::text('schweb',null,['class'=>'form-control','required','placeholder'=>__('form.register_other_emplwoc_form_placeholder_cweb')]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('empmail', __('form.register_other_emplwoc_form_empmail')) !!}
                            {!! Form::email('empmail', null,['class'=>'form-control', 'required', 'placeholder'=>__('form.register_other_emplwoc_form_placeholder_empmail')]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('compcode', __('form.register_other_emplwoc_form_ccode')) !!}
                            {!! Form::text('compcode', null,['class'=>'form-control', 'placeholder'=>__('form.register_other_emplwoc_form_placeholder_ccode')]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('add', __('form.register_other_emplwoc_form_add')) !!}
                            {!! Form::textarea('add', null,['class'=>'form-control', 'placeholder'=>__('form.register_other_emplwoc_form_placeholder_add')]) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::submit(__('form.register_other_emplwoc_form_submit'), ['class'=>'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
