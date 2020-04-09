<?php $__env->startSection('head'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid bg-3 text-center">
    <div class="row">
        <div id="Bild1" class="col-sm-4">
            <h2>Jogge Dee Sauerkraut</h2>
            <img src="<?php echo e(asset('storage/avatar.png')); ?>" alt="Image not found" onerror="this.onerror=null;this.src='<?php echo e(asset('./storage/img/avatar.png')); ?>';" />
            <form>
                <textarea>Some text...</textarea>
            </form>
        </div>

        <div id="Bild2" class="col-sm-4">
            <h2>Miky Kröll</h2>
            <img src="<?php echo e(asset('storage/avatar.png')); ?>" alt="Image not found" onerror="this.onerror=null;this.src='<?php echo e(asset('./storage/img/avatar.png')); ?>';" />
            <form>
                <textarea>Some text...</textarea>
            </form>
        </div>

        <div id="Bild3" class="col-sm-4">
            <h2>Boran Cihan Polat</h2>
            <img src="<?php echo e(asset('storage/avatar.png')); ?>" alt="Image not found" onerror="this.onerror=null;this.src='<?php echo e(asset('./storage/img/avatar.png')); ?>';" />
            <form>
                <textarea>Some text...</textarea>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>