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
    | Form Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in forms to tell the user what
    | to do or what to upload/enter
    |
    */
    'unkownERORR' => 'unbekannter Fehler',
    'companyDAnewdaselect' => 'Wähle einen Mitarbeiter, der für die Diplomarbeit verantwortlich ist',
    'company_DA_newda_select_tsize_choose' => 'Teamgröße auswählen',
    'stinfo.optfield_def' =>' Zusätzliche Informationen( Warum willst du/wollt ihr diese DA?)',

    'company_DA_newda_select_tsize_st1' => '1 SchülerIn',
    'company_DA_newda_select_tsize_st2' => '2 SchülerInnen',
    'company_DA_newda_select_tsize_st3' => '3 SchülerInnen',
    'company_DA_newda_select_tsize_st4' => '4 SchülerInnen (nicht empfohlen)',
    'company_DA_newda_select_tsize_st5' => '5 SchülerInnen (nicht empfohlen)',
    'company_DA_newda_select_priv_choose' => 'Persönliche Einstellungen',
    'company_DA_newda_select_priv1' => 'öffentlich',
    'company_DA_newda_select_priv2' => 'nur für SchülerInnen sichtbar',
    'company_DA_newda_select_priv3' => 'Nur für Diplomarbeit, für andere nicht sichtbar',
    'company_DA_newda_select_priv4' => 'unsichtbar',
    'companyDA_stedit_selectph' => 'Phase auswählen',
    'companyDAsettingselectpriv' => 'Privatsphären Einstellung',
    'companyDAsettingpriv1' => 'öffentlich',
    'companyDAsettingpriv2' => 'nur für SchülerInnen sichtbar',
    'companyDAsettingpriv3' => 'Nur für Diplomarbeit, für andere nicht sichtbar',
    'companyDAsettingpriv4' => 'unsichtbar',

    'companyDAsettingselecttsize' => 'Teamgröße auswählen',
    'companyDAsettingtsize1' => '1 SchülerIn',
    'companyDAsettingtsize2' => '2 SchülerInnen',
    'companyDAsettingtsize3' => '3 SchülerInnen',
    'companyDAsettingtsize4' => '4 SchülerInnen (nicht empfohlen)',
    'companyDAsettingtsize5' => '5 SchülerInnen (nicht empfohlen)',


    'companyDAsettingselectemp' => 'Wähle einen Mitarbeiter, der für die Diplomarbeit verantwortlich ist',

    'companyDAaddfail' => 'Mehr als 5 Teammitglieder sind nicht möglich',
    'companyDAaddsuccess' => 'Diplomarbeit erfolgreich erstellt',
    'teacherHomeindexfail' => 'Leider sind Sie noch keiner Schule zugewiesen',

    'companyDAaddasuccess' => 'Diplomarbeit erfolgreich erstellt',
    'companyDAaddafail' => 'Stellen Sie sicher das alle Felder ausgefüllt sind',
    'companyDA_steditcompfail' => 'Du hast das Ende von DiploCover erreicht (Fehler)',
    'companyDAsteditvalfail' => 'Stelle Sie sicher das alle Felder korrekt ausgefüllt sind',
    'companyDAstupdatesuccess' => 'Status erfolreich aktualisiert',
    'companyDAstupdatefail' => 'Sie verfügen nicht über die nötigen Rechte für diesen Befehl',
    'companyDAstupdatevalfail' => 'Stelle Sie sicher das alle Felder korrekt ausgefüllt sind',


    'company_empm_addempl_title'=>'Mitarbeiter hinzufügen',                                                              // /views/profiles/company/empm.blade page title
    'company_empm_addempl_form_firstname'=>'Vorname:',
    'company_empm_addempl_form_placeholder_firstname'=>'Vorname des Mitarbeiters',
    'company_empm_addempl_form_lastname'=>'Nachname:',                                                                      //form field labels + placeholders
    'company_empm_addempl_form_placeholder_lastname'=>'Nachname des Mitarbeiters',
    'company_empm_addempl_form_email'=>'Email:',
    'company_empm_addempl_form_placeholder_email'=>'Emailadresse',
    'company_empm_addempl_form_submit'=>'erstellen',                                                                       // views/register/other/company.blade form submit


    'company_da_changestatus_title'=>'Status aktualisieren',                                                                 // /views/profiles/company/status_edit.blade page title
    'company_da_changestatus_current'=>'Die Diplomarbeit ist derzeit in',                                                           //form additional information
    'company_da_changestatus_form_intro'=>'*Für jeden Status der Diplomarbeit gibt es verschiedene Funktionen',   //form additional information
    'company_da_changestatus_form_phase'=>'Status:',
    'company_da_changestatus_form_submit'=>'Status aktualisieren',                                                              // views/register/other/company.blade form submit

    'company_da_edit_title'=>'Diplomarbeit editieren',                                                                                 // /views/profiles/company/da_edit.blade page title
    'company_da_edit_form_daname'=>'Titel*',
    'company_da_edit_form_dadesc'=>'Kurze Beschreibung*',
    'company_da_edit_form_prog'=>'Fortschritt[%]',
    'company_da_edit_form_tsize'=>'Teamgröße*',                                                                             //form field labels + placeholders
    'company_da_edit_form_empl'=>'Betreuer auswählen*',
    'company_da_edit_form_emplz'=>'Co-Betreuer auswählen:',
    'company_da_edit_form_optfield_no'=>'Kein ZUsätzliches Textfeld',
    'company_da_edit_form_optfield'=>'Zusätzliches Feld?:',
    'company_da_edit_form_optfield_yes'=>'Zusätzliches Textfeld einfügen:',
    'company_da_edit_form_optfieldtxt'=>'Feldtitel:',
    'company_da_edit_form_optfieldtxt_placeholder'=>'Was soll in das Feld geschrieben werden?(Als Titel in 2 bis 6 Wörter ausdrücken',
    'company_da_edit_form_priv'=>'Privatsphäreneinstellungen*',
    'company_da_edit_form_current'=>'Derzeit',                                                                            //form field additional txt
    'company_da_edit_form_noempl'=>'Derzeit ist kein Mitarbeiter zugeordnet',                                                     //form field addtion txt
    'company_da_edit_form_noempl'=>'Derzeit ist kein Mitarbeiter zugeordnet',                                                     //form field addtion txt
    'company_da_edit_form_noemplz'=>'Derzeit ist dieser DA kein nebenverantwortlicher Mitarbeiter zugewiesen',                                                     //form field addtion txt
    'company_da_edit_form_emplz_placeholder'=>'Stellvetretender Betreuer:',                                                     //form field addtion txt
    'company_da_edit_form_current_nopriv'=>'Derzeit wurden noch keine Privatsphäre-Einstellungen gesetzt!',                                                     //form field addtion txt
    'company_da_edit_form_submit'=>'Aktualisieren der Diplomarbeit',                                                                         // views/register/other/company.blade form submit

    'company_create_tile'=>'Firma erstellen',                                                                            // /views/create/company/create.blade page title
    'company_create_form_cname'=>'Firmenname:',
    'company_create_form_placeholder_cname'=>'Weihnachtsmann & CoKG',
    'company_create_form_cmail'=>'Email:',                                                                                  //form field labels + placeholders
    'company_create_form_placeholder_cmail'=>'Emailadresse',
    'company_create_form_submit'=>'erstellen',                                                                     // views/register/other/company.blade form submit

    'company_further_title'=>'Weitere Informationen',                                                                 // /views/create/company/further.blade page title
    'company_further_form_cname'=>'Firmenname',
    'company_further_form_placeholder_cname'=>'Weihnachtsmann&CoKG',
    'company_further_form_cweb'=>'Internetadresse:',
    'company_further_form_placeholder_cweb'=>'https://.....',
    'company_further_form_cmail'=>'Kontakt Email:',
    'company_further_form_placeholder_cmail'=>'info@mail.at',
    'company_further_form_coname'=>'Kontakt Person:',                                                                       //form field labels + placeholders
    'company_further_form_placeholder_coname'=>'Personenname',
    'company_further_form_tel'=>'Telefonnummer:',
    'company_further_form_placeholder_tel'=>'+43 ...',
    'company_further_form_logo'=>'Firmenlogo:',
    'company_further_form_add'=>'Weitere Informationen:',
    'company_further_form_placeholder_add'=>'Questions? etc?',
    'company_further_form_codesc'=>'Beschreibung:',
    'company_further_form_placeholder_codesc'=>'Wir sind...',
    'company_further_form_submit'=>'Senden',                                                                              // views/register/other/company.blade form submit
    //todo:
    // create/emploeyee ,/grades, /schools, /students, /teacher (not do becaus waste
    // /./da
    //

    /*'da_company_add_title'=>'Create new DA',                                                                          // /views/register/         page title
    'da_company_add_form_daname'=>'Diplomarbeitstitel*:',
    'da_company_add_form_placeholder_daname'=>'Development of ...',
    'da_company_add_form_dadesc'=>'DA-Description:',
    'da_company_add_form_placeholder_dadesc'=>'...',                                                                        //form field labels + placeholders
    'da_company_add_form_tsize'=>'Teamgröße:',
    'da_company_add_form_priv'=>'Privacy-settings::',
    'da_company_add_form_priv_1'=>'Only Employees visible',
    'da_company_add_form_priv_2'=>'For students without DA visible',
    'da_company_add_form_priv_3'=>'Only Employees',*/                                                                   // views/register/other/company.blade form submit

    'teacher_edit_files_prpic_label'=>'Aktuelles Profilbild:',
    'teacher edit_info_firstname_label'=>'Vorname*:',
    'teacher_edit_info_lastname_label'=>'Nachname*:',
    'teacher_edit_info_email_label'=>'Email*:',
    'teacher_edit_info_abme_label'=>'Über mich (Was unterrichte ich? Was sind meine Hobbies? etc.) :',
    'teacher_edit_info_title_label'=>'Titel:',
    'teacher_edit_info_phonenumber_label'=>'Telefonnummer:',
    'teacher_edit_info_intr_label'=>'Interressen:',

    'teacher_edit_pswd_oldpswd_label'=>'Aktuelles Passwort*:',
    'teacher_edit_pswd_newpswd_label'=>'Neues Passwort*:',
    'teacher_edit_pswd_rp_newpswd_label'=>'Neues Passwort wiederholen*:',

    'register_employee_further_title'=>'Weitere Informationen angeben',                                                 // /views/register/employee/further.blade page title
    'register_employee_further_form_firstname'=>'Vorname*:',
    'register_employee_further_form_placeholder_firstname'=>'Vorname',
    'register_employee_further_form_lastname'=>'Nachname*:',
    'register_employee_further_form_placeholder_lastname'=>'Nachname',
    'register_employee_further_form_title'=>'Titel:',
    'register_employee_further_form_placeholder_title'=>'Ing.',
    'register_employee_further_form_tel'=>'Telefonnummer:',                                                                   //form field labels + placeholders
    'register_employee_further_form_placeholder_tel'=>'+43 666 666',
    'register_employee_further_form_job'=>'Job-Titel*:',
    'register_employee_further_form_placeholder_job'=>'...',
    'register_employee_further_form_jobdesc'=>'Job-Beschreibung*:',
    'register_employee_further_form_placeholder_jobdesc'=>'Erzähle',
    'register_employee_further_form_prpic'=>'Profilbild:',
    'register_employee_further_form_pswd'=>'Passwort*:',
    'register_employee_further_form_spswd'=>'Zeige Passwort:',
    'register_employee_further_form_submit'=>'Weiter',                                                                    //views/register/employee/further.blade form submit

    'register_other_company_title'=>'Regristrieren',                                                                         // /views/register/other/company.blade page title
    'register_other_company_form_cname'=>'Firmenname: ',
    'register_other_company_form_placeholder_cname'=>'Weihnachtsmann&CoKG',
    'register_other_company_form_cweb'=>'Internetadresse:',
    'register_other_company_form_placeholder_cweb'=>'https://',
    'register_other_company_form_comail'=>'Kontakt Email:',                                                                 //form field labels + placeholders
    'register_other_company_form_placeholder_comail'=>'info@mail.com',
    'register_other_company_form_coname'=>'Kontaktperson:',
    'register_other_company_form_placeholder_coname'=>'Mustermann',
    'register_other_company_form_add'=>'Zusätzliche Infos:',
    'register_other_company_form_placeholder_add'=>'Fragen?',
    'register_other_company_form_submit'=>'Senden',                                                                       // views/register/other/company.blade form submit

    'register_other_emplwoc_title'=>'Regristrieren',                                                                         // /views/register/other/emplwoc.blade page title
    'register_other_emplwoc_form_empname'=>'Mitarbeiter Name: ',
    'register_other_emplwoc_form_placeholder_empname'=>'Dein Name',
    'register_other_emplwoc_form_cweb'=>'Internetadresse:',
    'register_other_emplwoc_form_placeholder_cweb'=>'https://',
    'register_other_emplwoc_form_empmail'=>'Kontakt Email:',                                                                //form field labels + placeholders
    'register_other_emplwoc_form_placeholder_empmail'=>'info@mail.com',
    'register_other_emplwoc_form_ccode'=>'Company Code(Only enter if you have one):',
    'register_other_emplwoc_form_placeholder_ccode'=>'i98w3uzhjroiw',
    'register_other_emplwoc_form_add'=>'Zusätzliche Infos:',
    'register_other_emplwoc_form_placeholder_add'=>'Fragen?',
    'register_other_emplwoc_form_submit'=>'Senden',                                                                       // /views/register/other/emplwoc.blade form submit

    'register_other_other_title'=>'Regristrieren',                                                                           // /views/register/other/other.blade page title
    'register_other_other_form_name'=>'Ganzer Name: ',
    'register_other_other_form_placeholder_name'=>'Max Musterfrau',
    'register_other_other_form_mail'=>'Konatkt Email:',
    'register_other_other_form_placeholder_mail'=>'info@mail.com',                                                          //form field labels + placeholders
    'register_other_other_form_add'=>'Zusätzliche Infos:',
    'register_other_other_form_placeholder_add'=>'Fragen?',
    'register_other_other_form_submit'=>'Senden',                                                                         // views/register/other/company.blade form submit

    'register_other_school_title'=>'Regristrieren',                                                                          // /views/register/other/school.blade page title
    'register_other_school_form_schname'=>'Schule: ',
    'register_other_school_form_placeholder_schname'=>'...',
    'register_other_school_form_schweb'=>'Schul-Website:',
    'register_other_school_form_placeholder_schweb'=>'https://www.school.at',
    'register_other_school_form_comail'=>'Kontakt Email:',                                                                  //form field labels + placeholders
    'register_other_school_form_placeholder_comail'=>'info@mail.com',
    'register_other_school_form_coname'=>'Kontaktperson:',
    'register_other_school_form_placeholder_coname'=>'Name',
    'register_other_school_form_add'=>'Zusätzliche Infos:',
    'register_other_school_form_placeholder_add'=>'Wie viele SchülerInnen',
    'register_other_school_form_submit'=>'Senden',                                                                        // form submit


    'errormsg'=>'Error',


    'register_teacher_further_title'=>'Zusätzliche Infos',                                                     // /views/register/teacher/further.blade page title
    'register_teacher_further_form_firstname'=>'Vorname*:',                                                                 // /views/register/teacher/further.blade form field firstname label
    'register_teacher_further_form_placeholder_firstname'=>'Vorname',                                                         // /views/register/teacher/further.blade form field placeholder firstname label
    'register_teacher_further_form_lastname'=>'Nachname*:',                                                                  // /views/register/teacher/further.blade form field lastname label
    'register_teacher_further_form_placeholder_lastname'=>'Nachname',                                                     // /views/register/teacher/further.blade form field placeholder lastname label
    'register_teacher_further_form_title'=>'Titel:',                                                                        // /views/register/teacher/further.blade form field title label
    'register_teacher_further_form_placeholder_title'=>'Ing.',                                                             // /views/register/teacher/further.blade form field placeholder title label
    'register_teacher_further_form_tel'=>'Telefonnummer:',                                                                    // /views/register/teacher/further.blade form field phonenumber label
    'register_teacher_further_form_placeholder_tel'=>'+43 666 666',                                                         // /views/register/teacher/further.blade form field placeholder phonenumber label
    'register_teacher_further_form_abme'=>'Über mich*:',                                                                      // /views/register/teacher/further.blade form field about me label
    'register_teacher_further_form_placeholder_abme'=>'Ich bin ...',                                                           // /views/register/teacher/further.blade form field placeholder about me label
    'register_teacher_further_form_prpic'=>'Profilbild:',                                                               // /views/register/teacher/further.blade form field prpic label
    'register_teacher_further_form_intr'=>'Interessen*:',                                                                     // /views/register/teacher/further.blade form field intressts label
    'register_teacher_further_form_placeholder_intr'=>'Fächer oder Hobbys',                                                          // /views/register/teacher/further.blade form field placeholder intressts label
    'register_teacher_further_form_pswd'=>'Passwort*:',                                                                      // /views/register/teacher/further.blade form field password label
    'register_teacher_further_form_spswd'=>'Zeige Passwort:',                                                                // /views/register/teacher/further.blade form field show password label
    'register_teacher_further_form_submit'=>'Weiter',                                                                     // /views/register/teacher/further.blade form submit button txtl

    'register_students_wc_further_title'=>'Zusätzliche Infos',                                                 // views/register/students/wc/further page title
    'register_students_wc_further_form_firstname'=>'Vorname*:',                                                            // views/register/students/wc/further form field firstname label
    'register_students_wc_further_form_placeholder_firstname'=>'Marie',                                                     // views/register/students/wc/further form field firstname placeholder
    'register_students_wc_further_form_lastname'=>'Nachname*:',                                                              // views/register/students/wc/further form field lastname label
    'register_students_wc_further_form_placeholder_lastname'=>'Musterfrau',                                                 // views/register/students/wc/further form field lastname placehodler
    'register_students_wc_further_form_title'=>'Titel:',                                                                    // views/register/students/wc/further form field title label
    'register_students_wc_further_form_placeholder_title'=>'Ing.',                                                         // views/register/students/wc/further form field title placeholder
    'register_students_wc_further_form_tel'=>'Telefonnummer:',                                                                // views/register/students/wc/further form field phonenumber label
    'register_students_wc_further_form_placeholder_tel'=>'+43 666 666',                                                     // views/register/students/wc/further form field phonenumber placeholder
    'register_students_wc_further_form_abme'=>'Über mich*:',                                                                  // views/register/students/wc/further form field aboutme label
    'register_students_wc_further_form_placeholder_abme'=>'Ich bin ...',                                                       // views/register/students/wc/further form field aboutme placeholder
    'register_students_wc_further_form_prpic'=>'Profilbild',                                                           // views/register/students/wc/further form field profilepicture label
    'register_students_wc_further_form_doc_subtitle'=>'Dokumente',                                                          // views/register/students/wc/further form sub documents heading
    'register_students_wc_further_form_doc_cv'=>'Lebenslauf:',                                                             // views/register/students/wc/further form sub documents field cv label
    'register_students_wc_further_form_doc_zeug'=>'Letztes Zeugniss:',                                                      // views/register/students/wc/further form sub documents field zeug label
    'register_students_wc_further_form_doc_oth'=>'Andere Dokumente:',                                                       // views/register/students/wc/further form sub documents field oth label
    'register_students_wc_further_form_doc_oth2'=>' ',                                                                      // views/register/students/wc/further form sub documents field oth2 label
    'register_students_wc_further_form_intr'=>'Interessen*:',                                                                 // views/register/students/wc/further form field intressts label
    'register_students_wc_further_form_placeholder_intr'=>'Interessiert an Diplomarbeiten mit Fokus auf',                                                        // views/register/students/wc/further form field intressts placeholder
    'register_students_wc_further_form_pswd'=>'Passwort*:',                                                                  // views/register/students/wc/further form field password label
    'register_students_wc_further_form_spswd'=>'Zeige Passwort:',                                                            // views/register/students/wc/further form field show pswd checkbox label
    'register_students_wc_further_form_submit'=>'Weiter',                                                                 // views/register/students/wc/further form submit txt

    'register_students_wc_registerc_title'=>'Regristrieren',                                                                 // views/register/students/wc/register+c.blade  page title
    'register_students_wc_registerc_form_sid'=>'Registrierungs-ID*:',                                                               // views/register/students/wc/register+c.blade form field sid label
    'register_students_wc_registerc_form_placeholder_sid'=>'3248796237874628734634',                                        // views/register/students/wc/register+c.blade form field sid placeholder
    'register_students_wc_registerc_form_nost'=>'Not a student?  Regristrieren als: ',                                       // views/register/students/wc/register+c.blade form field no student other s heading
    'register_students_wc_registerc_othlogin_school'=>'Schule',                                                             // views/register/students/wc/register+c.blade otherlogins School txt
    'register_students_wc_registerc_othlogin_company'=>'Firma',                                                           // views/register/students/wc/register+c.blade other logins company txt
    'register_students_wc_registerc_othlogin_teachwc'=>'Lehrer mit Schulcode',                                           // views/register/students/wc/register+c.blade other logins Teacher with code txt
    'register_students_wc_registerc_othlogin_teachwoc'=>'Lehrer ohne Schulcode',                                       // views/register/students/wc/register+c.blade other logins Teacher without code txt
    'register_students_wc_registerc_othlogin_empwc'=>'Mitarbeiter mit Firmencode',                                            // views/register/students/wc/register+c.blade other logins employee with code txt
    'register_students_wc_registerc_othlogin_empwoc'=>'Mitarbeiter ohne Firmencode',                                        // views/register/students/wc/register+c.blade other logins employee without code txt
    'register_students_wc_registerc_othlogin_none1'=>'Keines der obigen? Dann nutze dieses: ',                      // views/register/students/wc/register+c.blade other none infotxt
    'register_students_wc_registerc_othlogin_none2'=>'Andere',                                                               // views/register/students/wc/register+c.blade other logins other txt
    'register_students_wc_registerc_form_scode'=>'Regristrierungscode*:',                                                  // views/register/students/wc/register+c.blade form field scode label
    'register_students_wc_registerc_form_placeholder_scode'=>'90384092',                                                    // views/register/students/wc/register+c.blade form field scode placeholder
    'register_students_wc_registerc_form_email'=>'Email*:',                                                                  // views/register/students/wc/register+c.blade form field email label
    'register_students_wc_registerc_form_placeholder_email'=>'info@mail.at',                                                // views/register/students/wc/register+c.blade form field email placeholder
    'register_students_wc_registerc_form_submit'=>'Regristrieren',                                                           // views/register/students/wc/register+c.blade form submit txt

    'register_students_wc_success_title'=>'Regristrieren',                                                                               // views/register/students/wc/success.blade create succes title
    'register_students_wc_success_msg_success'=>'erfolreich regristriert! Schaue in deinen Emails nach den Identifikationslink',   // views/register/students/wc/success.blade create succes msg

    'companyda_addteamda_fail'=>'Fehler, Team nicht akzeptiert',
    'companyda_addteamda_success'=>'Erfolgreich Team zur Diplomarbeit hinzugefügt',
    'companyda_addteamda_used_fail'=>'Dieses Team hat schon eine Diplomarbeit',
    'companyda_rmvteamda_success'=>'Team erfolgreich von Diplomarbeit entfernt',];


?>