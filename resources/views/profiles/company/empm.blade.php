@extends('layouts.appemp')
@section('pgtitle',__('tags.pg_title_emp_dashboard'))
@section('head')
    <style>
        button[id="Buttons"]{
            width: auto;
            background-color: #7C7C7C;
            color: white;
            padding: 5px 10px;
            margin:  5px 0;
            border: none;
            border-radius: 50px;
            cursor: pointer;}
        button[id="Buttons"]:hover {
            background-color: #676767;}
        button[id="Erstell_Buttons"]{
            width:auto;
            background-color: white;
            color: black;
            padding: auto;
            margin: auto;
            border: none;
            border-radius: 100px;
            cursor: pointer;}
        #panelbody{
            webkit-box-shadow: 30px 32px 90px -11px rgba(99,125,116,0.75);
            moz-box-shadow: 30px 32px 90px -11px rgba(99,125,116,0.75);
            box-shadow: 30px 32px 90px -11px rgba(99,125,116,0.75);
            background-color:#ffffff}
        #ShowMore{
            width: auto;
            background-color: #7C7C7C;
            color: white;
            padding: 5px 10px;
            margin:  5px 0;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            float:right;}
        #Profilbild{
            float:left;
            border-radius: 100px;}
        #Logo{
            border-radius: 175px;
            display:block;
            margin:0 auto;}
        .hallo{
            text-align: center;}
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <br />
        <div class="row">
            <div class="col-sm-3">
                <div id="panelgroup"class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading"></div>
                        <div id="panelbody"class="panel-body">
                            <div>
                                <button id="Buttons" onclick="location.href = '/chome'" style="width:100%" type="button" class="btn btn-default btn-lg btn-block">@lang('profiles.company_menu_lnt_home')</button>
                                <button id="Buttons" onclick="location.href = '/cedit'" style="width:100%" type="button" class="btn btn-default btn-lg btn-block">@lang('profiles.company_menu_lnt_edit')</button>
                                <button id="Buttons" onclick="location.href = '/company/da/dashboard'" style="width:100%" type="button" class="btn btn-default btn-lg btn-block">@lang('profiles.company_menu_lnt_da_dashboard')</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-7 container-fluid">
                <img id="Logo" src="{{asset($comp->profpic)}}" alt="Avatar" height="100">
                <div class="hallo"><h1>{{$comp->compname}}</h1></div>
                <div id="panelgroup"class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">@lang('profiles.company_empm_panel_empl_heading')</div>
                        <div id="panelbody"class="panel-body">
                            <table class="table table-hover hover">
                                <tr>
                                    <th>@lang('profiles.company_empm_empl_table_name')</th>
                                    <th>@lang('profiles.company_empm_empl_table_job')</th>
                                    <th>@lang('profiles.company_empm_empl_table_action')</th>
                                </tr>
                                @foreach($emps as $employ)
                                    <tr id="101">
                                        <td>{{$employ->firstname}} {{$employ->lastname}}</td>
                                        <td>{{$employ->job}}</td>
                                        <td>
                                            @if($employ->emplID != $emp->emplID)
                                            {{--<form action="{{route('company.emp.edit')}}" method="post">
                                                {{csrf_field()}}
                                                <input type="hidden" name="emplID" value="{{ $employ->emplID }}" />
                                                <button  type="submit" class="btn btn-success"><i class="glyphicon glyphicon-cog"></i></button>
                                            </form>--}}
                                            <form action="{{route('company.emp.rmv')}}" method="post">
                                                {{csrf_field()}}
                                                <input type="hidden" name="emplID" value="{{ $employ->emplID }}" />

                                                <button  type="submit" class="btn btn-success"><i class="glyphicon glyphicon-trash" ></i></button>
                                            </form>
                                                @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                                <button id="Erstell_Buttons" onclick="window.location='{{route('company.emp.add')}}'" type="button" class="btn btn-default btn-lg btn-block">
                                    <i class="glyphicon glyphicon-plus"></i>
                                </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
@endsection