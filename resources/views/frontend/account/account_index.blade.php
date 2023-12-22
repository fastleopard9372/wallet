<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/mobile_navbar.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/account/account.css') }}" />

  <title>Account</title>
</head>

<body>
  <!-- Top block -->
  <section class="account_top_block">
    <!-- Header -->
    <div class="account_header">
      <div class="align_item_center">
        <span id="openNav" style="color: #ffffff"> </span>
        <span class="ft12" style="margin-left: 5px"></span>
      </div>
      <div>Account</div>
      <a href="{{route('service')}}" class="align_item_center">
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
      </a>
    </div>

    <!-- Account info -->
    <div class="account_info">
      <div class="account_info_left">
        <div class="account_avatar align_item_center">
          <span>
            <img src="{{ URL::asset('frontend/images/account/icon/user_avatar.svg') }}" alt="user_avatar"
              style="width: 30px; margin-right: 5px" />
          </span>
          <span>{{Auth::guard('web')->user()->user_name}}</span>
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
        <div class="ft12">COIN. <span class="ft24">{{Auth::guard('web')->user()->total_coins+$totalEarningCoins}}</span>
        </div>
      </div>
    </div>

    <!-- Level -->
    <div class="level current">
      <div class="currnet_level">
        <div class="level_icon">
          <img src="{{ URL::asset('frontend/images/wallet/level/bronze.svg') }}" alt="bronze" style="width: 30px" />
        </div>
        <div class="level_name">Bronze</div>
        {{--route('incentive')--}}
        <a href="javascript:;" class="align_item_center" id="question_btn" aria-label="0" style="margin-left: auto">
          <div>>>Next Level &nbsp;&nbsp;</div>
          <svg version="1.1" id="question_mark" aria-label="0" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" width="25px"
            height="25px" fill="#ffffff">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <style type="text/css">
              .st0 {
                fill: #ffffff;
              }
              </style>
              <g>
                <path class="st0"
                  d="M306.068,156.129c-6.566-5.771-14.205-10.186-22.912-13.244c-8.715-3.051-17.82-4.58-27.326-4.58 c-9.961,0-19.236,1.59-27.834,4.752c-8.605,3.171-16.127,7.638-22.576,13.41c-6.449,5.772-11.539,12.9-15.272,21.384 c-3.736,8.486-5.604,17.937-5.604,28.34h44.131c0-7.915,2.258-14.593,6.785-20.028c4.524-5.426,11.314-8.138,20.369-8.138 c8.598,0,15.328,2.661,20.197,7.974c4.864,5.322,7.297,11.942,7.297,19.856c0,3.854-0.965,7.698-2.887,11.543 c-1.922,3.854-4.242,7.586-6.959,11.197l-21.26,27.232c-4.527,5.884-16.758,22.908-16.758,40.316v10.187h44.129v-7.128 c0-2.938,0.562-5.996,1.699-9.168c1.127-3.162,6.453-10.904,8.268-13.168l21.264-28.243c4.752-6.333,8.705-12.839,11.881-19.518 c3.166-6.67,4.752-14.308,4.752-22.913c0-10.86-1.926-20.478-5.772-28.85C317.832,168.969,312.627,161.892,306.068,156.129z">
                </path>
                <rect x="234.106" y="328.551" class="st0" width="46.842" height="45.144"></rect>
                <path class="st0"
                  d="M256,0C114.613,0,0,114.615,0,256s114.613,256,256,256c141.383,0,256-114.615,256-256S397.383,0,256,0z M256,448c-105.871,0-192-86.131-192-192S150.129,64,256,64c105.867,0,192,86.131,192,192S361.867,448,256,448z">
                </path>
              </g>
            </g>
          </svg>
        </a>
      </div>

      <div class="progress_bar">
        <div class="progress">
          <div class="progress-bar progress-bar-stripe progress-bar-animated" role="progressbar" aria-valuenow="100"
            aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
        </div>
        <div>Total team reacharge $0</div>

        <div class="progress">
          <div class="progress-bar progress-bar-stripe progress-bar-animated" role="progressbar" aria-valuenow="100"
            aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
        </div>
        <div>Total Team Member(0/0)</div>
      </div>
    </div>

    <!-- Wallet info -->
    <div class="wallet_info">
      <div class="total_point">
        <div class="total_left">
          <div class="wallet_icon">
            <img src="{{ URL::asset('frontend/images/account/icon/wallet.svg') }}" alt="wallet"
              style="width: 40px; margin-right: 10px" />
          </div>
          <div class="wallet_content">
            <div>X-Wallet Total Coin</div>
            <div>Daily reward upto 2.3%</div>
          </div>
        </div>
        <div class="total_right">
          <div>COIN. <span id="x_wallet">${{$data['wallet_balance']}}</span></div>
          <div class="btn_group">
            <a href="{{route('in')}}" class="account_btn point_btn">IN</a>
            <a href="{{route('out')}}" class="account_btn point_btn">OUT</a>
          </div>
        </div>
      </div>
      <div class="transfer">
        <div>Minimum X-wallet transfer 20 coins</div>
        <a href="{{route('front.wallet_index')}}" class="account_btn transfer_btn">X-Wallet</a>
      </div>
    </div>

    <!-- Options -->
    <div class="options">
      <a href="{{route('front.recharge')}}" class="option option_border">
        <svg fill="#fff" width="12px" height="12px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"
          stroke="#fff">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <title>in</title>
            <path
              d="M0 26.016q0 2.496 1.76 4.224t4.256 1.76h20q2.464 0 4.224-1.76t1.76-4.224v-20q0-2.496-1.76-4.256t-4.224-1.76h-20q-2.496 0-4.256 1.76t-1.76 4.256v4h4v-4q0-0.832 0.576-1.408t1.44-0.608h20q0.8 0 1.408 0.608t0.576 1.408v20q0 0.832-0.576 1.408t-1.408 0.576h-20q-0.832 0-1.44-0.576t-0.576-1.408v-4h-4v4zM0 18.016h8v4l8-6.016-8-5.984v4h-8v4z">
            </path>
          </g>
        </svg>
        Recharge
      </a>
      <a href="{{ route('withraw') }}" class="option option_border">
        <svg width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
          stroke="#ffffff">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <path
              d="M18 20.75H6C5.27065 20.75 4.57118 20.4603 4.05546 19.9445C3.53973 19.4288 3.25 18.7293 3.25 18V6C3.25 5.27065 3.53973 4.57118 4.05546 4.05546C4.57118 3.53973 5.27065 3.25 6 3.25H14.86C15.0589 3.25 15.2497 3.32902 15.3903 3.46967C15.531 3.61032 15.61 3.80109 15.61 4C15.61 4.19891 15.531 4.38968 15.3903 4.53033C15.2497 4.67098 15.0589 4.75 14.86 4.75H6C5.66848 4.75 5.35054 4.8817 5.11612 5.11612C4.8817 5.35054 4.75 5.66848 4.75 6V18C4.75 18.3315 4.8817 18.6495 5.11612 18.8839C5.35054 19.1183 5.66848 19.25 6 19.25H18C18.3315 19.25 18.6495 19.1183 18.8839 18.8839C19.1183 18.6495 19.25 18.3315 19.25 18V10.29C19.25 10.0911 19.329 9.90032 19.4697 9.75967C19.6103 9.61902 19.8011 9.54 20 9.54C20.1989 9.54 20.3897 9.61902 20.5303 9.75967C20.671 9.90032 20.75 10.0911 20.75 10.29V18C20.75 18.7293 20.4603 19.4288 19.9445 19.9445C19.4288 20.4603 18.7293 20.75 18 20.75Z"
              fill="#ffffff"></path>
            <path
              d="M10.5 15.25C10.3071 15.2352 10.1276 15.1455 10 15L7.00001 12C6.93317 11.86 6.91136 11.7028 6.93759 11.5499C6.96382 11.3971 7.03679 11.2561 7.14646 11.1464C7.25613 11.0368 7.3971 10.9638 7.54996 10.9376C7.70282 10.9113 7.86006 10.9331 8.00001 11L10.47 13.47L19 4.99998C19.14 4.93314 19.2972 4.91133 19.4501 4.93756C19.6029 4.96379 19.7439 5.03676 19.8536 5.14643C19.9632 5.2561 20.0362 5.39707 20.0624 5.54993C20.0887 5.70279 20.0669 5.86003 20 5.99998L11 15C10.8724 15.1455 10.693 15.2352 10.5 15.25Z"
              fill="#ffffff"></path>
          </g>
        </svg>
        Withdraw
      </a>
      {{--route('bankcard')--}}
      <a href="javascript:;" class="option">
        <svg width="12px" height="12px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff" stroke="#ffffff">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <title>bank_card_fill</title>
            <g id="页面-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="Business" transform="translate(-48.000000, -48.000000)" fill-rule="nonzero">
                <g id="bank_card_fill" transform="translate(48.000000, 48.000000)">
                  <path
                    d="M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5934901,23.257841 L12.5819402,23.2595131 L12.5108777,23.2950439 L12.4918791,23.2987469 L12.4918791,23.2987469 L12.4767152,23.2950439 L12.4056548,23.2595131 C12.3958229,23.2563662 12.3870493,23.2590235 12.3821421,23.2649074 L12.3780323,23.275831 L12.360941,23.7031097 L12.3658947,23.7234994 L12.3769048,23.7357139 L12.4804777,23.8096931 L12.4953491,23.8136134 L12.4953491,23.8136134 L12.5071152,23.8096931 L12.6106902,23.7357139 L12.6232938,23.7196733 L12.6232938,23.7196733 L12.6266527,23.7031097 L12.609561,23.275831 C12.6075724,23.2657013 12.6010112,23.2592993 12.5934901,23.257841 L12.5934901,23.257841 Z M12.8583906,23.1452862 L12.8445485,23.1473072 L12.6598443,23.2396597 L12.6498822,23.2499052 L12.6498822,23.2499052 L12.6471943,23.2611114 L12.6650943,23.6906389 L12.6699349,23.7034178 L12.6699349,23.7034178 L12.678386,23.7104931 L12.8793402,23.8032389 C12.8914285,23.8068999 12.9022333,23.8029875 12.9078286,23.7952264 L12.9118235,23.7811639 L12.8776777,23.1665331 C12.8752882,23.1545897 12.8674102,23.1470016 12.8583906,23.1452862 L12.8583906,23.1452862 Z M12.1430473,23.1473072 C12.1332178,23.1423925 12.1221763,23.1452606 12.1156365,23.1525954 L12.1099173,23.1665331 L12.0757714,23.7811639 C12.0751323,23.7926639 12.0828099,23.8018602 12.0926481,23.8045676 L12.108256,23.8032389 L12.3092106,23.7104931 L12.3186497,23.7024347 L12.3186497,23.7024347 L12.3225043,23.6906389 L12.340401,23.2611114 L12.337245,23.2485176 L12.337245,23.2485176 L12.3277531,23.2396597 L12.1430473,23.1473072 Z"
                    id="MingCute" fill-rule="nonzero"></path>
                  <path
                    d="M22,10 L22,17 C22,18.6569 20.6569,20 19,20 L5,20 C3.34315,20 2,18.6569 2,17 L2,10 L22,10 Z M18,14 L15,14 C14.4477,14 14,14.4477 14,15 C14,15.5523 14.4477,16 15,16 L18,16 C18.5523,16 19,15.5523 19,15 C19,14.4477 18.5523,14 18,14 Z M19,4 C20.6569,4 22,5.34315 22,7 L22,8 L2,8 L2,7 C2,5.34315 3.34315,4 5,4 L19,4 Z"
                    id="形状" fill="#ffffff"></path>
                </g>
              </g>
            </g>
          </g>
        </svg>
        Bank Card
      </a>
    </div>
  </section>

  <!-- Bottom block -->
  <section class="bottom_block">
    <a href="javascript:;" class="bottom_content">
      <div>
        <img src="{{ URL::asset('frontend/images/account/icon/message.svg') }}" alt="message" />
      </div>
      <div>Message</div>
    </a>
    <div id="invite_btn" class="bottom_content">
      <div>
        <img src="{{ URL::asset('frontend/images/account/icon/invite_friend.svg') }}" alt="invite_friend" />
      </div>
      <div>Invite Friends</div>
    </div>
    <div class="bottom_content">
      <div>
        <img src="{{ URL::asset('frontend/images/account/icon/invite_info.svg') }}" alt="invite_info" />
      </div>
      <div>Invite Info</div>
    </div>
    <div class="bottom_content">
      <div>
        <img src="{{ URL::asset('frontend/images/account/icon/rebate_record.svg') }}" alt="rebate_record" />
      </div>
      <div>Rebate Record</div>
    </div>
    <a href="javascript:;" class="bottom_content">
      <div>
        <img src="{{ URL::asset('frontend/images/account/icon/promotion.svg') }}" alt="promotion" />
      </div>
      <div>Promotion</div>
    </a>
    <div class="bottom_content">
      <div>
        <img src="{{ URL::asset('frontend/images/account/icon/entertainment.svg') }}" alt="entertainment" />
      </div>
      <div>Entertainment Record</div>
    </div>
    <div class="bottom_content">
      <img src="{{ URL::asset('frontend/images/account/icon/finance.svg') }}" alt="finance" />
      <div>Finance</div>
    </div>
    <a href="{{route('finance_record')}}" class="bottom_content">
      <div>
        <img src="{{ URL::asset('frontend/images/account/icon/finance_record.svg') }}" alt="finance_record" />
      </div>
      <div>Finance Record</div>
    </a>
    <a href="{{ route('recharge_record') }}" class="bottom_content">
      <div>
        <img src="{{ URL::asset('frontend/images/account/icon/recharge_record.svg') }}" alt="recharge_record" />
      </div>
      <div>Recharge Record</div>
    </a>
    <a href="{{ route('withraw_record') }}" class="bottom_content">
      <div>
        <img src="{{ URL::asset('frontend/images/account/icon/withraw_record.svg') }}" alt="withraw_record" />
      </div>
      <div>Withdraw Record</div>
    </a>
    <div class="bottom_content">
      <div>
        <img src="{{ URL::asset('frontend/images/account/icon/lottery_record.svg') }}" alt="lottery_record" />
      </div>
      <div>Lottery Record</div>
    </div>
    <div class="bottom_content">
      <div>
        <img src="{{ URL::asset('frontend/images/account/icon/egame_record.svg') }}" alt="egame_record" />
      </div>
      <div>Egame Record</div>
    </div>
    <a href="javascript:;" class="bottom_content">
      <div>
        <img src="{{ URL::asset('frontend/images/account/icon/profit_record.svg') }}" alt="profit_record" />
      </div>
      <div>Profit Record</div>
    </a>
    {{--route('lucky_draw')--}}
    <a href="javascript:;" class="bottom_content">
      <div>
        <img src="{{ URL::asset('frontend/images/account/icon/lucky_draw.svg') }}" alt="lucky_draw" />
      </div>
      <div>Lucky draw</div>
    </a>
    <div class="bottom_content"></div>
  </section>

  <div class="hline"></div>

  <section class="user_info">
    {{--route('myinfo')--}}
    <a href="javascript:;" class="user_info_item">
      <div>
        <img src="{{ URL::asset('frontend/images/account/icon/my_info.svg') }}" alt="my_info" />
      </div>
      <div>My Infomation</div>
    </a>
    <div class="user_info_item">
      <div>
        <img src="{{ URL::asset('frontend/images/account/icon/setting.svg') }}" alt="setting" />
      </div>
      <div>Setting</div>
    </div>
    {{--route('change_login_password')--}}
    <a href="javascript:;" class="user_info_item">
      <div>
        <img src="{{ URL::asset('frontend/images/account/icon/login_password.svg') }}" alt="login_password" />
      </div>
      <div>Password</div>
    </a>
    {{--route('change_pay_password')--}}
    <a href="javascript:;" class="user_info_item">
      <div>
        <img src="{{ URL::asset('frontend/images/account/icon/fund_password.svg') }}" alt="fund_password" />
      </div>
      <div>Pay Password</div>
    </a>
    <!-- /investment/account/notice.html -->
    <a href="javascript:;" class="user_info_item">
      <div>
        <img src="{{ URL::asset('frontend/images/account/icon/announcement.svg') }}" alt="announcement" />
      </div>
      <div>Announcement</div>
    </a>
    <a href="{{route('service')}}" class="user_info_item">
      <div>
        <img src="{{ URL::asset('frontend/images/account/icon/service.svg') }}" alt="service" />
      </div>
      <div>Service</div>
    </a>
    <a href="{{route('home')}}" class="user_info_item">
      <div>
        <img src="{{ URL::asset('frontend/images/account/icon/about_us.svg') }}" alt="about_us" />
      </div>
      <div>About US</div>
    </a>
  </section>

  <!-- Invite Friend Modal -->
  <div id="invite_modal" class="invite_modal">
    <div class="invite_content">
      <div class="invite_modal_content">Cotent</div>
      <p>Referral Code: <span id="referral_code">{{Auth::guard('web')->user()->my_referral_code}}</span> <img
          id="copy_icon" style="width: 12px" class="copy-icon" src="{{ URL::asset('frontend/images/copy.png') }}" alt=""
          srcset=""></p>
      <p>Referral Link: <a href="#" id="referral_link">Generate Link</a></p>
      <div class="invite_modal_footer">
        <button id="invite_close">close</button>
      </div>
    </div>
  </div>

  <!-- Hover SideNavbar -->
  <section>
    <div class="sidenavbar" id="sidenavbar">
      <div class="sidenavbar_header">
        <div class="logo">
          <div><img src="{{ URL::asset('frontend/images/logo.svg') }}" alt="logo" style="width: 60px" /></div>
          <div style="text-align: end">
            <div>Jaila</div>
            <div class="align_item_center">
              <img src="{{ URL::asset('frontend/images/wallet/level/Platinum.svg') }}" alt="level_icon"
                style="width: 20px" />
              Platinum
            </div>
          </div>
        </div>
        <div class="ft12" style="padding-top: 10px">Total COIN</div>
        <div class="ft14">COIN. <i class="ft16" style="font-weight: 900">2.09</i></div>
        <div class="language align_item_center">
          <svg fill="#ffffff" height="24px" width="24px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" enable-background="new 0 0 512 512"
            xml:space="preserve" style="margin-right: 10px">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <path
                d="M93.8,114.6c-4.7,1.1-1.7,0.9-5.6,1.4C71.5,119.6,83.9,122.8,93.8,114.6z M387.5,121.3c1.2-0.8,5.4-4.9-7.7-8.9 c0.8,4.1-2.7,3.7-2.7,6c9.7,8.8,13.7,24.1,26.1,27.3C405.6,134.7,392.2,129.3,387.5,121.3z M84.9,111.4c1.5,8.9,8.2-9.4,8.3-15.9 c-2.6,1.5-5.2,3-7.9,4.2c6.3,3.2,0.8,6.6-6,11.7C65.5,128.6,92.2,98,84.9,111.4z M256,0C114.6,0,0,114.6,0,256 c0,141.3,114.6,256,256,256c141.4,0,256-114.7,256-256C512,114.6,397.4,0,256,0z M262.8,85.8l1.2,0.4c-4.8,6.2,25,24.3,3.6,25.8 c-20,5.7,8.4-5.2-7.1-3.3C268.7,97.3,254,97.1,262.8,85.8z M141.4,102.2c-7.2-6-29.8,8.2-21.9,4.8c19.6-7.7,1.3,0.8,5.9,10 c-4.2,8.7-1.4-8.6-11.8,1.7c-7.5,1.7-25.9,18.7-23.6,13.5c-0.6,8.1-21.9,17.7-24.8,31.2c-7,18.7-1.7-0.7-3-8 c-10-12.7-28.2,21.5-22.8,35c9.1-16,8.4-1.7,1.8,5.4c6.7,12.3-6.1,28.3,6.6,37.4c5.6,1.3,16.8-18.8,11.9,2.1 c3.4-18.1,9.4,4.3,19.1-0.7c0.6,9.5,6.5,5.1,7.8,16.6c16.2-1.2,31,26.2,11.7,31.4c2.9-0.8,8.6,4.3,15.2,0.4 c11.2,8.9,40.7,10,41.5,32c-20.3,9.7-5,36.3-22.6,45.8c-20.2-3-6.9,24.9-15.4,21.7c3.4,20.1-20.4-2.6-11.2,8.5 c16.9,10.4-7.4,8.3,0.2,15.9c-8.5-1.8,5.3,15.8,7.6,22.3c12.2,19.8-10.5-4.4-17.2-11c-6.4-12.8-21.5-37.3-25.7-57.4 c-2.4-29.2-25-48.8-30.2-77.3c-5.2-15.9,14.3-41.4,3.8-50.3c-9.1-7.1-5.4-31.4-10.8-44.2c13.5-58.5,56.4-107.8,107.9-137 c-5.3,3.9,30.3-10.1,26.2-6.7c-1.1,2.5,20.8-9.5,34-11.3c-1.4,0.2-34.3,12-25.2,10.4c-14.1,6.9-1.4,3,5.6-0.5 c-14,10.3-24.8,7.4-40.7,16.5c-16,4.2-12.7,20.8-24.1,29.1c6.7,1.2,23.5-17.3,33.3-23.8c22.5-10.9-11.4,19.8,10,6.6 c-7.2,6.7-5.7,17.4-10.1,20.4C148.2,92.1,159.1,97.9,141.4,102.2z M176.4,56.2c-2.3,3.1-5.5,9.8-7.4,5.7c-2.6,1.3-3.6,6.9-8.5,2.4 c2.9-2.1,5.9-7.1,0.2-4c2.6-2.8,25.8-10.7,24.5-13.7c4.1-2.6,3.7-3.9-1-2.3c-2.4-0.8,5.7-7.6,16.5-8.5c1.5,0,2.1,1-0.6,0.7 c-16.3,5-9.3,3.6,1.7,0c-4.2,2.4-7.1,3.1-7.8,4.2c11-4-0.6,2.9,1.9,2.4c-3.1,1.6,0.5,2.1-5.5,4.4c1.1-0.9-9.8,6.5-3.3,4.3 C180.8,57.8,178,57.9,176.4,56.2z M186,70.5c0.2-9.6,14-15.7,12.3-16.2c17-8-5.9,0.3,7.5-6.9c5-0.5,15.6-16.5,30.3-17.5 c16.2-4.9,8.7,0.3,20.7-4.3l-2.4,2c-2.1,0.3,0.5,4-7.1,9.6c-0.8,8.7-14.5,4.7-7.7,14c-4.4-6.3-11-0.2-2.7,0.4 c-8.9,6.8-29.6,8-39.5,19.3C191,80.1,185.1,77.2,186,70.5z M257.1,102.5c-6.8,16.4-13.4-2.4-1.4-5.4 C258.7,98.7,259.9,99.2,257.1,102.5z M231.5,69.7c-2-7.4-0.4-3.5,11.5-7C251.2,68.6,235.7,72.5,231.5,69.7z M417.7,363.2 c-9.4-16.2,11.4-31.2,18.4-44.8C435.2,334.3,433.2,350,417.7,363.2z M453.1,178.1c-10.2,0.8-19.4,3.2-28.6-2.6 c-21.2-23.2,3.9,26.2,10.9,6c25.2,9.6-0.4,51-16.3,46.7c-8.9-19.2-19.9-40.3-39.3-49.7c14.9,16.5,22.3,36.8,38.3,51.7 c1.1,20.8,22.2-7.6,20.9,8.5c2,27.7-31.3,44.3-25.5,72.1c12.4,25.3-23.9,29.9-19.8,52.6c-14.6,16.3-30.2,38.3-56.4,34.8 c0-13.8-7-25.5-8.6-39.7c-14.2-18,15-37.3-3.1-56.1c-20.9-4.7,4.3-33.5-17.2-30.8c-12.9-12.9-31.8-0.4-50.3-0.3 c-23.2,2.2-47.1-28.5-36.8-50.2c-8.2-22.6,26-29.2,26.9-49.1c16.4-13.7,39.7-12,61.9-15.2c-1.6,15.9,15.2,16,27.9,21.3 c7.1-17.2,29.2,2.8,44.3-8.1c5.2-25.4-14.7-10.1-26.1-18.2c-13.8-20.2,29.5-10.4,25-21c-16.8-0.1-7.3-20.7-19.2-9.2 c10.7,1.9-1.9,10.3-1.6,0.7c-16.2-4.7-0.6,18.4-8.8,20.6c-12.5-5.2-6.6,5.9-5.3,7.6c-5.4,11.7-12-17.2-27.3-16.4 c-15.2-13.9-6,6.3,7.2,9.6c-2.8,0.8,1.6,12.3-1.9,7.4c-10.9-15-31.6-25-43.9-6.6c-1.3,17.2-36.3,22.1-30.7,2 c-8.2-20.8,25.4-0.6,22.3-17.2c-21.6-14.3,5.9-9.7,13.2-23.1c16.6,0.5,0.7-13.6,8.5-17.7c-0.8,15.3,12.7,12.4,23.4,9.5 c-2.6-8.8,6.4-8.5,0.9-15.8c24.8-9.9-18.9,4.6-10.1-17.1c-10.7-7.4-4.5,16.3,0,18.8c0.3,7.3-5.9,16.3-14.4,1 c-12.4,8.1-11.1-8.2-11.9-6.5c-1.4-6.3,9.4-6.6,9.5-17.6c-0.9-7-0.7-10.7,4.3-11.1c0.4,1,20.5,1.3,27.6,9.6 c-19.4-3.9-2.9,3.2,5.8,7.2c-9.3-7.3,3.7,0-3.9-8.3c3,0.6-8.3-11.4,3.3-0.9c-6.3-7.5,12.3-5.3,1.3-10.9c16.1,4.5,6.6,0.4-2.9-3.7 c-26.2-15.6,46.3,21.1,16.7,4.8c18.9,4.1-40.4-14.6-13.4-6.4c-10.3-4.5-0.3-2,9,0.9c-16.7-5.2-41.7-14.9-40.7-15.3 c5.8,0.4,11.5,1.7,17,3.3c17.1,5.1-4.9-1.2-0.2-1.1C373.8,44,425.3,83.4,456.6,134.9c7.3,7.7,27.2,58.6,16.8,36 c4.7,18,5.4,37.4,7.9,55.8c-5.2-5.8-11-27.2-16-39.1C463.2,192.2,460.8,181.1,453.1,178.1z">
              </path>
            </g>
          </svg>
          Language
        </div>
      </div>
      <a href="/investment/account/">
        <div class="icon">
          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" stroke="#000000">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <title>bank_card_fill</title>
              <g id="页面-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Business" transform="translate(-48.000000, -48.000000)" fill-rule="nonzero">
                  <g id="bank_card_fill" transform="translate(48.000000, 48.000000)">
                    <path
                      d="M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5934901,23.257841 L12.5819402,23.2595131 L12.5108777,23.2950439 L12.4918791,23.2987469 L12.4918791,23.2987469 L12.4767152,23.2950439 L12.4056548,23.2595131 C12.3958229,23.2563662 12.3870493,23.2590235 12.3821421,23.2649074 L12.3780323,23.275831 L12.360941,23.7031097 L12.3658947,23.7234994 L12.3769048,23.7357139 L12.4804777,23.8096931 L12.4953491,23.8136134 L12.4953491,23.8136134 L12.5071152,23.8096931 L12.6106902,23.7357139 L12.6232938,23.7196733 L12.6232938,23.7196733 L12.6266527,23.7031097 L12.609561,23.275831 C12.6075724,23.2657013 12.6010112,23.2592993 12.5934901,23.257841 L12.5934901,23.257841 Z M12.8583906,23.1452862 L12.8445485,23.1473072 L12.6598443,23.2396597 L12.6498822,23.2499052 L12.6498822,23.2499052 L12.6471943,23.2611114 L12.6650943,23.6906389 L12.6699349,23.7034178 L12.6699349,23.7034178 L12.678386,23.7104931 L12.8793402,23.8032389 C12.8914285,23.8068999 12.9022333,23.8029875 12.9078286,23.7952264 L12.9118235,23.7811639 L12.8776777,23.1665331 C12.8752882,23.1545897 12.8674102,23.1470016 12.8583906,23.1452862 L12.8583906,23.1452862 Z M12.1430473,23.1473072 C12.1332178,23.1423925 12.1221763,23.1452606 12.1156365,23.1525954 L12.1099173,23.1665331 L12.0757714,23.7811639 C12.0751323,23.7926639 12.0828099,23.8018602 12.0926481,23.8045676 L12.108256,23.8032389 L12.3092106,23.7104931 L12.3186497,23.7024347 L12.3186497,23.7024347 L12.3225043,23.6906389 L12.340401,23.2611114 L12.337245,23.2485176 L12.337245,23.2485176 L12.3277531,23.2396597 L12.1430473,23.1473072 Z"
                      id="MingCute" fill-rule="nonzero"></path>
                    <path
                      d="M22,10 L22,17 C22,18.6569 20.6569,20 19,20 L5,20 C3.34315,20 2,18.6569 2,17 L2,10 L22,10 Z M18,14 L15,14 C14.4477,14 14,14.4477 14,15 C14,15.5523 14.4477,16 15,16 L18,16 C18.5523,16 19,15.5523 19,15 C19,14.4477 18.5523,14 18,14 Z M19,4 C20.6569,4 22,5.34315 22,7 L22,8 L2,8 L2,7 C2,5.34315 3.34315,4 5,4 L19,4 Z"
                      id="形状" fill="#000"></path>
                  </g>
                </g>
              </g>
            </g>
          </svg>
        </div>
        <div class="title">Bank Card</div>
      </a>
      <a href="/investment/account/recharge.html">
        <div class="icon">
          <svg fill="#000" width="20px" height="20px" viewBox="0 0 32 32" version="1.1"
            xmlns="http://www.w3.org/2000/svg" stroke="#fff">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <title>in</title>
              <path
                d="M0 26.016q0 2.496 1.76 4.224t4.256 1.76h20q2.464 0 4.224-1.76t1.76-4.224v-20q0-2.496-1.76-4.256t-4.224-1.76h-20q-2.496 0-4.256 1.76t-1.76 4.256v4h4v-4q0-0.832 0.576-1.408t1.44-0.608h20q0.8 0 1.408 0.608t0.576 1.408v20q0 0.832-0.576 1.408t-1.408 0.576h-20q-0.832 0-1.44-0.576t-0.576-1.408v-4h-4v4zM0 18.016h8v4l8-6.016-8-5.984v4h-8v4z">
              </path>
            </g>
          </svg>
        </div>
        <div class="title">Recharge</div>
      </a>
      <a href="/investment/account/withraw.html">
        <div class="icon">
          <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
            stroke="#000">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <path
                d="M18 20.75H6C5.27065 20.75 4.57118 20.4603 4.05546 19.9445C3.53973 19.4288 3.25 18.7293 3.25 18V6C3.25 5.27065 3.53973 4.57118 4.05546 4.05546C4.57118 3.53973 5.27065 3.25 6 3.25H14.86C15.0589 3.25 15.2497 3.32902 15.3903 3.46967C15.531 3.61032 15.61 3.80109 15.61 4C15.61 4.19891 15.531 4.38968 15.3903 4.53033C15.2497 4.67098 15.0589 4.75 14.86 4.75H6C5.66848 4.75 5.35054 4.8817 5.11612 5.11612C4.8817 5.35054 4.75 5.66848 4.75 6V18C4.75 18.3315 4.8817 18.6495 5.11612 18.8839C5.35054 19.1183 5.66848 19.25 6 19.25H18C18.3315 19.25 18.6495 19.1183 18.8839 18.8839C19.1183 18.6495 19.25 18.3315 19.25 18V10.29C19.25 10.0911 19.329 9.90032 19.4697 9.75967C19.6103 9.61902 19.8011 9.54 20 9.54C20.1989 9.54 20.3897 9.61902 20.5303 9.75967C20.671 9.90032 20.75 10.0911 20.75 10.29V18C20.75 18.7293 20.4603 19.4288 19.9445 19.9445C19.4288 20.4603 18.7293 20.75 18 20.75Z"
                fill="#000"></path>
              <path
                d="M10.5 15.25C10.3071 15.2352 10.1276 15.1455 10 15L7.00001 12C6.93317 11.86 6.91136 11.7028 6.93759 11.5499C6.96382 11.3971 7.03679 11.2561 7.14646 11.1464C7.25613 11.0368 7.3971 10.9638 7.54996 10.9376C7.70282 10.9113 7.86006 10.9331 8.00001 11L10.47 13.47L19 4.99998C19.14 4.93314 19.2972 4.91133 19.4501 4.93756C19.6029 4.96379 19.7439 5.03676 19.8536 5.14643C19.9632 5.2561 20.0362 5.39707 20.0624 5.54993C20.0887 5.70279 20.0669 5.86003 20 5.99998L11 15C10.8724 15.1455 10.693 15.2352 10.5 15.25Z"
                fill="#000"></path>
            </g>
          </svg>
        </div>
        <div class="title">Withraw</div>
      </a>
      <a href="/investment/account/service.html">
        <div class="icon">
          <svg fill="#000" width="20px" height="20px" viewBox="-2.3 0 122.88 122.88" version="1.1" id="Layer_1"
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
        <div class="title">Support</div>
      </a>
      <a href="">
        <div class="icon">icon</div>
        <div class="title">Message</div>
      </a>
      <a href="#">
        <div class="icon">icon</div>
        <div class="title">Lucky draw</div>
      </a>
      <a href="#">
        <div class="icon">icon</div>
        <div class="title">Favourite</div>
      </a>
      <a href="#">
        <div class="icon">icon</div>
        <div class="title">Agent program</div>
      </a>
      <a href="#">
        <div class="icon">icon</div>
        <div class="title">Agent agreement</div>
      </a>
      <a href="#">
        <div class="icon">icon</div>
        <div class="title">Agent Login</div>
      </a>
      <a href="#">
        <div class="icon">icon</div>
        <div class="title">Agent Register</div>
      </a>
      <a href="#">
        <div class="icon">icon</div>
        <div class="title">Complain</div>
      </a>
      <a href="#">
        <div class="icon">icon</div>
        <div class="title">Help Center</div>
      </a>
      <a href="#">
        <div class="icon">icon</div>
        <div class="title">Promotion rule</div>
      </a>
      <a href="#">
        <div class="icon">icon</div>
        <div class="title">terms and conditions</div>
      </a>
    </div>
  </section>

  <!-- Mobile Navbar -->
  @include('frontend.layouts.mobile-navbar')


  <script src="{{ URL::asset('frontend/js/invite_modal.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery-3.6.4.min.js')}}"></script>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    // Get the referral code element
    var referralCodeElement = document.getElementById('referral_code');

    // Get the referral link element
    var referralLinkElement = document.getElementById('referral_link');

    // Get the copy icon element
    var copyIconElement = document.getElementById('copy_icon');

    // Get the referral code value
    var referralCode = referralCodeElement.innerText;

    // Set the href attribute of the referral link
    referralLinkElement.href = generateReferralLink(referralCode);

    // Add click event listener to the copy icon element
    copyIconElement.addEventListener('click', function() {
      copyToClipboard(referralLinkElement.href);
    });

    // Add click event listener to the referral code element
    referralCodeElement.addEventListener('click', function() {
      copyToClipboard(referralCode);
    });

    // Function to generate referral link
    function generateReferralLink(referralCode) {
      // Replace 'YOUR_SIGNUP_PAGE_URL' with the actual URL of your signup page
      return 'signup?ref=' + referralCode;
    }

    // Function to copy text to clipboard
    function copyToClipboard(text) {
      var dummy = document.createElement('textarea');
      document.body.appendChild(dummy);
      dummy.value = text;
      dummy.select();
      document.execCommand('copy');
      document.body.removeChild(dummy);
      alert('Referral link copied to clipboard: ' + text);
    }
  });
  </script>
</body>

</html>