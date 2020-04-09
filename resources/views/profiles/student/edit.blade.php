@extends('layouts.app')
@section('pgtitle',__('tags.pg_title_edit'))
@section('head')
    <style>
        .btn-st-set {
            background-color: #cce1ff;
        }
    </style>
@endsection
@section('content')
    <div class="col-sm-1 container-fluid"></div>
    <div class="col-sm-7 container-fluid"><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><i class="fa fa-user"></i> Profile</div>
            <div class="panel-body">
                <div class="col-md-12">
                    {{csrf_field()}}
                    {!! Form::open(['method'=>'POST', 'action'=>'Profile\StudentProfileController@udfile','enctype'=>'multipart/form-data']) !!}
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('prpic', __('profiles.student_edit_profile_management_form_prpic')) !!}
                                {!! Form::file('prpic', null,['class'=>'form-control', 'id'=>"Profile pic", 'title'=>__('tags.student_edit_form_files_profpic_title')]) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset(Auth::user()->stprof->profpic)}}" class="profile-circle" style="width: 10em; height: 10em;" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <h3>Documents</h3>
                                {!! Form::label('leb', __('profiles.student_edit_profile_management_form_leb')) !!}
                                {!! Form::file('leb', null,['class'=>'form-control', 'id'=>"Letter of Application", 'title'=>__('tags.student_edit_form_files_leb_title')]) !!}
                            <br />
                                {!! Form::label('zeug', __('profiles.student_edit_profile_management_form_lzeug')) !!}
                                {!! Form::file('zeug', null,['class'=>'form-control', 'id'=>"Resume", 'title'=>__('tags.student_edit_form_files_zeug_title')]) !!}
                                <br />
                                {!! Form::label('oth', __('profiles.student_edit_profile_management_form_oth1')) !!}
                                {!! Form::file('oth', null,['class'=>'form-control', 'id'=>"Last Certificate", 'title'=>__('tags.student_edit_form_files_oth1_title')]) !!}
                                {!! Form::label('oth1', __('profiles.student_edit_profile_management_form_oth2')) !!}
                                {!! Form::file('oth1', null,['class'=>'form-control', 'id'=>"Certificates", 'title'=>__('tags.student_edit_form_files_oth1_title')]) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        {!!Form::submit(__('profiles.student_edit_profile_management_form_submit'), ['class'=>'btn btn-primary', 'title'=>__('tags.student_edit_form_files_submit_title')]) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><i class="fas fa-book"></i> @lang('profiles.student_edit_dashboard_title')</div>
            <div class="panel-body">
                <div class="row">
                    {{csrf_field()}}
                    {!! Form::open(['method'=>'POST', 'action'=>'Profile\StudentProfileController@udinfo','enctype'=>'multipart/form-data']) !!}
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <i class="fa fa-user"></i>
                                {!! Form::label('firstname', __('profiles.student_edit_dashboard_form_firstname')) !!}
                                {!! Form::text('firstname', null,['class'=>'form-control','placeholder'=>$firstname, 'id'=>'Firstname', 'title'=>__('tags.student_edit_form_firstname')]) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <i class="fa fa-user"></i>
                        {!! Form::label('lastname', __('profiles.student_edit_dashboard_form_lastname')) !!}
                        {!! Form::text('lastname',null,['class'=>'form-control','placeholder'=>$lastname, 'title'=>__('tags.student_edit_form_lastname')]) !!}
                    </div>
                    {{---<div class="form-group">
                        {!! Form::label('title', __('profiles.student_edit_dashboard_form_title')) !!}
                        {!! Form::text('title', null,['class'=>'form-control', 'placeholder'=>$title]) !!}
                    </div>---}}
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <i class="fas fa-address-book"></i>
                                {!! Form::label('phonenumber', __('profiles.student_edit_dashboard_form_phonenumber')) !!}
                                {!! Form::text('phonenumber', null,['class'=>'form-control','placeholder'=>$phonenumber, 'id'=>"Phone Number", 'title'=>__('tags.student_edit_form_phone')]) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <i class="fas fa-smile"></i>
                                {!! Form::label('abme', __('profiles.student_edit_dashboard_form_abme')) !!}
                                {!! Form::textarea('abme', null,['class'=>'form-control','placeholder'=>$abme, 'title'=>__('tags.student_edit_form_abme')]) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <i class="fas fa-smile"></i>
                                {!! Form::label('intr', __('profiles.student_edit_dashboard_form_intr')) !!}
                                {!! Form::text('intr', null,['class'=>'form-control','placeholder'=>$intr, 'title'=>__('tags.student_edit_form_intr')]) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', __('profiles.employee_edit_dashboard_form_email')) !!}
                        {!! Form::text('email', null,['class'=>'form-control', 'placeholder'=>\Illuminate\Support\Facades\Auth::user()->email, 'id'=>'E-Mail', 'title'=>__('tags.student_edit_form_email')]) !!}
                    </div>
                    <div class="form-group">
                        {!!Form::submit(__('profiles.student_edit_dashboard_form_submit'), ['class'=>'Updatebutton btn btn-default btn-lg btn-bloc ', 'title'=>__('tags.student_edit_form_submit')]) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
                <button title="@lang('tags.student_edit_delete_account')" onclick="if(confirm( '@lang('profiles.student_edit_profile_management_delete_qest')  ')){return location.href ='{{route('student.delete')}}';}else{event.stopPropagation();event.preventDefault();};" >@lang('profiles.student_edit_profile_management_delete')</button>

            </div>
        </div>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><i class="fas fa-key"></i> Password</div>
            <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-10">
                            {{csrf_field()}}
                            {!! Form::open(['method'=>'POST', 'action'=>'Profile\StudentProfileController@updpswd','enctype'=>'multipart/form-data']) !!}
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('oldpswd', __('profiles.student_edit_pswd_form_oldpswd')) !!}
                                        {!! Form::password('oldpswd', null,['class'=>'form-control','id'=>'Current Password','title'=>__('tags.student_edit_form_pswd_oldpswd_title'), 'placeholder'=>__('profiles.student_edit_pswd_form_oldpswd_placeholder')]) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('npaswd', __('profiles.student_edit_pswd_form_newpswd')) !!}
                                        {!! Form::password('npswd', null,['class'=>'form-control', 'id'=>'Enter new Password', 'title'=>__('tags.student_edit_form_pswd_newpswd_title'), 'placeholder'=>__('profiles.student_edit_pswd_form_newpswd_placeholder')]) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('npswd2', __('profiles.student_edit_pswd_form_rp_newpswd')) !!}
                                        {!! Form::password('npswd2', null,['class'=>'form-control', 'id'=>'Repeat new Password', 'title'=>__('tags.student_edit_form_pswd_rp_newpswd_title'), 'placeholder'=>__('profiles.student_edit_pswd_form_rp_newpswd_placeholder')]) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {!!Form::submit(__('profiles.employee_edit_pswd_form_submit'), ['class'=>'Updatebutton btn btn-default btn-lg btn-block']) !!}
                            </div>
                            {!! Form::close() !!}

                            </div>
                        <div class="col-sm-1"></div>
                    </div>
            </div>
        </div>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading">@lang('profiles.student_edit_dashboard_lang')</div>
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




{{--<div class="container">
    <div class="row">
        <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="team" class="tabcontent">
                                <div class="col-md-8" id="team">
                                    <div class="card">
                                        <div class="card-header">Team</div>
                                        <div class="card-body">
                                @if($st->teamID != null or $st->teamID != "")

                                    <button onclick="location.href='/team/{{urlencode(Auth::user()->teamID)}}/profile';" class="btn btn-app">@lang('profiles.student_edit_team_textern')</button>
                                    <button onclick="location.href='{{route('student.team')}}';"  class="btn btn-app">@lang('profiles.student_edit_team_thome')</button>
                                @else
                                    <p >@lang('profiles.student_edit_team_noteam')</p>
                                    <form method="POST" action="#" aria-label="Team registration">
                                        <div class="form-group row">
                                            <label for="tidd" class="col-sm-4 col-form-label text-md-right">@lang('profiles.student_edit_team_join_teamID')</label>
                                            <div class="col-md-6">
                                                <input id="tidd" type="text"  name="tidd"  required autofocus>
                                            </div>
                                        </div>
                                    </form>
                                    <p >@lang('profiles.student_edit_team_txt_ct')</p>
                                    <button class="btn btn-info" onclick="location.href = '/profile/team/create'">@lang('profiles.student_edit_team_btn_ct')</button>
                                @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

        </div>
    </div>
</div>
--}}
@endsection
