<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('form.company_da_edit_title')); ?></div>

                    <div class="card-body">
                        <?php echo e(csrf_field()); ?>

                        <?php echo Form::open(array('action' => 'Profile\DA\CompanyDAController@settingsupdate', 'method'=>'post')); ?>


                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('daname', __('form.company_da_edit_form_daname')); ?>

                                    <?php echo Form::text('daname',null,['class'=>'form-control', 'placeholder'=>$da->DAname]); ?>

                                    <?php echo Form::hidden('daid',$da->DAid,['class'=>'form-control', 'required']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('dadesc', __('form.company_da_edit_form_dadesc')); ?>

                            <?php echo Form::textarea('dadesc',null,['class'=>'form-control', 'placeholder'=>$da->DAdesc]); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('prog', __('form.company_da_edit_form_prog')); ?>

                            <?php echo Form::number('prog',null,['class'=>'form-control','min'=>'0', 'max'=>'100','step'=>'1', 'value'=>$da->prog]); ?>

                        </div>

                        <div class="form-group">
                            <?php echo Form::label('tsize', __('form.company_da_edit_form_tsize')); ?>

                            <?php echo Form::select('tsize', $tsize,['class'=>'form-control', 'required']); ?>

                            <p><?php echo app('translator')->getFromJson('form.company_da_edit_form_current'); ?> <?php echo e($tsize[$da->size]); ?></p>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('emp', __('form.company_da_edit_form_empl')); ?>

                            <?php echo Form::select('emp', $emps,['class'=>'form-control', 'required']); ?>

                            <?php if(count($da->employee()->get()) <1): ?>
                                <p><?php echo app('translator')->getFromJson('form.company_da_edit_form_noempl'); ?></p>
                            <?php else: ?>
                            <p><?php echo app('translator')->getFromJson('form.company_da_edit_form_current'); ?> <?php echo e($da->employee()->get()[0]->name); ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('priv', __('form.company_da_edit_form_priv')); ?>

                            <?php echo Form::select('priv', $priv,['class'=>'form-control', 'required']); ?>

                            <p><?php echo app('translator')->getFromJson('form.company_da_edit_form_current'); ?> <?php echo e($priv[$da->privacy]); ?></p>
                        </div>


                        <div class="form-group">
                            <?php echo Form::submit(__('form.company_da_edit_form_submit'), ['style'=>'width:50%', 'class'=>'Updatebutton btn btn-default btn-lg btn-block']); ?>

                        </div>
                        <?php echo Form::close(); ?>



                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appcomp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>