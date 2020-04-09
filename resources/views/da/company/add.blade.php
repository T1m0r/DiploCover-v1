@extends('layouts.unauth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create new DA') }}</div>
                    <div class="card-body">
                        {{csrf_field()}}
                        {!! Form::open(array('action' => 'DA\CompanyDAController@add', 'method'=>'post')) !!}
                        {{Form::token()}}
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('daname', 'Diplomarbeitstitel:') !!}
                                    {!! Form::text('daname', null,['placeholder'=>'Development of ', 'required','class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('dadesc', 'Diplomarbeitsbeschreibung:') !!}
                                    {!! Form::textarea('dadesc', null,['placeholder'=>'...', 'required','class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('size', 'Teamgröße:') !!}
                            {!! Form::number('size',null,['placeholder'=>'3','required', 'class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('priv', 'Privatsphäreeinstellung:') !!}
                            {!! Form::select('priv', [1=>'Nur Firmenmitarbeiter',2=>'Für alle Schüler ohne DA sichtbar',3=>'Für jeden sichtbar'],null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::submit('Create DA', ['class'=>'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
