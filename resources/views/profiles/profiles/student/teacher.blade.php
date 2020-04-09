@extends('layouts.app')
@section('pgtitle',__('tags.pg_title_teach_profile'))
@section('content')
    <div class="col-sm-7 container-fluid"><br/>
        <img id="Bild" title="Profile" src="{{asset($tch->prfpic)}}" alt="Avatar" style="width:20%"><br/>
        <div class="center"><h1>{{$tch->name}}</h1></div><br/>
        <div class="center"><h1>{{$tch->school()->first()->schoolname}}</h1></div><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><h4>@lang('profiles.employee_teacher_profile_abme')</h4></div>
            <div class="panel-body">
                <div title="Information about me!" class="AboutMe">
                    <p>{{$tch->abme}}</p>
                </div>
            </div>
        </div><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><h4>@lang('profiles.employee_teacher_profile_contact')</h4></div>
            <div class="panel-body">
                <div class="ContactInfo">
                    <form action="/action_page.php">
                        <label class="fa fa-envelope" for="E-Mail"> @lang('profiles.employee_teacher_profile_contact_email') </label>
                        <p>{{$tch->email}}</p>
                        <br/><label class="fas fa-address-book" for="Phone Number"> @lang('profiles.employee_teacher_profile_contact_phonenumber') </label>
                        <p>{{$tch->phonenumber}}</p>
                    </form>
                </div>
            </div>
        </div><br/>
    </div>
@endsection
