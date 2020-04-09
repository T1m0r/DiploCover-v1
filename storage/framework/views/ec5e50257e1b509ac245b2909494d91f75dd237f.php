<?php $__env->startSection('head'); ?>
    <style>
        button[id="Buttons"]{
            width: auto;
            background-color: #7C7C7C;
            color: white;
            padding: 5px 10px;
            margin:  5px 0;
            border: none;
            border-radius: 50px;
            cursor: pointer;}
        button[id="Buttons"]:hover {
            background-color: #676767;}
        button[id="Erstell_Buttons"]{
            width:auto;
            background-color: white;
            color: black;
            padding: auto;
            margin: auto;
            border: none;
            border-radius: 100px;
            cursor: pointer;}
        #panelbody{
            webkit-box-shadow: 30px 32px 90px -11px rgba(99,125,116,0.75);
            moz-box-shadow: 30px 32px 90px -11px rgba(99,125,116,0.75);
            box-shadow: 30px 32px 90px -11px rgba(99,125,116,0.75);
            background-color:#ffffff}
        #Profilbild{
            border-radius: 175px;
            display:block;
            margin:0 auto;
            box-shadow: 1px 2px 5px #000000;}
        #ablehnen{
            width: auto;
            background-color: #e91616;
            color: white;
            padding: 5px 10px;
            margin:  5px 0;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            float:right;}
        #ShowMore{
            width: auto;
            background-color: #7C7C7C;
            color: white;
            padding: 5px 10px;
            margin:  5px 0;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            float:right;}
        .hallo{
            text-align: center;}
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <br />
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10 container-fluid">
            <div class="hallo"><h1><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_heading'); ?></h1></div><br />
            <div id="panelgroup"class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading"><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_panel_da_heading'); ?></div>
                    <div id="panelbody"class="panel-body">
                        <?php if(count($das) < 1): ?>
                            <p><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_noda'); ?></p>
                        <?php else: ?>
                            <?php $__currentLoopData = $das; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $da): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <form action="<?php echo e(route('company.da.settings')); ?>" method="post" >
                                            <?php echo e(csrf_field()); ?>

                                            <input type="hidden" name="daid" value="<?php echo e($da->DAid); ?>" />
                                            <button type="submit" class="btn btn-success"  ><i class="glyphicon glyphicon-cog" ></i></button>
                                        </form>
                                        <div><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_daname'); ?> <?php echo e($da->DAname); ?></div>
                                        <div><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_dastatus'); ?> <?php echo e($da->Phase()->get()[0]->status); ?></div>
                                        <div><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_daprog'); ?> <?php echo e($da->prog); ?> %</div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-sm-3">
                                            <?php if(count($da->employee()->get())<1): ?>
                                                <p><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_empl_noempl'); ?></p>
                                             <?php else: ?>
                                                <div  class="hallo"><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_empl'); ?> <?php echo e($da->employee()->get()[0]->name); ?></div><br />
                                                <img id="Profilbild"src="<?php echo e(asset($da->employee()->get()[0]->prfpic)); ?>" alt="Avatar" height="50"><br />
                                            <?php endif; ?>
                                        </div>
                                        <?php if($da->phase ==2): ?>
                                            <form action="<?php echo e(route('company.da.applist')); ?>" method="post" >
                                                <?php echo e(csrf_field()); ?>

                                                <input type="hidden" name="daid" value="<?php echo e($da->DAid); ?>" />
                                                <button type="submit" class="btn btn-success"  ><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_applications'); ?></button>
                                            </form>
                                            <!-------//TODO Enter what to display in phases 1,2 ---->



                                        <?php elseif($da->phase == 3): ?>
                                            <!-------//TODO Enter what to display in phase 3 ---->
                                                <?php if(($da->teamID == null or $da->teamID == "") and ($da->sID == null or $da->sID == "")): ?>
                                                    <p><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_noteam'); ?></p>
                                                <?php else: ?>
                                                    <?php if(count($da->team()->get()) ==1): ?>
                                                        <?php $__currentLoopData = $da->team()->first()->members()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="col-sm-2">
                                                                <div  class="hallo"><?php echo e($member->name); ?></div><br />
                                                                <img id="Profilbild" src="<?php echo e(asset($member->stprof()->first()->profpic)); ?>" alt="Avatar" height="50"><br />
                                                                <div class="hallo"> E-mail: <?php echo e($member->email); ?></div>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <form action="<?php echo e(route('company.da.rmv.team')); ?>" method="post" onclick="if(confirm('Are you sure you want to remove this team form the DA???')){return true;}else{event.stopPropagation();event.preventDefault();};">
                                                            <?php echo e(csrf_field()); ?>

                                                            <input type="hidden" name="daid" value="<?php echo e($da->DAid); ?>" />
                                                            <button id="ablehnen" type="submit" class="hallo btn btn-success"  ><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_tm_rmv'); ?></button>
                                                        </form>
                                                    <?php endif; ?>
                                                    <?php if(count($da->Teacher()->get())==1): ?>
                                                        <div class="col-sm-3">
                                                            <div  class="hallo"><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_teach'); ?> <?php echo e($da->Teacher()->get()[0]->name); ?></div><br />
                                                            <img id="Profilbild"src="<?php echo e(asset($da->Teacher()->first()->prfpic)); ?>" alt="Avatar" height="50"><br />
                                                        </div>
                                                    <?php else: ?>
                                                        <p><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_teach_noteach'); ?></p>
                                                    <?php endif; ?>


                                                <!----//TODO Need to enter Team info Here !!!!!!!!!!!!!!!---->

                                                <?php endif; ?>
                                        <?php else: ?>
                                            <?php if(($da->teamID == null or $da->teamID == "") and ($da->sID == null or $da->sID == "")): ?>
                                                <p><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_noteam'); ?></p>
                                            <?php else: ?>
                                                <div class="col-sm-3">
                                                    <?php if(count($da->Teacher()->get())==1): ?>
                                                    <div  class="hallo"><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_teach'); ?> <?php echo e($da->Teacher()->get()[0]->name); ?></div><br />
                                                    <img id="Profilbild"src="<?php echo e(asset($da->Teacher()->get()[0]->profpic)); ?>" alt="Avatar" height="50"><br />
                                                    <?php else: ?>
                                                        <p><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_teach_noteach'); ?></p>
                                                    <?php endif; ?>
                                                </div>

                                                <!----//TODO Need to enter Team info Here !!!!!!!!!!!!!!!---->

                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <!--<button id="ShowMore" type="button" class="btn btn-success"><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_show_more'); ?></button>
                                       --> <form action="<?php echo e(route('company.da.status.edit')); ?>" method="post" >
                                            <?php echo e(csrf_field()); ?>

                                            <input type="hidden" name="daid" value="<?php echo e($da->DAid); ?>" />
                                            <button type="submit" class="btn btn-success"  ><?php echo app('translator')->getFromJson('profiles.company_da_dashboard_da_change_status'); ?></button>
                                        </form>
                                        <form action="<?php echo e(route('company.da.rmv')); ?>" method="post" onclick="if(confirm('Are you sure you want to delete this DA and all conected information?')){return true;}else{event.stopPropagation();event.preventDefault();};">
                                            <?php echo e(csrf_field()); ?>

                                            <input type="hidden" name="daid" value="<?php echo e($da->DAid); ?>" />
                                            <button type="submit" class="btn btn-success"  ><i class="glyphicon glyphicon-trash" ></i></button>
                                        </form>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <button onclick="location.href ='/company/da/new';" id="Erstell_Buttons" type="button" class="btn btn-default btn-lg btn-block">
                            <i class="glyphicon glyphicon-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/appemp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>