<?php

namespace App\Http\Controllers\Teacher\Grade;

use App\Models\Grade;
use App\Models\School;
use App\Models\Student;
use App\Models\Teacher;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class PdfController extends Controller
{
    //

    public function pdf($gradeID){
        $gradeID = urldecode($gradeID);
        $students = Student::where('gradeID',$gradeID)->get();
        $grade = Grade::where('gradeID',$gradeID)->first();
        $i = 0;
        $tch = Teacher::where('teachID',$grade->teachID)->first();
        $school=School::where('schoolID',$grade->schoolID)->first();
        //dd($students);

        $pdf = PDF::loadView('profiles.teacher.grade.pdf',['students'=>$students,'i'=>$i, 'grade'=>$grade, 'school'=>$school]);
        return $pdf->stream($school->schoolname.'_'.$grade->name.'Student_LoginCodes.pdf');
    }

}
