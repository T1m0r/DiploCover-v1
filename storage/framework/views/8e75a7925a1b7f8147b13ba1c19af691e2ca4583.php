<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Register')); ?></div>

                    <div class="card-body">
                        <?php echo e(csrf_field()); ?>

                        <?php echo Form::open(['method'=>'POST', 'action'=>'Register\TeacherRegisterController@further','enctype'=>'multipart/form-data']); ?>


                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('firstname', 'Firstname:'); ?>

                                    <?php echo Form::text('firstname', null,['class'=>'form-control', 'required','placeholder'=>'Muster']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('lastname', 'Lastname:'); ?>

                            <?php echo Form::text('lastname',null,['class'=>'form-control','required','placeholder'=>'Nachname']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('title', 'Title:'); ?>

                            <?php echo Form::text('title', null,['class'=>'form-control', 'placeholder'=>'Prof']); ?>

                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('phonenumber', 'Phonenumber:'); ?>

                                    <?php echo Form::text('phonenumber', null,['class'=>'form-control','placeholder'=>'0728346278946']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('abme', 'About me:'); ?>

                                    <?php echo Form::textarea('abme', null,['class'=>'form-control','placeholder'=>'Hi my  name is ...']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('prpic','Profile picture'); ?>

                                    <?php echo Form::file('prpic', null,['class'=>'form-control']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('intr', 'Intressts:'); ?>

                                    <?php echo Form::text('intr', null,['class'=>'form-control','placeholder'=>'Math :} LOL']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('password', 'Password:'); ?>

                                    <?php echo Form::password('password', ['class'=>'form-control', 'required','placeholder'=>'123456789']); ?>


                                </div>
                                <?php echo Form::label('spswd', 'Show Password:'); ?>

                                <?php echo Form::checkbox('spswd',null,true, ['id'=>'spswd','class'=>'form-control','onclick'=>'showme()','unchecked']); ?>

                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo Form::submit('Register', ['class'=>'btn btn-primary']); ?>

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