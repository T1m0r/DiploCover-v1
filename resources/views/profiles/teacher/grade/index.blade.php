@extends('layouts.apptch')
@section('head')

@endsection
@section('content')
    <div class="col-sm-1 container-fluid"></div>
    <div class="col-sm-7 container-fluid"><br/>
        <div id="Schatten">
            <table id="Klasse"style="width:100%">
                <br />
                @if(isset($loged))
                    <p>@lang('profiles.teacher_grade_index_loged_msg')</p>

                @else
                    <p>@lang('profiles.teacher_grade_index_notloged_msg')</p>
                    <br />
                @endif

                <thead>
                <tr>
                    <th>@lang('profiles.teacher_grade_table_nr')</th>
                    <th>@lang('profiles.teacher_grade_table_student')</th>
                    <th>@lang('profiles.teacher_grade_table_team')</th>
                    <th>@lang('profiles.teacher_grade_table_teacher')</th>
                    <th>@lang('profiles.teacher_grade_table_da')</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $st)
                    <tr>
                        <td>{{$i= $i+1}}</td>
                        <td><a href="/teach/student/{{$st->sID}}/profile">{{$st->name}}</a></td>
                        @if(($st->teamID == null or $st->teamID == " ")and count($st->team()->get())!=1)
                            <td>...</td>
                                <td>@lang('profiles.teacher_grade_table_content_teacher_no')</td>
                                <td>@lang('profiles.teacher_grade_index_table_da_noda')</td>
                        @else

                            @if(count($st->team()->get()) >1 or $st->team()->get() == null)
                                <p>@lang('profiles.teacher_grade_table_team_invalide')</p>
                            @else

                                <td>{{$st->team()->get()[0]->tname}}</td>
                                @if(count($st->team()->first()->teacher()->get())== 1)
                                        <td>{{$st->team()->first()->teacher()->first()->name}}</td>
                                @else
                                        <td>@lang('profiles.teacher_grade_table_content_teacher_no')</td>
                                @endif
                                @if(count($st->team()->get()[0]->DA()->get())== 1)
                                    <td>{{$st->team()->get()[0]->DA()->get()->Daname}}</td>
                                @else
                                    <td>@lang('profiles.teacher_grade_index_table_da_noda')</td>
                                @endif

                            @endif
                        @endif
                            <td>
                                <form action="{{route('teacher.grade.st.rmv')}}" method="post" onclick="if(confirm('Are you sure you want to delete this student and all conected information?')){return true;}else{event.stopPropagation();event.preventDefault();};">
                                    {{csrf_field()}}
                                    <input type="hidden" name="sID" value="{{ $st->sID }}" />
                                    <button type="submit" style="width:100%" class="Deletebutton btn btn-default btn-lg btn-block"  ><i class='fas fa-trash-alt' style="color:black"></i></button>
                                </form>
                            </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div><br/>
        <form action="{{route('teacher.grade.st.add')}}" method="post" >
            {{csrf_field()}}
            <input type="hidden" name="gradeID" value="{{ $grade->gradeID }}" />
            <button type="submit" style="width: 45%;" class="Plus-Button btn btn-default btn-lg btn-block"  ><i class='fas fa-plus' style='font-size:24px'></i></button>
        </form><br/>
        <button style="width:25%" class="PDF-Button btn btn-default btn-lg btn-block" onclick="location.href ='/teacher/grade/{{urlencode($grade->gradeID)}}/pdf';" >@lang('profiles.teacher_grade_index_bnt_pdf')</button>
    </div>
   <br><br>
@endsection
