<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick-theme.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/project/project.css')}}" />

  <title>Mila Finance - Project Detail</title>
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
      <h1 class="fontcolor">Mila Finance</h1>
      <div class="project_info_rating">
        <div>
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <span>3.5</span>
        </div>
        <img src="{{ URL::asset('frontend/images/project/insurance.png')}}" alt="detail01" />
      </div>
    </div>

    <div class="detail_images">
      <img src="{{ URL::asset('frontend/images/project/startfrom/17.jpg')}}" alt="detail_rec_03" width="80%" />
      <img src="{{ URL::asset('frontend/images/project/startfrom/17.jpg')}}" alt="detail_rec_03" width="80%" />
      <img src="{{ URL::asset('frontend/images/project/startfrom/17.jpg')}}" alt="detail_rec_03" width="80%" />
      <img src="{{ URL::asset('frontend/images/project/startfrom/17.jpg')}}" alt="detail_rec_03" width="80%" />
      <img src="{{ URL::asset('frontend/images/project/startfrom/17.jpg')}}" alt="detail_rec_03" width="80%" />
      <img src="{{ URL::asset('frontend/images/project/startfrom/17.jpg')}}" alt="detail_rec_03" width="80%" />
    </div>
    <div class="detail_people">
      <img src="{{ URL::asset('frontend/images/project/detail/up.svg')}}" alt="up" width="50%" />
      <div>3000+ registered last 30 days</div>
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
        <button>Started : .08.11.2023</button>
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
          <div><b>Minimum Deposit</b> -</div>
        </div>
        <p>
          USD $5.00; USDT $10.00; USDC $10.00; BTC 0.001; ETH 0.015; LTC 0.1; TRX 100.00; DOGE 100.00; BNB 0.05; MATIC
          10.00; DASH 0.5; BCH 0.1; SOLANA BEP20 0.5; RUB 1000.00
        </p>

        <div>
          <img src="{{ URL::asset('frontend/images/project/detail/up-arrow.svg')}}" alt="up-arrow" />
          <div><b>Minimum Withdrawal</b> -</div>
        </div>
        <p>
          USD $1.00; USDT $10.00; USDC $10.00; BTC 0.001; ETH 0.01; LTC 0.1; TRX 50.00; DOGE 50.00; BNB 0.01; MATIC
          5.00; DASH 0.1; BCH 0.05; SOLANA BEP20 0.5; RUB 1000.00
        </p>

        <div>
          <img src="{{ URL::asset('frontend/images/project/detail/money.svg')}}" alt="money" />
          <div><b>Income Returns</b> -</div>
        </div>
        <p>3.3 % for daily (capital can be withdrawn at anytime )</p>

        <div>
          <img src="{{ URL::asset('frontend/images/project/detail/calendar.svg')}}" alt="calendar" />
          <div><b>Affiliate Income</b> - 5% + 1% + 1%</div>
        </div>
      </div>
    </div>
    <div class="withraw_fee">
      <div>Withdrawal fee - 0 (no fee)</div>
      <div>Arrival Time - 24 hours</div>
    </div>
    <hr />
    <div class="high_lights_list">
      <h3 class="fontcolor">HighLights :</h3>
      <ul>
        <li><b>Trusting Score</b> - 70%</li>
        <li><b>Running days</b> - 15</li>
        <li><b>Current status</b>- Paying</li>
        <li><b>Project Insurance</b> - 50% + 35% + 20% + 10%</li>
      </ul>
    </div>
    <div class="cashback_ad">
      <div>
        <img src="{{ URL::asset('frontend/images/project/detail/return.png')}}" alt="return" />
        <div>30Days</div>
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
      <h3>Facts about Mila Finance</h3>
      <div style="padding: 10px 20px">
        Discover Mila Finance: Where Dreams Take Flight?
        <br /><br />
        In the vast realm of finance, Mila Finance stands as a beacon of brilliance, illuminating the path to
        financial freedom.
        <br /><br />
        Experience Daily Profits at 3.3%!
        <br />
        Witness your investments soar with a remarkable daily yield of 3.3%. Join us on this exciting journey,
        embracing the possibilities that lie ahead. Every day counts, and every moment matters. Let's soar together!.
        <br /><br />
        Endless Streams of Income, Like Stars in the Sky :
        <br />
        Have you ever dreamed of unending prosperity? At Mila Finance, dreams transform into reality. Our platform
        offers endless streams of income, twinkling like stars in the boundless night sky. Your dreams, our
        commitment.
        <br /><br />
        Flexible Withdrawals, Your Funds at Your Fingertips :
        <br />
        At Mila Finance, convenience is key. Enjoy hassle-free and transparent withdrawals. Your funds are ready for
        withdrawal whenever you wish. Your financial freedom, your terms.
        <br /><br />
        Mila Finance: A Fortress of Stability and Trust:
        <br />
        We are not just a platform; we are your trustworthy partner in financial success. Mila Finance embodies
        stability, reliability, and trust. Your dreams find a home here, and together, we build a future of financial
        strength.
        <br /><br />
        Your journey towards financial prosperity begins here and now. Embrace the future you deserve. Join Mila
        Finance, where your dreams take flight and your success knows no bounds.
      </div>
      <div class="project_description">
        <img src="{{ URL::asset('frontend/images/project/detail/mila_finance/1.jpg')}}" alt="mila_finance_1"
          width="100%" />
        <img src="{{ URL::asset('frontend/images/project/detail/mila_finance/2.jpg')}}" alt="mila_finance_2"
          width="100%" />
        <img src="{{ URL::asset('frontend/images/project/detail/mila_finance/3.jpg')}}" alt="mila_finance_3"
          width="100%" />
        <img src="{{ URL::asset('frontend/images/project/detail/mila_finance/4.jpg')}}" alt="mila_finance_4"
          width="100%" />
      </div>
    </div>
  </section>

  <section class="reviews">
    <div class="accept_pay">
      <div>
        <div style="width: 40%">Accept Payment:</div>
        <div>
          <img src="{{ URL::asset('frontend/images/project/detail/coins/bitcoin.png')}}" alt="bitcoin" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/ethereum.png')}}" alt="ethereum" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/bitcoin_cash.png')}}" alt="bitcoin cash" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/litecoin.png')}}" alt="litecoin" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/dogecoin.png')}}" alt="dogecoin" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/usdt.png')}}" alt="tether" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/tron.png')}}" alt="tron" />
        </div>
      </div>
      <div>
        <div style="width: 40%">Social Media:</div>
        <div>
          <img src="{{ URL::asset('frontend/images/project/detail/social/telegram-svg.png')}}" alt="telegram-svg" />
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
        <img src="{{ URL::asset('frontend/images/project/detail/a.png')}}" alt="a" />
        <img src="{{ URL::asset('frontend/images/project/detail/b.png')}}" alt="b" />
        <img src="{{ URL::asset('frontend/images/project/detail/c.png')}}" alt="c" />
        <img src="{{ URL::asset('frontend/images/project/detail/d.png')}}" alt="d" />
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