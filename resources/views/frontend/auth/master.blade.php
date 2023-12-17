<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <title>SignUp - Wallet Grow</title>
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/main.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/soc.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/mobile_navbar.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/auth/style.css')}}">
</head>

<body>
  <!-- Header -->
  @include('frontend.auth.header')

  @yield('content')
  <!-- Footer -->

  @include('frontend.auth.footer')
  <!-- Mobile Bottom Navbar -->
  @include('frontend.layouts.mobile-navbar')


  <!-- Scroll to top -->
  <a id="scrollToTop">
    <svg class="icon">
      <use xlink:href="{{ URL::asset('frontend/icons/sprite.svg#icons-arrow-down')}}"></use>
    </svg>
  </a>
</body>

<script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery-3.6.4.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/js/kit.fontawesome.js')}}"></script>
<script src="{{ URL::asset('frontend/libs/Semantic/fomantic-ui-css/semantic.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="{{ URL::asset('frontend/js/additional.js')}}"></script>
<script src="{{ URL::asset('frontend/js/aos.js')}}"></script>
<script src="{{ URL::asset('frontend/js/slick.js')}}"></script>
<script src="{{ URL::asset('frontend/js/vendors.js')}}"></script>
<script src="{{ URL::asset('frontend/js/app.js')}}"></script>
<script src="{{ URL::asset('frontend/js/lottie-player.js')}}"></script>
<script src="{{ URL::asset('frontend/js/main.js')}}"></script>
<script src="{{ URL::asset('frontend/js/animate_text.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/js/slide.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/libs/html2canvas-master/dist/html2canvas.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
  integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
  integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
<script>
@if(Session::has('success'))
toastr.success("{{ Session::get('success') }}");
@endif


@if(Session::has('info'))
toastr.info("{{ Session::get('info') }}");
@endif


@if(Session::has('warning'))
toastr.warning("{{ Session::get('warning') }}");
@endif


@if(Session::has('error'))
toastr.error("{{ Session::get('error') }}");
@endif
</script>
@yield('script')

</html>