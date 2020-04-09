<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Create new DA')); ?></div>
                    <div class="card-body">
                        <?php echo e(csrf_field()); ?>

                        <?php echo Form::open(array('action' => 'DA\CompanyDAController@add', 'method'=>'post')); ?>

                        <?php echo e(Form::token()); ?>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('daname', 'Diplomarbeitstitel:'); ?>

                                    <?php echo Form::text('daname', null,['placeholder'=>'Development of ', 'required','class'=>'form-control']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('dadesc', 'Diplomarbeitsbeschreibung:'); ?>

                                    <?php echo Form::textarea('dadesc', null,['placeholder'=>'...', 'required','class'=>'form-control']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('size', 'Teamgröße:'); ?>

                            <?php echo Form::number('size',null,['placeholder'=>'3','required', 'class'=>'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('priv', 'Privatsphäreeinstellung:'); ?>

                            <?php echo Form::select('priv', [1=>'Nur Firmenmitarbeiter',2=>'Für alle Schüler ohne DA sichtbar',3=>'Für jeden sichtbar'],null,['class'=>'form-control']); ?>

                        </div>

                        <div class="form-group">
                            <?php echo Form::submit('Create DA', ['class'=>'btn btn-primary']); ?>

                        </div>
                        <?php echo Form::close(); ?>



                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.unauth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>