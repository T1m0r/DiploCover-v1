<?php $__env->startSection('head'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-sm-1 container-fluid"></div>
    <div class="col-sm-7 container-fluid"><br/>
        <div id="Schatten">
            <table id="Klasse"style="width:100%">
                <br />
                <?php if(isset($loged)): ?>
                    <p><?php echo app('translator')->getFromJson('profiles.teacher_grade_index_loged_msg'); ?></p>

                <?php else: ?>
                    <p><?php echo app('translator')->getFromJson('profiles.teacher_grade_index_notloged_msg'); ?></p>
                    <br />
                <?php endif; ?>

                <thead>
                <tr>
                    <th><?php echo app('translator')->getFromJson('profiles.teacher_grade_table_nr'); ?></th>
                    <th><?php echo app('translator')->getFromJson('profiles.teacher_grade_table_student'); ?></th>
                    <th><?php echo app('translator')->getFromJson('profiles.teacher_grade_table_team'); ?></th>
                    <th><?php echo app('translator')->getFromJson('profiles.teacher_grade_table_teacher'); ?></th>
                    <th><?php echo app('translator')->getFromJson('profiles.teacher_grade_table_da'); ?></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($i= $i+1); ?></td>
                        <td><a href="/teach/student/<?php echo e($st->sID); ?>/profile"><?php echo e($st->name); ?></a></td>
                        <?php if(($st->teamID == null or $st->teamID == " ")and count($st->team()->get())!=1): ?>
                            <td>...</td>
                                <td><?php echo app('translator')->getFromJson('profiles.teacher_grade_table_content_teacher_no'); ?></td>
                                <td><?php echo app('translator')->getFromJson('profiles.teacher_grade_index_table_da_noda'); ?></td>
                        <?php else: ?>

                            <?php if(count($st->team()->get()) >1 or $st->team()->get() == null): ?>
                                <p><?php echo app('translator')->getFromJson('profiles.teacher_grade_table_team_invalide'); ?></p>
                            <?php else: ?>

                                <td><?php echo e($st->team()->get()[0]->tname); ?></td>
                                <?php if(count($st->team()->first()->teacher()->get())== 1): ?>
                                        <td><?php echo e($st->team()->first()->teacher()->first()->name); ?></td>
                                <?php else: ?>
                                        <td><?php echo app('translator')->getFromJson('profiles.teacher_grade_table_content_teacher_no'); ?></td>
                                <?php endif; ?>
                                <?php if(count($st->team()->get()[0]->DA()->get())== 1): ?>
                                    <td><?php echo e($st->team()->get()[0]->DA()->get()->Daname); ?></td>
                                <?php else: ?>
                                    <td><?php echo app('translator')->getFromJson('profiles.teacher_grade_index_table_da_noda'); ?></td>
                                <?php endif; ?>

                            <?php endif; ?>
                        <?php endif; ?>
                            <td>
                                <form action="<?php echo e(route('teacher.grade.st.rmv')); ?>" method="post" onclick="if(confirm('Are you sure you want to delete this student and all conected information?')){return true;}else{event.stopPropagation();event.preventDefault();};">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="sID" value="<?php echo e($st->sID); ?>" />
                                    <button type="submit" style="width:100%" class="Deletebutton btn btn-default btn-lg btn-block"  ><i class='fas fa-trash-alt' style="color:black"></i></button>
                                </form>
                            </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div><br/>
        <form action="<?php echo e(route('teacher.grade.st.add')); ?>" method="post" >
            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="gradeID" value="<?php echo e($grade->gradeID); ?>" />
            <button type="submit" style="width: 45%;" class="Plus-Button btn btn-default btn-lg btn-block"  ><i class='fas fa-plus' style='font-size:24px'></i></button>
        </form><br/>
        <button style="width:25%" class="PDF-Button btn btn-default btn-lg btn-block" onclick="location.href ='/teacher/grade/<?php echo e(urlencode($grade->gradeID)); ?>/pdf';" ><?php echo app('translator')->getFromJson('profiles.teacher_grade_index_bnt_pdf'); ?></button>
    </div>
   <br><br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.apptch', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>