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
        <title>DiploCover | Was ist DiploCover?</title>
        <?php echo($rphead); ?>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="../../../../../public/vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../../../../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="../../../../../public/css/home/animate.css" rel="stylesheet">
        <link href="../../../../../public/vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="../../../../../public/css/home/layout.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="../../../../../public/images/home/icon/dc_show.ico"/>
        <link href="../../../../../public/css/home/particl.css" rel="stylesheet" type="text/css"/>
        <link href="../../../../../public/css/home/hover-min.css" rel="stylesheet" type="text/css"/>
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
                                <?php echo($dctabs); ?>
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
        <div class="parallax-window" data-parallax="scroll" data-image-src=<?php echo($slide[2]); ?>>
            <div class="parallax-content container">
                <h1 class="carousel-title">DiploCover</h1>
                <p style="color:#0095ff; font-size:30px">    Was ist DiploCover?</p>
            </div>
        </div>
        <!--========== PARALLAX ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- Pricing -->

        <!--<div class="bg-color-sky-light">
            <div class="content-lg container">
                <div class="row row-space-1">
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <!-- Pricing -->
                        <!--    <div class="pricing">
                                <div class="margin-b-30">
                                    <i class="pricing-icon icon-chemistry"></i>
                                    <h3>Starter Kit <span> - $</span> 49</h3>
                                    <p>Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <li class="pricing-list-item">Basic Features</li>
                                    <li class="pricing-list-item">Up to 5 products</li>
                                    <li class="pricing-list-item">50 Users Panels</li>
                                </ul>
                                <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                            </div>  -->
                            <!-- End Pricing -->
                      <!--  </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                            <!-- Pricing -->
                          <!--  <div class="pricing pricing-active">
                                <div class="margin-b-30">
                                    <i class="pricing-icon icon-badge"></i>
                                    <h3>Professional <span> - $</span> 149</h3>
                                    <p>Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <li class="pricing-list-item">Basic Features</li>
                                    <li class="pricing-list-item">Up to 100 products</li>
                                    <li class="pricing-list-item">100 Users Panels</li>
                                </ul>
                                <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                            </div>
                            <!-- End Pricing
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".1s"> -->
                            <!-- Pricing -->
                            <!--<div class="pricing">
                                <div class="margin-b-30">
                                    <i class="pricing-icon icon-shield"></i>
                                    <h3>Advanced <span> - $</span> 249</h3>
                                    <p>Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <li class="pricing-list-item">Extended Features</li>
                                    <li class="pricing-list-item">Unlimited products</li>
                                    <li class="pricing-list-item">Unlimited Users Panels</li>
                                </ul>
                                <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                            </div>-->
                            <!-- End Pricing -->
                        <!--</div>
                    </div>
                </div>-->
                <!--// end row -->
            <!--</div>
        </div>  -->
        <!-- End Pricing -->




        <!-- Service --><div id="particles-js"></div>
        <div class="content-lg container">

        <div class="row margin-b-20">
        <div class="col-sm-6">
            <h2>Was ist DiploCover?</h2>
        </div>

        </div>
        <!--// end row -->

        <div class="row">
          <blockquote class="blockquote backclass">
              <div class="margin-b-20 "  style="font-size:20px;">
                DiploCover ist eine Internetplattform welche es Firmen ermöglicht ihre Diplomarbeiten an die Schüler/innen vorzustellen. Somit sind nicht mehr viele Schritte notwendig zu seiner Diplomarbeit zu kommen. Außerdem bieten wir für Schüler/innen die Möglichkeit selbst Ideen zu posten um Firmen zu finden.

  Mit unseren "Wie mache ich eine Diplomarbeit?" Vorlagen, können Schüler/innen immer schnell nachschauen welche Schritte für eine perfekte Diplomarbeit nötig sind. Auch Unternehmen können durch viele Vorteile profitieren: Mit unserem Betreuungsservice müssen Sie nicht mal selbst die Diplomarbeiten online stellen.

  Um keine Fake-Profile auf der Website zu haben, benötigt jede/r Schüler/in und jedes Unternehmen ein Profil welches vom Team selbst freigeschaltet werden muss.
              <br>
              <br>
              Wie schon erwähnt bieten wir erstmalig auch Schüler/innen an ihre eigenen Ideen auf der Website zu präsentieren. Dies können wiederum interesierte Firmen verwenden um daraus eine Diplomarbeit machen.

              Natürlich können Schüler/innen und Firmen mit der Filterfunktion Ihre gewünschten Diplomarbeiten (Schüler/in) und Diplomanden (Firma) finden. Dies verringert natürlich den Suchaufwand enorm.

              Außerdem bieten wir Ihnen gute Werbemöglichkeiten für Ihre Firma oder ihr Projekt.

              <br>
              <br>
              Du willst mehr über DiploCover erfahren? Dann kontaktiere uns über das untere Kontaktformular oder über den Tab "Kontakt", wir freuen uns schon auf deine Anfrage!

            </div>
            <!--  <p><span class="fweight-700 color-link">Alex Clarson</span>, Metronic Customer</p>-->
          </blockquote>

        </div>
        <!--// end row -->
        </div>



        <!-- End Service -->



        <!-- Testimonials -->




        <?php echo($clientslider); ?>

        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="content-lg container">
                <h2>Partner</h2>
              <blockquote class="blockquote">
                  <div class="margin-b-20 supp" style="font-size: 20px;">
                    Wir werden freundlich von der <a href="http://www.htl-jenbach.at" class="hvr-underline-from-center"><span class="color-dark">HTL-Jenbach</span></a> und von <a href="http://www.htl.tirol" class="hvr-underline-from-center"><span class="color-dark" >HTL-Tirol</span></a> unterstützt!
                <!--  <p><span class="fweight-700 color-link">Alex Clarson</span>, Metronic Customer</p>-->
                </div>
              </blockquote>
              <a href="http://www.htl-jenbach.at"><img class="hvr-float" height="120px" src="../../../../../public/images/home/sup/HTL-Jenbach.png" alt="HTL-Jenbach"></a>&nbsp;&emsp;&emsp;
              <a href="http://www.htl.tirol"><img class="hvr-float" height="80px" src="../../../../../public/images/home/sup/HTL-Tirol.png" alt="HTL-Tirol"></a>
              <br />
              <blockquote>Durch Bilder unterstützt von <a href="https://www.instagram.com/fabian.schiestl/" class="hvr-underline-from-center"><span class="color-dark">Fabian Schiestl</span></a></blockquote>
            </div>
        </div>



        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
      <?php  echo($footer); ?>
        <!--========== END FOOTER ==========-->
        <!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
        <script src="../../../../../public/js/home/particles.min.js"></script>
        <script src="../../../../../public/js/home/partivle.js" type="text/javascript"></script>
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
        <script src="../../../../../public/vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="../../../../../public/js/home/layout.min.js" type="text/javascript"></script>
        <script src="../../../../../public/js/home/components/wow.min.js" type="text/javascript"></script>
        <script src="../../../../../public/js/home/components/swiper.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>
