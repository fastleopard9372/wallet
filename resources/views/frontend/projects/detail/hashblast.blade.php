<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick-theme.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/project/project.css')}}" />

  <title>Hash Blast - Project Detail</title>
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
      <h1 class="fontcolor">Hash Blast</h1>
      <div class="project_info_rating">
        <div>
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <img src="{{ URL::asset('frontend/images/project/star.svg')}}" alt="star" />
          <span>4</span>
        </div>
        <img src="{{ URL::asset('frontend/images/project/insurance.png')}}" alt="detail01" />
      </div>
    </div>

    <div class="detail_images">
      <img src="{{ URL::asset('frontend/images/project/startfrom/08.png')}}" alt="detail_rec_03" width="80%" />
      <img src="{{ URL::asset('frontend/images/project/startfrom/08.png')}}" alt="detail_rec_03" width="80%" />
      <img src="{{ URL::asset('frontend/images/project/startfrom/08.png')}}" alt="detail_rec_03" width="80%" />
      <img src="{{ URL::asset('frontend/images/project/startfrom/08.png')}}" alt="detail_rec_03" width="80%" />
      <img src="{{ URL::asset('frontend/images/project/startfrom/08.png')}}" alt="detail_rec_03" width="80%" />
      <img src="{{ URL::asset('frontend/images/project/startfrom/08.png')}}" alt="detail_rec_03" width="80%" />
    </div>
    <div class="detail_people">
      <img src="{{ URL::asset('frontend/images/project/detail/up.svg')}}" alt="up" width="50%" />
      <div>3500+ registered last 30 days</div>
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
        <button>Started : .13.11.2023</button>
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
          <div><b>Minimum Deposit</b> - 0.1$</div>
        </div>

        <div>
          <img src="{{ URL::asset('frontend/images/project/detail/up-arrow.svg')}}" alt="up-arrow" />
          <div><b>Minimum Withdrawal</b> - 10$</div>
        </div>

        <div>
          <img src="{{ URL::asset('frontend/images/project/detail/money.svg')}}" alt="money" />
          <div><b>Income Returns</b> -</div>
        </div>
        <p>1% ~ 3% daily for 6 months (capital included)</p>

        <div>
          <img src="{{ URL::asset('frontend/images/project/detail/calendar.svg')}}" alt="calendar" />
          <div><b>Affiliate Income</b> - 10% + 5% + 3% + 2%</div>
        </div>
      </div>
    </div>
    <div class="withraw_fee">
      <div>Withdrawal fee - 0(no fee)</div>
      <div>Arrival Time - Instant</div>
    </div>
    <hr />
    <div class="high_lights_list">
      <h3 class="fontcolor">HighLights :</h3>
      <ul>
        <li><b>Trusting Score</b> - 80%</li>
        <li><b>Running days</b> - 69</li>
        <li><b>Current status</b>- Paying</li>
        <li><b>Project Insurance</b> - 50% + 35% + 20% + 10%</li>
      </ul>
    </div>
    <div class="cashback_ad">
      <div>
        <img src="{{ URL::asset('frontend/images/project/detail/return.png')}}" alt="return" />
        <div>50 Days</div>
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
      <h3>Facts about Hash blast</h3>
      <div style="padding: 10px 20px">
        We are a team of experienced professionals in the field of cryptocurrency mining and blockchain technology,
        providing our users with the opportunity to earn through cloud mining of cryptocurrencies. <br /><br />
        We provide a simple and convenient registration process on our platform that takes just a few clicks. We also
        offer a bonus of free gigahashes to new users, which can be used to get acquainted with our platform without
        investing their own funds. <br /><br />
        We guarantee a fixed profit ranging from 1% to 3% per day for six months. In addition, we provide a unique
        partnership program that allows our users to earn additional income by attracting new users to our platform.
        Our program consists of four levels, and we pay up to 20% of the investments made by users registered through
        your referral link. <br /><br />
        We also provide our clients with the opportunity to participate in contests and giveaways on our platform to
        earn additional bonuses. We regularly update our services and features to ensure maximum profit and comfort
        for our clients. <br /><br />
        We also provide our clients with the opportunity to participate in contests and giveaways on our platform to
        earn additional bonuses. We regularly update our services and features to ensure maximum profit and comfort
        for our clients. <br /><br />
        We are confident that our platform is the best choice for those who want to earn on cryptocurrencies. We are
        always ready to answer any questions and ensure full transparency in our work with clients. In addition to
        cloud mining, we are also excited to announce the upcoming launch of the Trine (TRN) token, which will be used
        within a blockchain platform specializing in providing financial services. The Trine (TRN) token provides a
        high level of security and confidentiality, ensured by modern encryption methods and data protection. We are
        confident that Trine (TRN) can become popular among users looking for fast and affordable ways to carry out
        financial operations. <br /><br />
      </div>
      <div class="project_description">
        <img src="{{ URL::asset('frontend/images/project/detail/hashblast/01.jpg')}}" alt="hashblast_1" width="100%" />
        <img src="{{ URL::asset('frontend/images/project/detail/hashblast/02.jpg')}}" alt="hashblast_2" width="100%" />
        <img src="{{ URL::asset('frontend/images/project/detail/hashblast/03.jpg')}}" alt="hashblast_3" width="100%" />
        <img src="{{ URL::asset('frontend/images/project/detail/hashblast/04.jpg')}}" alt="hashblast_4" width="100%" />
        <img src="{{ URL::asset('frontend/images/project/detail/hashblast/05.jpg')}}" alt="hashblast_5" width="100%" />
      </div>
    </div>
  </section>

  <section class="reviews">
    <div class="accept_pay">
      <div>
        <div style="width: 40%">Accept Payment:</div>
        <div>
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="btc" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="ltc" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="trx" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="doge" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="dash" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="bch" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="xlm" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="zec" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="xrp" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="eth" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="etc" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="matic" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="ada" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="bnb" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="sol" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="dot" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="shib" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="dai" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="uni" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="atom" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="xmr" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt="link" />
        </div>
      </div>
      <div>
        <div style="width: 40%">Social Media:</div>
        <div>
          <img src="{{ URL::asset('frontend/images/project/detail/social/facebook-svg.png')}}" alt="facebook-svg" />
          <img src="{{ URL::asset('frontend/images/project/detail/social/instagram-svg.png')}}" alt="instagram-svg" />
          <img src="{{ URL::asset('frontend/images/project/detail/social/telegram-svg.png')}}" alt="telegram-svg" />
          <img src="{{ URL::asset('frontend/images/project/detail/social/x-svg.png')}}" alt="x-svg" />
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