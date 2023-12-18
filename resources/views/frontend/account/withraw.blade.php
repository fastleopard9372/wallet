<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/mobile_navbar.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/account/account.css') }}" />

  <title>Withraw</title>
</head>

<body>
  <!-- Top block -->
  <section class="account_top_block">
    <!-- Header -->
    <div class="account_header">
      <a href="{{route('front.account')}}" class="align_item_center">
        <svg fill="#ffffff" height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" stroke="#ffffff">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <g>
              <g>
                <path
                  d="M224.98,255.988L394.488,86.48c9.571-9.571,14.843-22.297,14.843-35.831c0-13.535-5.271-26.26-14.843-35.831 c-19.758-19.756-51.904-19.758-71.662,0l-205.34,205.34c-19.757,19.757-19.757,51.904,0,71.662l205.34,205.339 c9.571,9.571,22.295,14.842,35.83,14.842c13.535,0,26.26-5.271,35.831-14.841c9.571-9.571,14.843-22.296,14.843-35.831 c0-13.535-5.271-26.26-14.843-35.831L224.98,255.988z M380.062,482.734c-5.717,5.718-13.321,8.867-21.406,8.867 c-8.085,0-15.688-3.149-21.405-8.867l-205.34-205.339c-11.803-11.804-11.803-31.01,0-42.813l205.341-205.34 c5.901-5.901,13.653-8.853,21.405-8.853c7.752,0,15.505,2.952,21.405,8.854c5.718,5.718,8.868,13.32,8.868,21.406 s-3.15,15.689-8.868,21.407l-176.719,176.72c-3.983,3.984-3.983,10.442,0,14.425l176.719,176.721 c5.718,5.718,8.868,13.321,8.868,21.406C388.929,469.413,385.78,477.016,380.062,482.734z">
                </path>
              </g>
            </g>
            <g>
              <g>
                <path
                  d="M175.503,219.486c-3.955-4.014-10.413-4.059-14.424-0.105l-14.248,14.043c-4.013,3.954-4.06,10.413-0.105,14.424 c1.996,2.025,4.631,3.039,7.265,3.039c2.586,0,5.172-0.977,7.159-2.934l14.248-14.043 C179.411,229.956,179.458,223.498,175.503,219.486z">
                </path>
              </g>
            </g>
            <g>
              <g>
                <path
                  d="M359.702,37.694c-3.955-4.013-10.415-4.057-14.424-0.104L187.835,192.773c-4.012,3.954-4.058,10.413-0.104,14.424 c1.996,2.025,4.631,3.039,7.265,3.039c2.585,0,5.172-0.977,7.159-2.935L359.597,52.119 C363.61,48.164,363.657,41.707,359.702,37.694z">
                </path>
              </g>
            </g>
          </g>
        </svg>
        &nbsp;Back
      </a>
      <div>Withraw</div>
      <div class="align_item_center">
        Support&nbsp;
        <svg fill="#ffffff" width="14px" height="14px" viewBox="-2.3 0 122.88 122.88" version="1.1" id="Layer_1"
          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
          style="enable-background: new 0 0 118.28 122.88" xml:space="preserve">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <g>
              <path
                d="M111.85,108.77c-3.47,4.82-8.39,8.52-14.13,10.48c-0.26,0.12-0.55,0.18-0.84,0.18c-0.28,0-0.56-0.06-0.82-0.17v0.06 c0,1.96-1.6,3.56-3.57,3.56l-7.68,0c-1.96,0-3.57-1.6-3.57-3.56l0-55.13c0-1.96,1.6-3.57,3.57-3.57h7.68c1.96,0,3.57,1.6,3.57,3.57 v0.34c0.26-0.12,0.54-0.18,0.82-0.18c0.22,0,0.44,0.04,0.64,0.1l0,0.01c4.36,1.45,8.26,3.92,11.42,7.11V59.15 c0-14.89-4.99-27.63-13.81-36.6l-3.91,5.83c-7.95-8.75-19.4-14.27-32.08-14.27c-12.76,0-24.29,5.59-32.24,14.45l-4.73-5.78 C13.47,31.65,8.54,44.21,8.54,59.15V73.4c3.4-4.08,7.92-7.22,13.07-8.93l0-0.01c0.21-0.07,0.43-0.11,0.64-0.11 c0.28,0,0.57,0.06,0.82,0.17v-0.34c0-1.96,1.61-3.57,3.57-3.57l7.68,0c1.96,0,3.57,1.6,3.57,3.57v55.13c0,1.96-1.61,3.56-3.57,3.56 h-7.68c-1.96,0-3.57-1.6-3.57-3.56v-0.06c-0.25,0.11-0.53,0.17-0.82,0.17c-0.3,0-0.58-0.07-0.83-0.18 c-5.74-1.96-10.66-5.66-14.13-10.48c-1.82-2.52-3.24-5.34-4.17-8.37l-3.12,0V59.15c0-16.27,6.65-31.05,17.37-41.77 C28.09,6.66,42.88,0,59.14,0c16.27,0,31.06,6.66,41.77,17.37c10.72,10.72,17.37,25.5,17.37,41.77v41.25h-2.27 C115.1,103.39,113.68,106.23,111.85,108.77L111.85,108.77L111.85,108.77z">
              </path>
            </g>
          </g>
        </svg>
      </div>
    </div>

    <!-- Account info -->
    <div class="account_info">
      <div class="account_info_left">
        <div class="account_avatar align_item_center">
          <span>
            <img src="{{ URL::asset('frontend/images/account/icon/user_avatar.svg')}}" alt="user_avatar"
              style="width: 30px; margin-right: 5px" />
          </span>
          <div>{{Auth::guard('web')->user()->user_name}}</div>
        </div>
        <div class="ft12">SCORE: <span>0</span></div>
      </div>
      <div class="account_info_right">
        <div style="display: flex; flex-wrap: wrap; align-items: center">
          Total Coin
          <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
            stroke="#d3d3d3">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M12 22C16.4183 22 20 18.4183 20 14C20 9.58172 16.4183 6 12 6C7.58172 6 4 9.58172 4 14C4 18.4183 7.58172 22 12 22ZM12 11C11.7159 11 11.5259 11.3408 11.1459 12.0225L11.0476 12.1989C10.9397 12.3926 10.8857 12.4894 10.8015 12.5533C10.7173 12.6172 10.6125 12.641 10.4028 12.6884L10.2119 12.7316C9.47396 12.8986 9.10501 12.982 9.01723 13.2643C8.92945 13.5466 9.18097 13.8407 9.68403 14.429L9.81418 14.5812C9.95713 14.7483 10.0286 14.8319 10.0608 14.9353C10.0929 15.0387 10.0821 15.1502 10.0605 15.3733L10.0408 15.5763C9.96476 16.3612 9.92674 16.7536 10.1565 16.9281C10.3864 17.1025 10.7318 16.9435 11.4227 16.6254L11.6014 16.5431C11.7978 16.4527 11.8959 16.4075 12 16.4075C12.1041 16.4075 12.2022 16.4527 12.3986 16.5431L12.5773 16.6254C13.2682 16.9435 13.6136 17.1025 13.8435 16.9281C14.0733 16.7536 14.0352 16.3612 13.9592 15.5763L13.9395 15.3733C13.9179 15.1502 13.9071 15.0387 13.9392 14.9353C13.9714 14.8319 14.0429 14.7483 14.1858 14.5812L14.316 14.429C14.819 13.8407 15.0706 13.5466 14.9828 13.2643C14.895 12.982 14.526 12.8986 13.7881 12.7316L13.5972 12.6884C13.3875 12.641 13.2827 12.6172 13.1985 12.5533C13.1143 12.4894 13.0603 12.3926 12.9524 12.1989L12.8541 12.0225C12.4741 11.3408 12.2841 11 12 11Z"
                fill="#d3d3d3"></path>
              <path
                d="M11 2H13C14.8856 2 15.8284 2 16.4142 2.58579C16.9917 3.1633 16.9999 4.08784 17 5.92072C15.5477 5.02003 13.8346 4.5 12 4.5C10.1654 4.5 8.4523 5.02003 7 5.92072C7.00012 4.08784 7.00827 3.1633 7.58578 2.58579C8.17157 2 9.11438 2 11 2Z"
                fill="#d3d3d3"></path>
            </g>
          </svg>
        </div>
        <?php
          $total_amount = Auth::guard('web')->user()->total_coins + 1 * $totalEarningCoins;
        ?>
        <div class="ft12">COIN. <span class="ft24">{{$total_amount}}</span>
        </div>
      </div>
    </div>

    <!-- Wallet info -->
    <div class="wallet_info">
      <div class="total_point">
        <div class="total_left">
          <div class="wallet_icon">
            <img src="{{ URL::asset('frontend/images/account/icon/wallet.svg')}}" alt="wallet"
              style="width: 40px; margin-right: 10px" />
          </div>
          <div class="wallet_content">
            <div>X-Wallet Total COIN</div>
            <div>Daily reward upto 2.3%</div>
          </div>
        </div>
        <div class="total_right">
          <div>COIN. <span>{{$data['wallet_balance']}}</span></div>
          <div class="btn_group">
            <a href="{{route('in')}}" class="account_btn point_btn">IN</a>
            <a href="{{route('out')}}" class="account_btn point_btn">OUT</a>
          </div>
        </div>
      </div>
      <div class="transfer">
        <div>Minimum X-wallet transfer 20 coins</div>
        <a href="#" class="account_btn transfer_btn">Download</a>
      </div>
    </div>
  </section>
  <form method="post" id="withraw_form">
    @csrf
    <section class="withraw ft14">
      <div class="coin">
        <div class="coin_left">
          <div>Coin:</div>
          <div>COIN. <input type="number" name="coin_input" readonly id="coin_input"
              value="{{$data['wallet_balance']}}" /></div>
        </div>
        <div class="coin_right">
          <button>Refresh</button>
        </div>
      </div>
      <div class="bank_card">
        <div>Payment Method</div>
        <div>
          <input type="text" name="bank_card_select" id="bank_card_select" placeholder="Select Payment Method" />
        </div>
      </div>
      <div class="withraw_coin">
        <div>Withraw Coin:</div>
        <div><input type="number" name="withraw_amount" id="withraw_amount" placeholder="Enter withraw amount" /></div>
      </div>
      <!--  <div class="pay_password">
        <div>Pay Password</div>
        <div><input type="number" name="pay_password" id="pay_password" /></div>
      </div> -->

      <button type="button" class="withraw_ok_btn" style="cursor:pointer;" id="withraw_ok_btn">OK</button>

      <p class="text-red rule_header text-bold underline">Withdrawal rules:</p>

      <ol class="withraw_rule text-red">
        <li>Minimum withdrawal amount is 5 USDT or 50 TRX.</li>
        <li>Withdrawal can be request 24 hours at any time.</li>
        <li>Arrival timing 5 ~ 55 minutes.</li>
        <li>Handling fee for USDT withdrawal is 1$ per transaction. For, TRX withdrawal is 1 TRX per transaction.</li>
        <li>Withdrawal Limit for USDT is 5 ~ 10,000. Limit for TRX is 50 ~ 1,00,000 per day.</li>
      </ol>
    </section>
  </form>
  <!-- Mobile Navbar -->
  <div class="mobile_navbar">
    <div class="mobile_nav_container">
      <ul class="mobile_nav">
        <li>
          <a href="{{route('home')}}">
            <svg fill="#636363" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 495.398 495.398"
              xml:space="preserve">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <g>
                  <g>
                    <g>
                      <path
                        d="M487.083,225.514l-75.08-75.08V63.704c0-15.682-12.708-28.391-28.413-28.391c-15.669,0-28.377,12.709-28.377,28.391 v29.941L299.31,37.74c-27.639-27.624-75.694-27.575-103.27,0.05L8.312,225.514c-11.082,11.104-11.082,29.071,0,40.158 c11.087,11.101,29.089,11.101,40.172,0l187.71-187.729c6.115-6.083,16.893-6.083,22.976-0.018l187.742,187.747 c5.567,5.551,12.825,8.312,20.081,8.312c7.271,0,14.541-2.764,20.091-8.312C498.17,254.586,498.17,236.619,487.083,225.514z">
                      </path>
                      <path
                        d="M257.561,131.836c-5.454-5.451-14.285-5.451-19.723,0L72.712,296.913c-2.607,2.606-4.085,6.164-4.085,9.877v120.401 c0,28.253,22.908,51.16,51.16,51.16h81.754v-126.61h92.299v126.61h81.755c28.251,0,51.159-22.907,51.159-51.159V306.79 c0-3.713-1.465-7.271-4.085-9.877L257.561,131.836z">
                      </path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
            Home
          </a>
        </li>
        <li>
          <a href="{{ route('front.project') }}">
            <svg fill="#636363" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 47 47"
              xml:space="preserve">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <g>
                  <g id="Layer_1_1_">
                    <g>
                      <path
                        d="M7.371,19.227H2.137C0.957,19.227,0,20.184,0,21.364v23.5C0,46.043,0.957,47,2.137,47h5.234 c1.18,0,2.136-0.957,2.136-2.136v-23.5C9.507,20.184,8.551,19.227,7.371,19.227z">
                      </path>
                      <path
                        d="M19.869,25.635h-5.234c-1.181,0-2.137,0.957-2.137,2.137v17.09c0,1.181,0.956,2.137,2.137,2.137h5.234 c1.18,0,2.136-0.957,2.136-2.137v-17.09C22.005,26.592,21.049,25.635,19.869,25.635z">
                      </path>
                      <path
                        d="M32.365,25.635h-5.234c-1.18,0-2.136,0.957-2.136,2.137v17.09c0,1.181,0.956,2.137,2.136,2.137h5.234 c1.181,0,2.137-0.957,2.137-2.137v-17.09C34.502,26.592,33.546,25.635,32.365,25.635z">
                      </path>
                      <path
                        d="M44.863,19.227h-5.234c-1.18,0-2.136,0.957-2.136,2.137v23.5c0,1.18,0.956,2.136,2.136,2.136h5.234 C46.043,47,47,46.042,47,44.864v-23.5C47,20.184,46.043,19.227,44.863,19.227z">
                      </path>
                      <path
                        d="M24.123,12.87v3.846c1.164-0.077,2.391-0.623,2.391-1.904C26.514,13.49,25.169,13.103,24.123,12.87z">
                      </path>
                      <path
                        d="M20.778,8.267c0,0.972,0.723,1.534,2.18,1.826V6.614C21.634,6.653,20.778,7.431,20.778,8.267z">
                      </path>
                      <path
                        d="M23.5,0C17.021,0,11.75,5.272,11.75,11.75c0,6.476,5.271,11.748,11.75,11.748c6.479,0,11.75-5.272,11.75-11.748 C35.25,5.272,29.979,0,23.5,0z M24.123,18.699v1.203c0,0.331-0.254,0.661-0.586,0.661c-0.328,0-0.579-0.33-0.579-0.661v-1.203 c-3.283-0.08-4.916-2.042-4.916-3.577c0-0.775,0.469-1.223,1.203-1.223c2.176,0,0.484,2.681,3.713,2.816v-4.06 c-2.88-0.523-4.624-1.786-4.624-3.942c0-2.641,2.196-4.003,4.624-4.079V3.598c0-0.331,0.251-0.661,0.579-0.661 c0.332,0,0.586,0.33,0.586,0.661v1.036c1.514,0.04,4.623,0.99,4.623,2.895c0,0.757-0.566,1.203-1.227,1.203 c-1.264,0-1.246-2.077-3.396-2.117v3.691c2.564,0.545,4.835,1.302,4.835,4.294C28.958,17.202,27.016,18.522,24.123,18.699z">
                      </path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
            Projects
          </a>
        </li>
        <li>
          <a href="{{route('front.wallet_index')}}">
            <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
              width="20px" height="20px" viewBox="0 0 450 450" xml:space="preserve" fill="#636363"
              style="text-align: center">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <style type="text/css">
                .st0 {
                  fill: #636363;
                }
                </style>
                <g>
                  <path class="st0"
                    d="M502.469,280.563H380.594c-11.375,0-21.547,4.563-29,12c-7.438,7.453-12.016,17.625-12.016,29 c0,11.344,4.578,21.531,12.016,28.984c7.453,7.453,17.625,12,29,12.016h121.875c5.25,0,9.531-4.281,9.531-9.547v-62.922 C512,284.813,507.719,280.563,502.469,280.563z M381.281,335.219c-7.547,0-13.656-6.125-13.656-13.656 c0-7.563,6.109-13.688,13.656-13.688s13.672,6.125,13.672,13.688C394.953,329.094,388.828,335.219,381.281,335.219z">
                  </path>
                  <path class="st0"
                    d="M314.344,321.563c0.031-36.594,29.656-66.234,66.25-66.25H490v-78.719c0-32.781-25.25-59.656-57.375-62.297 v-0.25H78.031c-9.375,0-17-7.609-17-16.984c0-9.406,7.625-17,17-17h354.563c-0.469-34.141-28.281-61.688-62.531-61.688H100.094 c-53.781,0-97.531,42.453-99.875,95.672H0v4.422v72.813v202.25c0,55.281,44.813,100.094,100.094,100.094h327.359 C462,493.625,490,465.609,490,431.063v-43.281H380.594C344,387.781,314.375,358.125,314.344,321.563z M244.531,371.547 c-3.469,6.5-8.25,11.922-14.281,16.375c-6.063,4.422-13.297,7.734-21.719,9.906c-3.688,0.922-7.547,1.578-11.469,2.109v24.531 h-29.281v-24.031c-8.344-0.719-16.313-2.031-23.813-4.078c-11.469-3.141-26.484-15.813-26.484-15.813 c-1.281-0.75-2.141-2.078-2.328-3.547c-0.156-1.469,0.328-2.938,1.375-4l14.672-14.656c1.594-1.578,4.047-1.875,5.953-0.719 c0,0,10.969,9.531,19.313,11.813c8.313,2.266,16.563,3.406,24.797,3.406c10.391,0,18.984-1.844,25.797-5.5 c6.813-3.703,10.219-9.406,10.219-17.219c0-5.625-1.656-10.047-5.047-13.313c-3.344-3.219-9.016-5.266-17.016-6.156l-26.281-2.25 c-15.563-1.531-27.594-5.859-36-13c-8.469-7.125-12.656-17.953-12.656-32.422c0-8.016,1.609-15.141,4.859-21.422 c3.25-6.266,7.672-11.563,13.297-15.875c5.625-4.328,12.172-7.594,19.625-9.75c3.125-0.906,6.406-1.5,9.719-2.031v-21.141h29.281 v20.703c6.844,0.688,13.344,1.781,19.406,3.438c10.266,2.813,21.063,11.25,21.063,11.25c1.344,0.688,2.281,2.016,2.5,3.516 c0.234,1.516-0.266,3.016-1.344,4.125l-13.75,13.969c-1.469,1.484-3.734,1.859-5.609,0.906c0,0-8.141-5.813-15.188-7.641 c-7.047-1.844-14.422-2.766-22.234-2.766c-10.156,0-17.688,1.953-22.531,5.828c-4.875,3.906-7.297,9-7.297,15.25 c0,5.641,1.703,9.969,5.203,12.969c3.438,3.047,9.281,5,17.5,5.844l23.031,1.969c17.094,1.5,30,6.031,38.766,13.609 s13.141,18.609,13.141,33.078C249.719,357.5,247.984,365.063,244.531,371.547z">
                  </path>
                </g>
              </g>
            </svg>
            X-wallet
          </a>
        </li>
        <li>
          <a href="{{ route('front.account')}}">
            <svg fill="#636363" width="20px" height="20px" viewBox="-3 0 19 19" xmlns="http://www.w3.org/2000/svg"
              class="cf-icon-svg">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path
                  d="M12.365 10.832a.473.473 0 0 1-.012.106q.012.179.012.37c0 3.239-5.865 5.063-5.865 5.063S.635 14.547.635 11.307q0-.19.012-.37a.473.473 0 0 1-.012-.105V3.643a.476.476 0 0 1 .475-.475h10.78a.476.476 0 0 1 .475.475zm-3.617-.387a1.653 1.653 0 0 0-.409-1.087 2.23 2.23 0 0 0-.617-.491l-.002-.001a2.599 2.599 0 0 0-.641-.232h-.002a2.797 2.797 0 0 0-.59-.062 2.196 2.196 0 0 1-.364-.028 1.405 1.405 0 0 1-.384-.123h-.001a.918.918 0 0 1-.294-.236v-.002a.596.596 0 0 1-.141-.358.604.604 0 0 1 .336-.509 1.67 1.67 0 0 1 .858-.23 1.722 1.722 0 0 1 .304.05l.036.008a1.926 1.926 0 0 1 .365.127 1.024 1.024 0 0 1 .3.206.554.554 0 1 0 .782-.785 2.145 2.145 0 0 0-.627-.431 2.961 2.961 0 0 0-.585-.2l-.036-.008h-.002v-.626a.554.554 0 0 0-1.109 0v.609a2.646 2.646 0 0 0-.878.343 1.712 1.712 0 0 0-.853 1.446 1.688 1.688 0 0 0 .39 1.058 2.01 2.01 0 0 0 .659.529 2.481 2.481 0 0 0 .697.225 3.281 3.281 0 0 0 .548.044 1.686 1.686 0 0 1 .355.036 1.47 1.47 0 0 1 .362.13 1.128 1.128 0 0 1 .3.24.552.552 0 0 1 .135.358c0 .124-.036.289-.31.466a1.69 1.69 0 0 1-.875.243 2.678 2.678 0 0 1-.38-.046 1.845 1.845 0 0 1-.354-.113.762.762 0 0 1-.284-.218.554.554 0 1 0-.838.726 1.852 1.852 0 0 0 .71.521 2.827 2.827 0 0 0 .577.176l.04.007v.625a.554.554 0 1 0 1.108 0v-.63a2.667 2.667 0 0 0 .9-.36 1.628 1.628 0 0 0 .814-1.397z">
                </path>
              </g>
            </svg>
            Insurance
          </a>
        </li>
        <li class="mobile_item_active">
          <a href="{{route('front.account')}}">
            <svg width="20px" height="20px" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1"
              xmlns="http://www.w3.org/2000/svg" fill="#2ecbe9">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <defs>
                  <style>
                  .cls-1 {
                    fill: none;
                    stroke: #2ecbe9;
                    stroke-miterlimit: 10;
                    stroke-width: 1.91px;
                  }
                  </style>
                </defs>
                <circle class="cls-1" cx="12" cy="7.25" r="5.73"></circle>
                <path class="cls-1" d="M1.5,23.48l.37-2.05A10.3,10.3,0,0,1,12,13h0a10.3,10.3,0,0,1,10.13,8.45l.37,2.05">
                </path>
              </g>
            </svg>
            Accounts
          </a>
        </li>
      </ul>
    </div>
  </div>
</body>
<script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery-3.6.4.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
  integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
  integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
<script>
$(document).ready(function() {
  var msg = "<?= $msg ?>";
  if (msg !== '') toastr.success(msg);

  $("#withraw_ok_btn").click(function() {
    var wallet_balance = "{{$data['wallet_balance']}}";
    var withraw_amount = $("#withraw_amount").val();
    if ($("#bank_card_select").val() == "") {
      toastr.warning("Please select payment method.");
      $("#bank_card_select").focus();
      return;
    }
    if (withraw_amount * 1 < 10) {
      toastr.warning("Minimum withdrawa is 10$");
      $("#withraw_amount").focus();
      return;
    }
    if (withraw_amount * 1 > 10000) {
      toastr.warning("many balance");
      $("#withraw_amount").focus();
      return;
    }
    if (withraw_amount * 1 > wallet_balance * 1) {
      toastr.warning("insufficient balance");
      $("#withraw_amount").focus();
      return;
    }
    $.ajax({
      url: "{{ route('withraw_insert') }}",
      data: {
        bank_card_select: $("#bank_card_select").val(),
        withraw_amount: $("#withraw_amount").val(),
        _token: '{{ csrf_token() }}',
        is_flag: 1
      },
      type: "POST",
      success: function(response) {
        if (response.status == 'error') {
          $("#email_error").text(response.message);
        } else {
          $("#email_error").text("");
          location.href = "{{route('withraw_record')}}";
        }
      }
    });
  });
});
</script>

</html>