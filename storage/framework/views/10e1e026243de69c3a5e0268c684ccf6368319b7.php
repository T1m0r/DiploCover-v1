<?php $__env->startSection('head'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Create Team')); ?></div>

                    <div class="card-body">
                        <?php echo e(csrf_field()); ?>

                        <?php echo Form::open(['method'=>'POST', 'action'=>'Profile\TeamProfileController@create']); ?>


                        <div class="form-group">
                            <?php echo Form::label('tname', 'Teamname:'); ?>

                            <?php echo Form::text('tname',null,['class'=>'form-control','required','placeholder'=>'Team X-Force']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::submit('Create', ['class'=>'btn btn-primary']); ?>

                        </div>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('jspace'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>