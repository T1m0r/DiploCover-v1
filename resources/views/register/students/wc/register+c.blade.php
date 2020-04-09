@extends('layouts.unauth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('form.register_students_wc_registerc_title') }}</div>

                    <div class="card-body">
                        {{csrf_field()}}
                        {!! Form::open(['method'=>'POST', 'action'=>'Register\StudentRegisterController@register']) !!}

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('SID', __('form.register_students_wc_registerc_form_sid')) !!}
                                    {!! Form::text('SID', null,['class'=>'form-control', 'required','placeholder'=>__('form.register_students_wc_registerc_form_placeholder_sid')]) !!}
                                    <!--<p>{{__('form.register_students_wc_registerc_form_nost')}}</p>
                                    <ul>
                                        <li>
                                            <a href="{{route('register.other.school')}}" >{{__('form.register_students_wc_registerc_othlogin_school')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{route('register.other.company')}}" >{{__('form.register_students_wc_registerc_othlogin_company')}}</a>
                                        </li>
                                        <li>
                                            <a href="/teacher/create" >{{__('form.register_students_wc_registerc_othlogin_techwc')}}</a>
                                        </li>
                                        <li>
                                            <a href="/teacher/create/standalone" >{{__('form.register_students_wc_registerc_othlogin_teachwoc')}}</a>
                                        </li>
                                        <li>
                                            <a href="/employee/create" >{{__('form.register_students_wc_registerc_othlogin_empwc')}}</a>
                                        </li>
                                        <li>
                                            <a href="/employee/create/alone" >{{__('form.register_students_wc_registerc_othlogin_empwoc')}}</a>
                                        </li>
                                            <p>{{__('form.register_students_wc_registerc_othlogin_none1')}} <a href="{{route('register.other.other')}}" >{{__('form.register_students_wc_registerc_othlogin_none2')}}</a></p>

                                    </ul>-->
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('scode', __('form.register_students_wc_registerc_form_scode')) !!}
                            {!! Form::text('scode',null,['class'=>'form-control','required','placeholder'=>__('form.register_students_wc_registerc_form_placeholder_scode')]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', __('form.register_students_wc_registerc_form_email')) !!}
                            {!! Form::email('email', null,['class'=>'form-control', 'required', 'placeholder'=>__('form.register_students_wc_registerc_form_placeholder_email')]) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::submit(__('form.register_students_wc_registerc_form_submit'), ['class'=>'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
