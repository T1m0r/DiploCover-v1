<?php $__env->startSection('head'); ?>
    <style>
        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);}
        .container:hover .middle {
            opacity: 1;}
        .text {
            background-color: #4CAF50;
            border-radius: 5px;
            color: white;
            font-size: 15px;
            padding: auto;}
        #Teamname{
            font-size: 40px}
        #DasTeam{
            background-color: lightgrey;
            width: auto;
            border: 300px;
            padding: 25px;
            margin: 25px;}
        #Idea {
            width: 100%;
            height: 150px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
            font-size: 16px;
            resize: none;}
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div id="DasTeam"class="row">
        <div class="container-fluid bg-3 text-center">
            <div id="Teamname"class="Team">Team Alpha</div>
        </div>
        <div class="container-fluid bg-3 text-center">
            <div id="Bild1" class="col-sm-4 container">
                <img src="avatar.png" alt="Avatar" class="img-circle">
                <div class="middle">
                    <div class="text">Name</div>
                </div>
            </div>
            <div id="Bild2" class="col-sm-4 container">
                <img src="avatar.png" alt="Avatar" class="img-circle" >
                <div class="middle">
                    <div class="text">Name</div>
                </div>
            </div>
            <div id="Bild3" class="col-sm-4 container">
                <img src="avatar.png" alt="Avatar" class="img-circle" >
                <div class="middle">
                    <div class="text">Name</div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-3 text-center">
            <div id="Bild3" class="col-sm-6 container">
                <img src="avatar.png" alt="Avatar" class="img-circle" >
                <div class="middle">
                    <div class="text">Name</div>
                </div>
            </div>
            <div id="Bild3" class="col-sm-6 container">
                <img src="avatar.png" alt="Avatar" class="img-circle" >
                <div class="middle">
                    <div class="text">Name</div>
                </div>
            </div>
        </div>
    </div>
<p id=Idea> Ich bin eine Idee</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>