<?php $__env->startSection('pgtitle', 'Login'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Login')); ?></div>

                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('login')); ?>" aria-label="<?php echo e(__('Login')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right"><?php echo e(__('E-Mail Addresse')); ?></label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                                    <?php if($errors->has('email')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('auth.Password')); ?></label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                    <?php if($errors->has('password')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <label>
                                            <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> <?php echo e(__('auth.RememberME')); ?>

                                        </label>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <?php echo e(__('Login')); ?>

                                    </button>

                                    <!--<a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                        
                                    </a>-->
                                </div>
                            </div>
                        </form>
                        <p><?php echo e(__('auth.login_nst')); ?></p>
                        <p><?php echo e(__('auth.login_use_this')); ?></p>
                        <button onclick="location.href='/employee/login';" class="btn btn-primary"><?php echo e(__('auth.login_emp_comp_login')); ?></button><br>
                        <button onclick="location.href='/teacher/login';" class="btn btn-primary"><?php echo e(__('auth.login_teach_sch_login')); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.unauth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>