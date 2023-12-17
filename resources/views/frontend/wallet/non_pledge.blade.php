<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/wallet/wallet.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/mobile_navbar.css') }}" />

  <title>Wallet | non-Pledge</title>
</head>

<body class="pledge">
  <header>
    <a href="{{ route('front.wallet_index') }}" class="back">
      <svg fill="#333333" height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" stroke="#333333">
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
      back
    </a>
    <h3>Non-Pledge</h3>
  </header>

  <main>
    <!-- <div class="notif">
        <div class="noti_icon">
          <svg
            fill="#f3d512"
            width="20px"
            height="20px"
            viewBox="0 0 32 32"
            version="1.1"
            xmlns="http://www.w3.org/2000/svg"
            stroke="#f3d512"
          >
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <title>exclamation-round</title>
              <path
                d="M0 16q0 3.264 1.28 6.208t3.392 5.12 5.12 3.424 6.208 1.248 6.208-1.248 5.12-3.424 3.392-5.12 1.28-6.208-1.28-6.208-3.392-5.12-5.088-3.392-6.24-1.28q-3.264 0-6.208 1.28t-5.12 3.392-3.392 5.12-1.28 6.208zM4 16q0-3.264 1.6-6.016t4.384-4.352 6.016-1.632 6.016 1.632 4.384 4.352 1.6 6.016-1.6 6.048-4.384 4.352-6.016 1.6-6.016-1.6-4.384-4.352-1.6-6.048zM12 10.016q0 0.992 0.512 2.976t0.992 3.52l0.512 1.504q0 0.832 0.576 1.408t1.408 0.576 1.408-0.576 0.608-1.408l1.984-8q0-1.664-1.184-2.848t-2.816-1.152-2.816 1.152-1.184 2.848zM14.016 24q0 0.832 0.576 1.44t1.408 0.576 1.408-0.576 0.608-1.44-0.608-1.408-1.408-0.576-1.408 0.576-0.576 1.408z"
              ></path>
            </g>
          </svg>
        </div>
        <div class="noti_content">
          Data within 24 hours might not be real-time. <br />
          Data Shown under singgapore Time(UTC+8)
        </div>
      </div> -->

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
        <div style="font-size: 24px" id="x_wallet">${{$data['wallet_balance']}}</div>
        <div style="
              font-size: 14px;
              background-color: #f3f3f3;
              width: 50%;
              margin-left: auto;
              margin-right: auto;
              border-radius: 5px;
            ">
          <span>Today income Coin. <span style="color: #00acff">${{$data['today_income']}}</span></span>
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

    <div class="pleday">
      <img src="{{ URL::asset('frontend/images/wallet/nonpleday.jpg')}}" alt="nonpleday" width="100%" />
    </div>

    <div class="income_period_btn">
      <button>INCOME STATICS</button>
    </div>
    <?php
      $date_cnt = 90;
      $is_flag = 0;
    ?>
    @if(!is_null($data['wallet_control']))
    <?php
      $dt = '+' . $data['wallet_control']->date . ' day';
      $date_cnt = $data['wallet_control']->date;
      $is_flag = 1;
    ?>
    {{$data['wallet_control']->created_at.' - '.date('Y-m-d H:i:s',strtotime($dt, strtotime($data['wallet_control']->created_at))); }}
    @else
    {{date("Y-m-d H:i:s").' - '.date("Y-m-d H:i:s", strtotime('+90 day'))}}
    @endif
    <div class="timeline">
      <div>
        <div><u>INVESTMENT</u></div>
        <div>- ${{$data['wallet_balance']}}</div>
      </div>
      <div>
        <div><u>DAILY INCOME</u></div>
        <div>- 0.9 %</div>
      </div>
      <div>
        <div><u>TOTAL INCOME</u></div>
        <div>- 81 %</div>
      </div>
    </div>
    @if(!is_null($data['wallet_control']))
    <?php
      $now = time();
      $your_date = strtotime($dt, strtotime($data['wallet_control']->created_at));
      $date_cnt = $your_date - $now;
    ?>
    @endif
    <div class="timer_box">
      @php
      $length = 0;
      $days = [];
      @endphp
      @foreach($data['non_pledge'] as $item)
      <?php
        $last_date = date('Y-m-d H:i:s', strtotime('+90 day', strtotime($item->created_at)));
        $date1 = strtotime(date('Y-m-d H:i:s'));
        $date2 = strtotime($last_date);
        $days[$length] = $date2 - $date1;
        $length++;
      ?>
      <h4 style="margin: 10px">Trading starts in</h4>
      <div class="timer">
        <div>
          <div id="timer_day_{{$length-1}}">90</div>
          <div>D</div>
        </div>
        <div>
          <div>:</div>
          <div>&nbsp;</div>
        </div>
        <div>
          <div id="timer_hour_{{$length-1}}">00</div>
          <div>H</div>
        </div>
        <div>
          <div>:</div>
          <div>&nbsp;</div>
        </div>
        <div>
          <div id="timer_minute_{{$length-1}}">00</div>
          <div>M</div>
        </div>
        <div>
          <div>:</div>
          <div>&nbsp;</div>
        </div>
        <div>
          <div id="timer_second_{{$length-1}}">00</div>
          <div>S</div>
        </div>
      </div>
      @endforeach
      <h4 style="margin: 10px">Trading starts in</h4>
      <div class="timer">
        <div>
          <div id="timer_day">90</div>
          <div>D</div>
        </div>
        <div>
          <div>:</div>
          <div>&nbsp;</div>
        </div>
        <div>
          <div id="timer_hour">00</div>
          <div>H</div>
        </div>
        <div>
          <div>:</div>
          <div>&nbsp;</div>
        </div>
        <div>
          <div id="timer_minute">00</div>
          <div>M</div>
        </div>
        <div>
          <div>:</div>
          <div>&nbsp;</div>
        </div>
        <div>
          <div id="timer_second">00</div>
          <div>S</div>
        </div>
      </div>
      <form action="{{route('non_pledge_insert')}}" method="post" id="non_pledge_form">
        @csrf
        <input type="hidden" value="1" name="kind">
        <input type="hidden" value="90" name="date">
        <input type="hidden" value="0.9" name="income">
        <div class="start_now_btn">
          <button type="button" id="start_now" name="start_now">START NOW</button>
        </div>
      </form>
    </div>

    <div class="rule">
      <h3>Rules for [ Non-pledge ]:</h3>
      <ol>
        <li>Investment between $20 - $10,000.</li>
        <li>Daily net income 0.9 %.</li>
        <li>Total net income 81 %.</li>
        <li>Investment period 90 days.</li>
        <li>Daily income can be withdrawn once per day.</li>
        <li>You can cancel your investment at anytime with 15% fee.</li>
        <li>If you not cancel your investment, your capital will returned at end of the period.</li>
        <li>If you reach high levels, you will earn incentive income upto 1.2% everyday from your investment.</li>
      </ol>
    </div>

    <div class="qa">
      <h3>Questions and Answers</h3>
      <ol>
        <li>Why income is low?</li>
        <p>
          Because, Wallet Grow system is not a Ponzi scheme. Our team will invest your funds into various crypto
          fields to generate income. Our team should face time and risks management.
          <br /><br />
          Even, Your 70% of funds only invest into various crypto fields to generate income. 20% of funds will set-up
          for as backup funds. Remaining, 10% of funds will buy an insurance for your investment.
          <br /><br />
          Therefore income is low, at the same time there is no risks for invest X-wallet. You can earn money for long
          term.
        </p>
        <li>How to earn more?</li>
        <p>
          Wallet Grow developed an incentives income program for all users to earn more. You just need to develop a
          team and reach silver, gold, platinum, diamond and master leagues.
          <br />
          <br />
          For example, your investment is 1000$ and you earned 1% daily from X-wallet (pledge mode). If you reach gold
          league, your daily income automatically will increase 1% to 1.5%.
        </p>
      </ol>

      <div>
        <div>Bronze - (+0.1%)</div>
        <div>Silver - (+0.3%)</div>
        <div>Gold - (+0.5%)</div>
        <br />
        <div>Platinum-(+0.8%)</div>
        <div>Diamond -(+1.1%)</div>
        <br />
        <div>Master - (+1.2%) + 50$ weekly salary</div>
        <br />
      </div>
    </div>

    <!-- <div class="strategy">
        <div>90 Days</div>
        <div class="strategy_income">
          <div class="daily">
            <div>1.3 %</div>
            <div>Daily Income</div>
          </div>
          <div class="total">
            <div>234 %</div>
            <div>Total Income</div>
          </div>
        </div>
        <div class="btn_start">
          <button>Start Now</button>
        </div>
      </div> -->
  </main>

  <div class="mobile_navbar">
    <div class="mobile_nav_container">
      <ul class="mobile_nav">
        <li>
          <a href="/investment/">
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
        <li class="mobile_item_active">
          <a href="{{route('front.wallet_index')}}">
            <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
              width="20px" height="20px" viewBox="0 0 450 450" xml:space="preserve" fill="#2ecbe9"
              style="text-align: center">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <style type="text/css">
                .st0 {
                  fill: #2ecbe9;
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
          <a href="{{ route('front.insurance')}}">
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
        <li>
          <a href="{{route('front.account')}}">
            <svg width="20px" height="20px" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1"
              xmlns="http://www.w3.org/2000/svg" fill="#636363">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <defs>
                  <style>
                  .cls-1 {
                    fill: none;
                    stroke: #636363;
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

</html>

<script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery-3.6.4.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
  integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
$(document).ready(function() {
  var date_cnt = new Date(<?= $date_cnt ?>);
  var is_start = <?= $data['is_start'] ?>;
  var wallet_balance = <?= $data['wallet_balance'] ?>;
  var length = <?= $length ?>;
  var is_flag = <?= $is_flag ?>;
  var income = <?= $data['income'] ?>;
  var today_income = <?= $data['today_income'] ?>;
  var days = <?= json_encode($days); ?>;

  $("#start_now").on('click', function() {
    if (wallet_balance < 20) {
      toastr.warning("Insufficient balance");
    } else {
      $('#non_pledge_form').submit();
    }
  });

  function show_date() {
    for (i = 0; i < length; i++) {
      $("#timer_day_" + i).text(format(Math.floor(days[i] / (3600 * 24))));
      var dt = days[i] % (3600 * 24);
      $("#timer_hour_" + i).text(format(Math.floor(dt / 3600)));
      dt = dt % (3600);
      $("#timer_minute_" + i).text(format(Math.floor(dt / 60)));
      dt = dt % (60);
      $("#timer_second_" + i).text(format(dt));
      days[i]--;
      if (days[i] < 0) days[i] = 0;
    }

  }

  function format(dt) {
    return dt >= 10 ? dt : "0" + dt;
  }
  setInterval(function() {
    if (days.length > 0)
      show_date();
  }, 1000);
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