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

    <div class="form-control form-control--shadow form-control--round form-control--username d-flex align-center">
      <div class="start-icon">
        <img src="{{ URL::asset('frontend/images/auth/username.svg')}}" alt="user name">
      </div>
      <input type="text" name="user_name" id="user_name" placeholder="Username">

    </div>
    <span style="color:#FF0000" id="user_name_error"></span>

    <div class="form-control form-control--shadow form-control--round form-control--password d-flex align-center">
      <div class="start-icon">
        <img src="{{ URL::asset('frontend/images/auth/password-lock.svg')}}" alt="login password">
      </div>
      <input type="password" name="password" id="password" placeholder="Login Password">
      <div class="start-icon">
        <i class="bi bi-eye-slash" id="togglePassword"></i>
      </div>



    </div>
    <span style="color:#FF0000" id="password_error"></span>

    <div class="form-control form-control--shadow form-control--round form-control--security d-flex align-center">
      <div class="start-icon">
        <img src="{{ URL::asset('frontend/images/auth/password-lock.svg')}}" alt="login password">

      </div>
      <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Login Password">
      <div class="start-icon">
        <i class="bi bi-eye-slash" id="togglePassword2"></i>
      </div>

    </div>
    <span style="color:#FF0000" id="confirm_password_error"></span>

    <div class="form-control form-control--shadow form-control--round form-control--referral-code d-flex align-center">
      <div class="start-icon">
        <img src="{{ URL::asset('frontend/images/auth/referral-code.svg')}}" alt="referral code">
      </div>
      <input type="text" name="referred_by" id="referral_code"
        value="@php if(isset($_GET['ref'])){echo $_GET['ref']; }else{echo "";}@endphp" readonly
        placeholder="Referral code">
    </div>
    <span style="color:#FF0000" id="referral_code_error"></span>

    <div class="form-control form-control--agree d-flex align-top">
      <input type="checkbox" name="agree" id="agree" value="1" class="custom-checkbox">
      <label for="agree">I agree with <span class="text-bold">Wallet Grow</span> <a href="#">Privacy
          Policy</a> and <a href="#">Terms of
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
$(document).ready(function() {


  $('#user_name').on('input', function() {
    // Remove spaces from the input value
    var username = $(this).val().replace(/\s/g, '');
    // Update the input value without spaces
    $(this).val(username);

    if (username !== '') {
      checkUniqueField('username', username);
    }
  });
  $('#email').on('input', function() {
    var email = $(this).val();
    if (email !== '') {
      checkUniqueField('email', email);
    }
  });


  $('#register').click(function(e) {

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
    if (referral_code == '') {

      $("#referral_code_error").text(error_msg);
      $("#referral_code").focus();
      return false;
    } else {


      $("#referral_code_error").text("");
    }

    if (!agree) {
      $("#agree_error").text("You must agree to the terms and conditions");
      return false;
    } else {
      $("#agree_error").text("");
    }



  });

  function checkUniqueField(field, value) {
    $.ajax({
      url: "{{ route('front.check_unique_username_email') }}",
      data: {
        field: field,
        value: value,
        _token: '{{ csrf_token() }}',
      },
      type: "POST",
      success: function(response) {

        if (response.field == 'email') {

          if (response.status == 'error') {
            $("#email_error").text(response.message);

          } else {
            $("#email_error").text("");

          }

        }
        if (response.field == 'username') {
          if (response.status == 'error') {
            $("#user_name_error").text(response.message);


          } else {
            $("#user_name_error").text("");

          }

        }

      }
    });
  }

});
</script>
<script>
const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");

togglePassword.addEventListener("click", function() {
  // toggle the type attribute
  const type = password.getAttribute("type") === "password" ? "text" : "password";
  password.setAttribute("type", type);

  // toggle the icon
  this.classList.toggle("bi-eye");
});

// prevent form submit
const form = document.querySelector("form");
form.addEventListener('submit', function(e) {
  e.preventDefault();
});
</script>
<script>
const togglePassword = document.querySelector("#togglePassword2");
const password = document.querySelector("#confirm_password");

togglePassword.addEventListener("click", function() {
  // toggle the type attribute
  const type = password.getAttribute("type") === "password" ? "text" : "password";
  password.setAttribute("type", type);

  // toggle the icon
  this.classList.toggle("bi-eye");
});

// prevent form submit
const form = document.querySelector("form");
form.addEventListener('submit', function(e) {
  e.preventDefault();
});
</script>
<!-- password-addon init -->
<script src="{{ URL::asset('backend_assets/js/pages/password-addon.init.js') }}"></script>
@endsection