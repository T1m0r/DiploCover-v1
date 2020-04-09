@extends('layouts.appemp')
@section('pgtitle',__('tags.pg_title_edit'))
@section('head')
    <style>
        .emp-btn-set{
            background-color: #91a5c6;
        }
    </style>
@endsection
@section('content')
    <div class="col-sm-1 container-fluid"></div>
    <div class="col-sm-7 container-fluid"><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><i class="fa fa-user"></i>@lang('profiles.employee_edit_profile_management_title')</div>
            <div class="panel-body">
                {{csrf_field()}}
                {!! Form::open(['method'=>'POST', 'action'=>'Profile\EmployeeProfileController@udfile','enctype'=>'multipart/form-data']) !!}
                <div class="form-group row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('prfpic', __('profiles.employee_edit_profile_management_form_prpic')) !!}
                            {!! Form::file('prfpic', null,['class'=>'form-control', 'title'=>__('tags.employee_edit_prf_pic_upload_title')]) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset(Auth::user()->prfpic)}}" title="@lang('tags.employee_edit_prof_pic_title')" class="rounded" style="width: 10em; height: 10em;" />
                    </div>
                </div>
                <div class="form-group">
                    {!!Form::submit(__('profiles.employee_edit_profile_management_form_submit'), ['class'=>'btn btn-primary', 'title'=>__('tags.employee_edit_prf_pic_submit_title')]) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><i class="fas fa-book"></i> @lang('profiles.employee_edit_dashboard_title')</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-5">
                        {{csrf_field()}}
                        {!! Form::open(['method'=>'POST', 'action'=>'Profile\EmployeeProfileController@udinfo','enctype'=>'multipart/form-data']) !!}
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <i class="fa fa-user"></i>
                                    {!! Form::label('firstname', __('profiles.employee_edit_dashboard_form_firstname')) !!}
                                    {!! Form::text('firstname', null,['class'=>'form-control','placeholder'=>\Illuminate\Support\Facades\Auth::user()->firstname, 'title'=>__('tags.employee_edit_form_firstname_title')]) !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <i class="fas fa-address-card"></i>
                            {!! Form::label('title', __('profiles.employee_edit_dashboard_form_title')) !!}
                            {!! Form::text('title', null,['class'=>'form-control', 'placeholder'=>\Illuminate\Support\Facades\Auth::user()->title, 'title'=>__('tags.employee_edit_form_title_title')]) !!}
                        </div>
                        <div class="form-group">
                            <i class="fa fa-gavel"></i>
                            {!! Form::label('job', __('profiles.employee_edit_dashboard_form_job')) !!}
                            {!! Form::text('job', null,['class'=>'form-control', 'placeholder'=>\Illuminate\Support\Facades\Auth::user()->job, 'title'=>__('tags.employee_edit_form_job_title')]) !!}
                        </div>
                        <div class="form-group">
                            <i class="fa fa-graduation-cap"></i>
                            {!! Form::label('jobdesc', __('profiles.employee_edit_dashboard_form_jobdesc')) !!}
                            {!! Form::textarea('jobdesc', null,['class'=>'form-control', 'placeholder'=>\Illuminate\Support\Facades\Auth::user()->jobdesc, 'title'=>__('tags.employee_edit_form_jobdesc_title')]) !!}
                        </div>


                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <i class="fa fa-user"></i>
                            {!! Form::label('lastname', __('profiles.employee_edit_dashboard_form_lastname')) !!}
                            {!! Form::text('lastname',null,['class'=>'form-control','placeholder'=>\Illuminate\Support\Facades\Auth::user()->lastname, 'title'=>__('tags.employee_edit_form_lastname_title')]) !!}
                        </div>
                        <div class="form-group">
                            <i class="fa fa-envelope"></i>
                            {!! Form::label('email', __('profiles.employee_edit_dashboard_form_email')) !!}
                            {!! Form::text('email', null,['class'=>'form-control', 'placeholder'=>\Illuminate\Support\Facades\Auth::user()->email, 'title'=>__('tags.employee_edit_form_email_title')]) !!}
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <i class="fas fa-address-book"></i>
                                    {!! Form::label('phonenumber', __('profiles.employee_edit_dashboard_form_phonenumber')) !!}
                                    {!! Form::text('phonenumber', null,['class'=>'form-control','placeholder'=>\Illuminate\Support\Facades\Auth::user()->phonenumber]) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {!!Form::submit(__('profiles.employee_edit_dashboard_form_submit'), ['class'=>'Updatebutton btn btn-default btn-lg btn-block', 'title'=>__('tags.employee_edit_form_submit_title')]) !!}
                {!! Form::close() !!}
                <button title="@lang('tags.employee_edit_profile_delete')" onclick="if(confirm( '@lang('profiles.employee_edit_profile_management_delete_qest')  ')){return location.href ='{{route('employee.delete')}}';}else{event.stopPropagation();event.preventDefault();};" >@lang('profiles.employee_edit_profile_management_delete')</button>

            </div>
        </div>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><i class="fas fa-key"></i>@lang('profiles.employee_edit_pswd_title')</div>
            <div class="panel-body">
                {{csrf_field()}}
                {!! Form::open(['method'=>'POST', 'action'=>'Profile\EmployeeProfileController@updpswd','enctype'=>'multipart/form-data']) !!}
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('oldpswd', __('profiles.employee_edit_pswd_form_oldpswd')) !!}
                                    {!! Form::password('oldpswd', null,['class'=>'form-control','placeholder'=>'HTL XYZ','title'=>__('tags.employee_edit_pswd_oldpswd_title')]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('npaswd', __('profiles.employee_edit_pswd_form_newpswd')) !!}
                                    {!! Form::password('npswd', null,['class'=>'form-control','placeholder'=>'info@mail.at', 'title'=>__('tags.employee_edit_pswd_newpswd_title') ]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('npswd2', __('profiles.employee_edit_pswd_form_rp_newpswd')) !!}
                                    {!! Form::password('npswd2', null,['class'=>'form-control', 'title'=>__('tags.employee_edit_pswd_rpnewpswd_title')]) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="form-group">
                    {!!Form::submit(__('profiles.employee_edit_pswd_form_submit'), ['style'=>'width:25%','class'=>'Updatebutton btn btn-default btn-lg btn-block', 'title'=>__('tags.employee_edit_pswd_submit_title')]) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading">@lang('profiles.employee_edit_dashboard_lang')</div>
            <div class="panel-body">
                @if(App::getLocale() == 'de')
                    <button title="@lang('tags.student_edit_lang_de_title')" style="width:25%; background-color: #FF73FD" type="button" class="Languagebutton btn btn-default btn-lg btn-block" onclick="location.href='/lang/de';">@lang('profiles.lang1')</button>
                    <button title="@lang('tags.student_edit_lang_en_title')" style="width:25%" type="button" class="Languagebutton btn btn-default btn-lg btn-block"onclick="location.href='/lang/en';">@lang('profiles.lang2')</button>
                @elseif(App::getLocale() == 'en')
                    <button title="@lang('tags.student_edit_lang_de_title')" style="width:25%" type="button" class="Languagebutton btn btn-default btn-lg btn-block" onclick="location.href='/lang/de';">@lang('profiles.lang1')</button>
                    <button title="@lang('tags.student_edit_lang_en_title')" style="width:25%; background-color: #FF73FD" type="button" class="Languagebutton btn btn-default btn-lg btn-block"onclick="location.href='/lang/en';">@lang('profiles.lang2')</button>
                @else
                    <button title="@lang('tags.student_edit_lang_de_title')" style="width:25%" type="button" class="Languagebutton btn btn-default btn-lg btn-block" onclick="location.href='/lang/de';">@lang('profiles.lang1')</button>
                    <button title="@lang('tags.student_edit_lang_en_title')" style="width:25%" type="button" class="Languagebutton btn btn-default btn-lg btn-block"onclick="location.href='/lang/en';">@lang('profiles.lang2')</button>
                @endif
            </div>
        </div>
    </div>




@endsection
