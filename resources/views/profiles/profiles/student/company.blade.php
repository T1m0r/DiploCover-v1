@extends('layouts.app')
@section('pgtitle',__('tags.pg_title_comp_profile'))
@section('content')

    <div class="col-sm-7 container-fluid"><br/>
        <img id="Bild" src="{{asset($comp->profpic)}}" alt="Logo" style="width:20%"><br/>
        <div class="center"><h1>{{$comp->compname}}</h1></div><br/>
        @if($comp->prevtxt != null and $comp->prevtxt != "")
            <div id="Schatten"class="panel-group">
                <div class="panel-heading"><h4>@lang('profiles.employee_company_profile_compdesc')</h4></div>
                <div class="panel-body">
                    <div title="Information about me!" class="AboutMe">
                        <p>{{$comp->prevtxt}}</p>
                    </div>
                </div>
            </div><br/>
        @endif
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><h4>@lang('profiles.employee_company_profile_contact')</h4></div>
            <div class="panel-body">
                <div class="ContactInfo">
                    <form action="/action_page.php">
                        @if(($comp->contmail == null or $comp->contmail == "") and ($comp->website == null or $comp->website == ""))
                            <p>@lang('profiles.employee_company_profile_no_contact')</p>
                        @else
                            @if($comp->contmail != null and $comp->contmail != "")
                                <label class="fa fa-envelope" for="E-Mail"> @lang('profiles.employee_comnpany_profile_contact_email') </label>
                                <p>{{$comp->contmail}}</p>
                            @endif
                            @if($comp->website != null and $comp->website != "")
                                <br/><label 	class="fas fa-globe" for="Website"> @lang('profiles.employee_company_profile_contact_website') </label>
                                <p>{{$comp->website}}</p>
                            @endif
                        @endif
                    </form>
                </div>
            </div>
        </div><br/>
    </div>

@endsection