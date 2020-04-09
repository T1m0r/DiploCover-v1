@extends('layouts/appcomp')
@section('pgtitle',__('tags.pg_title_da_dashboard'))
@section('head')
    <style>
        .emp-btn-comp-da-dashboard{
            background-color: #cce1ff;
        }
    </style>
@endsection
@section('content')
    <div class="col-sm-1 container-fluid"></div>
    <div class="col-sm-7 container-fluid"><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading">@lang('profiles.company_da_dashboard_panel_da_heading')</div>
            <div id="panelbody"class="panel-body">
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

                                        <form action="{{route('company.da.rmv')}}" method="post" onclick="if(confirm(' @lang('profiles.company_dashboard_da_delete_quest') ')){return true;}else{event.stopPropagation();event.preventDefault();};">
                                            {{csrf_field()}}
                                            <input type="hidden" name="daid" value="{{ $da->DAid }}" />
                                            <button type="submit"  id="ShowMore" title="@lang('tags.company_dashboard_da_delete_title')" class="btn btn-success"  ><i class="glyphicon glyphicon-trash" ></i></button>
                                        </form>
                                        <form action="{{route('company.da.settings')}}" method="post" >
                                            {{csrf_field()}}
                                            <input type="hidden" name="daid" value="{{ $da->DAid }}" />
                                            <button type="submit" id="ShowMore" title="@lang('tags.company_dashboard_da_settings_title')" class="btn btn-success"  ><i class="glyphicon glyphicon-cog" ></i></button>
                                        </form>
                                    <!--<button id="ShowMore" type="button" class="btn btn-success">@lang('profiles.company_da_dashboard_da_show_more')</button>
                                       -->

                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-3 col-3">
                                        <div class="row">
                                            @if(count($da->employee()->get())<1)
                                                <p>@lang('profiles.company_da_dashboard_da_empl_noempl')</p>
                                            @else
                                                <div  class="hallo">@lang('profiles.company_da_dashboard_da_empl') {{$da->employee()->get()[0]->name}}</div><br />
                                                <img id="Profilbild" class="rounded mx-auto" src="{{asset($da->employee()->get()[0]->prfpic)}}" alt="Avatar" height="50"><br />
                                            @endif
                                        </div>
                                        <br />
                                        <div class="row">
                                            @if(count($da->employeez()->get())<1)
                                                <p>@lang('profiles.company_da_dashboard_da_empl_noemplz')</p>
                                            @else
                                                <div  class="hallo">@lang('profiles.company_da_dashboard_da_emplz') {{$da->employeez()->get()[0]->name}}</div><br />
                                                <img id="Profilbild" class="rounded mx-auto" src="{{asset($da->employeez()->get()[0]->prfpic)}}" alt="Avatar" height="50"><br />
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
            </div>
        <button onclick="location.href ='/company/da/new';" style="width:10%" id="Erstell_Buttons" type="button" class="Plus-Button btn btn-default btn-lg btn-block">
            <i class='fas fa-plus' style="width:100%"></i>
        </button>
        </div>
    </div>
    </div>
{{--<div class="container-fluid">
    <br />
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10 container-fluid">
            <div class="hallo"><h1>@lang('profiles.company_da_dashboard_heading')</h1></div><br />
            <div id="panelgroup"class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('profiles.company_da_dashboard_panel_da_heading')</div>
                    <div id="panelbody"class="panel-body">








                        <button onclick="location.href ='/company/da/new';" id="Erstell_Buttons" type="button" class="btn btn-default btn-lg btn-block">
                            <i class="glyphicon glyphicon-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>--}}
@endsection