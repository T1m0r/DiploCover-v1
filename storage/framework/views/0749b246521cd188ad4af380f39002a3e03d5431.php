<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('form.errormsg')); ?></div>
                    <div class="card-body">
                        <div class="alert alert-danger">
                            <h1><?php echo e($errormsg); ?></h1>
                            <?php if((\Illuminate\Support\Facades\Auth::user()->teamID != null or Auth::user()->teamID != "") and count(\App\Models\Team::where('teamID',Auth::user()->teamID)->get()) == 1): ?>

                                <button onclick="location.href='/team/<?php echo e(urlencode(Auth::user()->teamID)); ?>/profile';" class="btn btn-app"><?php echo app('translator')->getFromJson('profiles.student_edit_team_textern'); ?></button>
                                <button onclick="location.href='<?php echo e(route('student.team')); ?>';"  class="btn btn-app"><?php echo app('translator')->getFromJson('profiles.student_edit_team_thome'); ?></button>
                            <?php else: ?>
                                <p ><?php echo app('translator')->getFromJson('profiles.student_edit_team_noteam'); ?></p>
                                <form method="POST" action="#" aria-label="Team registration">
                                    <div class="form-group row">
                                        <label for="tidd" class="col-sm-4 col-form-label text-md-right"><?php echo app('translator')->getFromJson('profiles.student_edit_team_join_teamID'); ?></label>
                                        <div class="col-md-6">
                                            <input id="tidd" type="text"  name="tidd"  required autofocus>
                                        </div>
                                    </div>
                                </form>
                                <p ><?php echo app('translator')->getFromJson('profiles.student_edit_team_txt_ct'); ?></p>
                                <button class="btn btn-info" onclick="location.href = '/profile/team/create'"><?php echo app('translator')->getFromJson('profiles.student_edit_team_btn_ct'); ?></button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>