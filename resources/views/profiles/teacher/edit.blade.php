@extends('layouts.apptch')
@section('pgtitle',__('tags.pg_title_teach_edit'))
@section('head')
    <style>
        .btn-teach-edit{
            background-color: #cce1ff;
        }
    </style>
@endsection
@section('content')
    <div class="col-sm-1 container-fluid"></div>
    <div class="col-sm-7 container-fluid"><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><i class="fa fa-user"></i> @lang('profiles.teacher_edit_files')</div>
            <div class="panel-body">
                {{csrf_field()}}
                {!! Form::open(['method'=>'POST', 'action'=>'Profile\TeacherProfileController@udfile','enctype'=>'multipart/form-data']) !!}
                <div class="form-group row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('prpic', __('form.teacher_edit_files_prpic_label')) !!}
                            {!! Form::file('prpic', null,['class'=>'form-control', 'title'=>__('tags.teacher_edit_files_prpic_title')]) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset(Auth::user()->prfpic)}}" class="rounded-circle"  style="width: 10em; height: 10em;" />
                    </div>
                </div>
                <div class="form-group">
                    {!!Form::submit(__('profiles.teacher_edit_submit_btn'), ['class'=>'Updatebutton btn btn-default btn-lg btn-block','title'=>__('tags.teacher_edit_files_update_title'), 'style'=>'width:55%']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><i class="fas fa-book"></i> @lang('profiles.teacher_edit_data')</div>
            <div class="panel-body">
                {{csrf_field()}}
                {!! Form::open(['method'=>'POST', 'action'=>'Profile\TeacherProfileController@udinfo','enctype'=>'multipart/form-data']) !!}
                <div class="row">
                    <div class="col-sm-5">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('firstname', __('form.teacher edit_info_firstname_label')) !!}
                                    {!! Form::text('firstname', null,['class'=>'form-control','title'=>__('tags.teacher_edit_info_firstname_title'), 'placeholder'=>\Illuminate\Support\Facades\Auth::user()->firstname]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', __('form.teacher_edit_info_email_label')) !!}
                            {!! Form::text('email',null,['class'=>'form-control','title'=>__('tags.teacher_edit_info_email_title'), 'placeholder'=>\Illuminate\Support\Facades\Auth::user()->email]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('title', __('form.teacher_edit_info_title_label')) !!}
                            {!! Form::text('title', null,['class'=>'form-control', 'title'=>__('tags.teacher_edit_title_title'), 'placeholder'=>\Illuminate\Support\Facades\Auth::user()->title]) !!}
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('phonenumber', __('form.teacher_edit_info_phonenumber_label')) !!}
                                    {!! Form::text('phonenumber', null,['class'=>'form-control', 'title'=>__('tags.teacher_edit_info_phonenumber_title'), 'placeholder'=>\Illuminate\Support\Facades\Auth::user()->phonenumber]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('intr', __('form.teacher_edit_info_intr_label')) !!}
                            {!! Form::text('intr', null,['class'=>'form-control', 'title'=>__('tags.teacher_edit_info_intr_title'), 'placeholder'=>\Illuminate\Support\Facades\Auth::user()->intressts]) !!}
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            {!! Form::label('lastname', __('form.teacher_edit_info_lastname_label')) !!}
                            {!! Form::text('lastname',null,['class'=>'form-control', 'title'=>__('tags.teacher_edit_info_lastname_title'), 'placeholder'=>\Illuminate\Support\Facades\Auth::user()->lastname]) !!}
                        </div>

                        <div class="form-group row">
                            <div class="form-group">
                                {!! Form::label('abme', __('form.teacher_edit_info_abme_label')) !!}
                                {!! Form::textarea('abme', null,['class'=>'form-control', 'title'=>__('tags.teacher_edit_info_abme_title'), 'placeholder'=>\Illuminate\Support\Facades\Auth::user()->abme]) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::submit(__('profiles.teacher_edit_submit_btn'), ['class'=>'Updatebutton btn btn-default btn-lg btn-block', 'title'=>__('tags.teacher_edit_info_submit_title'), 'style'=>'width:75%']) !!}
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
                <div class="row">
                    <button onclick="if(confirm( '@lang('profiles.teacher_edit_profile_delete_quest')' )){location.href ='{{route('teacher.delete')}}';}else{event.stopPropagation();event.preventDefault();};"  >Delete Account</button>
                </div>
            </div>
        </div>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><i class="fas fa-key"></i> @lang('profiles.teacher_edit_pswd')</div>
            <div class="panel-body">
                {{csrf_field()}}
                {!! Form::open(['method'=>'POST', 'action'=>'Profile\TeacherProfileController@updpswd','enctype'=>'multipart/form-data']) !!}
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            {!! Form::label('oldpswd', __('form.teacher_edit_pswd_oldpswd_label')) !!}
                            {!! Form::password('oldpswd', null,['class'=>'form-control', 'title'=>__('tags.teacher_edit_pswd_oldpswd_title'), 'placeholder'=>'HTL XYZ']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('npaswd', __('form.teacher_edit_pswd_newpswd_label')) !!}
                            {!! Form::password('npswd', null,['class'=>'form-control', 'title'=>__('tags.teacher_edit_pswd_newpswd_title'), 'placeholder'=>'info@mail.at']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('npswd2', __('form.teacher_edit_pswd_rp_newpswd_label')) !!}
                            {!! Form::password('npswd2', null,['class'=>'form-control', 'title'=>__('tags.teacher_edit_pswd_rp_newpswd_title'),]) !!}
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="form-group">
                    {!!Form::submit(__('profiles.teacher_edit_submit_btn'), ['class'=>'Updatebutton btn btn-default btn-lg btn-block', 'title'=>__('tags.teacher_edit_pswd_submit_title'), 'style'=>'width:55%']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading">@lang('profiles.teacher_edit_lang')</div>
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
    {{---<div id="team" class="tabcontent">
                                @if($grades == null or count($grades)<1)
                                    <div class="col-md-8" id="team">
                                        <div class="card">
                                            <div class="card-header">Grade</div>
                                            <div class="card-body">
                                                <p >@lang('profiles.teacher_edit_nograde')</p>
                                                <p >@lang('profiles.teacher_edit_nograde_new')</p>
                                                <button class="btn btn-info" onclick="location.href = '/teacher/grade/new'"><i class="glyphicon glyphicon-plus"></i> </button>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-md-8" id="team">
                                        <div class="card">
                                            <div class="card-header">Grades</div>
                                            <div class="card-body">
                                                @foreach($grades as $grade)
                                                    <tr>{{$grade->name}}</tr>

                                                @endforeach
                                                <p >Or create a new Team:</p>
                                                <button class="btn btn-info" onclick="location.href = '/profile/team/create'"></button>
                                            </div>
                                        </div>
                                    </div>

                                @endif---}}


@endsection
