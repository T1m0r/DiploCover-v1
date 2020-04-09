<?php echo $__env->make("Homepage/include.blade.php", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!------------------ DiploCover | Home ------------------>
<!DOCTYPE html>
<html lang="de" class="no-js">
<!------------------- BEGIN HEAD ---------------------->
<head>
    <!------------ Google Tag Manager -------------->
<?php echo($gtaghead); ?>
<!------------ End Google Tag Manager -------------->

    <meta charset="utf-8"/>
    <title>DiploCover | Home</title>
    <!------------ Import static-Header stuff --------->
<?php echo($rphead); ?>

<!-------- GLOBAL STYLES ---------->
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link href="../../../vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="../../../vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

    <!-- THEME STYLES-->
    <link href="css/layout.css" rel="stylesheet" type="text/css"/>
    <link href="css/particl.css" rel="stylesheet" type="text/css"/>
    <link href="css/hover-min.css" rel="stylesheet" type="text/css"/>

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
                        <?php echo($hometabs); ?>
                    </ul>
                </div>
            </div>
            <!-- End Navbar Collapse -->
        </div>
    </nav>
    <!-- Navbar -->
</header>
<!--========== END HEADER ==========-->

<!--========== DiploCover-Home-SLIDER ==========-->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <div class="container">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
    </div>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="img-responsive" src=<?php echo($slide['1']); ?> alt="Slider Image">
            <div class="container">
                <div class="carousel-centered">
                    <div class="margin-b-40">
                        <h1 class="carousel-title">Schnell zur richtigen Diplomarbeit</h1>
                        <p style="color:#1C1D5A; font-size:30px;">Mit DiploCover brauchen Sie viel weniger Zeit <br/> Nebenbei senken Sie auch den Personalaufwand</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="img-responsive" src=<?php echo($slide[2]); ?> alt="Slider Image">
            <div class="container">
                <div class="carousel-centered">
                    <div class="margin-b-40">
                        <h2 class="carousel-title"><br>Einfache Erstellung von Profilen</h2>
                        <p style="color:#F7C9FE; font-size:30px;">Bereits nach nicht mal fünf Minuten können Sie loslegen <br/> Außerdem können wir bei Bedarf ihren Account einrichten</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="img-responsive" src=<?php echo($slide[3]); ?> alt="Slider Image">
            <div class="container">
                <div class="carousel-centered">
                    <div class="margin-b-40">
                        <h2 class="carousel-title">Kostenlos</h2>
                        <p style="color:#F7C9FE; font-size:30px;">Die Registrierung und Verwendung ist komplett gratis <br/> Sie können auch Werbung bei uns später freischalten</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="img-responsive" src=<?php echo($slide[4]); ?> alt="Slider Image">
            <div class="container">
                <div class="carousel-centered">
                    <div class="margin-b-40">
                        <h2 class="carousel-title">Unser Team</h2>
                        <p style="color:#F7C9FE; font-size:30px;">Lerne das Team hinter DiploCover kennen</p>
                    </div>
                    <a href="team.php" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Über uns</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--========== SLIDER ==========-->

<!--========== DiploCover->Home PAGE LAYOUT ==========-->
<!-- DiploCover-Info/Pro -->
<div id="particles-js" style="z-index:0"></div>
<div class="bg-color-sky-light" data-auto-height="true">

    <div class="content-lg container">

        <div class="row row-space-1 margin-b-2">
            <div class="col-sm-4 sm-margin-b-2">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                    <div class="service" data-height="height">
                        <div class="service-element">
                            <i class="service-icon icon-chemistry"></i>
                        </div>
                        <div class="service-info">
                            <h3>Einfach</h3>
                            <p class="margin-b-5">Schritt für Schritt wird dir unser Sytem und seine Arbeitsweise erklärt</p>
                        </div>
                        <a   class="content-wrapper-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 sm-margin-b-2">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                    <div class="service" data-height="height">
                        <div class="service-element">
                            <i class="service-icon icon-screen-tablet"></i>
                        </div>
                        <div class="service-info">
                            <h3>Kostenlos</h3>
                            <p class="margin-b-5">Natürlich bieten wir dir DiploCover völlig kostenlos an</p>
                        </div>
                        <a   class="content-wrapper-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                    <div class="service" data-height="height">
                        <div class="service-element">
                            <i class="service-icon icon-badge"></i>
                        </div>
                        <div class="service-info">
                            <h3>Aktuell</h3>
                            <p class="margin-b-5">DiploCover wird laufend aktualisiert um Bugs zu vermeiden</p>
                        </div>
                        <a   class="content-wrapper-link"></a>
                    </div>
                </div>
            </div>
        </div>
        <!--// end row -->


        <div class="row row-space-1">
            <div class="col-sm-4 sm-margin-b-2">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".4s">
                    <div class="service" data-height="height">
                        <div class="service-element">
                            <i class="service-icon icon-notebook"></i>
                        </div>
                        <div class="service-info">
                            <h3>Werbemöglichkeit</h3>
                            <p class="margin-b-5">Willst du deine Firma oder dein Projekt präsentieren? Kein Thema, bei DiploCover ist dies möglich!</p>
                        </div>
                        <a   class="content-wrapper-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 sm-margin-b-2">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
                    <div class="service" data-height="height">
                        <div class="service-element">
                            <i class="service-icon icon-speedometer"></i>
                        </div>
                        <div class="service-info">
                            <h3>Einfache Profilerstellung</h3>
                            <p class="margin-b-5">Ein Profil zu erstellen ist ganz einfach. Solltest du dennoch Schwierigkeiten haben helfen wir dir gerne weiter.</p>
                        </div>
                        <a   class="content-wrapper-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".6s">
                    <div class="service" data-height="height">
                        <div class="service-element">
                            <i class="service-icon icon-badge"></i>
                        </div>
                        <div class="service-info">
                            <h3>Tirolweit</h3>
                            <p class="margin-b-5">DiploCover soll an das HTL-Tirol System eingeschlossen werden um eine große Anzahl von Schülern garantieren zu können.</p>
                        </div>
                        <a   class="content-wrapper-link"></a>
                    </div>
                </div>
            </div>
        </div>
        <!--// end row -->

    </div><?php echo($clientslider); ?>

</div>
<!-- DiploCover-Info/Pro-->

<!-- Begin DiploCover-Team-Zitate -->
<div class="content-lg container">
    <div class="row">
        <div class="col-sm-9">
            <h2 style="font-size:45px">Zitate:</h2>



            <!-- Swiper Testimonials -->
            <div class="swiper-slider swiper-testimonials">





                <!-- Swiper Wrapper -->
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <blockquote class="blockquote">
                            <div class="margin-b-20" style="font-size:22px">
                                DiploCover wird Diplomarbeiten für alle verbessern.
                            </div>

                            <p><span class="fweight-700 color-link">Jakob Kreutner</span>, Programmierer bei DiploCover</p>
                        </blockquote>
                    </div>
                    <div class="swiper-slide">
                        <blockquote class="blockquote">
                            <div class="margin-b-20" style="font-size:22px">
                                Für mich ist DiploCover eine Herausforderung die ich gerne angenommen habe.
                            </div>
                            <p><span class="fweight-700 color-link">Boran Polat</span>, Programmierer bei DiploCover</p>
                        </blockquote>
                    </div>
                </div>
                <!-- End Swiper Wrapper -->
                <!-- Pagination -->
                <div class="swiper-testimonials-pagination"></div>
            </div>
            <!-- End Swiper Testimonials -->
        </div>
    </div>
    <!--// end row -->
</div>
<!-- End DiploCover-Team-Zit -->

<!-- Begin DiploCover-Info-Text -->
<div class="promo-section overflow-h">
    <div class="container">
        <div class="clearfix">
            <div class="ver-center">
                <div class="ver-center-aligned">
                    <div class="promo-section-col">
                        <h2 style="font-size:45px">Diplomarbeit ?</h2>
                        <p style="font-size:20px; color:#7A7A7A;">Diplomarbeiten zu finden ist schwierig, aber mit DiploCover ändert sich das.</p>
                        <p style="font-size:20px; color:#7A7A7A;"> Wir haben es uns als Ziel gesetzt, dass Diplomarbeiten über eine Plattform vermittelt und gefunden werden können. Damit ist der Suchaufwand für Schüler und Firma wesentlich geringer als zuvor. Da wir derzeit noch in der Entwicklungsphase sind, soll diese Website jediglich als Vorstellungsseite dienen, um Ihnen unser Projekt näher zeigen zu können</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="promo-section-img-right">
        <img class="img-responsive hvr-grow-rotate" src="img/HTL_Jenbach.jpg" alt="Content Image">
    </div>
</div>
<!-- End DiploCover-Info-Text -->
</div>
</div>
<!-- End Masonry Grid -->
</div>
</div>
<!-- End Work -->
<!--========== DiploCover-Home END PAGE LAYOUT ==========-->

<!--========== FOOTER ==========-->
<?php echo($footer); ?>
<!--========== END FOOTER ==========-->
<!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
<script src="js/particles.min.js"></script>
<script src="js/partivle.js" type="text/javascript"></script>

<!-- Back To Top -->
<a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

<!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- CORE PLUGINS -->
<script src="../../../vendor/jquery.min.js" type="text/javascript"></script>
<script src="../../../vendor/jquery-migrate.min.js" type="text/javascript"></script>
<script src="../../../vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<!-- DiploCover-home PAGE LEVEL PLUGINS -->
<script src="../../../vendor/jquery.easing.js" type="text/javascript"></script>
<script src="../../../vendor/jquery.back-to-top.js" type="text/javascript"></script>
<script src="../../../vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
<script src="../../../vendor/jquery.wow.min.js" type="text/javascript"></script>
<script src="../../../vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
<script src="../../../vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
<script src="../../../vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

<!-- DiploCover-home PAGE LEVEL SCRIPTS -->
<script src="js/layout.min.js" type="text/javascript"></script>
<script src="js/components/wow.min.js" type="text/javascript"></script>
<script src="js/components/swiper.min.js" type="text/javascript"></script>
<script src="js/components/masonry.min.js" type="text/javascript"></script>
<script src="js/jquery-2.1.0.min.js"></script>
<script src="js/app.js"></script>

</body>
<!-- END BODY -->
</html>
