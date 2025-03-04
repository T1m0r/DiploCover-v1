<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if(config('backpack.base.meta_robots_content')): ?>
    <meta name="robots" content="<?php echo e(config('backpack.base.meta_robots_content', 'noindex, nofollow')); ?>">
    <?php endif; ?>

    
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

    <title>
      <?php echo e(isset($title) ? $title.' :: '.config('backpack.base.project_name').' Admin' : config('backpack.base.project_name').' Admin'); ?>

    </title>

    <?php echo $__env->yieldContent('before_styles'); ?>
    <?php echo $__env->yieldPushContent('before_styles'); ?>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/adminlte/')); ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('vendor/adminlte/')); ?>/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/adminlte/')); ?>/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('vendor/adminlte/')); ?>/plugins/pace/pace.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/backpack/pnotify/pnotify.custom.min.css')); ?>">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- BackPack Base CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/backpack/backpack.base.css')); ?>?v=2">
    <?php if(config('backpack.base.overlays') && count(config('backpack.base.overlays'))): ?>
        <?php $__currentLoopData = config('backpack.base.overlays'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $overlay): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <link rel="stylesheet" href="<?php echo e(asset($overlay)); ?>">
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>


    <?php echo $__env->yieldContent('after_styles'); ?>
    <?php echo $__env->yieldPushContent('after_styles'); ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition <?php echo e(config('backpack.base.skin')); ?> sidebar-mini">
	<script type="text/javascript">
		/* Recover sidebar state */
		(function () {
			if (Boolean(sessionStorage.getItem('sidebar-toggle-collapsed'))) {
				var body = document.getElementsByTagName('body')[0];
				body.className = body.className + ' sidebar-collapse';
			}
		})();
	</script>
    <!-- Site wrapper -->
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo e(url('')); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><?php echo config('backpack.base.logo_mini'); ?></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><?php echo config('backpack.base.logo_lg'); ?></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only"><?php echo e(trans('backpack::base.toggle_navigation')); ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <?php echo $__env->make('backpack::inc.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </nav>
      </header>

      <!-- =============================================== -->

      <?php echo $__env->make('backpack::inc.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
         <?php echo $__env->yieldContent('header'); ?>

        <!-- Main content -->
        <section class="content">

          <?php echo $__env->yieldContent('content'); ?>

        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <footer class="main-footer">
        <?php if(config('backpack.base.show_powered_by')): ?>
            <div class="pull-right hidden-xs">
              <?php echo e(trans('backpack::base.powered_by')); ?> <a target="_blank" href="http://backpackforlaravel.com?ref=panel_footer_link">Backpack for Laravel</a>
            </div>
        <?php endif; ?>
        <?php echo e(trans('backpack::base.handcrafted_by')); ?> <a target="_blank" href="<?php echo e(config('backpack.base.developer_link')); ?>"><?php echo e(config('backpack.base.developer_name')); ?></a>.
      </footer>
    </div>
    <!-- ./wrapper -->


    <?php echo $__env->yieldContent('before_scripts'); ?>
    <?php echo $__env->yieldPushContent('before_scripts'); ?>

    <!-- jQuery 2.2.3 -->
    <script src="<?php echo e(asset('vendor/adminlte')); ?>/bower_components/jquery/dist/jquery.min.js"></script>
    
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo e(asset('vendor/adminlte')); ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo e(asset('vendor/adminlte')); ?>/plugins/pace/pace.min.js"></script>
    <script src="<?php echo e(asset('vendor/adminlte')); ?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    
    <script src="<?php echo e(asset('vendor/adminlte')); ?>/dist/js/adminlte.min.js"></script>

    <!-- page script -->
    <script type="text/javascript">
        /* Store sidebar state */
        $('.sidebar-toggle').click(function(event) {
          event.preventDefault();
          if (Boolean(sessionStorage.getItem('sidebar-toggle-collapsed'))) {
            sessionStorage.setItem('sidebar-toggle-collapsed', '');
          } else {
            sessionStorage.setItem('sidebar-toggle-collapsed', '1');
          }
        });
        // To make Pace works on Ajax calls
        $(document).ajaxStart(function() { Pace.restart(); });

        // Ajax calls should always have the CSRF token attached to them, otherwise they won't work
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        // Set active state on menu element
        var current_url = "<?php echo e(Request::fullUrl()); ?>";
        var full_url = current_url+location.search;
        var $navLinks = $("ul.sidebar-menu li a");
        // First look for an exact match including the search string
        var $curentPageLink = $navLinks.filter(
            function() { return $(this).attr('href') === full_url; }
        );
        // If not found, look for the link that starts with the url
        if(!$curentPageLink.length > 0){
            $curentPageLink = $navLinks.filter(
                function() { return $(this).attr('href').startsWith(current_url) || current_url.startsWith($(this).attr('href')); }
            );
        }

        $curentPageLink.parents('li').addClass('active');
        
        var activeTab = $('[href="' + location.hash.replace("#", "#tab_") + '"]');
        location.hash && activeTab && activeTab.tab('show');
        $('.nav-tabs a').on('shown.bs.tab', function (e) {
            location.hash = e.target.hash.replace("#tab_", "#");
        });
    </script>

    <?php echo $__env->make('backpack::inc.alerts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->yieldContent('after_scripts'); ?>
    <?php echo $__env->yieldPushContent('after_scripts'); ?>

    <!-- JavaScripts -->
    
</body>
</html>
