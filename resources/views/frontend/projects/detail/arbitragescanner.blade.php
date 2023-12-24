<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick-theme.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/project/project.css')}}" />

  <title>Arbitrage Scanner</title>
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
      <h1 class="fontcolor">Arbitrage Scanner</h1>
      <div class="project_info_rating">
        <div>
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <span>4.6</span>
        </div>
        <img src="{{ URL::asset('frontend/images/project/insurance.png')}}" alt="detail01" />
      </div>
    </div>

    <img src="{{ URL::asset('frontend/images/project/aibot/05.png')}}" alt="detail_rec_05" class="detail_not_slick" />

    <div class="detail_people">
      <img src="{{ URL::asset('frontend/images/project/detail/up.svg')}}" alt="up" width="50%" />
      <div>8500+ registered last 30 days</div>
    </div>
    <hr />
  </section>

  <section class="detail_guide">
    <div>
      <b>Arbitrage Scanner</b> doesn't work with your money. We don't connect to your exchange balances via API, and
      you don't connect your wallets anywhere. It's a completely manual bot that operates in the cloud for the safety
      of your funds.
    </div>
    <img src="{{ URL::asset('frontend/images/project/detail/arbitragescanner/01.jpg')}}" alt="01" />

    <img src="{{ URL::asset('frontend/images/project/detail/arbitragescanner/02.svg')}}" alt="02" />
    <div class="guide_title">WORKING WITH ANY DEX AND 20 MAJOR BLOCKCHAINS:</div>
    <div>
      To track currency differences, you can connect to any exchange, including DEX, which typically have the largest
      spreads in trading. This is particularly useful when dealing across blockchains, such as buying on Arbitrum and
      selling on Polygon, as there's currently no similar functionality in the market. As a result, there are often
      significant differences between blockchains
    </div>

    <img src="{{ URL::asset('frontend/images/project/detail/arbitragescanner/03.svg')}}" alt="03" />
    <div class="guide_title">CONNECT ANY CEX AND ANY TOKEN:</div>
    <div>
      In our standard plan, we provide access to 15 major exchanges, and we'll be adding more over time. But you can
      easily link up CEX to DEX, or CEX to CEX, or even DEX (Arbitrum) to DEX (Avalanche) to track the price
      difference of any token traded on these exchanges in less than 30 seconds. Additionally, you can always add any
      specific exchange you want to track for an extra fee, without waiting in line.
    </div>

    <img src="{{ URL::asset('frontend/images/project/detail/arbitragescanner/04.svg')}}" alt="04" />
    <div class="guide_title">PERSONALIZED CLOUD-BASED BOT, TAILORED TO YOUR NEEDS :</div>
    <div>
      Convenient CMS where you can set up new pairs for tracking with the desired template and parameters in just a
      few minutes. No need to install anything on your laptop, download or enter passwords, or grant access to anyone.
      Everything is done in your Telegram app, quickly and easily. Our managers will help you set up everything
      according to your preferences.
    </div>

    <img src="{{ URL::asset('frontend/images/project/detail/arbitragescanner/05.svg')}}" alt="05" />
    <div class="guide_title">GUIDANCE FOR BEGINNERS:</div>
    <div>
      The Arbitrage Scanner is easy to use, and even beginners will have no trouble setting up templates. Depending on
      your plan, you will have access to a personal manager who will fully explain how to use the bot, suggest which
      currencies and exchanges to pay attention to, provide guidance on how to manage your capital, and offer
      introductory training materials and ready-to-use cases and strategies for using our bot in arbitrage.
    </div>

    <img src="{{ URL::asset('frontend/images/project/detail/arbitragescanner/06.svg')}}" alt="06" />
    <div class="guide_title">ACCESS TO A PRIVATE CHAT FOR CLIENTS:</div>
    <div>
      For our clients, we have a private chat available during their use of the service where experienced arbitrageurs
      are available to assist and share interesting earning strategies.
    </div>

    <img src="{{ URL::asset('frontend/images/project/detail/arbitragescanner/07.svg')}}" alt="07" />
    <a href="https://arbitragescanner.io/?ref=KFQY5XE99B" class="guide_title">
      COMPLETELY MANUAL BOT WITHOUT AUTOMATIC TRADING :
    </a>
    <div>
      We have been involved in arbitrage since 2016, and have been in the market for a long time, seeing various
      instances where hackers hacked our competitors and withdrew all funds from their clients' accounts, as well as
      situations where funds were taken through fake orders or NFT images via API on platforms such as Binance. That
      is why we have opted for a fully manual bot to ensure that no one can take your funds.
    </div>

    <img src="{{ URL::asset('frontend/images/project/detail/arbitragescanner/08.png')}}" alt="08" />
    <div>
      <div class="guide_title">THE BEST TOOLS FOR BLOCKCHAIN ANALYSIS AND CONVENIENT CRYPTOCURRENCY ARBITRAGE :</div>
      <ol>
        <li>Wallet analysis, mass wallet search, and AI-based analysis NEW</li>
        <li>
          Arbitrage Scanner and Screener, which provide ready-made pairs for buying and selling with profit
          indications. We support over 60 exchanges, including DEX platforms
        </li>
        <li>
          A service that allows you to stay ahead of the news and receive insights before they are published in the
          media
        </li>
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