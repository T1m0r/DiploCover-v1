@extends('layouts.apptch')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Update DA') }}</div>

                    <div class="card-body">
                        {{csrf_field()}}
                        {!! Form::open(array('action' => 'Profile\DA\CompanyDAController@settingsupdate', 'method'=>'post')) !!}

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('daname', 'DA Title') !!}
                                    {!! Form::text('daname',null,['class'=>'form-control', 'placeholder'=>$da->DAname]) !!}
                                    {!! Form::hidden('daid',$da->DAid,['class'=>'form-control', 'required']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('dadesc', 'Short DA description:') !!}
                            {!! Form::textarea('dadesc',null,['class'=>'form-control', 'placeholder'=>$da->DAdesc]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('prog', 'Da Progress[%]:') !!}
                            {!! Form::number('prog',null,['class'=>'form-control','min'=>'0', 'max'=>'100','step'=>'1', 'value'=>$da->prog]) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('tsize', 'Team size:') !!}
                            {!! Form::select('tsize', $tsize,['class'=>'form-control', 'required']) !!}
                            <p>Currently: {{$tsize[$da->size]}}</p>
                        </div>
                        <div class="form-group">
                            {!! Form::label('emp', 'Select Employee:') !!}
                            {!! Form::select('emp', $emps,['class'=>'form-control', 'required']) !!}
                            @if(count($da->employee()->get()) <1)
                                <p>No employee has been assigned yet</p>
                            @else
                                <p>Currently: {{$da->employee()->get()[0]->name}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            {!! Form::label('priv', 'Select Privacy:') !!}
                            {!! Form::select('priv', $priv,['class'=>'form-control', 'required']) !!}
                            <p>Currently: {{$priv[$da->privacy]}}</p>
                        </div>


                        <div class="form-group">
                            {!!Form::submit('Update DA', ['class'=>'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
