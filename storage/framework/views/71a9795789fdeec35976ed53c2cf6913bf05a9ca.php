<?php $__env->startSection('pgtitle',__('tags.pg_title_teach_edit')); ?>
<?php $__env->startSection('head'); ?>
    <style>
        .btn-teach-edit{
            background-color: #cce1ff;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-sm-1 container-fluid"></div>
    <div class="col-sm-7 container-fluid"><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><i class="fa fa-user"></i> <?php echo app('translator')->getFromJson('profiles.teacher_edit_files'); ?></div>
            <div class="panel-body">
                <?php echo e(csrf_field()); ?>

                <?php echo Form::open(['method'=>'POST', 'action'=>'Profile\TeacherProfileController@udfile','enctype'=>'multipart/form-data']); ?>

                <div class="form-group row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <?php echo Form::label('prpic', __('form.teacher_edit_files_prpic_label')); ?>

                            <?php echo Form::file('prpic', null,['class'=>'form-control', 'title'=>__('tags.teacher_edit_files_prpic_title')]); ?>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo e(asset(Auth::user()->prfpic)); ?>" class="rounded-circle"  style="width: 10em; height: 10em;" />
                    </div>
                </div>
                <div class="form-group">
                    <?php echo Form::submit(__('profiles.teacher_edit_submit_btn'), ['class'=>'Updatebutton btn btn-default btn-lg btn-block','title'=>__('tags.teacher_edit_files_update_title'), 'style'=>'width:55%']); ?>

                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><i class="fas fa-book"></i> <?php echo app('translator')->getFromJson('profiles.teacher_edit_data'); ?></div>
            <div class="panel-body">
                <?php echo e(csrf_field()); ?>

                <?php echo Form::open(['method'=>'POST', 'action'=>'Profile\TeacherProfileController@udinfo','enctype'=>'multipart/form-data']); ?>

                <div class="row">
                    <div class="col-sm-5">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('firstname', __('form.teacher edit_info_firstname_label')); ?>

                                    <?php echo Form::text('firstname', null,['class'=>'form-control','title'=>__('tags.teacher_edit_info_firstname_title'), 'placeholder'=>\Illuminate\Support\Facades\Auth::user()->firstname]); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('email', __('form.teacher_edit_info_email_label')); ?>

                            <?php echo Form::text('email',null,['class'=>'form-control','title'=>__('tags.teacher_edit_info_email_title'), 'placeholder'=>\Illuminate\Support\Facades\Auth::user()->email]); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('title', __('form.teacher_edit_info_title_label')); ?>

                            <?php echo Form::text('title', null,['class'=>'form-control', 'title'=>__('tags.teacher_edit_title_title'), 'placeholder'=>\Illuminate\Support\Facades\Auth::user()->title]); ?>

                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('phonenumber', __('form.teacher_edit_info_phonenumber_label')); ?>

                                    <?php echo Form::text('phonenumber', null,['class'=>'form-control', 'title'=>__('tags.teacher_edit_info_phonenumber_title'), 'placeholder'=>\Illuminate\Support\Facades\Auth::user()->phonenumber]); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('intr', __('form.teacher_edit_info_intr_label')); ?>

                            <?php echo Form::text('intr', null,['class'=>'form-control', 'title'=>__('tags.teacher_edit_info_intr_title'), 'placeholder'=>\Illuminate\Support\Facades\Auth::user()->intressts]); ?>

                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <?php echo Form::label('lastname', __('form.teacher_edit_info_lastname_label')); ?>

                            <?php echo Form::text('lastname',null,['class'=>'form-control', 'title'=>__('tags.teacher_edit_info_lastname_title'), 'placeholder'=>\Illuminate\Support\Facades\Auth::user()->lastname]); ?>

                        </div>

                        <div class="form-group row">
                            <div class="form-group">
                                <?php echo Form::label('abme', __('form.teacher_edit_info_abme_label')); ?>

                                <?php echo Form::textarea('abme', null,['class'=>'form-control', 'title'=>__('tags.teacher_edit_info_abme_title'), 'placeholder'=>\Illuminate\Support\Facades\Auth::user()->abme]); ?>

                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo Form::submit(__('profiles.teacher_edit_submit_btn'), ['class'=>'Updatebutton btn btn-default btn-lg btn-block', 'title'=>__('tags.teacher_edit_info_submit_title'), 'style'=>'width:75%']); ?>

                        </div>
                    </div>

                    <?php echo Form::close(); ?>

                </div>
                <div class="row">
                    <button onclick="if(confirm( '<?php echo app('translator')->getFromJson('profiles.teacher_edit_profile_delete_quest'); ?>' )){location.href ='<?php echo e(route('teacher.delete')); ?>';}else{event.stopPropagation();event.preventDefault();};"  >Delete Account</button>
                </div>
            </div>
        </div>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><i class="fas fa-key"></i> <?php echo app('translator')->getFromJson('profiles.teacher_edit_pswd'); ?></div>
            <div class="panel-body">
                <?php echo e(csrf_field()); ?>

                <?php echo Form::open(['method'=>'POST', 'action'=>'Profile\TeacherProfileController@updpswd','enctype'=>'multipart/form-data']); ?>

                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <?php echo Form::label('oldpswd', __('form.teacher_edit_pswd_oldpswd_label')); ?>

                            <?php echo Form::password('oldpswd', null,['class'=>'form-control', 'title'=>__('tags.teacher_edit_pswd_oldpswd_title'), 'placeholder'=>'HTL XYZ']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('npaswd', __('form.teacher_edit_pswd_newpswd_label')); ?>

                            <?php echo Form::password('npswd', null,['class'=>'form-control', 'title'=>__('tags.teacher_edit_pswd_newpswd_title'), 'placeholder'=>'info@mail.at']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('npswd2', __('form.teacher_edit_pswd_rp_newpswd_label')); ?>

                            <?php echo Form::password('npswd2', null,['class'=>'form-control', 'title'=>__('tags.teacher_edit_pswd_rp_newpswd_title'),]); ?>

                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="form-group">
                    <?php echo Form::submit(__('profiles.teacher_edit_submit_btn'), ['class'=>'Updatebutton btn btn-default btn-lg btn-block', 'title'=>__('tags.teacher_edit_pswd_submit_title'), 'style'=>'width:55%']); ?>

                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><?php echo app('translator')->getFromJson('profiles.teacher_edit_lang'); ?></div>
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

<?php echo $__env->make('layouts.apptch', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>