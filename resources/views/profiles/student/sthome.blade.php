@extends('layouts.app')
@section('pgtitle',__('tags.pg_title_home'))
@section('head')
    <style>
        .btn-st-home{
            background-color:#cce1ff ;
        }
    </style>
@endsection
@section('content')
    <div class="col-sm-7 container-fluid"><br/>
        @if(count($st->team()->get())==1)
            @if(count($st->team()->first()->DA()->get())==1)
                <div id="Schatten"class="panel-group">
                    <div class="panel-heading"><h4>Meine Diplomarbeit: {{$st->team()->first()->DA()->first()->DAname}}</h4>
                        <div id="Status">Status:</div>
                    </div>
                    <div class="panel-body">
                        @if(count($st->team()->first()->DA()->first()->employee()->get()) == 1)
                            <div>Firmen-Betreuer: <a href="student/employee/{{urlencode($st->team()->first()->DA()->first()->employee()->first()->empID)}}/profile" >{{$st->team()->first()->DA()->first()->employee()->first()->name}}</a></div>
                        @endif
                        @if(count($st->team()->first()->teacher()->get())==1)
                                <div>Lehrer-Betreuer: <a href="student/teacher/{{urlencode($st->team()->first()->teacher()->first()->teachID)}}/profile" >{{$st->team()->first()->teacher()->first()->name}}</a></div>
                        @endif
                                <div>Team: <a href="student/team/{{urlencode($st->teamID)}}">{{$st->team()->first()->tname}}</a> </div>
                        <!--<button id="ShowMore" title="Show More" type="button" class="btn btn-success">
                            <i class='fas fa-ellipsis-h' style="width:100%"></i>
                        </button>-->
                    </div>
                </div>
            @endif
        @endif
        <div id="Schatten"class="panel-group">
            <div class="panel-heading">@lang('profiles.student_sthome_news')</div>
            <div id="panelbody"class="panel-body">
                @foreach($das as $da)
                    @if($da->privacy <4)
                        <div class="panel panel-primary">
                            <div class="card-body">
                                @if($da->privacy >2 )
                                    <a href="/student/da/{{$da->DAid}}/info"><h3>@lang('profiles.student_sthome_da_priv')</h3></a>
                                @else
                                    <a href="/student/da/{{$da->DAid}}/info"><h3>{{$da->DAname}}</h3></a>
                                @endif

                                <h4> von: {{$da->company()->first()['compname']}} </h4>

                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
@endsection