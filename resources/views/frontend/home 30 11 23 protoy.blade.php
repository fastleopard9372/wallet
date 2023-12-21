<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Welcome to WalletGrow</title>
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <link rel="preload" href="{{ URL::asset('frontend/fonts/Outfit-Regular.woff2') }}" as="font" type="font/woff2"
    crossorigin />
  <link rel="preload" href="{{ URL::asset('frontend/fonts/RedHatDisplay-Black.woff2') }}" as="font" type="font/woff2"
    crossorigin />
  <link rel="preload" href="{{ URL::asset('frontend/fonts/RedHatDisplay-Bold.woff2') }}" as="font" type="font/woff2"
    crossorigin />
  <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('frontend/images/ico/apple-icon-57x57.png') }}" />
  <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('frontend/images/ico/apple-icon-60x60.png') }}" />
  <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('frontend/images/ico/apple-icon-72x72.png') }}" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('frontend/images/ico/apple-icon-76x76.png') }}" />
  <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('frontend/images/ico/apple-icon-114x114.png') }}" />
  <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('frontend/images/ico/apple-icon-120x120.png') }}" />
  <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('frontend/images/ico/apple-icon-144x144.png') }}" />
  <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('frontend/images/ico/apple-icon-152x152.png') }}" />
  <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('frontend/images/ico/apple-icon-180x180.png') }}" />
  <link rel="icon" type="image/png" sizes="192x192"
    href="{{ URL::asset('frontend/images/ico/android-icon-192x192.png') }}" />
  <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('frontend/images/ico/favicon-32x32.png') }}" />
  <link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('frontend/images/ico/favicon-96x96.png') }}" />
  <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('frontend/images/ico/favicon-16x16.png') }}" />
  <link rel="manifest" href="{{ URL::asset('frontend/images/ico/manifest.json') }}" />
  <meta name="msapplication-TileColor" content="#ffffff" />
  <meta name="msapplication-TileImage" content="{{ URL::asset('frontend/images/ico/ms-icon-144x144.png') }}" />
  <meta name="theme-color" content="#ffffff" />
  <link href="{{ URL::asset('frontend/libs/Semantic/fomantic-ui-css/semantic.min.css') }}" rel="stylesheet" />
  <link href="{{ URL::asset('frontend/css/main.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/switch.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/stylesheet.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/additional.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/media.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/all.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/theme.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/slick-theme.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/soc.css') }}" />
  <link href="{{ URL::asset('frontend/css/aos.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/mobile_navbar.css') }}" />
</head>

<body class="page page--index">
  <div class="wrapper">
    <header class="header navbar-light">
      <div class="container">
        <div class="header__inner" data-controller="nav">
          <a href="##################" class="header__logo-wrapper">
            <img src="{{ URL::asset('frontend/img/logo.svg') }}" alt="Coinmy" width="172" height="40" loading="eager"
              class="header__logo" />
          </a>
          <div class="header__actions">
            <div class="switch_box">
              <div class="amount">
                <span class="leftbtn">
                  <img src="{{ URL::asset('frontend/icons/dollar.svg') }}" alt="left"
                    style="width: 35px; height: 35px" />
                </span>
                <input type="number" name="amount" id="amount" value="0.00" />
                <button class="rightbtn">
                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 64 64">
                    <linearGradient id="KJ7ka9GQp0CHqT_2YsWMsa_44037_gr1" x1="32" x2="32" y1="5.75" y2="59.005"
                      gradientUnits="userSpaceOnUse" spreadMethod="reflect">
                      <stop offset="0" stop-color="#1a6dff"></stop>
                      <stop offset="1" stop-color="#c822ff"></stop>
                    </linearGradient>
                    <path fill="url(#KJ7ka9GQp0CHqT_2YsWMsa_44037_gr1)"
                      d="M32,58C17.663,58,6,46.337,6,32S17.663,6,32,6s26,11.663,26,26S46.337,58,32,58z M32,8 C18.767,8,8,18.767,8,32s10.767,24,24,24s24-10.767,24-24S45.233,8,32,8z">
                    </path>
                    <linearGradient id="KJ7ka9GQp0CHqT_2YsWMsb_44037_gr2" x1="32" x2="32" y1="5.75" y2="59.005"
                      gradientUnits="userSpaceOnUse" spreadMethod="reflect">
                      <stop offset="0" stop-color="#1a6dff"></stop>
                      <stop offset="1" stop-color="#c822ff"></stop>
                    </linearGradient>
                    <path fill="url(#KJ7ka9GQp0CHqT_2YsWMsb_44037_gr2)"
                      d="M32,52c-11.028,0-20-8.972-20-20s8.972-20,20-20s20,8.972,20,20S43.028,52,32,52z M32,14 c-9.925,0-18,8.075-18,18s8.075,18,18,18s18-8.075,18-18S41.925,14,32,14z">
                    </path>
                    <linearGradient id="KJ7ka9GQp0CHqT_2YsWMsc_44037_gr3" x1="32" x2="32" y1="21.75" y2="42.538"
                      gradientUnits="userSpaceOnUse" spreadMethod="reflect">
                      <stop offset="0" stop-color="#6dc7ff"></stop>
                      <stop offset="1" stop-color="#e6abff"></stop>
                    </linearGradient>
                    <path fill="url(#KJ7ka9GQp0CHqT_2YsWMsc_44037_gr3)"
                      d="M41,30h-7v-7c0-0.552-0.448-1-1-1h-2c-0.552,0-1,0.448-1,1v7h-7c-0.552,0-1,0.448-1,1v2 c0,0.552,0.448,1,1,1h7v7c0,0.552,0.448,1,1,1h2c0.552,0,1-0.448,1-1v-7h7c0.552,0,1-0.448,1-1v-2C42,30.448,41.552,30,41,30z">
                    </path>
                  </svg>
                </button>
              </div>
            </div>

            <form action="" method="post" class="header__lang-container" data-controller="dropdown lang">
              <button type="button" class="header__lang" data-dropdown-target="trigger">
                <svg class="icon">
                  <use xlink:href="{{ URL::asset('frontend/icons/sprite.svg#icons-globe') }}"></use>
                </svg>
              </button>
              <div class="header__lang-dropdown dropdown hidden" data-dropdown-target="dropdown">
                <div class="dropdown-menu">
                  <ul class="dropdown-menu__list choose_language">
                    <li class="dropdown-menu__item">
                      <button type="button" class="dropdown-menu__button" data-language="en">
                        <img src="{{ URL::asset('frontend/img/langs/en.png') }}" alt="" loading="lazy" />
                        <span class="dropdown-menu__button-label">English</span>
                      </button>
                    </li>
                    <li class="dropdown-menu__item">
                      <button type="button" class="dropdown-menu__button" data-language="es">
                        <img src="{{ URL::asset('frontend/img/langs/es.png') }}" alt="" loading="lazy" />
                        <span class="dropdown-menu__button-label">Español</span>
                      </button>
                    </li>
                    <li class="dropdown-menu__item">
                      <button type="button" class="dropdown-menu__button" data-language="fr">
                        <img src="{{ URL::asset('frontend/img/langs/fr.png') }}" alt="" loading="lazy" />
                        <span class="dropdown-menu__button-label">Français</span>
                      </button>
                    </li>
                    <li class="dropdown-menu__item">
                      <button type="button" class="dropdown-menu__button" data-language="de">
                        <img src="{{ URL::asset('frontend/img/langs/de.png') }}" alt="" loading="lazy" />
                        <span class="dropdown-menu__button-label">Deutsch</span>
                      </button>
                    </li>
                    <li class="dropdown-menu__item">
                      <button type="button" class="dropdown-menu__button" data-language="it">
                        <img src="{{ URL::asset('frontend/img/langs/it.png') }}" alt="" loading="lazy" />
                        <span class="dropdown-menu__button-label">Italiano</span>
                      </button>
                    </li>
                    <li class="dropdown-menu__item">
                      <button type="button" class="dropdown-menu__button" data-language="zh">
                        <img src="{{ URL::asset('frontend/img/langs/zh.png') }}" alt="" loading="lazy" />
                        <span class="dropdown-menu__button-label">中國</span>
                      </button>
                    </li>
                    <li class="dropdown-menu__item">
                      <button type="button" class="dropdown-menu__button" data-language="hi">
                        <img src="{{ URL::asset('frontend/img/langs/hi.png') }}" alt="" loading="lazy" />
                        <span class="dropdown-menu__button-label">Hindi</span>
                      </button>
                    </li>
                    <li class="dropdown-menu__item">
                      <button type="button" class="dropdown-menu__button" data-language="vi">
                        <img src="{{ URL::asset('frontend/img/langs/vi.png') }}" alt="" loading="lazy" />
                        <span class="dropdown-menu__button-label">Vietnamese</span>
                      </button>
                    </li>
                    <li class="dropdown-menu__item">
                      <button type="button" class="dropdown-menu__button" data-language="pt">
                        <img src="{{ URL::asset('frontend/img/langs/pt.png') }}" alt="" loading="lazy" />
                        <span class="dropdown-menu__button-label">Português</span>
                      </button>
                    </li>
                    <li class="dropdown-menu__item">
                      <button type="button" class="dropdown-menu__button" data-language="ir">
                        <img src="{{ URL::asset('frontend/img/langs/ir.png') }}" alt="" loading="lazy" />
                        <span class="dropdown-menu__button-label">ایرانی</span>
                      </button>
                    </li>
                    <li class="dropdown-menu__item">
                      <button type="button" class="dropdown-menu__button" data-language="ja">
                        <img src="{{ URL::asset('frontend/img/langs/ja.png') }}" alt="" loading="lazy" />
                        <span class="dropdown-menu__button-label">日本語</span>
                      </button>
                    </li>
                    <li class="dropdown-menu__item">
                      <button type="button" class="dropdown-menu__button" data-language="tr">
                        <img src="{{ URL::asset('frontend/img/langs/tr.png') }}" alt="" loading="lazy" />
                        <span class="dropdown-menu__button-label">Türkçe</span>
                      </button>
                    </li>
                    <li class="dropdown-menu__item">
                      <button type="button" class="dropdown-menu__button" data-language="id">
                        <img src="{{ URL::asset('frontend/img/langs/id.png') }}" alt="" loading="lazy" />
                        <span class="dropdown-menu__button-label">Bahasa Indonesia</span>
                      </button>
                    </li>
                    <li class="dropdown-menu__item">
                      <button type="button" class="dropdown-menu__button" data-language="hu">
                        <img src="{{ URL::asset('frontend/img/langs/hu.png') }}" alt="" loading="lazy" />
                        <span class="dropdown-menu__button-label">Hungary</span>
                      </button>
                    </li>
                    <li class="dropdown-menu__item">
                      <button type="button" class="dropdown-menu__button" data-language="kr">
                        <img src="{{ URL::asset('frontend/img/langs/kr.png') }}" alt="" loading="lazy" />
                        <span class="dropdown-menu__button-label">한국인</span>
                      </button>
                    </li>
                    <li class="dropdown-menu__item">
                      <button type="button" class="dropdown-menu__button" data-language="th">
                        <img src="{{ URL::asset('frontend/img/langs/th.png') }}" alt="" loading="lazy" />
                        <span class="dropdown-menu__button-label">Thai</span>
                      </button>
                    </li>
                    <li class="dropdown-menu__item">
                      <button type="button" class="dropdown-menu__button" data-language="ar">
                        <img src="{{ URL::asset('frontend/img/langs/ar.png') }}" alt="" loading="lazy" />
                        <span class="dropdown-menu__button-label">Arabic</span>
                      </button>
                    </li>
                    <li class="dropdown-menu__item">
                      <button type="button" class="dropdown-menu__button" data-language="gr">
                        <img src="{{ URL::asset('frontend/img/langs/gr.png') }}" alt="" loading="lazy" />
                        <span class="dropdown-menu__button-label">Greek</span>
                      </button>
                    </li>
                    <li class="dropdown-menu__item">
                      <button type="button" class="dropdown-menu__button" data-language="pl">
                        <img src="{{ URL::asset('frontend/img/langs/pl.png') }}" alt="" loading="lazy" />
                        <span class="dropdown-menu__button-label">Polski</span>
                      </button>
                    </li>
                    <li class="dropdown-menu__item">
                      <button type="button" class="dropdown-menu__button" data-language="sl">
                        <img src="{{ URL::asset('frontend/img/langs/sl.png') }}" alt="" loading="lazy" />
                        <span class="dropdown-menu__button-label">Slovenian</span>
                      </button>
                    </li>
                    <li class="dropdown-menu__item">
                      <button type="button" class="dropdown-menu__button" data-language="sw">
                        <img src="{{ URL::asset('frontend/img/langs/sw.png') }}" alt="" loading="lazy" />
                        <span class="dropdown-menu__button-label">Sweden</span>
                      </button>
                    </li>
                    <li class="dropdown-menu__item">
                      <button type="button" class="dropdown-menu__button" data-language="bg">
                        <img src="{{ URL::asset('frontend/img/langs/bg.png') }}" alt="" loading="lazy" />
                        <span class="dropdown-menu__button-label">Bengali</span>
                      </button>
                    </li>
                  </ul>
                </div>
                <div class="dropdown__arrow"></div>
              </div>
            </form>

            <a href="{{ URL::asset('frontend/account/service.html') }}"
              class="header__connect-icon btn btn--secondary btn--raised btn--sm">
              <svg fill="#ffffff" width="18px" height="18px" viewBox="-2.3 0 122.88 122.88" version="1.1" id="Layer_1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                style="enable-background: new 0 0 118.28 122.88" xml:space="preserve">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <g>
                    <path
                      d="M111.85,108.77c-3.47,4.82-8.39,8.52-14.13,10.48c-0.26,0.12-0.55,0.18-0.84,0.18c-0.28,0-0.56-0.06-0.82-0.17v0.06 c0,1.96-1.6,3.56-3.57,3.56l-7.68,0c-1.96,0-3.57-1.6-3.57-3.56l0-55.13c0-1.96,1.6-3.57,3.57-3.57h7.68c1.96,0,3.57,1.6,3.57,3.57 v0.34c0.26-0.12,0.54-0.18,0.82-0.18c0.22,0,0.44,0.04,0.64,0.1l0,0.01c4.36,1.45,8.26,3.92,11.42,7.11V59.15 c0-14.89-4.99-27.63-13.81-36.6l-3.91,5.83c-7.95-8.75-19.4-14.27-32.08-14.27c-12.76,0-24.29,5.59-32.24,14.45l-4.73-5.78 C13.47,31.65,8.54,44.21,8.54,59.15V73.4c3.4-4.08,7.92-7.22,13.07-8.93l0-0.01c0.21-0.07,0.43-0.11,0.64-0.11 c0.28,0,0.57,0.06,0.82,0.17v-0.34c0-1.96,1.61-3.57,3.57-3.57l7.68,0c1.96,0,3.57,1.6,3.57,3.57v55.13c0,1.96-1.61,3.56-3.57,3.56 h-7.68c-1.96,0-3.57-1.6-3.57-3.56v-0.06c-0.25,0.11-0.53,0.17-0.82,0.17c-0.3,0-0.58-0.07-0.83-0.18 c-5.74-1.96-10.66-5.66-14.13-10.48c-1.82-2.52-3.24-5.34-4.17-8.37l-3.12,0V59.15c0-16.27,6.65-31.05,17.37-41.77 C28.09,6.66,42.88,0,59.14,0c16.27,0,31.06,6.66,41.77,17.37c10.72,10.72,17.37,25.5,17.37,41.77v41.25h-2.27 C115.1,103.39,113.68,106.23,111.85,108.77L111.85,108.77L111.85,108.77z">
                    </path>
                  </g>
                </g>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </header>

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
                <div class="authpanel">
                  <a href="{{ route('signin') }}" class="button-21" role="button">Login</a>
                  <a href="{{ route('signup')}}" class="button-21" role="button"> Register</a>
                </div>
                <h1 class="wow fadeInRight" data-wow-delay="0.1s"
                  style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight; text-align: center">
                  <span class="corn">
                    Wallet Grow
                    <b class="corn-bot"></b>
                    <b class="corn-top"></b>
                  </span>
                </h1>

                <div class="welcome_txt wow fadeInRight" data-wow-delay="0.2s"
                  style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight">
                  <p>
                    We are a team of specialists in various fields of crypto world. We have united the most popular
                    sectors in a single platform, which will become a gateway to the world of technology and finance.
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
                            <div class="coin-marquee-item-name">X</div>
                            <div class="coin-marquee-item-price">$10 - $10,000</div>
                          </div>
                          <div class="coin-marquee-item-info__row">
                            <div class="coin-marquee-item-symbol">Wallet</div>
                            <div class="coin-marquee-item-changes coin-marquee-item-changes--up">
                              <span class="coin-marquee-item-changes__icon"></span>1.5% - 2.5%
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
                            <div class="coin-marquee-item-name">Gio</div>
                            <div class="coin-marquee-item-price">$10 - $2500</div>
                          </div>
                          <div class="coin-marquee-item-info__row">
                            <div class="coin-marquee-item-symbol">Gamer</div>
                            <div class="coin-marquee-item-changes coin-marquee-item-changes--up">
                              <span class="coin-marquee-item-changes__icon"></span>1.8% - 3.2%
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
                            <div class="coin-marquee-item-name">Mine</div>
                            <div class="coin-marquee-item-price">$3 - $10,000</div>
                          </div>
                          <div class="coin-marquee-item-info__row">
                            <div class="coin-marquee-item-symbol">Lab</div>
                            <div class="coin-marquee-item-changes coin-marquee-item-changes--up">
                              <span class="coin-marquee-item-changes__icon"></span>3% Fixed
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
                            <div class="coin-marquee-item-name">Left</div>
                            <div class="coin-marquee-item-price">$25 - $10,000</div>
                          </div>
                          <div class="coin-marquee-item-info__row">
                            <div class="coin-marquee-item-symbol">Coins</div>
                            <div class="coin-marquee-item-changes coin-marquee-item-changes--up">
                              <span class="coin-marquee-item-changes__icon"></span>2.5% - 4.7%
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
                            <div class="coin-marquee-item-name">X</div>
                            <div class="coin-marquee-item-price">$10 - $10,000</div>
                          </div>
                          <div class="coin-marquee-item-info__row">
                            <div class="coin-marquee-item-symbol">Wallet</div>
                            <div class="coin-marquee-item-changes coin-marquee-item-changes--up">
                              <span class="coin-marquee-item-changes__icon"></span>1.5% - 2.5%
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
                            <div class="coin-marquee-item-name">Gio</div>
                            <div class="coin-marquee-item-price">$10 - $2500</div>
                          </div>
                          <div class="coin-marquee-item-info__row">
                            <div class="coin-marquee-item-symbol">Gamer</div>
                            <div class="coin-marquee-item-changes coin-marquee-item-changes--up">
                              <span class="coin-marquee-item-changes__icon"></span>1.8% - 3.2%
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
                            <div class="coin-marquee-item-name">Mine</div>
                            <div class="coin-marquee-item-price">$3 - $10,000</div>
                          </div>
                          <div class="coin-marquee-item-info__row">
                            <div class="coin-marquee-item-symbol">Lab</div>
                            <div class="coin-marquee-item-changes coin-marquee-item-changes--up">
                              <span class="coin-marquee-item-changes__icon"></span>3% Fixed
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
                            <div class="coin-marquee-item-name">Left</div>
                            <div class="coin-marquee-item-price">$25 - $10,000</div>
                          </div>
                          <div class="coin-marquee-item-info__row">
                            <div class="coin-marquee-item-symbol">Coins</div>
                            <div class="coin-marquee-item-changes coin-marquee-item-changes--up">
                              <span class="coin-marquee-item-changes__icon"></span>2.5% - 4.7%
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
              theme="light" transparent="true" show-symbol-logo="true" style="overflow: visible; margin-bottom: 18px">
            </div>
          </div>
          <div class="slideshow">
            <div class="slidecard">
              <div class="banner-img">
                <img src="{{ URL::asset('frontend/images/slide/01.svg') }}" alt="01" />
              </div>
              <div class="card_detail">
                <h3>X-Wallet</h3>
                <p>$10 - $10,000</p>
              </div>
              <div class="btn-wrapper">
                <div class="btn outline">1.5% - 2.5%</div>
              </div>
            </div>
            <div class="slidecard">
              <div class="banner-img">
                <img src="{{ URL::asset('frontend/images/slide/02.svg') }}" alt="01" />
              </div>
              <div class="card_detail">
                <h3>Gio-Gamer</h3>
                <p>$10 - $2500</p>
              </div>
              <div class="btn-wrapper">
                <div class="btn outline">1.8% - 3.2%</div>
              </div>
            </div>
            <div class="slidecard">
              <div class="banner-img">
                <img src="{{ URL::asset('frontend/images/slide/03.svg') }}" alt="01" />
              </div>
              <div class="card_detail">
                <h3>Mine-Lab</h3>
                <p>$3 - $10,000</p>
              </div>
              <div class="btn-wrapper">
                <div class="btn outline">3% Fixed</div>
              </div>
            </div>
            <div class="slidecard">
              <div class="banner-img">
                <img src="{{ URL::asset('frontend/images/slide/04.svg') }}" alt="01" />
              </div>
              <div class="card_detail">
                <h3>Left-Coins</h3>
                <p>$25 - $10,000</p>
              </div>
              <div class="btn-wrapper">
                <div class="btn outline">2.5% - 4.7%</div>
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
              Our goal is to make cryptocurrencies easier and more accessible for everyone, so that everyone can earn
              money on the most promising and fast-growing crypto currency market. We create products that are
              necessary and useful to people, taking care of our users
            </p>
          </div>
          <div class="grid sm:grid-cols-3 gap-24 md:gap-40 max-w-[1100px] mx-auto">
            <div class="card" data-aos="fade-up" data-aos-duration="1200" style="background: transparent">
              <div class="card__top">
                <div class="aditem anim anim_start">
                  <lottie-player loop="" src="{{ URL::asset('frontend/animation/garranty.json') }}" speed="1">
                  </lottie-player>
                </div>
              </div>
              <div class="card__title">Project Monitering</div>
              <div class="card__desc">
                For your convenience, we have created a modern website. Our goal is to provide our customers with
                great earning opportunities and convenience and ease of use. Anyone can use our platform, regardless
                of knowledge, education, and experience. Our special teams are analyzing everyday about latest crypto
                earning programs for our customers. Simply come , check out the project details and read reviews and
                start your earnings.
              </div>
            </div>
            <div class="card" data-aos="fade-down" data-aos-duration="1800" style="background: transparent">
              <div class="card__top">
                <div class="aditem anim anim_start">
                  <lottie-player loop="" src="{{ URL::asset('frontend/animation/fast-exchange.json') }}" speed="1">
                  </lottie-player>
                </div>
              </div>
              <div class="card__title">Insurance policy</div>
              <div class="card__desc">
                For your financial stability, we have implemented an insurance policy for our users. According to our
                company rules and regulations, currently users can claim cash refund upto 50% for failure and scam
                projects. Insurance policy for a safety precautions and stresslees work.
              </div>
            </div>
            <div class="card" data-aos="fade-down" data-aos-duration="1800" style="background: transparent">
              <div class="card__top">
                <div class="aditem anim anim_start">
                  <lottie-player loop="" src="{{ URL::asset('frontend/animation/always-close-by.json') }}" speed="1">
                  </lottie-player>
                </div>
              </div>
              <div class="card__title">Investment opportunities</div>
              <div class="card__desc">
                User, who are scared about working on crypto projects, trading, NFT and who don't have time to
                analysis and invest in crypto, They simply can invest with us. Our company will take over risk
                management and Time management with users funds. We are providing offers as fixed, flexible and
                savings.
              </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-duration="1200" style="background: transparent">
              <div class="card__top">
                <div class="aditem anim anim_start">
                  <lottie-player loop="" src="{{ URL::asset('frontend/animation/security.json') }}" speed="1">
                  </lottie-player>
                </div>
              </div>
              <div class="card__title">Safe and Secure</div>
              <div class="card__desc">
                The safety and security of our investors funds, as well as their personal data, is our main task. A
                professional team of traders, analysts and cybersecurity specialists allows to be confident of
                success. We guarantee stable profits.
              </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-duration="1200" style="background: transparent">
              <div class="card__top">
                <div class="aditem anim anim_start">
                  <lottie-player loop="" src="{{ URL::asset('frontend/animation/web-and-mobile-applications.json') }}"
                    speed="1"></lottie-player>
                </div>
              </div>
              <div class="card__title">Convenient website</div>
              <div class="card__desc">
                We are the only most most innovative and reliable crypto program in the world. We implemented lot of
                technical strategies and financial stability for our users to work for long term. Our service is
                always available for everyone, from anywhere in the world, so that you receive a stable income and be
                confident in the future.
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
                We never stand still and carefully study modern technologies and the opportunities they open up. By
                combining 4 areas on one platform, we increase the income of our users.
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
              We have created a unified ecosystem consisting of 4 sources of income for company and users :
              <b>Monitoring</b>, <b>insurance</b>, <b>investment</b>, and <b>Entertainment</b> - which provide
              constant development of the company and stable earnings. Company will distributes benefits and income to
              users all over the world.
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
                  Simply invest and earn passive income for long term without any worry. Our system not based on ponzi
                  scheme.
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
                  Our project hunting teams update everyday latest earnings opportunities and platforms to the
                  investors.
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
                  This service provide multiple chances to our users for work long term and financial stability.
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
                <div class="piqs_item_txt">Soon</div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section section--md">
        <div class="container">
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-40 items-center">
            <img src="{{ URL::asset('frontend/images/map.svg') }}" alt="G" width="700" loading="lazy"
              class="sm:order-last" style="width: 100vw" />
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-40 items-center">
            <img src="{{ URL::asset('frontend/images/phone-5.png') }}" alt="Get Coinmy" width="700" loading="lazy"
              class="sm:order-last" />
            <div class="xl:pl-80">
              <h2 class="text-primary-h1 font-black mb-8">Your Assets</h2>
              <h3 class="text-primary-h3 mb-24">Secured and Anonymous</h3>
              <p class="mb-32 max-w-[32ch]">
                The <mark>WalletGrow</mark> is absolutely centralized system – we ensure full safety of your funds. If
                you’re looking for the best CEX based investment standards, WalletGrow is what you need.
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
              <h2 class="text-primary-h1 font-black mb-40">Future <mark class="text-secondary">Map</mark></h2>
              <p class="text-dark max-w-[770px] mx-auto mb-80">
                Check out our FutureMap to find out our stages of development and our main goals that we set.
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
                    <li>Formation of an idea to create a business model for generating stable profits.</li>
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
                        <li>Registration of the necessary documents for legal work anywhere in the world.</li>
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
                    <li>Generating sources of income to ensure stable operation of the company's business model.</li>
                  </ul>
                </div>
              </div>
              <div class="roadmap_inner">
                <div class="roadmap_desc">
                  <ul>
                    <li>
                      <ul>
                        <li>Organization of necessary working departments for comfortable work.</li>
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
                        <li>Development of our own trading robotic system based on artificial intelligence.</li>
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
                    <li>Started development of an online platform, to provide services worldwide.</li>
                  </ul>
                </div>
              </div>
              <div class="roadmap_inner">
                <div class="roadmap_desc">
                  <ul>
                    <li>
                      <ul>
                        <li>Adapting the robotic system to maximize efficiency in the markets.</li>
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
                        <li>Testing and debugging artifical intelligence algorithms on historical data.</li>
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
                          Developing, testing, and debugging methods for aggregation and interpolation of crypto
                          indices.
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
                        <li>Launch of liquidity management mechanisms based on artifical intelligence.</li>
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
                        <li>Official launch of the coinmy online platform</li>
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
                        <li>Start of coinmy token development.</li>
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
                        <li>Started development of our own DEX platform for self Trading and Arbitrage.</li>
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
                      Holding the first offline events in Europe and Asia to present the platform and its
                      capabilities.
                    </li>
                  </ul>
                </div>
              </div>
              <div class="roadmap_inner">
                <div class="roadmap_desc">
                  <ul>
                    <li>
                      <ul>
                        <li>Launch of the coinmy token.</li>
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
                        <li>Opening of the first coinmy representative offices in Europe and Asia.</li>
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
                          Technical testing and updating of the robotic trading system based on artificial
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
                        <li>Verifying the qualifications and work-effectiveness of coinmy employees.</li>
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
                        <li>Formation of the concept of the updated DEX platform coinmy 2.0.</li>
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

    <footer class="footer">
      <div class="container">
        <div class="footer_cols">
          <div class="footer_cols_left wow fadeIn" data-wow-delay="0.2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn">
            <div class="footer_logo">
              <a href="#">
                <img data-src="{{ URL::asset('frontend/img/logo.svg') }}"
                  src="{{ URL::asset('frontend/img/logo.svg') }}" class="js-img"
                  alt="UniJoin Bitcoin Mixer footer logo" /></a>
            </div>
            <div class="h2" style="margin-bottom: 20px; font-weight: 900; color: #152a54">
              <div style="color: #152a54; font-size: 28px; margin-bottom: 2rem">WalletGrow</div>
              Most <span style="color: #68c9fa; font-size: 24px">Innovative</span> and
              <span style="color: #68c9fa; font-size: 24px">Reliable</span> Crypto Program.
            </div>
            <div class="footer_soc">
              <h4>Stay Connected</h4>
              <div class="soc">
                <a href="https://t.me/unijoin" class="soc_item" target="_blank"><svg
                    class="svg-inline--fa fa-telegram-plane fa-w-14" aria-hidden="true" focusable="false"
                    data-prefix="fab" data-icon="telegram-plane" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512" data-fa-i2svg="">
                    <path fill="currentColor"
                      d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z">
                    </path>
                  </svg>
                </a>
                <a href="https://twitter.com/unijoinofficial" class="soc_item" target="_blank">
                  <span class="icon-twitter">
                    <svg class="icon">
                      <use xlink:href="{{ URL::asset('frontend/icons/sprite.svg#icons-soc-twitter') }}"></use>
                    </svg>
                  </span>
                </a>
                <a href="https://www.youtube.com/channel/UCCEfChYfcmcOy8sulHPWt6w" class="soc_item" target="_blank">
                  <svg class="icon">
                    <use xlink:href="{{ URL::asset('frontend/icons/sprite.svg#icons-soc-youtube') }}"></use>
                  </svg>
                </a>
                <a href="https://www.facebook.com/UniJoin-108173465095161" class="soc_item" target="_blank">
                  <svg class="svg-inline--fa fa-facebook fa-w-16" aria-hidden="true" focusable="false" data-prefix="fab"
                    data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                    data-fa-i2svg="">
                    <path fill="currentColor"
                      d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                    </path>
                  </svg>
                </a>
                <a href="https://www.reddit.com/r/UniJoin/" class="soc_item" target="_blank">
                  <svg class="svg-inline--fa fa-reddit fa-w-16" aria-hidden="true" focusable="false" data-prefix="fab"
                    data-icon="reddit" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                    data-fa-i2svg="">
                    <path fill="currentColor"
                      d="M201.5 305.5c-13.8 0-24.9-11.1-24.9-24.6 0-13.8 11.1-24.9 24.9-24.9 13.6 0 24.6 11.1 24.6 24.9 0 13.6-11.1 24.6-24.6 24.6zM504 256c0 137-111 248-248 248S8 393 8 256 119 8 256 8s248 111 248 248zm-132.3-41.2c-9.4 0-17.7 3.9-23.8 10-22.4-15.5-52.6-25.5-86.1-26.6l17.4-78.3 55.4 12.5c0 13.6 11.1 24.6 24.6 24.6 13.8 0 24.9-11.3 24.9-24.9s-11.1-24.9-24.9-24.9c-9.7 0-18 5.8-22.1 13.8l-61.2-13.6c-3-.8-6.1 1.4-6.9 4.4l-19.1 86.4c-33.2 1.4-63.1 11.3-85.5 26.8-6.1-6.4-14.7-10.2-24.1-10.2-34.9 0-46.3 46.9-14.4 62.8-1.1 5-1.7 10.2-1.7 15.5 0 52.6 59.2 95.2 132 95.2 73.1 0 132.3-42.6 132.3-95.2 0-5.3-.6-10.8-1.9-15.8 31.3-16 19.8-62.5-14.9-62.5zM302.8 331c-18.2 18.2-76.1 17.9-93.6 0-2.2-2.2-6.1-2.2-8.3 0-2.5 2.5-2.5 6.4 0 8.6 22.8 22.8 87.3 22.8 110.2 0 2.5-2.2 2.5-6.1 0-8.6-2.2-2.2-6.1-2.2-8.3 0zm7.7-75c-13.6 0-24.6 11.1-24.6 24.9 0 13.6 11.1 24.6 24.6 24.6 13.8 0 24.9-11.1 24.9-24.6 0-13.8-11-24.9-24.9-24.9z">
                    </path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="footer_cols_right wow fadeIn" data-wow-delay="0.4s"
            style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn">
            <div class="footer_nav">
              <ul>
                <li><a href="#">Why WalletGrow?</a></li>
                <li><a href="#">Investment</a></li>
                <li><a href="#">Team Leader</a></li>
                <li><a href="#">Insurance agent</a></li>
                <li><a href="#">Become a detective</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Terms and conditions </a></li>
                <li><a href="#" target="_blank">About Us</a></li>
                <li><a href="#">FAQ</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="footer_copy">@2023 WalletGrow LTD. All rights reserved.</div>

      <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async="">
      </script>
    </footer>

    <div class="mobile_navbar">
      <div class="mobile_nav_container">
        <ul class="mobile_nav">
          <li class="mobile_item_active">
            <a href="{{route('home')}}">
              <svg fill="#2ecbe9" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 495.398 495.398"
                xml:space="preserve">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <g>
                    <g>
                      <g>
                        <path
                          d="M487.083,225.514l-75.08-75.08V63.704c0-15.682-12.708-28.391-28.413-28.391c-15.669,0-28.377,12.709-28.377,28.391 v29.941L299.31,37.74c-27.639-27.624-75.694-27.575-103.27,0.05L8.312,225.514c-11.082,11.104-11.082,29.071,0,40.158 c11.087,11.101,29.089,11.101,40.172,0l187.71-187.729c6.115-6.083,16.893-6.083,22.976-0.018l187.742,187.747 c5.567,5.551,12.825,8.312,20.081,8.312c7.271,0,14.541-2.764,20.091-8.312C498.17,254.586,498.17,236.619,487.083,225.514z">
                        </path>
                        <path
                          d="M257.561,131.836c-5.454-5.451-14.285-5.451-19.723,0L72.712,296.913c-2.607,2.606-4.085,6.164-4.085,9.877v120.401 c0,28.253,22.908,51.16,51.16,51.16h81.754v-126.61h92.299v126.61h81.755c28.251,0,51.159-22.907,51.159-51.159V306.79 c0-3.713-1.465-7.271-4.085-9.877L257.561,131.836z">
                        </path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
              Home
            </a>
          </li>
          <li>
            <a href="{{ route('project') }}">
              <svg fill="#636363" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 47 47"
                xml:space="preserve">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <g>
                    <g id="Layer_1_1_">
                      <g>
                        <path
                          d="M7.371,19.227H2.137C0.957,19.227,0,20.184,0,21.364v23.5C0,46.043,0.957,47,2.137,47h5.234 c1.18,0,2.136-0.957,2.136-2.136v-23.5C9.507,20.184,8.551,19.227,7.371,19.227z">
                        </path>
                        <path
                          d="M19.869,25.635h-5.234c-1.181,0-2.137,0.957-2.137,2.137v17.09c0,1.181,0.956,2.137,2.137,2.137h5.234 c1.18,0,2.136-0.957,2.136-2.137v-17.09C22.005,26.592,21.049,25.635,19.869,25.635z">
                        </path>
                        <path
                          d="M32.365,25.635h-5.234c-1.18,0-2.136,0.957-2.136,2.137v17.09c0,1.181,0.956,2.137,2.136,2.137h5.234 c1.181,0,2.137-0.957,2.137-2.137v-17.09C34.502,26.592,33.546,25.635,32.365,25.635z">
                        </path>
                        <path
                          d="M44.863,19.227h-5.234c-1.18,0-2.136,0.957-2.136,2.137v23.5c0,1.18,0.956,2.136,2.136,2.136h5.234 C46.043,47,47,46.042,47,44.864v-23.5C47,20.184,46.043,19.227,44.863,19.227z">
                        </path>
                        <path
                          d="M24.123,12.87v3.846c1.164-0.077,2.391-0.623,2.391-1.904C26.514,13.49,25.169,13.103,24.123,12.87z">
                        </path>
                        <path
                          d="M20.778,8.267c0,0.972,0.723,1.534,2.18,1.826V6.614C21.634,6.653,20.778,7.431,20.778,8.267z">
                        </path>
                        <path
                          d="M23.5,0C17.021,0,11.75,5.272,11.75,11.75c0,6.476,5.271,11.748,11.75,11.748c6.479,0,11.75-5.272,11.75-11.748 C35.25,5.272,29.979,0,23.5,0z M24.123,18.699v1.203c0,0.331-0.254,0.661-0.586,0.661c-0.328,0-0.579-0.33-0.579-0.661v-1.203 c-3.283-0.08-4.916-2.042-4.916-3.577c0-0.775,0.469-1.223,1.203-1.223c2.176,0,0.484,2.681,3.713,2.816v-4.06 c-2.88-0.523-4.624-1.786-4.624-3.942c0-2.641,2.196-4.003,4.624-4.079V3.598c0-0.331,0.251-0.661,0.579-0.661 c0.332,0,0.586,0.33,0.586,0.661v1.036c1.514,0.04,4.623,0.99,4.623,2.895c0,0.757-0.566,1.203-1.227,1.203 c-1.264,0-1.246-2.077-3.396-2.117v3.691c2.564,0.545,4.835,1.302,4.835,4.294C28.958,17.202,27.016,18.522,24.123,18.699z">
                        </path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
              Projects
            </a>
          </li>
          <li>
            <a href="{{route('wallet_index')}}">
              <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 450 450"
                xml:space="preserve" fill="#636363" style="text-align: center">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <style type="text/css">
                  .st0 {
                    fill: #636363;
                  }
                  </style>
                  <g>
                    <path class="st0"
                      d="M502.469,280.563H380.594c-11.375,0-21.547,4.563-29,12c-7.438,7.453-12.016,17.625-12.016,29 c0,11.344,4.578,21.531,12.016,28.984c7.453,7.453,17.625,12,29,12.016h121.875c5.25,0,9.531-4.281,9.531-9.547v-62.922 C512,284.813,507.719,280.563,502.469,280.563z M381.281,335.219c-7.547,0-13.656-6.125-13.656-13.656 c0-7.563,6.109-13.688,13.656-13.688s13.672,6.125,13.672,13.688C394.953,329.094,388.828,335.219,381.281,335.219z">
                    </path>
                    <path class="st0"
                      d="M314.344,321.563c0.031-36.594,29.656-66.234,66.25-66.25H490v-78.719c0-32.781-25.25-59.656-57.375-62.297 v-0.25H78.031c-9.375,0-17-7.609-17-16.984c0-9.406,7.625-17,17-17h354.563c-0.469-34.141-28.281-61.688-62.531-61.688H100.094 c-53.781,0-97.531,42.453-99.875,95.672H0v4.422v72.813v202.25c0,55.281,44.813,100.094,100.094,100.094h327.359 C462,493.625,490,465.609,490,431.063v-43.281H380.594C344,387.781,314.375,358.125,314.344,321.563z M244.531,371.547 c-3.469,6.5-8.25,11.922-14.281,16.375c-6.063,4.422-13.297,7.734-21.719,9.906c-3.688,0.922-7.547,1.578-11.469,2.109v24.531 h-29.281v-24.031c-8.344-0.719-16.313-2.031-23.813-4.078c-11.469-3.141-26.484-15.813-26.484-15.813 c-1.281-0.75-2.141-2.078-2.328-3.547c-0.156-1.469,0.328-2.938,1.375-4l14.672-14.656c1.594-1.578,4.047-1.875,5.953-0.719 c0,0,10.969,9.531,19.313,11.813c8.313,2.266,16.563,3.406,24.797,3.406c10.391,0,18.984-1.844,25.797-5.5 c6.813-3.703,10.219-9.406,10.219-17.219c0-5.625-1.656-10.047-5.047-13.313c-3.344-3.219-9.016-5.266-17.016-6.156l-26.281-2.25 c-15.563-1.531-27.594-5.859-36-13c-8.469-7.125-12.656-17.953-12.656-32.422c0-8.016,1.609-15.141,4.859-21.422 c3.25-6.266,7.672-11.563,13.297-15.875c5.625-4.328,12.172-7.594,19.625-9.75c3.125-0.906,6.406-1.5,9.719-2.031v-21.141h29.281 v20.703c6.844,0.688,13.344,1.781,19.406,3.438c10.266,2.813,21.063,11.25,21.063,11.25c1.344,0.688,2.281,2.016,2.5,3.516 c0.234,1.516-0.266,3.016-1.344,4.125l-13.75,13.969c-1.469,1.484-3.734,1.859-5.609,0.906c0,0-8.141-5.813-15.188-7.641 c-7.047-1.844-14.422-2.766-22.234-2.766c-10.156,0-17.688,1.953-22.531,5.828c-4.875,3.906-7.297,9-7.297,15.25 c0,5.641,1.703,9.969,5.203,12.969c3.438,3.047,9.281,5,17.5,5.844l23.031,1.969c17.094,1.5,30,6.031,38.766,13.609 s13.141,18.609,13.141,33.078C249.719,357.5,247.984,365.063,244.531,371.547z">
                    </path>
                  </g>
                </g>
              </svg>
              X-wallet
            </a>
          </li>
          <li>
            <a href="{{ route('insurance')}}">
              <svg fill="#636363" width="20px" height="20px" viewBox="-3 0 19 19" xmlns="http://www.w3.org/2000/svg"
                class="cf-icon-svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <path
                    d="M12.365 10.832a.473.473 0 0 1-.012.106q.012.179.012.37c0 3.239-5.865 5.063-5.865 5.063S.635 14.547.635 11.307q0-.19.012-.37a.473.473 0 0 1-.012-.105V3.643a.476.476 0 0 1 .475-.475h10.78a.476.476 0 0 1 .475.475zm-3.617-.387a1.653 1.653 0 0 0-.409-1.087 2.23 2.23 0 0 0-.617-.491l-.002-.001a2.599 2.599 0 0 0-.641-.232h-.002a2.797 2.797 0 0 0-.59-.062 2.196 2.196 0 0 1-.364-.028 1.405 1.405 0 0 1-.384-.123h-.001a.918.918 0 0 1-.294-.236v-.002a.596.596 0 0 1-.141-.358.604.604 0 0 1 .336-.509 1.67 1.67 0 0 1 .858-.23 1.722 1.722 0 0 1 .304.05l.036.008a1.926 1.926 0 0 1 .365.127 1.024 1.024 0 0 1 .3.206.554.554 0 1 0 .782-.785 2.145 2.145 0 0 0-.627-.431 2.961 2.961 0 0 0-.585-.2l-.036-.008h-.002v-.626a.554.554 0 0 0-1.109 0v.609a2.646 2.646 0 0 0-.878.343 1.712 1.712 0 0 0-.853 1.446 1.688 1.688 0 0 0 .39 1.058 2.01 2.01 0 0 0 .659.529 2.481 2.481 0 0 0 .697.225 3.281 3.281 0 0 0 .548.044 1.686 1.686 0 0 1 .355.036 1.47 1.47 0 0 1 .362.13 1.128 1.128 0 0 1 .3.24.552.552 0 0 1 .135.358c0 .124-.036.289-.31.466a1.69 1.69 0 0 1-.875.243 2.678 2.678 0 0 1-.38-.046 1.845 1.845 0 0 1-.354-.113.762.762 0 0 1-.284-.218.554.554 0 1 0-.838.726 1.852 1.852 0 0 0 .71.521 2.827 2.827 0 0 0 .577.176l.04.007v.625a.554.554 0 1 0 1.108 0v-.63a2.667 2.667 0 0 0 .9-.36 1.628 1.628 0 0 0 .814-1.397z">
                  </path>
                </g>
              </svg>
              Insurance
            </a>
          </li>
          <li>
            <a href="{{route('account')}}">
              <svg width="20px" height="20px" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1"
                xmlns="http://www.w3.org/2000/svg" fill="#636363">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <defs>
                    <style>
                    .cls-1 {
                      fill: none;
                      stroke: #636363;
                      stroke-miterlimit: 10;
                      stroke-width: 1.91px;
                    }
                    </style>
                  </defs>
                  <circle class="cls-1" cx="12" cy="7.25" r="5.73"></circle>
                  <path class="cls-1"
                    d="M1.5,23.48l.37-2.05A10.3,10.3,0,0,1,12,13h0a10.3,10.3,0,0,1,10.13,8.45l.37,2.05"></path>
                </g>
              </svg>
              Accounts
            </a>
          </li>
        </ul>
      </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
  </div>

  <a id="scrollToTop">
    <svg class="icon">
      <use xlink:href="{{ URL::asset('frontend/icons/sprite.svg#icons-arrow-down') }}"></use>
    </svg>
  </a>

  <script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery-3.6.4.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery-ui.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('frontend/js/kit.fontawesome.js') }}"></script>
  <script src="{{ URL::asset('frontend/libs/Semantic/fomantic-ui-css/semantic.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script src="{{ URL::asset('frontend/js/additional.js') }}"></script>
  <script src="{{ URL::asset('frontend/js/aos.js') }}"></script>
  <script src="{{ URL::asset('frontend/js/slick.js') }}"></script>
  <script src="{{ URL::asset('frontend/js/vendors.js') }}"></script>
  <script src="{{ URL::asset('frontend/js/app.js') }}"></script>
  <script src="{{ URL::asset('frontend/js/lottie-player.js') }}"></script>
  <script src="{{ URL::asset('frontend/js/main.js') }}"></script>
  <script src="{{ URL::asset('frontend/js/animate_text.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('frontend/js/slide.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('frontend/libs/html2canvas-master/dist/html2canvas.js') }}">
  </script>

  <script>
  AOS.init();
  window.addEventListener("load", AOS.refresh);

  $(document).ready(function($) {
    $(".slideshow").slick({
      arrows: 1,
      dots: 1,
      slidesToShow: 2,
      cssEase: "ease-out",
      autoplay: true,
    });
  });
  </script>
</body>

</html>