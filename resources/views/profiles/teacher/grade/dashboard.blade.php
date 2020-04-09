@extends('layouts.apptch')

@section('head')
    <style>
        .btn-teach-da-dashboard{
            background-color: #cce1ff;
        }
    </style>
@endsection
@section('content')
    <div class="col-sm-1 container-fluid"></div>
    <div class="col-sm-7 container-fluid"><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><h4>@lang('profiles.teacher_da_dashboard_da_head_owner')</h4></div>
            <div id="panelbody"class="panel-body">
                @if(count($tchdashe) < 1 and count($tchdasz) < 1)
                    <p>@lang('profiles.company_da_dashboard_da_noda')</p>
                @else
                    @foreach($tchdashe as $da)
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
                    @if(count($tchdasz) >= 1)
                        @foreach($tchdasz as $da)
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
                                                    <div  class="hallo">@lang('profiles.teacher_da_dashboard_da_empl') {{$da->empteacher()->get()[0]->name}}</div><br />
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



                <button title="@lang('tags.teacher_da_dashboard_new_da_btn_title')" onclick="location.href='{{route('teacher.new.da')}}';" style="width:10%" type="button" class="Plus-Button btn btn-default btn-lg btn-block">
                    <i class='fas fa-plus' style=width:100%></i> </button>
            </div>
        </div>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><h4>@lang('profiles.teacher_da_dashboard_da_head_teach')</h4></div>
            <div id="panelgroup"class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('profiles.teacher_da_dashboard_panel_teams_heading')</div>
                    @if(count($teams)>0)
                        @foreach($teams as $team)
                            <div id="panelbody"class="panel-body">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        Team: {{$team->tname}}  @if(count($team->members()->get())<1)
                                            @lang('profiles.teacher_da_dashboard_teams_memberfail')
                                        @elseif(count($team->members()->get())==1)
                                            ({{$team->members()->get()[0]->name}} )
                                        @else
                                            <p>(</p>@foreach($team->members()->get() as $member)
                                                {{$member->name}},
                                            @endforeach<p>)</p>
                                        @endif
                                        <form action="{{route('teacher.team.rmv')}}" method="post" onclick="if(confirm(' @lang('profiles.teacher_da_dashboard_da_delete_da_quest') ')){return true;}else{event.stopPropagation();event.preventDefault();};">
                                            {{csrf_field()}}
                                            <input type="hidden" name="teamID" value="{{ $team->teamID }}" />
                                            <button type="submit" title="@lang('tags.teacher_da_dashboard_da_rmv_team_title')" class="btn btn-success"  ><i class="glyphicon glyphicon-trash" ></i></button>
                                        </form>
                                    </div>
                                    <div class="panel-body">
                                        <div>@lang('profiles.teacher_da_dashboard_team_tsize') {{count($team->members()->get())}}  @lang('profiles.teacher_da_dashboard_team_tsizestud')</div>
                                        @if(count($team->DA()->get()) >0)
                                            <div>@lang('profiles.teacher_da_dashboard_team_dacomp'){{$team->DA()->get()[0]->company()->get()[0]->compname}}</div>
                                            <div>@lang('profiles.teacher_da_dashboard_team_daempl') {{$team->DA()->get()[0]->employee()->get()[0]->name}}</div>
                                            <div>DA-status: {{$team->DA()->get()[0]->status}}</div>
                                        @else
                                            <div>@lang('profiles.teacher_da_dashboard_team_noda')</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="panel panel-default">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <p>@lang('profiles.teacher_da_dashboard_teach_noda')</p>
                                <p>@lang('profiles.teacher_da_dashboard_teach_noda_tjoin')</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">@lang('profiles.teacher_da_dashboard_panel_da_heading')</div>
                @if(count($das)>0)
                    @foreach($das as $da)
                        <div id="panelbody"class="panel-body">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    {{$da->DAname}}
                                    <form action="{{route('teacher.da.rmv')}}" method="post" onclick="if(confirm(' @lang('profiles.teacher_da_dashboard_da_delete_teach_team_quest') ')){return true;}else{event.stopPropagation();event.preventDefault();};">
                                        {{csrf_field()}}
                                        <input type="hidden" name="DaID" value="{{ $da->DAid }}" />
                                        <button type="submit" title="@lang('tags.teacher_da_dashboard_da_rmv_da_title')" class="btn btn-success"  ><i class="glyphicon glyphicon-trash" ></i></button>
                                    </form>
                                </div>
                                <div class="panel-body">
                                    <div>@lang('profiles.teacher_da_dashboard_da_tsize') {{count($da->Team()->get()[0]->members()->get())}}  @lang('profiles.teacher_da_dashboard_da_tsizestud')</div>
                                    <div>@lang('profiles.teacher_da_dashboard_da_dacomp') {{$da->company()->get()[0]->compname}}</div>
                                    <div>@lang('profiles.teacher_da_dashboard_da_empl') {{$da->employee()->get()[0]->name}}</div>
                                    <div>@lang('profiles.teacher_da_dashboard_da_status') {{$da->status}}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="panel-body">
                        <p>@lang('profiles.teacher_da_dashboard_da_noda')</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection