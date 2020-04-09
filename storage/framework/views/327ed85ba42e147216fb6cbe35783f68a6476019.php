<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('form.register_students_wc_registerc_title')); ?></div>

                    <div class="card-body">
                        <?php echo e(csrf_field()); ?>

                        <?php echo Form::open(['method'=>'POST', 'action'=>'Register\StudentRegisterController@register']); ?>


                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('SID', __('form.register_students_wc_registerc_form_sid')); ?>

                                    <?php echo Form::text('SID', null,['class'=>'form-control', 'required','placeholder'=>__('form.register_students_wc_registerc_form_placeholder_sid')]); ?>

                                    <!--<p><?php echo e(__('form.register_students_wc_registerc_form_nost')); ?></p>
                                    <ul>
                                        <li>
                                            <a href="<?php echo e(route('register.other.school')); ?>" ><?php echo e(__('form.register_students_wc_registerc_othlogin_school')); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('register.other.company')); ?>" ><?php echo e(__('form.register_students_wc_registerc_othlogin_company')); ?></a>
                                        </li>
                                        <li>
                                            <a href="/teacher/create" ><?php echo e(__('form.register_students_wc_registerc_othlogin_techwc')); ?></a>
                                        </li>
                                        <li>
                                            <a href="/teacher/create/standalone" ><?php echo e(__('form.register_students_wc_registerc_othlogin_teachwoc')); ?></a>
                                        </li>
                                        <li>
                                            <a href="/employee/create" ><?php echo e(__('form.register_students_wc_registerc_othlogin_empwc')); ?></a>
                                        </li>
                                        <li>
                                            <a href="/employee/create/alone" ><?php echo e(__('form.register_students_wc_registerc_othlogin_empwoc')); ?></a>
                                        </li>
                                            <p><?php echo e(__('form.register_students_wc_registerc_othlogin_none1')); ?> <a href="<?php echo e(route('register.other.other')); ?>" ><?php echo e(__('form.register_students_wc_registerc_othlogin_none2')); ?></a></p>

                                    </ul>-->
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('scode', __('form.register_students_wc_registerc_form_scode')); ?>

                            <?php echo Form::text('scode',null,['class'=>'form-control','required','placeholder'=>__('form.register_students_wc_registerc_form_placeholder_scode')]); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('email', __('form.register_students_wc_registerc_form_email')); ?>

                            <?php echo Form::email('email', null,['class'=>'form-control', 'required', 'placeholder'=>__('form.register_students_wc_registerc_form_placeholder_email')]); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::submit(__('form.register_students_wc_registerc_form_submit'), ['class'=>'btn btn-primary']); ?>

                        </div>
                        <?php echo Form::close(); ?>



                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.unauth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>