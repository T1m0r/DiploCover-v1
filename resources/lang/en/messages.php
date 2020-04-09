<?php
/**
 * Created by PhpStorm.
 * User: Jakob
 * Date: 27.11.2018
 * Time: 12:16
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
    'companyDAaddfail' => 'Diplomarbeits Fehler nicht mehr als 5 möglich',
    'companyDAaddsuccess' => 'Diplomarbeit erfolgreich erstellen',
    'teacherHomeindexfail' => 'Sry it seems you don\'t have a school yet',
    'companyDAnewdaselect' => 'choose a Employee responsible for the DA',
    'companyDA_adda_success' => 'You have successfully created a new DA',
    'companyDA_adda_fail' => 'Seems like you forgot to enter something',
    'companyDA_stedit_compfail' => 'Either you were very bad or our server malfunctioned',
    'companyDA_stedit_valfail' => 'Seems like you forgot to enter something :R',
    'companyDAstupdatesuccess' => 'You have successfully updated the Phase of the DA',
    'companyDAstupdatefail' => 'You are not supposed to do that :S',
    'companyDAstupdatevalfail' => 'Seems like you forgot to enter something :R',
    'companyDAsettingvalfail' => 'Seems like you forgot to enter something :R',
    'companyDAsettingupdatesuccess' => 'You have successfully updated the Da settings',
    'companyDAsettingupdatevalfail' => 'Seems like you forgot to enter something',
    'companyDArmvsuccess' => 'You have successfully deleted the DA',
    'companyDArmvvalfail' => 'Seems like you forgot to enter something',
    'companyDAapplistphasefail' => 'This is not avaliable in this Phase of the DA',
    'companyDAapplistDAfail' => 'A Strange error eóccured pleas contact our support',
    'companyDAapplistvalfail' => 'Seems like you forgot to enter something',


    'studentapplyDA_info_error' => 'Error this DA has an ERORO, Error',
    'studentapplyDA_apply_error' => 'Error this DA has an ERORO, Error ',
    'studentapplyDA_apply_valfail' => 'Error this DA has an ERORO, Error ',
    'studentapplyDA_apply_team_fail' => 'Sorry to apply to a DA you need to be part of a team',
    'studentapplyDA_apply_teamerror' => 'Sorry we encountered an error with your team pleas contact the support',
    'studentapplyDA_apply_team_membersfail' => 'Sorry to apply to this DA your Team has to have',
    'studentapplyDA_apply_team_membersfail_member' => 'Member/s',
    'studentapplyDA_apply_team_applied' => 'Your team has already applied to this DA',
    'studentapplyDA_apply_team_applied_success' => 'You have succesfully applied to ',

    'companyprofile_add_beta_5_empl'=>'Sorry, but since we are in the Beta we can only afford a maximum of 5 employes per company. NEvertheless if it is essential to your company to have more than 5 employes please contact our support :D',
    'companyprofile_addempl_exist_error'=>'This email is already used please select another one or log in to your account! :d Thx',
    'companyprofile_addempl_email_header'=>'Registrierung DiploCover',
    'companyprofile_empm_fail'=>'Error, you are not the operator of this company',
    'companyprofile_udfile_success'=>'The files have been updated.',
    'companyprofile_udfile_error'=>'We have encountered an error whil trying to update your files. Pleas try aggain or contact the support.',
    'companyprofile_udinfo_success'=>'Succesfully updated your information',
    'companyprofile_remove_success'=>'Employee has been deleted but can still be restored for 1 week(but not logged in)',
    'employeeprofile_updpswd_success'=>'You have successfully updated your password',
    'employeeprofile_updpswd_rp_fail'=>'The passwords you entered do not match',
    'employeeprofile_updpswd_pswd_missmatch'=>'The passwords you entered do not match',
    'employeeprofile_udfile_success'=>'The files have been updated.',
    'employeeprofile_udfile_fail'=>'We have encountered an error whil trying to update your files. Pleas try aggain or contact the support.',
    'employeeprofile_udinfo_success'=>'Succesfully updated your information',


    'companyDA_adda_status'=>'Just created',

    'teacherRegister_register_emailfail' => 'This email is already used please select another one or log in to your account! :d Thx',


    'studentRegister_register_emailNVfail' => 'This email is already used but has not been verifyed yet',
    'studentRegister_register_emailRPfail' => 'This email is already used please select another one or log in to your account! :d Thx',

    'Company_authfail_emplID' => 'It seems like you tryed to perform something you are not supposed to. If you feel like you should be able to, contact our support under info@diplocover.at with code: ceID',
    'Company_authfail_role' => 'It seems like you tryed to perform something you are not supposed to. If you feel like you should be able to, contact our support under info@diplocover.at with code: ceCr',

    'School_authfail_teachID' => 'It seems like you tryed to perform something you are not supposed to. If you feel like you should be able to, contact our support under info@diplocover.at with code: stID',
    'School_authfail_role' => 'It seems like you tryed to perform something you are not supposed to. If you feel like you should be able to, contact our support under info@diplocover.at with code: stSr',

    'schoolprofile_index_fail'=>'Sorry but you don`t have enough permission to enter this site',
    'schoolprofile_add_emp_fail'=>'This email is already used please select another one or log in to your account! :d Thx',
    'schoolprofile_add_email_header'=>'Registrierung DiploCover',
    'schoolprofile_empm_empl_fail'=>'Error, you are not the operator of this company',
    'schoolprofile_rmv'=>'You have succesfully deleted Teacher ',
    'schoolprofile_udinfo_success'=>'Succesfully updated your information',
    'schoolprofile_remove_success'=>'Employee has been deleted but can still be restored for 1 week(but not logged in)',

    'studentprofile_udfile_success'=>'The files have been updated.',
    'studentprofile_udfile_fail'=>'We have encountered an error whil trying to update your files. Pleas try aggain or contact the support.',

    'studentprofile_udinfo_success'=>'Succesfully updated your information',
    'studentprofile_updpswd_success'=>'Updated you Password succesfully',
    'studentprofile_updpswd_rp_fail'=>'The passwords you entered do not match',
    'studentprofile_updpswd_ver_fail'=>'Sry your current paswd and the one you entered don\'t match',

    'teacherprofile_updpswd_success'=>'Updated you Password succesfully',
    'teacherprofile_updpswd_rp_fail'=>'The passwords you entered do not match',
    'teacherprofile_updpswd_ver_fail'=>'Sry your current paswd and the one you entered don\'t match',

    'teacherprofile_udfile_success'=>'The files have been updated.',
    'teacherprofile_udfile_fail'=>'The file formate is no supported or no image',

    'teacherprofile_udinfo_success'=>'Succesfully updated your information',
    'teacherprofile_teamadd_success'=>'You successfully entered a DA team',
    'teacherprofile_teamadd_exp_fail'=>'Sorry the link you used is expired. Please request a new one.',
    'teacherprofile_teamadd_invalid_fail'=>'Invalide link pleas request a new one',

    'teacherprofile_create_tfail'=>'sry something went wrong please try again.',
    'teacherprofile_create_talready_meber_fail'=>'You are already member of a team',

    'companyregister_register_email_fail'=>'This email is already used please select another one or log in to your account! :d Thx',
    'companyregister_register_email_header'=>'Registrierung DiploCover',
    'companyregister_create_email_header'=>'Registrierung DiploCover',
    'companyregister_create_fail'=>'Unincountered error pleas refresh and try aggain *not signed',

    'companyregister_confirm_link_fail_comp'=>'It seems like there is something wrong with your verification link:D / Findorwhere',
    'companyregister_confirm_link_fail_email'=>'Hmmmm. It seems like your account has already been verified so you can go to the login and login :D',
    'companyregister_confirm_link_fail_scode'=>'We are sorry there seems to be something wrong with your verification link please make sure you entered it correctly! sid or/and scode',
    'companyregister_confirm_link_fail_concode'=>'We are sorry there seems to be something wrong with your verification link please make sure you entered it correctly! sid or/and scode',
    'companyregister_confirm_link_email_fail'=>'We are sorry there seems to be something wrong with your verification link please make sure you entered it correctly! sid or/and scode',

    'companyregister_further_db_error'=>'Sry we our Database doesn\'t want to save your information. :q Please try again in a few minutes! Thx :D',
    'companyregister_further_st_prof_fail'=>'Sry it seems you already have a profile page :D',
    'companyregister_further_session_error'=>'Sry it seems your session has expired please use the confirm link we sent you via email again:D',
    'companyregister_further_link_fail'=>'We are sorry there seems to be something wrong with your information link please make sure you entered it correctly! furtherinfo',


    'employeeregister_register_email_fail'=>'This email is already used please select another one or log in to your account! :d Thx',
    'employeeregister_register_email_header'=>'Registrierung DiploCover',
    'employeeregister_registerroot_email_fail'=>'This email is already used please select another one or log in to your account! :d Thx',
    'employeeregister_registerroot_email_header'=>'Registrierung DiploCover',

    'employeeregister_confirm_link_fail_empl'=>'It seems like there is something wrong with your verification link:D / Findorwhere',
    'employeeregister_confirm_link_fail_email_noemail'=>'Sry but our robot can\'t find your email in our database',
    'employeeregister_confirm_link_fail_email'=>'Hmmm, seems like your email has already been verifeyed so go on -> ',
    'employeeregister_confirm_link_fail_confcode'=>'We are sorry there seems to be something wrong with your verification link please make sure you entered it correctly!',
    'employeeregister_confirm_link_fail_cid'=>'Confirmation code corrupted (CID)',
    'employeeregister_confirm_link_fail_expired'=>'We are sorry your link expired :D',
    'employeeregister_confirm_link_email_fail'=>'We are sorry there seems to be something wrong with your verification link please make sure you entered it correctly! sid or/and scode',

    'employeeregister_further_db_error'=>'Sry we our Database doesn\'t want to save your information. :q Please try again in a few minutes! Thx :D',
    'employeeregister_further_st_prof_fail'=>'Sry it seems you already have a profile page :D',
    'employeeregister_further_session_error'=>'Sry it seems your session has expired please use the confirm link we sent you via email again:D',
    'employeeregister_further_link_fail'=>'We are sorry there seems to be something wrong with your information link please make sure you entered it correctly! furtherinfo',


    'schoolregister_register_email_fail'=>'This email is already used please select another one or log in to your account! :d Thx',
    'schoolregister_register_email_header'=>'Registrierung DiploCover',
    'schoolregister_create_email_header'=>'Registrierung DiploCover',
    'schoolregister_create_fail'=>'Unincountered error pleas refresh and try aggain *not signed',

    'schoolregister_confirm_link_fail_teach'=>'It seems like there is something wrong with your verification link:D / Findorwhere',
    'schoolregister_confirm_link_fail_email_noemail'=>'Sry but our robot can\'t find your email in our database',
    'schoolregister_confirm_link_fail_email'=>'Hmmm, seems like your email has already been verifeyed so go on -> and login ',
    'schoolregister_confirm_link_fail_confcode'=>'We are sorry there seems to be something wrong with your verification link please make sure you entered it correctly!',
    'schoolregister_confirm_link_fail_cid'=>'Confirmation code corrupted (CID)',
    'schoolregister_confirm_link_fail_expired'=>'We are sorry your link expired :D',
    'schoolregister_confirm_link_email_fail'=>'We are sorry there seems to be something wrong with your verification link please make sure you entered it correctly! sid or/and scode',

    'schoolregister_further_db_error'=>'Sry we our Database doesn\'t want to save your information. :q Please try again in a few minutes! Thx :D',
    'schoolregister_further_st_prof_fail'=>'Sry it seems you already have a profile page :D',
    'schoolregister_further_session_error'=>'Sry it seems your session has expired please use the confirm link we sent you via email again:D',
    'schoolregister_further_link_fail'=>'We are sorry there seems to be something wrong with your information link please make sure you entered it correctly! furtherinfo',



    'studentregister_register_email_header'=>'Registrierung DiploCover',
    'studentregister_create_fail'=>'Unincountered error pleas refresh and try aggain *not signed',


    'studentregister_confirm_link_fail_sid'=>'It seems like there is something wrong with your verification link:D / Findorwhere',
    'studentregister_confirm_link_fail_email_noemail'=>'It seems like there is something wrong with your verification link:D / mail"',
    'studentregister_confirm_link_fail_email'=>'Hmmm, seems like your email has already been verifeyed so go on -> and login ',
    'studentregister_confirm_link_fail_scode'=>'We are sorry there seems to be something wrong with your verification link please make sure you entered it correctly! Scode',
    'studentregister_confirm_link_fail_confcode'=>'We are sorry there seems to be something wrong with your verification link please make sure you entered it correctly! Confirmcode',
    'studentregister_confirm_link_email_fail'=>'We are sorry there seems to be something wrong with your verification link please make sure you entered it correctly! sid or/and scode',

    'studentregister_further_db_error'=>'Sry we our Database doesn\'t want to save your information. :q Please try again in a few minutes! Thx :D',
    'studentregister_further_st_prof_fail'=>'Sry it seems you already have a profile page :D',
    'studentregister_further_session_error'=>'Sry it seems your session has expired please use the confirm link we sent you via email again:D',
    'studentregister_further_link_fail'=>'We are sorry there seems to be something wrong with your information link please make sure you entered it correctly! furtherinfo',



    'teacherregister_register_email_header'=>'Registrierung DiploCover',
    'teacherregister_schregister_email_fail'=>'Registrierung DiploCover',
    'teacherregister_schregister_email_header'=>'Registrierung DiploCover',
    'teacherregister_create_fail'=>'Unincountered error pleas refresh and try aggain *not signed',


    'teacherregister_confirm_link_fail_teach'=>'It seems like there is something wrong with your verification link:D / Findorwhere',
    'teacherregister_confirm_link_fail_email_noemail'=>'It seems like there is something wrong with your verification link:D / mail"',
    'teacherregister_confirm_link_fail_email'=>'Hmmm, seems like your email has already been verifeyed so go on -> and login ',
    'teacherregister_confirm_link_fail_scode'=>'We are sorry there seems to be something wrong with your verification link please make sure you entered it correctly! Scode',
    'teacherregister_confirm_link_fail_confcode'=>'We are sorry there seems to be something wrong with your verification link please make sure you entered it correctly! Confirmcode',
    'teacherregister_confirm_link_email_fail'=>'We are sorry there seems to be something wrong with your verification link please make sure you entered it correctly! sid or/and scode',
    'teacherregister_confirm_link_fail_expired'=>'We are sorry your link expired :D',

    'teacherregister_further_db_error'=>'Sry we our Database doesn\'t want to save your information. :q Please try again in a few minutes! Thx :D',
    'teacherregister_further_st_prof_fail'=>'Sry it seems you already have a profile page :D',
    'teacherregister_further_session_error'=>'Sry it seems your session has expired please use the confirm link we sent you via email again:D',
    'teacherregister_further_link_fail'=>'We are sorry there seems to be something wrong with your information link please make sure you entered it correctly! furtherinfo',

    'teachergrade_index_fail'=>'Sorry but there is no grade with this gradeID. >:L',
    'teachergrade_update_success'=>'You have successfully changed the grade name',
    'teachergrade_update_fail'=>'You havn\'t entered a valide gradename',
    'teachergrade_rmv_success'=>'You have succesfully deleted this grade',
    'teachergrade_darmv_success'=>'You have succesfully removed yourself from this da',
    'teachergrade_strmv_success'=>'You have succesfully deleted the student ',
    'teachergrade_rmvtm_fail'=>'Unkown ERROR !!! :o',
    'teachergrade_rmvtm_success'=>'You have succesfully removed yourself from this team',
    'teachergrade_new_fail_noschool'=>'You are not a member of a school yet. If need help creating or joining one pleas contact our support team',
    'teachergrade_new_fail_ver'=>'Sry there has been an error please reenter your page',
    'teachergrade_addst_fail'=>'GradeError please contact our support!',
    'teachergrade_creatests_success_1'=>'You have succesfully added ',
    'teachergrade_creatests_success_2'=>' students to this grade!',

    'studentteam_index_fail'=>'Sry but you are not part of a team yet',
    'studentteam_rmv_fail_val'=>'Internal error pleas refresh the page and try again!',
    'studentteam_rmv_fail_sid'=>'Internal error pleas refresh the page and try again!',
    'studentteam_rmv_success'=>'Deleted Team member succesful.',
    'studentteam_rmv_fail_noteam'=>'Deleted Team member error.',

    'studentteam_teamadd_fail_member'=>'Sorry we ran into trouble adding you to the team because the team has already reached the maximum team size of 5 people',
    'studentteam_teamadd_fail_expired'=>'Sorry the link you used is expired. Please request a new one.',
    'studentteam_teamadd_fail_invalide'=>'Invalide link pleas request a new one',

    'teamidea_store_success'=>'Successfully created new idea :D',

];