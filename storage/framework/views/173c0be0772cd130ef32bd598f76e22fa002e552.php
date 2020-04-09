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
                                    <?php echo Form::label('comname', 'Company name:'); ?>

                                    <?php echo Form::text('comname', null,['class'=>'form-control', 'required','placeholder'=>'Weihnachtsmann GmbH&CoKG']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('comweb', 'Company website:'); ?>

                            <?php echo Form::text('comweb',null,['class'=>'form-control','required','placeholder'=>'www.weihnachtsmannKG.at']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('comail', 'Contact Email:'); ?>

                            <?php echo Form::email('comail', null,['class'=>'form-control', 'required', 'placeholder'=>'info@mail.at']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('coname', 'Full Contact Name:'); ?>

                            <?php echo Form::text('coname', null,['class'=>'form-control', 'required', 'placeholder'=>'PMax Musterman']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('tel', 'Contact tel:'); ?>

                            <?php echo Form::text('tel', null,['class'=>'form-control', 'placeholder'=>'0666666']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('logo', 'Company logo'); ?>

                            <?php echo Form::file('logo',null,['class'=>'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('add', 'Additional:'); ?>

                            <?php echo Form::textarea('add', null,['class'=>'form-control', 'placeholder'=>'Questions? etc?']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('codesc', 'Company desccription:'); ?>

                            <?php echo Form::textarea('codesc', null,['class'=>'form-control', 'placeholder'=>'We are a very cool company cause ..']); ?>

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

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>