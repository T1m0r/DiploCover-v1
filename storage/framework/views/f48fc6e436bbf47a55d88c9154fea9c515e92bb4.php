<?php $__env->startSection('pgtitle',__('tags.pg_title_da_dashboard')); ?>
<?php $__env->startSection('head'); ?>
    <style>
        .btn-school-da-dashboard{
            background-color: #cce1ff;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
            <div class="col-sm-1 container-fluid"></div>
            <div class="col-sm-7 container-fluid">
                <div id="panelgroup"class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading"><?php echo app('translator')->getFromJson('profiles.school_da_dashboard_panel_figures_heading'); ?></div>
                        <div class="panel-body">
                            <?php if($stsc >0): ?>
                                <p><?php echo app('translator')->getFromJson('profiles.school_da_dashboard_figures_stsc'); ?> <?php echo e($stsc); ?></p>
                                <p><?php echo app('translator')->getFromJson('profiles.school_da_dashboard_figures_stsnr'); ?> <?php echo e($stsnr); ?></p>
                                <p><?php echo app('translator')->getFromJson('profiles.school_da_dashboard_figures_stswda'); ?> <?php echo e($stswda); ?></p>
                                <p><?php echo app('translator')->getFromJson('profiles.school_da_dashboard_figures_stswoda'); ?> <?php echo e($stswoda); ?></p>
                                <p><?php echo app('translator')->getFromJson('profiles.school_da_dashboard_figures_stswt'); ?> <?php echo e($stswt); ?></p>
                                <p><?php echo app('translator')->getFromJson('profiles.school_da_dashboard_figures_stswotbwda'); ?> <?php echo e($stswotbwda); ?></p>
                                <p><?php echo app('translator')->getFromJson('profiles.school_da_dashboard_figures_stswtbwoda'); ?> <?php echo e($stswtbwoda); ?></p>
                                <p><?php echo app('translator')->getFromJson('profiles.school_da_dashboard_figures_stswtada'); ?> <?php echo e($stswtada); ?></p>
                            <?php else: ?>
                                <?php echo app('translator')->getFromJson('profiles.school_da_dashboard_figures_nogradesfail'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading"><?php echo app('translator')->getFromJson('profiles.school_da_dashboard_panel_da_heading'); ?></div>
                        <div id="panelbody"class="panel-body">
                            <p><b><?php echo app('translator')->getFromJson('profiles.school_da_dashboard_panel_da_owner'); ?></b></p>
                            <?php if(count($das) < 1): ?>
                                <p><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_noda'); ?></p>
                            <?php else: ?>
                                <?php $__currentLoopData = $das; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $da): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-9">
                                                    <div><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_daname'); ?> <?php echo e($da->DAname); ?></div>
                                                </div>
                                                <div class="col-3">
                                                    <div id="ShowMore" ><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_daprog'); ?> <?php echo e($da->prog); ?> %</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-10">
                                                    <div><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_dastatus'); ?> <?php echo e($da->Phase()->get()[0]->status); ?></div>
                                                </div>
                                                <div class="col-2">

                                                    <form action="<?php echo e(route('teacher.da.rmv')); ?>" method="post" onclick="if(confirm(' <?php echo app('translator')->getFromJson('profiles.company_dashboard_da_delete_quest'); ?> ')){return true;}else{event.stopPropagation();event.preventDefault();};">
                                                        <?php echo e(csrf_field()); ?>

                                                        <input type="hidden" name="daid" value="<?php echo e($da->DAid); ?>" />
                                                        <button type="submit"  id="ShowMore" title="<?php echo app('translator')->getFromJson('tags.company_dashboard_da_delete_title'); ?>" class="btn btn-success"  ><i class="glyphicon glyphicon-trash" ></i></button>
                                                    </form>
                                                    <form action="<?php echo e(route('teacher.da.settings')); ?>" method="post" >
                                                        <?php echo e(csrf_field()); ?>

                                                        <input type="hidden" name="daid" value="<?php echo e($da->DAid); ?>" />
                                                        <button type="submit" id="ShowMore" title="<?php echo app('translator')->getFromJson('tags.company_dashboard_da_settings_title'); ?>" class="btn btn-success"  ><i class="glyphicon glyphicon-cog" ></i></button>
                                                    </form>
                                                <!--<button id="ShowMore" type="button" class="btn btn-success"><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_show_more'); ?></button>
                                       -->

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <p><?php echo app('translator')->getFromJson('profiles.teacher_da_dashboard_da_head_school'); ?> <?php echo e($da->School()->first()->schoolname); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-sm-3 col-3">
                                                    <div class="row">
                                                        <?php if(count($da->empteacher()->get())<1): ?>
                                                            <p><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_empl_noempl'); ?></p>
                                                        <?php else: ?>
                                                            <div  class="hallo"><?php echo app('translator')->getFromJson('profiles.teacher_da_dashboard_da_empl'); ?> <b><?php echo e($da->empteacher()->get()[0]->name); ?></b></div><br />
                                                            <img id="Profilbild" class="rounded mx-auto" src="<?php echo e(asset($da->empteacher()->get()[0]->prfpic)); ?>" alt="Avatar" height="50"><br />
                                                        <?php endif; ?>
                                                    </div>
                                                    <br />
                                                    <div class="row">
                                                        <?php if(count($da->empzteacher()->get())<1): ?>
                                                            <p><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_empl_noemplz'); ?></p>
                                                        <?php else: ?>
                                                            <div  class="hallo"><?php echo app('translator')->getFromJson('profiles.teacher_da_dashboard_da_emplz'); ?> <?php echo e($da->empzteacher()->get()[0]->name); ?></div><br />
                                                            <img id="Profilbild" class="rounded mx-auto" src="<?php echo e(asset($da->empzteacher()->get()[0]->prfpic)); ?>" alt="Avatar" height="50"><br />
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <p><?php echo app('translator')->getFromJson('form.company_da_changestatus_current'); ?> <?php echo e($da->Phase()->get()[0]->status); ?></p>
                                                    <?php echo e(csrf_field()); ?>

                                                    <?php echo Form::open(array('action' => 'Profile\DA\CompanyDAController@stupdate', 'method'=>'post')); ?>

                                                    <div class="form-group row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">

                                                                <p><?php echo app('translator')->getFromJson('form.company_da_changestatus_form_intro'); ?></p>
                                                                <?php echo Form::label('phase', __('form.company_da_changestatus_form_phase')); ?>


                                                                <?php echo Form::select('phase', $phases,$da->phase, ['class'=>'form-control', 'title'=>__('tags.employee_home_change_da_status')]); ?>

                                                                <?php echo Form::hidden('DAid',$da->DAid,['class'=>'form-control' ]); ?>

                                                                <br />
                                                                <?php echo Form::submit(__('form.company_da_changestatus_form_submit'), ['class'=>'btn btn-primary', 'title'=>__('tags.company_dashboard_da_change_status_title')]); ?>

                                                                <?php echo Form::close(); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <?php if($da->phase ==2): ?>
                                                        <form action="<?php echo e(route('company.da.applist')); ?>" method="post" >
                                                            <?php echo e(csrf_field()); ?>

                                                            <input type="hidden" name="daid" value="<?php echo e($da->DAid); ?>" />
                                                            <button type="submit" title="<?php echo app('translator')->getFromJson('tags.company_dashboard_da_applist_title'); ?>" class="btn btn-success"  ><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_applications'); ?></button>
                                                        </form>
                                                        <!-------//TODO Enter what to display in phases 1,2 ---->

                                                    <?php elseif($da->phase == 3): ?>
                                                    <!-------//TODO Enter what to display in phase 3 ---->
                                                        <?php if(($da->teamID == null or $da->teamID == "") and ($da->sID == null or $da->sID == "")): ?>
                                                            <p><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_noteam'); ?></p>
                                                        <?php else: ?>
                                                            <?php if(count($da->team()->get()) ==1): ?>
                                                                <?php $__currentLoopData = $da->team()->first()->members()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <div class="col-sm-2">
                                                                        <div  class="hallo"><?php echo e($member->name); ?></div><br />
                                                                        <img id="Profilbild" src="<?php echo e(asset($member->stprof()->first()->profpic)); ?>" alt="Avatar" height="50"><br />
                                                                        <div class="hallo"> E-mail: <?php echo e($member->email); ?></div>
                                                                    </div>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <form action="<?php echo e(route('company.da.rmv.team')); ?>" method="post" onclick="if(confirm('Are you sure you want to remove this team form the DA???')){return true;}else{event.stopPropagation();event.preventDefault();};">
                                                                    <?php echo e(csrf_field()); ?>

                                                                    <input type="hidden" name="daid" value="<?php echo e($da->DAid); ?>" />
                                                                    <button id="ablehnen" type="submit" class="hallo btn btn-success"  ><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_tm_rmv'); ?></button>
                                                                </form>
                                                            <?php endif; ?>
                                                            <?php if(count($da->Teacher()->get())==1): ?>
                                                                <div class="col-sm-3">
                                                                    <div  class="hallo"><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_teach'); ?> <?php echo e($da->Teacher()->get()[0]->name); ?></div><br />
                                                                    <img id="Profilbild"src="<?php echo e(asset($da->Teacher()->first()->prfpic)); ?>" alt="Avatar" height="50"><br />
                                                                </div>
                                                            <?php else: ?>
                                                                <p><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_teach_noteach'); ?></p>
                                                            <?php endif; ?>


                                                        <!----//TODO Need to enter Team info Here !!!!!!!!!!!!!!!---->

                                                        <?php endif; ?>
                                                    <?php else: ?>
                                                        <?php if(($da->teamID == null or $da->teamID == "") and ($da->sID == null or $da->sID == "")): ?>
                                                            <p><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_noteam'); ?></p>
                                                        <?php else: ?>
                                                            <div class="col-sm-3">
                                                                <?php if(count($da->Teacher()->get())==1): ?>
                                                                    <div  class="hallo"><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_teach'); ?> <?php echo e($da->Teacher()->get()[0]->name); ?></div><br />
                                                                    <img id="Profilbild"src="<?php echo e(asset($da->Teacher()->get()[0]->profpic)); ?>" alt="Avatar" height="50"><br />
                                                                <?php else: ?>
                                                                    <p><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_teach_noteach'); ?></p>
                                                                <?php endif; ?>
                                                            </div>

                                                            <!----//TODO Need to enter Team info Here !!!!!!!!!!!!!!!---->

                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <button onclick="location.href ='/teacher/da/new';" style="width:10%" id="Erstell_Buttons" type="button" class="Plus-Button btn btn-default btn-lg btn-block">
                                <i class='fas fa-plus' style="width:100%"></i>
                            </button>
                            <br />
                            <p><b><?php echo app('translator')->getFromJson('profiles.school_da_dashboard_panel_da_info'); ?></b></p>
                            <?php if(count($tchdas)>0): ?>
                                <?php $__currentLoopData = $tchdas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tchda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $__currentLoopData = $tchda->DA()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $da): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <?php echo e($da->DAname); ?>

                                            </div>
                                            <div class="panel-body">
                                                <?php if(count($da->teacher()->get()) == 1): ?>
                                                    <div><?php echo app('translator')->getFromJson('profiles.school_da_dashboard_da_teach'); ?> <?php echo e($da->teacher()->first()->name); ?></div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <div class="panel-heading"></div>
                                <div class="panel-body">
                                    <p><?php echo app('translator')->getFromJson('profiles.school_da_dashboard_da_noda'); ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appschool', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>