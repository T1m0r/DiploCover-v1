<?php $__env->startSection('pgtitle',__('tags.pg_title_teacher_dashboard')); ?>
<?php $__env->startSection('head'); ?>
    <style>
        .btn-school-teach-dashboard{
            background-color: #cce1ff;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
            <div class="col-sm-1 container-fluid"></div>
            <div class="col-sm-7 container-fluid">
                    <div class="panel panel-default">
                        <div class="panel-heading"><?php echo app('translator')->getFromJson('profiles.school_manage_teacher_panel_teacher_heading'); ?></div>
                        <div id="panelbody"class="panel-body">
                            <?php if(count($tchs)>0): ?>
                                <?php $__currentLoopData = $tchs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teach): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <?php if($teach->teachID == \Illuminate\Support\Facades\Auth::user()->teachID): ?>
                                                    <div class="col-md-5">
                                                        <?php echo e($teach->name); ?> <?php echo app('translator')->getFromJson('profiles.school_manage_teacher_teacher_you'); ?>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php echo e($teach->email); ?>

                                                    </div>
                                                <?php else: ?>
                                                    <div class="col-md-5">
                                                        <?php echo e($teach->name); ?>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php echo e($teach->email); ?>

                                                    </div>
                                                    <div class="col-1">
                                                        <form action="<?php echo e(route('school.tch.rmv')); ?>" method="post">
                                                            <?php echo e(csrf_field()); ?>

                                                            <input type="hidden" name="teachID" value="<?php echo e($teach->teachID); ?>" />

                                                            <button  type="submit" title="<?php echo app('translator')->getFromJson('tags.school_teach_dashboard_teach_delete_title'); ?>" class="Deletebutton btn btn-default btn-lg btn-block"><i class='fas fa-trash-alt' style="color:black"></i></button>
                                                        </form>
                                                    </div>
                                                <?php endif; ?>
                                            </div>

                                        </div>
                                        <div class="panel-body">
                                            <div class="col-md-4">
                                                <?php if(count($teach->grade()->get()) > 0): ?>
                                                    <?php $__currentLoopData = $teach->grade()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div><?php echo app('translator')->getFromJson('profiles.school_manage_teacher_teacher_grade_gname'); ?> <?php echo e($grade->name); ?> </div>
                                                            <div><?php echo app('translator')->getFromJson('profiles.school_manage_teacher_teacher_grade_stcount'); ?> <?php echo e($grade->students); ?> </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>
                                                    <p><?php echo app('translator')->getFromJson('profiles.school_manage_teacher_teacher_grade_nograde'); ?></p>
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-md-4">
                                                <?php if(count($teach->DA()->get()) > 0): ?>
                                                    <?php $__currentLoopData = $teach->DA()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $da): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div><?php echo app('translator')->getFromJson('profiles.school_manage_teacher_teacher_da_daname'); ?> <?php echo e($da->DAname); ?></div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>
                                                    <p><?php echo app('translator')->getFromJson('profiles.school_manage_teacher_teacher_da_nodae'); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading"></div>
                                    <div class="panel-body">
                                        <p><?php echo app('translator')->getFromJson('profiles.school_manage_teacher_teacher_critical_error'); ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <button  style="width: 50%" title="<?php echo app('translator')->getFromJson('tags.school_teach_dashboard_teach_new_title'); ?>" onclick="location.href ='<?php echo e(route('school.add.teacher')); ?>';" id="Erstell_Buttons" type="button" class="Plus-Button btn btn-default btn-lg btn-block">
                            <i class='fas fa-plus' style=width:100%></i>
                        </button>
                        <br />
                    </div>
                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appschool', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>