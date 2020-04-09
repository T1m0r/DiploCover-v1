<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Login')); ?></div>

                    <div class="card-body">
                        <?php echo e(csrf_field()); ?>

                        <?php echo Form::open(['method'=>'POST', 'action'=>'Register\StudentRegisterController@register']); ?>


                            <div class="form-group row">
                                <div class="col-md-6">
                                    <?php echo Form::label('email', 'Email:'); ?>

                                    <?php echo Form::text('email', null,['class'=>"form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>", 'required','autofocus', 'placeholder'=>'info@mail.at']); ?>


                                    <?php if($errors->has('email')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <?php echo Form::label('pswd', 'Password:'); ?>

                                    <?php echo Form::text('pswd', null,['class'=>"form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>", 'required', 'placeholder'=>'Secret']); ?>


                                    

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
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                        <label class="form-check-label" for="remember">
                                            <?php echo e(__('Remember Me')); ?>

                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <?php echo e(__('Login')); ?>

                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>