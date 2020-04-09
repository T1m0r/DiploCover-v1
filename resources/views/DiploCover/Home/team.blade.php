<!DOCTYPE html>
<!-- ==============================
    Project:        DiploCover HomePage
    Version:        1.2
    Author:         Jakob Kreutner(Timor)
    Email:          jkreutner@tsn.at
================================== -->
<html lang="en" class="no-js">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121319979-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-121319979-2');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-K9JPWC9');</script>
    <!-- End Google Tag Manager -->
    <title>DiploCover | Über uns</title>
    <!-- Weist den Internet Explorer an, die neuste "Rendering engine" zu benutzen  -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <!-- Meta Beschreibung -->
    <meta name="author" content="Timor">
    <meta name="description" content="Diplocover ist ein Netzwerk, das die Diplomarbeitsvermittlung für Tiroler Schüler stark vereinfacht. :D">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <!-- Apple Touch Icon (mindestens 200x200px) -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/images/home/favcon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/images/home/favcon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('images/home/favcon/android-chrome-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/images/home/favcon/favicon-16x16.png')}}">
    <link rel="shortcut icon" href="{{asset('images/home/favcon/dc_show.ico')}}"/>
    <link rel="manifest" href="{{asset('/images/home/favcon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('/images/home/favcon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <link rel="shortcut icon" href="{{asset('/images/home/favcon/favicon.ico')}}">
    <meta name="msapplication-TileColor" content="#ff8888">
    <meta name="msapplication-TileImage" content="{{asset('/images/home/favcon/mstile-144x144.png')}}">
    <meta name="msapplication-config" content="{{asset('/img/favcon/browserconfig.xml')}}">
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

<!-- GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link href="{{asset('vendor/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="{{asset('css/home/animate.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/swiper/css/swiper.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- THEME STYLES-->
    <link href="{{asset('css/home/layout.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/home/col.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/home/particl.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/home/hover-min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Favicon -->


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
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="menu-container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="toggle-icon"></span>
                </button>

                <!-- Logo -->
                <div class="logo">
                    <a class="logo-wrap" href="/">
                        <img class="logo-img logo-img-main hvr-buzz-out" src="{{asset("images/home/test.png")}}" alt="DiploCover">
                        <img class="logo-img logo-img-active hvr-buzz-out" src="{{asset('images/home/compalo.png')}}" alt="DiploCover L">
                    </a>
                </div>
            <!-- End Logo -->

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-collapse">
                <div class="menu-container">
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item"><a class="nav-item-child nav-item-hover  hvr-underline-from-center" href='/'>Home</a></li>
                        <li class="nav-item"><a class="nav-item-child nav-item-hover hvr-underline-from-center" href='/diplocover'>DiploCover</a></li>
                        <li class="nav-item"><a class="nav-item-child nav-item-hover active hvr-underline-from-center" href='/h/team'>Team</a></li>
                        <li class="nav-item"><a class="nav-item-child nav-item-hover  hvr-underline-from-center" href='/partner'>Partner</a></li>
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
<!-- particles.js container -->

<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="{{asset('images/home/1920x1080/l03.jpg')}}">
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
            <img class="img-responsive" src="{{asset('images/home/640x380/01.jpg')}}" alt="...">
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
            </div>
        </div>
        <!--// end row -->

        <div class="row">
            <!-- Team -->
            <div class="col-sm-4 sm-margin-b-50">
                <div class=" hvr-grow">
                    <div class="bg-color-white margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive" src="{{asset('/images/home/team/DSC_4582-Bearbeitet-uai-960x960.jpg')}}" alt="Team Image">
                        </div>
                    </div>
                    <h4><a>Mag. Franz Kaltenbrunner</a> <span class="text-uppercase margin-l-20">Projekt Betreuer</span></h4>
                </div>
                <p></p>
                <button class="collabsable" type="button" data-toggle="collapse" data-target="#collapseteam1" aria-expanded="false">Mehr</button>
                <div class="collapse" id="collapseteam1">
                    <ul>Studium der Wirtschafts- und Sozialwissenschaften an der Leopold Franzens Universität Innsbruck
                        Qualitäts-, Prozess-, Umwelt-, Arbeitssicherheits- und Gesundheitsmanager
                        Geschäftsführender Gesellschafter Concepts Systementwicklung GmbH
                        Auditor der Quality Austria (9001, 14001, 45001) </ul>
                </div>
            </div>
            <!-- End Team -->

            <!-- Team -->
            <div class="col-sm-4 sm-margin-b-50">
                <div class=" hvr-grow">
                    <div class="bg-color-white margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive" src="{{asset('/images/home/team/DSC_4585-Bearbeitet-uai-960x960.jpg')}}" alt="Team Image">
                        </div>
                    </div>
                    <h4><a>Boran Polat</a> <span class="text-uppercase margin-l-20">Programmierung (Frontend)</span></h4>
                </div>
                <p></p>
                <button class="collabsable" type="button" data-toggle="collapse" data-target="#collapseteam4" aria-expanded="false">Mehr</button>
                <div class="collapse" id="collapseteam4">
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
                            <img class="img-responsive" src="{{asset('/images/home/team/DSC_4584-Bearbeitet-uai-960x960.jpg')}}" alt="Team Image">
                        </div>
                    </div>
                    <h4><a >Jana Hollaus</a> <span class="text-uppercase margin-l-20">Marketing</span></h4>
                </div>
                <p></p>
                <button class="collabsable" type="button" data-toggle="collapse" data-target="#collapseteam3" aria-expanded="false">Mehr</button>
                <div class="collapse" id="collapseteam3">
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
                            <img class="img-responsive" src="{{asset('/images/home/team/DSC_4586-Bearbeitet-uai-960x960.jpg')}}" alt="Team Image">
                        </div>
                    </div>
                    <h4><a >Jakob Kreutner</a> <span class="text-uppercase margin-l-20">Programmierung (Backend) </span><p>Hauptansprechperson</p></h4>
                </div>
                <p></p>
                <button class="collabsable" type="button" data-toggle="collapse" data-target="#collapseteam5" aria-expanded="false">Mehr</button>
                <div class="collapse" id="collapseteam5">
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
                            <img class="img-responsive" src="{{asset('/images/home/team/DSC_4587-Bearbeitet-uai-960x960.jpg')}}" alt="Team Image">
                        </div>
                    </div>
                    <h4><a >Michael Kröll</a> <span class="text-uppercase margin-l-20">Design / Finanzen</span><p>Hauptansprechperson</p></h4>
                </div>
                <p></p>
                <button class="btn collabsable" type="button" data-toggle="collapse" data-target="#collapseteam6" aria-expanded="false">Mehr</button>
                <div class="collapse" id="collapseteam6">
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
                    <form id="ajax-contact" action="{{route('sending')}}" method="post">
                        {{ csrf_field() }}
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
                <img class="footer-logo hvr-buzz" src="{{asset('images/home/compalo.png')}}" alt="DiploCover">
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
<script src="{{asset('js/home/particles.min.js')}}"></script>
<script src="{{asset('js/home/partivle.js')}}" type="text/javascript"></script>
<script src="{{asset('js/home/jquery-2.1.0.min.js')}}"></script>
<script src="{{asset('js/home/app.js')}}"></script>

<!-- Back To Top -->
<a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

<!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- CORE PLUGINS -->
<script src="{{asset('vendor/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/jquery-migrate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>

<!-- PAGE LEVEL PLUGINS -->
<script src="{{asset('vendor/jquery.easing.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/jquery.back-to-top.js')}}" type="text/javascript"></script>
<!---<script src="{{asset('vendor/jquery.smooth-scroll.js')}}" type="text/javascript"></script>--->
<script src="{{asset('vendor/jquery.wow.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/jquery.parallax.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/swiper/js/swiper.jquery.min.js')}}" type="text/javascript"></script>

<!-- PAGE LEVEL SCRIPTS -->
<script src="{{asset('js/home/layout.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/home/components/wow.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/home/components/swiper.min.js')}}" type="text/javascript"></script>

</body>
<!-- END BODY -->
</html>
