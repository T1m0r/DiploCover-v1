@extends('layouts.unauth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('form.register_teacher_further_title') }}</div>

                    <div class="card-body">
                        {{csrf_field()}}
                        {!! Form::open(['method'=>'POST', 'action'=>'Register\TeacherRegisterController@further','enctype'=>'multipart/form-data']) !!}

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('firstname', __('form.register_teacher_further_form_firstname')) !!}
                                    {!! Form::text('firstname', null,['class'=>'form-control', 'required','placeholder'=>__('form.register_teacher_further_form_placeholder_firstname')]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('lastname', __('form.register_teacher_further_form_lastname')) !!}
                            {!! Form::text('lastname',null,['class'=>'form-control','required','placeholder'=>__('form.register_teacher_further_form_placeholder_lastname')]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('title', __('form.register_teacher_further_form_title')) !!}
                            {!! Form::text('title', null,['class'=>'form-control', 'placeholder'=>__('form.register_teacher_further_form_placeholder_title')]) !!}
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('phonenumber', __('form.register_teacher_further_form_tel')) !!}
                                    {!! Form::text('phonenumber', null,['class'=>'form-control','placeholder'=>__('form.register_teacher_further_form_placeholder_tel')]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('abme', __('form.register_teacher_further_form_abme')) !!}
                                    {!! Form::textarea('abme', null,['class'=>'form-control','placeholder'=>__('form.register_teacher_further_form_placeholder_abme')]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('prpic',__('form.register_teacher_further_form_prpic')) !!}
                                    {!! Form::file('prpic', null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('intr', __('form.register_teacher_further_form_intr')) !!}
                                    {!! Form::text('intr', null,['class'=>'form-control','placeholder'=>__('form.register_teacher_further_form_placeholder_intr')]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('password', __('form.register_teacher_further_form_pswd')) !!}
                                    {!! Form::password('password', ['class'=>'form-control', 'required','placeholder'=>'123456789']) !!}

                                </div>
                                {!! Form::label('spswd', __('form.register_teacher_further_form_spswd')) !!}
                                {!! Form::checkbox('spswd',null,true, ['id'=>'spswd','class'=>'form-control','onclick'=>'showme()','unchecked']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::submit(__('form.register_teacher_further_form_submit'), ['class'=>'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jspace')
    <script>
        $('input[type=checkbox]').removeAttr('checked');
        function showme(){

            var pswdfield = document.getElementById("password");
            if(pswdfield.type === "password"){
                pswdfield.type = "text";
            }else{
                pswdfield.type = "password";
            }


        }
    </script>


@endsection
