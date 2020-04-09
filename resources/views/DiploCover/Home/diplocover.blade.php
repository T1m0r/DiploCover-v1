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
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-K9JPWC9');</script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8"/>
    <title>DiploCover | Was ist DiploCover?</title>
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
    <link href="{{asset('/css/home/animate.css')}}" rel="stylesheet">
    <link href="{{asset('/vendor/swiper/css/swiper.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- THEME STYLES -->
    <link href="{{asset('/css/home/layout.css')}}" rel="stylesheet" type="text/css"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('/images/home/icon/dc_show.ico')}}"/>
    <link href="{{asset('/css/home/particl.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/css/home/hover-min.css')}}" rel="stylesheet" type="text/css"/>
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
                        <li class="nav-item"><a class="nav-item-child nav-item-hover active hvr-underline-from-center" href='/diplocover'>DiploCover</a></li>
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

<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="{{asset('images/home/1920x1080/02.jpg')}}">
    <div class="parallax-content container">
        <h1 class="carousel-title">DiploCover</h1>
        <p style="color:#0095ff; font-size:30px">    Was ist DiploCover?</p>
    </div>
</div>
<!--========== PARALLAX ==========-->

<!--========== PAGE LAYOUT ==========-->

<!-- Service --><div id="particles-js"></div>
<div class="content-lg container">

    <div class="row margin-b-20">
        <div class="col-sm-6">
            <h2>Was ist DiploCover?</h2>
        </div>

    </div>
    <!--// end row -->

    <div class="row">
        <blockquote class="blockquote">
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




<!-- Clients -->
<div class="bg-color-sky-light">
    <div class="content-lg container">
        <!-- Swiper Clients -->
        <div class="swiper-slider swiper-clients">
            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="http://www.htl.tirol/bautechnik.php"><img class="swiper-clients-img hvr-grow" src="{{asset('/images/home/clients/011.png')}}" alt="Clients Logo"></a>
                    <p>Bautechnik Gebäudetechnik</p>
                </div>
                <div class="swiper-slide">
                    <a href="http://www.htl.tirol/chemie.php"><img class="swiper-clients-img hvr-grow" src="{{asset('/images/home/clients/012.png')}}" alt="Clients Logo"></a>
                    <p>Chemieingeniurwesen</p>
                </div>
                <div class="swiper-slide">
                    <a href="http://www.htl.tirol/design.php"><img class="swiper-clients-img hvr-grow" src="{{asset('/images/home/clients/013.png')}}" alt="Clients Logo"></a>
                    <p>Malerei/ Innenarchitektur</p>
                </div>
                <div class="swiper-slide">
                    <a href="http://www.htl.tirol/it.php"><img class="swiper-clients-img hvr-grow" src="{{asset('/images/home/clients/014.png')}}" alt="Clients Logo"></a>
                    <p>Automatisierung / Technische Informatik</p>
                </div>
                <div class="swiper-slide">
                    <a href="http://www.htl.tirol/gebaeudebau.php"><img class="swiper-clients-img hvr-grow" src="{{asset('/images/home/clients/015.png')}}" alt="Clients Logo"></a>
                    <p>Maschinenbau</p>
                </div>
                <div class="swiper-slide">
                    <a href="http://www.htl.tirol/optometrie.php"><img class="swiper-clients-img hvr-grow" src="{{asset('/images/home/clients/016.png')}}" alt="Clients Logo"></a>
                    <p>Optometrie</p>
                </div>
            </div>


            <!-- End Swiper Wrapper -->
        </div>


        <!-- End Swiper Clients -->
    </div>
</div>
<!-- End Clients -->

<div class="bg-color-sky-light" data-auto-height="true">
    <div class="content-lg container">
        <h2>Partner</h2>
        <blockquote class="blockquote">
            <div class="margin-b-20 supp" style="font-size: 20px;">
                Wir werden freundlich von der <a href="http://www.htl-jenbach.at" class="hvr-underline-from-center"><span class="color-dark">HTL-Jenbach</span></a> und von <a href="http://www.htl.tirol" class="hvr-underline-from-center"><span class="color-dark" >HTL-Tirol</span></a> unterstützt!
                <!--  <p><span class="fweight-700 color-link">Alex Clarson</span>, Metronic Customer</p>-->
            </div>
        </blockquote>
        <a href="http://www.htl-jenbach.at"><img class="hvr-float" height="120px" src="{{asset('/images/home/sup/HTL-Jenbach.png')}}" alt="HTL-Jenbach"></a>&nbsp;&emsp;&emsp;
        <a href="http://www.htl.tirol"><img class="hvr-float" height="80px" src="{{asset('/images/home/sup/HTL-Tirol.png')}}" alt="HTL-Tirol"></a>
        <br />
        <blockquote>Durch Bilder unterstützt von <a href="https://www.instagram.com/fabian.schiestl/" class="hvr-underline-from-center"><span class="color-dark">Fabian Schiestl</span></a></blockquote>
    </div>
</div>



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
            <div class="col-xs-1"><!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
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

                <script src="{{asset('vendor/jquery.wow.min.js')}}" type="text/javascript"></script>
                <script src="{{asset('vendor/jquery.parallax.min.js')}}" type="text/javascript"></script>
                <script src="{{asset('vendor/swiper/js/swiper.jquery.min.js')}}" type="text/javascript"></script>

                <!-- PAGE LEVEL SCRIPTS -->
                <script src="{{asset('js/home/layout.min.js')}}" type="text/javascript"></script>
                <script src="{{asset('js/home/components/wow.min.js')}}" type="text/javascript"></script>
                <script src="{{asset('js/home/components/swiper.min.js')}}" type="text/javascript"></script>
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
<!--<script src="{{asset('vendor/jquery.smooth-scroll.js')}}" type="text/javascript"></script>-->
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
