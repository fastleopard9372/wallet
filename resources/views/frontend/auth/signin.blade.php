

@extends('frontend.layouts.master')
@section('content')

<div class="auth-modal">
    <div class="auth-modal__logo">
        <a href="/investment/index.html">
            <img src="{{ URL::asset('frontend/img/logo.svg')}}" alt="logo" width="80px">
        </a>
    </div>
    <div class="auth-modal__title">
        Log in
    </div>
    <form action="{{route('front.login.process')}}" method="POST" class="auth-form" id="signin_form" name="signin_form">
        @csrf
        <div class="form-control form-control--shadow form-control--round form-control--email d-flex align-center">
            <div class="start-icon">
                <img src="{{ URL::asset('frontend/images/auth/email.svg')}}" alt="email">
            </div>
            <input type="text" name="email" id="email" placeholder="Email address">
        </div>
        <span style="color:#FF0000" id="email_error"></span>

        <div
            class="form-control form-control--shadow form-control--round form-control--password d-flex align-center">
            <div class="start-icon">
                <img src="{{ URL::asset('frontend/images/auth/password-lock.svg')}}" alt="password">
            </div>
            <input type="password" name="password" id="password" placeholder="Login password">
        </div>
        <span style="color:#FF0000" id="password_error"></span>

        <div class="form-control d-flex align-center">
            <div class="d-flex align-center toggle-wrapper">
                <input type="checkbox" name="remember_me" id="remember_me" class="toggle-mobile">
                <label for="remember_me"></label>
            </div>
            <div>Remember & Auto login</div>
        </div>
        <div class="form-control auth-btn-group">
            <button type="submit" name="login" id="login" class="auth-btn active">Log in</button>
            <a href="{{route('front.signup')}}" class="auth-btn">Sign up</a>
        </div>
    </form>
    <!-- <a href="#" class="google-login form-control d-flex align-center">
        <img src="{{ URL::asset('frontend/images/auth/google-login.png')}}" alt="google login">
        Login with google
    </a> -->
    <!-- <a href="#" class="form-control forgot-password d-flex align-center justify-center">
        <img src="{{ URL::asset('frontend/images/auth/password-lock.svg')}}" alt="forgot password">
        Forgot password?
    </a> -->
</div>
@endsection
@section('script')
<script>
    $(document).ready(function(){
        $('#login').click(function(e){

            let error_msg = "This field is required.";
            var email = $('#email').val();
            var password = $('#password').val();


            if (email == '') {
                $("#email_error").text(error_msg);
                $("#email").focus();
                return false;
            } else {
                $("#email_error").text("");
            }
          
            if (password == '') {
                $("#password_error").text(error_msg);
                $("#password").focus();
                return false;
            } else {
                $("#password_error").text("");
            }
           
            


        });

    });

</script>
@endsection