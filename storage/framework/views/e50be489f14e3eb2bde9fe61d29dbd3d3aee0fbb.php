<?php $__env->startSection('pgtitle',__('tags.pg_title_home')); ?>
<?php $__env->startSection('head'); ?>
    <style>
        .emp-btn-home{
            background-color: #91a5c6;
                    }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-sm-1 container-fluid"></div>
    <div class="col-sm-7 container-fluid"><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><p><?php echo app('translator')->getFromJson('profiles.employee_emphome_panel_da_heading'); ?></p></div>
            <div id="panelbody"class="panel-body">
                <?php if(count($das) ==0): ?>
                    <p><?php echo app('translator')->getFromJson('profiles.employee_emphome_da_noda'); ?></p>
                    <!--<p><?php echo app('translator')->getFromJson('profiles.employee_emphome_info'); ?></p>--->
                <?php else: ?>
                    <?php $__currentLoopData = $das; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $da): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="panel panel-primary">
                            <div class="panel-heading"><?php echo app('translator')->getFromJson('profiles.employee_emphome_da_daname'); ?> <?php echo e($da->DAname); ?></div>
                            <div id="Status"><?php echo app('translator')->getFromJson('profiles.employee_emphome_da_dastatus'); ?> <?php echo e($da->Phase()->first()->status); ?></div>
                            <div><?php echo app('translator')->getFromJson('profiles.employee_emphome_da_daprog'); ?> <?php echo e($da->prog); ?> %</div>
                            <div class="panel-body">

                                <?php if(count($da->employee()->get())<1): ?>
                                    <p><?php echo app('translator')->getFromJson('profiles.employee_emphome_da_empl_noempl'); ?></p>
                                <?php elseif(count($da->employee()->get())==1): ?>
                                    <div  class="hallo"><?php echo app('translator')->getFromJson('profiles.employee_emphome_da_empl'); ?> <?php echo e($da->employee()->first()->name); ?> | <?php echo e($da->employee()->first()->email); ?></div><br />
                                <?php else: ?>
                                    <div class="error"><?php echo app('translator')->getFromJson('profiles.employee_emphome_da_emplz_err_mult'); ?></div>
                                <?php endif; ?>
                                <?php if(count($da->employeez()->get())<1): ?>
                                    <p><?php echo app('translator')->getFromJson('profiles.employee_emphome_da_emplz_noempl'); ?></p>
                                <?php elseif(count($da->employeez()->get())==1): ?>
                                    <div  class="hallo"><?php echo app('translator')->getFromJson('profiles.employee_emphome_da_emplz'); ?> <?php echo e($da->employeez()->get()[0]->name); ?> | <?php echo e($da->employeez()->get()[0]->email); ?> </div><br />
                                <?php else: ?>
                                    <div class="error"><?php echo app('translator')->getFromJson('profiles.employee_emphome_da_empl_err_mult'); ?></div>
                                <?php endif; ?>

                                <?php if($da->phase ==2): ?>
                                    <form action="<?php echo e(route('employee.da.applist')); ?>" method="post" >
                                        <?php echo e(csrf_field()); ?>

                                        <input type="hidden" name="daid" value="<?php echo e($da->DAid); ?>" />
                                        <button type="submit" class="btn btn-success" title="<?php echo app('translator')->getFromJson('tags.employee_home_appli'); ?>" ><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_applications'); ?></button>
                                    </form>
                                    <!-------//TODO Enter what to display in phases 1,2 ---->



                                <?php elseif($da->phase == 3): ?>

                                <!-------//TODO Enter what to display in phase 3 ---->
                                    <?php if(($da->teamID == null or $da->teamID == "") and ($da->sID == null or $da->sID == "")): ?>
                                        <p><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_noteam'); ?></p>
                                    <?php else: ?>
                                        <?php if(($da->teamID == null or $da->teamID == "") and ($da->sID == null or $da->sID == "")): ?>
                                            <p><?php echo app('translator')->getFromJson('profiles.employee_emphome_da_ph3_nostud'); ?></p>
                                        <?php else: ?>
                                            <div class="col-sm-3">
                                                <?php if(count($da->Teacher()->get())==1): ?>
                                                    <div  class="hallo"><?php echo app('translator')->getFromJson('profiles.employee_emphome_da_ph3_teacher'); ?> <?php echo e($da->Teacher()->get()[0]->name); ?></div><br />
                                                    <img id="Profilbild"src="<?php echo e(asset($da->Teacher()->get()[0]->profpic)); ?>" alt="Avatar" height="50"><br />
                                                <?php else: ?>
                                                    <p><?php echo app('translator')->getFromJson('profiles.employee_emphome_da_ph3_teacher_noteacher'); ?></p>
                                                <?php endif; ?>
                                            </div>
                                            <div>Team: <?php echo e($da->Team()->first()->name); ?>

                                                <?php $__currentLoopData = $da->Team()->first()->members()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $memb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php echo e($memb->name); ?>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                            <!----//Show more Info about Team here!!!!!!!!!!!!!!!---->
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <div class="panel-body">
                                    <p><?php echo app('translator')->getFromJson('form.company_da_changestatus_current'); ?> <?php echo e($da->Phase()->get()[0]->status); ?></p>
                                    <?php echo e(csrf_field()); ?>

                                    <?php echo Form::open(array('action' => 'Profile\DA\EmployeeDAController@stupdate', 'method'=>'post')); ?>

                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <p><?php echo app('translator')->getFromJson('form.company_da_changestatus_form_intro'); ?></p>
                                                <?php echo Form::label('phase', __('form.company_da_changestatus_form_phase')); ?>


                                                <?php echo Form::select('phase', $phases,$da->phase, ['class'=>'form-control', 'title'=>__('tags.employee_home_change_da_status')]); ?>

                                                <?php echo Form::hidden('DAid',$da->DAid,['class'=>'form-control' ]); ?>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <?php echo Form::submit(__('form.company_da_changestatus_form_submit'), ['class'=>'btn btn-primary', 'title'=>__('tags.employee_home_change_da_status_title')]); ?>

                                    </div>
                                    <?php echo Form::close(); ?>



                                    <form action="<?php echo e(route('employee.da.settings')); ?>" method="post" >
                                        <?php echo e(csrf_field()); ?>

                                        <input type="hidden" name="daid" value="<?php echo e($da->DAid); ?>" />
                                        <button type="submit" title="<?php echo app('translator')->getFromJson('tags.employee_home_da_settings'); ?>" class="btn btn-success"  ><i class="glyphicon glyphicon-cog" ></i></button>
                                    </form>
                                    <form action="<?php echo e(route('employee.da.rmv')); ?>" method="post" onclick="if(confirm(' <?php echo e(trans('profiles.emp_da_rmv_question')); ?>')){return true;}else{event.stopPropagation();event.preventDefault();};">
                                        <?php echo e(csrf_field()); ?>

                                        <input type="hidden" name="daid" value="<?php echo e($da->DAid); ?>" />
                                        <button type="submit" title="<?php echo app('translator')->getFromJson('tags.employee_home_da_del'); ?>" class="btn btn-success"  ><i class="glyphicon glyphicon-trash" ></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <button onclick="location.href ='/employee/da/new';" title=" <?php echo app('translator')->getFromJson('tags.employee_home_da_new'); ?>" id="Erstell_Buttons" type="button" class="Plus-Button btn btn-default btn-lg btn-block">
                    <i class='fas fa-plus' style=width:100%></i>
                </button>
                <br/>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appemp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>