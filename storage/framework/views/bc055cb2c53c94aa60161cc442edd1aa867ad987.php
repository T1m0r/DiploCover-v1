<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Create new standalone Employee')); ?></div>

                    <div class="card-body">
                        <?php echo e(csrf_field()); ?>

                        <?php echo Form::open(array('action' => 'EmployeeController@stor_alone', 'method'=>'post')); ?>

                        <?php echo e(Form::token()); ?>

                        <?php echo e(Form::token()); ?>


                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('title', 'Title:'); ?>

                                    <?php echo Form::text('title', null,['placeholder'=>'Prof.','class'=>'form-control']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('job', 'Job:'); ?>

                                    <?php echo Form::text('job', null,['placeholder'=>'Project Manager', 'required','class'=>'form-control']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('firstname', 'Firstname:'); ?>

                                    <?php echo Form::text('firstname', null,['placeholder'=>'Your firstname', 'required','class'=>'form-control']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('lastname', 'Lastname:'); ?>

                                    <?php echo Form::text('lastname', null,['placeholder'=>'Your lastname', 'required','class'=>'form-control']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('phonenumber', 'Phonenumber:'); ?>

                                    <?php echo Form::text('phonenumber', null,['placeholder'=>'0657 636489','class'=>'form-control']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('email', 'Email:'); ?>

                            <?php echo Form::email('email',null,['placeholder'=>'email@mail.com','required', 'class'=>'form-control']); ?>

                        </div>

                        <div class="form-group">
                            <?php echo Form::submit('Register', ['class'=>'btn btn-primary']); ?>

                        </div>
                        <?php echo Form::close(); ?>



                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.unauth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>