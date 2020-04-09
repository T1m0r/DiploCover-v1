<!DOCTYPE html>
<!-- ==============================
        Project:        DiploCover HomePage
        Version:        1.2
        Author:         Jakob Kreutner(Timor)[Backend]
                        Boran Polat [Forntend]
        Email:          jkreutner@tsn.at
    ================================== -->
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <!--Meta stuff--->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta name="description" content="Diplocover ist ein Netzwerk, das die Diplomarbeitsvermittlung für Tiroler Schüler stark vereinfacht. :D">
    <meta content="" name="Website DiploCover"/>
    <meta name="author" content="Timor">



    <!------------------- BEGIN HEAD ---------------------->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121319979-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-121319979-2');
    </script>
    <!------------ Google Tag Manager -------------->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-K9JPWC9');</script>
    <!------------ End Google Tag Manager -------------->



    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <script>window.Laravel = {csrfToken: '<?php echo e(csrf_token()); ?>' }</script>
    <title><?php echo e(config('app.name', 'Laravel')); ?> | <?php echo $__env->yieldContent("pgtitle"); ?></title>



    <!----------------------Favicon------------------------------------------------------------------------->
    <!-- Apple Touch Icon (mindestens 200x200px) -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('/images/home/favcon/apple-touch-icon.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('/images/home/favcon/favicon-32x32.png')); ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo e(asset('images/home/favcon/android-chrome-192x192.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('/images/home/favcon/favicon-16x16.png')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('images/home/favcon/dc_show.ico')); ?>"/>
    <link rel="manifest" href="<?php echo e(asset('/images/home/favcon/site.webmanifest')); ?>">
    <link rel="mask-icon" href="<?php echo e(asset('/images/home/favcon/safari-pinned-tab.svg')); ?>" color="#5bbad5">
    <link rel="shortcut icon" href="<?php echo e(asset('/images/home/favcon/favicon.ico')); ?>">
    <meta name="msapplication-TileColor" content="#ff8888">
    <meta name="msapplication-TileImage" content="<?php echo e(asset('/images/home/favcon/mstile-144x144.png')); ?>">
    <meta name="msapplication-config" content="<?php echo e(asset('/img/favcon/browserconfig.xml')); ?>">
    <meta name="theme-color" content="#ff8888">
    <!--=======================================<Windows apple>========================================================-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!--===============================================================================================-->
    <!-- Hilft vorbeugend gegen Probleme mit dupliziertem Inhalt  -->
    <link rel="canonical" href="https://www.diplocover.at">


    <!-------- GLOBAL STYLES ---------->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">



    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/Layout.css')); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>



    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->

    <?php echo $__env->yieldContent('head'); ?>
</head>
<body class="Teacher">
<?php if(session('fail')): ?>
    <!--<div class="row">
                        <div class=" container">  -->
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <h1><?php echo e(session('fail')); ?></h1>
    </div>
    <!--  </div>
 </div>-->
<?php endif; ?>

<?php if(session('success')): ?>
    <!-- <div class="row">
                        <div class=" container">-->
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <h1><?php echo e(session('success')); ?></h1>
    </div>
    <!--</div>
</div>-->
<?php endif; ?>
<div class="container-fluid"><br/>
    <div class="row">
        <div class="col-sm-3 container-fluid">
            <div id="Schatten"class="panel-body">
                <img id="Bild" src="<?php echo e(asset(\Illuminate\Support\Facades\Auth::user()->School()->first()->prfpic)); ?>" alt="Logo" style="width:100%"><br/>
                <img id="Bild" src="<?php echo e(asset('/images/htltirol.png')); ?>" alt="Avatar" style="width:100%"><br/>
                <img id="Bild" src="<?php echo e(asset(\Illuminate\Support\Facades\Auth::user()->prfpic)); ?>" alt="Avatar" style="width:50%"><br/>
                <div class="center"><h2><?php echo e(\Illuminate\Support\Facades\Auth::user()->name); ?></h2></div><br/>
                <button title="<?php echo app('translator')->getFromJson('tags.teacher_app_menu_home_title'); ?>" onclick="location.href ='<?php echo e(route('tch.home')); ?>';" style="width:100%" type="button" class="Layoutbuttons btn-teach-home btn btn-default btn-lg btn-block"><?php echo app('translator')->getFromJson('profiles.teacher_lnt_home'); ?></button>
                <button title="<?php echo app('translator')->getFromJson('tags.teacher_app_menu_settings_title'); ?>" onclick="location.href ='<?php echo e(route('teacher.edit')); ?>';" style="width:100%" type="button" class="Layoutbuttons btn-teach-edit btn btn-default btn-lg btn-block"><?php echo app('translator')->getFromJson('profiles.teacher_lnt_edit'); ?></button>
                <button title="<?php echo app('translator')->getFromJson('tags.teacher_app_menu_da_dashboard_title'); ?>" onclick="location.href ='<?php echo e(route('teacher.da.dashboard')); ?>';" style="width:100%" type="button" class="Layoutbuttons btn-teach-da-dashboard btn btn-default btn-lg btn-block"><?php echo app('translator')->getFromJson('profiles.teacher_lnt_da_dashboard'); ?></button>
                
                <?php if(\Illuminate\Support\Facades\Auth::user()->hasRole('School')): ?>
                    <?php if(\Illuminate\Support\Facades\Auth::user()->School()->first()->teachID == \Illuminate\Support\Facades\Auth::user()->teachID): ?>
                        <button title="<?php echo app('translator')->getFromJson('tags.school_app_menu_school_title'); ?>" style="width:100%;background-color: #FF73FD" data-toggle="collapse" onclick="location.href ='<?php echo e(route('school.home')); ?>';" type="button" class="Layoutbuttons btn btn-default btn-lg btn-block"><?php echo app('translator')->getFromJson('profiles.teacher_lnt_school'); ?></button>
                        <div class="panel-collapse collapse in" id="collapseComp">
                            <button title="<?php echo app('translator')->getFromJson('tags.teacher_app_menu_da_dashboard_title'); ?>" onclick="location.href ='<?php echo e(route('school.home')); ?>';" style="width:100%" type="button" class="Layoutbuttons btn-school-home btn btn-default btn-lg btn-block"><?php echo app('translator')->getFromJson('profiles.school_lnt_home'); ?></button>
                            <button title="<?php echo app('translator')->getFromJson('tags.teacher_app_menu_da_dashboard_title'); ?>" onclick="location.href ='<?php echo e(route('school.edit')); ?>';" style="width:100%" type="button" class="Layoutbuttons btn-school-edit btn btn-default btn-lg btn-block"><?php echo app('translator')->getFromJson('profiles.school_lnt_edit'); ?></button>
                            <button title="<?php echo app('translator')->getFromJson('tags.teacher_app_menu_da_dashboard_title'); ?>" onclick="location.href ='<?php echo e(route('school.da.dashboard')); ?>';" style="width:100%" type="button" class="Layoutbuttons btn-school-da-dashboard btn btn-default btn-lg btn-block"><?php echo app('translator')->getFromJson('profiles.school_lnt_da_dashboard'); ?></button>
                            <button title="<?php echo app('translator')->getFromJson('tags.teacher_app_menu_da_dashboard_title'); ?>" onclick="location.href ='<?php echo e(route('school.manage.teacher')); ?>';" style="width:100%" type="button" class="Layoutbuttons btn-school-teach-dashboard btn btn-default btn-lg btn-block"><?php echo app('translator')->getFromJson('profiles.school_lnt_manage_teacher'); ?></button>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
                <button title="<?php echo app('translator')->getFromJson('tags.teacher_app_menu_logout_title'); ?>" onclick="location.href=' <?php echo e(route('teacher.logout')); ?>';" style="width:50%" type="button" class=" Logout-Button btn btn-default btn-lg btn-block">Logout</button>
            </div>
        </div>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <div class="col-sm-1 container-fluid"></div>
</div>
<?php echo $__env->yieldContent('jspace'); ?>
<!-- JavaScripts -->
<!-- Package JS -->

<!-- Customer JS -->
<script type="text/javascript" src="<?php echo e(asset('js/app.js')); ?>"></script>

</body>
</html>
