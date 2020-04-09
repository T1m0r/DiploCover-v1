<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Create new School')); ?></div>

                    <div class="card-body">
                        <?php echo e(csrf_field()); ?>

                        <?php echo Form::open(array('action' => 'SchoolController@store', 'method'=>'post')); ?>


                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('name', 'School-name:'); ?>

                                    <?php echo Form::text('name', null,['placeholder'=>'Muster HTL', 'required','class'=>'form-control']); ?>

                                </div>
                            </div>
                        </div>

                        <?php if(count($teachers) < 1): ?>

                            <div class="form-group">
                                <?php echo Form::label('nop', 'We are very sorry but currently is no operator to choose availiable: You can create one:'.'<a href="/teacher/create/standalone">here.</a>'); ?>

                            </div>

                        <?php else: ?>

                            <div class="form-group">
                                <?php echo Form::label('school', 'Select School operator:'); ?>

                                <?php echo Form::select('school', $teachers,null,['required', 'class'=>'form-control']); ?>


                            </div>

                        <?php endif; ?>
                        <div class="form-group">
                            <?php echo Form::submit('Create School', ['class'=>'btn btn-primary']); ?>

                        </div>
                        <?php echo Form::close(); ?>



                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>