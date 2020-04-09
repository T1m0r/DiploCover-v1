<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('form.register_employee_further_title')); ?></div>

                    <div class="card-body">
                        <?php echo e(csrf_field()); ?>

                        <?php echo Form::open(['method'=>'POST', 'action'=>'Register\EmployeeRegisterController@further','enctype'=>'multipart/form-data']); ?>


                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('firstname', __('form.register_employee_further_form_firstname')); ?>

                                    <?php echo Form::text('firstname', null,['class'=>'form-control', 'required','placeholder'=> __('form.register_employee_further_form_placeholder_firstname')]); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('lastname',  __('form.register_employee_further_form_lastname')); ?>

                            <?php echo Form::text('lastname',null,['class'=>'form-control','required','placeholder'=> __('form.register_employee_further_form_placeholder_lastname')]); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('title',  __('form.register_employee_further_form_title')); ?>

                            <?php echo Form::text('title', null,['class'=>'form-control', 'placeholder'=> __('form.register_employee_further_form_placeholder_title')]); ?>

                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('phonenumber',  __('form.register_employee_further_form_tel')); ?>

                                    <?php echo Form::text('phonenumber', null,['class'=>'form-control','placeholder'=> __('form.register_employee_further_form_placeholder_tel')]); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('job',  __('form.register_employee_further_form_job')); ?>

                            <?php echo Form::text('job', null,['class'=>'form-control', 'placeholder'=> __('form.register_employee_further_form_placeholder_job')]); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('jobdec',  __('form.register_employee_further_form_jobdesc')); ?>

                            <?php echo Form::textarea('jobdesc', null,['class'=>'form-control', 'placeholder'=> __('form.register_employee_further_form_placeholder_jobdesc')]); ?>

                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('prpic', __('form.register_employee_further_form_prpic')); ?>

                                    <?php echo Form::file('prpic', null,['class'=>'form-control']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('password',  __('form.register_employee_further_form_pswd')); ?>

                                    <?php echo Form::password('password', ['class'=>'form-control', 'required','placeholder'=>'123456789']); ?>


                                </div>
                                <?php echo Form::label('spswd',  __('form.register_employee_further_form_spswd')); ?>

                                <?php echo Form::checkbox('spswd',null,true, ['id'=>'spswd','class'=>'form-control','onclick'=>'showme()','unchecked']); ?>

                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo Form::submit( __('form.register_employee_further_form_submit'), ['class'=>'btn btn-primary']); ?>

                        </div>
                        <?php echo Form::close(); ?>



                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('jspace'); ?>
    <script>
        $('input[type=checkbox]').removeAttr('checked');
        function showme(){

            var pswdfield = document.getElementById("password");
            if(pswdfield.type === "password"){
                pswdfield.type = "text";
            }else{
                pswdfield.type = "password";
            }


        }
    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.unauth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>