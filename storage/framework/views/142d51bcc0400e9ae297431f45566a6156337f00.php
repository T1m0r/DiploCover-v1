<?php $__env->startSection('head'); ?>

    <style>
        body{
            background-color: powderblue;
        }
    </style>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4" style="position:relative; height:auto; padding-left: 3em; padding-bottom: 4em; padding-top: 2em; background-color:grey;">
            <img src="<?php echo e(asset($st_prf->profpic)); ?>" class="rounded-circle" style="margin-left: 2em; height: 12em;">
            <h1><?php echo e($st->name); ?></h1>
            <h4><?php echo e($st_prf->Stschool); ?></h4>
            <h2>Kontaktinfo</h2>
            <h4>Email: <?php echo e($st->email); ?></h4>
            <h4>Tel: <?php echo e($st->phonenumber); ?></h4>
        </div>
        <div class="col-md-8" style="positon:relative; height:auto; padding-top:2em; background-color:rgba(255, 99, 0, 0.13); padding-bottom=5em;">
            <h3>About me</h3>
            <h5><?php echo e($st_prf->aboutme); ?></h5>
            <h3>Documents</h3>
            <?php if($st_prf->lebpath != "" or $st_prf->lebpath != null): ?>
                <h5>Lebenslauf:</h5>
                <?php if(pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='docx'): ?>
                    <a href="<?php echo e(asset($st_prf->lebpath)); ?>">Lebenslauf</a>
                <?php elseif(pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='pdf'): ?>
                    <embed src="<?php echo e(asset($st_prf->lebpath)); ?>"  style ="height:auto;"/>
                <?php elseif(pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='png' or pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='jpeg' or pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='jpg' or pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='gif' or pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='svg'): ?>
                    <img src="<?php echo e(asset($st_prf->lebpath)); ?>" />
                <?php else: ?>
                    <p class="error"> There has been an erro with this image Sry :( </p>
                <?php endif; ?>

            <?php endif; ?>
            <?php if($st_prf->zeugpath != "" or $st_prf->zeugpath != null): ?>
                <h5>Zeugnis:</h5>
                <?php if(pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='docx'): ?>
                    <a href="<?php echo e(asset($st_prf->zeugpath)); ?>">Zeugnis</a>
                <?php elseif(pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='pdf'): ?>
                    <embed src="<?php echo e(asset($st_prf->zeugpath)); ?>"  style ="height:auto;"/>
                <?php elseif(pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='png' or pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='jpeg' or pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='jpg' or pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='gif' or pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='svg'): ?>
                    <img src="<?php echo e(asset($st_prf->zeugpath)); ?>" />
                <?php else: ?>
                    <p class="error"> There has been an erro with this image Sry :( </p>
                <?php endif; ?>
            <?php endif; ?>
            <?php if($st_prf->otherpath1 != "" or $st_prf->otherpath1 != null): ?>
                <h5>Anderes:</h5>
                <?php if(pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='docx'): ?>
                    <a href="<?php echo e(asset($st_prf->otherpath1)); ?>"><?php echo e(pathinfo($st_prf->otherpath1, PATHINFO_BASENAME)); ?></a>
                <?php elseif(pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='pdf'): ?>
                    <embed src="<?php echo e(asset($st_prf->otherpath1)); ?>"  style ="height:auto;"/>
                <?php elseif(pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='png' or pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='jpeg' or pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='jpg' or pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='gif' or pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='svg'): ?>
                    <img src="<?php echo e(asset($st_prf->otherpath1)); ?>" />
                <?php else: ?>
                    <p class="error"> There has been an erro with this image Sry :( </p>
                <?php endif; ?>
            <?php endif; ?>
            <?php if($st_prf->otherpath2 != "" or $st_prf->otherpath2 != null): ?>
                <?php if(pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='docx'): ?>
                    <a href="<?php echo e(asset($st_prf->otherpath2)); ?>"><?php echo e(pathinfo($st_prf->otherpath2, PATHINFO_FILENAME)); ?></a>

                <?php elseif(pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='pdf'): ?>
                    <embed src="<?php echo e(asset($st_prf->otherpath2)); ?>"  style ="height:auto;"/>
                <?php elseif(pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='png' or pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='jpeg' or pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='jpg' or pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='gif' or pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='svg'): ?>
                    <img src="<?php echo e(asset($st_prf->otherpath2)); ?>" />
                <?php else: ?>
                    <p class="error"> There has been an erro with this image Sry :( </p>
                <?php endif; ?>
            <?php endif; ?>
            <h3>Intressts</h3>
            <h5><?php echo e($st_prf->intressts); ?></h5>
        </div>
        <div class="clo-md-12">
            <div class="row">

            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>