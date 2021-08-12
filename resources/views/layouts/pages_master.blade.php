<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Meta Keywords-->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="x-dns-prefetch-control" content="on"/>
    <meta name="author" content="Mario Castro Gallegos"/>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0"/>
    <meta name="description" itemprop="description" content="airport transportation, airport transportation airport to hotel, airport shuttle los cabos, airport transportation in cabo, airport transportation services, luxury transportation, private airport transfers in cabo san lucas, cabo transportation services, cabo transportation, transportation in cabo"/>
    <!-- Favicons  -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicons/apple-touch-icon.png')}}"/>
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicons/favicon-32x32.png')}}"/>
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicons/favicon-16x16.png')}}"/>
    <link rel="mask-icon" href="{{asset('images/favicons/safari-pinned-tab.svg')}}" color="#5bbad5"/>
    <meta name="msapplication-TileColor" content="#2b5797"/>
    <meta name="theme-color" content="#ffffff"/>
    <!-- OG Title-->
    <meta property="og:image:width" content="1024"/>
    <meta property="og:image:height" content="536"/>
    <meta property="og:title" content="Airport Baja Transportation"/>
    <meta property="og:description" content="Private transportation from Los Cabos Airport to your hotel at low price"/>
    <meta property="og:url" content="https://airportbajatransportation.com"/>
    <meta property="og:image" content="{{asset('images/banners/airport-baja-transportation-01.jpg')}}"/>
    <!-- CSS-->
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&amp;display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/vendors.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/main.css') .'?'.rand(5, 15)}}" media="screen"/>
    @yield('styles')

    <div id="fb-root"></div>
    <script>
      (function (d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s);
          js.id = id;
          js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.11';
          fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));

    </script>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="4b63f7b6-e65a-43ff-9f9a-60f9556a7c95";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=GA_TRACKING_ID"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-71018842-1');
    </script>
</head>
<body>
    <section id="thicker">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-6 col-sm-4">
              <div class="logo animated fadeInLeft"><img src="../images/logo/airport-baja-transportation.png" height="60" alt="Airport Baja Transportation"/></div>
            </div>
            <div class="col-xs-6 col-sm-8 text-right">
              <div class="social-icons">
                <div class="mobile-show"><a class="facebook" href="https://www.facebook.com/airportbajatransportation/" target="_blank"><i class="fa fa-facebook"></i></a><a class="instagram">   <i class="fa fa-instagram"></i></a><a class="tripadvisor" href="https://www.tripadvisor.com.mx/Attraction_Review-g152515-d20109765-Reviews-Airport_baja_cabo_transportation-Cabo_San_Lucas_Los_Cabos_Baja_California.html" target="_blank"><i class="fa fa-tripadvisor">   </i></a></div>
              </div>
              <div class="contact-icons">
                <div class="mobile-show"><i class="fa fa-mobile"></i><a href="tel:+5216241418594">+52 1 (624) 141 8594</a></div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <section id="menu">
        <div class="navbar navbar-default" id="custom-menu" role="navigation">
          <div class="container">
            <div class="navbar-brand"><img src="{{asset('images/logo/turiscabos.png')}}"/></div>
            <div class="navbar-header">
              <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse navbar-menubuilder">
              <ul class="nav navbar-nav navbar-right">
                <li><a class="menu_active" href="{{route('home')}}">home</a></li>
                <li><a href="{{route('services')}}">our services</a></li>
                <li><a href="{{route('about')}}">about us</a></li>
                <li><a href="{{route('gallery')}}">gallery</a></li>
                <li><a href="{{route('faq')}}">faq's  </a></li>
                <li>
                  <a href="{{route('mx')}}"><img src="{{asset('images/flags/mx.png')}}" height="20"/></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </section>
    <section id="mini-banner">
        <div class="container-fluid no-padding">
          <div class="row no-margin">
            <div class="col-sm-12 no-padding"><img src="../images/banners/about-us.jpg" width="100%"/></div>
          </div>
        </div>
    </section>

      @yield('content')

      <section id="footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
                <img src="{{asset('images/logo/turiscabos.png')}}" width="100%"/>
            </div>
            <div class="col-sm-4">
              <h3>PHONES NUMBERS</h3>
              <p align="center"></p><br/>
              <h3>E-MAIL ADRESS</h3>
            </div>
            <div class="col-sm-4">
              <h3>ANOTHER LINKS</h3>
              <p align="center"><a href="/privacy-policy.html">PRIVACY POLICY</a></p><br/>
              <p align="center"><a href="/links.html">EXCHANGE LINKS</a></p>
            </div>
          </div>
        </div>
      </section>
    <!-- JavaScript-->
    <script src="{{asset('js/scripts/vendors.js')}}"></script>
    <script>
        var routeTransfersJson="{{route('get-transfers')}}";
        var postReservationUrl= "{{route('reservations.store')}}";
        var _token="{{ csrf_token() }}";
    </script>
    <script src="{{asset('js/scripts/main.js') .'?'.rand(5, 15) }}"></script>
</body>
</html>
