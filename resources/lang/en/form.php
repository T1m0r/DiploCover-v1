<?php
/**
 * Created by PhpStorm.
 * User: Jakob
 * Date: 28.11.2018
 * Time: 11:30
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */
    'unkownERORR' => 'Unknown error :S',
    'companyDAnewdaselect' => 'choose a Employee responsible for the DA',
    'company_DA_newda_select_tsize_choose' => 'Choose Teamsize',

    'company_DA_newda_select_tsize_st1' => '1 Student',
    'company_DA_newda_select_tsize_st2' => '2 Students',
    'company_DA_newda_select_tsize_st3' => '3 Students',
    'company_DA_newda_select_tsize_st4' => '4 Students (not recommendet)',
    'company_DA_newda_select_tsize_st5' => '5 Students (not recommendet)',
    'company_DA_newda_select_priv_choose' => 'Choose Privacy settings',
    'company_DA_newda_select_priv1' => 'Public',
    'company_DA_newda_select_priv2' => 'Only Visible for students',
    'company_DA_newda_select_priv3' => 'Only that DA exists and no details visible',
    'company_DA_newda_select_priv4' => 'Invisible',
    'companyDA_stedit_selectph' => 'Select Phase',
    'companyDAsettingselectpriv' => 'Choose Privacys settings',
    'companyDAsettingpriv1' => 'Public',
    'companyDAsettingpriv2' => 'Only Visible for students',
    'companyDAsettingpriv3' => 'Only that DA exists and no details visible',
    'companyDAsettingpriv4' => 'Invisble',

    'companyDAsettingselecttsize' => 'Choose Teamsize',
    'companyDAsettingtsize1' => '1 Student',
    'companyDAsettingtsize2' => '2 Students',
    'companyDAsettingtsize3' => '3 Students',
    'companyDAsettingtsize4' => '4 Students (not recommended)',
    'companyDAsettingtsize5' => '5 Students (not recommended',

    'companyDAsettingselectemp' => 'choose a Employee responsible for the DA',

    'companyDAaddfail' => 'Diplomarbeits Fehler nicht mehr als 5 möglich',
    'companyDAaddsuccess' => 'Diplomarbeit erfolgreich erstellen',
    'teacherHomeindexfail' => 'Sry it seems you don\'t have a school yet',

    'companyDAaddasuccess' => 'You have successfully created a new DA',
    'companyDAaddafail' => 'Seems like you forgot to enter something',
    'companyDA_steditcompfail' => 'Either you were very bad or our server malfunctioned',
    'companyDAsteditvalfail' => 'Seems like you forgot to enter something :R',
    'companyDAstupdatesuccess' => 'You have successfully updated the Phase of the DA',
    'companyDAstupdatefail' => 'You are not supposed to do that :S',
    'companyDAstupdatevalfail' => 'Seems like you forgot to enter something :R',

    'companyda_addteamda_fail'=>'Fail could not accept team',
    'companyda_addteamda_success'=>'Succesfully added team to DA',
    'companyda_addteamda_used_fail'=>'Fail this team has already an DA, if you feel an error has occured please contact our support',
    'companyda_rmvteamda_success'=>'You have succesfully removed the team from your DA',



    'company_empm_addempl_title'=>'Create a new Employee',                                                              // /views/profiles/company/empm.blade page title
    'company_empm_addempl_form_firstname'=>'Firstname:',
    'company_empm_addempl_form_placeholder_firstname'=>'Firstname of the employee',
    'company_empm_addempl_form_lastname'=>'Lastname:',                                                                      //form field labels + placeholders
    'company_empm_addempl_form_placeholder_lastname'=>'Lastname of the Employee',
    'company_empm_addempl_form_email'=>'Email:',
    'company_empm_addempl_form_placeholder_email'=>'email@mail.com',
    'company_empm_addempl_form_submit'=>'Create',                                                                       // views/register/other/company.blade form submit


    'company_da_changestatus_title'=>'Update DA PHase',                                                                 // /views/profiles/company/status_edit.blade page title
    'company_da_changestatus_current'=>'Currently this DA is in',                                                           //form additional information
    'company_da_changestatus_form_intro'=>'*For every Phase there are diffrent options you cann use to controlle the DA',   //form additional information
    'company_da_changestatus_form_phase'=>'Da phase:',
    'company_da_changestatus_form_submit'=>'Update Phase',                                                              // views/register/other/company.blade form submit

    'company_da_edit_title'=>'Edit DA',                                                                                 // /views/profiles/company/da_edit.blade page title
    'company_da_edit_form_daname'=>'DA title',
    'company_da_edit_form_dadesc'=>'Short DA description:',
    'company_da_edit_form_prog'=>'DA Progress[%]:',
    'company_da_edit_form_tsize'=>'Team size:',                                                                             //form field labels + placeholders
    'company_da_edit_form_empl'=>'Select Employee:',
    'company_da_edit_form_priv'=>'Select Privacy:',
    'company_da_edit_form_current'=>'Currently',                                                                            //form field additional txt
    'company_da_edit_form_noempl'=>'No employee has been assigned yet',                                                     //form field addtion txt
    'company_da_edit_form_submit'=>'Update DA',                                                                         // views/register/other/company.blade form submit

    'company_create_tile'=>'Create Company',                                                                            // /views/create/company/create.blade page title
    'company_create_form_cname'=>'Company-Name:',
    'company_create_form_placeholder_cname'=>'Weihnachtsmann & CoKG',
    'company_create_form_cmail'=>'Email:',                                                                                  //form field labels + placeholders
    'company_create_form_placeholder_cmail'=>'info@mail.at',
    'company_create_form_submit'=>'Create Company',                                                                     // views/register/other/company.blade form submit

    'company_further_title'=>'Add further information',                                                                 // /views/create/company/further.blade page title
    'company_further_form_cname'=>'Company-Name',
    'company_further_form_placeholder_cname'=>'Weihnachtsmann&CoKG',
    'company_further_form_cweb'=>'Company Website:',
    'company_further_form_placeholder_cweb'=>'https://.....',
    'company_further_form_cmail'=>'Contact Email:',
    'company_further_form_placeholder_cmail'=>'info@mail.at',
    'company_further_form_coname'=>'Contact Person:',                                                                       //form field labels + placeholders
    'company_further_form_placeholder_coname'=>'Personenname',
    'company_further_form_tel'=>'Phonenumber:',
    'company_further_form_placeholder_tel'=>'+43 ...',
    'company_further_form_logo'=>'Company Logo:',
    'company_further_form_add'=>'Additional information:',
    'company_further_form_placeholder_add'=>'Questions? etc?',
    'company_further_form_codesc'=>'Company Description:',
    'company_further_form_placeholder_codesc'=>'We are ...',
    'company_further_form_submit'=>'Send',                                                                              // views/register/other/company.blade form submit
    //todo:
    // create/emploeyee ,/grades, /schools, /students, /teacher (not do becaus waste
    // /./da
    //

    /*'da_company_add_title'=>'Create new DA',                                                                          // /views/register/         page title
    'da_company_add_form_daname'=>'Diplomarbeitstitel:',
    'da_company_add_form_placeholder_daname'=>'Development of ...',
    'da_company_add_form_dadesc'=>'DA-Description:',
    'da_company_add_form_placeholder_dadesc'=>'...',                                                                        //form field labels + placeholders
    'da_company_add_form_tsize'=>'Teamgröße:',
    'da_company_add_form_priv'=>'Privacy-settings::',
    'da_company_add_form_priv_1'=>'Only Employees visible',
    'da_company_add_form_priv_2'=>'For students without DA visible',
    'da_company_add_form_priv_3'=>'Only Employees',*/                                                                   // views/register/other/company.blade form submit

    'register_employee_further_title'=>'Weitere Informationen angeben',                                                 // /views/register/employee/further.blade page title
    'register_employee_further_form_firstname'=>'Firstname:',
    'register_employee_further_form_placeholedr_firstname'=>'Max',
    'register_employee_further_form_lastname'=>'Lastname:',
    'register_employee_further_form_placeholder_lastname'=>'Musterfrau',
    'register_employee_further_form_title'=>'Title:',
    'register_employee_further_form_placeholder_title'=>'Prof.',
    'register_employee_further_form_tel'=>'Phonenumber:',                                                                   //form field labels + placeholders
    'register_employee_further_form_placeholder_tel'=>'+43 666 666',
    'register_employee_further_form_job'=>'Job-title:',
    'register_employee_further_form_placeholder_job'=>'CTO',
    'register_employee_further_form_jobdesc'=>'Job-Description:',
    'register_employee_further_form_placeholder_jobdesc'=>'Entering Information into Form like this :)',
    'register_employee_further_form_prpic'=>'Profilepicture:',
    'register_employee_further_form_pswd'=>'Password:',
    'register_employee_further_form_spswd'=>'Show Password:',
    'register_employee_further_form_submit'=>'Next',                                                                    //views/register/employee/further.blade form submit

    'register_other_company_title'=>'Register',                                                                         // /views/register/other/company.blade page title
    'register_other_company_form_cname'=>'Company-Name: ',
    'register_other_company_form_placeholder_cname'=>'Weihnachtsmann&CoKG',
    'register_other_company_form_cweb'=>'Company-Website:',
    'register_other_company_form_placeholder_cweb'=>'https://',
    'register_other_company_form_comail'=>'Contact Email:',                                                                 //form field labels + placeholders
    'register_other_company_form_placeholder_comail'=>'info@mail.com',
    'register_other_company_form_coname'=>'Contact Person:',
    'register_other_company_form_placeholder_coname'=>'Mustermann',
    'register_other_company_form_add'=>'Additional:',
    'register_other_company_form_placeholder_add'=>'Questenions? Other?',
    'register_other_company_form_submit'=>'Send',                                                                       // views/register/other/company.blade form submit

    'register_other_emplwoc_title'=>'Register',                                                                         // /views/register/other/emplwoc.blade page title
    'register_other_emplwoc_form_empname'=>'Employee-Name: ',
    'register_other_emplwoc_form_placeholder_empname'=>'Your name',
    'register_other_emplwoc_form_cweb'=>'Company-Website:',
    'register_other_emplwoc_form_placeholder_cweb'=>'https://',
    'register_other_emplwoc_form_empmail'=>'Contact Email:',                                                                //form field labels + placeholders
    'register_other_emplwoc_form_placeholder_empmail'=>'info@mail.com',
    'register_other_emplwoc_form_ccode'=>'Company Code(Only enter if you have one):',
    'register_other_emplwoc_form_placeholder_ccode'=>'i98w3uzhjroiw',
    'register_other_emplwoc_form_add'=>'Additional:',
    'register_other_emplwoc_form_placeholder_add'=>'Questenions? Other?',
    'register_other_emplwoc_form_submit'=>'Send',                                                                       // /views/register/other/emplwoc.blade form submit

    'register_other_other_title'=>'Register',                                                                           // /views/register/other/other.blade page title
    'register_other_other_form_name'=>'Your full Name: ',
    'register_other_other_form_placeholder_name'=>'Max Musterfrau',
    'register_other_other_form_mail'=>'Contact Email:',
    'register_other_other_form_placeholder_mail'=>'info@mail.com',                                                          //form field labels + placeholders
    'register_other_other_form_add'=>'Additional Information:',
    'register_other_other_form_placeholder_add'=>'Questenions? Other?',
    'register_other_other_form_submit'=>'Send',                                                                         // views/register/other/company.blade form submit

    'register_other_school_title'=>'Register',                                                                          // /views/register/other/school.blade page title
    'register_other_school_form_schname'=>'School-Name: ',
    'register_other_school_form_placeholder_schname'=>'...',
    'register_other_school_form_schweb'=>'School-Website:',
    'register_other_school_form_placeholder_schweb'=>'https://www.school.at',
    'register_other_school_form_comail'=>'Contact Email:',                                                                  //form field labels + placeholders
    'register_other_school_form_placeholder_comail'=>'info@mail.com',
    'register_other_school_form_coname'=>'Contact perosn:',
    'register_other_school_form_placeholder_coname'=>'your name?',
    'register_other_school_form_add'=>'Additional information:',
    'register_other_school_form_placeholder_add'=>'How maney student would you enter? Other Questenions? Other?',
    'register_other_school_form_submit'=>'Send',                                                                        // form submit


    'errormsg'=>'Error',


    'register_teacher_further_title'=>'Supply further information',                                                     // /views/register/teacher/further.blade page title
    'register_teacher_further_form_firstname'=>'Firstname',                                                                 // /views/register/teacher/further.blade form field firstname label
    'register_teacher_further_form_placeholder_firstname'=>'Marie',                                                         // /views/register/teacher/further.blade form field placeholder firstname label
    'register_teacher_further_form_lastname'=>'Lastname:',                                                                  // /views/register/teacher/further.blade form field lastname label
    'register_teacher_further_form_placeholder_lastname'=>'Musterfrau',                                                     // /views/register/teacher/further.blade form field placeholder lastname label
    'register_teacher_further_form_title'=>'Title:',                                                                        // /views/register/teacher/further.blade form field title label
    'register_teacher_further_form_placeholder_title'=>'Prof.',                                                             // /views/register/teacher/further.blade form field placeholder title label
    'register_teacher_further_form_tel'=>'Phonenumber:',                                                                    // /views/register/teacher/further.blade form field phonenumber label
    'register_teacher_further_form_placeholder_tel'=>'+43 666 666',                                                         // /views/register/teacher/further.blade form field placeholder phonenumber label
    'register_teacher_further_form_abme'=>'About me:',                                                                      // /views/register/teacher/further.blade form field about me label
    'register_teacher_further_form_placeholder_abme'=>'I am ...',                                                           // /views/register/teacher/further.blade form field placeholder about me label
    'register_teacher_further_form_prpic'=>'Profilepicture:',                                                               // /views/register/teacher/further.blade form field prpic label
    'register_teacher_further_form_intr'=>'Intressts:',                                                                     // /views/register/teacher/further.blade form field intressts label
    'register_teacher_further_form_placeholder_intr'=>'Math, etc',                                                          // /views/register/teacher/further.blade form field placeholder intressts label
    'register_teacher_further_form_pswd'=>'Password:',                                                                      // /views/register/teacher/further.blade form field password label
    'register_teacher_further_form_spswd'=>'Show Password:',                                                                // /views/register/teacher/further.blade form field show password label
    'register_teacher_further_form_submit'=>'Next',                                                                     // /views/register/teacher/further.blade form submit button txtl

    'register_students_wc_further_title'=>'Supply further information',                                                 // views/register/students/wc/further page title
    'register_students_wc_further_form_firstname'=>'Firstname:',                                                            // views/register/students/wc/further form field firstname label
    'register_students_wc_further_form_placeholder_firstname'=>'Marie',                                                     // views/register/students/wc/further form field firstname placeholder
    'register_students_wc_further_form_lastname'=>'Lastname:',                                                              // views/register/students/wc/further form field lastname label
    'register_students_wc_further_form_placeholder_lastname'=>'Musterfrau',                                                 // views/register/students/wc/further form field lastname placehodler
    'register_students_wc_further_form_title'=>'Title:',                                                                    // views/register/students/wc/further form field title label
    'register_students_wc_further_form_placeholder_title'=>'Prof.',                                                         // views/register/students/wc/further form field title placeholder
    'register_students_wc_further_form_tel'=>'Phonenumber:',                                                                // views/register/students/wc/further form field phonenumber label
    'register_students_wc_further_form_placeholder_tel'=>'+43 666 666',                                                     // views/register/students/wc/further form field phonenumber placeholder
    'register_students_wc_further_form_abme'=>'About me:',                                                                  // views/register/students/wc/further form field aboutme label
    'register_students_wc_further_form_placeholder_abme'=>'I am ...',                                                       // views/register/students/wc/further form field aboutme placeholder
    'register_students_wc_further_form_prpic'=>'Profilepicture:',                                                           // views/register/students/wc/further form field profilepicture label
    'register_students_wc_further_form_doc_subtitle'=>'Documents',                                                          // views/register/students/wc/further form sub documents heading
    'register_students_wc_further_form_doc_cv'=>'Lebenslauf::',                                                             // views/register/students/wc/further form sub documents field cv label
    'register_students_wc_further_form_doc_zeug'=>'Letztes Zeugniss:',                                                      // views/register/students/wc/further form sub documents field zeug label
    'register_students_wc_further_form_doc_oth'=>'Andere Dokumente:',                                                       // views/register/students/wc/further form sub documents field oth label
    'register_students_wc_further_form_doc_oth2'=>' ',                                                                      // views/register/students/wc/further form sub documents field oth2 label
    'register_students_wc_further_form_intr'=>'Intressts:',                                                                 // views/register/students/wc/further form field intressts label
    'register_students_wc_further_form_placeholder_intr'=>'Math :}',                                                        // views/register/students/wc/further form field intressts placeholder
    'register_students_wc_further_form_pswd'=>'Password:',                                                                  // views/register/students/wc/further form field password label
    'register_students_wc_further_form_spswd'=>'Show Password:',                                                            // views/register/students/wc/further form field show pswd checkbox label
    'register_students_wc_further_form_submit'=>'Next',                                                                 // views/register/students/wc/further form submit txt

    'register_students_wc_registerc_title'=>'Register',                                                                 // views/register/students/wc/register+c.blade  page title
    'register_students_wc_registerc_form_sid'=>'Student ID:',                                                               // views/register/students/wc/register+c.blade form field sid label
    'register_students_wc_registerc_form_placeholder_sid'=>'3248796237874628734634',                                        // views/register/students/wc/register+c.blade form field sid placeholder
    'register_students_wc_registerc_form_nost'=>'Not a student?  Register here as: ',                                       // views/register/students/wc/register+c.blade form field no student other s heading
    'register_students_wc_registerc_othlogin_school'=>'School',                                                             // views/register/students/wc/register+c.blade otherlogins School txt
    'register_students_wc_registerc_othlogin_company'=>'Company',                                                           // views/register/students/wc/register+c.blade other logins company txt
    'register_students_wc_registerc_othlogin_teachwc'=>'Teacher with Schoolcode',                                           // views/register/students/wc/register+c.blade other logins Teacher with code txt
    'register_students_wc_registerc_othlogin_teachwoc'=>'Teacher without Schoolcode',                                       // views/register/students/wc/register+c.blade other logins Teacher without code txt
    'register_students_wc_registerc_othlogin_empwc'=>'Employe with Companycode',                                            // views/register/students/wc/register+c.blade other logins employee with code txt
    'register_students_wc_registerc_othlogin_empwoc'=>'Employe without Companycode',                                        // views/register/students/wc/register+c.blade other logins employee without code txt
    'register_students_wc_registerc_othlogin_none1'=>'You are none of the above? Then use this one: ',                      // views/register/students/wc/register+c.blade other none infotxt
    'register_students_wc_registerc_othlogin_none2'=>'Other',                                                               // views/register/students/wc/register+c.blade other logins other txt
    'register_students_wc_registerc_form_scode'=>'Student register Code:',                                                  // views/register/students/wc/register+c.blade form field scode label
    'register_students_wc_registerc_form_placeholder_scode'=>'90384092',                                                    // views/register/students/wc/register+c.blade form field scode placeholder
    'register_students_wc_registerc_form_email'=>'Email:',                                                                  // views/register/students/wc/register+c.blade form field email label
    'register_students_wc_registerc_form_placeholder_email'=>'info@mail.at',                                                // views/register/students/wc/register+c.blade form field email placeholder
    'register_students_wc_registerc_form_submit'=>'Register',                                                           // views/register/students/wc/register+c.blade form submit txt

    'register_students_wc_success_title'=>'Register',                                                                               // views/register/students/wc/success.blade create succes title
    'register_students_wc_success_msg_success'=>'You have succesfully register please check your emails for a verification link',   // views/register/students/wc/success.blade create succes msg
];


?>