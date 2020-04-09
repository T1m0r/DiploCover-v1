<?php $__env->startSection('pgtitle',__('tags.pg_title_edit')); ?>
<?php $__env->startSection('head'); ?>
    <style>
        .emp-btn-set{
            background-color: #91a5c6;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-sm-1 container-fluid"></div>
    <div class="col-sm-7 container-fluid"><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><i class="fa fa-user"></i><?php echo app('translator')->getFromJson('profiles.employee_edit_profile_management_title'); ?></div>
            <div class="panel-body">
                <?php echo e(csrf_field()); ?>

                <?php echo Form::open(['method'=>'POST', 'action'=>'Profile\EmployeeProfileController@udfile','enctype'=>'multipart/form-data']); ?>

                <div class="form-group row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <?php echo Form::label('prfpic', __('profiles.employee_edit_profile_management_form_prpic')); ?>

                            <?php echo Form::file('prfpic', null,['class'=>'form-control', 'title'=>__('tags.employee_edit_prf_pic_upload_title')]); ?>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo e(asset(Auth::user()->prfpic)); ?>" title="<?php echo app('translator')->getFromJson('tags.employee_edit_prof_pic_title'); ?>" class="rounded" style="width: 10em; height: 10em;" />
                    </div>
                </div>
                <div class="form-group">
                    <?php echo Form::submit(__('profiles.employee_edit_profile_management_form_submit'), ['class'=>'btn btn-primary', 'title'=>__('tags.employee_edit_prf_pic_submit_title')]); ?>

                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><i class="fas fa-book"></i> <?php echo app('translator')->getFromJson('profiles.employee_edit_dashboard_title'); ?></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-5">
                        <?php echo e(csrf_field()); ?>

                        <?php echo Form::open(['method'=>'POST', 'action'=>'Profile\EmployeeProfileController@udinfo','enctype'=>'multipart/form-data']); ?>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <i class="fa fa-user"></i>
                                    <?php echo Form::label('firstname', __('profiles.employee_edit_dashboard_form_firstname')); ?>

                                    <?php echo Form::text('firstname', null,['class'=>'form-control','placeholder'=>\Illuminate\Support\Facades\Auth::user()->firstname, 'title'=>__('tags.employee_edit_form_firstname_title')]); ?>

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <i class="fas fa-address-card"></i>
                            <?php echo Form::label('title', __('profiles.employee_edit_dashboard_form_title')); ?>

                            <?php echo Form::text('title', null,['class'=>'form-control', 'placeholder'=>\Illuminate\Support\Facades\Auth::user()->title, 'title'=>__('tags.employee_edit_form_title_title')]); ?>

                        </div>
                        <div class="form-group">
                            <i class="fa fa-gavel"></i>
                            <?php echo Form::label('job', __('profiles.employee_edit_dashboard_form_job')); ?>

                            <?php echo Form::text('job', null,['class'=>'form-control', 'placeholder'=>\Illuminate\Support\Facades\Auth::user()->job, 'title'=>__('tags.employee_edit_form_job_title')]); ?>

                        </div>
                        <div class="form-group">
                            <i class="fa fa-graduation-cap"></i>
                            <?php echo Form::label('jobdesc', __('profiles.employee_edit_dashboard_form_jobdesc')); ?>

                            <?php echo Form::textarea('jobdesc', null,['class'=>'form-control', 'placeholder'=>\Illuminate\Support\Facades\Auth::user()->jobdesc, 'title'=>__('tags.employee_edit_form_jobdesc_title')]); ?>

                        </div>


                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <i class="fa fa-user"></i>
                            <?php echo Form::label('lastname', __('profiles.employee_edit_dashboard_form_lastname')); ?>

                            <?php echo Form::text('lastname',null,['class'=>'form-control','placeholder'=>\Illuminate\Support\Facades\Auth::user()->lastname, 'title'=>__('tags.employee_edit_form_lastname_title')]); ?>

                        </div>
                        <div class="form-group">
                            <i class="fa fa-envelope"></i>
                            <?php echo Form::label('email', __('profiles.employee_edit_dashboard_form_email')); ?>

                            <?php echo Form::text('email', null,['class'=>'form-control', 'placeholder'=>\Illuminate\Support\Facades\Auth::user()->email, 'title'=>__('tags.employee_edit_form_email_title')]); ?>

                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <i class="fas fa-address-book"></i>
                                    <?php echo Form::label('phonenumber', __('profiles.employee_edit_dashboard_form_phonenumber')); ?>

                                    <?php echo Form::text('phonenumber', null,['class'=>'form-control','placeholder'=>\Illuminate\Support\Facades\Auth::user()->phonenumber]); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php echo Form::submit(__('profiles.employee_edit_dashboard_form_submit'), ['class'=>'Updatebutton btn btn-default btn-lg btn-block', 'title'=>__('tags.employee_edit_form_submit_title')]); ?>

                <?php echo Form::close(); ?>

                <button title="<?php echo app('translator')->getFromJson('tags.employee_edit_profile_delete'); ?>" onclick="if(confirm( '<?php echo app('translator')->getFromJson('profiles.employee_edit_profile_management_delete_qest'); ?>  ')){return location.href ='<?php echo e(route('employee.delete')); ?>';}else{event.stopPropagation();event.preventDefault();};" ><?php echo app('translator')->getFromJson('profiles.employee_edit_profile_management_delete'); ?></button>

            </div>
        </div>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><i class="fas fa-key"></i><?php echo app('translator')->getFromJson('profiles.employee_edit_pswd_title'); ?></div>
            <div class="panel-body">
                <?php echo e(csrf_field()); ?>

                <?php echo Form::open(['method'=>'POST', 'action'=>'Profile\EmployeeProfileController@updpswd','enctype'=>'multipart/form-data']); ?>

                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('oldpswd', __('profiles.employee_edit_pswd_form_oldpswd')); ?>

                                    <?php echo Form::password('oldpswd', null,['class'=>'form-control','placeholder'=>'HTL XYZ','title'=>__('tags.employee_edit_pswd_oldpswd_title')]); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('npaswd', __('profiles.employee_edit_pswd_form_newpswd')); ?>

                                    <?php echo Form::password('npswd', null,['class'=>'form-control','placeholder'=>'info@mail.at', 'title'=>__('tags.employee_edit_pswd_newpswd_title') ]); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('npswd2', __('profiles.employee_edit_pswd_form_rp_newpswd')); ?>

                                    <?php echo Form::password('npswd2', null,['class'=>'form-control', 'title'=>__('tags.employee_edit_pswd_rpnewpswd_title')]); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="form-group">
                    <?php echo Form::submit(__('profiles.employee_edit_pswd_form_submit'), ['style'=>'width:25%','class'=>'Updatebutton btn btn-default btn-lg btn-block', 'title'=>__('tags.employee_edit_pswd_submit_title')]); ?>

                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><?php echo app('translator')->getFromJson('profiles.employee_edit_dashboard_lang'); ?></div>
            <div class="panel-body">
                <?php if(App::getLocale() == 'de'): ?>
                    <button title="<?php echo app('translator')->getFromJson('tags.student_edit_lang_de_title'); ?>" style="width:25%; background-color: #FF73FD" type="button" class="Languagebutton btn btn-default btn-lg btn-block" onclick="location.href='/lang/de';"><?php echo app('translator')->getFromJson('profiles.lang1'); ?></button>
                    <button title="<?php echo app('translator')->getFromJson('tags.student_edit_lang_en_title'); ?>" style="width:25%" type="button" class="Languagebutton btn btn-default btn-lg btn-block"onclick="location.href='/lang/en';"><?php echo app('translator')->getFromJson('profiles.lang2'); ?></button>
                <?php elseif(App::getLocale() == 'en'): ?>
                    <button title="<?php echo app('translator')->getFromJson('tags.student_edit_lang_de_title'); ?>" style="width:25%" type="button" class="Languagebutton btn btn-default btn-lg btn-block" onclick="location.href='/lang/de';"><?php echo app('translator')->getFromJson('profiles.lang1'); ?></button>
                    <button title="<?php echo app('translator')->getFromJson('tags.student_edit_lang_en_title'); ?>" style="width:25%; background-color: #FF73FD" type="button" class="Languagebutton btn btn-default btn-lg btn-block"onclick="location.href='/lang/en';"><?php echo app('translator')->getFromJson('profiles.lang2'); ?></button>
                <?php else: ?>
                    <button title="<?php echo app('translator')->getFromJson('tags.student_edit_lang_de_title'); ?>" style="width:25%" type="button" class="Languagebutton btn btn-default btn-lg btn-block" onclick="location.href='/lang/de';"><?php echo app('translator')->getFromJson('profiles.lang1'); ?></button>
                    <button title="<?php echo app('translator')->getFromJson('tags.student_edit_lang_en_title'); ?>" style="width:25%" type="button" class="Languagebutton btn btn-default btn-lg btn-block"onclick="location.href='/lang/en';"><?php echo app('translator')->getFromJson('profiles.lang2'); ?></button>
                <?php endif; ?>
            </div>
        </div>
    </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appemp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>