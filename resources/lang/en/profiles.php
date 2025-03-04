<?php
/**
 * Created by PhpStorm.
 * User: Jakob
 * Date: 01.12.2018
 * Time: 11:45
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
    'lang1'=>'Deutsch',
    'lang2'=>'Englisch',

    'unkownERORR' => 'Unknown error :S',
    'teacher_lnt_home'=>'HOME',
    'teacher_lnt_school'=>'School',
    'teacher_lnt_edit'=>'Settings',
    'teacher_lnt_da_dashboard'=>'Manage DA',
    'teacher_lnt_grade_dashboard'=>'Manage Grade',



    'teacher_da_dashboard_panel_teams_heading'=>'Teams',
    'teacher_da_dashboard_teams_memberfail'=>'Error please contact support',
    'teacher_da_dashboard_teams_rmv_confirm'=>'//inblade due to error',
    'teacher_da_dashboard_team_tsize'=>'Teamgröße:',
    'teacher_da_dashboard_team_tsizestud'=>'Schüler',
    'teacher_da_dashboard_team_dacomp'=>'DA-Firma:',
    'teacher_da_dashboard_team_daempl'=>'Firmen-Kontaktperson:',
    'teacher_da_dashboard_team_noda'=>'Noch keine Diplomarbeit',
    'teacher_da_dashboard_teach_noda'=>'You are not part of a DA-Team yet',
    'teacher_da_dashboard_teach_noda_tjoin'=>'To join a team, one of the team mebers has to send you an invite code',

    'teacher_da_dashboard_panel_da_heading'=>'DA\'s',
    'teacher_da_dashboard_da_rmv_confirm'=>'//in blade',
    'teacher_da_dashboard_da_tsize'=>'Teamgröße:',
    'teacher_da_dashboard_da_tsizestud'=>'Schüler',
    'teacher_da_dashboard_da_dacomp'=>'DA-Firma:',
    'teacher_da_dashboard_da_daempl'=>'Firmen-Kontaktperson:',
    'teacher_da_dashboard_da_status'=>'DA-Status::',
    'teacher_da_dashboard_teach_da_noda'=>'Non of your teams has a DA yet',


    'teacher_tchome_panel_grades_heading'=>'Klassenübersicht',
    'teacher_tchome_grade_gname'=>'Klasse:',
    'teacher_tchome_grade_stcount'=>'Schülerzahl:',
    'teacher_tchome_grade_gteach'=>'Klassenvorstand:',
    'teacher_tchome_grade_team'=>'Team:',
    'teacher_tchome_grade_more'=>'More',
    'teacher_tchome_grade_nogrades'=>'Sry you have no greas yet',
    'teacher_tchome_panel_da_heading'=>'Diplomarbeitsübersicht:',
    'teacher_tchome_da_noda'=>'Sry you don\'t have any Da\'s yet',
    'teacher_tchome_da_dan'=>'Diplomarbeit:',
    'teacher_tchome_da_sta_notdefined'=>'Status: Not yet defined',
    'teacher_tchome_da_sta'=>'Status:',
    'teacher_tchome_da_noempl'=>'Firmen-Betreuer: Not yet defined',
    'teacher_tchome_da_empl'=>'Firmen-Betreuer:',
    'teacher_tchome_da_comp'=>'Firmea: ',
    'teacher_tchome_da_team'=>'Team: ',
    'teacher_tchome_da_more'=>'More',


    'teacher_grade_dashboard_panel_figures_heading'=>'Figures',
    'teacher_grade_dashboard_figures_nogradesfail'=>'Since you have not created any Class you can not watch the statstics',
    'teacher_grade_dashboard_figures_stsc'=>'Schüler mit Zugang:',
    'teacher_grade_dashboard_figures_stsnr'=>'Noch nicht registrierete Schüler:',
    'teacher_grade_dashboard_figures_stswda'=>'Schüler mit einer DA: ',
    'teacher_grade_dashboard_figures_stswoda'=>'Schüler ohne DA: ',
    'teacher_grade_dashboard_figures_stswt'=>'Schüler in einem Team: ',
    'teacher_grade_dashboard_figures_stswotbwda'=>'Schüler ohne Team aber mit DA: ',
    'teacher_grade_dashboard_figures_stswtbwoda'=>'Schüler in Team aber ohne DA: ',
    'teacher_grade_dashboard_figures_stswtada'=>'Schüler in einem Team und mit DA: ',

    'teacher_grade_dashboard_panel_grades_heading'=>'Grades',
    'teacher_grade_dashboard_grade_gname'=>'Klasse: ',
    'teacher_grade_dashboard_grade_rmv_confirm'=>'//TODO didn t work with localization so driectly in blade',
    'teacher_grade_dashboard_grade_stcount'=>'Schüleranzahl:',
    'teacher_grade_dashboard_da_stsc'=>'Schüler mit Zugang:',
    'teacher_grade_dashboard_da_stsnr'=>'Noch nicht registrierete Schüler:',
    'teacher_grade_dashboard_da_stswda'=>'Schüler mit einer DA: ',
    'teacher_grade_dashboard_da_stswoda'=>'Schüler ohne DA: ',
    'teacher_grade_dashboard_da_stswt'=>'Schüler in einem Team: ',
    'teacher_grade_dashboard_da_stswotbwda'=>'Schüler ohne Team aber mit DA: ',
    'teacher_grade_dashboard_da_stswtbwoda'=>'Schüler in Team aber ohne DA: ',
    'teacher_grade_dashboard_da_stswtada'=>'Schüler in einem Team und mit DA: ',
    'teacher_grade_dashboard_da_more'=>'More',


    'teacher_grade_edit_panel_title'=>'Update Grade',
    'teacher_grade_edit_gname'=>'Grade-Name:',
    'teacher_grade_edit_update'=>'Update',

    'teacher_grade_index_loged_msg'=>'As you can see some students have already registered',
    'teacher_grade_index_notloged_msg'=>'This will be a Dashboard-Site for this class where you can see whose in a groupe with whom an wohs got a DA. Please print the pdf and hand each student one code to register.',
    'teacher_grade_index_bnt_pdf'=>'View Login-Code PDF',
    'teacher_grade_index_table_name'=>'Name',
    'teacher_grade_index_table_team'=>'Team',
    'teacher_grade_index_table_da'=>'DA?',
    'teacher_grade_index_table_action'=>'Action',
    'teacher_grade_index_table_da_noda'=>'No DA',
    'teacher_grade_index_table_team_invalide'=>'The team of this student is invalide please contact our support',

    'teacher_newgrade_title'=>'Create new Grade',
    'teacher_newgrade_formlabel_gname'=>'Grade-Name:',
    'teacher_newgrade_formlabel_amount'=>'Amount of students:',
    'teacher_newgrade_form_submit'=>'Create',

    'teacher_grade_add_st_title'=>'Add student',
    'teacher_grade_add_st_formlabel_amount'=>'Amount of new students:',
    'teacher_grade_add_st_form_submit'=>'Add students',

    'school_schome_welcome'=>'Welcome',
    'school_lnt_home'=>'Home',
    'school_lnt_edit'=>'Settings',
    'school_lnt_da_dashboard'=>'Manage DAs',
    'school_lnt_manage_teacher'=>'Manage Teachers',

    'school_schome_panel_teachers_heading'=>'Leherübersicht',
    'school_schome_teacher_gname'=>'Klasse:',
    'school_schome_teacher_students'=>'Schüleranzahl:',
    'school_schome_teacher_teams_tname'=>'Team:',
    'school_schome_teacher_teams_da'=>'DA:',
    'school_schome_teacher_teams_da_noda'=>'DA: Team has no Da yet',
    'school_schome_teacher_teams_noteam'=>'This teacher has no DA-Team yet',
    'school_schome_teacher_grade_nograde'=>'This teacher has not created a grade yet',

    'school_da_dashboard_panel_figures_heading'=>'Figures',
    'school_da_dashboard_figures_nogradesfail'=>'Since this school has not registered any students you can\'t watch the statistics',
    'school_da_dashboard_figures_stsc'=>'Schüler mit Zugang:',
    'school_da_dashboard_figures_stsnr'=>'Noch nicht registrierete Schüler:',
    'school_da_dashboard_figures_stswda'=>'Schüler mit einer DA: ',
    'school_da_dashboard_figures_stswoda'=>'Schüler ohne DA: ',
    'school_da_dashboard_figures_stswt'=>'Schüler in einem Team: ',
    'school_da_dashboard_figures_stswotbwda'=>'Schüler ohne Team aber mit DA: ',
    'school_da_dashboard_figures_stswtbwoda'=>'Schüler in Team aber ohne DA: ',
    'school_da_dashboard_figures_stswtada'=>'Schüler in einem Team und mit DA: ',

    'school_da_dashboard_panel_grades_heading'=>'Grades',
    'school_da_dashboard_grade_gname'=>'Klasse: ',
    'school_da_dashboard_grade_rmv_confirm'=>'//TODO didn t work with localization so driectly in blade',
    'school_da_dashboard_grade_stcount'=>'Schüleranzahl:',
    'school_da_dashboard_da_stsc'=>'Schüler mit Zugang:',
    'school_da_dashboard_da_stsnr'=>'Noch nicht registrierete Schüler:',
    'school_da_dashboard_da_stswda'=>'Schüler mit einer DA: ',
    'school_da_dashboard_da_stswoda'=>'Schüler ohne DA: ',
    'school_da_dashboard_da_stswt'=>'Schüler in einem Team: ',
    'school_da_dashboard_da_stswotbwda'=>'Schüler ohne Team aber mit DA: ',
    'school_da_dashboard_da_stswtbwoda'=>'Schüler in Team aber ohne DA: ',
    'school_da_dashboard_da_stswtada'=>'Schüler in einem Team und mit DA: ',
    'school_da_dashboard_da_more'=>'More',
    'school_da_dashboard_panel_da_heading'=>'Diplomarbeiten',
    'school_da_dashboard_da_teach'=>'Betreuer: ',
    'school_da_dashboard_da_noda'=>'Sorry but no student has found a DA yet',


    'school_manage_teacher_panel_teacher_heading'=>'Lehrerübersicht',
    'school_manage_teacher_teacher_you'=>'(Das sind SIE)',
    'school_manage_teacher_teacher_grade_gname'=>'Klasse:',
    'school_manage_teacher_teacher_grade_stcount'=>'Schüleranzahl:',
    'school_manage_teacher_teacher_grade_nograde'=>'Dieser Lehrer hat noch keine Klasse erstellt',
    'school_manage_teacher_teacher_da_daname'=>'DA-Name',
    'school_manage_teacher_teacher_da_nodae'=>'Dieser Lehrer betreut noch keine DA',
    'school_manage_teacher_teacher_critical_error'=>'Error ERRROR Error; Initiating Operation Selfdestruction; Biobupi :(}',

    'school_add_teacher_title'=>'Create Teacher',
    'school_add_teacher_formlabel_firstname'=>'Firstname',
    'school_add_teacher_formlabel_lastname'=>'Lastname',
    'school_add_teacher_formlabel_email'=>'Email',
    'school_add_teacher_form_submit'=>'Create',

    'school_edit_lnt_dashboard'=>'Dashboard',
    'school_edit_dashboard_title'=>'Dashboard',
    'school_edit_dashboard_schname'=>'School-name',
    'school_edit_dashboard_contmail'=>'Contact-name',
    'school_edit_dashboard_prpic'=>'Profile Picture:',
    'school_edit_dashboard_noprpic'=>'You have no custom pb.',
    'school_edit_dashboard_update'=>'Update',
    'school_edit_dashboard_delete'=>'DElete Account',

    'employee_lnt_homet'=>'Home',
    'employee_lnt_edit'=>'Settings',
    'employee_lnt_da_dashboard'=>'Manage DAs',
    'employee_lnt_company'=>'Company',

    'employee_emphome_panel_da_heading'=>'Diplomarbeitsübersicht',
    'employee_emphome_info'=>'Currently you don\'t have to many possibilitys to control a DA as an Employee but we are currently working on some new functions',
    'employee_emphome_da_noda'=>'You haven\'t been assigned to a DA!',
    'employee_emphome_da_daname'=>'Diplomarbeit:',
    'employee_emphome_da_dastatus'=>'Status:',
    'employee_emphome_da_daprog'=>'Fortschritt:',
    'employee_emphome_da_empl_noempl'=>'This da has no dedicated Employee',
    'employee_emphome_da_empl'=>'Firmenbetreuer:',
    'employee_emphome_da_ph3_nostud'=>'This DA has no students working on it!! *Please change the state of the DA to get new students*',
    'employee_emphome_da_ph3_teacher'=>'Lehere-Betreuer:',
    'employee_emphome_da_ph3_teacher_noteacher'=>'This DA has no dedicated Teacher',
    'employee_emphome_da_more'=>'Show More',
    'employee_emphome_da_chstatus'=>'Change Status',
    'employee_emphome_da_rmv_company'=>'See blade',

    'employee_edit_dashboard_title'=>'Dashboard',
    'employee_edit_dashboard_form_firstname'=>'Firstname',
    'employee_edit_dashboard_form_lastname'=>'Lastname',
    'employee_edit_dashboard_form_title'=>'Title',
    'employee_edit_dashboard_form_job'=>'Job',
    'employee_edit_dashboard_form_jobdesc'=>'Job-description',
    'employee_edit_dashboard_form_phonenumber'=>'Phonenumber',
    'employee_edit_dashboard_form_submit'=>'Update',
    'employee_edit_dashboard_lang'=>'Change Language:',
    'employee_edit_profile_management_title'=>'Profile Management',
    'employee_edit_profile_management_form_prpic'=>'Profile Picture:',
    'employee_edit_profile_management_form_submit'=>'Update',
    'employee_edit_profile_management_delete'=>'Delete Account',
    'employee_edit_pswd_title'=>'Password',
    'employee_edit_pswd_form_oldpswd'=>'Current Password',
    'employee_edit_pswd_form_newpswd'=>'New Password',
    'employee_edit_pswd_form_rp_newpswd'=>'Repeate new Password',
    'employee_edit_pswd_form_submit'=>'Update',

    'company_chome_menu_empm_show_more'=>'show more',
    'company_menu_lnt_home'=>'Home',
    'company_menu_lnt_edit'=>'Company Settings',
    'company_menu_lnt_empm'=>'Manage Employees',
    'company_menu_lnt_da_dashboard'=>'Manage DAs',

    'company_chome_panel_da_heading'=>'Diplomarbeitsübersicht',
    'company_chome_da_noda'=>'You have no DAs yet',
    'company_chome_da_daname'=>'Diplomarbeit:',
    'company_chome_da_dastatus'=>'Status:',
    'company_chome_da_empl'=>'Firmenbetreuer',
    'company_chome_da_team'=>'Team',
    'company_chome_da_show_more'=>'Show More',

    'company_empm_panel_empl_heading'=>'Mitarbeiterübersicht',
    'company_empm_empl_table_name'=>'Name',
    'company_empm_empl_table_job'=>'Job',
    'company_empm_empl_table_action'=>'Action',

    'company_da_dashboard_heading'=>'Manage DAs',
    'company_da_dashboard_panel_da_heading'=>'Diplomarbeitsübersicht',
    'company_da_dashboard_da_noda'=>'You don\'t have any DAs yet',
    'company_da_dashboard_da_daname'=>'Diplomarbeit: ',
    'company_da_dashboard_da_dastatus'=>'Status',
    'company_da_dashboard_da_daprog'=>'Fortschritt',
    'company_da_dashboard_da_empl_noempl'=>'This DA has no Employee',
    'company_da_dashboard_da_empl'=>'Firmenbetruer:',
    'company_da_dashboard_da_applications'=>'See Applications',
    'company_da_dashboard_da_noteam'=>'This DA has no students working on it !! *Please change the state of the DA to get new students*',
    'company_da_dashboard_da_teach'=>'Schulbetreuer: ',
    'company_da_dashboard_da_teach_noteach'=>'This DA has no Teacher assigned yet',
    'company_da_dashboard_da_show_more'=>'Show more',
    'company_da_dashboard_da_change_status'=>'Change Status',
    'company_da_dashboard_da_rmv'=>'SEE blade',
    'company_da_dashboard_da_tm_rmv'=>'Entferne Team',

    'company_adda_heading'=>'Create new DA',
    'company_adda_form_daname'=>'Da title',
    'company_adda_form_placeholder_daname'=>'Development of ...',
    'company_adda_form_dadesc'=>'Short Da description',
    'company_adda_form_placeholder_dadesc'=>'What\'s the topic of the DA. What should skills or traits hould applicants have? etc?',
    'company_adda_form_tsize'=>'Team size',
    'company_adda_form_empl'=>'Select Employee',
    'company_adda_form_priv'=>'Select Privacy',
    'company_adda_form_submit'=>'Create',

    'company_applist_table_column_stname'=>'Schüler',
    'company_applist_table_column_tname'=>'Teamname',
    'company_applist_table_column_schname'=>'School',
    'company_applist_table_column_tchname'=>'Teacher',
    'company_applist_table_column_action'=>'Action',
    'company_applist_apply_error'=>'Error',
    'company_applist_apply_scherror'=>'School Error',
    'company_applist_apply_noscherror'=>'Student is not part of a School',
    'company_applist_apply_team_noteach'=>'Team has no support-teacher yet',
    'company_applist_panel_heading'=>'Bewerberliste',
    'company_applist_title'=>'Bewerbungen',
    'company_applist_panel_school'=>'Schule: ',
    'company_applist_panel_grade'=>'Klasse: ',
    'company_applist_panel_teach'=>'Lehrer: ',
    'company_applist_panel_noteach'=>'No Teacher yet',
    'company_applist_panel_team_invalide_fail'=>'This is an invalide team',
    'company_applist_panel_email'=>'Email: ',
    'company_applist_panel_team_accept'=>'Accepte Application',



    'company_edit_menu_dashboard'=>'Dashboard',
    'company_edit_menu_dashboard_title'=>'Dashboard',
    'company_edit_menu_profile_management'=>'Profile Maanagement',
    'company_edit_menu_profile_management_title'=>'Profile Maanagement',
    'company_edit_dashboard_form_cname'=>'Companyname:',
    'company_edit_dashboard_form_placeholder_cname'=>'Hooly GmbH',
    'company_edit_dashboard_form_cdesc'=>'Companydescription:',
    'company_edit_dashboard_form_placeholder_cdesc'=>'We are ...:',
    'company_edit_dashboard_form_weblink'=>'Website[Link]:',
    'company_edit_dashboard_form_placeholder_weblink'=>'https://...',
    'company_edit_dashboard_form_contmail'=>'Contact-Email:',
    'company_edit_dashboard_form_placeholder_contmail'=>'info@mail.at:',
    'company_edit_dashboard_form_submit'=>'Update',
    'company_edit_dashboard_delete'=>'Delete Account',

    'company_edit_profile_management_form_prpic'=>'Profile Picture:',
    'company_edit_profile_management_form_noprpic'=>'You don\'t have a Profilepicture yet.',
    'company_edit_profile_management_document'=>'Other documents',
    'company_edit_profile_management_form_brpic'=>'Backround-Img (for futer versions):',
    'company_edit_profile_management_form_oth'=>'Andere Dokumente',
    'company_edit_profile_management_form_oth1'=>' ',
    'company_edit_profile_management_form_submit'=>'Update',

    'student_sthome_lnt_edit'=>'Mein Profile verwalten',
    'student_sthome_lnt_profile'=>'Mein Profil',
    'student_sthome_lnt_team'=>'Team',

    'student_sthome_news'=>'NEWS',
    'student_sthome_da_priv'=>'Diplomarbeit',
    'student_sthome_team_news'=>'Teamsnews',

    'sutdent_stinfo_da_betreuer'=>'Betreuer',
    'sutdent_stinfo_da_accepted_tsize'=>'Akzeptierte Teamgröße:',
    'sutdent_stinfo_da_accepted_tsize_st'=>'Student/s',
    'sutdent_stinfo_da_tapplied'=>'Your team has already applied to this DA',
    'sutdent_stinfo_da_btn_tapply'=>'Apply',
    'sutdent_stinfo_da_session_fail'=>'Sry you are not allowed to watch this site right now',

    'student_edit_menu_dashboard'=>'Dashboard',
    'student_edit_menu_profile_management'=>'Profile Management',
    'student_edit_menu_pswd'=>'Password',
    'student_edit_menu_team'=>'Team',

    'student_edit_st_prf_crit'=>'Critical ERORR!!!!!',

    'student_edit_dashboard_title'=>'Dashboard',
    'student_edit_dashboard_form_firstname'=>'Firstname:',
    'student_edit_dashboard_form_lastname'=>'Lastname:',
    'student_edit_dashboard_form_title'=>'Title:',
    'student_edit_dashboard_form_phonenumber'=>'Phonenumber:',
    'student_edit_dashboard_form_abme'=>'About mich:',
    'student_edit_dashboard_form_intr'=>'Intresst:',
    'student_edit_dashboard_form_submit'=>'Update',
    'student_edit_dashboard_lang'=>'Change Language:',


    'student_edit_form_placeholder_firstname'=>'Firstname',
    'student_edit_form_placeholder_lastname'=>'Lastname',
    'student_edit_form_placeholder_title'=>'Prof.',
    'student_edit_form_placeholder_phonenumber'=>'+0666 666',
    'student_edit_form_placeholder_abme'=>'Hi I am ...',
    'student_edit_form_placeholder_intr'=>'Math',

    'student_edit_profile_management_title'=>'Update Filed',
    'student_edit_profile_management_form_prpic'=>'Profile picture:',
    'student_edit_profile_management_form_leb'=>'CV:',
    'student_edit_profile_management_form_lzeug'=>'Letztes Zeugnis:',
    'student_edit_profile_management_form_oth1'=>'Andere Dokumente:',
    'student_edit_profile_management_form_oth2'=>' ',
    'student_edit_profile_management_form_submit'=>'Update',
    'student_edit_profile_management_delete'=>'Update',

    'student_edit_pswd_title'=>'Change Password',
    'student_edit_pswd_form_oldpswd'=>'Current Password',
    'student_edit_pswd_form_newpswd'=>'New Password',
    'student_edit_pswd_form_rp_newpswd'=>'Repeate new Password',
    'student_edit_pswd_form_submit'=>'Update Password',

    'student_edit_team_title'=>'Team',
    'student_edit_team_textern'=>'Teamprofile',
    'student_edit_team_thome'=>'Team-Home',
    'student_edit_team_noteam'=>'You are no Team-meber yet. If you want to join a team you can either use the field below to enter a special code or one of the teammebers just sends you an invite linl!:D',
    'student_edit_team_join_teamID'=>'Enter TeamID here',
    'student_edit_team_txt_ct'=>'Or create a new Team!',
    'student_edit_team_btn_ct'=>'Create Team',

    'student_profile_cont_heading'=>'Kontaktinfo:',
    'student_profile_cont_email'=>'Email:',
    'student_profile_cont_team_noteam'=>'Team: NO Team',
    'student_profile_cont_team'=>'Team:',
    'student_profile_cont_phonenumber'=>'Tel.:',
    'student_profile_cont_intr'=>'Intressts:',
    'student_profile_cont_da_noda'=>'Has no DA',
    'student_profile_abme_heading'=>'About Me',
    'student_profile_doc_heading'=>'Documents',
    'student_profile_cv_heading'=>'Lebenslauf',
    'student_profile_grade_heading'=>'Zeugnis:',
    'student_profile_odoc_heading'=>'Andere Dokumente:',
    'student_profile_doc_error'=>'We have encountered an error with this file SRY :(',

    'student_team_menu_dashboard'=>'Dashboard',
    'student_team_menu_Ideas'=>'Ideas',
    'student_team_menu_Teacher'=>'Teacher',

    'student_team_dashboard_title'=>'Overview',
    'student_team_dashboard_tbl_name'=>'Name',
    'student_team_dashboard_tbl_grade'=>'Grade',
    'student_team_dashboard_tbl_action'=>'Action',
    'student_team_dashboard_tm_member_error'=>'TOO many Members ERROR',
    'student_team_dashboard_tm_inv_desc'=>'Invite new people to your team by sending them a code or this link:',
    'student_team_dashboard_tm_max_membermsg'=>'You cannot invite anymore people because you have already reached the maximum teamsize of 5 people :S',

    'student_team_ideas_title'=>'Ideas',
    'student_team_ideas_new_idea'=>'Ideas',
    'student_team_ideas_new_idea_form_iname'=>'Idea-Title',
    'student_team_ideas_new_idea_form_placeholder_iname'=>'Facebook 2.0',
    'student_team_ideas_new_idea_form_idesc'=>'Idea-Description',
    'student_team_ideas_new_idea_form_placeholder_idesc'=>'Creating a better verion of Facebook thats mor focused on finding new friends',
    'student_team_ideas_new_idea_form_submit'=>'Create Idea',
    'student_team_ideas_subtitle'=>'Ideas:',

    'student_team_teacher_title'=>'Support-Teacher-Management',
    'student_team_teacher_inv_expl'=>'Invite your contact teacher to our team by simply sending him/her the following link',
    'student_team_teacher_noteacher'=>'You have a support teacher but unfrtinally an invalide one!',
    'student_team_teacher_teacher'=>'The support teacher of your team is ',




    ''

];