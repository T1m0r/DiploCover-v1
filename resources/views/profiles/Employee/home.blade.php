@extends('layouts.appemp')
@section('pgtitle',__('tags.pg_title_home'))
@section('head')
    <style>
        .emp-btn-home{
            background-color: #91a5c6;
                    }
    </style>
@endsection
@section('content')
    <div class="col-sm-1 container-fluid"></div>
    <div class="col-sm-7 container-fluid"><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><p>@lang('profiles.employee_emphome_panel_da_heading')</p></div>
            <div id="panelbody"class="panel-body">
                @if(count($das) ==0)
                    <p>@lang('profiles.employee_emphome_da_noda')</p>
                    <!--<p>@lang('profiles.employee_emphome_info')</p>--->
                @else
                    @foreach($das as $da)
                        <div class="panel panel-primary">
                            <div class="panel-heading">@lang('profiles.employee_emphome_da_daname') {{$da->DAname}}</div>
                            <div id="Status">@lang('profiles.employee_emphome_da_dastatus') {{$da->Phase()->first()->status}}</div>
                            <div>@lang('profiles.employee_emphome_da_daprog') {{$da->prog}} %</div>
                            <div class="panel-body">

                                @if(count($da->employee()->get())<1)
                                    <p>@lang('profiles.employee_emphome_da_empl_noempl')</p>
                                @elseif(count($da->employee()->get())==1)
                                    <div  class="hallo">@lang('profiles.employee_emphome_da_empl') {{$da->employee()->first()->name}} | {{$da->employee()->first()->email}}</div><br />
                                @else
                                    <div class="error">@lang('profiles.employee_emphome_da_emplz_err_mult')</div>
                                @endif
                                @if(count($da->employeez()->get())<1)
                                    <p>@lang('profiles.employee_emphome_da_emplz_noempl')</p>
                                @elseif(count($da->employeez()->get())==1)
                                    <div  class="hallo">@lang('profiles.employee_emphome_da_emplz') {{$da->employeez()->get()[0]->name}} | {{$da->employeez()->get()[0]->email}} </div><br />
                                @else
                                    <div class="error">@lang('profiles.employee_emphome_da_empl_err_mult')</div>
                                @endif

                                @if($da->phase ==2)
                                    <form action="{{route('employee.da.applist')}}" method="post" >
                                        {{csrf_field()}}
                                        <input type="hidden" name="daid" value="{{ $da->DAid }}" />
                                        <button type="submit" class="btn btn-success" title="@lang('tags.employee_home_appli')" >@lang('profiles.company_da_dashboard_da_applications')</button>
                                    </form>
                                    <!-------//TODO Enter what to display in phases 1,2 ---->



                                @elseif($da->phase == 3)

                                <!-------//TODO Enter what to display in phase 3 ---->
                                    @if(($da->teamID == null or $da->teamID == "") and ($da->sID == null or $da->sID == ""))
                                        <p>@lang('profiles.company_da_dashboard_da_noteam')</p>
                                    @else
                                        @if(($da->teamID == null or $da->teamID == "") and ($da->sID == null or $da->sID == ""))
                                            <p>@lang('profiles.employee_emphome_da_ph3_nostud')</p>
                                        @else
                                            <div class="col-sm-3">
                                                @if(count($da->Teacher()->get())==1)
                                                    <div  class="hallo">@lang('profiles.employee_emphome_da_ph3_teacher') {{$da->Teacher()->get()[0]->name}}</div><br />
                                                    <img id="Profilbild"src="{{asset($da->Teacher()->get()[0]->profpic)}}" alt="Avatar" height="50"><br />
                                                @else
                                                    <p>@lang('profiles.employee_emphome_da_ph3_teacher_noteacher')</p>
                                                @endif
                                            </div>
                                            <div>Team: {{$da->Team()->first()->name}}
                                                @foreach($da->Team()->first()->members()->get() as $memb)
                                                    {{$memb->name}}
                                                @endforeach
                                            </div>
                                            <!----//Show more Info about Team here!!!!!!!!!!!!!!!---->
                                        @endif
                                    @endif
                                @endif
                                <div class="panel-body">
                                    <p>@lang('form.company_da_changestatus_current') {{$da->Phase()->get()[0]->status}}</p>
                                    {{csrf_field()}}
                                    {!! Form::open(array('action' => 'Profile\DA\EmployeeDAController@stupdate', 'method'=>'post')) !!}
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <p>@lang('form.company_da_changestatus_form_intro')</p>
                                                {!! Form::label('phase', __('form.company_da_changestatus_form_phase')) !!}

                                                {!! Form::select('phase', $phases,$da->phase, ['class'=>'form-control', 'title'=>__('tags.employee_home_change_da_status')]) !!}
                                                {!! Form::hidden('DAid',$da->DAid,['class'=>'form-control' ]) !!}

                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!!Form::submit(__('form.company_da_changestatus_form_submit'), ['class'=>'btn btn-primary', 'title'=>__('tags.employee_home_change_da_status_title')]) !!}
                                    </div>
                                    {!! Form::close() !!}


                                    <form action="{{route('employee.da.settings')}}" method="post" >
                                        {{csrf_field()}}
                                        <input type="hidden" name="daid" value="{{ $da->DAid }}" />
                                        <button type="submit" title="@lang('tags.employee_home_da_settings')" class="btn btn-success"  ><i class="glyphicon glyphicon-cog" ></i></button>
                                    </form>
                                    <form action="{{route('employee.da.rmv')}}" method="post" onclick="if(confirm(' {{trans('profiles.emp_da_rmv_question')}}')){return true;}else{event.stopPropagation();event.preventDefault();};">
                                        {{csrf_field()}}
                                        <input type="hidden" name="daid" value="{{ $da->DAid }}" />
                                        <button type="submit" title="@lang('tags.employee_home_da_del')" class="btn btn-success"  ><i class="glyphicon glyphicon-trash" ></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                <button onclick="location.href ='/employee/da/new';" title=" @lang('tags.employee_home_da_new')" id="Erstell_Buttons" type="button" class="Plus-Button btn btn-default btn-lg btn-block">
                    <i class='fas fa-plus' style=width:100%></i>
                </button>
                <br/>
            </div>
        </div>
    </div>
@endsection