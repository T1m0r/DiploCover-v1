<!DOCTYPE html>
<!-- ==============================
        Project:        DiploCover HomePage
        Version:        1.2
        Author:         Jakob Kreutner(Timor)[Backend]
                        Boran Polat [Forntend]
        Email:          jkreutner@tsn.at
    ================================== -->
<html>
  <head>
    <title>{{ config('backpack.base.project_name') }} Error 408</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta name="description" content="Diplocover ist ein Netzwerk, das die Diplomarbeitsvermittlung für Tiroler Schüler stark vereinfacht. :D">
    <meta content="" name="Website DiploCover"/>
    <meta name="author" content="Timor">

    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

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



    <style>
      body {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        color: #B0BEC5;
        display: table;
        font-weight: 100;
        font-family: 'Lato';
      }

      .container {
        text-align: center;
        display: table-cell;
        vertical-align: middle;
      }

      .content {
        text-align: center;
        display: inline-block;
      }

      .title {
        font-size: 156px;
      }

      .quote {
        font-size: 36px;
      }

      .explanation {
        font-size: 24px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="content">
        <div class="title">408</div>
        <div class="quote">Request timeout.</div>
        <div class="explanation">
          <br>
          <small>
            <?php
              $default_error_message = "Please return to <a href='".url('')."'>our homepage</a>.";
            ?>
            {!! isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message !!}
         </small>
       </div>
      </div>
    </div>
  </body>
</html>
