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
    <!-- Um die Web Applikation im Fullscreen laufen zu lassen-->
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
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/Layout.css')); ?>" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <?php echo $__env->yieldContent('head'); ?>
</head>


<body class="Student">
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
    <div id="app">
        <div class="container-fluid"><br/>

            <div class="row">
                <div class="col-sm-3 container-fluid">
                    <div id="Schatten"class="panel-body">
                        <img id="Bild" title="Diplocover" src="<?php echo e(asset('images/Logo.jpeg')); ?>" alt="Logo" style="width:100%"><br/>
                        <img id="Bild" title="HTL Bildung mit Zukunft" src="<?php echo e(asset('images/htltirol.png')); ?>" alt="HTL Tirol" style="width:100%"><br/>
                        <img id="Bild" title="Profile" src="<?php echo e(asset(Auth::user()->stprof->profpic)); ?>" alt="Avatar" style="width:50%"><br/>
                        <div class="center"><h2><?php echo e(Auth::user()->firstname); ?> <?php echo e(Auth::user()->lastname); ?></h2></div><br/>
                        <button title="<?php echo app('translator')->getFromJson('tags.student_app_menu_home_title'); ?>" onclick="location.href ='<?php echo e(route('sthome')); ?>';" style="width:100%" type="button" class="Layoutbuttons btn-st-home btn btn-default btn-lg btn-block"><?php echo app('translator')->getFromJson('profiles.student_app_menu_home'); ?></button>
                        <button title="<?php echo app('translator')->getFromJson('tags.student_app_menu_settings_title'); ?>" onclick="location.href ='<?php echo e(route('student.edit')); ?>';" style="width:100%" type="button" class="Layoutbuttons btn-st-set btn btn-default btn-lg btn-block"><?php echo app('translator')->getFromJson('profiles.student_app_menu_settings'); ?></button>
                       <!--change lingk--> <button title="<?php echo app('translator')->getFromJson('tags.student_app_menu_mprofile_title'); ?>" style="width:100%" onclick="location.href ='<?php echo e(url('/student/'.Auth::user()->sID.'/profile')); ?>';" type="button" class="Layoutbuttons  btn-st-prof btn btn-default btn-lg btn-block"><?php echo app('translator')->getFromJson('profiles.student_app_menu_mprofile'); ?></button>
                        <button title="<?php echo app('translator')->getFromJson('tags.student_app_menu_tm_title'); ?>" style="width:100%"  onclick="location.href ='<?php echo e(route('student.team')); ?>';"type="button" class="Layoutbuttons btn-st-tm btn btn-default btn-lg btn-block"><?php echo app('translator')->getFromJson('profiles.student_app_menu_tm'); ?></button><br/>
                        <button title="<?php echo app('translator')->getFromJson('tags.student_app_menu_logout_title'); ?>" style="width:50%" onclick="location.href ='<?php echo e(route('logout')); ?>';" type="button" class=" Logout-Button btn btn-default btn-lg btn-block"><?php echo app('translator')->getFromJson('profiles.student_app_menu_logout'); ?></button>
                    </div>
                </div>
                <?php echo $__env->yieldContent('content'); ?>
                <div class="col-sm-1 container-fluid"></div>
            </div>
        </div>
    </div>


<?php echo $__env->yieldContent('jspace'); ?>
    <script type="text/javascript" src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
