@section('head')
@section('pgtitle',__('tags.pg_title_employee_applist'))
@endsection
@section('content')
    <div class="container-fluid" style="padding-top: 2em; padding-bottom: 2em">
        <div class="row">
            <table class="table table-hover hover">
                <tr>
                    <th>@lang('profiles.company_applist_table_column_stname')</th>
                    <th>@lang('profiles.company_applist_table_column_tname')</th>
                    <th>@lang('profiles.company_applist_table_column_schname')</th>
                    <th>@lang('profiles.company_applist_table_column_tchname')</th>
                    <th>@lang('profiles.company_applist_table_column_action')</th>
                </tr>

                @foreach($appls as $apply)
                    <tr>
                        @if(count($apply->Team()->get())!=1)
                            <p>@lang('profiles.company_applist_apply_error')</p>
                        @else
                            <td>{{$apply->Team()->get()[0]->tname}}</td>
                            <div class="dropdown-menu">

                                @foreach($apply->Team()->get()[0]->members()->get() as $student)
                                    <p>{{$student->name}}</p>


                                    @if($student->schoolID != null and $student->schoolID !="")
                                        @if(count($student->school()->get()) ==1)
                                            <td><a href="/empl/student/{{urlencode($student->sID)}}/profile" >{{$student->school()->get()[0]->schoolname}}</a></td>
                                        @else
                                            <td>@lang('profiles.company_applist_apply_scherror')</td>
                                        @endif
                                    @else
                                        <td>@lang('profiles.company_applist_apply_noscherror')</td>
                                    @endif

                                    {{--//TODO CHecking if this actually works( i doubt it----}}
                                @endforeach
                            </div>
                        @endif
                        @if(count($da->Teacher()->get()) ==1)
                            <td>{{$da->Teacher()->get()[0]->name}}</td>
                        @else
                            <td>@lang('profiles.company_applist_apply_team_noteach')</td>
                        @endif

                        <td><form action="{{route('company.da.rmv')}}" method="post" onclick="if(confirm('Are you sure you want to delete this grade and all conected(student acoounts) information?')){return true;}else{event.stopPropagation();event.preventDefault();};">
                                {{csrf_field()}}
                                <input type="hidden" name="sID" value="{{ $da->DAid }}" />
                                <button type="submit" class="btn btn-success"  ><i class="glyphicon glyphicon-trash" ></i></button>
                            </form></td>

                        <td></td>
                    </tr>
                @endforeach
            </table>


        </div>
    </div>
@endsection