<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
  data-sidebar-image="none" data-preloader="disable">

<head>

  <meta charset="utf-8" />
  <title>Dashboard | Velzon - Admin & Dashboard Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
  <meta content="Themesbrand" name="author" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="{{ URL::asset('backend_assets/images/favicon.ico') }}">

  <!-- jsvectormap css -->
  <link href="{{ URL::asset('backend_assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet"
    type="text/css" />

  <!--Swiper slider css-->
  <link href="{{ URL::asset('backend_assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

  <!-- Layout config Js -->
  <script src="{{ URL::asset('backend_assets/js/layout.js') }}"></script>
  <!-- Bootstrap Css -->
  <link href="{{ URL::asset('backend_assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="{{ URL::asset('backend_assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="{{ URL::asset('backend_assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- custom Css-->
  <link href="{{ URL::asset('backend_assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>

  <!-- Begin page -->
  <div id="layout-wrapper">

    @include('backend.layouts.header')


    @include('backend.layouts.sidebar')

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

      <div class="page-content">
        @yield('content')
        <!-- container-fluid -->
      </div>
      <!-- End Page-content -->

      @include('backend.layouts.footer')
    </div>
    <!-- end main content-->

  </div>
  <!-- END layout-wrapper -->



  <!--start back-to-top-->

  <!-- JAVASCRIPT -->

  @include('backend.layouts.backend-script')

</body>

</html>