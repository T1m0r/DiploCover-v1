<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Register')); ?></div>

                    <div class="card-body">
                        <?php echo e(csrf_field()); ?>

                        <?php echo Form::open(['method'=>'POST', 'action'=>'Register\StudentRegisterController@register']); ?>


                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('name', 'Your full name:'); ?>

                                    <?php echo Form::text('name', null,['class'=>'form-control', 'required','placeholder'=>'Max Mustermann']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('email', 'Contact Email:'); ?>

                            <?php echo Form::email('email', null,['class'=>'form-control', 'required', 'placeholder'=>'info@mail.at']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('add', 'Information:'); ?>

                            <?php echo Form::textarea('add', null,['class'=>'form-control', 'placeholder'=>'Who are you? Why do you wanna join DiploCover? Other Questions']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::submit('Send', ['class'=>'btn btn-primary']); ?>

                        </div>
                        <?php echo Form::close(); ?>



                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.unauth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>