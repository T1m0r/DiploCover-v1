<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('form.company_da_changestatus_title')); ?></div>

                    <div class="card-body">
                        <h3><?php echo app('translator')->getFromJson('form.company_da_changestatus_current'); ?> <?php echo e($da->Phase()->get()[0]->status); ?></h3>
                        <?php echo e(csrf_field()); ?>

                        <?php echo Form::open(array('action' => 'Profile\DA\EmployeeDAController@stupdate', 'method'=>'post')); ?>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">

                                    <p><?php echo app('translator')->getFromJson('form.company_da_changestatus_form_intro'); ?></p>
                                    <?php echo Form::label('phase', __('form.company_da_changestatus_form_phase')); ?>


                                    <?php echo Form::select('phase', $phases,['class'=>'form-control']); ?>

                                    <?php echo Form::hidden('DAid',$da->DAid,['class'=>'form-control' ]); ?>


                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <?php echo Form::submit(__('form.company_da_changestatus_form_submit'), ['class'=>'btn btn-primary']); ?>

                        </div>
                        <?php echo Form::close(); ?>



                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appemp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>