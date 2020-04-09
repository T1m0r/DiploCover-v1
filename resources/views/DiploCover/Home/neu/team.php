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
        <title>DiploCover | Über uns</title>
        <?php echo($rphead); ?>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="../../../../../public/vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../../../../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="../../../../../public/css/home/animate.css" rel="stylesheet">
        <link href="../../../../../public/vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES-->
        <link href="../../../../../public/css/home/layout.css" rel="stylesheet" type="text/css"/>
        <link href="../../../../../public/css/home/col.css" rel="stylesheet" type="text/css"/>
        <link href="../../../../../public/css/home/particl.css" rel="stylesheet" type="text/css"/>
        <link href="../../../../../public/css/home/hover-min.css" rel="stylesheet" type="text/css"/>
        <!-- Favicon -->


    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>
      <!-- Google Tag Manager (noscript) -->
        <?php echo($gtagbody); ?>
      <!-- End Google Tag Manager (noscript) -->

      <!-- stats - count particles -->
      <div class="count-particles"> <span class="js-count-particles"></span></div>



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
                                <?php echo($tmtabs); ?>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->



        </header>
        <!--========== END HEADER ==========-->
        <!-- particles.js container -->

        <!--========== PARALLAX ==========-->
        <div class="parallax-window" data-parallax="scroll" data-image-src=<?php echo($slide[3]); ?>>
            <div class="parallax-content container">
                <h1 class="carousel-title">Über uns</h1>
            </div>
        </div>
        <!--========== PARALLAX ==========-->

        <!--========== PAGE LAYOUT ==========-->



        <!-- About -->
        <div id="particles-js"></div>
                <div class="content-lg container">

            <div class="row margin-b-20">
                <div class="col-sm-6">
                    <h2>Wie kam es zu DiploCover?</h2>
                </div>

            </div>
            <!--// end row -->

            <div class="row">
                <div class="col-sm-7 sm-margin-b-50">
                    <div class="margin-b-30">
                        <p style="font-size: 20px;">Die Idee von DiploCover entstand schon 2017 durch Franz Kaltenbrunner, Jakob Kreutner und Michael Kröll. Aufgrund vieler Beschwerden von Firmen und Schülerseiten musste nach einer Lösung gesucht werden, wodurch dann die Idee von einer Diplomarbeitsbörse für Schüler und Firmen entstand. </p>
                    </div>
                    <p style="font-size: 20px;">Um das Team in den Bereichen Projektmanagement  und Programmierung zu stärken, kamen noch Jana Hollaus, Alexander Schmidt und Boran Polat dazu. Seitdem arbeiten alle zusammen ehrgeizig an der Fertigstellung von DiploCover. Der erste Probelauf wird Herbst 2018 an der HTL-Jenbach gemacht. Erst  dann soll HTL-Tirol integriert werden.</p>
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <img class="img-responsive" src="../../../../../public/images/home/640x380/01.jpg" alt="Our Office">
                </div>
            </div>
            <!--// end row -->
        </div>

        <!-- End About -->



        <!-- Team -->

        <div class="bg-color-sky-light">
            <div class="content-lg container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Das Team</h2>
                      <!--  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>-->
                    </div>
                </div>
                <!--// end row -->

                <div class="row">
                    <!-- Team -->
                    <div class="col-sm-4 sm-margin-b-50">
                      <div class=" hvr-grow">
                        <div class="bg-color-white margin-b-20">
                            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="img-responsive" src="../../../../../public/images/home/team/DSC_4582-Bearbeitet-uai-960x960.jpg" alt="Team Image">
                            </div>
                        </div>
                        <h4><a>Mag. Franz Kaltenbrunner</a> <span class="text-uppercase margin-l-20">Projekt Betreuer</span></h4>
                      </div>
                        <p></p>
                        <button class="collabsable">Mehr</button>
                          <div class="bonye">
                            <ul>Studium der Wirtschafts- und Sozialwissenschaften an der Leopold Franzens Universität Innsbruck
                              Qualitäts-, Prozess-, Umwelt-, Arbeitssicherheits- und Gesundheitsmanager
                              Geschäftsführender Gesellschafter Concepts Systementwicklung GmbH
                              Auditor der Quality Austria (9001, 14001, 45001) </ul>
                            </div>
                    </div>
                    <!-- End Team -->

                    <!-- Team -->
                    <div class="col-sm-4 sm-margin-b-50 ">
                      <div class=" hvr-grow">
                        <div class="bg-color-white margin-b-20">
                            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="img-responsive" src="../../../../../public/images/home/team/DSC_4583-Bearbeitet-uai-960x960.jpg" alt="Team Image">
                            </div>
                        </div>
                        <h4><a >Alexander Schmidt</a> <span class="text-uppercase margin-l-20">Projektmanagement</span></h4>
                      </div>
                        <p></p>
                        <button class="collabsable">Mehr</button>
                          <div class="bonye">
                            <ul>Besucht den Zweig Maschinenbau-Anlagentechnik der HTL-Jenbach.
                            <br>Bei Diplocover ist er für das Projektmanagement zuständig.</ul>
                            </div>
                    </div>
                    <!-- End Team -->

                    <!-- Team -->
                    <div class="col-sm-4 sm-margin-b-50">
                      <div class=" hvr-grow">
                        <div class="bg-color-white margin-b-20">
                            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="img-responsive" src="../../../../../public/images/home/team/DSC_4584-Bearbeitet-uai-960x960.jpg" alt="Team Image">
                            </div>
                        </div>
                        <h4><a >Jana Hollaus</a> <span class="text-uppercase margin-l-20">Marketing</span></h4>
                      </div>
                        <p></p>
                        <button class="collabsable">Mehr</button>
                          <div class="bonye">
                            <ul>Besucht den Zweig Maschinenbau-Anlagentechnik.
                              <br>Bei Diplocover ist sie für das Projektmanagement zuständig.</ul>
                            </div>
                    </div>
                    <!-- End Team -->
                </div>
                <br>
                <br>
                <div class="row">
                    <!-- Team -->
                    <div class="col-sm-4 sm-margin-b-50">
                      <div class=" hvr-grow">
                        <div class="bg-color-white margin-b-20">
                            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="img-responsive" src="../../../../../public/images/home/team/DSC_4585-Bearbeitet-uai-960x960.jpg" alt="Team Image">
                            </div>
                        </div>
                        <h4><a>Boran Polat</a> <span class="text-uppercase margin-l-20">Programmierung (Frontend)</span></h4>
                      </div>
                        <p></p>
                        <button class="collabsable">Mehr</button>
                          <div class="bonye">
                            <ul>Besucht den Zweig Wirtschaftsingenieur der HTL-Jenbach.
                            <br> Bei DiploCover ist seine Hauptaufgabe das Design des Frontend also des User-Interface</ul>
                            </div>
                    </div>
                    <!-- End Team -->

                    <!-- Team -->
                    <div class="col-sm-4 sm-margin-b-50">
                      <div class=" hvr-grow">
                        <div class="bg-color-white margin-b-20">
                            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="img-responsive" src="../../../../../public/images/home/team/DSC_4586-Bearbeitet-uai-960x960.jpg" alt="Team Image">
                            </div>
                        </div>
                        <h4><a >Jakob Kreutner</a> <span class="text-uppercase margin-l-20">Programmierung (Backend) </span><p>Hauptansprechperson</p></h4>
                      </div>
                        <p></p>
                        <button class="collabsable">Mehr</button>
                          <div class="bonye">
                            <ul>Besucht den Zweig Wirtschaftsingenieur an der HTL Jenbach.
                               Zu seinen Hobbys zählen an Computern basteln und "rapid prototyping"(3D-Drucken).
                              <br> Bei Diplocover ist er für die Entwicklung des Backends(Program) zuständig. Weiters ist er Gründungsmitglied und Co-Eigentümer.</ul>
                            </div>
                          </div>
                    <!-- Team -->
                    <div class="col-sm-4 sm-margin-b-50">
                      <div class=" hvr-grow">
                        <div class="bg-color-white margin-b-20">
                            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="img-responsive" src="../../../../../public/images/home/team/DSC_4587-Bearbeitet-uai-960x960.jpg" alt="Team Image">
                            </div>
                        </div>
                        <h4><a >Michael Kröll</a> <span class="text-uppercase margin-l-20">Design / Finanzen</span><p>Hauptansprechperson</p></h4>
                      </div>
                        <p></p>
                        <button class="collabsable">Mehr</button>
                          <div class="bonye">
                            <ul>Schüler an der HTL-Jenbach im Bereich Wirtschaftsingenieur im Maschinenbau. Hat sich hobbymäßig in den Bereichen "rapid prototyping" und Webdesign spezialisiert.
                            <br> Bei DiploCover ist er für das Design von Logos usw. und das verwalten der Finaznen zuständig.Weiters ist er Gründungsmitglied und Co-Eigentümer.</ul>
                            </div>
                    </div>
                    <!-- End Team -->
                </div>
                <!--// end row -->
            </div>
        </div>

        <!-- End Team -->
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
      <?php echo($footer); ?>
        <!--========== END FOOTER ==========-->



        <!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
        <script src="../../../../../public/js/home/particles.min.js"></script>
        <script src="../../../../../public/js/home/col.js" type="text/javascript"></script>
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
        <script src="../../../../../public/js/home/components/swiper.min.js" type="text/javascript"></script>
        <script src="../../../../../public/js/home/components/wow.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>
