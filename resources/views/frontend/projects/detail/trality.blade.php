<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick-theme.css')}}" />
    <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick.css')}}" />
    <link rel="stylesheet" href="{{ URL::asset('frontend/css/project/project.css')}}" />

    <title>Trality</title>
  </head>
  <body>
    <section class="detail_rec_nav">
      <a href="{{ route('front.project') }}" style="display: flex; align-items: center">
        <svg
          width="20px"
          height="20px"
          viewBox="0 0 24 24"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
          stroke="#ffffff"
        >
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M11.7071 4.29289C12.0976 4.68342 12.0976 5.31658 11.7071 5.70711L6.41421 11H20C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13H6.41421L11.7071 18.2929C12.0976 18.6834 12.0976 19.3166 11.7071 19.7071C11.3166 20.0976 10.6834 20.0976 10.2929 19.7071L3.29289 12.7071C3.10536 12.5196 3 12.2652 3 12C3 11.7348 3.10536 11.4804 3.29289 11.2929L10.2929 4.29289C10.6834 3.90237 11.3166 3.90237 11.7071 4.29289Z"
              fill="#ffffff"
            ></path>
          </g>
        </svg>
        <span class="ml10">Back</span>
      </a>
    
    </section>

    <section>
      <div class="project_info">
        <h1 class="fontcolor">Trality</h1>
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
            <span>4.6</span>
          </div>
          <img src="{{ URL::asset('frontend/images/project/insurance.png')}}" alt
="detail01" />
        </div>
      </div>

      <a href="https://www.trality.com/">
        <img src="{{ URL::asset('frontend/images/project/aibot/12.png')}}" alt
="detail_rec_05" class="detail_not_slick" />
      </a>

      <div class="detail_people">
        <img src="{{ URL::asset('frontend/images/project/detail/up.svg')}}" alt
="up" width="50%" />
        <div>10000+ registered last 45 days</div>
      </div>
      <hr />
    </section>

    <section class="detail_guide">
      <img src="{{ URL::asset('frontend/images/project/detail/trality/01.jpg')}}" alt
="01" />
      <div class="guide_title">Automate your crypto investing :</div>
      <div>
        Access high-quality crypto trading bots in just a few clicks. Or build your own using our powerful creator tools
      </div>
      <img src="{{ URL::asset('frontend/images/project/detail/trality/02.jpg')}}" alt
="02" />
      <div class="guide_title">Access a curated selection of trading bots created by experts :</div>
      <div>
        From advanced scalping to diversified index-based strategies, the Marketplace offers a wide range of bots to
        help you achieve your trading objectives.
      </div>
      <img src="{{ URL::asset('frontend/images/project/detail/trality/03.jpg')}}" alt
="03" />

      <div class="guide_qa">
        <div>
          <h4>Invest in bots:</h4>
          <p>Let bot creators work their magic and then simply mirror their trades.</p>
        </div>
        <div>
          <h4>Everyone benefits :</h4>
          <div>Trality's Marketplace offers a mutually beneficial space both for Creators and Investors.</div>
        </div>
        <div>
          <h4>What are Royal Q Robot Trade Settings?</h4>
          <p>
            Royal Q offers a variety of trade settings that can be configured to suit the needs of different traders.
            First buy in amount is setting an amount that will be used to open a position. Each margin call will also
            start to double from the set amount by switching it on.
          </p>
        </div>
        <div>
          <h4>Fully vetted :</h4>
          <p>Trality only approves the best strategies, and we provide performance metrics for peace of mind.</p>
        </div>
      </div>
      <img src="{{ URL::asset('frontend/images/project/detail/trality/04.png')}}" alt
="04" />
      <div>
        Automated investing — for everyone! Founded in 2019 by Moritz Putzhammer and Christopher Helf, Trality exists to
        ease most retail investors' pain of not knowing how to invest their hard-earned money and not having access to a
        personal wealth manager. <br /><br />
        Trality provides these investors with fully automated portfolios through its innovative Marketplace. By
        combining the experience of the world's best Python programmers with the latest advances in machine learning,
        Trality enables every investor to maximize profits while minimizing risk—all through the power of automation.
        Investors can now rent cutting-edge wealth management bots without having to create complicated automations
        themselves, while top-performing bot creators can earn passive income by having their bots listed on Trality's
        Marketplace. <br /><br />
        With this approach, Trality is rewriting the rules of the game by scaling the previously unscalable concept of
        personalized wealth management beyond high-net-worth individuals towards the broad retail market.
      </div>
      <img src="{{ URL::asset('frontend/images/project/detail/trality/05.jpg')}}" alt
="05" />

      <div class="guide_title">Our Mission:</div>
      In order to level the playing field between retail and professional investors, we are building the first two-sided
      marketplace platform for fully-automated investment strategies available to users of all levels of experience.
      <br /><br />
      By combining the expertise of Python programmers with the latest developments in Artificial Intelligence (AI),
      Trality offers a full range of market-beating bots for all conditions, enabling investors to maximize profits
      while minimizing risk. <br /><br />
      Investors can rent profitable bots tailored to specific risk tolerances and individual investment goals without
      having to code complicated algorithms, while bot creators can monetize their bots and earn passive income from
      investors around the world by having their bots listed on Trality's Marketplace. <br /><br />
      <div></div>
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
