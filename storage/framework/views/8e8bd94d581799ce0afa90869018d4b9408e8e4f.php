<?php $__env->startSection('head'); ?>
    <style>
        body {font-family: Arial;}

        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            /*padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;*/
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!------ Include the above in your HEAD tag ---------->
<div class="container">
    <div class="row">
        <div class="col-md-3 ">
            <div class="list-group ">
                <button class="list-group-item list-group-item-action tablinks active"  id="defaultOpen" onclick="opendash(event, 'Dashboard')"><?php echo app('translator')->getFromJson('profiles.employee_edit_dashboard_title'); ?></button>
                <button class="list-group-item list-group-item-action tablinks" onclick="opendash(event, 'PManagment')"><?php echo app('translator')->getFromJson('profiles.employee_edit_profile_management_title'); ?></button>
                <button class="list-group-item list-group-item-action tablinks" onclick="opendash(event, 'pswd')"><?php echo app('translator')->getFromJson('profiles.employee_edit_pswd_title'); ?></button>

            </div>
        </div>
        <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="Dashboard" class="tabcontent">
                                <div class="col-md-9">
                                    <div class="card">
                                        <div class="card-header"><?php echo app('translator')->getFromJson('profiles.employee_edit_dashboard_title'); ?></div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <?php echo e(csrf_field()); ?>

                                                    <?php echo Form::open(['method'=>'POST', 'action'=>'Profile\EmployeeProfileController@udinfo','enctype'=>'multipart/form-data']); ?>

                                                    <div class="form-group row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <?php echo Form::label('firstname', __('profiles.employee_edit_dashboard_form_firstname')); ?>

                                                                <?php echo Form::text('firstname', null,['class'=>'form-control','placeholder'=>'Muster']); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <?php echo Form::label('lastname', __('profiles.employee_edit_dashboard_form_lastname')); ?>

                                                        <?php echo Form::text('lastname',null,['class'=>'form-control','placeholder'=>'>Nachname']); ?>

                                                    </div>
                                                    <div class="form-group">
                                                        <?php echo Form::label('title', __('profiles.employee_edit_dashboard_form_title')); ?>

                                                        <?php echo Form::text('title', null,['class'=>'form-control', 'placeholder'=>'Prof']); ?>

                                                    </div>
                                                    <div class="form-group">
                                                        <?php echo Form::label('job', __('profiles.employee_edit_dashboard_form_job')); ?>

                                                        <?php echo Form::text('job', null,['class'=>'form-control', 'placeholder'=>'CEO']); ?>

                                                    </div>
                                                    <div class="form-group">
                                                        <?php echo Form::label('jobdesc', __('profiles.employee_edit_dashboard_form_jobdesc')); ?>

                                                        <?php echo Form::textarea('jobdesc', null,['class'=>'form-control', 'placeholder'=>'I am responibal for ...']); ?>

                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <?php echo Form::label('phonenumber', __('profiles.employee_edit_dashboard_form_phonenumber')); ?>

                                                                <?php echo Form::text('phonenumber', null,['class'=>'form-control','placeholder'=>'0728346278946']); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <?php echo Form::submit(__('profiles.employee_edit_dashboard_form_submit'), ['class'=>'btn btn-primary']); ?>

                                                    </div>
                                                    <?php echo Form::close(); ?>


                                                </div>
                                                <p><?php echo app('translator')->getFromJson('profiles.employee_edit_dashboard_lang'); ?></p>
                                                <button onclick="location.href='/lang/de';"><?php echo app('translator')->getFromJson('profiles.lang1'); ?></button>
                                                <button onclick="location.href='/lang/en';"><?php echo app('translator')->getFromJson('profiles.lang2'); ?></button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="PManagment" class="tabcontent">
                                <div class="col-md-9">
                                    <div class="card">
                                        <div class="card-header"><?php echo app('translator')->getFromJson('profiles.employee_edit_profile_management_title'); ?></div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <?php echo e(csrf_field()); ?>

                                                    <?php echo Form::open(['method'=>'POST', 'action'=>'Profile\EmployeeProfileController@udfile','enctype'=>'multipart/form-data']); ?>

                                                    <div class="form-group row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <?php echo Form::label('prfpic', __('profiles.employee_edit_profile_management_form_prpic')); ?>

                                                                <?php echo Form::file('prfpic', null,['class'=>'form-control']); ?>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <img src="<?php echo e(asset(Auth::user()->prfpic)); ?>" class="profile-circle" style="width: 10em; height: 10em;" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <?php echo Form::submit(__('profiles.employee_edit_profile_management_form_submit'), ['class'=>'btn btn-primary']); ?>

                                                    </div>
                                                    <?php echo Form::close(); ?>


                                                </div>
                                            </div>
                                            <button onclick="location.href ='<?php echo e(route('employee.delete')); ?>';" ><?php echo app('translator')->getFromJson('profiles.employee_edit_profile_management_delete'); ?></button>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="pswd" class="tabcontent">
                                <div class="col-md-9">
                                    <div class="card">
                                        <div class="card-header"><?php echo app('translator')->getFromJson('profiles.employee_edit_pswd_title'); ?></div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <?php echo e(csrf_field()); ?>

                                                    <?php echo Form::open(['method'=>'POST', 'action'=>'Profile\EmployeeProfileController@updpswd','enctype'=>'multipart/form-data']); ?>

                                                    <div class="form-group row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <?php echo Form::label('oldpswd', __('profiles.employee_edit_pswd_form_oldpswd')); ?>

                                                                <?php echo Form::password('oldpswd', null,['class'=>'form-control','placeholder'=>'HTL XYZ']); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <?php echo Form::label('npaswd', __('profiles.employee_edit_pswd_form_newpswd')); ?>

                                                                <?php echo Form::password('npswd', null,['class'=>'form-control','placeholder'=>'info@mail.at']); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <?php echo Form::label('npswd2', __('profiles.employee_edit_pswd_form_rp_newpswd')); ?>

                                                                <?php echo Form::password('npswd2', null,['class'=>'form-control']); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <?php echo Form::submit(__('profiles.employee_edit_pswd_form_submit'), ['class'=>'btn btn-primary']); ?>

                                                    </div>
                                                    <?php echo Form::close(); ?>


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('jspace'); ?>
    <script>
        document.getElementById("defaultOpen").click();

        function opendash(evt, tabname) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabname).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appemp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>