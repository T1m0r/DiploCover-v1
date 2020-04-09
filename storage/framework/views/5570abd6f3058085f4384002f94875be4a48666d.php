<?php $__env->startSection('pgtitle',__('tags.pg_title_team_profile')); ?>
<?php $__env->startSection('head'); ?>
    <style>
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-sm-7 container-fluid"><br/>
        <div class="center"><h1><?php echo e($tm->tname); ?></h1></div><br/>
        <?php if(count($tm->Da()->get()) != 0): ?>
            <div class="center error"><h3><?php echo app('translator')->getFromJson('profiles.employee_team_profile_da_da'); ?></h3></div><br/>
        <?php else: ?>
            <div class="center success"><h3><?php echo app('translator')->getFromJson('profiles.employee_team_profile_da_noda'); ?></h3></div><br/>

        <?php endif; ?>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><?php echo app('translator')->getFromJson('profiles.employee_team_profile_toverview'); ?></div>
            <div class="panel-body">
                <div class="row container-fluid">
                    <table id="Klasse"style="width:100%">
                        <thead>
                        <tr>
                            <th></th>
                            <th><?php echo app('translator')->getFromJson('profiles.employee_team_profile_toverview_name'); ?></th>
                            <th><?php echo app('translator')->getFromJson('profiles.employee_team_profile_toverview_klasse'); ?></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $tms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tmm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><img src="<?php echo e(asset($tmm->stprof()->first()->profpic)); ?>" style="height: 2em;" /></td>
                                <td><?php echo e($tmm->firstname); ?> <?php echo e($tmm->lastname); ?></td>
                                <td><?php echo e($tmm->gradename()->first()->name); ?></td>
                                <td><button style="width:100%" onclick="location.href='/employee/student/<?php echo e(urlencode($tmm->sID)); ?>/profile';" title="Profilepage" type="button" class="Profilebutton btn btn-default btn-lg btn-block">
                                        <i class="fa fa-user" style="color:black"></i></button></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <br/>
                    <?php if(isset($teach)): ?>
                        <?php if($teach != null): ?>
                            <p><?php echo app('translator')->getFromJson('profiles.employee_team_profile_toverview_teach'); ?></p>
                            <table id="Klasse"style="width:100%">
                                <thead>
                                <tr>
                                    <th><?php echo app('translator')->getFromJson('profiles.employee_team_profile_toverview_teach_lehrer'); ?></th>
                                    <th><?php echo app('translator')->getFromJson('profiles.employee_team_profile_toverview_teach_name'); ?></th>
                                    <th><?php echo app('translator')->getFromJson('profiles.employee_team_profile_toverview_teach_Schule'); ?></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <td><img src="<?php echo e(asset($teach->profpic)); ?>" style="height: 2em;" /></td>
                                    <td><?php echo e($teach->title); ?> <?php echo e($teach->firstname); ?> <?php echo e($teach->lastname); ?></td>
                                    <td><?php echo e($teach->School()->first()->name); ?></td>
                                    <td><button style="width:100%" onclick="location.href='/employee/teacher/<?php echo e(urlencode($teach->teachID)); ?>/profile';" title="Profilepage" type="button" class="Profilebutton btn btn-default btn-lg btn-block">
                                            <i class="fa fa-user" style="color:black"></i></button></td>
                                </tbody>
                            </table>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><h4><?php echo app('translator')->getFromJson('profiles.employee_team_profile_contact'); ?></h4></div>
            <div class="panel-body">
                <div class="ContactInfo">
                    <form action="/action_page.php">
                        <label class="fa fa-envelope" for="E-Mail"> <?php echo app('translator')->getFromJson('profiles.employee_team_profile_contact_email'); ?></label>
                        <p><?php echo e($tm->student()->first()->email); ?></p>
                    </form>
                </div>
            </div>
        </div><br/>
        <?php if(isset($ideas)): ?>
            <?php if(count($ideas)>0): ?>
                <div id="Schatten"class="panel-group">
                    <div class="panel-heading"><h4><?php echo app('translator')->getFromJson('profiles.employee_team_profile_idea'); ?></h4></div>
                    <div class="panel-body">
                        <?php $__currentLoopData = $ideas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div id="Schatten"class="panel-group">
                                <div class="panel-heading"><h4><?php echo e($idea->iname); ?></h4></div>
                                <div class="panel-body">
                                    <?php echo e($idea->ititle); ?>

                                </div>
                            </div><br/>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div><br/>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appemp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>