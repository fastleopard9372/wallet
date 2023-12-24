<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick-theme.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/project/project.css')}}" />

  <title>GunBot</title>
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
      <h1 class="fontcolor">GunBot</h1>
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

    <a href="https://www.gunbot.com/">
      <img src="{{ URL::asset('frontend/images/project/aibot/18.png')}}" alt="detail_rec_05" class="detail_not_slick" />
    </a>

    <div class="detail_people">
      <img src="{{ URL::asset('frontend/images/project/detail/up.svg')}}" alt="up" width="50%" />
      <div>10000+ registered last 45 days</div>
    </div>
    <hr />
  </section>

  <section class="detail_guide">
    <img src="{{ URL::asset('frontend/images/project/detail/gunbot/01.jpg')}}" alt="01" />
    <div class="guide_title">Powerful, easy to use trading bot :</div>
    <div>
      Revolutionize your trading experience with Gunbot, the ultimate trading bot designed for both crypto enthusiasts
      and automation experts. Whether you're a seasoned trader or just starting out, Gunbot empowers you to
      effortlessly execute your trading strategies, maximizing your profits with every move. <br /><br />
      The Quantitative trading made by AI robot is designed to remove the psychological element of trading, which can
      be detrimental in investment or trading cryptocurrencies. <br /><br />
      Robot like Royal Q serves you 24/7 with multiple styles or experienced strategies and it's automated. Beginners
      are rest assured; just copy strategy from other experienced traders.
    </div>
    <div class="guide_title">Total Control, No Cloud Dependency :</div>
    <div>
      Unlike other trading bots, Gunbot runs directly on your computer. You don't have to rely on cloud services,
      ensuring your data's security and privacy. Compatible with Windows, macOS, Linux, and Raspberry Pi, Gunbot
      offers unmatched flexibility.
    </div>
    <div class="guide_title">Plug and Play Strategies :</div>
    <div>
      Discover the power of plug and play with Gunbot. Profitable strategies like stepgridscalp come pre-tuned,
      allowing you to kickstart your trading journey instantly. Just turn on the bot and watch your profits grow.
    </div>
    <div class="guide_title">Unlimited Possibilities for Power Users :</div>
    <div>
      Are you a power user craving customization? Gunbot has you covered. Enjoy unlimited bot instances, craft your
      custom strategies, and automate configuration changes. The possibilities are endless - take your trading to the
      next level.
    </div>
    <div class="guide_title">Free updates :</div>
    <div>
      Gunbot offers free software updates without any subscription hassles. Pay only a one-time license fee and enjoy
      continuous improvements to enhance your trading strategies.
    </div>

    <img src="{{ URL::asset('frontend/images/project/detail/gunbot/02.png')}}" alt="02" />
    <div class="guide_title">Get Gunbot Running in Minutes:</div>
    <div>
      Get started by installing Gunbot on your computer or VPS. It's hassle-free and works on Windows, Linux, macOS,
      and even Raspberry Pi. Just unzip the software package and launch it. Gunbot is portable, so no complex
      installations required. Access the user-friendly interface in your browser instantly.
    </div>
    <img src="{{ URL::asset('frontend/images/project/detail/gunbot/03.png')}}" alt="03" />
    <div class="guide_title">Seamlessly Connect to Exchange :</div>
    <div>
      Link Gunbot to your exchange account effortlessly. Just enter your API key and secret. Rest easy knowing your
      API secret stays secure on your system. Ensure the API key can read info and execute trades. Gunbot doesn't need
      withdrawal permissions.
    </div>

    <img src="{{ URL::asset('frontend/images/project/detail/gunbot/04.png')}}" alt="04" />
    <div class="guide_title">Choose Your Winning Pairs :</div>
    <div>
      Select the coins you want Gunbot to trade and pick suitable strategies for each pair. Add pairs individually or
      set filter rules like "Top 10 volume USDT pairs." Opt for coins with regular 2%+ price swings. Gunbot handles
      any coin pair on your exchange, from BTC-ETH to USDT-BTC.
    </div>

    <img src="{{ URL::asset('frontend/images/project/detail/gunbot/05.png')}}" alt="05" />
    <div class="guide_title">Customize Your Strategy:</div>
    <div>
      Tailor your trading strategy effortlessly. Adjust the trading limit, defining Gunbot's investment per trade.
      <br /><br />
      Explore various approaches like grid trading, trend following, or using indicators like Bollinger Bands. Even
      manually bought coins can be optimized for profit with Gunbot's smart selling. <br /><br />
      Learn about different ways to use Gunbot.
    </div>

    <div class="guide_title">Decentralized exchanges and bots :</div>
    <div>
      As decentralized finance (DeFi) becomes increasingly popular, more traders are turning to decentralized
      exchanges and locally-run bots to take control of their trades. With a decentralized exchange, you don't have to
      worry about middlemen or third parties holding onto your assets. And by running your bot locally, you have even
      more control over your trades and can keep your strategies and assets secure. By automating your trades with a
      locally-run bot like Gunbot, you can save time and energy by taking the guesswork out of your strategies while
      increasing your trading frequency and volume. Whether you're using preset strategies or creating your own custom
      ones, with Gunbot you can mximize your profits and minimize your risk.
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