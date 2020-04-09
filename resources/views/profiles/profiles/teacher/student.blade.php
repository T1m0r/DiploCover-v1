@extends('layouts.apptch')
@section('pgtitle',__('tags.pg_title_st_profile'))
@section('head')

    <style>
        body{
            font-family: "Times New Roman", Times, serif;}
        .btn-st-prof{
            background-color: #cce1ff ;
        }
    </style>
@endsection
@section('content')
    <div class="col-sm-1 container-fluid"></div>
    <div class="col-sm-7 container-fluid"><br/>
        <img id="Bild" title="Profile" src="{{asset($st_prf->profpic)}}" alt="Avatar" style="width:20%"><br/>
        <div class="center"><h1>{{trim($st->firstname)}} {{trim($st->lastname)}}</h1></div><br/>
        <div class="center"><h1>@lang('profiles.student_profile_student'){{$st->school()->first()->schoolname}}</h1></div><br/>
        {{---@if($da == null)
            <h4>@lang('profiles.student_profile_cont_da_noda')</h4>
        @else
            <h4>{{$da->name}}</h4>
        @endif---}}
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><h4>@lang('profiles.student_profile_abme_heading')</h4></div>
            <div class="panel-body">
                <div title=@lang('tags.student_profile_aboutme_title') class="AboutMe">
                    <p>{{$st_prf->aboutme}}</p>
                </div>
            </div>
        </div><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><h4>@lang('profiles.student_profile_cont_heading')<h4></div>
            <div class="panel-body">
                <div class="ContactInfo">
                    <label class="fa fa-envelope" for="E-Mail">@lang('profiles.student_profile_cont_email')</label>
                    <p>{{$st->email}}</p>
                    <br/><label class="fas fa-address-book" for="Phone Number">@lang('profiles.student_profile_cont_team')</label>
                    @if($team ==null)
                        <p>@lang('profiles.student_profile_cont_team_noteam')</p>
                    @else
                        <p>@lang('profiles.student_profile_cont_team') <a href="/teacher/team/{{urlencode($team->teamID)}}/profile">{{$team->tname}}</a></p>
                    @endif
                    @if($st->phonenumber != null and $st->phonenumber != '')
                        <br/><label class="fas fa-address-book" for="Phone Number">@lang('profiles.student_profile_cont_phonenumber')</label>
                        <p>{{$st->phonenumber}}</p>
                    @endif

                    @if($st_prf->intressts != null and $st_prf->intressts != '')
                        <br/><label 	class="fas fa-globe" for="Website">@lang('profiles.student_profile_cont_intr')</label>
                        <p>{{$st_prf->intressts}}</p>
                    @endif

                </div>
            </div>
        </div><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><h4 class="fas fa-file-alt">@lang('profiles.student_profile_doc_heading')<h4></div>
            <div class="panel-body">
                <div class="ContactInfo">
                    @if(($st_prf->lebpath == "" or $st_prf->lebpath == null) and($st_prf->zeugpath == "" or $st_prf->zeugpath == null)
                        and($st_prf->otherpath1 == "" or $st_prf->otherpath1 == null) and ($st_prf->otherpath2 == "" or $st_prf->otherpath2 == null))
                        <p>@lang('profiles.employee_student_profile_nodocs')</p>
                    @else
                        @if($st_prf->lebpath != "" or $st_prf->lebpath != null)
                            <h5>@lang('profiles.student_profile_cv_heading')</h5>
                            @if(pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='docx')
                                <a href="{{asset($st_prf->lebpath)}}">Lebenslauf</a>
                            @elseif(pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='pdf')
                                <embed src="{{asset($st_prf->lebpath)}}"  style ="height:40em; width: 60em;"/>
                            @elseif(pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='png' or pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='jpeg' or pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='jpg' or pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='gif' or pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='svg')
                                <img src="{{asset($st_prf->lebpath)}}"  style="width: 60em;"/>
                            @else
                                <p class="error">@lang('profiles.student_profile_doc_error')</p>
                            @endif
                            {{--response()->file(asset($st_prf->lebpath))--}}
                        @endif
                        @if($st_prf->zeugpath != "" or $st_prf->zeugpath != null)
                            <h5>@lang('profiles.student_profile_grade_heading')</h5>
                            @if(pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='docx')
                                <a href="{{asset($st_prf->zeugpath)}}">Zeugnis</a>
                            @elseif(pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='pdf')
                                <embed src="{{asset($st_prf->zeugpath)}}"  style ="height:40em; width: 60em;"/>
                            @elseif(pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='png' or pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='jpeg' or pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='jpg' or pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='gif' or pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='svg')
                                <img src="{{asset($st_prf->zeugpath)}}" style="width: 60em;"/>
                            @else
                                <p class="error">@lang('profiles.student_profile_doc_error')</p>
                            @endif
                        @endif
                        @if($st_prf->otherpath1 != "" or $st_prf->otherpath1 != null)
                            <h5>@lang('profiles.student_profile_odoc_heading')</h5>
                            @if(pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='docx')
                                <a href="{{asset($st_prf->otherpath1)}}">{{pathinfo($st_prf->otherpath1, PATHINFO_BASENAME)}}</a>
                            @elseif(pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='pdf')
                                <embed src="{{asset($st_prf->otherpath1)}}"  style ="height:40em; width: 60em;"/>
                            @elseif(pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='png' or pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='jpeg' or pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='jpg' or pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='gif' or pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='svg')
                                <img src="{{asset($st_prf->otherpath1)}}" style="width: 60em;"/>
                            @else
                                <p class="error">@lang('profiles.student_profile_doc_error')</p>
                            @endif
                        @endif
                        @if($st_prf->otherpath2 != "" or $st_prf->otherpath2 != null)
                            @if(pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='docx')
                                <label for="Letter of Application">Letter of Application:</label>
                                <a href="{{asset($st_prf->otherpath2)}}">{{pathinfo($st_prf->otherpath2, PATHINFO_FILENAME)}}</a>

                            @elseif(pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='pdf')
                                <embed src="{{asset($st_prf->otherpath2)}}"  style ="height:40em; width: 60em; "/>
                            @elseif(pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='png' or pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='jpeg' or pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='jpg' or pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='gif' or pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='svg')
                                <img src="{{asset($st_prf->otherpath2)}}" style="width: 60em;"/>
                            @else
                                <p class="error">@lang('profiles.student_profile_doc_error')</p>
                            @endif
                        @endif
                    @endif
                </div>
            </div>
        </div><br/>
    </div>
@endsection

