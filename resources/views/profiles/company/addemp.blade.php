@extends('layouts.appemp')
@section('pgtitle',__('tags.pg_title_ademp'))
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create new Employee') }}</div>
                    <div class="card-body">
                        {{csrf_field()}}
                        {!! Form::open(array('action' => 'Profile\CompanyProfileController@addemployee', 'method'=>'post')) !!}
                        {{Form::token()}}
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('firstname', __('form.company_empm_addempl_form_firstname')) !!}
                                    {!! Form::text('firstname', null,['placeholder'=>__('form.company_empm_addempl_form_placeholder_firstname'), 'required','class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('lastname', __('form.company_empm_addempl_form_lastname')) !!}
                                    {!! Form::text('lastname', null,['placeholder'=>__('form.company_empm_addempl_form_placeholder_lastname'), 'required','class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', __('form.company_empm_addempl_form_email')) !!}
                            {!! Form::email('email',null,['placeholder'=>__('form.company_empm_addempl_form_placeholder_email'),'required', 'class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::submit(__('form.company_empm_addempl_form_submit'), ['class'=>'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
