<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Create new Employee')); ?></div>
                    <div class="card-body">
                        <?php echo e(csrf_field()); ?>

                        <?php echo Form::open(array('action' => 'Profile\CompanyProfileController@addemployee', 'method'=>'post')); ?>

                        <?php echo e(Form::token()); ?>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('firstname', __('form.company_empm_addempl_form_firstname')); ?>

                                    <?php echo Form::text('firstname', null,['placeholder'=>__('form.company_empm_addempl_form_placeholder_firstname'), 'required','class'=>'form-control']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('lastname', __('form.company_empm_addempl_form_lastname')); ?>

                                    <?php echo Form::text('lastname', null,['placeholder'=>__('form.company_empm_addempl_form_placeholder_lastname'), 'required','class'=>'form-control']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('email', __('form.company_empm_addempl_form_email')); ?>

                            <?php echo Form::email('email',null,['placeholder'=>__('form.company_empm_addempl_form_placeholder_email'),'required', 'class'=>'form-control']); ?>

                        </div>

                        <div class="form-group">
                            <?php echo Form::submit(__('form.company_empm_addempl_form_submit'), ['class'=>'btn btn-primary']); ?>

                        </div>
                        <?php echo Form::close(); ?>



                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appemp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>