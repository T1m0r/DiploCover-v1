<?php $__env->startSection('pgtitle',__('tags.pg_title_st_profile')); ?>
<?php $__env->startSection('head'); ?>

    <style>
        body{
            font-family: "Times New Roman", Times, serif;}
        .btn-st-prof{
            background-color: #cce1ff ;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-sm-1 container-fluid"></div>
    <div class="col-sm-7 container-fluid"><br/>
        <img id="Bild" title="Profile" src="<?php echo e(asset($st_prf->profpic)); ?>" alt="Avatar" style="width:20%"><br/>
        <div class="center"><h1><?php echo e(trim($st->firstname)); ?> <?php echo e(trim($st->lastname)); ?></h1></div><br/>
        <div class="center"><h1><?php echo app('translator')->getFromJson('profiles.student_profile_student'); ?><?php echo e($st->school()->first()->schoolname); ?></h1></div><br/>
        
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><h4><?php echo app('translator')->getFromJson('profiles.student_profile_abme_heading'); ?></h4></div>
            <div class="panel-body">
                <div title=<?php echo app('translator')->getFromJson('tags.student_profile_aboutme_title'); ?> class="AboutMe">
                    <p><?php echo e($st_prf->aboutme); ?></p>
                </div>
            </div>
        </div><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><h4><?php echo app('translator')->getFromJson('profiles.student_profile_cont_heading'); ?><h4></div>
            <div class="panel-body">
                <div class="ContactInfo">
                    <label class="fa fa-envelope" for="E-Mail"><?php echo app('translator')->getFromJson('profiles.student_profile_cont_email'); ?></label>
                    <p><?php echo e($st->email); ?></p>
                    <br/><label class="fas fa-address-book" for="Phone Number"><?php echo app('translator')->getFromJson('profiles.student_profile_cont_team'); ?></label>
                    <?php if($team ==null): ?>
                        <p><?php echo app('translator')->getFromJson('profiles.student_profile_cont_team_noteam'); ?></p>
                    <?php else: ?>
                        <p><?php echo app('translator')->getFromJson('profiles.student_profile_cont_team'); ?> <a href="/student/team/<?php echo e(urlencode($team->teamID)); ?>/profile"><?php echo e($team->tname); ?></a></p>
                    <?php endif; ?>
                    <?php if($st->phonenumber != null and $st->phonenumber != ''): ?>
                        <br/><label class="fas fa-address-book" for="Phone Number"><?php echo app('translator')->getFromJson('profiles.student_profile_cont_phonenumber'); ?></label>
                        <p><?php echo e($st->phonenumber); ?></p>
                    <?php endif; ?>

                    <?php if($st_prf->intressts != null and $st_prf->intressts != ''): ?>
                        <br/><label 	class="fas fa-globe" for="Website"><?php echo app('translator')->getFromJson('profiles.student_profile_cont_intr'); ?></label>
                        <p><?php echo e($st_prf->intressts); ?></p>
                    <?php endif; ?>

                </div>
            </div>
        </div><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><h4 class="fas fa-file-alt"><?php echo app('translator')->getFromJson('profiles.student_profile_doc_heading'); ?><h4></div>
            <div class="panel-body">
                <div class="ContactInfo">
                    <?php if(($st_prf->lebpath == "" or $st_prf->lebpath == null) and($st_prf->zeugpath == "" or $st_prf->zeugpath == null)
                        and($st_prf->otherpath1 == "" or $st_prf->otherpath1 == null) and ($st_prf->otherpath2 == "" or $st_prf->otherpath2 == null)): ?>
                        <p><?php echo app('translator')->getFromJson('profiles.employee_student_profile_nodocs'); ?></p>
                    <?php else: ?>
                        <?php if($st_prf->lebpath != "" or $st_prf->lebpath != null): ?>
                            <h5><?php echo app('translator')->getFromJson('profiles.student_profile_cv_heading'); ?></h5>
                            <?php if(pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='docx'): ?>
                                <a href="<?php echo e(asset($st_prf->lebpath)); ?>">Lebenslauf</a>
                            <?php elseif(pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='pdf'): ?>
                                <embed src="<?php echo e(asset($st_prf->lebpath)); ?>"  style ="height:40em; width: 60em;"/>
                            <?php elseif(pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='png' or pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='jpeg' or pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='jpg' or pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='gif' or pathinfo($st_prf->lebpath, PATHINFO_EXTENSION) =='svg'): ?>
                                <img src="<?php echo e(asset($st_prf->lebpath)); ?>"  style="width: 60em;"/>
                            <?php else: ?>
                                <p class="error"><?php echo app('translator')->getFromJson('profiles.student_profile_doc_error'); ?></p>
                            <?php endif; ?>
                            
                        <?php endif; ?>
                        <?php if($st_prf->zeugpath != "" or $st_prf->zeugpath != null): ?>
                            <h5><?php echo app('translator')->getFromJson('profiles.student_profile_grade_heading'); ?></h5>
                            <?php if(pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='docx'): ?>
                                <a href="<?php echo e(asset($st_prf->zeugpath)); ?>">Zeugnis</a>
                            <?php elseif(pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='pdf'): ?>
                                <embed src="<?php echo e(asset($st_prf->zeugpath)); ?>"  style ="height:40em; width: 60em;"/>
                            <?php elseif(pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='png' or pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='jpeg' or pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='jpg' or pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='gif' or pathinfo($st_prf->zeugpath, PATHINFO_EXTENSION) =='svg'): ?>
                                <img src="<?php echo e(asset($st_prf->zeugpath)); ?>" style="width: 60em;"/>
                            <?php else: ?>
                                <p class="error"><?php echo app('translator')->getFromJson('profiles.student_profile_doc_error'); ?></p>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if($st_prf->otherpath1 != "" or $st_prf->otherpath1 != null): ?>
                            <h5><?php echo app('translator')->getFromJson('profiles.student_profile_odoc_heading'); ?></h5>
                            <?php if(pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='docx'): ?>
                                <a href="<?php echo e(asset($st_prf->otherpath1)); ?>"><?php echo e(pathinfo($st_prf->otherpath1, PATHINFO_BASENAME)); ?></a>
                            <?php elseif(pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='pdf'): ?>
                                <embed src="<?php echo e(asset($st_prf->otherpath1)); ?>"  style ="height:40em; width: 60em;"/>
                            <?php elseif(pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='png' or pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='jpeg' or pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='jpg' or pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='gif' or pathinfo($st_prf->otherpath1, PATHINFO_EXTENSION) =='svg'): ?>
                                <img src="<?php echo e(asset($st_prf->otherpath1)); ?>" style="width: 60em;"/>
                            <?php else: ?>
                                <p class="error"><?php echo app('translator')->getFromJson('profiles.student_profile_doc_error'); ?></p>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if($st_prf->otherpath2 != "" or $st_prf->otherpath2 != null): ?>
                            <?php if(pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='docx'): ?>
                                <label for="Letter of Application">Letter of Application:</label>
                                <a href="<?php echo e(asset($st_prf->otherpath2)); ?>"><?php echo e(pathinfo($st_prf->otherpath2, PATHINFO_FILENAME)); ?></a>

                            <?php elseif(pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='pdf'): ?>
                                <embed src="<?php echo e(asset($st_prf->otherpath2)); ?>"  style ="height:40em; width: 60em; "/>
                            <?php elseif(pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='png' or pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='jpeg' or pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='jpg' or pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='gif' or pathinfo($st_prf->otherpath2, PATHINFO_EXTENSION) =='svg'): ?>
                                <img src="<?php echo e(asset($st_prf->otherpath2)); ?>" style="width: 60em;"/>
                            <?php else: ?>
                                <p class="error"><?php echo app('translator')->getFromJson('profiles.student_profile_doc_error'); ?></p>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div><br/>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>