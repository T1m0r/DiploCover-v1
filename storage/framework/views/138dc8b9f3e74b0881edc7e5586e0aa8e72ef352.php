<?php $__env->startSection('pgtitle',__('tags.pg_title_adda')); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('profiles.company_adda_heading')); ?></div>

                    <div class="card-body">

                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <?php echo e(csrf_field()); ?>

                        <?php echo Form::open(array('action' => 'Profile\DA\TeacherDAController@adda', 'method'=>'post')); ?>

                        <p>Required fields *</p>
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('daname', __('profiles.company_adda_form_daname')); ?>

                                    <?php echo Form::text('daname',null,['class'=>'form-control', 'placeholder'=>__('profiles.company_adda_form_placeholder_daname')]); ?>


                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('dadesc', __('profiles.company_adda_form_dadesc')); ?>

                            <?php echo Form::textarea('dadesc',null,['class'=>'form-control', 'placeholder'=>__('profiles.company_adda_form_placeholder_dadesc')]); ?>


                        </div>

                        <div class="form-group">
                            <?php echo Form::label('tsize', __('profiles.company_adda_form_tsize')); ?>

                            <?php echo Form::select('tsize', $tsize,['class'=>'form-control', 'required']); ?>


                        </div>
                        <div class="form-group">
                            <?php echo Form::label('emp', __('profiles.company_adda_form_empl')); ?>

                            <?php echo Form::select('emp', $tchs,['class'=>'form-control', 'required']); ?>


                        </div>
                        <?php echo Form::label('empz', __('form.company_da_edit_form_emplz')); ?>

                        <?php echo Form::select('empz', $tchs, ['class'=>'form-control']); ?>

                        <div class="form-group">
                            <?php echo Form::label('priv', __('profiles.company_adda_form_priv')); ?>

                            <?php echo Form::select('priv',$priv,['class'=>'form-control', 'required']); ?>

                        </div>

                        <div class="form-group">
                            <?php echo Form::label('optfield', __('form.company_da_edit_form_optfield')); ?>

                            <?php echo Form::select('optfield',array('0'=>__('form.company_da_edit_form_optfield_no'),'1'=>__('form.company_da_edit_form_optfield_yes')),['class'=>'form-control', 'required']); ?>

                        </div>

                        <div class="form-group">
                            <?php echo Form::label('optfieldtxt', __('form.company_da_edit_form_optfieldtxt')); ?>

                            <?php echo Form::text('optfieldtxt',null,['class'=>'form-control','placeholder'=>__('form.company_da_edit_form_optfieldtxt_placeholder')]); ?>

                        </div>


                        <div class="form-group">
                        <?php echo Form::submit(__('profiles.company_adda_form_submit'), ['class'=>'btn btn-primary']); ?>

                    </div>
                    <?php echo Form::close(); ?>



                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.apptch', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>