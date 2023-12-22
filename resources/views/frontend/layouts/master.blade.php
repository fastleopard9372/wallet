<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Welcome to WalletGrow</title>

  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
  <link rel="preload" href="{{ URL::asset('frontend/fonts/Outfit-Regular.woff2') }}" as="font" type="font/woff2"
    crossorigin />
  <link rel="preload" href="{{ URL::asset('frontend/fonts/RedHatDisplay-Black.woff2') }}" as="font" type="font/woff2"
    crossorigin />
  <link rel="preload" href="{{ URL::asset('frontend/fonts/RedHatDisplay-Bold.woff2') }}" as="font" type="font/woff2"
    crossorigin />
  <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('frontend/images/ico/apple-icon-57x57.png') }}" />
  <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('frontend/images/ico/apple-icon-60x60.png') }}" />
  <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('frontend/images/ico/apple-icon-72x72.png') }}" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('frontend/images/ico/apple-icon-76x76.png') }}" />
  <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('frontend/images/ico/apple-icon-114x114.png') }}" />
  <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('frontend/images/ico/apple-icon-120x120.png') }}" />
  <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('frontend/images/ico/apple-icon-144x144.png') }}" />
  <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('frontend/images/ico/apple-icon-152x152.png') }}" />
  <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('frontend/images/ico/apple-icon-180x180.png') }}" />
  <link rel="icon" type="image/png" sizes="192x192"
    href="{{ URL::asset('frontend/images/ico/android-icon-192x192.png') }}" />
  <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('frontend/images/ico/favicon-32x32.png') }}" />
  <link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('frontend/images/ico/favicon-96x96.png') }}" />
  <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('frontend/images/ico/favicon-16x16.png') }}" />
  <link rel="manifest" href="{{ URL::asset('frontend/images/ico/manifest.json') }}" />
  <meta name="msapplication-TileColor" content="#ffffff" />
  <meta name="msapplication-TileImage" content="{{ URL::asset('frontend/images/ico/ms-icon-144x144.png') }}" />
  <meta name="theme-color" content="#ffffff" />
  <link href="{{ URL::asset('frontend/libs/Semantic/fomantic-ui-css/semantic.min.css') }}" rel="stylesheet" />
  <link href="{{ URL::asset('frontend/css/main.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/switch.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/stylesheet.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/additional.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/media.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/all.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/theme.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick-theme.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/soc.css') }}" />
  <link href="{{ URL::asset('frontend/css/aos.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/mobile_navbar.css') }}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="css/style.css" />

  <link rel="stylesheet" href="{{ URL::asset('frontend/css/main.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/soc.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/mobile_navbar.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/auth/style.css')}}">
</head>

<body class="page page--index">
  <div class="wrapper">
    <!-- Header -->
    @include('frontend.layouts.header')

    @yield('content')
    <!-- Footer -->
    @include('frontend.layouts.footer')
    <!-- Mobile Bottom Navbar -->
    @include('frontend.layouts.mobile-navbar')


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
  </div>

  <a id="scrollToTop">
    <svg class="icon">
      <use xlink:href="{{ URL::asset('frontend/icons/sprite.svg#icons-arrow-down') }}"></use>
    </svg>
  </a>

  <script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery-3.6.4.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery-ui.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('frontend/js/kit.fontawesome.js') }}"></script>
  <script src="{{ URL::asset('frontend/libs/Semantic/fomantic-ui-css/semantic.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script src="{{ URL::asset('frontend/js/additional.js') }}"></script>
  <script src="{{ URL::asset('frontend/js/aos.js') }}"></script>
  <script src="{{ URL::asset('frontend/js/slick.js') }}"></script>
  <script src="{{ URL::asset('frontend/js/vendors.js') }}"></script>
  <script src="{{ URL::asset('frontend/js/app.js') }}"></script>
  <script src="{{ URL::asset('frontend/js/lottie-player.js') }}"></script>
  <script src="{{ URL::asset('frontend/js/main.js') }}"></script>
  <script src="{{ URL::asset('frontend/js/animate_text.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('frontend/js/slide.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('frontend/libs/html2canvas-master/dist/html2canvas.js') }}">
  </script>

  <script>
  AOS.init();
  window.addEventListener("load", AOS.refresh);

  $(document).ready(function($) {
    $(".slideshow").slick({
      arrows: 1,
      dots: 1,
      slidesToShow: 2,
      cssEase: "ease-out",
      autoplay: true,
    });
  });
  </script>
  @include('frontend.layouts.toaster-notifaction')

  @yield('script')
</body>

</html>