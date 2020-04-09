@extends('layouts.appemp')
@section('pgtitle',__('tags.pg_title_emp_profile'))
@section('content')
    <div class="col-sm-7 container-fluid"><br/>
        <img id="Bild" title="Profile" src="{{asset($emp->prfpic)}}" alt="Avatar" style="width:20%"><br/>
        <div class="center"><h1>{{$emp->name}}</h1></div><br/>
        @if(count($emp->company()->get()) == 1)
            <div class="center"><h1>Mitarbeiter bei {{$emp->company()->first()->compname}}</h1></div><br/>
        @endif
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><h4>@lang('profiles.employee_employee_profile_abme')</h4></div>
            <div class="panel-body">

                <div title="Information about me!" class="AboutMe">
                    @if($emp->abme != null and $emp->abme != "")
                        <p>{{$emp->abme}}</p>
                    @else
                        <p>@lang('profiles.employee_employee_profile_noabme')</p>
                    @endif
                </div>
            </div>
        </div><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><h4>@lang('profiles.employee_employee_profile_contact')</h4></div>
            <div class="panel-body">
                <div class="ContactInfo">
                    <form action="/action_page.php">
                        <label class="fa fa-envelope" for="E-Mail">@lang('profiles.employee_employee_profile_mail')</label>
                        <p>{{$emp->email}}</p>
                        @if($emp->phonenumber != null and $emp->phonenumber != "")
                            <br/><label class="fas fa-address-book" for="Phone Number">@lang('profiles.employee_employee_profile_phone')</label>
                            <p>{{$emp->phonenumber}}</p>
                        @endif
                    </form>
                </div>
            </div>
        </div><br/>
    </div>
@endsection
