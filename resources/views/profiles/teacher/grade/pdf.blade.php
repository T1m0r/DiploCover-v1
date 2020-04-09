<!DOCTYPE html>
<html>
<head>
    <title>Student PDF</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .box{
            width:600px;
            margin:0 auto;
        }
    </style>
</head>
<body>
<br />
<div class="container">
    <h3 align="center">@lang('profiles.teacher_grade_pdf_heading_grade') {{$grade->name}} | @lang('profiles.teacher_grade_pdf_heading_name')</h3><br />

    <div class="row">
        <div class="col-md-7" align="right">
            <h4>DiploCover {{$school->schoolname}} | {{$grade->name}} - @lang('profiles.teacher_grade_pdf_heading_name') - {{route('register')}}</h4>
        </div>
    </div>
    <br />
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>@lang('profiles.teacher_grade_pdf_table_nr')</th>
                <th>@lang('profiles.teacher_grade_pdf_table_st_id')</th>
                <th>@lang('profiles.teacher_grade_pdf_table_st_code')</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $i = $i +1 }}</td>
                    <td><p>@lang('profiles.teacher_grade_pdf_table_st_id')  -  {{ $student->sID }}</p></td>
                    <td><p>@lang('profiles.teacher_grade_pdf_table_st_code')  -  {{ $student->scode }}</p></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>