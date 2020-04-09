<?php $__env->startSection('pgtitle',__('tags.pg_title_employee_applist')); ?>
<?php $__env->startSection('head'); ?>
    <style>

    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-sm-1 container-fluid"></div>
    <div class="col-sm-7 container-fluid"><br/>
        <div class="center"><h1>Bewerbungsliste</h1></div><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"></div>
            <div id="panelbody"class="panel-body">
                <?php $__currentLoopData = $appls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <!--<button id="ShowMore" type="button" class="btn btn-success">Zur Gruppe</button>-->

                            <div><?php echo app('translator')->getFromJson('profiles.company_applist_panel_school'); ?> <a style="color: whitesmoke" href="/employee/school/<?php echo e($apply->Student()->first()->school()->first()->schoolID); ?>/profile"><?php echo e($apply->Student()->first()->school()->first()->schoolname); ?></a></div>
                            <div><?php echo app('translator')->getFromJson('profiles.company_applist_panel_grade'); ?> <?php echo e($apply->Student()->first()->gradename()->first()->name); ?></div>
                            <div><?php echo app('translator')->getFromJson('profiles.company_applist_panel_school'); ?> <a style="color: whitesmoke" href="/employee/team/<?php echo e($apply->Student()->first()->team()->first()->teamID); ?>/profile"><?php echo e($apply->Student()->first()->team()->first()->tname); ?></a></div>
                        </div>
                        <div class="panel-body">
                            <div class="col-sm-2">
                                <div  class="hallo"><?php echo app('translator')->getFromJson('profiles.company_applist_panel_teach'); ?></div><br />
                                <?php if(count($apply->Team()->first()->teacher()->get()) == 1): ?>
                                    <img id="Profilbild"src="<?php echo e(asset($apply->Team()->first()->teacher()->first()->prfpic)); ?>" alt="Avatar" height="50"><br />
                                    <div class="hallo"><?php echo e($apply->Team()->first()->teacher()->first()->name); ?></div>
                                    <div class="hallo"><?php echo e($apply->Team()->first()->teacher()->first()->email); ?></div>
                                <?php else: ?>
                                    <p><?php echo app('translator')->getFromJson('profiles.company_applist_panel_noteach'); ?></p>
                                <?php endif; ?>
                            </div>
                            <?php if(count($apply->Team()->first()->members()->get()) > 5): ?>
                                <div class="error"><?php echo app('translator')->getFromJson('profiles.company_applist_panel_team_invalide_fail'); ?></div>
                            <?php else: ?>
                                <?php $__currentLoopData = $apply->Team()->first()->members()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <div class="col-sm-2">
                                        <div  class="hallo"><a href="/employee/student/<?php echo e($member->sID); ?>/profile"><?php echo e($member->name); ?></a></div><br />
                                        <img id="Profilbild" src="<?php echo e(asset($member->stprof()->first()->profpic)); ?>" alt="Avatar" height="50"><br />
                                        <div class="hallo"><?php echo app('translator')->getFromJson('profiles.company_applist_panel_email'); ?> <?php echo e($member->email); ?></div>
                                    </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>


                            <div class="col-sm-3"></div>
                            <!--<div class="col-sm-3"><button id="ablehnen" type="button" class=" hallo btn btn-success">Bewerber ablehnen</button></div>-->
                            <?php if(($da->teamID == null or $da->teamID =="") and($da->sID == null or $da->sID == "")): ?>
                                <form action="<?php echo e(route('company.da.add.team')); ?>" method="post" onclick="if(confirm(' <?php echo app('translator')->getFromJson('profiles.emp_da_add_team_question'); ?> ')){return true;}else{event.stopPropagation();event.preventDefault();};">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="daid" value="<?php echo e($da->DAid); ?>" />
                                    <input type="hidden" name="teamid" value="<?php echo e($apply->teamID); ?>" />
                                    <div class="col-sm-3">
                                        <button id="annehemen" type="submit" class=" hallo btn btn-success"><?php echo app('translator')->getFromJson('profiles.company_applist_team_accept'); ?></button>
                                    </div>
                                </form>
                        <?php endif; ?>

                        <!--<div class="col-sm-3"><button id="ShowMore" type="button" class=" hallo btn btn-success">Show More</button></div>--->
                        </div>
                        <hr />
                        <div class="row">
                            <?php if($da->optfield == 1): ?>
                                <?php if($da->optfieldtitle != null): ?>
                                    <div class="col-sm-12">
                                        <div  class="hallo"><?php echo e($da->optfieldtitle); ?> :</div><br />
                                        <div class="hallo"><?php echo e($apply->optfield); ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="col-sm-12">
                                        <div  class="hallo"><?php echo e($da->optfieldtitle); ?> :</div><br />
                                        <div class="hallo"><?php echo e($apply->optfield); ?></div>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>

                        </div>
                    </div><br />
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.appemp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>