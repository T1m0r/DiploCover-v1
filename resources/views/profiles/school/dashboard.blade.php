@extends('layouts.appschool')
@section('pgtitle',__('tags.pg_title_da_dashboard'))
@section('head')
    <style>
        .btn-school-da-dashboard{
            background-color: #cce1ff;
        }
    </style>
@endsection
@section('content')
            <div class="col-sm-1 container-fluid"></div>
            <div class="col-sm-7 container-fluid">
                <div id="panelgroup"class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">@lang('profiles.school_da_dashboard_panel_figures_heading')</div>
                        <div class="panel-body">
                            @if($stsc >0)
                                <p>@lang('profiles.school_da_dashboard_figures_stsc') {{$stsc}}</p>
                                <p>@lang('profiles.school_da_dashboard_figures_stsnr') {{$stsnr}}</p>
                                <p>@lang('profiles.school_da_dashboard_figures_stswda') {{$stswda}}</p>
                                <p>@lang('profiles.school_da_dashboard_figures_stswoda') {{$stswoda}}</p>
                                <p>@lang('profiles.school_da_dashboard_figures_stswt') {{$stswt}}</p>
                                <p>@lang('profiles.school_da_dashboard_figures_stswotbwda') {{$stswotbwda}}</p>
                                <p>@lang('profiles.school_da_dashboard_figures_stswtbwoda') {{$stswtbwoda}}</p>
                                <p>@lang('profiles.school_da_dashboard_figures_stswtada') {{$stswtada}}</p>
                            @else
                                @lang('profiles.school_da_dashboard_figures_nogradesfail')
                            @endif
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">@lang('profiles.school_da_dashboard_panel_da_heading')</div>
                        <div id="panelbody"class="panel-body">
                            <p><b>@lang('profiles.school_da_dashboard_panel_da_owner')</b></p>
                            @if(count($das) < 1)
                                <p>@lang('profiles.company_da_dashboard_da_noda')</p>
                            @else
                                @foreach($das as $da)
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-9">
                                                    <div>@lang('profiles.company_da_dashboard_da_daname') {{$da->DAname}}</div>
                                                </div>
                                                <div class="col-3">
                                                    <div id="ShowMore" >@lang('profiles.company_da_dashboard_da_daprog') {{$da->prog}} %</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-10">
                                                    <div>@lang('profiles.company_da_dashboard_da_dastatus') {{$da->Phase()->get()[0]->status}}</div>
                                                </div>
                                                <div class="col-2">

                                                    <form action="{{route('teacher.da.rmv')}}" method="post" onclick="if(confirm(' @lang('profiles.company_dashboard_da_delete_quest') ')){return true;}else{event.stopPropagation();event.preventDefault();};">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="daid" value="{{ $da->DAid }}" />
                                                        <button type="submit"  id="ShowMore" title="@lang('tags.company_dashboard_da_delete_title')" class="btn btn-success"  ><i class="glyphicon glyphicon-trash" ></i></button>
                                                    </form>
                                                    <form action="{{route('teacher.da.settings')}}" method="post" >
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="daid" value="{{ $da->DAid }}" />
                                                        <button type="submit" id="ShowMore" title="@lang('tags.company_dashboard_da_settings_title')" class="btn btn-success"  ><i class="glyphicon glyphicon-cog" ></i></button>
                                                    </form>
                                                <!--<button id="ShowMore" type="button" class="btn btn-success">@lang('profiles.company_da_dashboard_da_show_more')</button>
                                       -->

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <p>@lang('profiles.teacher_da_dashboard_da_head_school') {{$da->School()->first()->schoolname}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-sm-3 col-3">
                                                    <div class="row">
                                                        @if(count($da->empteacher()->get())<1)
                                                            <p>@lang('profiles.company_da_dashboard_da_empl_noempl')</p>
                                                        @else
                                                            <div  class="hallo">@lang('profiles.teacher_da_dashboard_da_empl') <b>{{$da->empteacher()->get()[0]->name}}</b></div><br />
                                                            <img id="Profilbild" class="rounded mx-auto" src="{{asset($da->empteacher()->get()[0]->prfpic)}}" alt="Avatar" height="50"><br />
                                                        @endif
                                                    </div>
                                                    <br />
                                                    <div class="row">
                                                        @if(count($da->empzteacher()->get())<1)
                                                            <p>@lang('profiles.company_da_dashboard_da_empl_noemplz')</p>
                                                        @else
                                                            <div  class="hallo">@lang('profiles.teacher_da_dashboard_da_emplz') {{$da->empzteacher()->get()[0]->name}}</div><br />
                                                            <img id="Profilbild" class="rounded mx-auto" src="{{asset($da->empzteacher()->get()[0]->prfpic)}}" alt="Avatar" height="50"><br />
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <p>@lang('form.company_da_changestatus_current') {{$da->Phase()->get()[0]->status}}</p>
                                                    {{csrf_field()}}
                                                    {!! Form::open(array('action' => 'Profile\DA\CompanyDAController@stupdate', 'method'=>'post')) !!}
                                                    <div class="form-group row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">

                                                                <p>@lang('form.company_da_changestatus_form_intro')</p>
                                                                {!! Form::label('phase', __('form.company_da_changestatus_form_phase')) !!}

                                                                {!! Form::select('phase', $phases,$da->phase, ['class'=>'form-control', 'title'=>__('tags.employee_home_change_da_status')]) !!}
                                                                {!! Form::hidden('DAid',$da->DAid,['class'=>'form-control' ]) !!}
                                                                <br />
                                                                {!!Form::submit(__('form.company_da_changestatus_form_submit'), ['class'=>'btn btn-primary', 'title'=>__('tags.company_dashboard_da_change_status_title')]) !!}
                                                                {!! Form::close() !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    @if($da->phase ==2)
                                                        <form action="{{route('company.da.applist')}}" method="post" >
                                                            {{csrf_field()}}
                                                            <input type="hidden" name="daid" value="{{ $da->DAid }}" />
                                                            <button type="submit" title="@lang('tags.company_dashboard_da_applist_title')" class="btn btn-success"  >@lang('profiles.company_da_dashboard_da_applications')</button>
                                                        </form>
                                                        <!-------//TODO Enter what to display in phases 1,2 ---->

                                                    @elseif($da->phase == 3)
                                                    <!-------//TODO Enter what to display in phase 3 ---->
                                                        @if(($da->teamID == null or $da->teamID == "") and ($da->sID == null or $da->sID == ""))
                                                            <p>@lang('profiles.company_da_dashboard_da_noteam')</p>
                                                        @else
                                                            @if(count($da->team()->get()) ==1)
                                                                @foreach($da->team()->first()->members()->get() as $member)
                                                                    <div class="col-sm-2">
                                                                        <div  class="hallo">{{$member->name}}</div><br />
                                                                        <img id="Profilbild" src="{{asset($member->stprof()->first()->profpic)}}" alt="Avatar" height="50"><br />
                                                                        <div class="hallo"> E-mail: {{$member->email}}</div>
                                                                    </div>
                                                                @endforeach
                                                                <form action="{{route('company.da.rmv.team')}}" method="post" onclick="if(confirm('Are you sure you want to remove this team form the DA???')){return true;}else{event.stopPropagation();event.preventDefault();};">
                                                                    {{csrf_field()}}
                                                                    <input type="hidden" name="daid" value="{{ $da->DAid }}" />
                                                                    <button id="ablehnen" type="submit" class="hallo btn btn-success"  >@lang('profiles.company_da_dashboard_da_tm_rmv')</button>
                                                                </form>
                                                            @endif
                                                            @if(count($da->Teacher()->get())==1)
                                                                <div class="col-sm-3">
                                                                    <div  class="hallo">@lang('profiles.company_da_dashboard_da_teach') {{$da->Teacher()->get()[0]->name}}</div><br />
                                                                    <img id="Profilbild"src="{{asset($da->Teacher()->first()->prfpic)}}" alt="Avatar" height="50"><br />
                                                                </div>
                                                            @else
                                                                <p>@lang('profiles.company_da_dashboard_da_teach_noteach')</p>
                                                            @endif


                                                        <!----//TODO Need to enter Team info Here !!!!!!!!!!!!!!!---->

                                                        @endif
                                                    @else
                                                        @if(($da->teamID == null or $da->teamID == "") and ($da->sID == null or $da->sID == ""))
                                                            <p>@lang('profiles.company_da_dashboard_da_noteam')</p>
                                                        @else
                                                            <div class="col-sm-3">
                                                                @if(count($da->Teacher()->get())==1)
                                                                    <div  class="hallo">@lang('profiles.company_da_dashboard_da_teach') {{$da->Teacher()->get()[0]->name}}</div><br />
                                                                    <img id="Profilbild"src="{{asset($da->Teacher()->get()[0]->profpic)}}" alt="Avatar" height="50"><br />
                                                                @else
                                                                    <p>@lang('profiles.company_da_dashboard_da_teach_noteach')</p>
                                                                @endif
                                                            </div>

                                                            <!----//TODO Need to enter Team info Here !!!!!!!!!!!!!!!---->

                                                        @endif
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <button onclick="location.href ='/teacher/da/new';" style="width:10%" id="Erstell_Buttons" type="button" class="Plus-Button btn btn-default btn-lg btn-block">
                                <i class='fas fa-plus' style="width:100%"></i>
                            </button>
                            <br />
                            <p><b>@lang('profiles.school_da_dashboard_panel_da_info')</b></p>
                            @if(count($tchdas)>0)
                                @foreach($tchdas as $tchda)
                                    @foreach($tchda->DA()->get() as $da)
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                {{$da->DAname}}
                                            </div>
                                            <div class="panel-body">
                                                @if(count($da->teacher()->get()) == 1)
                                                    <div>@lang('profiles.school_da_dashboard_da_teach') {{$da->teacher()->first()->name}}</div>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach
                            @else
                                <div class="panel-heading"></div>
                                <div class="panel-body">
                                    <p>@lang('profiles.school_da_dashboard_da_noda')</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
@endsection