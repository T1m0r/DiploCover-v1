@extends('layouts.app')
@section('pgtitle',__('tags.pg_title_tmhome'))
@section('head')
    <style>
        .btn-st-tm {
            background-color: #cce1ff;
        }
    </style>
@endsection
@section('content')
    <div class="col-sm-1 container-fluid"></div>
    <div class="col-sm-7 container-fluid"><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading">@lang('profiles.student_team_dashboard_title')</div>
            <div class="panel-body">
                <div class="row container-fluid">
                    <table id="Klasse" class="table table-hover hover" style="width:100%">
                        <thead>
                        <tr>
                            <th>@lang('profiles.student_team_dashboard_tbl_name')</th>
                            <th>@lang('profiles.student_team_dashboard_tbl_grade')</th>
                            <!---<th>Rolle</th>--->
                            <th>@lang('profiles.student_team_dashboard_tbl_action')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($tms[0]))
                            <tr id="101">
                                <td>{{$tms[0]->firstname}} {{$tms[0]->lastname}}</td>
                                <td>{{$tms[0]->gradename()->first()->name}}</td>
                                <td></td>
                            </tr>
                        @endif
                        @if(isset($tms[1]))
                            <tr id="102">
                                <td>{{$tms[1]->firstname}} {{$tms[1]->lastname}}</td>
                                <td>{{$tms[1]->gradename()->first()->name}}</td>
                                <td>
                                    <form action="{{route('team.rmv')}}" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="sID" value="{{ $tms[1]->sID }}" />

                                        <button class="Deletebutton" title="@lang('tags.student_team_int_member_delt_title')" style="width:50%" type="submit">
                                            <i class='fas fa-trash-alt' style="color:black"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                        @if(isset($tms[2]))
                            <tr id="103">
                                <td>{{$tms[2]->firstname}} {{$tms[2]->lastname}}</td>
                                <td>{{$tms[2]->gradename()->first()->name}}</td>
                                <td><form action="{{route('team.rmv')}}" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="sID" value="{{ $tms[2]->sID }}" />

                                        <button class="Deletebutton" title="@lang('tags.student_team_int_member_delt_title')" style="width:50%" type="submit">
                                            <i class='fas fa-trash-alt' style="color:black"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                        @if(isset($tms[3]))
                            <tr id="104">
                                <td>{{$tms[3]->firstname}} {{$tms[3]->lastname}}</td>
                                <td>{{$tms[3]->gradename()->first()->name}}</td>
                                <td><form action="{{route('team.rmv')}}" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="sID" value="{{ $tms[3]->sID }}" />

                                        <button class="Deletebutton" title="@lang('tags.student_team_int_member_delt_title')" style="width:50%" type="submit">
                                            <i class='fas fa-trash-alt' style="color:black"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                        @if(isset($tms[4]))
                            <tr id="105">
                                <td>{{$tms[4]->firstname}} {{$tms[4]->lastname}}</td>
                                <td>{{$tms[4]->gradename()->first()->name}}</td>
                                <td>
                                    <form action="{{route('team.rmv')}}" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="sID" value="{{ $tms[1]->sID }}" />

                                        <button class="Deletebutton" title="@lang('tags.student_team_int_member_delt_title')" style="width:50%" type="submit">
                                            <i class='fas fa-trash-alt' style="color:black"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                        @if(isset($tms[5]))
                            <p>Error</p>
                        @endif
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading">@lang('profiles.student_team_dashboard_tm_invite')</div>
            <div id="panelbody"class="panel-body">
                <div>
                    @if($team->teachID == null and $team->teachID == "")
                        <p>@lang('profiles.student_team_teacher_inv_expl')</p>
                        <button class="Linkbutton" id="linkbtn" title="@lang('tags.student_team_int_member_add_teach_title')" style="width:30%" type="button" class="btn btn-default btn-lg">@lang('profiles.student_team_invite_link')</button></div>
                        <p id="Text" style="display: none;">@lang('profiles.student_team_teacher_inv_copied')</p><br/>
                        <input type="text" title="@lang('tags.student_team_int_member_add_teach_title')" value="{{$tchinv}}"/>
                    @else
                        @if($tch == null)
                            <p>@lang('profiles.student_team_teacher_noteacher')</p>
                        @else
                        <p>@lang('profiles.student_team_teacher_teacher') <b>{{$tch->name}}</b></p>
                        @endif
                    @endif
                    <br />

                @if($team->memberc <5)
                    <div>
                        <p>@lang('profiles.student_team_dashboard_tm_inv_desc')</p>
                        <button class="Linkbutton" id="linkbtn2" title="@lang('tags.student_team_int_member_add_stud_title')" style="width:30%" type="button" class="btn btn-default btn-lg">@lang('profiles.student_team_invite_link')</button>
                    </div>
                    <p id="Text1" style="display: none;">@lang('profiles.student_team_teacher_inv_copied')</p><br/>
                    <input type="text" title="@lang('tags.student_team_int_member_add_stud_title')" value="{{$inv}}"/>
                @else
                    <p>@lang('profiles.student_team_dashboard_tm_max_membermsg')</p>
                @endif

            </div>
        </div>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading">@lang('profiles.student_team_ideas_title')</div>
            <div id="panelbody"class="panel-body">
                <h3>@lang('profiles.student_team_ideas_new_idea')</h3>
                {{csrf_field()}}
                {!! Form::open(array('action' => 'Team\TeamIdeaController@store', 'method'=>'post')) !!}

                <div class="form-group row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('iname', __('profiles.student_team_ideas_new_idea_form_iname')) !!}
                            {!! Form::text('iname', null,['placeholder'=>__('profiles.student_team_ideas_new_idea_form_placeholder_iname'),'required','title'=>__('tags.student_team_int_ideas_iname_title'), 'class'=>'form-control']) !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('ishdesc', __('profiles.student_team_ideas_new_idea_form_ishdesc')) !!}
                    {!! Form::text('ishdesc', null,['placeholder'=>__('profiles.student_team_ideas_new_idea_form_placeholder_ishdesc'),'required','title'=>__('tags.student_team_int_ideas_ishdesc_title'),'class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('idesc', __('profiles.student_team_ideas_new_idea_form_idesc')) !!}
                    {!! Form::textarea('idesc', null,['placeholder'=>__('profiles.student_team_ideas_new_idea_form_placeholder_idesc'),'required','title'=>__('tags.student_team_int_ideas_idesc_title'),'class'=>'form-control']) !!}
                </div>



                <div class="form-group">
                    {!!Form::submit(__('profiles.student_team_ideas_new_idea_form_submit'), ['class'=>'btn btn-primary PDF-Button btn-default btn-lg btn-block', 'title'=>__('tags.student_team_int_ideas_submit_title')]) !!}
                </div>
                {!! Form::close() !!}
                @if(count($ideas) > 0)
                    <hr>
                    <h2>@lang('profiles.student_team_ideas_subtitle') </h2>
                    @foreach($ideas as $idea)
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"><a href="{{url('/team/'.$idea->iID.'/idea')}}">{{$idea->iname}}</a></h3>
                                <p class="card-text">{{str_limit($idea->idesc,100)}}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
@section('jspace')
    <script>
        $(document).ready(function(){
            $("#linkbtn").click(function(){
                $("#Text").show();
            });
            $("#linkbtn2").click(function(){
                $("#Text1").show();
            });
        });
    </script>
@endsection
