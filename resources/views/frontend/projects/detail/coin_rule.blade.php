<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick-theme.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/project/project.css')}}" />

  <title>Coin Rule</title>
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
      <h1 class="fontcolor">Coin Rule</h1>
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
          <span>4.3</span>
        </div>
        <img src="{{ URL::asset('frontend/images/project/insurance.png')}}" alt
="detail01" />
      </div>
    </div>

    <a href="https://coinrule.com/ref.html?fpr=d4q95" target="_blank"><img src="{{ URL::asset('frontend/images/project/aibot/09.png"
        alt="coin rule" class="detail_not_slick" /></a>

    <div class="detail_people">
      <img src="{{ URL::asset('frontend/images/project/detail/up.svg')}}" alt
="up" width="50%" />
      <div>6800+ registered last 45 days</div>
    </div>
    <hr />
  </section>

  <section class="detail_guide">
    <img src="{{ URL::asset('frontend/images/project/detail/coin_rule/1.jpg')}}" alt
="">
    <div class="guide_title">Create Automated Trading Strategies Running 24/7:</div>
    <div>
      Create Automated Trading Strategies Running 24/7:
      <br /><br />
      Set custom trading strategies and never miss a new rally or get caught in a dip. Coinrule obsessively seeks out
      effective market indicators to enable smart allocation of funds while putting you in control of your investment
      machine.
    </div>
    <img src="{{ URL::asset('frontend/images/project/detail/coin_rule/2.jpg')}}" alt
="">
    <img src="{{ URL::asset('frontend/images/project/detail/coin_rule/3.jpg')}}" alt
="">
    <div>
      <div class="guide_title">Trade Across Exchanges:</div>
      <div>Coinrule is a safe platform to define automated strategies on top of your favorite exchanges, including
        Binance, Coinbase, Kucoin, Kraken, etc. We don't ask for private keys or withdrawal rights.</div>
    </div>
    <img src="{{ URL::asset('frontend/images/project/detail/coin_rule/4.webp')}}" alt
="">
    <div>
      After nearly a year of swirling rumours, the threat of US regulatory and criminal enforcement against Crypto’s
      biggest Exchange Binance was still hanging over the market. These rumours can now finally be put to bed. The US
      Justice Department fined Binance $4.3bn in penalties and forfeitures. The exchanges’ iconic CEO CZ pleaded guilty
      to money laundering charges and has stepped down from his position.
      <br /><br />
      Markets quickly reacted to the news. After an initial drop, bulls took over the narrative. BTC recovered quickly.
      Not only could things have gone far worse, but a major uncertainty has finally been removed. Binance comes out of
      it with a newly ‘clean’ sheet and can continue to operate. In an industry as young and volatile as crypto, tail
      risks will always exist. Yet it is clear that most of the ‘skeletons in the closet’, be it FTX, Luna/Terra, 3AC,
      Celsius or now the case against Binance have been put to bed. In terms of market sentiment, not much stands
      between us and a 2024 Bull Market start.
      <br /><br />
      In other market news, investors have been selling Dollars at the fastest rate in a year while they bet on Federal
      Reserve interest rate drops in the new year. As US inflation dropped to 3.2% in October, more than expected, and
      the economy continues to weaken, the bet is on that we have seen the last of interest rate rises. This is good
      news for risk-on assets such as crypto and any market participant with Dollar-denominated debt. As rates might
      drop, capital will go in search of higher return opportunities. So goes the theory.
      <br /><br />
      This however is not set in stone. Ironically, while short-term inflation expectations are dropping, longer-term
      inflation expectations, as covered in our previous column, are on the rise as markets expect rate drops to
      reignite inflation. The Fed might well see this as a sign to hold off rate decreases longer than most anticipate.
      The decision on rates will be one of the main drivers that could reignite a bull market. If there has ever been a
      time to watch how the Federal Reserve interprets each and every upcoming data point, it is now.
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