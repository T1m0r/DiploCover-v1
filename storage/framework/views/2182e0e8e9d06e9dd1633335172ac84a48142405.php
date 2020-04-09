<?php $__env->startSection('pgtitle',__('tags.pg_title_school_edit')); ?>
<?php $__env->startSection('head'); ?>
    <style>
        .btn-school-edit{
            background-color: #cce1ff;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-sm-1 container-fluid"></div>
    <div class="col-sm-7 container-fluid"><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><i class="fas fa-school"></i> <?php echo app('translator')->getFromJson('profiles.school_edit_dashboard_title'); ?></div>
            <div class="panel-body">
                <?php echo e(csrf_field()); ?>

                <?php echo Form::open(['method'=>'POST', 'action'=>'Profile\SchoolProfileController@udinfo','enctype'=>'multipart/form-data']); ?>

                <div class="row">
                    <div class="col-sm-5">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('schname', __('profiles.school_edit_dashboard_schname')); ?>

                                    <?php echo Form::text('schname', null,['class'=>'form-control','placeholder'=>$school->schoolname]); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('contmail', __('profiles.school_edit_dashboard_contmail')); ?>

                                    <?php echo Form::text('contmail', null,['class'=>'form-control','placeholder'=>$school->contmail]); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('prpic', __('profiles.school_edit_dashboard_prpic')); ?>

                                    <?php echo Form::file('prpic', null,['class'=>'form-control']); ?>

                                </div>
                            </div>
                        </div>
                        <?php if($school->prfpic == null or $school->prfpic == ""): ?>
                            <p><?php echo app('translator')->getFromJson('profiles.school_edit_dashboard_noprpic'); ?></p>
                        <?php else: ?>
                            <img src="<?php echo e(asset($school->prfpic)); ?>"  style="width: auto; height: 8em;" />
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group">
                    <?php echo Form::submit(__('profiles.school_edit_dashboard_update'), ['class'=>'Updatebutton btn btn-default btn-lg btn-block', 'style'=>'width:55%']); ?>

                </div>
                <?php echo Form::close(); ?>

                
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appschool', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>