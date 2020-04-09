<?php $__env->startSection('pgtitle',__('tags.pg_title_chome')); ?>
<?php $__env->startSection('head'); ?>
    <style>
        .emp-btn-comp-home{
            background-color: #cce1ff;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-sm-1 container-fluid"></div>
    <div class="col-sm-7 container-fluid"><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading">
                <p><?php echo app('translator')->getFromJson('profiles.company_empm_panel_empl_heading'); ?></p>
            </div>
            <div class="panel-body">
                <div>
                    <table id="Klasse"style="width:100%" class="table table-hover hover">
                        <tr>
                            <th><?php echo app('translator')->getFromJson('profiles.company_empm_empl_table_name'); ?></th>
                            <th><?php echo app('translator')->getFromJson('profiles.company_empm_empl_table_job'); ?></th>
                            <th><?php echo app('translator')->getFromJson('profiles.company_empm_empl_table_da'); ?></th>
                            <th><?php echo app('translator')->getFromJson('profiles.company_empm_empl_table_action'); ?></th>
                        </tr>
                        <?php $__currentLoopData = $emps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr id="101">
                                <td><?php echo e($employ->firstname); ?> <?php echo e($employ->lastname); ?></td>
                                <td><?php echo e($employ->job); ?></td>
                                <?php if(count($employ->da()->get()) >= 1): ?>
                                    <td><?php echo e(__('profiles.company_empm_empl_table_da_txt') . count($employ->da()->get()) . __('profiles.company_empm_empl_table_da_txt2')); ?></td>
                                <?php else: ?>
                                    <td> - </td>
                                <?php endif; ?>
                                <td>
                                    <?php if($employ->emplID != $emp->emplID): ?>
                                        
                                        <form action="<?php echo e(route('company.emp.rmv')); ?>" method="post">
                                            <?php echo e(csrf_field()); ?>

                                            <input type="hidden" name="emplID" value="<?php echo e($employ->emplID); ?>" />

                                            <button style="width:100%" title="<?php echo app('translator')->getFromJson('tags.company_chome_emp_rmv_title'); ?>" type="submit" class="Deletebutton btn btn-default btn-lg btn-block"><i class='fas fa-trash-alt' style="color:black"></i></button>
                                        </form>
                                        
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    <button title="<?php echo app('translator')->getFromJson('tags.company_chome_emp_add_title'); ?>" style="width:10%" onclick="window.location='<?php echo e(route('company.emp.add')); ?>'" type="button" class="Plus-Button btn btn-default btn-lg btn-block">
                        <i class='fas fa-plus' style=width:100%></i>
                    </button>
                </div><br/>
            </div><br/>
        </div>
            <div id="Schatten"class="panel-group">
                <div class="panel-heading"><p><?php echo app('translator')->getFromJson('profiles.company_chome_da_heading'); ?></p></div>
                <div id="panelbody"class="panel-body">
                    <?php if(count($das) <=0): ?>
                        <p><?php echo app('translator')->getFromJson('profiles.company_chome_da_noda'); ?></p>
                    <?php else: ?>
                        <?php $__currentLoopData = $das; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $da): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="panel panel-primary">
                                <div class="panel-heading"><?php echo app('translator')->getFromJson('profiles.company_chome_da_daname'); ?> <?php echo e($da->DAname); ?>

                                    <div id="Status"><?php echo app('translator')->getFromJson('profiles.company_chome_da_dastatus'); ?> <?php echo e($da->status); ?></div>
                                </div>
                                <div class="panel-body">
                                    <div><?php echo app('translator')->getFromJson('profiles.company_chome_da_empl'); ?>
                                        <?php if(count($da->Employee()->get()) == 1): ?>
                                            <?php echo e($da->Employee()->first()->name); ?>

                                        <?php else: ?>
                                            -
                                        <?php endif; ?></div>
                                    <div><?php echo app('translator')->getFromJson('profiles.company_chome_da_team'); ?>
                                        <?php if(count($da->Team()->get()) == 1): ?>
                                            <?php echo e($da->Team()->first()->name); ?>

                                        <?php else: ?>
                                            <?php echo app('translator')->getFromJson('profiles.company_chome_da_noteam'); ?>
                                        <?php endif; ?>    <!--//TODO InsertInfo --></div>
                                    </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>

                <button title="<?php echo app('translator')->getFromJson('tags.company_chome_da_add_title'); ?>" style="width:10%" onclick="window.location='<?php echo e(route('company.da.new')); ?>'" type="button" class="Plus-Button btn btn-default btn-lg btn-block">
                    <i class='fas fa-plus' style=width:100%></i>
                </button><br/>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appcomp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>