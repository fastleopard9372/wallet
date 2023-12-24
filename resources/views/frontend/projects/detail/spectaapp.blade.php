<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick-theme.css')}}" />
    <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick.css')}}" />
    <link rel="stylesheet" href="{{ URL::asset('frontend/css/project/project.css')}}" />

    <title>Project Detail</title>
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
        <h1 class="fontcolor">Specta App</h1>
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
            <span>3.2</span>
          </div>
          <img src="{{ URL::asset('frontend/images/project/insurance.png')}}" alt
="detail01" />
        </div>
      </div>

      <div class="detail_images">
        <img src="{{ URL::asset('frontend/images/project/detail_rec/07.png')}}" alt
="detail_rec_07" width="80%" />
        <img src="{{ URL::asset('frontend/images/project/detail_rec/07.png')}}" alt
="detail_rec_07" width="80%" />
        <img src="{{ URL::asset('frontend/images/project/detail_rec/07.png')}}" alt
="detail_rec_07" width="80%" />
        <img src="{{ URL::asset('frontend/images/project/detail_rec/07.png')}}" alt
="detail_rec_07" width="80%" />
        <img src="{{ URL::asset('frontend/images/project/detail_rec/07.png')}}" alt
="detail_rec_07" width="80%" />
        <img src="{{ URL::asset('frontend/images/project/detail_rec/07.png')}}" alt
="detail_rec_07" width="80%" />
      </div>
      <div class="detail_people">
        <img src="{{ URL::asset('frontend/images/project/detail/up.svg')}}" alt
="up" width="50%" />
        <div>2700+ registered last 30 days</div>
      </div>
      <hr />
    </section>

    <section class="project_cashback">
      <div class="cashback">
        <h3 style="padding: 5px; border-radius: 3px">CashBack</h3>
        <div id="instance_tool">
          <span>50% Instant</span>
          <img src="{{ URL::asset('frontend/images/project/question-svgrepo-com.svg')}}" alt
="question-svgrepo-com" />
          <div class="tool_text_i">
            Wallet Grow will distribute 50% of refferal commissions within 24 hours to the investors who registered and
            invested with our company affiliate link.
          </div>
        </div>
        <div id="last_tool">
          <span>20% Later</span>
          <img src="{{ URL::asset('frontend/images/project/question-svgrepo-com.svg')}}" alt
="question-svgrepo-com" />
          <div class="tool_text_l">
            20% will be distribute again to the investors, at end of the project (must bought an insurance for receiving
            cashback).
          </div>
        </div>
      </div>
      <hr style="height: 8px" />
      <div class="withraw_content">
        <div class="started">
          <button>Started : 16.03.2023</button>
          <button class="paying">
            <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path
                  d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                  stroke="#01cc01"
                  stroke-width="2"
                ></path>
                <path
                  d="M9 12L10.6828 13.6828V13.6828C10.858 13.858 11.142 13.858 11.3172 13.6828V13.6828L15 10"
                  stroke="#01cc01"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
              </g>
            </svg>
            Paying
          </button>
        </div>
        <div class="minimum_list">
          <div>
            <img src="{{ URL::asset('frontend/images/project/detail/down-arrow.svg')}}" alt
="down-arrow" />
            <div><b>Minimum Deposit</b> - 5$ (Bep 20)</div>
          </div>

          <div>
            <img src="{{ URL::asset('frontend/images/project/detail/up-arrow.svg')}}" alt
="up-arrow" />
            <div><b>Minimum Withdrawal</b> - 0.5$</div>
          </div>

          <div>
            <img src="{{ URL::asset('frontend/images/project/detail/money.svg')}}" alt
="money" />
            <div><b>Income Returns</b> -2% for daily</div>
          </div>

          <div>
            <img src="{{ URL::asset('frontend/images/project/detail/calendar.svg')}}" alt
="calendar" />
            <div><b>Affiliate Income</b> -5% + 2%</div>
          </div>
        </div>
      </div>
      <div class="withraw_fee">
        <div>Withdrawal fee - 0</div>
        <div>Arrival Time - 24 hours</div>
      </div>
      <hr />
      <div class="high_lights_list">
        <h3 class="fontcolor">HighLights :</h3>
        <ul>
          <li><b>Trusting Score</b> - 65%</li>
          <li><b>Running days</b> - 252</li>
          <li><b>Current status</b>- Paying</li>
          <li><b>Project Insurance</b> - 35% + 20% + 10%</li>
        </ul>
      </div>
      <div class="cashback_ad">
        <div>
          <img src="{{ URL::asset('frontend/images/project/detail/return.png')}}" alt
="return" />
          <div>50 days</div>
          <div>Capital Return</div>
        </div>
        <div>
          <img src="{{ URL::asset('frontend/images/project/detail/cashback.png')}}" alt
="cashback" />
          <div>Cashback-50%</div>
          <div>From Referral</div>
        </div>
        <div>
          <img src="{{ URL::asset('frontend/images/project/detail/insurance.png')}}" alt
="insurance" width="80px" />
          <div>Under</div>
          <div>Insurance</div>
        </div>
      </div>
    </section>

    <hr />

    <section class="project_highlights">
      <div>
        <h3>Facts about Specta App</h3>
        <div style="padding: 10px 20px">
          We introduce Specta Chain, which is a public blockchain protocol and smart contract platform that operates on
          the PoSA (Proof of Stake Authority) consensus, which is a hybrid consensus mechanism between Pos (Proof of
          Stake) and PoA (Proof of Authority).<br /><br />
          Specta Chain is designed to support WEB3, Dapps, and Defi, and features EVM Compatibility, Advanced Security,
          Scalability, Low Memory Consumption, Deflation, Low Cost, Easy Integration, and Transaction Speed up to 50,000
          TPS. <br /><br />
          Specta Chain's features also support DAO (Decentralized Autonomous Organization) to optimize decision-making
          within the blockchain network. Specta Chain can be an attractive option for companies and individuals looking
          for a fast, secure, and cost-effective blockchain platform. <br /><br />
          Specta Explorer is a blockchain browser that allows users to search, API, and analyze the Specta Chain
          blockchain. Every transaction, block generated, and smart contract entered will be displayed in real time on
          Specta Explorer. <br /><br />
          Specta Chain uses the SAFE 20 token standard, which allows for the creation of crypto tokens with lower costs
          and faster than other blockchain platforms. <br /><br />
          Specta Chain also offers various applications, including Specta Wallet for digital wallets, Specta Swap for
          crypto trading, and Specta POS for crypto payments at points of sale. <br /><br />
          Specta Chain also offers a high level of security through advanced encryption technology and strong risk
          management systems, providing optimal protection for users and their transactions. <br /><br />
          The platform also offers high transaction speeds and low costs, providing optimal transaction experiences for
          users. <br /><br />
          Overall, Specta Chain offers cutting-edge blockchain technology designed specifically to meet the needs of
          SMEs and other industries. <br /><br />
          With its comprehensive features and applications, as well as strong support for decentralized application
          development, Specta Chain can help SMEs and other industries improve their business efficiency, transparency,
          and security. <br /><br />
          With all its features and advantages, Specta Chain can be the right choice for companies or developers who
          want to build secure, fast, and environmentally friendly blockchain applications. <br /><br />
        </div>
        <div class="project_description">
          <img src="{{ URL::asset('frontend/images/project/detail/spectaapp/01.jpg')}}" alt
="spectaapp_1" width="100%" />
          <img src="{{ URL::asset('frontend/images/project/detail/spectaapp/02.jpg')}}" alt
="spectaapp_2" width="100%" />
          <img src="{{ URL::asset('frontend/images/project/detail/spectaapp/03.jpg')}}" alt
="spectaapp_3" width="100%" />
          <img src="{{ URL::asset('frontend/images/project/detail/spectaapp/04.jpg')}}" alt
="spectaapp_4" width="100%" />
        </div>
      </div>
    </section>

    <section class="reviews">
      <div class="accept_pay">
        <div>
          <div style="width: 40%">Accept Payment:</div>
          <div>
            <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt
="a" />
            <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt
="b" />
            <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt
="c" />
            <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt
="d" />
          </div>
        </div>
        <div>
          <div style="width: 40%">Social Media:</div>
          <div>
            <img src="{{ URL::asset('frontend/images/project/detail/social/facebook-svg.png')}}" alt
="facebook-svg" />
            <img src="{{ URL::asset('frontend/images/project/detail/social/instagram-svg.png')}}" alt
="instagram-svg" />
            <img src="{{ URL::asset('frontend/images/project/detail/social/telegram-svg.png')}}" alt
="telegram-svg" />
            <img src="{{ URL::asset('frontend/images/project/detail/social/x-svg.png')}}" alt
="x-svg" />
            <img src="{{ URL::asset('frontend/images/project/detail/social/discord-svg.png')}}" alt
="discord-svg" />
            <img src="{{ URL::asset('frontend/images/project/detail/social/youtube-svg.png')}}" alt
="youtube-svg" />
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
              <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt
="star-green" />
              <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt
="star-green" />
              <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt
="star-green" />
              <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt
="star-green" />
              <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt
="star-green" />
            </div>
            <div>5,000 ratings and 375 reviews</div>
          </div>
          <div class="graph">
            <div>
              <span>5</span>
              <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt
="star-green" />
              <div>
                <div class="bar-5"></div>
              </div>
              <span>2000</span>
            </div>
            <div>
              <span>4</span>
              <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt
="star-green" />
              <div>
                <div class="bar-4"></div>
              </div>
              <span>1000</span>
            </div>
            <div>
              <span>3</span>
              <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt
="star-green" />
              <div>
                <div class="bar-3"></div>
              </div>
              <span>500</span>
            </div>
            <div>
              <span>2</span>
              <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt
="star-green" />
              <div>
                <div class="bar-2"></div>
              </div>
              <span>1000</span>
            </div>
            <div>
              <span>1</span>
              <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt
="star-green" />
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
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt
="a" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt
="b" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt
="c" />
          <img src="{{ URL::asset('frontend/images/project/detail/coins/x.png')}}" alt
="d" />
        </div>
        <div class="payment_review">
          <div>
            <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt
="star-green" />
            <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt
="star-green" />
            <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt
="star-green" />
            <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt
="star-green" />
            <img src="{{ URL::asset('frontend/images/project/star-green.svg')}}" alt
="star-green" />
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
