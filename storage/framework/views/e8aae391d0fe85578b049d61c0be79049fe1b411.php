<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Register')); ?></div>

                    <div class="card-body">
                        <a href="<?php echo e(route('login')); ?>">Login</a><br>
                        <a href="employee/create">Create Employee</a><br>
                        <a href="employee/create/alone">Create Standalone Employee</a><br>
                        <a href="grade/create">Create Grade</a><br>
                        <a href="/grade/create/wstud">Create Graade with Students</a><br>
                        <a href="/school/create">Create School</a><br>
                        <a href="/student/create">Create Student</a><br>
                        <a href="/student/register">Register Student</a><br>
                        <a href="/student/register/confirm">Confirming Student</a><br>
                        <a href="/student/register/further">Student further information</a><br>
                        <a href="/teacher/create">Create Teacher</a><br>
                        <a href="/teacher/create/standalone">Create standalone Teacher</a><br>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.unauth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>