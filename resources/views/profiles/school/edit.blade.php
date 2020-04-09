@extends('layouts.appschool')
@section('pgtitle',__('tags.pg_title_school_edit'))
@section('head')
    <style>
        .btn-school-edit{
            background-color: #cce1ff;
        }
    </style>
@endsection
@section('content')
    <div class="col-sm-1 container-fluid"></div>
    <div class="col-sm-7 container-fluid"><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><i class="fas fa-school"></i> @lang('profiles.school_edit_dashboard_title')</div>
            <div class="panel-body">
                {{csrf_field()}}
                {!! Form::open(['method'=>'POST', 'action'=>'Profile\SchoolProfileController@udinfo','enctype'=>'multipart/form-data']) !!}
                <div class="row">
                    <div class="col-sm-5">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('schname', __('profiles.school_edit_dashboard_schname')) !!}
                                    {!! Form::text('schname', null,['class'=>'form-control','placeholder'=>$school->schoolname]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('contmail', __('profiles.school_edit_dashboard_contmail')) !!}
                                    {!! Form::text('contmail', null,['class'=>'form-control','placeholder'=>$school->contmail]) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('prpic', __('profiles.school_edit_dashboard_prpic')) !!}
                                    {!! Form::file('prpic', null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        @if($school->prfpic == null or $school->prfpic == "")
                            <p>@lang('profiles.school_edit_dashboard_noprpic')</p>
                        @else
                            <img src="{{asset($school->prfpic)}}"  style="width: auto; height: 8em;" />
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    {!!Form::submit(__('profiles.school_edit_dashboard_update'), ['class'=>'Updatebutton btn btn-default btn-lg btn-block', 'style'=>'width:55%']) !!}
                </div>
                {!! Form::close() !!}
                {{---<button title="@lang('tags.school_edit_delete_title')" onclick="if(confirm( '@lang('profiles.teacher_edit_profile_delete_quest')' )){location.href ='{{route('school.delete')}}';}else{event.stopPropagation();event.preventDefault();};" >@lang('profiles.school_edit_dashboard_delete')</button>----}}
            </div>
        </div>
    </div>

@endsection
