<?php $__env->startSection('head'); ?>
    <style>
        button[id="Buttons"]{
            width: 275px;
            background-color: #919191;
            color: white;
            padding: 5px 10px;
            margin: 5px 0;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            text-align: center;}
        button[id="Buttons"] :hover {
            background-color: #e89696;}
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
        #ShowMore{
            float:right;}
        #Profilbild{
            border-radius: 175px;
            display:block;
            margin:0 auto;}
        .hallo{text-align: center;}
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid" style="padding-top: 2em;">
    <div class="row">
        <div class="col-sm-3 container-fluid">
            <div id="panelbody"class="panel-body">
                <img class="img-circle" id="Profilbild" src="<?php echo e(asset($emp->prfpic)); ?>" alt="Profile Picture" height="150">
                <div class="hallo"><h1>Willkommen</h1></div>
                <div class="hallo"><h1><?php echo e($emp->name); ?></h1></div>
                <button id="Buttons" onclick="location.href ='<?php echo e(route('employee.edit')); ?>';" style="width:100%" type="button" class="btn btn-default btn-lg btn-block"><?php echo app('translator')->getFromJson('profiles.employee_lnt_edit'); ?></button>
                <!--<button id="Buttons" onclick="location.href ='<?php echo e(route('employee.edit')); ?>';"  style="width:100%" type="button" class="btn btn-default btn-lg btn-block"><?php echo app('translator')->getFromJson('profiles.employee_lnt_da_dashboard'); ?></button>---->
                <!--<button id="Buttons" style="width:100%" type="button" class="btn btn-default btn-lg btn-block">Messages</button>-->
                <?php if(isset($role)): ?>
                    <?php if($role == 1): ?>
                        <button id="Buttons" style="width:100%" onclick="location.href ='<?php echo e(route('company.home')); ?>';" type="button" class="btn btn-default btn-lg btn-block"><?php echo app('translator')->getFromJson('profiles.employee_lnt_company'); ?></button>
                    <?php endif; ?>
                <?php endif; ?>

            </div>
        </div>
        <div class="col-sm-1 container-fluid"></div>
        <div class="col-sm-7 container-fluid">
            <div class="row justify-content-center" style="display: -webkit-box;">
                <img id="Logo" src="<?php echo e(asset($comp->profpic)); ?>" alt="Logo" height="100">
                <h1> <?php echo e($comp->compname); ?></h1>
            </div>
            <div id="panelgroup"class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading"><?php echo app('translator')->getFromJson('profiles.employee_emphome_panel_da_heading'); ?></div>
                    <div id="panelbody"class="panel-body">
                        <?php if(count($das) ==0): ?>
                            <p><?php echo app('translator')->getFromJson('profiles.employee_emphome_da_noda'); ?></p>
                            <p><?php echo app('translator')->getFromJson('profiles.employee_emphome_info'); ?></p>
                        <?php else: ?>
                            <?php $__currentLoopData = $das; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $da): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <form action="<?php echo e(route('company.da.settings')); ?>" method="post" >
                                            <?php echo e(csrf_field()); ?>

                                            <input type="hidden" name="daid" value="<?php echo e($da->DAid); ?>" />
                                            <button type="submit" class="btn btn-success"  ><i class="glyphicon glyphicon-cog" ></i></button>
                                        </form>
                                        <div><?php echo app('translator')->getFromJson('profiles.employee_emphome_da_daname'); ?> <?php echo e($da->DAname); ?></div>
                                        <div><?php echo app('translator')->getFromJson('profiles.employee_emphome_da_dastatus'); ?> <?php echo e($da->Phase()->get()[0]->status); ?></div>
                                        <div><?php echo app('translator')->getFromJson('profiles.employee_emphome_da_daprog'); ?> <?php echo e($da->prog); ?> %</div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-sm-3">
                                            <?php if(count($da->employee()->get())<1): ?>
                                                <p><?php echo app('translator')->getFromJson('profiles.employee_emphome_da_empl_noempl'); ?></p>
                                            <?php else: ?>
                                                <div  class="hallo"><?php echo app('translator')->getFromJson('profiles.employee_emphome_da_empl'); ?> <?php echo e($da->employee()->get()[0]->name); ?></div><br />
                                                <img id="Profilbild"src="<?php echo e(asset($da->employee()->get()[0]->prfpic)); ?>" alt="Avatar" height="50"><br />
                                            <?php endif; ?>
                                        </div>
                                    <?php if($da->phase ==2): ?>

                                        <!-------//TODO Enter what to display in phases 1,2 ---->



                                    <?php elseif($da->phase == 3): ?>
                                        <!-------//TODO Enter what to display in phase 3 ---->
                                        <?php else: ?>
                                            <?php if(($da->teamID == null or $da->teamID == "") and ($da->sID == null or $da->sID == "")): ?>
                                                <p><?php echo app('translator')->getFromJson('profiles.employee_emphome_da_ph3_nostud'); ?></p>
                                            <?php else: ?>
                                                <div class="col-sm-3">
                                                    <?php if(count($da->Teacher()->get())==1): ?>
                                                        <div  class="hallo"><?php echo app('translator')->getFromJson('profiles.employee_emphome_da_ph3_teacher'); ?> <?php echo e($da->Teacher()->get()[0]->name); ?></div><br />
                                                        <img id="Profilbild"src="<?php echo e(asset($da->Teacher()->get()[0]->profpic)); ?>" alt="Avatar" height="50"><br />
                                                    <?php else: ?>
                                                        <p><?php echo app('translator')->getFromJson('profiles.employee_emphome_da_ph3_teacher_noteacher'); ?></p>
                                                    <?php endif; ?>
                                                </div>

                                                <!----//TODO Need to enter Team info Here !!!!!!!!!!!!!!!---->

                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <button id="ShowMore" type="button" class="btn btn-success"><?php echo app('translator')->getFromJson('profiles.employee_emphome_da_more'); ?></button>
                                        <form action="<?php echo e(route('company.da.status.edit')); ?>" method="post" >
                                            <?php echo e(csrf_field()); ?>

                                            <input type="hidden" name="daid" value="<?php echo e($da->DAid); ?>" />
                                            <button type="submit" class="btn btn-success"  ><?php echo app('translator')->getFromJson('profiles.employee_emphome_da_chstatus'); ?></button>
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

                        <!--<button id="Erstell_Buttons" onclick="window.location='<?php echo e(route('company.da.add')); ?>'" type="button" class="btn btn-default btn-lg btn-block">
                            <i class="glyphicon glyphicon-plus" ></i>
                        </button>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-1 container-fluid"></div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appemp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>