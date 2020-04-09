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
        #Logo{
            border-radius: 175px}
        .hallo{text-align: center;}
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid" style="padding-top: 2em;">
        <div class="row">
            <div class="col-sm-3 container-fluid">
                <div id="panelbody"class="panel-body">
                </div>
            </div>
            <div class="col-sm-1 container-fluid"></div>
            <div class="col-sm-7 container-fluid">
                <div class="row justify-content-center" style="display: -webkit-box;">
                    <img src="<?php echo e(asset($school->prfpic)); ?>" alt="Logo" height="100">
                    <h1> <?php echo e($school->schoolname); ?></h1>

                </div>
                <div id="panelgroup"class="panel-group">


                    <div class="panel panel-default">
                        <div class="panel-heading"><?php echo app('translator')->getFromJson('profiles.teacher_grade_dashboard_panel_grades_heading'); ?></div>
                        <?php if(count($grades)>0): ?>
                            <?php $__currentLoopData = $grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div id="panelbody"class="panel-body">
                                    <div class="panel panel-primary">
                                        <?php $__currentLoopData = $grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="panel panel-primary">
                                                <div class="panel-heading container-fluid">
                                                    <div class="col-lg-2 col-md-3"><?php echo app('translator')->getFromJson('profiles.teacher_tchome_grade_gname'); ?> <?php echo e($grade->name); ?></div>
                                                    <div class="col-lg-9 col-md-8"></div>
                                                    <div class="col-lg-1 col-md-1">
                                                        <form action="<?php echo e(route('teacher.grade.rmv')); ?>" method="post" onclick="if(confirm('Sind Sie sicher das Sie diese KLasse löschen wollen? Dadurch werden alle Schüler und ihre Verknüpfungen (wie DA-Bewerbungen, etc) gelöscht!')){return true;}else{event.stopPropagation();event.preventDefault();};">
                                                            <?php echo e(csrf_field()); ?>

                                                            <input type="hidden" name="gradeID" value="<?php echo e($grade->gradeID); ?>" />
                                                            <button type="submit" class="btn btn-success"  data-toggle="tooltip" data-replacement="top" title="<?php echo e(\Illuminate\Support\Facades\Lang::get('tags.gradedashboard_lang_error_btn_rmv')); ?>" ><i class="glyphicon glyphicon-trash" ></i></button>
                                                        </form>
                                                    </div>



                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6"><?php echo app('translator')->getFromJson('profiles.teacher_tchome_grade_gteach'); ?> <?php echo e($grade->teacher()->get()[0]->name); ?></div>
                                                        <div class="row col-lg-6 col-md-3"></div>
                                                        <div  class="col-lg-2 col-md-3" id="Status"><?php echo app('translator')->getFromJson('profiles.teacher_tchome_grade_stcount'); ?> <?php echo e($grade->students); ?></div>
                                                    </div>
                                                    <hr/>
                                                    <div><?php echo app('translator')->getFromJson('profiles.teacher_tchome_grade_team'); ?>
                                                    </div>
                                                    <button onclick="location.href ='/teacher/grade/<?php echo e(urlencode($grade->gradeID)); ?>/index';"id="ShowMore" type="button" class="btn btn-success"><?php echo app('translator')->getFromJson('profiles.teacher_tchome_grade_more'); ?></button>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <div class="panel panel-default">
                                <div class="panel-heading"></div>
                                <div class="panel-body">
                                    <p><?php echo app('translator')->getFromJson('profiles.teacher_grade_dashboard_0gradefail'); ?></p>
                                    <button onclick="location.href ='/teacher/grade/new';" id="Erstell_Buttons" type="button" class="btn btn-default btn-lg btn-block">
                                        <i class="glyphicon glyphicon-plus"></i>
                                    </button>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="panel panel-default">
                    </div>
                </div>
            </div>
            <div class="col-sm-1 container-fluid"></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apptch', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>