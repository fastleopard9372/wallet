<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

  <link rel="preload" href="{{ URL::asset('frontend/fonts/Outfit-Regular.woff2') }}" as="font" type="font/woff2"
    crossorigin />
  <link rel="preload" href="{{ URL::asset('frontend/fonts/RedHatDisplay-Black.woff2') }}" as="font" type="font/woff2"
    crossorigin />
  <link rel="preload" href="{{ URL::asset('frontend/fonts/RedHatDisplay-Bold.woff2') }}" as="font" type="font/woff2"
    crossorigin />
  <link href="{{ URL::asset('frontend/css/main.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick-theme.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/project/project.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/mobile_navbar.css') }}" />

  <title>Projects</title>
</head>

<body>
  <section class="project_header">
    <div class="project_navbar">
      <div>
        <svg fill="#333333" height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" stroke="#ffffff">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <g>
              <g>
                <path
                  d="M224.98,255.988L394.488,86.48c9.571-9.571,14.843-22.297,14.843-35.831c0-13.535-5.271-26.26-14.843-35.831 c-19.758-19.756-51.904-19.758-71.662,0l-205.34,205.34c-19.757,19.757-19.757,51.904,0,71.662l205.34,205.339 c9.571,9.571,22.295,14.842,35.83,14.842c13.535,0,26.26-5.271,35.831-14.841c9.571-9.571,14.843-22.296,14.843-35.831 c0-13.535-5.271-26.26-14.843-35.831L224.98,255.988z M380.062,482.734c-5.717,5.718-13.321,8.867-21.406,8.867 c-8.085,0-15.688-3.149-21.405-8.867l-205.34-205.339c-11.803-11.804-11.803-31.01,0-42.813l205.341-205.34 c5.901-5.901,13.653-8.853,21.405-8.853c7.752,0,15.505,2.952,21.405,8.854c5.718,5.718,8.868,13.32,8.868,21.406 s-3.15,15.689-8.868,21.407l-176.719,176.72c-3.983,3.984-3.983,10.442,0,14.425l176.719,176.721 c5.718,5.718,8.868,13.321,8.868,21.406C388.929,469.413,385.78,477.016,380.062,482.734z">
                </path>
              </g>
            </g>
            <g>
              <g>
                <path
                  d="M175.503,219.486c-3.955-4.014-10.413-4.059-14.424-0.105l-14.248,14.043c-4.013,3.954-4.06,10.413-0.105,14.424 c1.996,2.025,4.631,3.039,7.265,3.039c2.586,0,5.172-0.977,7.159-2.934l14.248-14.043 C179.411,229.956,179.458,223.498,175.503,219.486z">
                </path>
              </g>
            </g>
            <g>
              <g>
                <path
                  d="M359.702,37.694c-3.955-4.013-10.415-4.057-14.424-0.104L187.835,192.773c-4.012,3.954-4.058,10.413-0.104,14.424 c1.996,2.025,4.631,3.039,7.265,3.039c2.585,0,5.172-0.977,7.159-2.935L359.597,52.119 C363.61,48.164,363.657,41.707,359.702,37.694z">
                </path>
              </g>
            </g>
          </g>
        </svg>
        <span class="ft20" style="color:#111">Trending</span>
      </div>
      <svg fill="#333333" height="28px" width="28px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.066 492.066" xml:space="preserve">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <g>
            <g id="Icons_38_">
              <path
                d="M485.128,100.778c-7.25-10.449-19.168-16.69-31.902-16.69H212.607c-8.981,0-16.272,7.288-16.272,16.278 c0,8.987,7.291,16.275,16.272,16.275h240.618c2.051,0,3.99,1,5.167,2.71c1.178,1.685,1.448,3.846,0.731,5.77L414.03,246.495 c-0.906,2.454-3.29,4.108-5.899,4.108H155.277L115.001,78.741c-5.01-21.338-23.812-36.25-45.747-36.25h-44.84 C10.92,42.491,0,53.42,0,66.906C0,80.395,10.92,91.32,24.414,91.32h43.38l54.232,231.405 c4.908,20.918,23.108,35.574,44.474,36.146c-12.56,9.117-20.791,23.812-20.791,40.516c0,27.722,22.46,50.189,50.181,50.189 c27.706,0,50.176-22.468,50.176-50.189c0-16.642-8.198-31.281-20.661-40.412h93.623c-12.481,9.131-20.679,23.77-20.679,40.412 c0,27.722,22.471,50.189,50.175,50.189c27.723,0,50.198-22.468,50.198-50.189c0-16.642-8.204-31.281-20.678-40.412h22.757 c13.495,0,24.416-10.928,24.416-24.415c0-13.486-10.92-24.414-24.416-24.414H169.232l-6.326-26.99h245.226 c16.131,0,30.771-10.164,36.399-25.313l45.11-121.396C494.059,124.523,492.374,111.182,485.128,100.778z">
              </path>
            </g>
          </g>
        </g>
      </svg>
    </div>
    <div class="selects">
      <div>Crypto Project</div>
      <div>NFT</div>
      <div>AI Bot</div>
    </div>
    <div class="search_bar">
      <img src="{{ URL::asset('frontend/images/logo.svg') }}" alt="logo" />
      <div class="search_input">
        <svg width="16px" height="16px" viewBox="0 0 17 17" id="meteor-icon-kit__solid-search-s" fill="none"
          xmlns="http://www.w3.org/2000/svg" class="mr10">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M4.46655 10.4121C3.85368 9.4204 3.5 8.2515 3.5 7C3.5 3.41015 6.4101 0.5 10 0.5C13.5899 0.5 16.5 3.41015 16.5 7C16.5 10.5899 13.5899 13.5 10 13.5C8.7485 13.5 7.5796 13.1463 6.5879 12.5335L3.06066 16.0607C2.47487 16.6464 1.52513 16.6464 0.93934 16.0607C0.35355 15.4749 0.35355 14.5251 0.93934 13.9393L4.46655 10.4121zM10 10.5C11.933 10.5 13.5 8.933 13.5 7C13.5 5.067 11.933 3.5 10 3.5C8.067 3.5 6.5 5.067 6.5 7C6.5 8.933 8.067 10.5 10 10.5z"
              fill="#758CA3"></path>
          </g>
        </svg>
        <input type="text" name="searchproject" id="searchproject" style="flex-grow: 1; width: 70%" />
        <svg fill="#333333" width="20px" height="20px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg"
          stroke="#333333" class="mr5">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <path
              d="M960.315 96.818c-186.858 0-338.862 152.003-338.862 338.861v484.088c0 186.858 152.004 338.862 338.862 338.862 186.858 0 338.861-152.004 338.861-338.862V435.68c0-186.858-152.003-338.861-338.861-338.861M427.818 709.983V943.41c0 293.551 238.946 532.497 532.497 532.497 293.55 0 532.496-238.946 532.496-532.497V709.983h96.818V943.41c0 330.707-256.438 602.668-580.9 627.471l-.006 252.301h242.044V1920H669.862v-96.818h242.043l-.004-252.3C587.438 1546.077 331 1274.116 331 943.41V709.983h96.818ZM960.315 0c240.204 0 435.679 195.475 435.679 435.68v484.087c0 240.205-195.475 435.68-435.68 435.68-240.204 0-435.679-195.475-435.679-435.68V435.68C524.635 195.475 720.11 0 960.315 0Z"
              fill-rule="evenodd"></path>
          </g>
        </svg>
        <svg width="20px" height="20px" viewBox="0 -2 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"
          fill="#333333" stroke="#333333" class="mr5">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <title>camera</title>
            <desc>Created with Sketch Beta.</desc>
            <defs></defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
              <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-256.000000, -465.000000)"
                fill="#333333">
                <path
                  d="M272,487 C268.687,487 266,484.313 266,481 C266,477.687 268.687,475 272,475 C275.313,475 278,477.687 278,481 C278,484.313 275.313,487 272,487 L272,487 Z M272,473 C267.582,473 264,476.582 264,481 C264,485.418 267.582,489 272,489 C276.418,489 280,485.418 280,481 C280,476.582 276.418,473 272,473 L272,473 Z M286,489 C286,490.104 285.104,491 284,491 L260,491 C258.896,491 258,490.104 258,489 L258,473 C258,471.896 258.896,471 260,471 L264,471 L265,469 C265.707,467.837 265.896,467 267,467 L277,467 C278.104,467 278.293,467.837 279,469 L280,471 L284,471 C285.104,471 286,471.896 286,473 L286,489 L286,489 Z M284,469 L281,469 L280,467 C279.411,465.837 279.104,465 278,465 L266,465 C264.896,465 264.53,465.954 264,467 L263,469 L260,469 C257.791,469 256,470.791 256,473 L256,489 C256,491.209 257.791,493 260,493 L284,493 C286.209,493 288,491.209 288,489 L288,473 C288,470.791 286.209,469 284,469 L284,469 Z"
                  id="camera" sketch:type="MSShapeGroup"></path>
              </g>
            </g>
          </g>
        </svg>
      </div>
    </div>
  </section>

  <section class="project_main">
    <div class="project_main_header">
      <div class="main_header_marquee">
        <div>Save your Time</div>
        <div>&#8226;</div>
        <div>Latest projects</div>
        <div>&#8226;</div>
        <div>Quick Return</div>
        <div>&#8226;</div>
        <div>Save your Time</div>
        <div>&#8226;</div>
        <div>Latest projects</div>
        <div>&#8226;</div>
        <div>Quick Return</div>
        <div>&#8226;</div>
      </div>
    </div>
    <div class="p10">
      <div class="project_ad">
        <img src="{{ URL::asset('frontend/images/project/advertisement/1_1.png') }}" alt="1_1" />
        <img src="{{ URL::asset('frontend/images/project/advertisement/1_2.png') }}" alt="1_2" />
        <img src="{{ URL::asset('frontend/images/project/advertisement/1_3.png') }}" alt="1_3" />
        <img src="{{ URL::asset('frontend/images/project/advertisement/1_4.png') }}" alt="1_4" />
        <img src="{{ URL::asset('frontend/images/project/advertisement/1_5.png') }}" alt="1_5" />
        <img src="{{ URL::asset('frontend/images/project/advertisement/1_6.png') }}" alt="1_6" />
      </div>
    </div>
    <div id="recommends" class="recommends">
      <a href="{{route('detail_rec')}}">
        <img src="{{ URL::asset('frontend/images/project/products/Recommended.svg') }}" alt="Recommended" />
        <div>Recommend</div>
      </a>
      <a href="{{route('startfrom')}}">
        <img src="{{ URL::asset('frontend/images/project/products/Startfrom10.svg') }}" alt="Startfrom10" />
        <div>From 10$</div>
      </a>
      <a href="{{route('highratings')}}">
        <img src="{{ URL::asset('frontend/images/project/products/HighRatings.svg') }}" alt="HighRatings" />
        <div>High Ratings</div>
      </a>
      <a href="{{route('insured')}}">
        <img src="{{ URL::asset('frontend/images/project/products/UnderInsurance.svg') }}" alt="UnderInsurance" />
        <div>Insured</div>
      </a>
      <a href="{{route('mining')}}">
        <img src="{{ URL::asset('frontend/images/project/products/Cashback.svg') }}" alt="Cashback" />
        <div>Mining</div>
      </a>
      <a href="{{route('freeearnings')}}">
        <img src="{{ URL::asset('frontend/images/project/products/FreeEarnings.svg') }}" alt="FreeEarnings" />
        <div>Free Earnings</div>
      </a>
      <a href="{{route('nft')}}">
        <img src="{{ URL::asset('frontend/images/project/products/NFT.svg') }}" alt="NFT" />
        <div>NFT</div>
      </a>
      <a href="{{route('aibot')}}">
        <img src="{{ URL::asset('frontend/images/project/products/AITradeBot.svg') }}" alt="AITradeBot" />
        <div>AI Trade Bot</div>
      </a>
    </div>
    <div class="project_logo">
      <img src="{{ URL::asset('frontend/images/project/x-wallet.jpg') }}" alt="x-wallet" width="100%" />
    </div>
    <div class="sample_product">
      <div>
        <img src="{{ URL::asset('frontend/images/project/ad2/01.png') }}" alt="ad2_01" />
      </div>
      <div>
        <img src="{{ URL::asset('frontend/images/project/ad2/02.png') }}" alt="ad2_02" />
      </div>
      <div>
        <img src="{{ URL::asset('frontend/images/project/ad2/03.png') }}" alt="ad2_03" />
      </div>
      <div>
        <img src="{{ URL::asset('frontend/images/project/ad2/04.png') }}" alt="ad2_04" />
      </div>
      <div>
        <img src="{{ URL::asset('frontend/images/project/ad2/05.png') }}" alt="ad2_05" />
      </div>
    </div>
  </section>

  <section class="ro1">
    <div class="investment">
      <div class="title">
        <h2 class="ro1_title">RO1 - Return of Investment</h2>
        <svg width="28px" height="28px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--emojione"
          preserveAspectRatio="xMidYMid meet" fill="#2a55e5">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <circle cx="32" cy="32" r="30" fill="#lrs;0;[0]"></circle>
            <path fill="#ffffff" d="M33.7 16L49 32L33.7 48V37.4H15V27.1h18.7z"></path>
          </g>
        </svg>
      </div>
      <div id="ro1_ad" class="ro1_ad">
        <div>
          <img src="{{ URL::asset('frontend/images/project/sample1.png') }}" alt="sample111" />
          <div>Low Return</div>
        </div>
        <div>
          <img src="{{ URL::asset('frontend/images/project/sample1.png') }}" alt="sample111" />
          <div>Medium Return</div>
        </div>
        <div>
          <img src="{{ URL::asset('frontend/images/project/sample1.png') }}" alt="sample111" />
          <div>High Return</div>
        </div>
      </div>
    </div>
    <div class="latest">
      <div class="title">
        <h2>Latest projects</h2>
        <svg width="28px" height="28px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--emojione"
          preserveAspectRatio="xMidYMid meet" fill="#2a55e5">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <circle cx="32" cy="32" r="30" fill="#lrs;0;[0]"></circle>
            <path fill="#ffffff" d="M33.7 16L49 32L33.7 48V37.4H15V27.1h18.7z"></path>
          </g>
        </svg>
      </div>
      <div class="section_padding">
        <div class="ad_images3">
          <img src="{{ URL::asset('frontend/images/project/advertisement/2_1.jpg') }}" alt="2_1" style="width: 100%" />
          <img src="{{ URL::asset('frontend/images/project/advertisement/2_2.jpg') }}" alt="2_2" style="width: 100%" />
          <img src="{{ URL::asset('frontend/images/project/advertisement/2_3.jpg') }}" alt="2_3" style="width: 100%" />
          <img src="{{ URL::asset('frontend/images/project/advertisement/2_4.jpg') }}" alt="2_4" style="width: 100%" />
          <img src="{{ URL::asset('frontend/images/project/advertisement/2_5.jpg') }}" alt="2_5" style="width: 100%" />
          <img src="{{ URL::asset('frontend/images/project/advertisement/2_6.jpg') }}" alt="2_6" style="width: 100%" />
        </div>
      </div>
    </div>
  </section>

  <section class="budget">
    <div class="budget_title">
      <img src="{{ URL::asset('frontend/images/project/budget.png') }}" alt="budget" width="100%" />
    </div>
    <div class="ad_images2">
      <img src="{{ URL::asset('frontend/images/project/ad2/06.png') }}" alt="sample06" width="80%" />
      <img src="{{ URL::asset('frontend/images/project/ad2/07.png') }}" alt="sample06" width="80%" />
      <img src="{{ URL::asset('frontend/images/project/ad2/08.png') }}" alt="sample06" width="80%" />
      <img src="{{ URL::asset('frontend/images/project/ad2/09.png') }}" alt="sample06" width="80%" />
      <img src="{{ URL::asset('frontend/images/project/ad2/10.png') }}" alt="sample06" width="80%" />
      <img src="{{ URL::asset('frontend/images/project/ad2/11.png') }}" alt="sample06" width="80%" />
      <img src="{{ URL::asset('frontend/images/project/ad2/12.png') }}" alt="sample06" width="80%" />
      <img src="{{ URL::asset('frontend/images/project/ad2/13.png') }}" alt="sample06" width="80%" />
      <img src="{{ URL::asset('frontend/images/project/ad2/14.png') }}" alt="sample06" width="80%" />
    </div>
  </section>

  <section class="discount">
    <div class="title">
      <h2>Discounts for You</h2>
      <svg width="28px" height="28px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--emojione"
        preserveAspectRatio="xMidYMid meet" fill="#2a55e5">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <circle cx="32" cy="32" r="30" fill="#lrs;0;[0]"></circle>
          <path fill="#ffffff" d="M33.7 16L49 32L33.7 48V37.4H15V27.1h18.7z"></path>
        </g>
      </svg>
    </div>
    <div class="discount_min">
      <div>
        <img src="{{ URL::asset('frontend/images/project/ad2/15.jpg') }}" alt="15" width="100%" />
        <h3>Meme Season</h3>
        <div>Min 50% Cashback</div>
      </div>
      <div>
        <img src="{{ URL::asset('frontend/images/project/ad2/16.jpg') }}" alt="16" width="100%" />
        <h3>Nexium</h3>
        <div>Start from 5$</div>
      </div>
      <div>
        <img src="{{ URL::asset('frontend/images/project/ad2/17.jpg') }}" alt="15" width="100%" />
        <h3>Banter bits</h3>
        <div>Start from 5$</div>
      </div>
      <div>
        <img src="{{ URL::asset('frontend/images/project/ad2/18.jpg') }}" alt="15" width="100%" />
        <h3>Bit Lotto</h3>
        <div>Start From 10$</div>
      </div>
      <div>
        <img src="{{ URL::asset('frontend/images/project/ad2/19.jpg') }}" alt="15" width="100%" />
        <h3>Planetary asset</h3>
        <div>Start From 30$</div>
      </div>
      <div>
        <img src="{{ URL::asset('frontend/images/project/ad2/20.jpg') }}" alt="15" width="100%" />
        <h3>Intelid</h3>
        <div>Start From 35$</div>
      </div>
    </div>
  </section>

  <section class="section_padding">
    <div class="ad_panel_3">
      <img src="{{ URL::asset('frontend/images/project/advertisement/3_1.jpg') }}" alt="3_1" width="100%" />
      <img src="{{ URL::asset('frontend/images/project/advertisement/3_2.jpg') }}" alt="3_2" width="100%" />
      <img src="{{ URL::asset('frontend/images/project/advertisement/3_3.jpg') }}" alt="3_3" width="100%" />
      <img src="{{ URL::asset('frontend/images/project/advertisement/3_4.jpg') }}" alt="3_4" width="100%" />
      <img src="{{ URL::asset('frontend/images/project/advertisement/3_5.jpg') }}" alt="3_5" width="100%" />
      <img src="{{ URL::asset('frontend/images/project/advertisement/3_6.jpg') }}" alt="3_6" width="100%" />
      <img src="{{ URL::asset('frontend/images/project/advertisement/3_7.jpg') }}" alt="3_7" width="100%" />
    </div>
  </section>

  <section id="rated" class="rated">
    <div class="title">
      <h2>Top Rated</h2>
      <svg width="28px" height="28px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--emojione"
        preserveAspectRatio="xMidYMid meet" fill="#2a55e5">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <circle cx="32" cy="32" r="30" fill="#lrs;0;[0]"></circle>
          <path fill="#ffffff" d="M33.7 16L49 32L33.7 48V37.4H15V27.1h18.7z"></path>
        </g>
      </svg>
    </div>
    <div class="rating_list">
      <div>
        <div class="pos_rel">
          <img src="{{ URL::asset('frontend/images/project/toprated/01.jpg') }}" alt="toprated_01" width="100%" />
          <div class="rating_star">3.5 ⭐</div>
        </div>
        <div class="rate_border">
          <h3>Wilton</h3>
          <div>Start from 5$</div>
          <div>Earn 3%-5% daily</div>
        </div>
      </div>
      <div>
        <div class="pos_rel">
          <img src="{{ URL::asset('frontend/images/project/toprated/02.jpg') }}" alt="toprated_02" width="100%" />
          <div class="rating_star">4.1 ⭐</div>
        </div>
        <div class="rate_border">
          <h3>Alien Limited</h3>
          <div>Start from 10$</div>
          <div>Earn 2.5%-4.33% daily</div>
        </div>
      </div>
      <div>
        <div class="pos_rel">
          <img src="{{ URL::asset('frontend/images/project/toprated/03.jpg') }}" alt="toprated_03" width="100%" />
          <div class="rating_star">4.2 ⭐</div>
        </div>
        <div class="rate_border">
          <h3 class="city_trade">City Trade Market</h3>
          <div>Start from 10$</div>
          <div>Earn 3%-7% daily</div>
        </div>
      </div>
      <div>
        <div class="pos_rel">
          <img src="{{ URL::asset('frontend/images/project/toprated/04.jpg') }}" alt="toprated_04" width="100%" />
          <div class="rating_star">4.7 ⭐</div>
        </div>
        <div class="rate_border">
          <h3>Slots Market</h3>
          <div>Start from 10$</div>
          <div>Earn upto 3.65% daily</div>
        </div>
      </div>
      <div>
        <div class="pos_rel">
          <img src="{{ URL::asset('frontend/images/project/toprated/05.jpg') }}" alt="toprated_05" width="100%" />
          <div class="rating_star">3.3 ⭐</div>
        </div>
        <div class="rate_border">
          <h3>Galacti Cash</h3>
          <div>Start from 20$</div>
          <div>Earn from 6% daily</div>
        </div>
      </div>
      <div>
        <div class="pos_rel">
          <img src="{{ URL::asset('frontend/images/project/toprated/06.jpg') }}" alt="toprated_06" width="100%" />
          <div class="rating_star">3.5 ⭐</div>
        </div>
        <div class="rate_border">
          <h3>Mine bubbl</h3>
          <div>Start from 25$</div>
          <div>Earn upto 6.7% daily</div>
        </div>
      </div>
    </div>
  </section>

  <div class="section_padding">
    <div class="ad_panel_4">
      <img src="{{ URL::asset('frontend/images/project/advertisement/4_1.jpg') }}" alt="4_1" width="100%" />
      <img src="{{ URL::asset('frontend/images/project/advertisement/4_2.jpg') }}" alt="4_2" width="100%" />
      <img src="{{ URL::asset('frontend/images/project/advertisement/4_3.jpg') }}" alt="4_3" width="100%" />
      <img src="{{ URL::asset('frontend/images/project/advertisement/4_4.jpg') }}" alt="4_4" width="100%" />
      <img src="{{ URL::asset('frontend/images/project/advertisement/4_5.jpg') }}" alt="4_5" width="100%" />
      <img src="{{ URL::asset('frontend/images/project/advertisement/4_6.jpg') }}" alt="4_6" width="100%" />
    </div>
  </div>

  <section id="recommend_list" class="recommend_list">
    <div class="recom">
      <div><img src="{{ URL::asset('frontend/images/project/recommend/recom1.jpg') }}" alt="recom1" width="100%" />
      </div>
      <div>
        <h3>Gio Gamer</h3>
        <div>
          <div style="display:flex;">
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
          </div>
          <div class="ins_available">
            <img src="{{ URL::asset('frontend/images/project/plus.svg') }}" alt="plus" />
            &nbsp;Insurance Available
          </div>
        </div>
        <div>Start From 10$</div>
      </div>
    </div>
    <div class="recom">
      <div><img src="{{ URL::asset('frontend/images/project/recommend/recom2.jpg') }}" alt="recom2" width="100%" />
      </div>
      <div>
        <h3>Royal Q Bot</h3>
        <div>
          <div style="display:flex;">
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
          </div>
          <div class="ins_available">
            <img src="{{ URL::asset('frontend/images/project/plus.svg') }}" alt="plus" />
            &nbsp;Insurance Available
          </div>
        </div>
        <div>Start From 120$</div>
      </div>
    </div>
    <div class="recom">
      <div><img src="{{ URL::asset('frontend/images/project/recommend/recom3.jpg') }}" alt="recom3" width="100%" />
      </div>
      <div>
        <h3>X - Land</h3>
        <div>
          <div style="display:flex;">
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
          </div>
          <div class="ins_available">
            <img src="{{ URL::asset('frontend/images/project/plus.svg') }}" alt="plus" />
            &nbsp;Insurance Available
          </div>
        </div>
        <div>Start From 20$</div>
      </div>
    </div>
    <div class="recom">
      <div><img src="{{ URL::asset('frontend/images/project/recommend/recom4.jpg') }}" alt="recom4" width="100%" />
      </div>
      <div>
        <h3>Ufmaa</h3>
        <div>
          <div style="display:flex;">
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
          </div>
          <div class="ins_available">
            <img src="{{ URL::asset('frontend/images/project/plus.svg') }}" alt="plus" />
            &nbsp;Insurance Available
          </div>
        </div>
        <div>Free + investment</div>
      </div>
    </div>
    <div class="recom bottom_border">
      <div><img src="{{ URL::asset('frontend/images/project/recommend/recom5.jpg') }}" alt="recom5" width="100%" />
      </div>
      <div>
        <h3>Elixxon</h3>
        <div>
          <div style="display:flex;">
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
          </div>
          <div class="ins_available">
            <img src="{{ URL::asset('frontend/images/project/plus.svg') }}" alt="plus" />
            &nbsp;Insurance Available
          </div>
        </div>
        <div>Start From 50$</div>
      </div>
    </div>
    <div class="recom bottom_border">
      <div><img src="{{ URL::asset('frontend/images/project/recommend/recom6.jpg') }}" alt="recom6" width="100%" />
      </div>
      <div>
        <h3>Cointech2u bot</h3>
        <div>
          <div style="display:flex;">
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
            <img src="{{ URL::asset('frontend/images/project/star.svg') }}" alt="star" />
          </div>
          <div class="ins_available">
            <img src="{{ URL::asset('frontend/images/project/plus.svg') }}" alt="plus" />
            &nbsp;Insurance Available
          </div>
        </div>
        <div>Start From 300$</div>
      </div>
    </div>
  </section>

  <div class="post_your_project">
    <div>
      <h2>Post Your Project</h2>
      <svg fill="#ffffff" width="30px" height="30px" viewBox="0 0 32 32" version="1.1"
        xmlns="http://www.w3.org/2000/svg" stroke="#ffffff" class="ml10">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <title>round-plus</title>
          <path
            d="M0 16q0 3.264 1.28 6.208t3.392 5.12 5.12 3.424 6.208 1.248 6.208-1.248 5.12-3.424 3.392-5.12 1.28-6.208-1.28-6.208-3.392-5.12-5.088-3.392-6.24-1.28q-3.264 0-6.208 1.28t-5.12 3.392-3.392 5.12-1.28 6.208zM4 16q0-3.264 1.6-6.016t4.384-4.352 6.016-1.632 6.016 1.632 4.384 4.352 1.6 6.016-1.6 6.048-4.384 4.352-6.016 1.6-6.016-1.6-4.384-4.352-1.6-6.048zM8 16q0 0.832 0.576 1.44t1.44 0.576h4v4q0 0.832 0.576 1.408t1.408 0.576 1.408-0.576 0.608-1.408v-4h4q0.8 0 1.408-0.576t0.576-1.44-0.576-1.408-1.408-0.576h-4v-4q0-0.832-0.608-1.408t-1.408-0.608-1.408 0.608-0.576 1.408v4h-4q-0.832 0-1.44 0.576t-0.576 1.408z">
          </path>
        </g>
      </svg>
    </div>
  </div>

  <div class="headline">
    <img src="{{ URL::asset('frontend/images/project/headline.jpg') }}" alt="headline" width="100%" />
  </div>

  <div class="disclaimer">
    <h4>Disclaimer:</h4>
    The information provided here is ponzi and non-ponzi type projects. Some programs, investments or any listings
    here may be illegal depending on your country's laws. Reviews and ratings posted according to public opinions.
    <br />
    <br />
    If you scared about working above any projects, don't worry. Wallet Grow developed a system for those kind of
    investors to earn money for long term without any risks. Which is called <a
      href="/investment/wallet/">"X-wallet"</a>,
    powered by wallet grow. You can directly invest your funds to <a href="/investment/wallet/">X-wallet</a>, Wallet
    Grow team
    will invest your funds to various crypto sectors and our team will take over time and risks management. Daily
    income can be withdrawn at any time. <a href="/investment/wallet/">X-wallet</a> is high trusted and reliable
    program.
  </div>

  <div style="margin-top: 55px; background-color: #ebfdfd"></div>

  @include('frontend.layouts.mobile-navbar')


  <a id="scrollToTop">
    <svg class="icon">
      <use xlink:href="{{ URL::asset('frontend/icons/sprite.svg#icons-arrow-down') }}"></use>
    </svg>
  </a>

  <script src="{{ URL::asset('frontend/jquery/jquery-3.6.4.min.js') }}"></script>
  <script src="{{ URL::asset('frontend/js/slick.js') }}"></script>
  <script src="{{ URL::asset('frontend/js/project.js') }}"></script>
</body>

</html>