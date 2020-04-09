<?php $__env->startSection('content'); ?>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-md-3 ">
            <div class="list-group ">
                <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action">Profile Managment</a>
                <a href="#" class="list-group-item list-group-item-action">Password</a>
                <a href="#" class="list-group-item list-group-item-action">Team</a>
                <!--<a href="#" class="list-group-item list-group-item-action">Dealer</a>
                <a href="#" class="list-group-item list-group-item-action">Media</a>
                <a href="#" class="list-group-item list-group-item-action">Post</a>
                <a href="#" class="list-group-item list-group-item-action">Category</a>
                <a href="#" class="list-group-item list-group-item-action">New</a>
                <a href="#" class="list-group-item list-group-item-action">Comments</a>
                <a href="#" class="list-group-item list-group-item-action">Appearance</a>
                <a href="#" class="list-group-item list-group-item-action">Reports</a>
                <a href="#" class="list-group-item list-group-item-action">Settings</a>-->


            </div>
        </div>
        <?php if($st->teamID != null or $st->teamID != ""): ?>



        <?php else: ?>

        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>