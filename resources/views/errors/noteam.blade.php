@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('form.errormsg') }}</div>
                    <div class="card-body">
                        <div class="alert alert-danger">
                            <h1>{{$errormsg}}</h1>
                            @if((\Illuminate\Support\Facades\Auth::user()->teamID != null or Auth::user()->teamID != "") and count(\App\Models\Team::where('teamID',Auth::user()->teamID)->get()) == 1)

                                <button onclick="location.href='/team/{{urlencode(Auth::user()->teamID)}}/profile';" class="btn btn-app">@lang('profiles.student_edit_team_textern')</button>
                                <button onclick="location.href='{{route('student.team')}}';"  class="btn btn-app">@lang('profiles.student_edit_team_thome')</button>
                            @else
                                <p >@lang('profiles.student_edit_team_noteam')</p>
                                <form method="POST" action="#" aria-label="Team registration">
                                    <div class="form-group row">
                                        <label for="tidd" class="col-sm-4 col-form-label text-md-right">@lang('profiles.student_edit_team_join_teamID')</label>
                                        <div class="col-md-6">
                                            <input id="tidd" type="text"  name="tidd"  required autofocus>
                                        </div>
                                    </div>
                                </form>
                                <p >@lang('profiles.student_edit_team_txt_ct')</p>
                                <button class="btn btn-info" onclick="location.href = '/profile/team/create'">@lang('profiles.student_edit_team_btn_ct')</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
