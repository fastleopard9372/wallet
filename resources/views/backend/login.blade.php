<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
  data-sidebar-image="none" data-preloader="disable">

<head>

  <meta charset="utf-8" />
  <title>Sign In | Investment - Admin & Dashboard Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
  <meta content="Themesbrand" name="author" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="{{ URL::asset('backend_assets/images/favicon.ico') }}">

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

  <div class="auth-page-wrapper pt-5">
    <!-- auth page bg -->
    <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
      <div class="bg-overlay"></div>

      <div class="shape">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
          viewBox="0 0 1440 120">
          <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
        </svg>
      </div>
    </div>

    <!-- auth page content -->
    <div class="auth-page-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center mt-sm-5 mb-4 text-white-50">
              <div>
                <a href="index.html" class="d-inline-block auth-logo">
                  {{-- <img src="{{ URL::asset('backend_assets/images/logo-light.png') }}" alt="" height="20"> --}}
                </a>
              </div>
              {{-- <p class="mt-3 fs-15 fw-medium">Premium Admin & Dashboard Template</p> --}}
            </div>
          </div>
        </div>
        <!-- end row -->

        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card mt-4">

              <div class="card-body p-4">
                <div class="text-center mt-2">
                  <h5 class="text-primary">Welcome Back !</h5>
                  <p class="text-muted">Sign in to continue .</p>
                </div>
                <!-- Danger Alert -->
                @if(Session::has('error'))
                <div class="alert alert-danger alert-dismissible alert-solid alert-label-icon shadow fade show"
                  role="alert">
                  <i class="ri-error-warning-line label-icon"></i><strong></strong>{{Session::get('error')}}
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                    aria-label="Close"></button>
                </div>
                @endif
                @if(Session::has('success'))
                <!-- Success Alert -->
                <div class="alert alert-success alert-dismissible alert-solid alert-label-icon shadow fade show"
                  role="alert">
                  <i class="ri-notification-off-line label-icon"></i><strong>Success</strong> -
                  {{Session::get('success')}}
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                    aria-label="Close"></button>
                </div>
                @endif
                <div class="p-2 mt-4">
                  <form action="{{ route('admin.login') }}" method="post">
                    @csrf
                    <div class="mb-3">
                      <label for="username" class="form-label">Username</label>
                      <input type="text" class="form-control" name="email" id="username" value="{{ old('email') }}"
                        placeholder="Enter Email">
                    </div>
                    @error('email')
                    <div class="text text-danger">
                      {{$message}}
                    </div>
                    @enderror

                    <div class="mb-3">
                      <div class="float-end">
                        <a href="auth-pass-reset-basic.html" class="text-muted">Forgot password?</a>
                      </div>
                      <label class="form-label" for="password-input">Password</label>
                      <div class="position-relative auth-pass-inputgroup mb-3">
                        <input type="password" class="form-control pe-5 password-input" name="password"
                          placeholder="Enter Password" id="password-input">
                        <button
                          class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                          type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                      </div>
                      @error('password')
                      <div class="text text-danger">
                        {{$message}}
                      </div>
                      @enderror
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="remember">
                      <label class="form-check-label" for="auth-remember-check">Remember me</label>
                    </div>

                    <div class="mt-4">
                      <button class="btn btn-success w-100" type="submit">Sign In</button>
                    </div>

                    {{-- <div class="mt-4 text-center">
                                            <div class="signin-other-title">
                                                <h5 class="fs-13 mb-4 title">Sign In with</h5>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-facebook-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-google-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i class="ri-github-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i class="ri-twitter-fill fs-16"></i></button>
                                            </div>
                                        </div> --}}
                  </form>
                </div>
              </div>
              <!-- end card body -->
            </div>
            <!-- end card -->

            {{-- <div class="mt-4 text-center">
                            <p class="mb-0">Don't have an account ? <a href="auth-signup-basic.html" class="fw-semibold text-primary text-decoration-underline"> Signup </a> </p>
                        </div> --}}

          </div>
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </div>
    <!-- end auth page content -->

    <!-- footer -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
              <p class="mb-0 text-muted">&copy;
                <script>
                document.write(new Date().getFullYear())
                </script> Investment. Crafted with <i class="mdi mdi-heart text-danger"></i> by Techwelfare
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- end Footer -->
  </div>
  <!-- end auth-page-wrapper -->

  <!-- JAVASCRIPT -->
  <script src="{{ URL::asset('backend_assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL::asset('backend_assets/libs/simplebar/simplebar.min.js') }}"></script>
  <script src="{{ URL::asset('backend_assets/libs/node-waves/waves.min.js') }}"></script>
  <script src="{{ URL::asset('backend_assets/libs/feather-icons/feather.min.js') }}"></script>
  <script src="{{ URL::asset('backend_assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
  <script src="{{ URL::asset('backend_assets/js/plugins.js') }}"></script>

  <!-- particles js -->
  <script src="{{ URL::asset('backend_assets/libs/particles.js/particles.js') }}"></script>
  <!-- particles app js -->
  <script src="{{ URL::asset('backend_assets/js/pages/particles.app.js') }}"></script>
  <!-- password-addon  init -->
  <script src="{{ URL::asset('backend_assets/js/pages/password-addon.init.js') }}"></script>
</body>

</html>