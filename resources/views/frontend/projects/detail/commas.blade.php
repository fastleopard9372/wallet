<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick-theme.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/project/project.css')}}" />

  <title>Commas</title>
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
      <h1 class="fontcolor">Commas</h1>
      <div class="project_info_rating">
        <div>
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <span>4.3</span>
        </div>
        <img src="{{ URL::asset('frontend/images/project/insurance.png')}}" alt="detail01" />
      </div>
    </div>

    <a href="https://3commas.io/">
      <img src="{{ URL::asset('frontend/images/project/aibot/13.png')}}" alt="detail_rec_05" class="detail_not_slick" />
    </a>

    <div class="detail_people">
      <img src="{{ URL::asset('frontend/images/project/detail/up.svg')}}" alt="up" width="50%" />
      <div>10000+ registered last 45 days</div>
    </div>
    <hr />
  </section>

  <section class="detail_guide">
    <img src="{{ URL::asset('frontend/images/project/detail/commas/01.jpg')}}" alt="01" />
    <div class="guide_title">About Company :</div>
    <div>
      3Commas is revolutionizing how people invest and trade. Born from a desire to centralize trading and eliminate
      the constant monitoring of positions, the three founders, Yuriy Sorokin, Egor Razumovskii, and Mikhail Goryunov,
      founded 3Commas in Tallinn, Estonia, in 2017. Today, the 3Commas platform allows users to deploy automated
      trading bots to execute non-stop cryptocurrency trading, minimize risks, and shop the marketplace for bot
      presets. <br /><br />
      Committed to building a reliable platform that helps users stabilize their crypto earnings and remove the
      proclivity of emotional decision-making, 3Commas embraces user feedback to drive refinements, grow the platform,
      and develop it into multiple exceptional products.<br /><br />
      Priding ourselves on our 3Commas ecosystem, we provide users with a place to learn, share and build together. We
      are extremely proud of our sensitivity to user-generated feedback, as it allows us to remain customer-centric
      and ensures that all our developments are designed specifically for our 3Commas family!
    </div>
    <img src="{{ URL::asset('frontend/images/project/detail/commas/02.jpg')}}" alt="02" />

    <div>
      <div class="guide_title">
        View multiple currency exchange charts with TradingView signals simultaneously in one place :
      </div>
      <ol>
        <b>What is the difference between SmartTrade from a standard exchange trading terminal?</b>
        <li>Simultaneous Take Profit and Stop-Loss:</li>
        <p>
          Automatically close a deal when a specified price is reached simultaneously with a safety which will close
          the deal if the price drops to or below a specified level.
        </p>
        <li>Trailing Orders for Take Profit and Stop-Loss :</li>
        <p>
          Automatically adjust (or chase) the closing value of the deal when the price changes. When the price rises
          or falls, your Take Profit and Stop-Loss will simultaneously follow.
        </p>
        <li>Stepwise profit making with Step Sell :</li>
        <p>
          Sell coins in intervals when the price rises. For example, Sell half of your coins for $10,000, 25% for
          $11,000 and the remainder % for $11,500. Don't miss that trade again!
        </p>
        <li>SmartCover :</li>
        <p>
          Secure your profits in the event of unplanned market volatility by selling coins and buying them back at a
          lower rate.
        </p>
        <li>Trading View Charts and Signals :</li>
        <p>View multiple currency exchange charts with TradingView signals simultaneously in one place.</p>
      </ol>
    </div>
    <img src="{{ URL::asset('frontend/images/project/detail/commas/03.jpg')}}" alt="03" />
    <div class="guide_title">Learn the basics of trading in less than an hour:</div>
    <div>
      Welcome to 3Commas! We've developed this intro course to show you how everything works. By the time you finish
      these videos, you'll have a working knowledge of the 3Commas platform and be ready to create your first bot!
      <br /><br />
      As our exclusive education partner, The Better Traders is dedicated to delivering the world's leading crypto bot
      trading courses. Join Aaron Disher (Moonin Papa), our top bot trader, as he guides you on your trading journey
      to becoming a better trader. Get the most out of your 3Commas membership and learn how to maximize your bot
      trading profits with The Better Traders courses.
    </div>
    <img src="{{ URL::asset('frontend/images/project/detail/commas/04.jpg')}}" alt="04" />
    <div class="guide_title">DCA Bots :</div>
    <div>
      A DCA (or "Dollar Cost Averaging") strategy is the practice of investing into a currency at preset intervals to
      reduce the entry price of a position over time and mitigate volatility risk. <br />
      For example, when you enter a position with a lump-sum investment (all-in) you run the risk of purchasing
      "highs" only to see the price drop and end up with a losing position, that you must choose whether to hold, or
      cut at a loss. <br />
      However, if you DCA, you can divide your investment into smaller pieces and buy the asset at various points over
      time at different prices, thereby getting a better average price for your position and greatly reducing risks
      from the consequences of volatility. <br />
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