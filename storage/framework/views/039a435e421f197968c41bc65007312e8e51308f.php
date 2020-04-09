<?php $__env->startSection('head'); ?>

    <style>
        body{
            font-family: "Times New Roman", Times, serif;}

        #Profilfeld{
            webkit-box-shadow: 30px 32px 90px -11px rgba(99,125,116,0.75);
            moz-box-shadow: 30px 32px 90px -11px rgba(99,125,116,0.75);
            box-shadow: 30px 32px 90px -11px rgba(99,125,116,0.75);
            background-color:#73e861}
        #About_Me_Seite{
            webkit-box-shadow: 30px 32px 90px -11px rgba(99,125,116,0.75);
            moz-box-shadow: 30px 32px 90px -11px rgba(99,125,116,0.75);
            box-shadow: 30px 32px 90px -11px rgba(99,125,116,0.75);
            background-color: #45c1bf}
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <br />
        <div class="row">
            <div class="col-md-1 container-fluid"></div>
            <div id="Profilfeld" class="col-md-2 container-fluid">
                <br />
                <img src="<?php echo e(asset($st_prf->profpic)); ?>" class="rounded-circle" style="margin-left: 2em; height: 12em; width: 12em;">
                <br />
                <h1><?php echo e($st->name); ?></h1>
                <h4><?php echo e($st_prf->Stschool); ?></h4>
                <br />
                <h2>Kontaktinfo</h2>
                <h4>Email: <?php echo e($st->email); ?></h4>
                <?php if($team ==null): ?>
                    <h4>Team: No Team</h4>
                <?php else: ?>
                    <h4>Team: <a href="/empl/team/<?php echo e(urlencode($team->teamID)); ?>/profile"><?php echo e($team->tname); ?></a></h4>
                <?php endif; ?>
                <?php if($st->phonenumber != null and $st->phonenumber != ''): ?>
                    <h4>Tel: <?php echo e($st->phonenumber); ?></h4>
                <?php endif; ?>

                <?php if($st_prf->intressts != null and $st_prf->intressts != ''): ?>
                    <h4>Intrests: <?php echo e($st_prf->intressts); ?></h4>
            <?php endif; ?>
            </div>
            <div id="About_Me_Seite" class="col-md-8 container-fluid">
                <?php if($da == null): ?>
                    <h4>Has no DA yet</h4>
                <?php else: ?>
                    <h4><?php echo e($da->name); ?></h4>
                <?php endif; ?>
                <h3>About Me</h3>
                <h5><?php echo e($st_prf->aboutme); ?></h5>
                <h3>Dokumente:</h3>
                <?php if($st_prf->lebpath != "" or $st_prf->lebpath != null): ?>
                    <h5>Lebenslauf:</h5>
                    <?php if(pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='docx'): ?>
                        <a href="<?php echo e(asset($st_prf->lebpath)); ?>">Lebenslauf</a>
                    <?php elseif(pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='pdf'): ?>
                        <embed src="<?php echo e(asset($st_prf->lebpath)); ?>"  style ="height:40em; width: 60em;"/>
                    <?php elseif(pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='png' or pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='jpeg' or pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='jpg' or pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='gif' or pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='svg'): ?>
                        <img src="<?php echo e(asset($st_prf->lebpath)); ?>"  style="width: 60em;"/>
                    <?php else: ?>
                        <p class="error"> There has been an erro with this image Sry :( </p>
                    <?php endif; ?>
                    
                <?php endif; ?>
                <?php if($st_prf->zeugpath != "" or $st_prf->zeugpath != null): ?>
                    <h5>Zeugnis:</h5>
                    <?php if(pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='docx'): ?>
                        <a href="<?php echo e(asset($st_prf->zeugpath)); ?>">Zeugnis</a>
                    <?php elseif(pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='pdf'): ?>
                        <embed src="<?php echo e(asset($st_prf->zeugpath)); ?>"  style ="height:40em; width: 60em;"/>
                    <?php elseif(pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='png' or pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='jpeg' or pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='jpg' or pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='gif' or pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='svg'): ?>
                        <img src="<?php echo e(asset($st_prf->zeugpath)); ?>" style="width: 60em;"/>
                    <?php else: ?>
                        <p class="error"> There has been an erro with this image Sry :( </p>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if($st_prf->otherpath1 != "" or $st_prf->otherpath1 != null): ?>
                    <h5>Anderes:</h5>
                    <?php if(pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='docx'): ?>
                        <a href="<?php echo e(asset($st_prf->otherpath1)); ?>"><?php echo e(pathinfo($st_prf->otherpath1, PATHINFO_BASENAME)); ?></a>
                    <?php elseif(pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='pdf'): ?>
                        <embed src="<?php echo e(asset($st_prf->otherpath1)); ?>"  style ="height:40em; width: 60em;"/>
                    <?php elseif(pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='png' or pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='jpeg' or pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='jpg' or pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='gif' or pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='svg'): ?>
                        <img src="<?php echo e(asset($st_prf->otherpath1)); ?>" style="width: 60em;"/>
                    <?php else: ?>
                        <p class="error"> There has been an erro with this image Sry :( </p>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if($st_prf->otherpath2 != "" or $st_prf->otherpath2 != null): ?>
                    <?php if(pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='docx'): ?>
                        <a href="<?php echo e(asset($st_prf->otherpath2)); ?>"><?php echo e(pathinfo($st_prf->otherpath2, PATHINFO_FILENAME)); ?></a>

                    <?php elseif(pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='pdf'): ?>
                        <embed src="<?php echo e(asset($st_prf->otherpath2)); ?>"  style ="height:40em; width: 60em; "/>
                    <?php elseif(pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='png' or pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='jpeg' or pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='jpg' or pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='gif' or pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='svg'): ?>
                        <img src="<?php echo e(asset($st_prf->otherpath2)); ?>" style="width: 60em;"/>
                    <?php else: ?>
                        <p class="error"> There has been an erro with this image Sry :( </p>
                    <?php endif; ?>
                <?php endif; ?>
                <div class="col-md-1 container-fluid"></div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.appemp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>