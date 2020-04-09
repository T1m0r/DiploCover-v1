<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('form.register_students_wc_success_title')); ?></div>

                    <div class="card-body">
                        <div class="alert alert-success">
                            <?php echo app('translator')->getFromJson('form.register_students_wc_success_msg_success'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.unauth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>