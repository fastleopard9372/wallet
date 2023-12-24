<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick-theme.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/project/project.css')}}" />

  <title>Crypto Hopper</title>
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
      <h1 class="fontcolor">Crypto Hopper</h1>
      <div class="project_info_rating">
        <div>
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt
="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt
="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt
="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt
="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt
="star" />
          <span>4.7</span>
        </div>
        <img src="{{ URL::asset('frontend/images/project/insurance.png')}}" alt
="detail01" />
      </div>
    </div>

    <a href="https://www.cryptohopper.com/create-account" target="_blank"><img src="{{ URL::asset('frontend/images/project/aibot/10.png"
        alt="crypto hopper" class="detail_not_slick" /></a>

    <div class="detail_people">
      <img src="{{ URL::asset('frontend/images/project/detail/up.svg')}}" alt
="up" width="50%" />
      <div>1000+ registered last 45 days</div>
    </div>
    <hr />
  </section>

  <section class="detail_guide">
    <img src="{{ URL::asset('frontend/images/project/detail/crypto_hopper/1.jpg')}}" alt
="">
    <div>
      Cryptohopper is an AI-driven bot that makes crypto trading accessible, fun, and worthwhile for everyone. We pursue
      perfection. Work hard. Learn every day.
      <br /><br />
      Join forces with our amazing team. And grow rapidly. Together we optimize and innovate a bot that hosts more than
      nine million transactions worth an estimated 2 billion USD each month.
      <br /><br />
      Would you like to join our team? Check out our current job opportunities
    </div>
    <img src="{{ URL::asset('frontend/images/project/detail/crypto_hopper/2.jpg')}}" alt
="">
    <div>
      <div class="guide_title">Trade like a pro ! Without being one !</div>
      <div>You don’t need to be a pro to trade like one. Level up your game - and your results - by copying pro traders
        on our marketplace. Subscribe to trading signals, which tell your bot when to buy or sell. Use strategies from
        professionals to scan the markets, and download pre-configured bot templates.</div>
    </div>
    <img src="{{ URL::asset('frontend/images/project/detail/crypto_hopper/3.jpg')}}" alt
="">
    <div>
      <div class="guide_title">Available anytime, Anywhere.</div>
      <div>Hosted in the cloud, Cryptohopper is available 24/7. Protect and monitor your assets, even while you’re
        logged out. Access your Hopper from any device, including web, phone, tablet and even your smartwatch.</div>
    </div>
    <img src="{{ URL::asset('frontend/images/project/detail/crypto_hopper/4.jpg')}}" alt
="">
    <div>
      <div class="guide_title">*EASY*</div>
      <div>
        Social Trading : Trade like a pro, without being one.
        <br /><br />
        Trailing Orders: Better buys & sells, the easy way.
        <br /><br />
        DCA : Don’t worry buying at the wrong moment.
      </div>
    </div>
    <img src="{{ URL::asset('frontend/images/project/detail/crypto_hopper/5.jpg')}}" alt
="">
    <div>
      <div class="guide_title">*ADVANCED*</div>
      <div>
        AI Trading: Let your bot learn and decide for itself.
        <br /><br />
        Strategy Designer : Create your Trading Algorithms. Easily.
        <br /><br />
        Backtesting : See how you would've performed.
      </div>
    </div>
    <img src="{{ URL::asset('frontend/images/project/detail/crypto_hopper/6.jpg')}}" alt
="">
    <div>
      <div class="guide_title">*MORE*</div>
      <div>
        Trading Terminal : Manage your complete portfolio. From one place.
        <br /><br />
        Exchanges : Connect the world's top exchanges.
        <br /><br />
        Paper Trading : Simulate your trading, and test your bots.
      </div>
    </div>
    <img src="{{ URL::asset('frontend/images/project/detail/crypto_hopper/7.jpg')}}" alt
="">
    <div>
      <div class="guide_title">Start trading with Cryptohopper for free!</div>
      Free to use - no credit required
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