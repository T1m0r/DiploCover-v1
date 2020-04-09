<?php $__env->startSection('content'); ?>
    <div class="col-sm-7 container-fluid"><br/>
        <img id="Bild" title="Profile" src="<?php echo e(asset($emp->prfpic)); ?>" alt="Avatar" style="width:20%"><br/>
        <div class="center"><h1><?php echo e($emp->name); ?></h1></div><br/>
        <?php if(count($emp->company()->get()) == 1): ?>
            <div class="center"><h1>Mitarbeiter bei <?php echo e($emp->company()->first()->compname); ?></h1></div><br/>
        <?php endif; ?>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><h4><?php echo app('translator')->getFromJson('profiles.employee_employee_profile_abme'); ?></h4></div>
            <div class="panel-body">

                <div title="Information about me!" class="AboutMe">
                    <?php if($emp->abme != null and $emp->abme != ""): ?>
                        <p><?php echo e($emp->abme); ?></p>
                    <?php else: ?>
                        <p><?php echo app('translator')->getFromJson('profiles.employee_employee_profile_noabme'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><h4><?php echo app('translator')->getFromJson('profiles.employee_employee_profile_contact'); ?></h4></div>
            <div class="panel-body">
                <div class="ContactInfo">
                    <form action="/action_page.php">
                        <label class="fa fa-envelope" for="E-Mail"><?php echo app('translator')->getFromJson('profiles.employee_employee_profile_mail'); ?></label>
                        <p><?php echo e($emp->email); ?></p>
                        <?php if($emp->phonenumber != null and $emp->phonenumber != ""): ?>
                            <br/><label class="fas fa-address-book" for="Phone Number"><?php echo app('translator')->getFromJson('profiles.employee_employee_profile_phone'); ?></label>
                            <p><?php echo e($emp->phonenumber); ?></p>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div><br/>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appemp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>