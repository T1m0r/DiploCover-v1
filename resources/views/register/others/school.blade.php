@extends('layouts.unauth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('form.register_other_school_title') }}</div>

                    <div class="card-body">
                        {{csrf_field()}}
                        {!! Form::open(['method'=>'POST', 'action'=>'Register\StudentRegisterController@register']) !!}

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('schname', __('form.register_other_school_form_schname')) !!}
                                    {!! Form::text('schname', null,['class'=>'form-control', 'required','placeholder'=>__('form.register_other_school_form_placeholder_schname')]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('schweb', __('form.register_other_school_form_schweb')) !!}
                            {!! Form::text('schweb',null,['class'=>'form-control','placeholder'=>__('form.register_other_school_form_placeholder_schweb')]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('schemail', __('form.register_other_school_form_comail')) !!}
                            {!! Form::email('schemail', null,['class'=>'form-control', 'required', 'placeholder'=>__('form.register_other_school_form_placeholder_comail')]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('coname', __('form.register_other_school_form_coname')) !!}
                            {!! Form::text('coname', null,['class'=>'form-control', 'required', 'placeholder'=>__('form.register_other_school_form_placeholder_coname')]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('add', __('form.register_other_school_form_add')) !!}
                            {!! Form::textarea('add', null,['class'=>'form-control', 'placeholder'=>__('form.register_other_school_form_placeholder_add')]) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::submit(__('form.register_other_school_form_submit'), ['class'=>'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
