@extends('layouts.appemp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('form.company_da_changestatus_title') }}</div>

                    <div class="card-body">
                        <h3>@lang('form.company_da_changestatus_current') {{$da->Phase()->get()[0]->status}}</h3>
                        {{csrf_field()}}
                        {!! Form::open(array('action' => 'Profile\DA\EmployeeDAController@stupdate', 'method'=>'post')) !!}
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">

                                    <p>@lang('form.company_da_changestatus_form_intro')</p>
                                    {!! Form::label('phase', __('form.company_da_changestatus_form_phase')) !!}

                                    {!! Form::select('phase', $phases,['class'=>'form-control']) !!}
                                    {!! Form::hidden('DAid',$da->DAid,['class'=>'form-control' ]) !!}

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            {!!Form::submit(__('form.company_da_changestatus_form_submit'), ['class'=>'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
