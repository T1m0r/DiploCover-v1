<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Create new Grade')); ?></div>

                    <div class="card-body">
                        <?php echo e(csrf_field()); ?>

                        <?php echo Form::open(array('action' => 'GradeController@storestudent', 'method'=>'post')); ?>


                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('name', 'Grade-name:'); ?>

                                    <?php echo Form::text('name', null,['placeholder'=>'1b','required','class'=>'form-control']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('school', 'Select School:'); ?>

                            <?php echo Form::select('school', $schools,null,['class'=>'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('teacher', 'Select Grade master:'); ?>

                            <?php echo Form::select('teacher', $teachers,null,['class'=>'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('amount', 'Amount of Students:'); ?>

                            <?php echo Form::number('amount',null,['class'=>'form-control', 'default'=>1,'placeholder'=>'1']); ?>

                        </div>


                        <div class="form-group">
                            <?php echo Form::submit('Create Grade', ['class'=>'btn btn-primary']); ?>

                        </div>
                        <?php echo Form::close(); ?>



                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.unauth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>