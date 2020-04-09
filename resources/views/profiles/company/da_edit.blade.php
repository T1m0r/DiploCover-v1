@extends('layouts.appcomp')
@section('pgtitle',__('pg_title_da_edit'))
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('form.company_da_edit_title') }}</div>

                    <div class="card-body">
                        {{csrf_field()}}
                        {!! Form::open(array('action' => 'Profile\DA\CompanyDAController@settingsupdate', 'method'=>'post')) !!}

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('daname', __('form.company_da_edit_form_daname')) !!}
                                    {!! Form::text('daname',null,['class'=>'form-control', 'placeholder'=>$da->DAname]) !!}
                                    {!! Form::hidden('daid',$da->DAid,['class'=>'form-control', 'required']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('dadesc', __('form.company_da_edit_form_dadesc')) !!}
                            {!! Form::textarea('dadesc',$da->DAdesc,['class'=>'form-control', 'placeholder'=>$da->DAdesc]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('prog', __('form.company_da_edit_form_prog')) !!}
                            {!! Form::number('prog',null,['class'=>'form-control','min'=>'0', 'max'=>'100','step'=>'1', 'value'=>$da->prog]) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('tsize', __('form.company_da_edit_form_tsize')) !!}
                            {!! Form::select('tsize', $tsize,['class'=>'form-control', 'required']) !!}
                            <p>@lang('form.company_da_edit_form_current') {{$tsize[$da->size]}}</p>
                        </div>
                        <div class="form-group">
                            {!! Form::label('emp', __('form.company_da_edit_form_empl')) !!}
                            {!! Form::select('emp', $emps,['class'=>'form-control', 'required']) !!}
                            @if(count($da->employee()->get()) <1)
                                <p>@lang('form.company_da_edit_form_noempl')</p>
                            @else
                            <p>@lang('form.company_da_edit_form_current') {{$da->employee()->get()[0]->name}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            {!! Form::label('priv', __('form.company_da_edit_form_priv')) !!}
                            {!! Form::select('priv', $priv,['class'=>'form-control', 'required']) !!}
                            <p>@lang('form.company_da_edit_form_current') {{$priv[$da->privacy]}}</p>
                        </div>


                        <div class="form-group">
                            {!!Form::submit(__('form.company_da_edit_form_submit'), ['style'=>'width:50%', 'class'=>'Updatebutton btn btn-default btn-lg btn-block']) !!}
                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
