<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <link rel="preload" href="{{ URL::asset('frontend/fonts/Outfit-Regular.woff2') }}" as="font" type="font/woff2"
    crossorigin />
  <link rel="preload" href="{{ URL::asset('frontend/fonts/RedHatDisplay-Black.woff2') }}" as="font" type="font/woff2"
    crossorigin />
  <link rel="preload" href="{{ URL::asset('frontend/fonts/RedHatDisplay-Bold.woff2') }}" as="font" type="font/woff2"
    crossorigin />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
    integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/mobile_navbar.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/wallet/wallet.css') }}" />

  <title>Wallet</title>
</head>

<body>
  <header class="header">
    <div class="userinfo">
      <div class="avatar">
        <svg width="45px" height="45px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <rect width="24" height="24" fill="white"></rect>
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM11.9999 6C9.79077 6 7.99991 7.79086 7.99991 10C7.99991 12.2091 9.79077 14 11.9999 14C14.209 14 15.9999 12.2091 15.9999 10C15.9999 7.79086 14.209 6 11.9999 6ZM17.1115 15.9974C17.8693 16.4854 17.8323 17.5491 17.1422 18.1288C15.7517 19.2966 13.9581 20 12.0001 20C10.0551 20 8.27215 19.3059 6.88556 18.1518C6.18931 17.5723 6.15242 16.5032 6.91351 16.012C7.15044 15.8591 7.40846 15.7251 7.68849 15.6097C8.81516 15.1452 10.2542 15 12 15C13.7546 15 15.2018 15.1359 16.3314 15.5954C16.6136 15.7102 16.8734 15.8441 17.1115 15.9974Z"
              fill="#323232"></path>
          </g>
        </svg>
      </div>
      <div class="name">{{Auth::guard('web')->user()->user_name}}</div>

      <div class="userlevel">
        <a href="{{route('front.logout')}}"><span style="color:#FF0000">Logout</span></a>

        <span><img src="{{ URL::asset('frontend/images/wallet/level/bronze.svg') }}" alt="bronze"
            style="width: 15px" /></span>
        <span>Bronze</span>

      </div>
    </div>
    <div class="balance-box">
      <div class="point" style="text-align: center">
        <div style="display: flex; align-items: center; align-content: center">
          <div style="width: 80%; margin-left: 10%">X-Wallet Balance</div>
          <a href="{{route('record')}}" style="margin-left: auto; margin-right: 10px">
            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path
                  d="M18 6.00002V6.75002H18.75V6.00002H18ZM15.7172 2.32614L15.6111 1.58368L15.7172 2.32614ZM4.91959 3.86865L4.81353 3.12619H4.81353L4.91959 3.86865ZM5.07107 6.75002H18V5.25002H5.07107V6.75002ZM18.75 6.00002V4.30604H17.25V6.00002H18.75ZM15.6111 1.58368L4.81353 3.12619L5.02566 4.61111L15.8232 3.0686L15.6111 1.58368ZM4.81353 3.12619C3.91638 3.25435 3.25 4.0227 3.25 4.92895H4.75C4.75 4.76917 4.86749 4.63371 5.02566 4.61111L4.81353 3.12619ZM18.75 4.30604C18.75 2.63253 17.2678 1.34701 15.6111 1.58368L15.8232 3.0686C16.5763 2.96103 17.25 3.54535 17.25 4.30604H18.75ZM5.07107 5.25002C4.89375 5.25002 4.75 5.10627 4.75 4.92895H3.25C3.25 5.9347 4.06532 6.75002 5.07107 6.75002V5.25002Z"
                  fill="#1C274D"></path>
                <path d="M8 12H16" stroke="#1C274D" stroke-width="1.5" stroke-linecap="round"></path>
                <path d="M8 15.5H13.5" stroke="#1C274D" stroke-width="1.5" stroke-linecap="round"></path>
                <path
                  d="M4 6V19C4 20.6569 5.34315 22 7 22H17C18.6569 22 20 20.6569 20 19V14M4 6V5M4 6H17C18.6569 6 20 7.34315 20 9V10"
                  stroke="#1C274D" stroke-width="1.5" stroke-linecap="round"></path>
              </g>
            </svg>
          </a>
        </div>
        <div style="font-size: 24px">${{$data['wallet_balance']}}</div>
        <div style="
              font-size: 14px;
              background-color: #f3f3f3;
              width: 50%;
              margin-left: auto;
              margin-right: auto;
              border-radius: 5px;
            ">
          <span>Today income Coin. <span style="color: #00acff"
              id="today_income">${{$data['today_income']}}</span></span>
        </div>
      </div>
      <div class="rate">
        <div class="d_rate">
          <div>Month Income</div>
          <div style="font-weight: 900">${{$data['month_income']}}</div>
        </div>
        <div class="d_rate">
          <div>Total Income</div>
          <div style="font-weight: 900">${{$data['total_income']}}</div>
        </div>
      </div>
      <div class="transfer">
        <a href="{{route('out')}}" class="btnout">OUT</a>
        <a href="{{route('withraw')}}" class="btnin">Withraw</a>
      </div>
    </div>
  </header>

  <main>
    <div class="future_title">
      <h3 class="fl">Index</h3>
      <h3 class="fr">
        <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <path
              d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13"
              stroke="#68c9fa" stroke-width="1.5" stroke-linecap="round"></path>
            <circle cx="12" cy="16" r="1" fill="#68c9fa"></circle>
            <path
              d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7"
              stroke="#68c9fa" stroke-width="1.5" stroke-linecap="round"></path>
          </g>
        </svg>
      </h3>
    </div>
    <a href="{{ route('pledge') }}" class="future_box">
      <div class="future_type">
        <div class="pic">
          <div><img src="{{ URL::asset('frontend/images/wallet/pledge.svg') }}" alt="pledge" width="100%" /></div>
          <div class="pic_font">Pledge</div>
        </div>
        <div class="content">
          <div class="content_up">start</div>
          <br />
          <div class="content_down">1.3% - 2.3% Daily</div>
        </div>
      </div>
    </a>

    <a href="{{ route('non_pledge') }}" class="future_box">
      <div class="future_type">
        <div class="pic">
          <div><img src="{{ URL::asset('frontend/images/wallet/non-pledge.svg') }}" alt="non-pledge" width="100%" />
          </div>
          <div style="font-size: 14px">Non-pledge</div>
        </div>
        <div class="content">
          <div class="content_up">start</div>
          <br />
          <div class="content_down">0.9% - 2% Daily</div>
        </div>
      </div>
    </a>

    <h3 class="future_title2">Futures</h3>

    <a href="{{ route('incentive') }}" class="future_box2">
      <div class="future_type" style="margin-top: 15px">
        <div class="pic">
          <div><img src="{{ URL::asset('frontend/images/wallet/incentive.svg') }}" alt="incentive" width="100%" /></div>
          <div class="pic_font">Incentive</div>
        </div>
        <div class="content">
          <div class="content_up">
            <svg width="10px" height="10px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <circle cx="12" cy="16" r="2" stroke="#1C274C" stroke-width="1.5"></circle>
                <path
                  d="M11 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.75736 10 5.17157 10 8 10H16C18.8284 10 20.2426 10 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H15"
                  stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                <path
                  d="M6 10V8C6 7.65929 6.0284 7.32521 6.08296 7M17.811 6.5C17.1449 3.91216 14.7958 2 12 2C10.223 2 8.62643 2.7725 7.52779 4"
                  stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
              </g>
            </svg>
            Unlock now
          </div>
          <br />
          <div class="content_down">0.3% - 0.8% Daily</div>
        </div>
      </div>
    </a>

    <div class="future_box2">
      <div class="future_type">
        <div class="pic">
          <img src="{{ URL::asset('frontend/images/wallet/entertainment.svg') }}" alt="entertainment" width="100%" />
        </div>
        <div class="content">
          <div class="soon" style="width: 50px">Soon</div>
        </div>
      </div>
    </div>

    <div class="future_box2">
      <div class="future_type">
        <div class="pic"><img src="{{ URL::asset('frontend/images/wallet/contract.png') }}" alt="contract"
            width="100%" /></div>
        <div class="content">
          <div class="soon" style="width: 50px">Soon</div>
        </div>
      </div>
    </div>

    <div class="future_box2">
      <div class="future_type">
        <div class="pic"><img src="{{ URL::asset('frontend/images/wallet/savings.png') }}" alt="savings" width="100%" />
        </div>
        <div class="content">
          <div class="soon" style="width: 50px">soon</div>
        </div>
      </div>
    </div>
  </main>

  @include('frontend.layouts.mobile-navbar')
  <script src="{{ URL::asset('frontend/js/mobile_navbar.js') }}"></script>
  @include('frontend.layouts.toaster-notifaction')

</body>
<script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery-3.6.4.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
  integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
$(document).ready(function() {
  var is_start = <?= $data['is_start'] ?>;
  var wallet_balance = <?= $data['wallet_balance'] ?>;
  var length = <?= $data['length'] ?>;
  var income = <?= $data['income'] ?>;
  var today_income = <?= $data['today_income'] ?>;

  setInterval(function() {
    if (length > 0) {
      today_income = today_income * 1.0 + income / 24;
      if (today_income > income) today_income = today_income - income;
      $("#today_income").text("$" + today_income.toFixed(2));
    }
    show_date();
  }, 1000 * 60 * 60);
});
</script>

</html>