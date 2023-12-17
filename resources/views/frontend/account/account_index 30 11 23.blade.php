<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
        <span id="openNav" style="color: #ffffff"> &#9776; </span>
        <span class="ft12" style="margin-left: 5px">English</span>
      </div>
      <div>Account</div>
      <a href="/investment/account/service.html" class="align_item_center">
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
          <span>HARIKRISHNAN J</span>
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
        <div class="ft12">COIN. <span class="ft24">0</span></div>
      </div>
    </div>

    <!-- Level -->
    <div class="level current">
      <div class="currnet_level">
        <div class="level_icon">
          <img src="{{ URL::asset('frontend/images/wallet/level/bronze.svg') }}" alt="bronze" style="width: 30px" />
        </div>
        <div class="level_name">Bronze</div>
        <a href="{{route('incentive')}}" class="align_item_center" id="question_btn" aria-label="0"
          style="margin-left: auto">
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
          <div>COIN. <span>0</span></div>
          <div class="btn_group">
            <a href="{{route('in')}}" class="account_btn point_btn">IN</a>
            <a href="{{route('out')}}" class="account_btn point_btn">OUT</a>
          </div>
        </div>
      </div>
      <div class="transfer">
        <div>Minimum X-wallet transfer 20 coins</div>
        <a href="/investment#" class="account_btn transfer_btn">Download</a>
      </div>
    </div>

    <!-- Options -->
    <div class="options">
      <a href="" class="option option_border">
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
      <a href="{{ route('bankcard') }}" class="option">
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
    <a href="{{ route('message') }}" class="bottom_content">
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
    <a href="" class="bottom_content">
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
    <a href="" class="bottom_content">
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
    <a href="" class="bottom_content">
      <div>
        <img src="{{ URL::asset('frontend/images/account/icon/profit_record.svg') }}" alt="profit_record" />
      </div>
      <div>Profit Record</div>
    </a>
    <a href="{{ route('lucky_draw') }}" class="bottom_content">
      <div>
        <img src="{{ URL::asset('frontend/images/account/icon/lucky_draw.svg') }}" alt="lucky_draw" />
      </div>
      <div>Lucky draw</div>
    </a>
    <div class="bottom_content"></div>
  </section>

  <div class="hline"></div>

  <section class="user_info">
    <a href="{{ route('myinfo') }}" class="user_info_item">
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
    <a href="{{ route('change_login_password') }}" class="user_info_item">
      <div>
        <img src="{{ URL::asset('frontend/images/account/icon/login_password.svg') }}" alt="login_password" />
      </div>
      <div>Password</div>
    </a>
    <a href="{{route('change_pay_password')}}" class="user_info_item">
      <div>
        <img src="{{ URL::asset('frontend/images/account/icon/fund_password.svg') }}" alt="fund_password" />
      </div>
      <div>Pay Password</div>
    </a>
    <a href="/investment/account/notice.html" class="user_info_item">
      <div>
        <img src="{{ URL::asset('frontend/images/account/icon/announcement.svg') }}" alt="announcement" />
      </div>
      <div>Announcement</div>
    </a>
    <a href="/investment/account/service.html" class="user_info_item">
      <div>
        <img src="{{ URL::asset('frontend/images/account/icon/service.svg') }}" alt="service" />
      </div>
      <div>Service</div>
    </a>
    <a href="{{route('about_us')}}" class="user_info_item">
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
          <a href="{{ route('project') }}">
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
          <a href="{{route('wallet_index')}}">
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
          <a href="{{ route('insurance')}}">
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
          <a href="{{route('account')}}">
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

  <script src="{{ URL::asset('frontend/js/invite_modal.js') }}"></script>
</body>

</html>