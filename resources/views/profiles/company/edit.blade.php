@extends('layouts.appcomp')
@section('pgtitle',__('pg_title_edit'))
@section('head')
    <style>
        .emp-btn-comp-edit{
            background-color: #cce1ff;
        }
    </style>
@endsection
@section('content')
<!------ Include the above in your HEAD tag ---------->
<div class="col-sm-1 container-fluid"></div>
<div class="col-sm-7 container-fluid"><br/>
    <div id="Schatten"class="panel-group">
        <div class="panel-heading"><i class="fa fa-user"></i> @lang('profiles.company_edit_menu_profile_management_title')</div>
        <div class="panel-body">
            {{csrf_field()}}
            {!! Form::open(['method'=>'POST', 'action'=>'Profile\CompanyProfileController@udfile','enctype'=>'multipart/form-data']) !!}
            <div class="form-group row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('prpic', __('profiles.company_edit_profile_management_form_prpic')) !!}
                        {!! Form::file('prpic', null,['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    @if($comp->profpic == null or $comp->profpic == "")
                        <p>@lang('profiles.company_edit_profile_management_form_noprpic')</p>
                    @else
                        <img src="{{asset($comp->profpic)}}" class="profile-circle" style="width: 10em; height: 10em;" />
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <div class="form-group">
                        <h3>@lang('profiles.company_edit_profile_management_document')</h3>
                        {{---{!! Form::label('brpic', __('profiles.company_edit_profile_management_form_brpic')) !!}
                        {!! Form::file('brpic', null,['class'=>'form-control']) !!}---}}
                        {!! Form::file('oth', null,['class'=>'form-control']) !!}
                        {!! Form::label('oth1', __('profiles.company_edit_profile_management_form_oth1')) !!}
                        {!! Form::file('oth1', null,['class'=>'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                {!!Form::submit(__('profiles.company_edit_profile_management_form_submit'), ['class'=>'Updatebutton btn btn-default btn-lg btn-block', 'style'=>'width:25%']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div id="Schatten"class="panel-group">
        <div class="panel-heading"><i class="fas fa-book"></i> @lang('profiles.company_edit_menu_dashboard_title')</div>
        <div class="panel-body">
            <div class="row">
                {{csrf_field()}}
                {!! Form::open(['method'=>'POST', 'action'=>'Profile\CompanyProfileController@udinfo','enctype'=>'multipart/form-data']) !!}
                <div class="col-sm-5">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <i class="fa fa-user"></i>
                                {!! Form::label('compname', __('profiles.company_edit_dashboard_form_cname')) !!}
                                {!! Form::text('compname', null,['class'=>'form-control','placeholder'=>__('profiles.company_edit_dashboard_form_placeholder_cname')]) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('prevtxt', __('profiles.company_edit_dashboard_form_cdesc')) !!}
                        {!! Form::textarea('prevttxt',null,['class'=>'form-control','placeholder'=>__('profiles.company_edit_dashboard_form_placeholder_cdesc')]) !!}
                    </div>
                    <div class="form-group">
                        <i class="fas fa-globe"></i>
                        {!! Form::label('url', __('profiles.company_edit_dashboard_form_weblink')) !!}
                        {!! Form::text('url', null,['class'=>'form-control', 'placeholder'=>__('profiles.company_edit_dashboard_form_placeholder_weblink')]) !!}
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <i class="fa fa-envelope"></i>
                                {!! Form::label('contmail', __('profiles.company_edit_dashboard_form_contmail')) !!}
                                {!! Form::text('contmail', null,['class'=>'form-control','placeholder'=>__('profiles.company_edit_dashboard_form_placeholder_contmail')]) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">

                </div>
                {!!Form::submit(__('profiles.company_edit_dashboard_form_submit'), ['class'=>'Updatebutton btn btn-default btn-lg btn-block', 'style'=>'width:25%']) !!}
                {!! Form::close() !!}
            </div>
            <button onclick="location.href ='{{route('company.delete')}}';" >@lang('profiles.company_edit_dashboard_delete')</button>
        </div>
    </div>
</div>

@endsection
