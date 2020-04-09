<!DOCTYPE html>
<!-- ==============================
        Project:        DiploCover HomePage
        Version:        1.2
        Author:         Jakob Kreutner(Timor)[Backend]
                        Boran Polat [Forntend]
        Email:          jkreutner@tsn.at
    ================================== -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!------------------- BEGIN HEAD ---------------------->
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

        <!--Meta stuff--->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta name="description" content="Diplocover ist ein Netzwerk, das die Diplomarbeitsvermittlung für Tiroler Schüler stark vereinfacht. :D">
        <meta content="" name="Website DiploCover"/>
        <meta name="author" content="Timor">


        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = {csrfToken: '{{ csrf_token() }}' }</script>
        <title>{{ config('app.name', 'Laravel') }} | @yield("pgtitle")</title>



        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


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


        <!-------- GLOBAL STYLES ---------->

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <!-- Latest compiled and minified CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!--- compiled mimifiey<d for animate.css--->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

        <style>
                body {
                    background-color: lightblue;
                }
        </style>
        @yield('head')
    </head>
    <body>
        <div id="app">
            <div class="col-med-12" style="position:relative; height: 4em; padding-top:0.4em;padding-bottom:0.4em;background-color: white;  border-bottom: 1.5px solid #020300;">
                <div class="row">
                    <a href = "/"><img src=""style="position:absolute; margin-left: 4em; margin-top: 0.4em; height:2.6em; width:auto"></a>
                    <a style=" font-size: 2.6em;  margin-left:5em; margin-top:0em; position:relative; top: -0.2em;" href="/">Home</a><!-- Other ---->
                </div>
            </div>
        </div>

        @yield('content')
        @yield('jspace')
        <script type="text/javascript" src="{{asset('js/app.js')}}" defer></script>
    </body>
</html>

