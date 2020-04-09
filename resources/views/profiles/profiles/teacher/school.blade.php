@extends('layouts.apptch')
@section('pgtitle',__('tags.pg_title_school_profile'))
@section('content')
    <div class="col-sm-7 container-fluid"><br/>
        <img id="Bild" src="{{asset($sch->prfpic)}}" alt="Logo" style="width:50%"><br/>
        <div class="center"><h1>{{$sch->schoolname}}</h1></div><br/>

        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><h4>@lang('profiles.employee_school_profile_contact')</h4></div>
            <div class="panel-body">
                <div class="ContactInfo">
                    <form action="/action_page.php">
                        <label class="fa fa-envelope" for="E-Mail"> @lang('profiles.employee_school_profile_contact_email') </label>
                        @if($sch->contmail != null and $sch->contmail != "")
                            <p>{{$sch->contmail}}</p>
                        @else
                            <p>@lang('profiles.employee_school_profile_contact_no_email')</p>
                        @endif
                    </form>
                </div>
            </div>
        </div><br/>
    </div>
    <div class="col-sm-1 container-fluid"></div>
@endsection
