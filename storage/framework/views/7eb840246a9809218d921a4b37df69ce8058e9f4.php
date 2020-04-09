<?php $__env->startSection('pgtitle',__('tags.pg_title_tmhome')); ?>
<?php $__env->startSection('head'); ?>
    <style>
        .btn-st-tm {
            background-color: #cce1ff;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-sm-1 container-fluid"></div>
    <div class="col-sm-7 container-fluid"><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><?php echo app('translator')->getFromJson('profiles.student_team_dashboard_title'); ?></div>
            <div class="panel-body">
                <div class="row container-fluid">
                    <table id="Klasse" class="table table-hover hover" style="width:100%">
                        <thead>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('profiles.student_team_dashboard_tbl_name'); ?></th>
                            <th><?php echo app('translator')->getFromJson('profiles.student_team_dashboard_tbl_grade'); ?></th>
                            <!---<th>Rolle</th>--->
                            <th><?php echo app('translator')->getFromJson('profiles.student_team_dashboard_tbl_action'); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(isset($tms[0])): ?>
                            <tr id="101">
                                <td><?php echo e($tms[0]->firstname); ?> <?php echo e($tms[0]->lastname); ?></td>
                                <td><?php echo e($tms[0]->gradename()->first()->name); ?></td>
                                <td></td>
                            </tr>
                        <?php endif; ?>
                        <?php if(isset($tms[1])): ?>
                            <tr id="102">
                                <td><?php echo e($tms[1]->firstname); ?> <?php echo e($tms[1]->lastname); ?></td>
                                <td><?php echo e($tms[1]->gradename()->first()->name); ?></td>
                                <td>
                                    <form action="<?php echo e(route('team.rmv')); ?>" method="post">
                                        <?php echo e(csrf_field()); ?>

                                        <input type="hidden" name="sID" value="<?php echo e($tms[1]->sID); ?>" />

                                        <button class="Deletebutton" title="<?php echo app('translator')->getFromJson('tags.student_team_int_member_delt_title'); ?>" style="width:50%" type="submit">
                                            <i class='fas fa-trash-alt' style="color:black"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endif; ?>
                        <?php if(isset($tms[2])): ?>
                            <tr id="103">
                                <td><?php echo e($tms[2]->firstname); ?> <?php echo e($tms[2]->lastname); ?></td>
                                <td><?php echo e($tms[2]->gradename()->first()->name); ?></td>
                                <td><form action="<?php echo e(route('team.rmv')); ?>" method="post">
                                        <?php echo e(csrf_field()); ?>

                                        <input type="hidden" name="sID" value="<?php echo e($tms[2]->sID); ?>" />

                                        <button class="Deletebutton" title="<?php echo app('translator')->getFromJson('tags.student_team_int_member_delt_title'); ?>" style="width:50%" type="submit">
                                            <i class='fas fa-trash-alt' style="color:black"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endif; ?>
                        <?php if(isset($tms[3])): ?>
                            <tr id="104">
                                <td><?php echo e($tms[3]->firstname); ?> <?php echo e($tms[3]->lastname); ?></td>
                                <td><?php echo e($tms[3]->gradename()->first()->name); ?></td>
                                <td><form action="<?php echo e(route('team.rmv')); ?>" method="post">
                                        <?php echo e(csrf_field()); ?>

                                        <input type="hidden" name="sID" value="<?php echo e($tms[3]->sID); ?>" />

                                        <button class="Deletebutton" title="<?php echo app('translator')->getFromJson('tags.student_team_int_member_delt_title'); ?>" style="width:50%" type="submit">
                                            <i class='fas fa-trash-alt' style="color:black"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endif; ?>
                        <?php if(isset($tms[4])): ?>
                            <tr id="105">
                                <td><?php echo e($tms[4]->firstname); ?> <?php echo e($tms[4]->lastname); ?></td>
                                <td><?php echo e($tms[4]->gradename()->first()->name); ?></td>
                                <td>
                                    <form action="<?php echo e(route('team.rmv')); ?>" method="post">
                                        <?php echo e(csrf_field()); ?>

                                        <input type="hidden" name="sID" value="<?php echo e($tms[1]->sID); ?>" />

                                        <button class="Deletebutton" title="<?php echo app('translator')->getFromJson('tags.student_team_int_member_delt_title'); ?>" style="width:50%" type="submit">
                                            <i class='fas fa-trash-alt' style="color:black"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endif; ?>
                        <?php if(isset($tms[5])): ?>
                            <p>Error</p>
                        <?php endif; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><?php echo app('translator')->getFromJson('profiles.student_team_dashboard_tm_invite'); ?></div>
            <div id="panelbody"class="panel-body">
                <div>
                    <?php if($team->teachID == null and $team->teachID == ""): ?>
                        <p><?php echo app('translator')->getFromJson('profiles.student_team_teacher_inv_expl'); ?></p>
                        <button class="Linkbutton" id="linkbtn" title="<?php echo app('translator')->getFromJson('tags.student_team_int_member_add_teach_title'); ?>" style="width:30%" type="button" class="btn btn-default btn-lg">Copy Link</button></div>
                        <p id="Text" style="display: none;"><?php echo app('translator')->getFromJson('profiles.student_team_teacher_inv_copied'); ?></p><br/>
                        <input type="text" title="<?php echo app('translator')->getFromJson('tags.student_team_int_member_add_teach_title'); ?>" value="<?php echo e($tchinv); ?>"/>
                    <?php else: ?>
                        <?php if($tch == null): ?>
                            <p><?php echo app('translator')->getFromJson('profiles.student_team_teacher_noteacher'); ?></p>
                        <?php else: ?>
                        <p><?php echo app('translator')->getFromJson('profiles.student_team_teacher_teacher'); ?> <b><?php echo e($tch->name); ?></b></p>
                        <?php endif; ?>
                    <?php endif; ?>
                    <br />

                <?php if($team->memberc <5): ?>
                    <div>
                        <p><?php echo app('translator')->getFromJson('profiles.student_team_dashboard_tm_inv_desc'); ?></p>
                        <button class="Linkbutton" id="linkbtn2" title="<?php echo app('translator')->getFromJson('tags.student_team_int_member_add_stud_title'); ?>" style="width:30%" type="button" class="btn btn-default btn-lg">Copy Link</button>
                    </div>
                    <p id="Text1" style="display: none;"><?php echo app('translator')->getFromJson('profiles.student_team_teacher_inv_copied'); ?></p><br/>
                    <input type="text" title="<?php echo app('translator')->getFromJson('tags.student_team_int_member_add_stud_title'); ?>" value="<?php echo e($inv); ?>"/>
                <?php else: ?>
                    <p><?php echo app('translator')->getFromJson('profiles.student_team_dashboard_tm_max_membermsg'); ?></p>
                <?php endif; ?>

            </div>
        </div>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><?php echo app('translator')->getFromJson('profiles.student_team_ideas_title'); ?></div>
            <div id="panelbody"class="panel-body">
                <h3><?php echo app('translator')->getFromJson('profiles.student_team_ideas_new_idea'); ?></h3>
                <?php echo e(csrf_field()); ?>

                <?php echo Form::open(array('action' => 'Team\TeamIdeaController@store', 'method'=>'post')); ?>


                <div class="form-group row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <?php echo Form::label('iname', __('profiles.student_team_ideas_new_idea_form_iname')); ?>

                            <?php echo Form::text('iname', null,['placeholder'=>__('profiles.student_team_ideas_new_idea_form_placeholder_iname'),'required','title'=>__('tags.student_team_int_ideas_iname_title'), 'class'=>'form-control']); ?>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo Form::label('ishdesc', __('profiles.student_team_ideas_new_idea_form_ishdesc')); ?>

                    <?php echo Form::text('ishdesc', null,['placeholder'=>__('profiles.student_team_ideas_new_idea_form_placeholder_ishdesc'),'required','title'=>__('tags.student_team_int_ideas_ishdesc_title'),'class'=>'form-control']); ?>

                </div>

                <div class="form-group">
                    <?php echo Form::label('idesc', __('profiles.student_team_ideas_new_idea_form_idesc')); ?>

                    <?php echo Form::textarea('idesc', null,['placeholder'=>__('profiles.student_team_ideas_new_idea_form_placeholder_idesc'),'required','title'=>__('tags.student_team_int_ideas_idesc_title'),'class'=>'form-control']); ?>

                </div>



                <div class="form-group">
                    <?php echo Form::submit(__('profiles.student_team_ideas_new_idea_form_submit'), ['class'=>'btn btn-primary PDF-Button btn-default btn-lg btn-block', 'title'=>__('tags.student_team_int_ideas_submit_title')]); ?>

                </div>
                <?php echo Form::close(); ?>

                <?php if(count($ideas) > 0): ?>
                    <hr>
                    <h2><?php echo app('translator')->getFromJson('profiles.student_team_ideas_subtitle'); ?> </h2>
                    <?php $__currentLoopData = $ideas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"><a href="<?php echo e(url('/team/'.$idea->iID.'/idea')); ?>"><?php echo e($idea->iname); ?></a></h3>
                                <p class="card-text"><?php echo e(str_limit($idea->idesc,100)); ?></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('jspace'); ?>
    <script>
        $(document).ready(function(){
            $("#linkbtn").click(function(){
                $("#Text").show();
            });
            $("#linkbtn2").click(function(){
                $("#Text1").show();
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>