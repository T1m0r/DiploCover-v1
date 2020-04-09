<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Register')); ?></div>

                    <div class="card-body">
                        <?php echo e(csrf_field()); ?>

                        <?php echo Form::open(['method'=>'POST', 'action'=>'StudentController@register']); ?>


                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('SID', 'Student ID:'); ?>

                                    <?php echo Form::text('SID', null,['class'=>'form-control', 'required','placeholder'=>'kjas0dfuj430jfslöfjsklfjf']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('scode', 'Studentcode:'); ?>

                            <?php echo Form::text('scode',null,['class'=>'form-control','required','placeholder'=>'aklsdhf7892384789723']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('email', 'Email:'); ?>

                            <?php echo Form::email('email', null,['class'=>'form-control', 'required', 'placeholder'=>'info@mail.at']); ?>

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

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>