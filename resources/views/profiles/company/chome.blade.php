@extends('layouts.appcomp')
@section('pgtitle',__('tags.pg_title_chome'))
@section('head')
    <style>
        .emp-btn-comp-home{
            background-color: #cce1ff;
        }
    </style>
@endsection
@section('content')
    <div class="col-sm-1 container-fluid"></div>
    <div class="col-sm-7 container-fluid"><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading">
                <p>@lang('profiles.company_empm_panel_empl_heading')</p>
            </div>
            <div class="panel-body">
                <div>
                    <table id="Klasse"style="width:100%" class="table table-hover hover">
                        <tr>
                            <th>@lang('profiles.company_empm_empl_table_name')</th>
                            <th>@lang('profiles.company_empm_empl_table_job')</th>
                            <th>@lang('profiles.company_empm_empl_table_da')</th>
                            <th>@lang('profiles.company_empm_empl_table_action')</th>
                        </tr>
                        @foreach($emps as $employ)
                            <tr id="101">
                                <td>{{$employ->firstname}} {{$employ->lastname}}</td>
                                <td>{{$employ->job}}</td>
                                @if(count($employ->da()->get()) >= 1)
                                    <td>{{__('profiles.company_empm_empl_table_da_txt') . count($employ->da()->get()) . __('profiles.company_empm_empl_table_da_txt2')}}</td>
                                @else
                                    <td> - </td>
                                @endif
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

                                            <button style="width:100%" title="@lang('tags.company_chome_emp_rmv_title')" type="submit" class="Deletebutton btn btn-default btn-lg btn-block"><i class='fas fa-trash-alt' style="color:black"></i></button>
                                        </form>
                                        {{--- <button style="width:100%" title="Change Mitarbeiter" type="button" class="Settingsbutton btn btn-default btn-lg btn-block">
                                    <i class="glyphicon glyphicon-cog"></i>
                                </button> ---}}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <button title="@lang('tags.company_chome_emp_add_title')" style="width:10%" onclick="window.location='{{route('company.emp.add')}}'" type="button" class="Plus-Button btn btn-default btn-lg btn-block">
                        <i class='fas fa-plus' style=width:100%></i>
                    </button>
                </div><br/>
            </div><br/>
        </div>
            <div id="Schatten"class="panel-group">
                <div class="panel-heading"><p>@lang('profiles.company_chome_da_heading')</p></div>
                <div id="panelbody"class="panel-body">
                    @if(count($das) <=0)
                        <p>@lang('profiles.company_chome_da_noda')</p>
                    @else
                        @foreach($das as $da)
                            <div class="panel panel-primary">
                                <div class="panel-heading">@lang('profiles.company_chome_da_daname') {{$da->DAname}}
                                    <div id="Status">@lang('profiles.company_chome_da_dastatus') {{$da->status}}</div>
                                </div>
                                <div class="panel-body">
                                    <div>@lang('profiles.company_chome_da_empl')
                                        @if(count($da->Employee()->get()) == 1)
                                            {{$da->Employee()->first()->name}}
                                        @else
                                            -
                                        @endif</div>
                                    <div>@lang('profiles.company_chome_da_team')
                                        @if(count($da->Team()->get()) == 1)
                                            {{$da->Team()->first()->name}}
                                        @else
                                            @lang('profiles.company_chome_da_noteam')
                                        @endif    <!--//TODO InsertInfo --></div>
                                    {{---<button id="ShowMore" type="button" class="btn btn-success">@lang('profiles.company_chome_da_show_more')  <!--//TODO InsertInfo --></button>
                                ---}}</div>
                            </div>
                        @endforeach
                    @endif
                </div>

                <button title="@lang('tags.company_chome_da_add_title')" style="width:10%" onclick="window.location='{{route('company.da.new')}}'" type="button" class="Plus-Button btn btn-default btn-lg btn-block">
                    <i class='fas fa-plus' style=width:100%></i>
                </button><br/>
            </div>
        </div>
@endsection