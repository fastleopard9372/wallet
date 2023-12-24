<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick-theme.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/project/project.css')}}" />

  <title>Bigul</title>
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
      <h1 class="fontcolor">Bigul</h1>
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

    <img src="{{ URL::asset('frontend/images/project/aibot/15.png')}}" alt="detail_rec_05" class="detail_not_slick" />

    <div class="detail_people">
      <img src="{{ URL::asset('frontend/images/project/detail/up.svg')}}" alt="up" width="50%" />
      <div>3000+ registered last 45 days</div>
    </div>
    <hr />
  </section>

  <section class="detail_guide">
    <img src="{{ URL::asset('frontend/images/project/detail/bigul/01.jpg')}}" alt="01" />
    <div class="guide_title">Simplifying Algo Trading :</div>
    <div>
      <ul>
        <li><b>Simplifying Algo Trading :</b></li>
        <p>
          Make quick, informed trading decisions with real-time data analysis and lightning-fast execution, all
          available with Bigul's Super Trading Account.
        </p>
        <li><b>Become a Skillful, Disciplined and Proactive Trader:</b></li>
        <p>
          Our algorithms identify opportunities and execute trades through pre-set and pre-tested logic chains so that
          you can analyse large amounts of data in real-time, identify patterns and make trades faster and more
          accurately than ever before. <br /><br />
          Bigul allows you to take your trading game to the next level. A user-friendly interface and powerful
          features empower traders to make smarter, more informed trading decisions without any hidden 'cost'.
        </p>
      </ul>
    </div>

    <img src="{{ URL::asset('frontend/images/project/detail/bigul/02.jpg')}}" alt="02" />
    <div class="guide_title">What BIGUL Offers ?</div>
    <div>
      <ul>
        <li><b>Backtesting :</b></li>
        <p>
          Maximise strategy success with Bigul's backtesting services that offer the tools and analysis to evaluate
          past performance and inform future decisions.
        </p>
        <li><b>Strategy Builder :</b></li>
        <p>
          Develop your algorithmic trading strategies using over 100 indicators, through an intuitive, and a no-code
          platform.
        </p>
        <li><b>Virtual Trading :</b></li>
        <p>
          Practice your investment strategies in simulated market conditions with our paper trading option. Improve
          your skills and build confidence before entering the real market.
        </p>
      </ul>
    </div>

    <img src="{{ URL::asset('frontend/images/project/detail/bigul/03.jpg')}}" alt="03" />
    <div class="guide_title">Prebuilt Trading Strategies :</div>
    <div>
      Meet your unique goal and needs of business with Bigul's prebuilt trading strategies that provide a strategic
      approach to deliver results.
    </div>
    <div class="guide_title">Strategy Master :</div>
    <div>
      Trade with ease using pre-designed templates and execute your trades through Bigul's advanced algorithmic
      engine.
    </div>
    <div class="guide_title">Multiple Segments :</div>
    <div>
      Get tailored solutions with our trend-based multi-segment approach for equities and commodities. Meet securities
      criteria and achieve the best outcomes for your target group.
    </div>

    <div>
      <div class="guide_title">With Bigul's Algo Trading :</div>
      <ol>
        <li>Fast order placement with single click</li>
        <li>Place profit and stop-loss orders with a single click</li>
        <li>Execute a multi-leg spread strategy on mobile</li>
        <li>Brokerage per order 0.17$.</li>
        <li>Free Algo Trading Software.</li>
      </ol>
    </div>
    <img src="{{ URL::asset('frontend/images/project/detail/bigul/04.png')}}" alt="04" />

    <div class="guide_qa">
      <div>
        <h4>1. What is Algo Trading?</h4>
        <p>
          Algo Trading is a method of executing trades automatically using mathematical algorithms and software. It
          takes emotions out of the equation and provides a more systematic approach to trading.
        </p>
      </div>
      <div>
        <h4>2. How does Algo Trading work?</h4>
        <p>
          Algo trading analyses market data in real time and executes trades based on pre-built rules and algorithms.
          The algorithms are designed to identify profitable opportunities in the market and execute trades
          accordingly.
        </p>
      </div>
      <div>
        <h4>3. What are the benefits of using an algo trading platform?</h4>
        <p>
          Some benefits of using an algo trading platform include increased speed and accuracy of trading, reduced
          human error, improved efficiency, and the ability to analyse large amounts of data quickly.
        </p>
      </div>
      <div>
        <h4>4. What features are included in Algo Trading?</h4>
        <p>
          Algo Trading typically includes real-time market data, advanced charting and technical analysis tools, the
          ability to backtest strategies, and a user-friendly interface for creating and executing trades. Some
          platforms may also offer pre-built algorithms, automation capabilities, and the ability to integrate with
          other financial tools and services.
        </p>
      </div>
      <div>
        <h4>5. Is Algo Trading only for experienced traders?</h4>
        <p>
          While Algo Trading can be a powerful tool for experienced traders, it can also be accessible to those with
          less experience. Bigul also offers educational resources and a user-friendly interface to help its users get
          started and become more confident in their trading strategies.
        </p>
      </div>
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