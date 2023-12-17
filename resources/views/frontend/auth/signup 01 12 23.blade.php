

@extends('frontend.layouts.master')
@section('content')

<div class="auth-modal">
    <div class="auth-modal__logo">
        <a href="/investment/index.html">
            <img src="{{ URL::asset('frontend/img/logo.svg')}}" alt="logo" width="80px">
        </a>
    </div>
    <div class="auth-modal__title">
        Sign up
    </div>
    <form action="{{route('front.register')}}" method="POST" class="auth-form" id="signup_form" name="signup_form">
        @csrf
        <div class="form-control form-control--shadow form-control--round form-control--email d-flex align-center">
            <div class="start-icon">
                <img src="{{ URL::asset('frontend/images/auth/email.svg')}}" alt="email">
            </div>
            <input type="text" name="email" id="email" placeholder="Email address">

        </div>
        <span style="color:#FF0000" id="email_error"></span>

        <div
            class="form-control form-control--shadow form-control--round form-control--username d-flex align-center">
            <div class="start-icon">
                <img src="{{ URL::asset('frontend/images/auth/username.svg')}}" alt="user name">
            </div>
            <input type="text" name="name" id="name" placeholder="Name">

        </div>
        <span style="color:#FF0000" id="name_error"></span>

        <div
            class="form-control form-control--shadow form-control--round form-control--password d-flex align-center">
            <div class="start-icon">
                <img src="{{ URL::asset('frontend/images/auth/password-lock.svg')}}" alt="login password">
            </div>
            <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <span style="color:#FF0000" id="password_error"></span>

        <div
            class="form-control form-control--shadow form-control--round form-control--security d-flex align-center">
            <div class="start-icon">
                <img src="{{ URL::asset('frontend/images/auth/security-password.svg')}}" alt="security password">
            </div>
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">

        </div>
        <span style="color:#FF0000" id="confirm_password_error"></span>

        <div
            class="form-control form-control--shadow form-control--round form-control--referral-code d-flex align-center">
            <div class="start-icon">
                <img src="{{ URL::asset('frontend/images/auth/referral-code.svg')}}" alt="referral code">
            </div>
            <input type="text" name="referral_code" id="referral_code" placeholder="Referral code">
        </div>
        <div class="form-control form-control--agree d-flex align-top">
            <input type="checkbox" name="agree" id="agree" value="1" class="custom-checkbox">
            <label for="agree">I agree with <span class="text-bold">Wallet Grow</span> <a href="#">Privacy
                    Police</a> and <a href="#">Terms of
                    Service</a></label>

        </div>
        <span style="color:#FF0000" id="agree_error"></span>

        <div class="form-control auth-btn-group">
            <button type="submit" name="register" id="register" class="auth-btn active">Sign up</button>
        </div>
    </form>
    <div class="form-control forgot-password d-flex align-center justify-center">
        Already have an account?
        <a href="{{route('front.signin')}}" class="login-link">Log in</a>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function(){
        $('#register').click(function(e){

            let error_msg = "This field is required.";
            var email = $('#email').val();
            var name = $('#name').val();
            var password = $('#password').val();
            var confirm_password = $('#confirm_password').val();
            var referral_code = $('#referral_code').val();
            var agree = $('#agree').is(':checked');
            if (email == '') {
                $("#email_error").text(error_msg);
                $("#email").focus();
                return false;
            } else {
                $("#email_error").text("");
            }
            if (name == '') {
                $("#name_error").text(error_msg);
                $("#name").focus();
                return false;
            } else {
                $("#name_error").text("");
            }
            if (password == '') {
                $("#password_error").text(error_msg);
                $("#password").focus();
                return false;
            } else {
                $("#password_error").text("");
            }
            if (confirm_password == '') {
                $("#confirm_password_error").text(error_msg);
                $("#confirm_password").focus();
                return false;
            } else {
                $("#confirm_password_error").text("");
            }

            if (password !== confirm_password) {
                $("#confirm_password_error").text("Passwords and confirm password should match");
                $("#confirm_password").focus();
                return false;
            } else {
                $("#confirm_password_error").text("");
            }
            if (!agree) {
                $("#agree_error").text("You must agree to the terms and conditions");
                return false;
            } else {
                $("#agree_error").text("");
            }
            


        });

    });

</script>
@endsection