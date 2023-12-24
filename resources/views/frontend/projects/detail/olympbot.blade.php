<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick-theme.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/project/project.css')}}" />

  <title>Olympbot</title>
</head>

<body>
  <section class="detail_rec_nav">
    <a href="{{ route('front.project') }}" style="display: flex; align-items: center">
      <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
        stroke="#ffffff">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M11.7071 4.29289C12.0976 4.68342 12.0976 5.31658 11.7071 5.70711L6.41421 11H20C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13H6.41421L11.7071 18.2929C12.0976 18.6834 12.0976 19.3166 11.7071 19.7071C11.3166 20.0976 10.6834 20.0976 10.2929 19.7071L3.29289 12.7071C3.10536 12.5196 3 12.2652 3 12C3 11.7348 3.10536 11.4804 3.29289 11.2929L10.2929 4.29289C10.6834 3.90237 11.3166 3.90237 11.7071 4.29289Z"
            fill="#ffffff"></path>
        </g>
      </svg>
      <span class="ml10">Back</span>
    </a>

  </section>

  <section>
    <div class="project_info">
      <h1 class="fontcolor">Olympbot</h1>
      <div class="project_info_rating">
        <div>
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <span>4.4</span>
        </div>
        <img src="{{ URL::asset('frontend/images/project/insurance.png')}}" alt="detail01" />
      </div>
    </div>

    <a href="https://olympbot.com/">
      <img src="{{ URL::asset('frontend/images/project/aibot/17.png')}}" alt="detail_rec_05" class="detail_not_slick" />
    </a>

    <div class="detail_people">
      <img src="{{ URL::asset('frontend/images/project/detail/up.svg')}}" alt="up" width="50%" />
      <div>3200+ registered last 30 days</div>
    </div>
    <hr />
  </section>

  <section class="detail_guide">
    <img src="{{ URL::asset('frontend/images/project/detail/olympbot/01.jpg')}}" alt="01" />
    <div class="guide_title">Automate your investment on Olymp Trade :</div>
    <div>
      <p>*smart tool to help traders of any level make more profits.</p>
      <br />
      <b>Professional trading tool:</b>
      <ol>
        <li>Automatic selection of the most profitable assets</li>
        <li>Opening deals based on technical analysis</li>
        <li>Smart backtested strategies for all risk levels.</li>
      </ol>
      <br />
      <b>Easy to use even for beginners:</b>
      <ol>
        <li>Quick setup with instructions in your language</li>
        <li>$10 000 on Demo account to try out the robot</li>
        <li>Flexible notification system</li>
      </ol>
      <br />
      <b>Charts super powered by TradingView :</b>
      <ol>
        <li>Olymp Robot has partnered with TradingView to utilize its charting technology</li>
        <li>TradingView is a robust global trading platform providing up-to-date market data</li>
        <li>Powerful analytical tools such as Stock Screener and Economic Calendar</li>
      </ol>
    </div>

    <img src="{{ URL::asset('frontend/images/project/detail/olympbot/02.jpg')}}" alt="02" />
    <div class="guide_title">Benefits of auto trading with Olymp Robot :</div>
    <div>
      <ul>
        <li><b>Proven strategies :</b></li>
        <p>Our experienced trading analysts collected strategies backtested on historical data.</p>
        <li><b>Fraud prevention :</b></li>
        <p>Your financial information and account details are securely stored and encrypted.</p>
        <li><b>Practice on Demo :</b></li>
        <p>Try all the strategies and improve your trading skills without any deposit.</p>
        <li><b>24/7 customer support :</b></li>
        <p>You can always contact our qualified support team via online chat.</p>
      </ul>
    </div>
    <img src="{{ URL::asset('frontend/images/project/detail/olympbot/03.jpg')}}" alt="03" />

    <div>
      <div class="guide_title">How to start investing?</div>
      <b>Follow these steps to get to know Olymp Robot and start making profits on a real account :</b>
      <ol>
        <li>Open Olymp Robot app on any device.</li>
        <li>Create an Olymp Trade account.</li>
        <li>Set up the robot and try it on Demo.</li>
        <li>Make a deposit and start earning.</li>
      </ol>
    </div>
  </section>

  <div style="margin-top: 50px"></div>

  <div class="project_detail_buttons">
    <button>Add to favourite</button>
    <button>Register now</button>
  </div>

  <script src="{{ URL::asset('frontend/jquery/jquery-3.6.4.min.js')}}"></script>
  <script src="{{ URL::asset('frontend/js/slick.js')}}"></script>
  <script src="{{ URL::asset('frontend/js/project.js')}}"></script>
</body>

</html>