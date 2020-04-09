@extends('layouts.appschool')
@section('pgtitle',__('tags.pg_title_teacher_dashboard'))
@section('head')
    <style>
        .btn-school-teach-dashboard{
            background-color: #cce1ff;
        }
    </style>
@endsection
@section('content')
            <div class="col-sm-1 container-fluid"></div>
            <div class="col-sm-7 container-fluid">
                    <div class="panel panel-default">
                        <div class="panel-heading">@lang('profiles.school_manage_teacher_panel_teacher_heading')</div>
                        <div id="panelbody"class="panel-body">
                            @if(count($tchs)>0)
                                @foreach($tchs as $teach)
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="row">
                                                @if($teach->teachID == \Illuminate\Support\Facades\Auth::user()->teachID)
                                                    <div class="col-md-5">
                                                        {{$teach->name}} @lang('profiles.school_manage_teacher_teacher_you')
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{$teach->email}}
                                                    </div>
                                                @else
                                                    <div class="col-md-5">
                                                        {{$teach->name}}
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{$teach->email}}
                                                    </div>
                                                    <div class="col-1">
                                                        <form action="{{route('school.tch.rmv')}}" method="post">
                                                            {{csrf_field()}}
                                                            <input type="hidden" name="teachID" value="{{ $teach->teachID }}" />

                                                            <button  type="submit" title="@lang('tags.school_teach_dashboard_teach_delete_title')" class="Deletebutton btn btn-default btn-lg btn-block"><i class='fas fa-trash-alt' style="color:black"></i></button>
                                                        </form>
                                                    </div>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="panel-body">
                                            <div class="col-md-4">
                                                @if(count($teach->grade()->get()) > 0)
                                                    @foreach($teach->grade()->get() as $grade)
                                                            <div>@lang('profiles.school_manage_teacher_teacher_grade_gname') {{$grade->name}} </div>
                                                            <div>@lang('profiles.school_manage_teacher_teacher_grade_stcount') {{$grade->students}} </div>
                                                    @endforeach
                                                @else
                                                    <p>@lang('profiles.school_manage_teacher_teacher_grade_nograde')</p>
                                                @endif
                                            </div>
                                            <div class="col-md-4">
                                                @if(count($teach->DA()->get()) > 0)
                                                    @foreach($teach->DA()->get() as $da)
                                                        <div>@lang('profiles.school_manage_teacher_teacher_da_daname') {{$da->DAname}}</div>
                                                    @endforeach
                                                @else
                                                    <p>@lang('profiles.school_manage_teacher_teacher_da_nodae')</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="panel panel-default">
                                    <div class="panel-heading"></div>
                                    <div class="panel-body">
                                        <p>@lang('profiles.school_manage_teacher_teacher_critical_error')</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <button  style="width: 50%" title="@lang('tags.school_teach_dashboard_teach_new_title')" onclick="location.href ='{{route('school.add.teacher')}}';" id="Erstell_Buttons" type="button" class="Plus-Button btn btn-default btn-lg btn-block">
                            <i class='fas fa-plus' style=width:100%></i>
                        </button>
                        <br />
                    </div>
                </div>
            </div>
@endsection