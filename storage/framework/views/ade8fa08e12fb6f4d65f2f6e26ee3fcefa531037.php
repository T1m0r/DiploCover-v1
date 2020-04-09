<?php $__env->startSection('pgtitle',__('tags.pg_title_teach_profile')); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-sm-7 container-fluid"><br/>
        <img id="Bild" title="Profile" src="<?php echo e(asset($tch->prfpic)); ?>" alt="Avatar" style="width:20%"><br/>
        <div class="center"><h1><?php echo e($tch->name); ?></h1></div><br/>
        <div class="center"><h1><?php echo e($tch->school()->first()->schoolname); ?></h1></div><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><h4><?php echo app('translator')->getFromJson('profiles.employee_teacher_profile_abme'); ?></h4></div>
            <div class="panel-body">
                <div title="Information about me!" class="AboutMe">
                    <p><?php echo e($tch->abme); ?></p>
                </div>
            </div>
        </div><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><h4><?php echo app('translator')->getFromJson('profiles.employee_teacher_profile_contact'); ?></h4></div>
            <div class="panel-body">
                <div class="ContactInfo">
                    <form action="/action_page.php">
                        <label class="fa fa-envelope" for="E-Mail"> <?php echo app('translator')->getFromJson('profiles.employee_teacher_profile_contact_email'); ?> </label>
                        <p><?php echo e($tch->email); ?></p>
                        <br/><label class="fas fa-address-book" for="Phone Number"> <?php echo app('translator')->getFromJson('profiles.employee_teacher_profile_contact_phonenumber'); ?> </label>
                        <p><?php echo e($tch->phonenumber); ?></p>
                    </form>
                </div>
            </div>
        </div><br/>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appemp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>