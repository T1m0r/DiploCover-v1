<?php $__env->startSection('after_styles'); ?>
<style media="screen">
    .backpack-profile-form .required::after {
        content: ' *';
        color: red;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
<section class="content-header">

    <h1>
        <?php echo e(trans('backpack::base.my_account')); ?>

    </h1>

    <ol class="breadcrumb">

        <li>
            <a href="<?php echo e(backpack_url()); ?>"><?php echo e(config('backpack.base.project_name')); ?></a>
        </li>

        <li>
            <a href="<?php echo e(route('backpack.account.info')); ?>"><?php echo e(trans('backpack::base.my_account')); ?></a>
        </li>

        <li class="active">
            <?php echo e(trans('backpack::base.update_account_info')); ?>

        </li>

    </ol>

</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-3">
        <?php echo $__env->make('backpack::auth.account.sidemenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div class="col-md-6">

        <form class="form" action="<?php echo e(route('backpack.account.info')); ?>" method="post">

            <?php echo csrf_field(); ?>


            <div class="box">

                <div class="box-body backpack-profile-form">

                    <?php if(session('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>

                    <?php if($errors->count()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($e); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <?php
                            $label = trans('backpack::base.name');
                            $field = 'name';
                        ?>
                        <label class="required"><?php echo e($label); ?></label>
                        <input required class="form-control" type="text" name="<?php echo e($field); ?>" value="<?php echo e(old($field) ? old($field) : $user->$field); ?>">
                    </div>

                    <div class="form-group">
                        <?php
                            $label = config('backpack.base.authentication_column_name');
                            $field = backpack_authentication_column();
                        ?>
                        <label class="required"><?php echo e($label); ?></label>
                        <input required class="form-control" type="<?php echo e(backpack_authentication_column()=='email'?'email':'text'); ?>" name="<?php echo e($field); ?>" value="<?php echo e(old($field) ? old($field) : $user->$field); ?>">
                    </div>

                </div>

                <div class="box-footer">

                    <button type="submit" class="btn btn-success"><span class="ladda-label"><i class="fa fa-save"></i> <?php echo e(trans('backpack::base.save')); ?></span></button>
                    <a href="<?php echo e(backpack_url()); ?>" class="btn btn-default"><span class="ladda-label"><?php echo e(trans('backpack::base.cancel')); ?></span></a>

                </div>
            </div>

        </form>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backpack::layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>