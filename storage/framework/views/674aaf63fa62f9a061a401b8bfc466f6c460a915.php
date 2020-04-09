<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Register')); ?></div>

                    <div class="card-body">
                        <?php echo e(csrf_field()); ?>

                        <?php echo Form::open(['method'=>'POST', 'action'=>'Register\CompanyRegisterController@create']); ?>


                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('cname', 'Company name:'); ?>

                                    <?php echo Form::text('cname', null,['class'=>'form-control','required']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('cmail', 'Company relaevant email:'); ?>

                            <?php echo Form::email('cmail', null,['class'=>'form-control','required']); ?>

                        </div>

                        <div class="form-group">
                            <?php echo Form::submit('Create Company', ['class'=>'btn btn-primary']); ?>

                        </div>
                        <?php echo Form::close(); ?>



                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>