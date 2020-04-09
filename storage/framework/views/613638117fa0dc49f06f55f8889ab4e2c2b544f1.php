<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Register')); ?></div>

                    <div class="card-body">
                        <?php echo e(csrf_field()); ?>

                        <?php echo Form::open(['method'=>'POST', 'action'=>'StudentsController@store']); ?>


                            <div class="form-group row">
                                <label for="Amount" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Amount')); ?></label>

                                <div class="col-md-6">

                                    <div class="form-group">
                                        <?php echo Form::label('number', 'Amount:'); ?>

                                        <?php echo Form::number('number', null,['class'=>'form-control']); ?>

                                    </div>
                                </div>
                            </div>
                            <button data-toggle="collapse" data-target="#newgrade" class="form-group">New Grade</button>
                            <!--Begin Dropdown New Grade -->
                            <div id="newgrade" class="form-group row collapse">
                                <label for="grade" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Grade')); ?></label>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo Form::label('name', 'Grade-name:'); ?>

                                        <?php echo Form::text('name', null, ['class' =>'form-control']); ?>

                                    </div>
                                </div>
                            </div><!--End Dropdown New Grades -->
                            <button data-toggle="collapse" data-target="#selectgrade" class="form-group">Select existing Grade</button>
                            <!--Begin Dropdown Choose Grade -->
                            <div id="selectgrade" class="form-group row collapse">
                                <div class="form-group">
                                    <?php echo Form::label('gradeID', 'Grade:'); ?>

                                    <?php echo Form::select('gradeID', $grades,null,['class'=>'form-control']); ?>

                                </div>
                            </div>
                            <!--end Dropdown Begfin -->



                        <div class="form-group">
                            <?php echo Form::label('email', 'Email:'); ?>

                            <?php echo Form::email('email', null,['class'=>'form-control']); ?>

                        </div>


                        <div class="form-group">
                            <?php echo Form::label('status', 'Status:'); ?>

                            <?php echo Form::select('status', array(1 =>'Active', 0=>'Not Active'),0,['class'=>'form-control']); ?>

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