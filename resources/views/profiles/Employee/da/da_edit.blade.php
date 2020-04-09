@extends('layouts.appemp')
@section('pgtitle',__('tags.pg_title_da_edit'))
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('form.company_da_edit_title') }}</div>

                    <div class="card-body">
                        {{csrf_field()}}
                        {!! Form::open(array('action' => 'Profile\DA\EmployeeDAController@settingsupdate', 'method'=>'POST')) !!}

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::hidden('daid',$da->DAid,['class'=>'form-control', 'required']) !!}
                                    {!! Form::label('daname', __('form.company_da_edit_form_daname')) !!}
                                    {!! Form::text('daname',null,['class'=>'form-control', 'placeholder'=>$da->DAname]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('dadesc', __('form.company_da_edit_form_dadesc')) !!}
                            {!! Form::textarea('dadesc',null,['class'=>'form-control', 'placeholder'=>$da->DAdesc]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('prog', __('form.company_da_edit_form_prog')) !!}
                            {!! Form::number('prog',null,['class'=>'form-control','min'=>'0', 'max'=>'100','step'=>'1', 'placeholder'=>$da->prog]) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('tsize', __('form.company_da_edit_form_tsize')) !!}
                            {!! Form::select('tsize', $tsize, $da->size,['class'=>'form-control', 'required']) !!}
                            <!--<p>@lang('form.company_da_edit_form_current') {{$tsize[$da->size]}}</p>-->
                        </div>
                        <div class="form-group">
                            {!! Form::label('emp', __('form.company_da_edit_form_empl')) !!}
                            {!! Form::select('emp', $emps,$da->emplID, ['class'=>'form-control', 'required']) !!}
                            <!---@if(count($da->employee()->get()) <1)
                                <p>@lang('form.company_da_edit_form_noempl')</p>
                            @else
                                <p>@lang('form.company_da_edit_form_current') {{$da->employee()->get()[0]->name}}</p>
                            @endif --->
                        </div>
                        <div class="form-group">
                            {!! Form::label('empz', __('form.company_da_edit_form_emplz')) !!}
                            {!! Form::select('empz', $emps,$da->emplIDz, ['class'=>'form-control']) !!}
                            <!---@if(count($da->employeez()->get()) <1)
                                <p>@lang('form.company_da_edit_form_noemplz')</p>
                            @else
                                <p>@lang('form.company_da_edit_form_current') {{$da->employee()->get()[0]->name}}</p>
                            @endif--->
                        </div>
                        <div class="form-group">
                            {!! Form::label('priv', __('form.company_da_edit_form_priv')) !!}
                            {!! Form::select('priv', $priv,$priv[$da->privacy], ['class'=>'form-control', 'required']) !!}
                            <!---@if($da->privacy == null or $da->privay == "")
                                <p>@lang('form.company_da_edit_form_current_nopriv') </p>
                            @else
                                <p>@lang('form.company_da_edit_form_current') {{$priv[$da->privacy]}}</p>
                            @endif--->
                        </div>
                        <div class="form-group">
                            {!! Form::label('optfield', __('form.company_da_edit_form_optfield')) !!}
                            {!! Form::select('optfield',array('0'=>__('form.company_da_edit_form_optfield_no'),'1'=>__('form.company_da_edit_form_optfield_yes')),$da->optfield,['class'=>'form-control', 'required']) !!}
                        </div>
                        @if($da->optfieldtitle == null or $da->optfieldtitle == "")
                        <div class="form-group">
                            {!! Form::label('optfieldtxt', __('form.company_da_edit_form_optfieldtxt'))!!}
                            {!! Form::text('optfieldtxt',null,['class'=>'form-control', 'placeholder'=>__('form.company_da_edit_form_optfieldtxt_placeholder')]) !!}
                        </div>
                        @else
                            <div class="form-group">
                                {!! Form::label('optfieldtxt', __('form.company_da_edit_form_optfieldtxt'))!!}
                                {!! Form::text('optfieldtxt',null,['class'=>'form-control', 'placeholder'=>$da->optfieldtitle]) !!}
                            </div>
                        @endif



                        <div class="form-group">
                            {!!Form::submit(__('form.company_da_edit_form_submit'), ['class'=>'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
