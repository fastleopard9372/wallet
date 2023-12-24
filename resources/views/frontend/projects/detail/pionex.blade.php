<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick-theme.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/project/project.css')}}" />

  <title>PIONEX</title>
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
      <h1 class="fontcolor">PIONEX</h1>
      <div class="project_info_rating">
        <div>
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <span>4.2</span>
        </div>
        <img src="{{ URL::asset('frontend/images/project/insurance.png')}}" alt="detail01" />
      </div>
    </div>

    <img src="{{ URL::asset('frontend/images/project/aibot/04.png')}}" alt="detail_rec_05" class="detail_not_slick" />

    <div class="detail_people">
      <img src="{{ URL::asset('frontend/images/project/detail/up.svg')}}" alt="up" width="50%" />
      <div>300+ registered last 45 days</div>
    </div>
    <hr />
  </section>

  <section class="detail_guide">
    <img src="{{ URL::asset('frontend/images/project/detail/pionex/01.jpg')}}" alt="01" />
    <div class="guide_title">What Is Grid Trading? How Does Grid Trading Work?</div>
    <div>
      The Grid Trading Bot is a sophisticated trading program that enables users to automatically execute trades based
      on a pre-determined price range in the cryptocurrency market. In the dynamic and volatile environment of
      cryptocurrency trading, this technique helps to minimize the impact of human error on trading decisions. The
      Grid Trading Bot ensures strict adherence to a “buy low and sell high” strategy, providing a reliable and
      efficient solution for managing trades in the cryptocurrency market. <br /><br />
      As an illustration, consider the BTC/USDT trading pair with an upper price of 150,000 USDT and a lower price of
      15,000 USDT. Once the Grid Trading Bot is successfully set up, it will initiate trades by purchasing a specified
      percentage of the asset at the current market price and placing sell orders above it. At the same time, the Grid
      Trading Bot will allocate a portion of USDT to place buy orders below the current price. The bot will
      continually execute “buy low and sell high” trades within the designated price range, resulting in the buildup
      of frequent grid profits. <br /><br />
      In the event that the market price rises above 150,000 USDT or drops below 15,000 USDT, the Grid Trading
      strategy will be temporarily suspended. Once the price returns within the specified price range, the Grid
      Trading strategy will resume its operations.
    </div>
    <img src="{{ URL::asset('frontend/images/project/detail/pionex/02.jpg')}}" alt="02" />
    <div class="guide_title">How to Set Up a Grid Trading Bot?</div>
    <div>
      Whether you're a new investor or an experienced cryptocurrency trader, seeking short-term trades or long-term
      investments, creating a Pionex Grid Trading Bot is effortless and requires only a few simple steps. Pionex
      supports a wide range of trading pairs and currencies, so you can easily create a bot that fits your investment
      strategy. The Grid Trading Bot operates 24/7, enabling you to take advantage of market opportunities even while
      you're asleep, at work, or enjoying your free time. To get started, simply follow the tutorials on Grid Trading
      and create your first Grid Trading Bot today.
    </div>
    <img src="{{ URL::asset('frontend/images/project/detail/pionex/04.png')}}" alt="04" />
    <div>
      <div class="guide_title">Creation Steps - APP Version</div>
      <ol>
        <li>Open the Pionex app and select the “Trade” button located at the bottom of the screen.</li>
        <li>Navigate to the “Bot” section located at the top of the screen.</li>
        <li>Click the “Create” button.</li>
        <li>Select the option for “Grid Trading Bot”.</li>
        <li>
          Choose a cryptocurrency and configure the relevant parameters for the Grid Trading Bot. Once complete, you
          will have successfully created your bot.
        </li>
      </ol>
    </div>
    <img src="{{ URL::asset('frontend/images/project/detail/pionex/05.png')}}" alt="05" />
    <div class="guide_title">Creation Steps - WEB Version</div>
    <div>
      Log into your Pionex account on <b>pionex.com</b> and click the “Trade” button located at the top of the screen.
      Navigate to the “Bot” section located on the left side of the screen. Select the option for “Grid Trading Bot”
      and click the “Create” button. Select a cryptocurrency and configure the necessary parameters for your Grid
      Trading Bot. Upon completion, your bot will be successfully created.
    </div>
    <img src="{{ URL::asset('frontend/images/project/detail/pionex/06.jpg')}}" alt="06" />
    <a href="https://www.pionex.com/en/signUp?r=xiIjeGQf" class="guide_title">
      Grid Profits Are Decided by Good Parameters <br />
      AI Strategy for Grid Trading Bot
    </a>
    <div>
      Pionex AI strategy employs state-of-the-art quantitative algorithms to establish a comprehensive system for
      providing recommendations on Grid Trading Bot parameter settings. <br /><br />
      For those new to grid trading bots, it is recommended to utilize the Pionex AI strategy for setting up the
      parameters. Simply input your desired investment, and the system will use historical backtest data from the past
      7 days, 30 days, and 180 days to generate the most appropriate parameters for the current market conditions.
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