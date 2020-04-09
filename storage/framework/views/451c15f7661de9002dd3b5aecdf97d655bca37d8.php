<?php $__env->startSection('pgtitle',__('tags.pg_title_edit')); ?>
<?php $__env->startSection('head'); ?>
    <style>
        .btn-st-set {
            background-color: #cce1ff;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-sm-1 container-fluid"></div>
    <div class="col-sm-7 container-fluid"><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><i class="fa fa-user"></i> Profile</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <?php echo e(csrf_field()); ?>

                    <?php echo Form::open(['method'=>'POST', 'action'=>'Profile\StudentProfileController@udfile','enctype'=>'multipart/form-data']); ?>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <?php echo Form::label('prpic', __('profiles.student_edit_profile_management_form_prpic')); ?>

                                <?php echo Form::file('prpic', null,['class'=>'form-control', 'id'=>"Profile pic", 'title'=>__('tags.student_edit_form_files_profpic_title')]); ?>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="<?php echo e(asset(Auth::user()->stprof->profpic)); ?>" class="profile-circle" style="width: 10em; height: 10em;" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <h3>Documents</h3>
                                <?php echo Form::label('leb', __('profiles.student_edit_profile_management_form_leb')); ?>

                                <?php echo Form::file('leb', null,['class'=>'form-control', 'id'=>"Letter of Application", 'title'=>__('tags.student_edit_form_files_leb_title')]); ?>

                            <br />
                                <?php echo Form::label('zeug', __('profiles.student_edit_profile_management_form_lzeug')); ?>

                                <?php echo Form::file('zeug', null,['class'=>'form-control', 'id'=>"Resume", 'title'=>__('tags.student_edit_form_files_zeug_title')]); ?>

                                <br />
                                <?php echo Form::label('oth', __('profiles.student_edit_profile_management_form_oth1')); ?>

                                <?php echo Form::file('oth', null,['class'=>'form-control', 'id'=>"Last Certificate", 'title'=>__('tags.student_edit_form_files_oth1_title')]); ?>

                                <?php echo Form::label('oth1', __('profiles.student_edit_profile_management_form_oth2')); ?>

                                <?php echo Form::file('oth1', null,['class'=>'form-control', 'id'=>"Certificates", 'title'=>__('tags.student_edit_form_files_oth1_title')]); ?>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <?php echo Form::submit(__('profiles.student_edit_profile_management_form_submit'), ['class'=>'btn btn-primary', 'title'=>__('tags.student_edit_form_files_submit_title')]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><i class="fas fa-book"></i> <?php echo app('translator')->getFromJson('profiles.student_edit_dashboard_title'); ?></div>
            <div class="panel-body">
                <div class="row">
                    <?php echo e(csrf_field()); ?>

                    <?php echo Form::open(['method'=>'POST', 'action'=>'Profile\StudentProfileController@udinfo','enctype'=>'multipart/form-data']); ?>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <i class="fa fa-user"></i>
                                <?php echo Form::label('firstname', __('profiles.student_edit_dashboard_form_firstname')); ?>

                                <?php echo Form::text('firstname', null,['class'=>'form-control','placeholder'=>$firstname, 'id'=>'Firstname', 'title'=>__('tags.student_edit_form_firstname')]); ?>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <i class="fa fa-user"></i>
                        <?php echo Form::label('lastname', __('profiles.student_edit_dashboard_form_lastname')); ?>

                        <?php echo Form::text('lastname',null,['class'=>'form-control','placeholder'=>$lastname, 'title'=>__('tags.student_edit_form_lastname')]); ?>

                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <i class="fas fa-address-book"></i>
                                <?php echo Form::label('phonenumber', __('profiles.student_edit_dashboard_form_phonenumber')); ?>

                                <?php echo Form::text('phonenumber', null,['class'=>'form-control','placeholder'=>$phonenumber, 'id'=>"Phone Number", 'title'=>__('tags.student_edit_form_phone')]); ?>

                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <i class="fas fa-smile"></i>
                                <?php echo Form::label('abme', __('profiles.student_edit_dashboard_form_abme')); ?>

                                <?php echo Form::textarea('abme', null,['class'=>'form-control','placeholder'=>$abme, 'title'=>__('tags.student_edit_form_abme')]); ?>

                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <i class="fas fa-smile"></i>
                                <?php echo Form::label('intr', __('profiles.student_edit_dashboard_form_intr')); ?>

                                <?php echo Form::text('intr', null,['class'=>'form-control','placeholder'=>$intr, 'title'=>__('tags.student_edit_form_intr')]); ?>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <?php echo Form::label('email', __('profiles.employee_edit_dashboard_form_email')); ?>

                        <?php echo Form::text('email', null,['class'=>'form-control', 'placeholder'=>\Illuminate\Support\Facades\Auth::user()->email, 'id'=>'E-Mail', 'title'=>__('tags.student_edit_form_email')]); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::submit(__('profiles.student_edit_dashboard_form_submit'), ['class'=>'Updatebutton btn btn-default btn-lg btn-bloc ', 'title'=>__('tags.student_edit_form_submit')]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </div>
                <button title="<?php echo app('translator')->getFromJson('tags.student_edit_delete_account'); ?>" onclick="if(confirm( '<?php echo app('translator')->getFromJson('profiles.student_edit_profile_management_delete_qest'); ?>  ')){return location.href ='<?php echo e(route('student.delete')); ?>';}else{event.stopPropagation();event.preventDefault();};" ><?php echo app('translator')->getFromJson('profiles.student_edit_profile_management_delete'); ?></button>

            </div>
        </div>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><i class="fas fa-key"></i> Password</div>
            <div class="panel-body">
                <form action="/action_page.php">
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-10">
                            <?php echo e(csrf_field()); ?>

                            <?php echo Form::open(['method'=>'POST', 'action'=>'Profile\StudentProfileController@updpswd','enctype'=>'multipart/form-data']); ?>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo Form::label('oldpswd', __('profiles.student_edit_pswd_form_oldpswd')); ?>

                                        <?php echo Form::password('oldpswd', null,['class'=>'form-control','id'=>'Current Password','title'=>__('tags.student_edit_form_pswd_oldpswd_title'), 'placeholder'=>__('profiles.student_edit_pswd_form_oldpswd_placeholder')]); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo Form::label('npaswd', __('profiles.student_edit_pswd_form_newpswd')); ?>

                                        <?php echo Form::password('npswd', null,['class'=>'form-control', 'id'=>'Enter new Password', 'title'=>__('tags.student_edit_form_pswd_newpswd_title'), 'placeholder'=>__('profiles.student_edit_pswd_form_newpswd_placeholder')]); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo Form::label('npswd2', __('profiles.student_edit_pswd_form_rp_newpswd')); ?>

                                        <?php echo Form::password('npswd2', null,['class'=>'form-control', 'id'=>'Repeat new Password', 'title'=>__('tags.student_edit_form_pswd_rp_newpswd_title'), 'placeholder'=>__('profiles.student_edit_pswd_form_rp_newpswd_placeholder')]); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::submit(__('profiles.employee_edit_pswd_form_submit'), ['class'=>'Updatebutton btn btn-default btn-lg btn-block']); ?>

                            </div>
                            <?php echo Form::close(); ?>


                            </div>
                        <div class="col-sm-1"></div>
                    </div>
                </form>
            </div>
        </div>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><?php echo app('translator')->getFromJson('profiles.student_edit_dashboard_lang'); ?></div>
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

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>