@extends('layouts/app')

@section('head')
@endsection
@section('content')
    @if($da->privacy <4)
        <div class="col-sm-6 container-fluid">
            <br/>
            <div class="center">
                    @if($da->privacy >2 )
                        <h1>@lang('profiles.student_sthome_da_priv')</h1>
                    @else
                        <h1>{{$da->DAname}}</h1>
                    @endif
            </div>
            <br/>
            <div id="Schatten"class="panel-group">
                {{--<div class="panel-heading"><h3>Kurze Beschreibung</h3></div>---}}
                <div class="panel-body">
                    @if(count($da->employee()->get())==1)
                        <h4>@lang('profiles.student_da_stinfo_empl') {{$da->employee()->first()->name}} | {{$da->employee()->first()->email}}</h4>
                        <br/>
                    @endif

                    <h4>
                        <p>@lang('profiles.sutdent_stinfo_da_accepted_tsize') {{$da->size}} @lang('profiles.sutdent_stinfo_da_accepted_tsize_st')</p>
                    </h4>
                    <br/>
                    <div title="Information about me!" class="AboutMe">
                        <p>
                            <h3>{{$da->DAdesc}}</h3>
                        </p>
                    </div>
                </div>
                @if(isset($apl))
                    @if($apl == 1)
                        <p>@lang('profiles.sutdent_stinfo_da_tapplied')</p>
                    @elseif($apl == 0)
                        <form action="{{route('student.da.apply')}}" method="post" >
                            {{csrf_field()}}
                            <input type="hidden" name="daid" value="{{ $da->DAid }}" />
                            @if($da->optfield == 1)
                                @if($da->optfieldtitle == null or $da->optfieldtitle == "")
                                    <textarea  name="optionalfield" cols="60" rows="6" placeholder="@lang('form.stinfo.optfield_def')" required ></textarea>
                                @else
                                    <textarea name="optionalfield"cols="60" rows="6" placeholder="{{$da->optfieldtitle}}" required ></textarea>
                                @endif
                            @endif
                            <button type="submit" title="@lang('tags.student_da_stinfo_apply_title')" class="Bewerbenbutton btn btn-default btn-lg btn-block"  >@lang('profiles.sutdent_stinfo_da_btn_tapply')</button>
                        </form>
                    @else
                        <p>@lang('profiles.unkownERORR')</p>
                    @endif
                @endif
            </div>
        </div>
        <div class="col-sm-3 container-fluid">
            <div id="Schatten"class="panel-group">
                <div class="panel-heading">
                    <h4>@lang('profiles.student_da_stinfo_contactinf')</h4>
                </div>
                <div class="panel-body">
                    <div class="ContactInfo">
                        <img id="Bild" title="Profile" src="{{asset($da->company()->first()->profpic)}}" alt="Avatar" style="width:50%">
                        <br/>
                        <div class="center">
                            <h2>
                                <div>
                                    {{$da->company()->first()->compname}}
                                </div>
                            </h2>
                        </div>
                        <br/>
                        <label class="fa fa-envelope" for="E-Mail"> E-Mail:</label>
                        <p>{{$da->company()->first()->email}}</p>
                        <br/>
                        @if($da->company()->first()->website != null and $da->company()->first()->website != "")
                            <label class="fas fa-globe" for="Website"> Website:</label>
                            <p>{{$da->company()->first()->website}}</p>
                        @endif
                    </div>
                </div>
            </div><br/>
        </div>
        <div class="col-sm-1"></div>
    @else
        <div class="fail">
            @lang('profiles.student_stinfo_da_session_fail')
        </div>
    @endif
@endsection
