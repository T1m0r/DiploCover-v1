<!------------------ DiploCover | Home ------------------>
<!DOCTYPE html>
<!-- ==============================
    Project:        DiploCover HomePage
    Version:        1.2
    Author:         Jakob Kreutner(Timor)
    Email:          jkreutner@tsn.at
================================== -->
<html lang="de" class="no-js">
<!------------------- BEGIN HEAD ---------------------->
<head>
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

    <meta charset="utf-8"/>
    <title>DiploCover | Home</title>
    <!------------ Import static-Header stuff --------->

    <meta charset="UTF-8">
    <!-- Weist den Internet Explorer an, die neuste "Rendering engine" zu benutzen  -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <!-- Meta Beschreibung -->
    <meta name="author" content="Timor">
    <meta name="description" content="Diplocover ist ein Netzwerk, das die Diplomarbeitsvermittlung für Tiroler Schüler stark vereinfacht. :D">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
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

    <!-- Status Bar Style (siehe die unterstützten Meta Tags unten drunter für verfügbare Werte) -->
    <!-- Hat keinen Effekt, außer du hast den vorherigen Meta Tag  -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!--===============================================================================================-->
    <!-- Hilft vorbeugend gegen Probleme mit dupliziertem Inhalt  -->
    <link rel="canonical" href="https://www.diplocover.at">


<!-------- GLOBAL STYLES ---------->
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('vendor/simple-line-icons/simple-line-icons.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css"/>

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="<?php echo e(asset('/css/home/animate.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('/vendor/swiper/css/swiper.min.css')); ?>" rel="stylesheet" type="text/css"/>

    <!-- THEME STYLES-->
    <link href="<?php echo e(asset('/css/home/layout.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('/css/home/particl.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('/css/home/hover-min.css')); ?>" rel="stylesheet" type="text/css"/>


</head>
<!-- END HEAD -->

<!-- BODY -->
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K9JPWC9" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->



<!--========== HEADER ==========-->
<header class="header navbar-fixed-top">
    <!-- Navbar -->
    <nav class="navbar" role="navigation">
        <nav class="navigation">

        <div class="container">
            <div class="menu-container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="toggle-icon"></span>
                </button>

                <!-- Logo -->
            <div class="logo">
                <a class="logo-wrap" href="/">
                    <img class="logo-img logo-img-main hvr-buzz-out" src="<?php echo e(asset('images/home/test.png')); ?>" alt="DiploCover">
                    <img class="logo-img logo-img-active hvr-buzz-out" src="<?php echo e(asset('images/home/compalo.png')); ?>" alt="DiploCover L">
                </a>
            </div>
            <!-- End Logo -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-collapse">
                <div class="menu-container">
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item"><a class="nav-item-child nav-item-hover active hvr-underline-from-center" href='/'>Home</a></li>
                        <li class="nav-item"><a class="nav-item-child nav-item-hover hvr-underline-from-center" href='/diplocover'>DiploCover</a></li>
                        <li class="nav-item"><a class="nav-item-child nav-item-hover hvr-underline-from-center" href='/h/team'>Team</a></li>
                        <li class="nav-item"><a class="nav-item-child nav-item-hover hvr-underline-from-center" href='/partner'>Partner</a></li>
                        <!--<li class="nav-item"><a class="nav-item-child nav-item-hover hvr-underline-from-center" href='/ideas'>Ideen</a></li>-->
                        <!--  <li class="nav-item"><a class="nav-item-child nav-item-hover hvr-underline-from-center" href="products.html">Products</a></li>
                        <li class="nav-item"><a class="nav-item-child nav-item-hover hvr-underline-from-center" href="faq.html">FAQ</a></li>  -->
                        <li class="nav-item"><a class="nav-item-child nav-item-hover hvr-underline-from-center" href='/contact'>Kontakt</a></li>
                        <li class="nav-item nav-item-child"><a href="/login" class="btn-theme btn-theme-sm text-uppercase">Login</a></li>
                        <li class="nav-item nav-item-child"><a href="/student/register" class=" btn-theme btn-theme-sm text-uppercase">Register</a></li>
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
    <div id="carousel-generic" class="carousel slide" data-ride="carousel">
        <div class="container">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-generic" data-slide-to="1"></li>
                <li data-target="#carousel-generic" data-slide-to="2"></li>
                <li data-target="#carousel-generic" data-slide-to="3"></li>
            </ol>
        </div>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="img-responsive" src="<?php echo e(asset('images/home/1920x1080/0b1.jpg')); ?>" alt="Slider Image">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="margin-b-40">
                            <h1 class="carousel-title">Schnell zur richtigen<br /> Diplomarbeit</h1>
                            <p style="color:#1b1ee3; font-size:30px;">Mit DiploCover brauchen Sie viel weniger Zeit <br/> Nebenbei senken Sie auch den Personalaufwand</p>
                            <a href="/login" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Login</a>
                            <a href="/student/register" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Register</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="img-responsive" src="<?php echo e(asset('images/home/1920x1080/022.jpg')); ?>" alt="Slider Image">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="margin-b-40">
                            <h2 class="carousel-title"><br>Einfache Erstellung von Profilen</h2>
                            <p style="color:#1788ab; font-size:36px;font-weight: bold">Bereits nach nicht mal fünf Minuten können Sie loslegen <br/> Außerdem können wir bei Bedarf ihren Account einrichten</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="img-responsive" src="<?php echo e(asset('images/home/1920x1080/l03.jpg')); ?>" alt="Slider Image">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="margin-b-40">
                            <h2 class="carousel-title"style="color:#a1a1a1">Kostenlos</h2>
                            <p style="color:#3127e2; font-size:30px;">Die Registrierung und Verwendung ist komplett gratis</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="img-responsive" src="<?php echo e(asset('images/home/1920x1080/004.jpg')); ?>" alt="Slider Image">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="margin-b-40">
                            <h2 class="carousel-title">Unser Team</h2>
                            <p style="color:#1788ab; font-size:36px; font-weight: bold">Lerne das Team hinter DiploCover kennen</p>
                        </div>
                        <a href="/h/team" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Über uns</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--========== SLIDER ==========-->

<!--========== DiploCover->Home PAGE LAYOUT ==========-->
    <!-- DiploCover-Info/Pro -->
    <div id="particles-js" style="z-index:0; height: 166em;"></div>
    <div class="bg-color-sky-light" data-auto-height="true">
        <div class="content-lg container">

            <div class="row row-space-1 margin-b-2">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                    <div data-height="height">

                        <div class="service-info">
                            <h3>DiploCover erreicht den dritten Platz beim Qualitätstalent Wettbewerb!</h3>
                            <p class="margin-b-5" style="font-size: 22px; background-color: whitesmoke">Wie jedes Jahr wird am qualityaustria Forum in Salzburg die Verleihung der Auszeichnungen
                                "Qualitäts-Champion" und "Qualitäts-Talent" durchgeführt . Der Award wurde auf Initiative der Österreichischen
                                Vereinigung für Qualitätssicherung (ÖVQ) ins Leben gerufen und wird nun jährlich an die innovativsten im Qualitätsmanagement
                                tätigen Personen sowie an Schüler und Studenten mit den besten Ideen für das Qualitäts- und Projektmanagement vergeben.<br>
                                "Herausragende Leistung und innovatives Denken sind nicht nur eine Bewertungsgrundlage für den Wettbewerb,
                                sondern gerade heute elementar, um sich am Markt abzuheben. Diese Auszeichnungen beweisen Engagement,
                                Kreativität und Mut. Wir wollen damit das Qualitätslevel österreichischer Unternehmen steigern", so
                                Konrad Scheiber, CEO von Quality Austria, über die Intention der Auszeichnungen.
                                Wir als DiploCover sind daher sehr stolz den dritten Preis tragen zu können. Diese Auszeichnung motiviert uns
                                nochmals extra, weiter zu arbeiten.<br><br></p>
                            <a href="https://www.qualityaustria.com"><img class="col-md-6" src="<?php echo e(asset('/images/home/QA3.jpeg')); ?>"></a>
                            <a href="https://www.qualityaustria.com"><img class="col-md-6" src="<?php echo e(asset('/images/home/QA1.jpeg')); ?>"></a>
                            <a href="https://www.qualityaustria.com"><img class="col-md-6" style="margin-top: 1.8em;" src="<?php echo e(asset('/images/home/QA2.jpeg')); ?>"></a>


                        </div>
                        <a   class="content-wrapper-link"></a>
                    </div>
                </div>

            </div>
            <!--// end row -->

            <!--// end row -->

        </div>

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

        </div>

        <!-- Clients -->
        <div class="bg-color-sky-light">
            <div class="content-lg container">
                <!-- Swiper Clients -->
                <div class="swiper-slider swiper-clients">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="http://www.htl.tirol/bautechnik.php"><img class="swiper-clients-img hvr-grow" src="<?php echo e(asset('/images/home/clients/011.png')); ?>" alt="Clients Logo"></a>
                            <p>Bautechnik Gebäudetechnik</p>
                        </div>
                        <div class="swiper-slide">
                            <a href="http://www.htl.tirol/chemie.php"><img class="swiper-clients-img hvr-grow" src="<?php echo e(asset('/images/home/clients/012.png')); ?>" alt="Clients Logo"></a>
                            <p>Chemieingeniurwesen</p>
                        </div>
                        <div class="swiper-slide">
                            <a href="http://www.htl.tirol/design.php"><img class="swiper-clients-img hvr-grow" src="<?php echo e(asset('/images/home/clients/013.png')); ?>" alt="Clients Logo"></a>
                            <p>Malerei/ Innenarchitektur</p>
                        </div>
                        <div class="swiper-slide">
                            <a href="http://www.htl.tirol/it.php"><img class="swiper-clients-img hvr-grow" src="<?php echo e(asset('/images/home/clients/014.png')); ?>" alt="Clients Logo"></a>
                            <p>Automatisierung / Technische Informatik</p>
                        </div>
                        <div class="swiper-slide">
                            <a href="http://www.htl.tirol/gebaeudebau.php"><img class="swiper-clients-img hvr-grow" src="<?php echo e(asset('/images/home/clients/015.png')); ?>" alt="Clients Logo"></a>
                            <p>Maschinenbau</p>
                        </div>
                        <div class="swiper-slide">
                            <a href="http://www.htl.tirol/optometrie.php"><img class="swiper-clients-img hvr-grow" src="<?php echo e(asset('/images/home/clients/016.png')); ?>" alt="Clients Logo"></a>
                            <p>Optometrie</p>
                        </div>
                    </div>


                    <!-- End Swiper Wrapper -->
                </div>


                <!-- End Swiper Clients -->
            </div>
        </div>
        <!-- End Clients -->

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
                            <h2 style="font-size:45px">Diplomarbeit?</h2>
                            <p style="font-size:20px; color:#7A7A7A;">Diplomarbeiten zu finden ist schwierig, aber mit DiploCover ändert sich das.</p>
                            <p style="font-size:20px; color:#7A7A7A;"> Wir haben es uns als Ziel gesetzt, dass Diplomarbeiten über eine Plattform vermittelt und gefunden werden können. Damit ist der Suchaufwand für Schüler und Firma wesentlich geringer als zuvor. Da wir derzeit noch in der Entwicklungsphase sind, soll diese Website lediglich als Vorstellungsseite dienen, um Ihnen unser Projekt näher zeigen zu können</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="promo-section-img-right">
            <img class="img-responsive hvr-grow-rotate" src="<?php echo e(asset('/images/home/HTL_Jenbach.jpg')); ?>" alt="Content Image">
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
<footer class="footer">
    <!-- Links -->
    <div class="footer-seperator">
        <div class="content-lg container">
            <div class="row">
                <div class="col-sm-2 sm-margin-b-50">
                    <!-- List -->
                    </ul>
                    <!-- End List -->
                </div>
                <div class="col-sm-5 sm-margin-b-30">
                    <h2 class="color-white">Kontaktiere uns</h2>
                    <div id="form-messages"></div>
                    <p>* erforderliche Felder</p>
                    <form id="ajax-contact" action="<?php echo e(route('sending')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <input type="text" class="form-control footer-input margin-b-20" name="fmname" id="fmname" placeholder="*Name" required>
                        <input type="email" class="form-control footer-input margin-b-20" name="fmail" id="fmail" placeholder="*Email" required>
                        <input type="text" class="form-control footer-input margin-b-20" name="fmphone" id="fmphone" placeholder="Phone" >
                        <textarea class="form-control footer-input margin-b-30" rows="6" name="fmsg" id="fmsg" placeholder="*Message" required></textarea>
                        <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase" id="fmsub" name="fmsub" >Absenden</button>
                    </form>
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Links -->

    <!-- Copyright -->
    <div class="content container">
        <div class="row">
            <div class="col-xs-1">
                <img class="footer-logo hvr-buzz" src="<?php echo e(asset('images/home/compalo.png')); ?>" alt="DiploCover">
            </div>
            <div class="col-xs-12 text-right">
                <p class="margin-b-5" id="drm">&copy; DiploCover 2019 (Jakob Kreutner, Michael Kröll)</p>
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End Copyright -->
</footer>
<!--========== END FOOTER ==========-->
<!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
<script src="<?php echo e(asset('js/home/particles.min.js')); ?>"></script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
    }
</script>
<script src="<?php echo e(asset('js/home/partivle.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/home/jquery-2.1.0.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/home/app.js')); ?>"></script>

<!-- Back To Top -->
<a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

<!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- CORE PLUGINS -->
<script src="<?php echo e(asset('vendor/jquery.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('vendor/jquery-migrate.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript"></script>

<!-- PAGE LEVEL PLUGINS -->
<script src="<?php echo e(asset('vendor/jquery.easing.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('vendor/jquery.back-to-top.js')); ?>" type="text/javascript"></script>

<script src="<?php echo e(asset('vendor/jquery.wow.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('vendor/jquery.parallax.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('vendor/swiper/js/swiper.jquery.min.js')); ?>" type="text/javascript"></script>

<!-- PAGE LEVEL SCRIPTS -->
<script src="<?php echo e(asset('js/home/layout.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/home/components/wow.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/home/components/swiper.min.js')); ?>" type="text/javascript"></script>

</body>
<!-- END BODY -->
</html>
