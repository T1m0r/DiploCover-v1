<?php $__env->startSection('head'); ?>
    <style>
        button[id="Buttons"]{
            width: auto;
            background-color: #7C7C7C;
            color: white;
            padding: 5px 10px;
            margin:  5px 0;
            border: none;
            border-radius: 50px;
            cursor: pointer;}
        button[id="Buttons"]:hover {
            background-color: #676767;}
        button[id="Erstell_Buttons"]{
            width:auto;
            background-color: white;
            color: black;
            padding: auto;
            margin: auto;
            border: none;
            border-radius: 100px;
            cursor: pointer;}
        #panelbody{
            webkit-box-shadow: 30px 32px 90px -11px rgba(99,125,116,0.75);
            moz-box-shadow: 30px 32px 90px -11px rgba(99,125,116,0.75);
            box-shadow: 30px 32px 90px -11px rgba(99,125,116,0.75);
            background-color:#ffffff}
        #ShowMore{
            width: auto;
            background-color: #7C7C7C;
            color: white;
            padding: 5px 10px;
            margin:  5px 0;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            float:right;}
        #Profilbild{
            float:left;
            border-radius: 100px;}
        #Logo{
            border-radius: 175px;
            display:block;
            margin:0 auto;}
        .hallo{
            text-align: center;}
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <br />
        <div class="row">
            <div class="col-sm-3">
                <div id="panelgroup"class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading"></div>
                        <div id="panelbody"class="panel-body">
                            <div>
                                <button id="Buttons" onclick="location.href = '/chome'" style="width:100%" type="button" class="btn btn-default btn-lg btn-block"><?php echo app('translator')->getFromJson('profiles.company_menu_lnt_home'); ?></button>
                                <button id="Buttons" onclick="location.href = '/cedit'" style="width:100%" type="button" class="btn btn-default btn-lg btn-block"><?php echo app('translator')->getFromJson('profiles.company_menu_lnt_edit'); ?></button>
                                <button id="Buttons" onclick="location.href = '/company/da/dashboard'" style="width:100%" type="button" class="btn btn-default btn-lg btn-block"><?php echo app('translator')->getFromJson('profiles.company_menu_lnt_da_dashboard'); ?></button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-7 container-fluid">
                <img id="Logo" src="<?php echo e(asset($comp->profpic)); ?>" alt="Avatar" height="100">
                <div class="hallo"><h1><?php echo e($comp->compname); ?></h1></div>
                <div id="panelgroup"class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading"><?php echo app('translator')->getFromJson('profiles.company_empm_panel_empl_heading'); ?></div>
                        <div id="panelbody"class="panel-body">





                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appemp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>