<?php $__env->startSection('pgtitle',__('tags.pg_title_home')); ?>
<?php $__env->startSection('head'); ?>
    <style>
        .btn-teach-home{
            background-color: #cce1ff;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-sm-1 container-fluid"></div>
    <div class="col-sm-7 container-fluid"><br/>
        <div id="Schatten" class="panel-group">
            <div class="panel-heading"><?php echo app('translator')->getFromJson('profiles.teacher_tchome_panel_grades_heading'); ?></div>
            <div class="panel-body">
                <?php if(count($grades) <1): ?>
                    <div class="panel panel-primary">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
                            <p><?php echo app('translator')->getFromJson('profiles.teacher_tchome_grade_nograde'); ?></p>
                            <?php echo e(csrf_field()); ?>

                            <?php echo Form::open(array('action' => 'Teacher\Grade\TeacherGradeController@new', 'method'=>'post')); ?>


                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo Form::label('name', __('profiles.teacher_newgrade_formlabel_gname')); ?>

                                        <?php echo Form::text('name', null,['placeholder'=>'1b','required','class'=>'form-control']); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('amount', __('profiles.teacher_newgrade_formlabel_amount')); ?>

                                <?php echo Form::number('amount',null,['class'=>'form-control', 'default'=>1, 'max'=>'120','placeholder'=>'1']); ?>

                            </div>


                            <div class="form-group">
                                <?php echo Form::submit(__('profiles.teacher_newgrade_form_submit'), ['style'=>'width:20%','title'=>__('tags.teacher_home_grade_new_title') ,'class'=>'Createbutton btn btn-default btn-lg btn-block']); ?>

                            </div>
                            <?php echo Form::close(); ?>

                        </div>
                    </div>
                <?php else: ?>
                    <?php $__currentLoopData = $grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="panel panel-primary">
                            <div class="panel-heading"><?php echo app('translator')->getFromJson('profiles.teacher_tchome_grade_gname'); ?> <?php echo e($grade->name); ?>

                                <div id="Status"><?php echo app('translator')->getFromJson('profiles.teacher_tchome_grade_stcount'); ?> <?php echo e($grade->students); ?></div>
                            </div>
                            <div class="panel-body">
                                <div><?php echo app('translator')->getFromJson('profiles.teacher_tchome_grade_gteach'); ?> <?php echo e($grade->teacher()->get()[0]->name); ?></div>
                                <div><?php echo app('translator')->getFromJson('profiles.teacher_tchome_grade_team'); ?></div>
                                <button title="<?php echo app('translator')->getFromJson('tags.teacher_home_grade_show_more_title'); ?>" onclick="location.href ='/teacher/grade/<?php echo e(urlencode($grade->gradeID)); ?>/index';"id="ShowMore" type="button" class="btn btn-success"><?php echo app('translator')->getFromJson('profiles.teacher_tchome_grade_more'); ?></button>

                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><?php echo app('translator')->getFromJson('profiles.teacher_tchome_panel_da_heading'); ?></div>
            <div id="panelbody"class="panel-body">
                <?php if(count($das) <1): ?>
                    <p><?php echo app('translator')->getFromJson('profiles.teacher_tchome_da_noda'); ?></p>
                <?php else: ?>
                    <?php $__currentLoopData = $das; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $da): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="panel panel-primary">
                            <div class="panel-heading"><?php echo app('translator')->getFromJson('profiles.teacher_tchome_da_dan'); ?> <?php echo e($da->DAname); ?>

                                <?php if($da->status == null): ?>
                                    <div id="Status"><?php echo app('translator')->getFromJson('profiles.teacher_tchome_da_sta_notdefined'); ?></div>
                                <?php else: ?>
                                    <div id="Status"><?php echo app('translator')->getFromJson('profiles.teacher_tchome_da_sta'); ?> <?php echo e($da->status); ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="panel-body">
                                <?php if($da->emplID == null): ?>
                                    <div><?php echo app('translator')->getFromJson('profiles.teacher_tchome_da_noempl'); ?></div>
                                <?php else: ?>
                                    <div><?php echo app('translator')->getFromJson('profiles.teacher_tchome_da_empl'); ?> <?php echo e($da->employee()->first()->name); ?></div>
                                <?php endif; ?>
                                <div><?php echo app('translator')->getFromJson('profiles.teacher_tchome_da_comp'); ?><?php echo e($da->company()->first()->compname); ?></div>
                                <div><?php echo app('translator')->getFromJson('profiles.teacher_tchome_da_team'); ?></div>
                                
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apptch', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>