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
                                    <?php echo Form::label('schname', 'School name:'); ?>

                                    <?php echo Form::text('schname', null,['class'=>'form-control', 'required','placeholder'=>'HTL ...']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('schweb', 'School website:'); ?>

                            <?php echo Form::text('schweb',null,['class'=>'form-control','required','placeholder'=>'www.school.at']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('schemail', 'Contact Email:'); ?>

                            <?php echo Form::email('schemail', null,['class'=>'form-control', 'required', 'placeholder'=>'info@mail.at']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('coname', 'Full Contact Name:'); ?>

                            <?php echo Form::text('coname', null,['class'=>'form-control', 'required', 'placeholder'=>'Prof. Max Musterman']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('add', 'Additional:'); ?>

                            <?php echo Form::textarea('add', null,['class'=>'form-control', 'placeholder'=>'How many students would enter this programm? etc?']); ?>

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