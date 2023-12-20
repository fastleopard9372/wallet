@extends('frontend.layouts.master_home')
@section('content')
<main class="main">
  <section class="section section--md relative overflow-hidden !pb-80">
    <div class="container">
      <div class="sm:max-w-[610px] xl:ml-120 relative z-page">
        <div class="welcome">
          <div class="welcome_cont">
            <div class="animation_area">
              <div class="imie">
                <div>I&nbsp;&nbsp;&nbsp;</div>
                <div>M&nbsp;&nbsp;&nbsp;</div>
                <div>I&nbsp;&nbsp;&nbsp;</div>
                <div>E&nbsp;&nbsp;&nbsp;</div>
              </div>
              <div id="typewriter_1"></div>
            </div>
            @if (!auth()->guard('web')->check())
            <div class="authpanel">
              <a href="{{ route('front.signin') }}" class="button-21" role="button">Login</a>
              <a href="{{ route('front.signup')}}" class="button-21" role="button"> Register</a>
            </div>
            @endif
            <h1 class="wow fadeInRight" data-wow-delay="0.1s" style="
                      visibility: visible;
                      animation-delay: 0.1s;
                      animation-name: fadeInRight;
                      text-align: center;
                    ">
              <span class="corn">
                Wallet Grow
                <b class="corn-bot"></b>
                <b class="corn-top"></b>
              </span>
            </h1>

            <div class="welcome_txt wow fadeInRight" data-wow-delay="0.2s"
              style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight">
              <p>
                We are a team of specialists in various fields of crypto world. We have united
                the most popular sectors in a single platform, which will become a gateway to
                the world of technology and finance.
              </p>
            </div>
          </div>
        </div>

        <div class="welcome_img wow fadeIn" data-wow-delay="0.5s"
          style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn">
          <div class="welcome_img_in">
            <img src="{{ URL::asset('frontend/img/header2.gif') }}"
              alt="Bitcoin Mixing graphic making Bitcoin transactions anonymous" data-xblocker="passed"
              style="visibility: visible" />
          </div>
        </div>
      </div>

      <div class="absolute left-1/2 bottom-0 -ml-[23%] lg:-ml-196 max-w-[70%] pointer-events-none until-sm:hidden">
      </div>
      <div class="absolute left-0 right-0 bottom-0 h-[288px] bg-gradient-to-t from-white pointer-events-none"></div>
    </div>
  </section>

  <section class="section section--md">
    <div class="container">
      <div class="coin">
        <div id="coinmarketcap-widget-marquee" coins="1,1027,825,1958,2,512,5426,4687,2010,1831" currency="USD"
          theme="light" transparent="true" show-symbol-logo="true">
          <div class="coin-marquee-wrapper coin-marquee-wrapper--light coin-marquee-wrapper--transparent">
            <div class="coin-marquee-header">
              <div class="coin-marquee-header-signature">
                <a href="https://coinmarketcap.com/" target="_blank">
                  <div class="coin-marquee-signature__power-by">Powered by</div>
                  <svg width="94" height="16" viewBox="0 0 94 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M13.7573 9.56098C13.4773 9.73737 13.1475 9.75922 12.8968 9.61834C12.5784 9.43922 12.4033 9.01971 12.4033 8.43629V6.69073C12.4033 5.84781 12.0688 5.248 11.5095 5.08605C10.5616 4.81093 9.84878 5.96644 9.58087 6.40039L7.90918 9.10088V5.8002C7.89038 5.04078 7.64284 4.58654 7.17283 4.44956C6.86183 4.35902 6.39652 4.39532 5.94452 5.08449L2.19928 11.0763C1.69788 10.1279 1.4365 9.0719 1.43785 8C1.43785 4.39063 4.34098 1.45444 7.90918 1.45444C11.4774 1.45444 14.3801 4.39063 14.3801 8C14.3801 8.00624 14.3817 8.01171 14.3821 8.01756C14.3821 8.0238 14.3809 8.02927 14.3813 8.03551C14.415 8.73444 14.1878 9.29054 13.7573 9.56137V9.56098ZM15.818 8.00039V8V7.98205L15.8176 7.9641C15.7976 3.56839 12.258 0 7.90879 0C3.54822 0 0 3.58868 0 8C0 12.4109 3.54822 16 7.90918 16C9.91027 16 11.8201 15.2421 13.2862 13.8665C13.5776 13.5934 13.5948 13.1333 13.3245 12.839C13.196 12.6978 13.0159 12.6141 12.8248 12.6068C12.6336 12.5995 12.4476 12.6691 12.3085 12.8C11.1202 13.9212 9.54576 14.5459 7.90918 14.5456C5.99857 14.5456 4.27949 13.703 3.09388 12.3668L6.47133 6.96351V9.45444C6.47133 10.6509 6.93704 11.0377 7.32754 11.1508C7.71844 11.264 8.31575 11.1867 8.94283 10.1721L10.8006 7.17151C10.8601 7.07473 10.9149 6.99122 10.9651 6.91902V8.43629C10.9651 9.55473 11.4147 10.4492 12.1985 10.8898C12.9051 11.287 13.7934 11.2511 14.5172 10.7961C15.3946 10.2439 15.8673 9.22654 15.818 8.00039ZM26.8293 5.26712C27.0192 5.38224 27.1837 5.63824 27.1837 5.86888C27.1837 6.24 26.8673 6.54712 26.5128 6.54712C26.4243 6.54712 26.3357 6.52176 26.2598 6.496C25.8418 6.18888 25.3103 5.984 24.7534 5.984C23.4373 5.984 22.5259 7.05912 22.5259 8.39024C22.5259 9.72176 23.4373 10.784 24.7534 10.784C25.4114 10.784 25.9938 10.5151 26.4368 10.1058C26.5512 10.0238 26.6883 9.97908 26.8293 9.97776C27.1837 9.97776 27.4622 10.2591 27.4622 10.6178C27.4622 10.848 27.3228 11.0529 27.1457 11.168C26.5128 11.7058 25.6523 12.064 24.7663 12.064C22.7413 12.064 21.0955 10.4 21.0955 8.352C21.0955 6.304 22.7409 4.64 24.7663 4.64C25.5258 4.64 26.2468 4.87024 26.8293 5.26712ZM30.5322 6.816C31.9117 6.816 33.0762 7.98088 33.0762 9.41424C33.0762 10.848 31.9117 12.064 30.5322 12.064C29.0893 12.064 27.8868 10.848 27.8868 9.41424C27.8868 7.98088 29.0893 6.816 30.5322 6.816ZM30.5193 10.784C31.1272 10.784 31.6457 10.208 31.6457 9.42712C31.6457 8.64663 31.1272 8.16 30.5193 8.16C29.8613 8.16 29.3168 8.63376 29.3168 9.42712C29.3168 10.208 29.8613 10.784 30.5193 10.784ZM33.9437 11.2702V7.60976C33.9437 7.21288 34.2602 6.88 34.6527 6.88C35.0451 6.88 35.3741 7.21288 35.3741 7.60976V11.2702C35.3741 11.6671 35.0451 12 34.6527 12C34.2602 12 33.9437 11.6671 33.9437 11.2702ZM33.8301 5.49776C33.8301 5.024 34.1968 4.64 34.6527 4.64C35.1207 4.64 35.5007 5.024 35.5007 5.49776C35.5007 5.95824 35.1207 6.32976 34.6527 6.32976C34.1968 6.32976 33.8301 5.95824 33.8301 5.49776ZM38.1151 9.28624V11.2702C38.1151 11.6671 37.7861 12 37.3932 12C37.0012 12 36.6843 11.6671 36.6843 11.2702V7.44312C36.6843 7.136 36.9377 6.88 37.2417 6.88C37.5452 6.88 37.7861 7.136 37.7861 7.44312C38.3681 6.90576 38.8742 6.816 39.3552 6.816C40.7856 6.816 41.4185 7.89112 41.4185 9.10712V11.2702C41.4185 11.6671 41.0895 12 40.6971 12C40.3046 12 39.9881 11.6671 39.9881 11.2702V9.28624C39.9881 8.65912 39.9121 8.13424 39.0136 8.13424C38.3807 8.13424 38.1147 8.65912 38.1147 9.28624H38.1151ZM46.0705 10.0418C45.906 10.0418 45.7924 9.96488 45.7035 9.86224L44.0326 8.05776V11.2702C44.0326 11.6671 43.7036 12 43.3111 12C42.9187 12 42.6022 11.6671 42.6022 11.2702V4.90927C42.6441 4.79948 42.7506 4.72767 42.8685 4.72971C42.9947 4.72971 43.0957 4.83239 43.1721 4.90927L45.83 7.89151C45.906 7.98127 46.0071 8.03239 46.058 8.03239C46.1085 8.03239 46.2096 7.98127 46.2855 7.8919L48.9439 4.90927C49.0199 4.83239 49.1209 4.72971 49.2474 4.72971C49.3739 4.72971 49.4754 4.80663 49.5134 4.90927V11.2702C49.5134 11.6671 49.1969 12 48.8044 12C48.412 12 48.083 11.6671 48.083 11.2702V8.05776L46.4125 9.86224C46.3235 9.96488 46.2096 10.0418 46.0705 10.0418ZM52.9504 10.784C53.5959 10.784 54.1399 10.208 54.1399 9.42712C54.1399 8.64663 53.5833 8.13424 52.9504 8.13424C52.3174 8.13424 51.811 8.65912 51.811 9.42712C51.811 10.1822 52.3174 10.784 52.9504 10.784ZM54.4693 11.4369L54.4434 11.2702C54.1654 11.8205 53.279 12.064 52.7095 12.064C51.3676 12.064 50.3806 10.848 50.3806 9.41424C50.3806 7.98088 51.393 6.816 52.7855 6.816C53.026 6.816 53.8234 6.88 54.4434 7.60976L54.4689 7.44312C54.4689 7.136 54.7094 6.88 55.0133 6.88C55.3169 6.88 55.5699 7.136 55.5699 7.44312V11.4369C55.5699 11.744 55.3169 12 55.0129 12C54.7094 12 54.4685 11.744 54.4685 11.4369H54.4693ZM59.5388 8.13424H59.3872C58.4883 8.18576 58.3113 8.69776 58.3113 9.28624V11.2702C58.3113 11.6671 57.9823 12 57.5898 12C57.1973 12 56.8809 11.6671 56.8809 11.2702V7.44312C56.8809 7.136 57.1339 6.88 57.4378 6.88C57.7418 6.88 57.9823 7.136 57.9823 7.44312C58.5138 6.944 58.9442 6.84176 59.3872 6.816H59.5263C59.8682 6.816 60.1843 7.11024 60.1843 7.48176C60.1843 7.82712 59.8807 8.13424 59.5388 8.13424ZM65.0517 10.9378C65.1152 11.04 65.1531 11.1551 65.1531 11.2831C65.1531 11.6542 64.8112 12 64.4442 12C64.1912 12 63.9757 11.808 63.8112 11.6031L62.1662 9.696V11.2702C62.1662 11.6671 61.8368 12 61.4443 12C61.0519 12 60.7354 11.6671 60.7354 11.2702V5.45951C60.7354 5.06224 61.0519 4.72976 61.4443 4.72976C61.8368 4.72976 62.1658 5.06224 62.1658 5.45951V9.08176L63.8112 7.264C63.9757 7.072 64.1782 6.88 64.4317 6.88C64.7861 6.88 65.1152 7.21288 65.1152 7.584C65.1152 7.69912 65.0897 7.81424 65.0262 7.91688L63.7227 9.33737L65.0517 10.9374V10.9378ZM66.8307 8.99592H68.8937C68.8937 8.3849 68.4093 8.08163 67.8622 8.08163C67.315 8.08163 66.8307 8.39771 66.8307 8.99592ZM69.7291 9.87512H66.8307C66.8307 10.7329 67.6532 10.8609 68.0202 10.8609C68.2866 10.8609 68.6661 10.8098 68.9571 10.6814C69.0456 10.6178 69.1976 10.5662 69.3241 10.5662C69.6406 10.5662 69.9062 10.8355 69.9062 11.1555C69.9062 11.3729 69.7671 11.5649 69.5901 11.6671C69.1471 11.9871 68.5772 12.064 68.0332 12.064C66.5902 12.064 65.3878 11.2835 65.3878 9.47824C65.3878 8.05776 66.1218 6.816 67.8307 6.816C69.2102 6.816 70.2606 7.712 70.2861 9.312C70.2861 9.61912 70.0331 9.87512 69.7291 9.87512ZM73.7105 12.064H73.3181C72.2292 12.064 71.5967 11.5902 71.5967 9.888V8.13424H71.2297C70.8877 8.13424 70.5842 7.82712 70.5842 7.48176C70.5842 7.11024 70.8877 6.816 71.2297 6.816H71.5967V5.45912C71.5967 5.06224 71.9131 4.72937 72.3056 4.72937C72.6977 4.72937 73.0271 5.06224 73.0271 5.45912V6.816H73.6216C73.9636 6.816 74.2675 7.11024 74.2675 7.48176C74.2675 7.82712 73.9636 8.13424 73.6216 8.13424H73.0271V9.60624C73.0271 10.5791 73.0776 10.784 73.5081 10.784H73.7105C74.0521 10.784 74.3431 11.0658 74.3431 11.424C74.3431 11.7698 74.0521 12.064 73.7105 12.064ZM80.6409 5.26712C80.8305 5.38224 80.9954 5.63824 80.9954 5.86888C80.9954 6.24 80.6789 6.54712 80.3244 6.54712C80.2359 6.54712 80.147 6.52176 80.0714 6.496C79.6535 6.18888 79.122 5.984 78.565 5.984C77.249 5.984 76.3372 7.05912 76.3372 8.39024C76.3372 9.72176 77.2486 10.784 78.565 10.784C79.223 10.784 79.8055 10.5151 80.2485 10.1058C80.3629 10.0238 80.5 9.97908 80.6409 9.97776C80.9954 9.97776 81.2735 10.2591 81.2735 10.6178C81.2735 10.848 81.1344 11.0529 80.9574 11.168C80.3245 11.7058 79.4635 12.064 78.5776 12.064C76.5526 12.064 74.9071 10.4 74.9071 8.352C74.9071 6.304 76.5522 4.64 78.5776 4.64C79.3374 4.64 80.0585 4.87024 80.6409 5.26712ZM84.2679 10.784C84.9134 10.784 85.4574 10.208 85.4574 9.42712C85.4574 8.64663 84.9004 8.13424 84.2675 8.13424C83.6349 8.13424 83.1285 8.65912 83.1285 9.42712C83.1285 10.1822 83.6349 10.784 84.2675 10.784H84.2679ZM85.7864 11.4369L85.7614 11.2702C85.4829 11.8205 84.5969 12.064 84.027 12.064C82.6855 12.064 81.6981 10.848 81.6981 9.41424C81.6981 7.98088 82.711 6.816 84.103 6.816C84.3435 6.816 85.1409 6.88 85.7614 7.60976L85.7864 7.44312C85.7864 7.136 86.0269 6.88 86.3309 6.88C86.6344 6.88 86.8878 7.136 86.8878 7.44312V11.4369C86.8878 11.744 86.6344 12 86.3309 12C86.0269 12 85.7864 11.744 85.7864 11.4369ZM90.8183 10.784C91.4513 10.784 91.9573 10.1822 91.9573 9.42712C91.9573 8.65912 91.4513 8.13424 90.8183 8.13424C90.1854 8.13424 89.6284 8.64624 89.6284 9.42712C89.6284 10.208 90.1728 10.784 90.8183 10.784ZM89.6284 11.6418V13.4591C89.6284 13.856 89.2994 14.1889 88.9069 14.1889C88.5149 14.1889 88.198 13.856 88.198 13.4591V7.44312C88.198 7.136 88.4514 6.88 88.7553 6.88C89.0589 6.88 89.2998 7.136 89.2998 7.49424C89.8309 6.944 90.4893 6.816 90.9828 6.816C92.3753 6.816 93.3877 7.98088 93.3877 9.41424C93.3877 10.848 92.4007 12.064 91.0588 12.064C90.6413 12.064 90.0209 11.936 89.6284 11.6418Z"
                      fill="black"></path>
                  </svg>
                </a>
              </div>
            </div>
            <div id="coin-marquee-container" class="coin-marquee-container">
              <div class="coin-marquee-container__inner" style="
                        animation-duration: 12s;
                        animation-name: marquee-scroll;
                        animation-timing-function: linear;
                        animation-iteration-count: infinite;
                      ">
                <div class="coin-marquee-item">
                  <a class="coin-marquee-item-inner" href="#" title="X-Wallet">
                    <div class="coin-marquee-item__icon">
                      <img src="{{ URL::asset('frontend/images/slide/01.svg') }}" />
                    </div>
                    <div class="coin-marquee-item-info">
                      <div class="coin-marquee-item-info__row">
                        <div class="coin-marquee-item-name">X-Wallet</div>
                        <div class="coin-marquee-item-price">20$ - 10,000$</div>
                      </div>
                      <div class="coin-marquee-item-info__row">
                        <div class="coin-marquee-item-symbol">&nbsp;</div>
                        <div class="coin-marquee-item-changes coin-marquee-item-changes--up">
                          <span class="coin-marquee-item-changes__icon"></span>1.0% ~ 2.3%
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="coin-marquee-item">
                  <a class="coin-marquee-item-inner" href="#" title="Litecoin">
                    <div class="coin-marquee-item__icon">
                      <img src="{{ URL::asset('frontend/images/slide/02.svg') }}" />
                    </div>

                    <div class="coin-marquee-item-info">
                      <div class="coin-marquee-item-info__row">
                        <div class="coin-marquee-item-name">Xedmex</div>
                        <div class="coin-marquee-item-price">From 10$</div>
                      </div>
                      <div class="coin-marquee-item-info__row">
                        <div class="coin-marquee-item-symbol">&nbsp;</div>
                        <div class="coin-marquee-item-changes coin-marquee-item-changes--up">
                          <span class="coin-marquee-item-changes__icon"></span>1.2% - 5.0%
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="coin-marquee-item">
                  <a class="coin-marquee-item-inner" href="#" title="Stellar">
                    <div class="coin-marquee-item__icon">
                      <img src="{{ URL::asset('frontend/images/slide/03.svg') }}" />
                    </div>

                    <div class="coin-marquee-item-info">
                      <div class="coin-marquee-item-info__row">
                        <div class="coin-marquee-item-name">Eyen</div>
                        <div class="coin-marquee-item-price">From 269$</div>
                      </div>
                      <div class="coin-marquee-item-info__row">
                        <div class="coin-marquee-item-symbol">&nbsp;</div>
                        <div class="coin-marquee-item-changes coin-marquee-item-changes--up">
                          <span class="coin-marquee-item-changes__icon"></span>Upto 2.2%
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="coin-marquee-item">
                  <a class="coin-marquee-item-inner" href="#" title="Tether USDt">
                    <div class="coin-marquee-item__icon">
                      <img src="{{ URL::asset('frontend/images/slide/04.svg') }}" />
                    </div>

                    <div class="coin-marquee-item-info">
                      <div class="coin-marquee-item-info__row">
                        <div class="coin-marquee-item-name">Eggozo Mania</div>
                        <div class="coin-marquee-item-price">From 0.01 bnb</div>
                      </div>
                      <div class="coin-marquee-item-info__row">
                        <div class="coin-marquee-item-symbol">&nbsp;</div>
                        <div class="coin-marquee-item-changes coin-marquee-item-changes--up">
                          <span class="coin-marquee-item-changes__icon"></span>2.7% - 4.0%
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="coin-marquee-item">
                  <a class="coin-marquee-item-inner" href="#" title="X-Wallet">
                    <div class="coin-marquee-item__icon">
                      <img src="{{ URL::asset('frontend/images/slide/01.svg') }}" />
                    </div>
                    <div class="coin-marquee-item-info">
                      <div class="coin-marquee-item-info__row">
                        <div class="coin-marquee-item-name">X-Wallet</div>
                        <div class="coin-marquee-item-price">20$ - 10,000$</div>
                      </div>
                      <div class="coin-marquee-item-info__row">
                        <div class="coin-marquee-item-symbol">&nbsp;</div>
                        <div class="coin-marquee-item-changes coin-marquee-item-changes--up">
                          <span class="coin-marquee-item-changes__icon"></span>1.0% ~ 2.3%
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="coin-marquee-item">
                  <a class="coin-marquee-item-inner" href="#" title="Litecoin">
                    <div class="coin-marquee-item__icon">
                      <img src="{{ URL::asset('frontend/images/slide/02.svg') }}" />
                    </div>

                    <div class="coin-marquee-item-info">
                      <div class="coin-marquee-item-info__row">
                        <div class="coin-marquee-item-name">Xedmex</div>
                        <div class="coin-marquee-item-price">From 10$</div>
                      </div>
                      <div class="coin-marquee-item-info__row">
                        <div class="coin-marquee-item-symbol">&nbsp;</div>
                        <div class="coin-marquee-item-changes coin-marquee-item-changes--up">
                          <span class="coin-marquee-item-changes__icon"></span>1.2% - 5.0%
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="coin-marquee-item">
                  <a class="coin-marquee-item-inner" href="#" title="Stellar">
                    <div class="coin-marquee-item__icon">
                      <img src="{{ URL::asset('frontend/images/slide/03.svg') }}" />
                    </div>

                    <div class="coin-marquee-item-info">
                      <div class="coin-marquee-item-info__row">
                        <div class="coin-marquee-item-name">Eyen</div>
                        <div class="coin-marquee-item-price">From 269$</div>
                      </div>
                      <div class="coin-marquee-item-info__row">
                        <div class="coin-marquee-item-symbol">&nbsp;</div>
                        <div class="coin-marquee-item-changes coin-marquee-item-changes--up">
                          <span class="coin-marquee-item-changes__icon"></span>Upto 2.2%
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="coin-marquee-item">
                  <a class="coin-marquee-item-inner" href="#" title="Tether USDt">
                    <div class="coin-marquee-item__icon">
                      <img src="{{ URL::asset('frontend/images/slide/04.svg') }}" />
                    </div>

                    <div class="coin-marquee-item-info">
                      <div class="coin-marquee-item-info__row">
                        <div class="coin-marquee-item-name">Eggozo Mania</div>
                        <div class="coin-marquee-item-price">From 0.01 bnb</div>
                      </div>
                      <div class="coin-marquee-item-info__row">
                        <div class="coin-marquee-item-symbol">&nbsp;</div>
                        <div class="coin-marquee-item-changes coin-marquee-item-changes--up">
                          <span class="coin-marquee-item-changes__icon"></span>2.7% - 4.0%
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="coinmarketcap-widget-coin-price-block" coins="1,1027,825,512,52,2010,1958,5426,4279" currency="USD"
          theme="light" transparent="true" show-symbol-logo="true" style="overflow: visible; margin-bottom: 18px"></div>
      </div>
      <div class="slideshow">
        <div class="slidecard">
          <div class="banner-img">
            <img src="{{ URL::asset('frontend/images/slide/01.svg') }}" alt="01" />
          </div>
          <div class="card_detail">
            <h3>X-Wallet</h3>
            <p>20$ - 10,000$</p>
          </div>
          <div class="btn-wrapper">
            <div class="btn outline">1.0% ~ 2.3%</div>
          </div>
        </div>
        <div class="slidecard">
          <div class="banner-img">
            <img src="{{ URL::asset('frontend/images/slide/02.svg') }}" alt="01" />
          </div>
          <div class="card_detail">
            <h3>Xedmex</h3>
            <p>From 10$</p>
          </div>
          <div class="btn-wrapper">
            <div class="btn outline">1.2% ~ 5.0%</div>
          </div>
        </div>
        <div class="slidecard">
          <div class="banner-img">
            <img src="{{ URL::asset('frontend/images/slide/03.svg') }}" alt="01" />
          </div>
          <div class="card_detail">
            <h3>Eyen</h3>
            <p>From 269$</p>
          </div>
          <div class="btn-wrapper">
            <div class="btn outline">Upto 2.2%</div>
          </div>
        </div>
        <div class="slidecard">
          <div class="banner-img">
            <img src="{{ URL::asset('frontend/images/slide/04.svg') }}" alt="01" />
          </div>
          <div class="card_detail">
            <h3>Eggozo mania</h3>
            <p>From 0.01 bnb</p>
          </div>
          <div class="btn-wrapper">
            <div class="btn outline">2.7% ~ 4.0%</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section--lg !pt-64">
    <div class="container">
      <div class="text-center">
        <h2 class="text-primary-h1 font-black mb-40" data-aos="fade-up">
          Our <mark class="text-secondary">Advantages</mark>
        </h2>
        <p data-aos="fade-down" data-aos-duration="500" class="text-dark max-w-[770px] mx-auto mb-80">
          Our goal is to make cryptocurrencies easier and more accessible for everyone, so
          that everyone can earn money on the most promising and fast-growing crypto currency
          market. We create products that are necessary and useful to people, taking care of
          our users
        </p>
      </div>
      <div class="grid sm:grid-cols-3 gap-24 md:gap-40 max-w-[1100px] mx-auto">
        <div class="card" data-aos="fade-down" data-aos-duration="1800" style="background: transparent">
          <div class="card__top">
            <div class="aditem anim anim_start">
              <lottie-player loop="" src="{{ URL::asset('frontend/animation/garranty.json') }}" speed="1">
              </lottie-player>
            </div>
          </div>
          <div class="card__title">Investment opportunities</div>
          <div class="card__desc">
            User, who are scared about working on crypto projects, trading, NFT and who don't
            have time to analysis and invest in crypto, They simply can invest with us. Our
            company will take over risk management and Time management with users funds. We
            are providing offers as fixed, flexible and savings.
          </div>
        </div>
        <div class="card" data-aos="fade-up" data-aos-duration="1200" style="background: transparent">
          <div class="card__top">
            <div class="aditem anim anim_start">
              <lottie-player loop="" src="{{ URL::asset('frontend/animation/web-and-mobile-applications.json') }}"
                speed="1"></lottie-player>
            </div>
          </div>
          <div class="card__title">Project Monitoring</div>
          <div class="card__desc">
            For your convenience, we have created a modern website. Our goal is to provide our
            customers with great earning opportunities and convenience and ease of use. Anyone
            can use our platform, regardless of knowledge, education, and experience. Our
            special teams are analyzing everyday about latest crypto earning programs for our
            customers. Simply come , check out the project details and read reviews and start
            your earnings.
          </div>
        </div>
        <div class="card" data-aos="fade-down" data-aos-duration="1800" style="background: transparent">
          <div class="card__top">
            <div class="aditem anim anim_start">
              <lottie-player loop="" src="{{ URL::asset('frontend/animation/security.json') }}" speed="1">
              </lottie-player>
            </div>
          </div>
          <div class="card__title">Insurance policy</div>
          <div class="card__desc">
            For your financial stability, we have implemented an insurance policy for our
            users. According to our company rules and regulations, currently users can claim
            cash refund upto 50% for failure and scam projects. Insurance policy for a safety
            precautions and stresslees work.
          </div>
        </div>
        <div class="card" data-aos="fade-up" data-aos-duration="1200" style="background: transparent">
          <div class="card__top">
            <div class="aditem anim anim_start">
              <lottie-player loop="" src="{{ URL::asset('frontend/animation/fast-exchange.json') }}" speed="1">
              </lottie-player>
            </div>
          </div>
          <div class="card__title">Convenient website</div>
          <div class="card__desc">
            We are the only most most innovative and reliable crypto Earning program in the
            world. We implemented lot of technical strategies and financial stability for our
            users to work for long term. Our service is always available for everyone, from
            anywhere in the world, so that you receive a stable income and be confident in the
            future.
          </div>
        </div>
        <div class="card" data-aos="fade-up" data-aos-duration="1200" style="background: transparent">
          <div class="card__top">
            <div class="aditem anim anim_start">
              <lottie-player loop="" src="{{ URL::asset('frontend/animation/always-close-by.json') }}" speed="1">
              </lottie-player>
            </div>
          </div>
          <div class="card__title">Safe and Secure</div>
          <div class="card__desc">
            The safety and security of our investors funds, as well as their personal data, is
            our main task. A professional team of traders, analysts and cybersecurity
            specialists allows to be confident of success. We guarantee stable profits.
          </div>
        </div>
        <div class="card" data-aos="fade-down" data-aos-duration="1800" style="background: transparent">
          <div class="card__top">
            <div class="aditem anim anim_start">
              <lottie-player loop="" src="{{ URL::asset('frontend/animation/fixed-income.json') }}" speed="1">
              </lottie-player>
            </div>
          </div>
          <div class="card__title">Stable income</div>
          <div class="card__desc">
            We never stand still and carefully study modern technologies and the opportunities
            they open up. By combining 4 areas on one platform, we increase the income of our
            users.
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section--md">
    <div class="container">
      <div class="text-center">
        <h2 data-aos="fade-up" class="text-primary-h1 font-black mb-40">
          How it <mark class="text-secondary">works</mark>
        </h2>
        <p data-aos="fade-down" data-aos-duration="500" class="text-dark max-w-[770px] mx-auto mb-80 bluebold">
          We have created a unified ecosystem consisting of 4 sources of income for company
          and users :
          <b>Monitoring</b>, <b>insurance</b>, <b>investment</b>, and <b>Entertainment</b> -
          which provide constant development of the company and stable earnings. Company will
          distributes benefits and income to users all over the world.
        </p>
      </div>

      <div class="piqs">
        <div class="piqs_item wow fadeInLeft" data-wow-delay="0.2s"
          style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft">
          <div class="piqs_item_icon">
            <img data-src="{{ URL::asset('frontend/img/svg/howto/Investment.svg') }}"
              src="{{ URL::asset('frontend/img/svg/howto/Investment.svg') }}" class="js-img"
              alt="UniJoin uses CoinJoin Technology for the best bitcoin mixer technology" data-aos="fade-right" />
          </div>
          <div class="piqs_item_cont">
            <div class="piqs_item_title">Investment</div>
            <div class="piqs_item_txt">
              We developed a passive income system to all crypto investors in the world.
              Simply invest and earn with X-wallet.
            </div>
          </div>
        </div>
        <div class="piqs_item wow fadeInRight" data-wow-delay="0.2s"
          style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft" data-aos="fade-left">
          <div class="piqs_item_icon">
            <img data-src="{{ URL::asset('frontend/img/svg/howto/Monitoring.svg') }}"
              src="{{ URL::asset('frontend/img/svg/howto/Monitoring.svg') }}" class="js-img"
              alt="You can use UniJoin Bitcoin Mixer in simple steps" />
          </div>
          <div class="piqs_item_cont">
            <div class="piqs_item_title">Monitoring</div>
            <div class="piqs_item_txt">
              Our project hunting teams update everyday latest earnings opportunities and
              platforms to the investors.
            </div>
          </div>
        </div>
        <div class="piqs_item wow fadeInLeft" data-wow-delay="0.4s"
          style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft" data-aos="fade-right">
          <div class="piqs_item_icon">
            <img data-src="{{ URL::asset('frontend/img/svg/howto/Insurance.svg') }}"
              src="{{ URL::asset('frontend/img/svg/howto/Insurance.svg') }}" class="js-img"
              alt="For each action done on the UniJoin Bitcoin Mixer there are no logs stored" />
          </div>
          <div class="piqs_item_cont">
            <div class="piqs_item_title">Insurance</div>
            <div class="piqs_item_txt">
              The insurance system will help the investors to recover fund losses from scam
              projects.
            </div>
          </div>
        </div>
        <div class="piqs_item wow fadeInRight" data-wow-delay="0.4s"
          style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft" data-aos="fade-left">
          <div class="piqs_item_icon">
            <img data-src="{{ URL::asset('frontend/img/svg/howto/Entertainment.svg') }}"
              src="{{ URL::asset('frontend/img/svg/howto/Entertainment.svg') }}" class="js-img"
              alt="Use the UniJoin Bitcoin Mixer with Tor Browser for better privacy" />
          </div>
          <div class="piqs_item_cont">
            <div class="piqs_item_title">Entertainment</div>
            <div class="piqs_item_txt">Soon (Play and Earn)</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section--md">
    <div class="container">
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-40 items-center">
        <img src="{{ URL::asset('frontend/images/map.svg') }}" alt="G" width="700" loading="lazy" class="sm:order-last"
          style="width: 100vw" />
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-40 items-center">
        <img src="{{ URL::asset('frontend/images/phone-5.png')}}" alt="Get WalletGrow" width="700" loading="lazy"
          class="sm:order-last" />
        <div class="xl:pl-80">
          <h2 class="text-primary-h1 font-black mb-8">Your Assets</h2>
          <h3 class="text-primary-h3 mb-24">Secured and Anonymous</h3>
          <p class="mb-32 max-w-[32ch]">
            The <mark>WalletGrow</mark> is absolutely centralized system - we ensure full
            safety of your funds. If you're looking for the best CEX based investment
            standards, WalletGrow is what you need.
          </p>
        </div>
      </div>
    </div>
  </section>
</main>

<div class="section_roadmap">
  <div class="roadmap_title_sticky" style="margin-bottom: 4rem">
    <div class="container" style="background: #fff">
      <div class="anim anim_start">
        <div class="text-center">
          <h2 class="text-primary-h1 font-black mb-40">
            Future <mark class="text-secondary">Map</mark>
          </h2>
          <p class="text-dark max-w-[770px] mx-auto mb-80">
            Check out our FutureMap to find out our stages of development and our main goals
            that we set.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="roadmap">
    <div>
      <div class="wrp_roadmap_year_list">
        <div class="roadmap_year_list">
          <div data-year="2023">
            <span>2023</span>
          </div>
          <div data-year="2024">
            <span>2024</span>
          </div>
          <div data-year="2025">
            <span>2025</span>
          </div>
          <div data-year="2026">
            <span>2026</span>
          </div>
          <div data-year="2027">
            <span>2027</span>
          </div>
        </div>
      </div>
      <div class="roadmap_list">
        <div data-year-block="2023">
          <div class="roadmap_year">
            <span>2023</span>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_title">
              <span class="roadmap_title_img">
                <img src="{{ URL::asset('frontend/img/svg/roadmap/2023-2.svg') }}" alt="" />
              </span>
              <div>2023</div>
            </div>
            <div class="roadmap_desc">
              <ul>
                <li>
                  Formation of an idea to create a business model for generating stable
                  profits.
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>Selecting a suitable location for the company's head office.</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>
                      Registration of the necessary documents for legal work anywhere in the
                      world.
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>Beginning the formation of the company's core team of employees.</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div data-year-block="2024">
          <div class="roadmap_year">
            <span>2024</span>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_title">
              <span class="roadmap_title_img">
                <img src="{{ URL::asset('frontend/img/svg/roadmap/2024.svg') }}" alt="" />
              </span>
              <div>2024</div>
            </div>
            <div class="roadmap_desc">
              <ul>
                <li>
                  Generating sources of income to ensure stable operation of the company's
                  business model.
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>
                      Organization of necessary working departments for comfortable work.
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>Creating a staff to ensure the performance of all departments.</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>Development of artifical intelligence algorithms.</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>
                      Development of our own trading robotic system based on artificial
                      intelligence.
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div data-year-block="2025">
          <div class="roadmap_year">
            <span>2025</span>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_title">
              <span class="roadmap_title_img">
                <img src="{{ URL::asset('frontend/img/svg/roadmap/2025.svg') }}" alt="" />
              </span>
              <div>The beginning of 2025</div>
            </div>
            <div class="roadmap_desc">
              <ul>
                <li>
                  Started development of an online platform, to provide services worldwide.
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>
                      Adapting the robotic system to maximize efficiency in the markets.
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>
                      Testing and debugging artifical intelligence algorithms on historical
                      data.
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>
                      Developing, testing, and debugging methods for aggregation and
                      interpolation of crypto indices.
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_title">
              <span class="roadmap_title_img">
                <img src="{{ URL::asset('frontend/img/svg/roadmap/2025.svg') }}" alt="" />
              </span>
              <div>The middle of 2025</div>
            </div>
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>Integration of a robotic trading system.</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>Launch of crypto indices aggregation and search for patterns.</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>
                      Launch of liquidity management mechanisms based on artifical
                      intelligence.
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>Official launch of the WalletGrow online platform</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_title">
              <span class="roadmap_title_img">
                <img src="{{ URL::asset('frontend/img/svg/roadmap/2025.svg') }}" alt="" />
              </span>
              <div>The end of 2025</div>
            </div>
            <div class="roadmap_desc">
              <ul>
                <li>Financial reporting for the 3rd quarter of 2025.</li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>Technical updates and improvement of platform operability.</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>Start of WalletGrow token development.</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>
                      Started development of our own DEX platform for self Trading and
                      Arbitrage.
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>Financial reporting for the 4rd quarter of 2025.</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div data-year-block="2026">
          <div class="roadmap_year">
            <span></span>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_title">
              <span class="roadmap_title_img">
                <img src="{{ URL::asset('frontend/img/svg/roadmap/2024-3.svg') }}" alt="" />
              </span>
              <div>The beginning of 2026</div>
            </div>
            <div class="roadmap_desc">
              <ul>
                <li>
                  Holding the first offline events in Europe and Asia to present the platform
                  and its capabilities.
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>Launch of the WalletGrow token.</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>
                      Opening of the first WalletGrow representative offices in Europe and
                      Asia.
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>Modernization of platform security systems.</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>Started development of own payment system.</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>Financial reporting for the 1st quarter of 2026.</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_title">
              <span class="roadmap_title_img">
                <img src="{{ URL::asset('frontend/img/svg/roadmap/2024-3.svg') }}" alt="" />
              </span>
              <div>The middle of 2026</div>
            </div>
            <div class="roadmap_desc">
              <ul>
                <li>Launch of own DEX platform for self Arbitrage and Trading.</li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>
                      Technical testing and updating of the robotic trading system based on
                      artificial intelligence.
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>
                      Verifying the qualifications and work-effectiveness of WalletGrow
                      employees.
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>Financial reporting's for the 2-3rd quarter of 204.</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_title">
              <span class="roadmap_title_img">
                <img src="{{ URL::asset('frontend/img/svg/roadmap/2024-3.svg') }}" alt="" />
              </span>
              <div>The end of 2026</div>
            </div>
            <div class="roadmap_desc">
              <ul>
                <li>Launch of own payment system.</li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>
                      Formation of the concept of the updated DEX platform WalletGrow 2.0.
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>Holding a large-scale New Year event in Dubai.</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_desc">
              <ul>
                <li>
                  <ul>
                    <li>Financial reporting for the 4rd quarter of 2025.</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div data-year-block="2027">
          <div class="roadmap_year">
            <span>2027</span>
          </div>
          <div class="roadmap_inner">
            <div class="roadmap_title">
              <span class="roadmap_title_img">
                <img src="{{ URL::asset('frontend/img/svg/roadmap/2023.svg') }}" alt="" />
              </span>
              <div>The beginning of 2027</div>
            </div>
            <div class="roadmap_desc">
              <ul>
                <li>Comming soon</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="roadmap_progress">
          <div></div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
@section('script')
@endsection