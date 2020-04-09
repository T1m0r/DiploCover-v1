<?php
$tablogo = "img/icon/dc_show.ico";
$logotop = "img/test.png";
$logocon = 'img/compalo.png';

$slide = array(1 => 'img/1920x1080/0b1.jpg', 2 => 'img/1920x1080/02.jpg',3 => 'img/1920x1080/l03.jpg' ,4 => 'img/1920x1080/04.jpg');

//$slide['img/1920x1080/01.jpg','img/1920x1080/02.jpg','img/1920x1080/l03.jpg','img/1920x1080/04.jpg'];


$logo = '<div class="logo">
    <a class="logo-wrap" href="index.php">
      <img class="logo-img logo-img-main hvr-buzz-out" src="'.$logotop.'" alt="DiploCover">
      <img class="logo-img logo-img-active hvr-buzz-out" src="'.$logocon.'" alt="DiploCover L">
    </a>
</div>';

$gtaghead = "<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insefrtBefore(j,f);
})(window,document,'script','dataLayer','GTM-K9JPWC9');</script>";

$gtagbody = '<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K9JPWC9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>';


$home = 'index.php';
$diplocover='diplocover.php';
$team = 'team.php';
$kontakt = 'contact.php';
$hn='Home';
$dcn ='DiploCover?';
$tmn ='Über uns';
$knn ='Kontakt';

$hometabs = '<li class="nav-item"><a class="nav-item-child nav-item-hover active hvr-underline-from-center" href='.$home.'>'.$hn.'</a></li>
<li class="nav-item"><a class="nav-item-child nav-item-hover hvr-underline-from-center" href='.$diplocover.'>'.$dcn.'</a></li>
<li class="nav-item"><a class="nav-item-child nav-item-hover hvr-underline-from-center" href='.$team.'>'.$tmn.'</a></li>
<!--  <li class="nav-item"><a class="nav-item-child nav-item-hover hvr-underline-from-center" href="products.html">Products</a></li>
<li class="nav-item"><a class="nav-item-child nav-item-hover hvr-underline-from-center" href="faq.html">FAQ</a></li>  -->
<li class="nav-item"><a class="nav-item-child nav-item-hover hvr-underline-from-center" href='.$kontakt.'>'.$knn.'</a></li>';

$dctabs = '<li class="nav-item"><a class="nav-item-child nav-item-hover hvr-underline-from-center" href='.$home.'>'.$hn.'</a></li>
<li class="nav-item"><a class="nav-item-child nav-item-hover active hvr-underline-from-center" href='.$diplocover.'>'.$dcn.'</a></li>
<li class="nav-item"><a class="nav-item-child nav-item-hover hvr-underline-from-center" href='.$team.'>'.$tmn.'</a></li>
<!--  <li class="nav-item"><a class="nav-item-child nav-item-hover hvr-underline-from-center" href="products.html">Products</a></li>
<li class="nav-item"><a class="nav-item-child nav-item-hover hvr-underline-from-center" href="faq.html">FAQ</a></li>  -->
<li class="nav-item"><a class="nav-item-child nav-item-hover hvr-underline-from-center" href='.$kontakt.'>'.$knn.'</a></li>';

$tmtabs = '<li class="nav-item"><a class="nav-item-child nav-item-hover hvr-underline-from-center" href='.$home.'>'.$hn.'</a></li>
<li class="nav-item"><a class="nav-item-child nav-item-hover hvr-underline-from-center" href='.$diplocover.'>'.$dcn.'</a></li>
<li class="nav-item"><a class="nav-item-child nav-item-hover active hvr-underline-from-center" href='.$team.'>'.$tmn.'</a></li>
<!--  <li class="nav-item"><a class="nav-item-child nav-item-hover hvr-underline-from-center" href="products.html">Products</a></li>
<li class="nav-item"><a class="nav-item-child nav-item-hover hvr-underline-from-center" href="faq.html">FAQ</a></li>  -->
<li class="nav-item"><a class="nav-item-child nav-item-hover hvr-underline-from-center" href='.$kontakt.'>'.$knn.'</a></li>';

$contabs = '<li class="nav-item"><a class="nav-item-child nav-item-hover hvr-underline-from-center" href='.$home.'>'.$hn.'</a></li>
<li class="nav-item"><a class="nav-item-child nav-item-hover hvr-underline-from-center" href='.$diplocover.'>'.$dcn.'</a></li>
<li class="nav-item"><a class="nav-item-child nav-item-hover hvr-underline-from-center" href='.$team.'>'.$tmn.'</a></li>
<!--  <li class="nav-item"><a class="nav-item-child nav-item-hover hvr-underline-from-center" href="products.html">Products</a></li>
<li class="nav-item"><a class="nav-item-child nav-item-hover" href="faq.html">FAQ</a></li>  -->
<li class="nav-item"><a class="nav-item-child nav-item-hover active hvr-underline-from-center" href='.$kontakt.'>'.$knn.'</a></li>';


$rphead = '<meta charset="UTF-8">
<!-- Weist den Internet Explorer an, die neuste "Rendering engine" zu benutzen  -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
<!-- Meta Beschreibung -->
  <meta name="author" content="Timor">
  <meta name="description" content="Diplocover ist ein Netzwerk, das die Diplomarbeitsvermittlung für Tiroler Schüler stark vereinfacht. :D">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<!-- Apple Touch Icon (mindestens 200x200px) -->
  <link rel="apple-touch-icon" sizes="180x180" href="/img/favcon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/img/favcon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/img/favcon/android-chrome-192x192.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/img/favcon/favicon-16x16.png">
  <link rel="shortcut icon" href="img/favcon/dc_show.ico"/>
  <link rel="manifest" href="/img/favcon/site.webmanifest">
  <link rel="mask-icon" href="/img/favcon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="/img/favcon/favicon.ico">
  <meta name="msapplication-TileColor" content="#ff8888">
  <meta name="msapplication-TileImage" content="/img/favcon/mstile-144x144.png">
  <meta name="msapplication-config" content="/img/favcon/browserconfig.xml">
  <meta name="theme-color" content="#ff8888">
<!--=======================================<Windows apple>========================================================-->
<!-- Um die Web Applikation im Fullscreen laufen zu lassen-->
  <meta name="apple-mobile-web-app-capable" content="yes">

<!-- Status Bar Style (siehe die unterstützten Meta Tags unten drunter für verfügbare Werte) -->
<!-- Hat keinen Effekt, außer du hast den vorherigen Meta Tag  -->
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
<!--===============================================================================================-->
<!-- Hilft vorbeugend gegen Probleme mit dupliziertem Inhalt  -->
<link rel="canonical" href="https://www.diplocover.at">';


$clientslider='<!-- Clients -->
<div class="bg-color-sky-light">
    <div class="content-lg container">


        <!-- Swiper Clients -->
        <div class="swiper-slider swiper-clients">


            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="http://www.htl.tirol/bautechnik.php"><img class="swiper-clients-img hvr-grow" src="img/clients/011.png" alt="Clients Logo"></a>
                    <p>Bautechnik Gebäudetechnik</p>
                </div>
                <div class="swiper-slide">
                    <a href="http://www.htl.tirol/chemie.php"><img class="swiper-clients-img hvr-grow" src="img/clients/012.png" alt="Clients Logo"></a>
                    <p>Chemieingeniurwesen</p>
                </div>
                <div class="swiper-slide">
                    <a href="http://www.htl.tirol/design.php"><img class="swiper-clients-img hvr-grow" src="img/clients/013.png" alt="Clients Logo"></a>
                    <p>Malerei/ Innenarchitektur</p>
                </div>
                <div class="swiper-slide">
                    <a href="http://www.htl.tirol/it.php"><img class="swiper-clients-img hvr-grow" src="img/clients/014.png" alt="Clients Logo"></a>
                    <p>Automatisierung / Technische Informatik</p>
                </div>
                <div class="swiper-slide">
                    <a href="http://www.htl.tirol/gebaeudebau.php"><img class="swiper-clients-img hvr-grow" src="img/clients/015.png" alt="Clients Logo"></a>
                    <p>Maschinenbau</p>
                </div>
                <div class="swiper-slide">
                    <a href="http://www.htl.tirol/optometrie.php"><img class="swiper-clients-img hvr-grow" src="img/clients/016.png" alt="Clients Logo"></a>
                    <p>Optometrie</p>
                </div>
            </div>


            <!-- End Swiper Wrapper -->
        </div>


        <!-- End Swiper Clients -->
    </div>
</div>
<!-- End Clients -->';

$footer='<!--========== FOOTER ==========-->
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
                    <p>* required fields</p>
                    <form id="ajax-contact" action="send.php" method="post">
                      <input type="text" class="form-control footer-input margin-b-20" name="fmname" id="fmname" placeholder="*Name" required>
                      <input type="email" class="form-control footer-input margin-b-20" name="fmail" id="fmail" placeholder="*Email" required>
                      <input type="text" class="form-control footer-input margin-b-20" name="fmphone" id="fmphone" placeholder="Phone" >
                      <textarea class="form-control footer-input margin-b-30" rows="6" name="fmsg" id="fmsg" placeholder="*Message" required></textarea>
                      <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase" id="fmsub" name="fmsub" >Submit</button>
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
                <img class="footer-logo hvr-buzz" src="'.$logocon .'" alt="DiploCover">
            </div>
            <div class="col-xs-12 text-right">
                <p class="margin-b-5" id="drm">&copy; DiploCover 2018 (Jakob Kreutner, Michael Kröll)</p>
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End Copyright -->
</footer>
<!--========== END FOOTER ==========-->';






 ?>
