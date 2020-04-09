@extends('layouts.appcomp')
@section('pgtitle',__('tags.pg_title_adda'))
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><i class="fas fa-book"></i> {{ __('profiles.company_adda_heading') }}</div>

                    <div class="card-body">
                        {{csrf_field()}}
                        {!! Form::open(array('action' => 'Profile\DA\CompanyDAController@adda', 'method'=>'post')) !!}
                        <p>Required fields *</p>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('daname', __('profiles.company_adda_form_daname')) !!}
                                    {!! Form::text('daname',null,['class'=>'form-control', 'placeholder'=>__('profiles.company_adda_form_placeholder_daname')]) !!}

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('dadesc', __('profiles.company_adda_form_dadesc')) !!}
                            {!! Form::textarea('dadesc',null,['class'=>'form-control', 'placeholder'=>__('profiles.company_adda_form_placeholder_dadesc')]) !!}

                        </div>

                        <div class="form-group">
                            {!! Form::label('tsize', __('profiles.company_adda_form_tsize')) !!}
                            {!! Form::select('tsize', $tsize,['class'=>'Listenbutton form-control', 'required']) !!}

                        </div>
                        <div class="form-group">
                            {!! Form::label('emp', __('profiles.company_adda_form_empl')) !!}
                            {!! Form::select('emp', $emps,['class'=>'Listenbutton form-control', 'required']) !!}

                        </div>
                        <div class="form-group">
                            {!! Form::label('empz', __('form.company_da_edit_form_emplz')) !!}
                            {!! Form::select('empz', $emps, ['class'=>'Listenbutton form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('priv', __('profiles.company_adda_form_priv')) !!}
                            {!! Form::select('priv',$priv,['class'=>'Listenbutton form-control', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('optfield', __('profiles.company_adda_form_optfield')) !!}
                            {!! Form::select('optfield',array('1'=>__('profiles.company_adda_form_optfield_no'),'2'=>__('profiles.company_adda_form_optfield_yes')),['class'=>'Listenbutton form-control', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('optfieldtxt', __('profiles.company_adda_form_optfield_txt'))!!}
                            {!! Form::text('optfieldtxt',null,['class'=>'form-control', 'placeholder'=>__('profiles.company_adda_form_optfield_txt_placeholder')]) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::submit(__('profiles.company_adda_form_submit'), ['class'=>'Updatebutton btn btn-default btn-lg btn-block', 'style'=>'width:25%']) !!}
                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
