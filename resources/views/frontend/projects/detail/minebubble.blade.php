<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick-theme.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/project/project.css')}}" />

  <title>Mine Bubble - Project Detail</title>
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
      <h1 class="fontcolor">Mine Bubble</h1>
      <div class="project_info_rating">
        <div>
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <span>2</span>
        </div>
        <img src="{{ URL::asset('frontend/images/project/insurance.png')}}" alt="detail01" />
      </div>
    </div>

    <div class="detail_images">
      <img src="{{ URL::asset('frontend/images/project/toprated/06.jpg')}}" alt="detail_rec_03" width="80%" />
      <img src="{{ URL::asset('frontend/images/project/toprated/06.jpg')}}" alt="detail_rec_03" width="80%" />
      <img src="{{ URL::asset('frontend/images/project/toprated/06.jpg')}}" alt="detail_rec_03" width="80%" />
      <img src="{{ URL::asset('frontend/images/project/toprated/06.jpg')}}" alt="detail_rec_03" width="80%" />
      <img src="{{ URL::asset('frontend/images/project/toprated/06.jpg')}}" alt="detail_rec_03" width="80%" />
      <img src="{{ URL::asset('frontend/images/project/toprated/06.jpg')}}" alt="detail_rec_03" width="80%" />
    </div>
    <div class="detail_people">
      <img src="{{ URL::asset('frontend/images/project/detail/up.svg')}}" alt="up" width="50%" />
      <div>500+ registered last 30 days</div>
    </div>
    <hr />
  </section>

  <section class="project_cashback">
    <div class="cashback">
      <h3 style="padding: 5px; border-radius: 3px">CashBack</h3>
      <div id="instance_tool">
        <span>50% Instant</span>
        <img src="{{ URL::asset('frontend/images/project/question-svgrepo-com.svg')}}" alt="question-svgrepo-com" />
        <div class="tool_text_i">
          Wallet Grow will distribute 50% of refferal commissions within 24 hours to the investors who registered and
          invested with our company affiliate link.
        </div>
      </div>
      <div id="last_tool">
        <span>20% Later</span>
        <img src="{{ URL::asset('frontend/images/project/question-svgrepo-com.svg')}}" alt="question-svgrepo-com" />
        <div class="tool_text_l">
          20% will be distribute again to the investors, at end of the project (must bought an insurance for receiving
          cashback).
        </div>
      </div>
    </div>
    <hr style="height: 8px" />
    <div class="withraw_content">
      <div class="started">
        <button>Started : 04.11.2023</button>
        <button class="paying">
          <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <path
                d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                stroke="#01cc01" stroke-width="2"></path>
              <path d="M9 12L10.6828 13.6828V13.6828C10.858 13.858 11.142 13.858 11.3172 13.6828V13.6828L15 10"
                stroke="#01cc01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
          </svg>
          Paying
        </button>
      </div>
      <div class="minimum_list">
        <div>
          <img src="{{ URL::asset('frontend/images/project/detail/down-arrow.svg')}}" alt="down-arrow" />
          <div><b>Minimum Deposit</b> - 25$</div>
        </div>

        <div>
          <img src="{{ URL::asset('frontend/images/project/detail/up-arrow.svg')}}" alt="up-arrow" />
          <div><b>Minimum Withdrawal</b> - 2$</div>
        </div>

        <div>
          <img src="{{ URL::asset('frontend/images/project/detail/money.svg')}}" alt="money" />
          <div><b>Income Returns</b> -</div>
        </div>
        <p>3.3% ~ 6.2 % daily 1~ 30 days (capital returned )</p>

        <div>
          <img src="{{ URL::asset('frontend/images/project/detail/calendar.svg')}}" alt="calendar" />
          <div><b>Affiliate Income</b> - 5% -15%</div>
        </div>
        <ol>
          <li>3% - 2% - 1% ( 24h plan )</li>
          <li>4% - 3% - 2% ( 7 day plan )</li>
          <li>5% - 3% - 3% ( 15 day plan )</li>
          <li>7% - 4% - 4% ( 30 day plan )</li>
        </ol>
      </div>
    </div>
    <div class="withraw_fee">
      <div>Withdrawal fee - 5% + 1</div>
      <div>Arrival Time - Instant</div>
    </div>
    <hr />
    <div class="high_lights_list">
      <h3 class="fontcolor">HighLights :</h3>
      <ul>
        <li><b>Trusting Score</b> - 40%</li>
        <li><b>Running days</b> - 19</li>
        <li><b>Current status</b>- Paying</li>
        <li><b>Project Insurance</b> - 50% + 35% + 20% + 10%</li>
      </ul>
    </div>
    <div class="cashback_ad">
      <div>
        <img src="{{ URL::asset('frontend/images/project/detail/return.png')}}" alt="return" />
        <div>25 Days</div>
        <div>Capital Return</div>
      </div>
      <div>
        <img src="{{ URL::asset('frontend/images/project/detail/cashback.png')}}" alt="cashback" />
        <div>Cashback-50%</div>
        <div>From Referral</div>
      </div>
      <div>
        <img src="{{ URL::asset('frontend/images/project/detail/insurance.png')}}" alt="insurance" width="80px" />
        <div>Under</div>
        <div>Insurance</div>
      </div>
    </div>
  </section>

  <hr />

  <section class="project_highlights">
    <div>
      <h3>Facts about Mine Bubble</h3>
      <div style="padding: 10px 20px">
        <b>RN - https://minebubble.net/?ref=WalletgrowX2023</b><br /><br />
        <b>minebubble.net</b> is a quite young and fast growing company in cryptocurrency mining world. Our company
        owns two new Mining Data Centers intended to Bitcoin and altcoins mining. Our mining data centres provide
        optimal Mining Rigs operating conditions, constant temperature, and they are secured and protected.
        Cryptocurrency is the most promising product to date, therefore, mining a cryptocurrency is for us a guarantee
        of stability in the face of any economic changes. We strongly believe that cooperation with us will be the
        most perspective and favourable to you. <br /><br />
        Our team has put great efforts to provide our clients with a comprehensible profit making investment platform
        and would take extra steps to make sure everyone gets top quality service. Attracting of private investments
        will allow us to buy more actively capacities for a mining of cryptocurrencies that will increase in turn
        earnings capitalization of <b>minebubble.net</b> at many times. <b>minebubble.net</b>, in turn, will make the
        stably payments of fixed profit to its investors. We are heavily investing in the best available hardware to
        stay at the edge of technology. The hardware depends on the algorithm used by a coin. For example, to mine
        cryptocurrencies Bitcoin, Bitcoin Cash with the SHA256 algorithm, Litecoin with the Scrypt algorithm we use
        application-specific integrated circuits (ASICs). They are designed to provide mining power at incredibly high
        speeds and use very little electricity. For coins resistant to ASIC such as Monero we use graphics processors
        (GPUs). Best coins to mine on GPU: Monero, Ethereum, Dogecoin. <br /><br />
        We are a team of mining experts with extensive knowledge of the digital currency sector. A serious approach to
        work, which consists in officially registered activities and intelligently chosen staff and management are the
        important factors of our success and prosperity. In addition, we are able to analyze the market and develop
        new approaches and algorithms of mining. <br /><br />
        <b>minebubble.net</b> is founded on the principle that Blockchain technology and Cryptocurrencies are changing
        the fundamental structure of not only our economy and banking systems, but also the way we connect and engage
        as human beings. We move further into a world that fully implements the utility of Blockchain technology and
        Cryptocurrencies. We believe in a 'decentralized future'. Join us on this journey!
      </div>
      <div class="project_description">
        <img src="{{ URL::asset('frontend/images/project/detail/minebubble/01.jpg')}}" alt="minebubble_1"
          width="100%" />
        <img src="{{ URL::asset('frontend/images/project/detail/minebubble/02.jpg')}}" alt="minebubble_2"
          width="100%" />
        <img src="{{ URL::asset('frontend/images/project/detail/minebubble/03.jpg')}}" alt="minebubble_3"
          width="100%" />
      </div>
    </div>
  </section>

  <section class="reviews">
    <div class="accept_pay">
      <div>
        <div style="width: 40%">Accept Payment:</div>
        <div>
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="a" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="b" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="c" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="d" />
        </div>
      </div>
      <div>
        <div style="width: 40%">Social Media:</div>
        <div>
          <img src="{{ URL::asset('frontend/images/project/detail/social/telegram-svg.png')}}" alt="telegram-svg" />
          <img src="{{ URL::asset('frontend/images/project/detail/social/email-svg.png')}}" alt="email-svg" />
        </div>
      </div>
    </div>
    <div class="rating_review">
      <div class="rate_btn">
        <h3 class="fontcolor">Ratings & Reviews</h3>
        <button>Rate Product</button>
      </div>
      <div class="review_graph">
        <div class="review_star">
          <div>Very Good</div>
          <div>
            <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt="star-green" />
            <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt="star-green" />
            <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt="star-green" />
            <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt="star-green" />
            <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt="star-green" />
          </div>
          <div>5,000 ratings and 375 reviews</div>
        </div>
        <div class="graph">
          <div>
            <span>5</span>
            <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt="star-green" />
            <div>
              <div class="bar-5"></div>
            </div>
            <span>2000</span>
          </div>
          <div>
            <span>4</span>
            <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt="star-green" />
            <div>
              <div class="bar-4"></div>
            </div>
            <span>1000</span>
          </div>
          <div>
            <span>3</span>
            <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt="star-green" />
            <div>
              <div class="bar-3"></div>
            </div>
            <span>500</span>
          </div>
          <div>
            <span>2</span>
            <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt="star-green" />
            <div>
              <div class="bar-2"></div>
            </div>
            <span>1000</span>
          </div>
          <div>
            <span>1</span>
            <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt="star-green" />
            <div>
              <div class="bar-1"></div>
            </div>
            <span>500</span>
          </div>
        </div>
      </div>
    </div>
    <div style="padding: 10px">
      <h4>Payment Proofs</h4>
      <div class="payment_proofs">
        <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="a" />
        <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="b" />
        <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="c" />
        <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="d" />
      </div>
      <div class="payment_review">
        <div>
          <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt="star-green" />
          <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt="star-green" />
          <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt="star-green" />
          <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt="star-green" />
          <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt="star-green" />
        </div>
        <div>Nice Project</div>
      </div>
      <!-- <div>Ahmed Khan: American</div>
        <div>
          <button>Like - 101</button>
          <button>Unlike - 23</button>
        </div>
        <div>
          <span>Verified Review : Feb 2023</span>
        </div> -->
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