<?php $__env->startSection('head'); ?>
    <style>
        .emp-btn-comp-edit{
            background-color: #cce1ff;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!------ Include the above in your HEAD tag ---------->
<div class="col-sm-1 container-fluid"></div>
<div class="col-sm-7 container-fluid"><br/>
    <div id="Schatten"class="panel-group">
        <div class="panel-heading"><i class="fa fa-user"></i> <?php echo app('translator')->getFromJson('profiles.company_edit_menu_profile_management_title'); ?></div>
        <div class="panel-body">
            <?php echo e(csrf_field()); ?>

            <?php echo Form::open(['method'=>'POST', 'action'=>'Profile\CompanyProfileController@udfile','enctype'=>'multipart/form-data']); ?>

            <div class="form-group row">
                <div class="col-md-6">
                    <div class="form-group">
                        <?php echo Form::label('prpic', __('profiles.company_edit_profile_management_form_prpic')); ?>

                        <?php echo Form::file('prpic', null,['class'=>'form-control']); ?>

                    </div>
                </div>
                <div class="col-md-6">
                    <?php if($comp->profpic == null or $comp->profpic == ""): ?>
                        <p><?php echo app('translator')->getFromJson('profiles.company_edit_profile_management_form_noprpic'); ?></p>
                    <?php else: ?>
                        <img src="<?php echo e(asset($comp->profpic)); ?>" class="profile-circle" style="width: 10em; height: 10em;" />
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <div class="form-group">
                        <h3><?php echo app('translator')->getFromJson('profiles.company_edit_profile_management_document'); ?></h3>
                        
                        <?php echo Form::file('oth', null,['class'=>'form-control']); ?>

                        <?php echo Form::label('oth1', __('profiles.company_edit_profile_management_form_oth1')); ?>

                        <?php echo Form::file('oth1', null,['class'=>'form-control']); ?>

                    </div>
                </div>
            </div>
            <div class="form-group">
                <?php echo Form::submit(__('profiles.company_edit_profile_management_form_submit'), ['class'=>'Updatebutton btn btn-default btn-lg btn-block', 'style'=>'width:25%']); ?>

            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
    <div id="Schatten"class="panel-group">
        <div class="panel-heading"><i class="fas fa-book"></i> <?php echo app('translator')->getFromJson('profiles.company_edit_menu_dashboard_title'); ?></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-5">
                    <?php echo e(csrf_field()); ?>

                    <?php echo Form::open(['method'=>'POST', 'action'=>'Profile\CompanyProfileController@udinfo','enctype'=>'multipart/form-data']); ?>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <i class="fa fa-user"></i>
                                <?php echo Form::label('compname', __('profiles.company_edit_dashboard_form_cname')); ?>

                                <?php echo Form::text('compname', null,['class'=>'form-control','placeholder'=>__('profiles.company_edit_dashboard_form_placeholder_cname')]); ?>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <?php echo Form::label('prevtxt', __('profiles.company_edit_dashboard_form_cdesc')); ?>

                        <?php echo Form::textarea('prevttxt',null,['class'=>'form-control','placeholder'=>__('profiles.company_edit_dashboard_form_placeholder_cdesc')]); ?>

                    </div>
                    <div class="form-group">
                        <i class="fas fa-globe"></i>
                        <?php echo Form::label('url', __('profiles.company_edit_dashboard_form_weblink')); ?>

                        <?php echo Form::text('url', null,['class'=>'form-control', 'placeholder'=>__('profiles.company_edit_dashboard_form_placeholder_weblink')]); ?>

                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <i class="fa fa-envelope"></i>
                                <?php echo Form::label('contmail', __('profiles.company_edit_dashboard_form_contmail')); ?>

                                <?php echo Form::text('contmail', null,['class'=>'form-control','placeholder'=>__('profiles.company_edit_dashboard_form_placeholder_contmail')]); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">

                </div>
                <?php echo Form::submit(__('profiles.company_edit_dashboard_form_submit'), ['class'=>'Updatebutton btn btn-default btn-lg btn-block', 'style'=>'width:25%']); ?>

                <?php echo Form::close(); ?>

            </div>
            <button onclick="location.href ='<?php echo e(route('company.delete')); ?>';" ><?php echo app('translator')->getFromJson('profiles.company_edit_dashboard_delete'); ?></button>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appcomp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>