<?php include("include.php"); ?>
<!DOCTYPE html>
<!-- ==============================
    Project:        DiploCover HomePage
    Version:        1.0
    Author:         Jakob Kreutner(Timor)
    Email:          jkreutner@tsn.at
================================== -->
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121319979-2"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-121319979-2');
      </script>
        <!-- Google Tag Manager -->
          <?php echo($gtaghead); ?>
        <!-- End Google Tag Manager -->
        <meta charset="utf-8"/>
        <title>DiploCover | Kontakt</title>
        <?php echo($rphead); ?>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="../../../../../public/vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../../../../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>


        <!-- THEME STYLES-->
        <link href="../../../../../public/css/home/layout.css" rel="stylesheet" type="text/css"/>
        <link href="../../../../../public/css/home/particl.css" rel="stylesheet" type="text/css"/>
        <link href="../../../../../public/css/home/hover-min.css" rel="stylesheet" type="text/css"/>
        <link href="../../../../../public/css/home/animate.css" rel="stylesheet">

    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>
      <!-- Google Tag Manager (noscript) -->
        <?php echo($gtagbody); ?>
      <!-- End Google Tag Manager (noscript) -->

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <?php echo($logo); ?>
                        <!-- End Logo -->

                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <?php echo($contabs); ?>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== PARALLAX ==========-->
        <div class="parallax-window" data-parallax="scroll" data-image-src=<?php echo($slide[4]); ?>>
            <div class="parallax-content container">
                <h1 class="carousel-title">Kontakt</h1>
                <p></p>
            </div>
        </div>
        <!--========== PARALLAX ==========-->

        <!--========== PAGE LAYOUT ==========-->

        <!-- Promo Section -->
        <div class="promo-section overflow-h">
            <div class="container">
                <div class="clearfix">
                    <div class="ver-center">
                        <div class="ver-center-aligned">
                            <div class="promo-section-col" >
                                <!--<h2>Our Clients</h2>-->
                                <p style="font-size:20px;">Sie möchten mehr über DiploCovererfahren?</p>
                                <p style="font-size:20px;">Dann nutzen Sie doch einfach unser Kontaktformular oder schreiben Sie uns direkt eine Email an: <a style="text-decoration: underline" class="font-weight-bold" href="mailto:info@diplocover.at">info@diplocover.at</a></p>
                                <p style="font-size:20px;">Wir freuen uns auf Ihre Anfrage</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo-section-img-right">
                <img class="img-responsive" src="../../../../../public/images/home/970x970/02.webp" alt="Content Image">
            </div>
        </div>
        <!-- End Promo Section -->
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
      <?php echo($footer); ?>
        <!--========== END FOOTER ==========-->
        <script src="../../../../../public/js/home/jquery-2.1.0.min.js"></script>
      	<script src="../../../../../public/js/home/app.js"></script>
        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="../../../../../public/vendor/jquery.min.js" type="text/javascript"></script>
        <script src="../../../../../public/vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="../../../../../public/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="../../../../../public/vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="../../../../../public/vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="../../../../../public/vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="../../../../../public/vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="../../../../../public/vendor/jquery.parallax.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="../../../../../public/js/home/layout.min.js" type="text/javascript"></script>
        <script src="../../../../../public/js/home/components/wow.min.js" type="text/javascript"></script>
        <script src="../../../../../public/js/home/components/gmap.min.js" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U&amp;callback=initMap" async defer></script>


    </body>
    <!-- END BODY -->
</html>
