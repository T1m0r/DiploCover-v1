<!DOCTYPE html>
<html>
<head>
    <title>Student PDF</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .box{
            width:600px;
            margin:0 auto;
        }
    </style>
</head>
<body>
<br />
<div class="container">
    <h3 align="center"><?php echo app('translator')->getFromJson('profiles.teacher_grade_pdf_heading_grade'); ?> <?php echo e($grade->name); ?> | <?php echo app('translator')->getFromJson('profiles.teacher_grade_pdf_heading_name'); ?></h3><br />

    <div class="row">
        <div class="col-md-7" align="right">
            <h4>DiploCover <?php echo e($school->schoolname); ?> | <?php echo e($grade->name); ?> - <?php echo app('translator')->getFromJson('profiles.teacher_grade_pdf_heading_name'); ?> - <?php echo e(route('register')); ?></h4>
        </div>
    </div>
    <br />
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th><?php echo app('translator')->getFromJson('profiles.teacher_grade_pdf_table_nr'); ?></th>
                <th><?php echo app('translator')->getFromJson('profiles.teacher_grade_pdf_table_st_id'); ?></th>
                <th><?php echo app('translator')->getFromJson('profiles.teacher_grade_pdf_table_st_code'); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i = $i +1); ?></td>
                    <td><p><?php echo app('translator')->getFromJson('profiles.teacher_grade_pdf_table_st_id'); ?>  -  <?php echo e($student->sID); ?></p></td>
                    <td><p><?php echo app('translator')->getFromJson('profiles.teacher_grade_pdf_table_st_code'); ?>  -  <?php echo e($student->scode); ?></p></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>