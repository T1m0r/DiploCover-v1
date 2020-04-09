@extends('layouts.unauth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('form.register_other_company_title') }}</div>

                    <div class="card-body">
                        {{csrf_field()}}
                        {!! Form::open(['method'=>'POST', 'action'=>'Register\CompanyRegisterController@register']) !!}

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('comname', __('form.register_other_company_form_cname')) !!}
                                    {!! Form::text('comname', null,['class'=>'form-control', 'required','placeholder'=>__('form.register_other_company_form_placeholder_cname')]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('comweb', __('form.register_other_company_form_cweb')) !!}
                            {!! Form::text('comweb',null,['class'=>'form-control','required','placeholder'=>__('form.register_other_company_form_placeholder_cweb')]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('comail', __('form.register_other_company_form_comail')) !!}
                            {!! Form::email('comail', null,['class'=>'form-control', 'required', 'placeholder'=>('form.register_other_company_form_placeholder_comail')]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('coname', ('form.register_other_company_form_coname')) !!}
                            {!! Form::text('coname', null,['class'=>'form-control', 'required', 'placeholder'=>('form.register_other_company_form_placeholder_coname')]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('add', ('form.register_other_company_form_add')) !!}
                            {!! Form::textarea('add', null,['class'=>'form-control', 'placeholder'=>('form.register_other_company_form_placeholder_add')]) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::submit(('form.register_other_company_form_submit'), ['class'=>'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
