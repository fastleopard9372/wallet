<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick-theme.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/project/project.css')}}" />

  <title>Cornix</title>
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
      <h1 class="fontcolor">Cornix</h1>
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
          <span>4.4</span>
        </div>
        <img src="{{ URL::asset('frontend/images/project/insurance.png')}}" alt
="detail01" />
      </div>
    </div>

    <a href="https://cornix.io" target="_blank"><img src="{{ URL::asset('frontend/images/project/aibot/11.png')}}" alt
="detail_rec_05"
        class="detail_not_slick" /></a>

    <div class="detail_people">
      <img src="{{ URL::asset('frontend/images/project/detail/up.svg')}}" alt
="up" width="50%" />
      <div>7300+ registered last 45 days</div>
    </div>
    <hr />
  </section>

  <section class="detail_guide">
    <img src="{{ URL::asset('frontend/images/project/detail/cornix/1.jpg')}}" alt
="">
    <div class="guide_title">Automated crypto trading for everyone</div>
    <div>
      Cornix is an innovative crypto trading platform that works for everyone
      <br />
      Our platform enables experts to share signals with novices, and offers world - class bots and configurations to
      make crypto trading simple and profitable.
      <br /><br />
      Cutting-edge trading automation for novices and pros. Thousands of strategies. User-friendly bots. 24/7 Support.
    </div>
    <img src="{{ URL::asset('frontend/images/project/detail/cornix/2.jpg')}}" alt
="" />
    <div>
      <div class="guide_title">Automate your trading with powerful bots :-</div>
      <ol>
        <li>Choose when to buy and sell, set your risk level, and more:<br />Create an advanced bot based on your
          trading preferences.</li>
        <li>Start in seconds by copying a bot<br />Choose from top-performing bots created by other traders:<br />Just
          copy a public bot and let it trade on autopilot - emotion-free.</li>
      </ol>
    </div>
    <img src="{{ URL::asset('frontend/images/project/detail/cornix/3.jpg')}}" alt
="" />
    <div>
      <div class="guide_title">Anyone can trade crypto:</div>
      <div>We want all people to have access to a user-friendly crypto trading platform.</div>
      <br />
      <div class="guide_title">Trading Features:</div>
      <div>Safety is our #1 priority<br />Every trader deserves to be confident that their hard-earned money is
        protected.</div>
      <br />
      <div class="guide_title">Philosophy Icon:</div>
      <div>Knowledge should be shared<br />At Cornix, we empower novices to copy expert traders in just a few clicks.
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