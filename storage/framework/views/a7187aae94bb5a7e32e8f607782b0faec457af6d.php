<?php $__env->startSection('pgtitle',__('tags.pg_title_school_profile')); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-sm-7 container-fluid"><br/>
        <img id="Bild" src="<?php echo e(asset($sch->prfpic)); ?>" alt="Logo" style="width:50%"><br/>
        <div class="center"><h1><?php echo e($sch->schoolname); ?></h1></div><br/>

        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><h4><?php echo app('translator')->getFromJson('profiles.employee_school_profile_contact'); ?></h4></div>
            <div class="panel-body">
                <div class="ContactInfo">
                    <form action="/action_page.php">
                        <label class="fa fa-envelope" for="E-Mail"> <?php echo app('translator')->getFromJson('profiles.employee_school_profile_contact_email'); ?> </label>
                        <?php if($sch->contmail != null and $sch->contmail != ""): ?>
                            <p><?php echo e($sch->contmail); ?></p>
                        <?php else: ?>
                            <p><?php echo app('translator')->getFromJson('profiles.employee_school_profile_contact_no_email'); ?></p>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div><br/>
    </div>
    <div class="col-sm-1 container-fluid"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appemp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>