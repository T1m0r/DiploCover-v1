<?php $__env->startSection('head'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php if($da->privacy <4): ?>
        <div class="col-sm-6 container-fluid">
            <br/>
            <div class="center">
                    <?php if($da->privacy >2 ): ?>
                        <h1><?php echo app('translator')->getFromJson('profiles.student_sthome_da_priv'); ?></h1>
                    <?php else: ?>
                        <h1><?php echo e($da->DAname); ?></h1>
                    <?php endif; ?>
            </div>
            <br/>
            <div id="Schatten"class="panel-group">
                
                <div class="panel-body">
                    <?php if(count($da->employee()->get())==1): ?>
                        <h4><?php echo app('translator')->getFromJson('profiles.student_da_stinfo_empl'); ?> <?php echo e($da->employee()->first()->name); ?> | <?php echo e($da->employee()->first()->email); ?></h4>
                        <br/>
                    <?php endif; ?>

                    <h4>
                        <p><?php echo app('translator')->getFromJson('profiles.sutdent_stinfo_da_accepted_tsize'); ?> <?php echo e($da->size); ?> <?php echo app('translator')->getFromJson('profiles.sutdent_stinfo_da_accepted_tsize_st'); ?></p>
                    </h4>
                    <br/>
                    <div title="Information about me!" class="AboutMe">
                        <p>
                            <h3><?php echo e($da->DAdesc); ?></h3>
                        </p>
                    </div>
                </div>
                <?php if(isset($apl)): ?>
                    <?php if($apl == 1): ?>
                        <p><?php echo app('translator')->getFromJson('profiles.sutdent_stinfo_da_tapplied'); ?></p>
                    <?php elseif($apl == 0): ?>
                        <form action="<?php echo e(route('student.da.apply')); ?>" method="post" >
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="daid" value="<?php echo e($da->DAid); ?>" />
                            <?php if($da->optfield == 1): ?>
                                <?php if($da->optfieldtitle == null or $da->optfieldtitle == ""): ?>
                                    <textarea  name="optionalfield" cols="60" rows="6" placeholder="<?php echo app('translator')->getFromJson('form.stinfo.optfield_def'); ?>" required ></textarea>
                                <?php else: ?>
                                    <textarea name="optionalfield"cols="60" rows="6" placeholder="<?php echo e($da->optfieldtitle); ?>" required ></textarea>
                                <?php endif; ?>
                            <?php endif; ?>
                            <button type="submit" title="<?php echo app('translator')->getFromJson('tags.student_da_stinfo_apply_title'); ?>" class="Bewerbenbutton btn btn-default btn-lg btn-block"  ><?php echo app('translator')->getFromJson('profiles.sutdent_stinfo_da_btn_tapply'); ?></button>
                        </form>
                    <?php else: ?>
                        <p><?php echo app('translator')->getFromJson('profiles.unkownERORR'); ?></p>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-sm-3 container-fluid">
            <div id="Schatten"class="panel-group">
                <div class="panel-heading">
                    <h4><?php echo app('translator')->getFromJson('profiles.student_da_stinfo_contactinf'); ?></h4>
                </div>
                <div class="panel-body">
                    <div class="ContactInfo">
                        <img id="Bild" title="Profile" src="<?php echo e(asset($da->company()->first()->profpic)); ?>" alt="Avatar" style="width:50%">
                        <br/>
                        <div class="center">
                            <h2>
                                <div>
                                    <?php echo e($da->company()->first()->compname); ?>

                                </div>
                            </h2>
                        </div>
                        <br/>
                        <label class="fa fa-envelope" for="E-Mail"> E-Mail:</label>
                        <p><?php echo e($da->company()->first()->email); ?></p>
                        <br/>
                        <?php if($da->company()->first()->website != null and $da->company()->first()->website != ""): ?>
                            <label class="fas fa-globe" for="Website"> Website:</label>
                            <p><?php echo e($da->company()->first()->website); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div><br/>
        </div>
        <div class="col-sm-1"></div>
    <?php else: ?>
        <div class="fail">
            <?php echo app('translator')->getFromJson('profiles.student_stinfo_da_session_fail'); ?>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>