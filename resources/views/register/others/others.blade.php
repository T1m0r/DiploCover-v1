@extends('layouts.unauth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('form.register_other_other_title') }}</div>

                    <div class="card-body">
                        {{csrf_field()}}
                        {!! Form::open(['method'=>'POST', 'action'=>'Register\StudentRegisterController@register']) !!}

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('name', __('form.register_other_other_form_name')) !!}
                                    {!! Form::text('name', null,['class'=>'form-control', 'required','placeholder'=>__('form.register_other_other_form_placeholder_name')]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', __('form.register_other_other_form_mail')) !!}
                            {!! Form::email('email', null,['class'=>'form-control', 'required', 'placeholder'=>__('form.register_other_other_form_placeholder_mail')]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('add', __('form.register_other_other_form_add')) !!}
                            {!! Form::textarea('add', null,['class'=>'form-control', 'placeholder'=>__('form.register_other_other_form_placeholder_add')]) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::submit(__('form.register_other_other_form_submit'), ['class'=>'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
