<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Register')); ?></div>

                    <div class="card-body">
                        <?php echo e(csrf_field()); ?>

                        <?php echo Form::open(['method'=>'POST', 'action'=>'StudentController@store']); ?>


                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('number', 'Amount:'); ?>

                                    <?php echo Form::number('number', null,['class'=>'form-control'], 'required'); ?>

                                </div>
                            </div>
                        </div>
                            <div class="form-group">
                                <?php echo Form::label('gradeID', 'Grade:'); ?>

                                <?php echo Form::select('gradeID', $grades,null,['class'=>'form-control', 'required']); ?>

                            </div>
                        <div class="form-group">
                            <?php echo Form::label('teach', 'Teacher:'); ?>

                            <?php echo Form::select('teach', $teachers,null, ['class'=>'form-control', 'required']); ?>

                        </div>


                        <div class="form-group">
                            <?php echo Form::label('status', 'Status:'); ?>

                            <?php echo Form::select('status', array(1 =>'Active', 0=>'Not Active'),0,['class'=>'form-control', 'required']); ?>

                        </div>

                        <div class="form-group">
                            <?php echo Form::submit('Create User', ['class'=>'btn btn-primary']); ?>

                        </div>
                        <?php echo Form::close(); ?>



                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>