<?php $__env->startSection('pgtitle',__('tags.pg_title_school_home')); ?>
<?php $__env->startSection('head'); ?>
    <style>
        .btn-school-home{
            background-color: #cce1ff;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="col-sm-1 container-fluid"></div>
    <div class="col-sm-7 container-fluid">
        <?php if(count($schdas) > 0): ?>
            <div id="Schatten"class="panel-group">
                <div class="panel-heading">Diplomarbeiten der Schule</div>
                <div id="panelbody"class="panel-body">
                    <?php $__currentLoopData = $schdas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $da): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="panel panel-primary">
                            <div class="panel-heading">Diplomarbeit: <?php echo e($da->DAname); ?>

                                <div id="Status">Status: <?php echo e($da->status); ?></div>
                            </div>
                            <div class="panel-body">
                                <?php if(count($da->empteacher()->get()) > 0): ?>
                                    <div>Haupt-Betreuer: <?php echo e($da->empteacher()->first()->name); ?></div>
                                <?php endif; ?>
                                <?php if(count($da->empzteacher()->get())>0): ?>
                                    <div>Lehrer-Betreuer: <?php echo e($da->empzteacher->first()->name); ?> </div>
                                <?php endif; ?>
                                <?php if(count($da->team()->get()) ==1): ?>
                                    <div>Team: <?php echo e($da->team()->first()->name); ?>

                                        <?php $__currentLoopData = $da->team()->first()->members()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $memb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <p><?php echo e($memb->name); ?>, </p>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div><br/>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php endif; ?>

        <div id="panelgroup"class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo app('translator')->getFromJson('profiles.school_schome_panel_teachers_heading'); ?></div>
                <div id="panelbody"class="panel-body">
                    <?php $__currentLoopData = $tchs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <?php echo e($teacher->name); ?>

                            </div>
                            <div class="panel-body">
                                <?php if(count($teacher->grade()->get())>0): ?>
                                    <?php $__currentLoopData = $teacher->Grade()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="panel-body">
                                            <div><?php echo app('translator')->getFromJson('profiles.school_schome_teacher_gname'); ?> <?php echo e($grade->name); ?></div>
                                            <div><?php echo app('translator')->getFromJson('profiles.school_schome_teacher_students'); ?> <?php echo e($grade->students); ?></div>

                                        </div>
                                        <hr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <hr>
                                    <?php if(count($teacher->team()->get())>0): ?>
                                        <?php $__currentLoopData = $teacher->team()-get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div><?php echo app('translator')->getFromJson('profiles.school_schome_teacher_team_tname'); ?> <?php echo e($tm->tname); ?></div>
                                            <?php if(count($tm->da()->get())==1): ?>
                                                <div><?php echo app('translator')->getFromJson('profiles.school_schome_teacher_team_da'); ?> <?php echo e($tm->da()->get()[0]->daname); ?></div>
                                            <?php else: ?>
                                                <div><?php echo app('translator')->getFromJson('profiles.school_schome_teacher_team_da_noda'); ?> </div>
                                            <?php endif; ?>
                                            <hr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <div><?php echo app('translator')->getFromJson('profiles.school_schome_teacher_teams_noteam'); ?></div>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <div><?php echo app('translator')->getFromJson('profiles.school_schome_teacher_grade_nograde'); ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <button id="Erstell_Buttons" onclick="location.href='<?php echo e(route('school.add.teacher')); ?>';" type="button" class="btn btn-default btn-lg btn-block">
                        <i class="glyphicon glyphicon-plus"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appschool', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>