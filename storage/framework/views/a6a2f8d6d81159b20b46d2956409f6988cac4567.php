<?php $__env->startSection('pgtitle',__('tags.pg_title_comp_profile')); ?>
<?php $__env->startSection('content'); ?>

    <div class="col-sm-7 container-fluid"><br/>
        <img id="Bild" src="<?php echo e(asset($comp->profpic)); ?>" alt="Logo" style="width:20%"><br/>
        <div class="center"><h1><?php echo e($comp->compname); ?></h1></div><br/>
        <?php if($comp->prevtxt != null and $comp->prevtxt != ""): ?>
            <div id="Schatten"class="panel-group">
                <div class="panel-heading"><h4><?php echo app('translator')->getFromJson('profiles.employee_company_profile_compdesc'); ?></h4></div>
                <div class="panel-body">
                    <div title="Information about me!" class="AboutMe">
                        <p><?php echo e($comp->prevtxt); ?></p>
                    </div>
                </div>
            </div><br/>
        <?php endif; ?>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><h4><?php echo app('translator')->getFromJson('profiles.employee_company_profile_contact'); ?></h4></div>
            <div class="panel-body">
                <div class="ContactInfo">
                    <form action="/action_page.php">
                        <?php if(($comp->contmail == null or $comp->contmail == "") and ($comp->website == null or $comp->website == "")): ?>
                            <p><?php echo app('translator')->getFromJson('profiles.employee_company_profile_no_contact'); ?></p>
                        <?php else: ?>
                            <?php if($comp->contmail != null and $comp->contmail != ""): ?>
                                <label class="fa fa-envelope" for="E-Mail"> <?php echo app('translator')->getFromJson('profiles.employee_comnpany_profile_contact_email'); ?> <?php echo e($comp->contmail); ?></label>
                            <?php endif; ?>
                            <?php if($comp->website != null and $comp->website != ""): ?>
                                <br/><label 	class="fas fa-globe" for="Website"> <?php echo app('translator')->getFromJson('profiles.employee_company_profile_contact_website'); ?> <?php echo e($comp->website); ?></label>
                            <?php endif; ?>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div><br/>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appemp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>