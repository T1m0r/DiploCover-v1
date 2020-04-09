<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use App\Models\DA;
use App\Models\stud_profile;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

//--------------------------------------------------------------------
//Landingpage Routes...
//--------------------------------------------------------------------

//Different routing based on auth guard


//Index Route
Route::get('/', function () {
    if(Auth::guard('student')->check() == true){
        return redirect('/sthome');

    }elseif(Auth::guard('teacher')->check() == true){
        return redirect('/tchome');

    }elseif(Auth::guard('employee')->check() == true){
        return redirect('/emphome');
    }else {
        return view('DiploCover.Home.index');
    }
});

//___________________________________________________________________
// DiploCover Route
Route::get('/diplocover',function(){

    if(Auth::guard('student')->check() == true){
        return redirect('/sthome');

    }elseif(Auth::guard('teacher')->check() == true){
        return redirect('/tchome');

    }elseif(Auth::guard('employee')->check() == true){
        return redirect('/emphome');
    }else{
        return view('DiploCover/Home/diplocover');
    }
});

//___________________________________________________________________
//Team Route
Route::get('/h/team',function(){

    if(Auth::guard('student')->check() == true){
        return redirect('/sthome');

    }elseif(Auth::guard('teacher')->check() == true){
        return redirect('/tchome');

    }elseif(Auth::guard('employee')->check() == true){
        return redirect('/emphome');
    }else{
        return view('DiploCover/Home/team');
    }
});

//___________________________________________________________________
//Contact Route
Route::get('/contact',function(){

    if(Auth::guard('student')->check() == true){
        return redirect('/sthome');

    }elseif(Auth::guard('teacher')->check() == true){
        return redirect('/tchome');

    }elseif(Auth::guard('employee')->check() == true){
        return redirect('/emphome');
    }else{
        return view('DiploCover/Home/contact');
    }
});
//Contact send route
Route::post('home/send', 'HomeController@contact')->name('home.send');

//___________________________________________________________________
//Ideas Route
Route::get('/ideas',function(){

    if(Auth::guard('student')->check() == true){
        return redirect('/sthome');

    }elseif(Auth::guard('teacher')->check() == true){
        return redirect('/tchome');

    }elseif(Auth::guard('employee')->check() == true){
        return redirect('/emphome');
    }else{
        return view('DiploCover/Home/ideas',compact());
    }
});

//___________________________________________________________________
//Partner Route
Route::get('/partner',function(){

    if(Auth::guard('student')->check() == true){
        return redirect('/sthome');

    }elseif(Auth::guard('teacher')->check() == true){
        return redirect('/tchome');

    }elseif(Auth::guard('employee')->check() == true){
        return redirect('/emphome');
    }else{
        return view('DiploCover/Home/partner');
    }
});


//--------------------------------------------------------------------
//Language Routes...
//--------------------------------------------------------------------


//Deutsch
Route::get('lang/de', function () {

    if(App::getLocale() == 'de'){
        return redirect()->back()->with('success','Du hast schon Deutsch als Standartsprache');
    }else{
        App::setLocale('de');
        return redirect()->back()->with('success','Sprache erfolgreich auf Deutsch umgestellt');
    }
});

//_____________________________________________
// English
Route::get('lang/en', function () {

    if(App::getLocale() == 'en'){
        return redirect()->back()->with('success','You already have this language');
    }else{
        App::setLocale('en');
        return redirect()->back()->with('success','Changed Language to English');
    }
});

//_____________________________________________
// Get current language route
Route::get('get/lang', function () {
    return App::getLocale();
});



//--------------------------------------------------------------------
// Registration Routes...
//--------------------------------------------------------------------
Route::post('sending', 'Home\HomeController@send')->name('sending');

Route::get('login', 'Student\LoginController@showLoginForm')->name('login')->middleware('web');
Route::post('login', 'Student\LoginController@login');
Route::get('logout', 'Student\LoginController@logout')->name('logout')->middleware('auth:student');

// Password Reset Routes...
Route::get('password/reset', 'Student\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Student\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Student\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Student\ResetPasswordController@reset')->name('password.update');

//_____________________________________________________________________________________________________________________
//Employee Routes

Route::get('/employee/login', 'Employee\LoginController@showLoginForm')->name('employee.login')->middleware('web');
Route::post('/employee/login', 'Employee\LoginController@login')->name('employee.login');
Route::get('/employee/logout', 'Employee\LoginController@logout')->name('employee.logout')->middleware('auth:employee');

// Password Reset Routes...
Route::get('employee/password/reset', 'Employee\ForgotPasswordController@showLinkRequestForm')->name('employee.password.request');
Route::post('employee/password/email', 'Employee\ForgotPasswordController@sendResetLinkEmail')->name('employee.password.email');
Route::get('employee/password/reset/{token}', 'Employee\ResetPasswordController@showResetForm')->name('employee.password.reset');
Route::post('employee/password/reset', 'Employee\ResetPasswordController@reset')->name('employee.password.update');

//_____________________________________________________________________________________________________________________
//Teacher Routes

Route::get('/teacher/login', 'Teacher\LoginController@showLoginForm')->name('teacher.login')->middleware('web');
Route::post('/teacher/login', 'Teacher\LoginController@login');
Route::get('/teacher/logout', 'Teacher\LoginController@logout')->name('teacher.logout');

// Password Reset Routes...
Route::get('teacher/password/reset', 'Teacher\ForgotPasswordController@showLinkRequestForm')->name('teacher.password.request');
Route::post('teacher/password/email', 'Teacher\ForgotPasswordController@sendResetLinkEmail')->name('teacher.password.email');
Route::get('teacher/password/reset/{token}', 'Teacher\ResetPasswordController@showResetForm')->name('teacher.password.reset');
Route::post('teacher/password/reset', 'Teacher\ResetPasswordController@reset')->name('teacher.password.update');




//--------------------------------------------------------------------
// Teacher Routes...
//--------------------------------------------------------------------

Route::post('teachers','Register\TeacherRegisterController@register')->name('teach.register')->middleware('auth:teacher');
Route::post('schools','Register\SchoolRegisterController@register')->name('school.register')->middleware('auth:admin');
Route::get('teacher/register/confirm','Register\TeacherRegisterController@confirm')->name('tch_confirm')->middleware('unauth');
Route::view('teacher/c/further', 'register.teacher.further')->middleware('unauth');
Route::post('teacher/register/further','Register\TeacherRegisterController@further')->name('tch_further')->middleware('unauth');
Route::view('teacher/create/standalone','create.teacher.create-standalone')->middleware('auth:teacher');
Route::view('teacher/create/root','create.teacher.create-teacher-root')->middleware('auth:admin');
//Route::get('/tchome','Profile\TeacherHomeController@index')->name('teacher.home')->middleware('auth:teacher');
Route::get('/tchome','Profile\TeacherHomeController@index')->name('tch.home')->middleware('auth:teacher');

//--------------------------------------------------------------------
// Teacher Profile Routes...
//--------------------------------------------------------------------
Route::get('/tchedit', 'Profile\TeacherProfileController@eedit')->name('teacher.edit')->middleware('auth:teacher');
Route::get('/teach/delete', 'Profile\TeacherProfileController@delete')->name('teacher.delete')->middleware('auth:teacher');
Route::post('/teacher/profile/update/file','Profile\TeacherProfileController@udfile')->name('teacher.update.file')->middleware('auth:teacher');
Route::post('/teacher/profile/update/info','Profile\TeacherProfileController@udinfo')->name('teacher.update.info')->middleware('auth:teacher');
Route::post('/teacher/profile/update/pswd','Profile\TeacherProfileController@updpswd')->name('teacher.update.password')->middleware('auth:teacher');

//--------------------------------------------------------------------
// Grade Routes...
//--------------------------------------------------------------------

Route::view('teacher/grade/new','profiles.teacher.newgrade')->middleware('auth:teacher');
Route::post('teacher/grade/create','Teacher\Grade\TeacherGradeController@new')->middleware('auth:teacher');
Route::get('/teacher/grade/{gradeID}/index','Teacher\Grade\TeacherGradeController@index')->name('teacher.grade.index')->middleware('auth:teacher');
Route::get('/teacher/grade/{gradeID}/pdf','Teacher\Grade\PdfController@pdf')->middleware('auth:teacher');
Route::get('/teacher/da/dashboard','Profile\TeacherProfileController@DAshboard')->name('teacher.da.dashboard')->middleware('auth:teacher');
Route::get('/teacher/grade/dashboard','Profile\TeacherProfileController@gradedashboard')->name('teacher.grade.dashboard')->middleware('auth:teacher');
Route::post('/teacher/grade/delete','Teacher\Grade\TeacherGradeController@rmv')->name('teacher.grade.rmv')->middleware('auth:teacher');
Route::post('/teacher/grade/edit','Teacher\Grade\TeacherGradeController@edit')->name('teacher.grade.edit')->middleware('auth:teacher');
Route::post('/teacher/team/rmv','Teacher\Grade\TeacherGradeController@rmvtm')->name('teacher.team.rmv')->middleware('auth:teacher');
Route::post('/teacher/da/rmv','Teacher\Grade\TeacherGradeController@rmvda')->name('teacher.da.rmv')->middleware('auth:teacher');
Route::post('/teacher/grade/st/rmv','Teacher\Grade\TeacherGradeController@rmvst')->name('teacher.grade.st.rmv')->middleware('auth:teacher');
Route::post('/teacher/grade/update','Teacher\Grade\TeacherGradeController@update')->name('teacher.grade.update')->middleware('auth:teacher');
Route::post('/teacher/grade/st/add','Teacher\Grade\TeacherGradeController@addst')->name('teacher.grade.st.add')->middleware('auth:teacher');
Route::post('/teacher/grade/st/create','Teacher\Grade\TeacherGradeController@creatests')->name('teacher.grade.st.create')->middleware('auth:teacher');

Route::get('/teacher/da/new', 'Profile\DA\TeacherDAController@newda')->name('teacher.new.da')->middleware('auth:teacher');
Route::post('/teacher/da/add','Profile\DA\TeacherDAController@adda')->name('teacher.da.add')->middleware('auth:teacher');
Route::post('/teacher/da/status/edit','Profile\DA\TeacherDAController@stedit')->name('teacher.da.status.edit')->middleware('auth:teacher');
Route::post('/teacher/da/status/update','Profile\DA\TeacherDAController@stupdate')->name('teacher.da.status.update')->middleware('auth:teacher');
Route::post('/teacher/da/rmv','Profile\DA\TeacherDAController@rmv')->name('teacher.da.rmv')->middleware('auth:teacher');

Route::post('/teacher/edit/da', 'Profile\Da\TeacherDAController@settings')->name('teacher.da.settings')->middleware('auth:teacher');
Route::post('/teacher/da/update', 'Profile\DA\TeacherDAController@settingsupdate')->name('teacher.da.settings.update')->middleware('auth:teacher');
Route::post('/teacher/da/create', 'Profile\DA\TeacherDAController@adda')->name('teacher.da.create')->middleware('auth:teacher');

Route::post('/teacher/da/applist','Profile\DA\TeacherDAController@applist')->name('teacher.da.applist')->middleware('auth:teacher');
Route::post('/teacher/da/applist/add','Profile\DA\TeacherDAController@addteamda')->name('teacher.da.add.team')->middleware('auth:teacher');
Route::post('/teacher/da/applist/rmv','Profile\DA\TeacherDAController@rmvteam')->name('teacher.da.rmv.team')->middleware('auth:teacher');



//--------------------------------------------------------------------
// Employee Routes...
//--------------------------------------------------------------------

Route::view('employee/register/woc/','register.others.emplwoc')->name('create.employee.create_alone');
Route::get('employee/r/register/woc/','Register\EmployeeRegisterController@regmailwoc')->name('employee.register.woc');

Route::post('employees','Register\EmployeeRegisterController@register')->name('emp.register')->middleware('auth:employee');
Route::post('employeesr','Register\EmployeeRegisterController@registerroot')->name('root.emp.register')->middleware('auth:admin');
Route::get('employee/register/confirm','Register\EmployeeRegisterController@confirm')->name('emp_confirm')->middleware('unauth');
Route::view('employee/c/further', 'register.employee.further')->middleware('unauth');
Route::post('employee/register/further','Register\EmployeeRegisterController@further')->name('emp_further')->middleware('unauth');
Route::view('company/create/employee','create.employee.create-employee-company')->middleware('auth:employee');
Route::view('root/create/employee','root.create.employee.create-employee-root')->middleware('auth:admin');
Route::get('/emphome','Profile\EmployeeHomeController@index')->name('emp.home')->middleware('auth:employee');
Route::post('/employee/delete','Profile\EmployeeProfileController@delete')->name('employee.delete')->middleware('auth:employee');
Route::post('/employee/update/password','Profile\EmployeeProfileController@updpswd')->name('employee.update.pswd')->middleware('auth:employee');


//--------------------------------------------------------------------
// Employee Profile Routes...
//--------------------------------------------------------------------
Route::get('/eedit', 'Profile\EmployeeProfileController@eedit')->name('employee.edit')->middleware('auth:employee');
Route::post('/employee/profile/update/file','Profile\EmployeeProfileController@udfile')->name('employee.update.file')->middleware('auth:employee');
Route::post('/employee/profile/update/info','Profile\EmployeeProfileController@udinfo')->name('employee.update.info')->middleware('auth:employee');

Route::get('/employee/da/new', 'Profile\DA\EmployeeDAController@newda')->name('employee.new.da')->middleware('auth:employee');
Route::post('/employee/da/add','Profile\DA\EmployeeDAController@adda')->name('employee.da.add')->middleware('auth:employee');
Route::post('/employee/da/status/edit','Profile\DA\EmployeeDAController@stedit')->name('employee.da.status.edit')->middleware('auth:employee');
Route::post('/employee/da/status/update','Profile\DA\EmployeeDAController@stupdate')->name('employee.da.status.update')->middleware('auth:employee');
Route::post('/employee/da/rmv','Profile\DA\EmployeeDAController@rmv')->name('employee.da.rmv')->middleware('auth:employee');

Route::post('/employee/edit/da', 'Profile\DA\EmployeeDAController@settings')->name('employee.da.settings')->middleware('auth:employee');
Route::post('/employee/da/update', 'Profile\DA\EmployeeDAController@settingsupdate')->name('employee.da.settings.update')->middleware('auth:employee');
Route::post('/employee/da/create', 'Profile\DA\EmployeeDAController@adda')->name('employee.da.create')->middleware('auth:employee');

Route::post('/employee/da/applist','Profile\DA\EmployeeDAController@applist')->name('employee.da.applist')->middleware('auth:employee');
Route::post('/employee/da/applist/add','Profile\DA\EmployeeDAController@addteamda')->name('employee.da.add.team')->middleware('auth:employee');
Route::post('/employee/da/applist/rmv','Profile\DA\EmployeeDAController@rmvteam')->name('employee.da.rmv.team')->middleware('auth:employee');


//--------------------------------------------------------------------
// School Routes...
//--------------------------------------------------------------------

Route::get('/schome','Profile\SchoolProfileController@index')->name('school.home')->middleware('school');
Route::get('/school/Da/dashboard','Profile\SchoolProfileController@DAshboard')->name('school.da.dashboard')->middleware('school');
Route::get('/school/manage/teacher','Profile\SchoolProfileController@teachm')->name('school.manage.teacher')->middleware('school');
Route::post('/school/manage/teacher/rmv','Profile\SchoolProfileController@rmv')->name('school.tch.rmv')->middleware('school');
Route::view('/school/add/teacher','profiles.school.teachadd')->name('school.add.teacher')->middleware('auth:teacher');
Route::post('/school/add/teacher/create','Register\TeacherRegisterController@schregisterteach')->name('school.add.teacher.create')->middleware('school');

//--------------------------------------------------------------------
// School Profile Routes...
//--------------------------------------------------------------------
Route::get('/schedit', 'Profile\SchoolProfileController@schedit')->name('school.edit')->middleware('school');
Route::post('/school/profile/update/info','Profile\SchoolProfileController@udinfo')->name('school.update')->middleware('school');
Route::get('/school/tchm','Profile\SchoolProfileController@tchm')->name('school.tchm')->middleware('auth:teacher');



//--------------------------------------------------------------------
// Student  Routes...
//--------------------------------------------------------------------


//--------------------------------------------------------------------
// Student Register Routes...
//--------------------------------------------------------------------
Route::post('students','Register\StudentRegisterController@register')->name('register')->middleware('unauth');
Route::get('student/register/confirm','Register\StudentRegisterController@confirm')->name('st_confirm')->middleware('unauth');
Route::post('student/register/further','Register\StudentRegisterController@further')->name('st_further')->middleware('unauth');
Route::view('student/register', 'register.students.wc.register+c')->middleware('unauth');


//--------------------------------------------------------------------
// Student Profile Routes...
//--------------------------------------------------------------------
Route::get('/sedit', 'Profile\StudentProfileController@sedit')->name('student.edit')->middleware('auth:student');
Route::get('/student/{sid}/profile', 'Profile\StudentProfileController@index')->name('student.profile')->middleware('auth:student');
Route::get('/empl/student/{sid}/profile', 'Profile\EmployeeProfileController@emplindex')->name('empl.student.profile')->middleware('auth:employee');
Route::get('/teach/student/{sid}/profile', 'Profile\TeacherProfileController@teachindex')->name('teach.student.profile')->middleware('auth:teacher');
Route::view('/404', '/404')->name('404');
Route::post('/student/profile/update/file','Profile\StudentProfileController@udfile')->name('student.update.file')->middleware('auth:student');
Route::post('/student/profile/update/info','Profile\StudentProfileController@udinfo')->name('student.update.info')->middleware('auth:student');
Route::post('/student/profile/update/pswd','Profile\StudentProfileController@updpswd')->name('student.update.pswd')->middleware('auth:student');
Route::get('/student/profile/delete','Profile\StudentProfileController@delete')->name('student.delete')->middleware('auth:student');

Route::get('/sthome',function(){
    if(Auth::check() == true) {
        $st = Auth::user();
        $das = DA::where('teamID',null)->where('phase',2)->orderby('created_at','desc')->get();
        //$das = $das->where('phase',2)->get();
        //dd($das);
        $sid = $st->sID;
        $st_prf = stud_profile::where('sID', $sid)->first();
        return view('profiles.student.sthome', compact('st', 'st_prf','das'));
    }else{
        $errormsg = "Sorry but it seems there has been a slight mix up. Please sign in again !";
        return view('register.students.wc.fail',compact('errormsg'));
    }
})->name('sthome')->middleware('auth:student');

Route::get('/student/da/{DAid}/info','Profile\DA\StudentApplyDAController@info')->name('student.da.info')->middleware('auth:student');
Route::post('/student/da/apply','Profile\DA\StudentApplyDAController@apply')->name('student.da.apply')->middleware('auth:student');


//--------------------------------------------------------------------
// Student-Team Profile Routes...
//--------------------------------------------------------------------

Route::get('/team/home','Team\StudentTeamController@index')->name('student.team')->middleware('auth:student');                                      // Internal Team Route
Route::get('/team/{tid}/profile','Profile\TeamprofileController@index')->middleware('auth:student');                                                        //External
Route::get('/teach/team/{tid}/profile','Profile\TeamprofileController@teachindex')->middleware('auth:teacher');                                                        //External
Route::get('/empl/team/{tid}/profile','Profile\TeamprofileController@emplindex')->middleware('auth:employee');                                                        //External

Route::view('profile/team/create', 'profiles.team.create')->middleware('auth:student');
Route::post('team/create','Profile\TeamProfileController@create')->name('team.create')->middleware('auth:student');
Route::get('team/add/member','Team\StudentTeamController@teamadd')->name('team.add.member')->middleware('auth:student');
Route::get('team/add/teacher','Profile\TeacherProfileController@teamaddtch')->name('team.add.tch')->middleware('auth:student');
Route::post('team/rmv/','Team\StudentTeamController@rmv')->name('team.rmv')->middleware('auth:student');
Route::post('team/add/idea','Team\TeamIdeaController@store')->name('team.add.idea')->middleware('auth:student');



//--------------------------------------------------------------------
// Company Routes...
//--------------------------------------------------------------------

Route::get('/chome','Profile\CompanyProfileController@index')->name('company.home')->middleware('company');
Route::get('/cedit', 'Profile\CompanyProfileController@cedit')->name('company.edit')->middleware('company');
Route::post('/company/profile/update/file','Profile\CompanyProfileController@udfile')->name('company.update.file')->middleware('company');
Route::post('/company/profile/update/info','Profile\CompanyProfileController@udinfo')->name('company.update.info')->middleware('company');
Route::get('/company/empm','Profile\CompanyProfileController@empm')->name('company.empm')->middleware('company');

Route::post('/company/emp/edit','Profile\CompanyProfileController@edit')->name('company.emp.edit')->middleware('company');
Route::post('/company/emp/rmv','Profile\CompanyProfileController@remove')->name('company.emp.rmv')->middleware('company');
Route::get('/company/emp/add','Profile\CompanyProfileController@add')->name('company.emp.add')->middleware('company');
Route::post('/company/add/emp','Profile\CompanyProfileController@addemployee')->name('company.add.employee')->middleware('company');
Route::post('/company/delete','Profile\CompanyProfileController@delete')->name('company.delete')->middleware('company');

//--------------------------------------------------------------------
// Company DA Routes...
//--------------------------------------------------------------------

Route::get('/company/da/dashboard','Profile\DA\CompanyDAController@index')->name('company.da.dashboard')->middleware('company');
Route::get('/company/da/new','Profile\DA\CompanyDAController@newda')->name('company.da.new')->middleware('company');
Route::post('/company/da/add','Profile\DA\CompanyDAController@adda')->name('company.da.add')->middleware('company');
Route::post('/company/da/status/edit','Profile\DA\CompanyDAController@stedit')->name('company.da.status.edit')->middleware('company');
Route::post('/company/da/status/update','Profile\DA\CompanyDAController@stupdate')->name('company.da.status.update')->middleware('company');
Route::post('/company/da/settings','Profile\DA\CompanyDAController@settings')->name('company.da.settings')->middleware('company');
Route::post('/company/da/settings/update','Profile\DA\CompanyDAController@settingsupdate')->name('company.da.settings.update')->middleware('company');
Route::post('/company/da/rmv','Profile\DA\CompanyDAController@rmv')->name('company.da.rmv')->middleware('company');
Route::post('/company/da/applist','Profile\DA\CompanyDAController@applist')->name('company.da.applist')->middleware('company');
Route::post('/company/da/applist/add','Profile\DA\CompanyDAController@addteamda')->name('company.da.add.team')->middleware('company');
Route::post('/company/da/applist/rmv','Profile\DA\CompanyDAController@rmvteam')->name('company.da.rmv.team')->middleware('company');
Route::view('/dam','profiles.company.chome');



//--------------------------------------------------------------------
// Profile Routes...
//--------------------------------------------------------------------

Route::get('/student/teacher/{tchid}/profile', 'Profile\ProfileProfileController@stteacher')->name('student.teacher.profile')->middleware('auth:student');
Route::get('/student/school/{schid}/profile', 'Profile\ProfileProfileController@stschool')->name('student.school.profile')->middleware('auth:student');
Route::get('/student/employee/{empid}/profile', 'Profile\ProfileProfileController@stemployee')->name('student.employee.profile')->middleware('auth:student');
Route::get('/student/company/{compid}/profile', 'Profile\ProfileProfileController@stcompany')->name('student.company.profile')->middleware('auth:student');
Route::get('/student/student/{stid}/profile', 'Profile\ProfileProfileController@ststud')->name('student.student.profile')->middleware('auth:student');
Route::get('/student/team/{tid}/profile', 'Profile\ProfileProfileController@stteam')->name('student.team.profile')->middleware('auth:student');

Route::get('/employee/employee/{empid}/profile', 'Profile\ProfileProfileController@empempl')->name('employee.employee.profile')->middleware('auth:employee');
Route::get('/employee/company/{compid}/profile', 'Profile\ProfileProfileController@empcomp')->name('employee.company.profile')->middleware('auth:employee');
Route::get('/employee/teacher/{tchid}/profile', 'Profile\ProfileProfileController@empteach')->name('employee.teacher.profile')->middleware('auth:employee');
Route::get('/employee/school/{schid}/profile', 'Profile\ProfileProfileController@empschool')->name('employee.school.profile')->middleware('auth:employee');
Route::get('/employee/student/{stid}/profile', 'Profile\ProfileProfileController@empstud')->name('employee.student.profile')->middleware('auth:employee');
Route::get('/employee/team/{tid}/profile', 'Profile\ProfileProfileController@empteam')->name('employee.team.profile')->middleware('auth:employee');

Route::get('/teacher/teacher/{teachID}/profile', 'Profile\ProfileProfileController@tchteach')->name('teacher.teacher.profile')->middleware('auth:teacher');
Route::get('/teacher/school/{schoolID}/profile', 'Profile\ProfileProfileController@tchschool')->name('teacher.school.profile')->middleware('auth:teacher');
Route::get('/teacher/employee/{empID}/profile', 'Profile\ProfileProfileController@tchemp')->name('teacher.employee.profile')->middleware('auth:teacher');
Route::get('/teacher/company/{compID}/profile', 'Profile\ProfileProfileController@tchcomp')->name('teacher.company.profile')->middleware('auth:teacher');
Route::get('/teacher/student/{stid}/profile', 'Profile\ProfileProfileController@tchstud')->name('teacher.student.profile')->middleware('auth:teacher');
Route::get('/teacher/team/{tid}/profile', 'Profile\ProfileProfileController@tchteam')->name('teacher.tam.profile')->middleware('auth:teacher');


Route::post('company/create/da','DA\CompanyDAController@add')->name('company.da.create')->middleware('company');
Route::view('register/other/school','register.others.school')->name('register.other.school')->middleware('unauth');
Route::view('register/other/company/further','register.others.company')->name('register.other.company')->middleware('unauth');


//Resend Conformation mail

Route::get('/student/resend/activation','Student\StudentMailController@remail')->name('student.resend.activate');
Route::get('/teacher/resend/activation','Teacher\TeacherMailController@remail')->name('student.resend.activate');
Route::get('/employee/resend/activation','Employee\EmployeeMailController@remail')->name('student.resend.activate');

//Company
Route::post('companies','Register\CompanyRegisterController@register')->name('comp.register');

//Other
Route::view('register/other/other','register.others.others')->name('register.other.other')->middleware('unauth');

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->middleware('auth:admin');
