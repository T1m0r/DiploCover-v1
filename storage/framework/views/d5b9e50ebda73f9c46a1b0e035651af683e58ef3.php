<?php $__env->startSection('pgtitle',__('tags.pg_title_home')); ?>
<?php $__env->startSection('head'); ?>
    <style>
        .btn-st-home{
            background-color:#cce1ff ;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-sm-7 container-fluid"><br/>
        <?php if(count($st->team()->get())==1): ?>
            <?php if(count($st->team()->first()->DA()->get())==1): ?>
                <div id="Schatten"class="panel-group">
                    <div class="panel-heading"><h4>Meine Diplomarbeit: <?php echo e($st->team()->first()->DA()->first()->DAname); ?></h4>
                        <div id="Status">Status:</div>
                    </div>
                    <div class="panel-body">
                        <?php if(count($st->team()->first()->DA()->first()->employee()->get()) == 1): ?>
                            <div>Firmen-Betreuer: <a href="student/employee/<?php echo e(urlencode($st->team()->first()->DA()->first()->employee()->first()->empID)); ?>/profile" ><?php echo e($st->team()->first()->DA()->first()->employee()->first()->name); ?></a></div>
                        <?php endif; ?>
                        <?php if(count($st->team()->first()->teacher()->get())==1): ?>
                                <div>Lehrer-Betreuer: <a href="student/teacher/<?php echo e(urlencode($st->team()->first()->teacher()->first()->teachID)); ?>/profile" ><?php echo e($st->team()->first()->teacher()->first()->name); ?></a></div>
                        <?php endif; ?>
                                <div>Team: <a href="student/team/<?php echo e(urlencode($st->teamID)); ?>"><?php echo e($st->team()->first()->tname); ?></a> </div>
                        <!--<button id="ShowMore" title="Show More" type="button" class="btn btn-success">
                            <i class='fas fa-ellipsis-h' style="width:100%"></i>
                        </button>-->
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><?php echo app('translator')->getFromJson('profiles.student_sthome_news'); ?></div>
            <div id="panelbody"class="panel-body">
                <?php $__currentLoopData = $das; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $da): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($da->privacy <4): ?>
                        <div class="panel panel-primary">
                            <div class="card-body">
                                <?php if($da->privacy >2 ): ?>
                                    <a href="/student/da/<?php echo e($da->DAid); ?>/info"><h3><?php echo app('translator')->getFromJson('profiles.student_sthome_da_priv'); ?></h3></a>
                                <?php else: ?>
                                    <a href="/student/da/<?php echo e($da->DAid); ?>/info"><h3><?php echo e($da->DAname); ?></h3></a>
                                <?php endif; ?>

                                <h4> von: <?php echo e($da->company()->first()['compname']); ?> </h4>

                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>