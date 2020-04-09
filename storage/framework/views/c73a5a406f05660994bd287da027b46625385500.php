<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('profiles.teacher_newgrade_title')); ?></div>

                    <div class="card-body">
                        <?php echo e(csrf_field()); ?>

                        <?php echo Form::open(array('action' => 'Teacher\Grade\TeacherGradeController@new', 'method'=>'post')); ?>


                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('name', __('profiles.teacher_newgrade_formlabel_gname')); ?>

                                    <?php echo Form::text('name', null,['placeholder'=>'1b','required','class'=>'form-control']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('amount', __('profiles.teacher_newgrade_formlabel_amount')); ?>

                            <?php echo Form::number('amount',null,['class'=>'form-control', 'default'=>1,'placeholder'=>'1']); ?>

                        </div>


                        <div class="form-group">
                            <?php echo Form::submit(__('profiles.teacher_newgrade_form_submit'), ['class'=>'btn btn-primary']); ?>

                        </div>
                        <?php echo Form::close(); ?>



                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.apptch', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>