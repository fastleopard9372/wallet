<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <title>SignUp - Wallet Grow</title>
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/main.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/soc.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/mobile_navbar.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/auth/style.css')}}">
</head>

<body>
  <!-- Header -->
  <header class="header navbar-light">
    <div class="container">
      <div class="header__inner" data-controller="nav">
        <a href="/investment/index.html" class="header__logo-wrapper">
          <img src="{{ URL::asset('frontend/img/logo.svg')}}" alt="Coinmy" width="172" height="40" loading="eager"
            class="header__logo" />
        </a>
        <div class="header__actions">
          <form action="#" method="post" class="header__lang-container" data-controller="dropdown lang">
            <button type="button" class="header__lang" data-dropdown-target="trigger">
              <svg class="icon">
                <use xlink:href="{{ URL::asset('frontend/icons/sprite.svg#icons-globe')}}"></use>
              </svg>
            </button>
            <div class="header__lang-dropdown dropdown hidden" data-dropdown-target="dropdown">
              <div class="dropdown-menu">
                <ul class="dropdown-menu__list choose_language">
                  <li class="dropdown-menu__item">
                    <button type="button" class="dropdown-menu__button" data-language="en">
                      <img src="{{ URL::asset('frontend/img/langs/en.png')}}" alt="" loading="lazy" />
                      <span class="dropdown-menu__button-label">English</span>
                    </button>
                  </li>
                  <li class="dropdown-menu__item">
                    <button type="button" class="dropdown-menu__button" data-language="es">
                      <img src="{{ URL::asset('frontend/img/langs/es.png')}}" alt="" loading="lazy" />
                      <span class="dropdown-menu__button-label">Español</span>
                    </button>
                  </li>
                  <li class="dropdown-menu__item">
                    <button type="button" class="dropdown-menu__button" data-language="fr">
                      <img src="{{ URL::asset('frontend/img/langs/fr.png')}}" alt="" loading="lazy" />
                      <span class="dropdown-menu__button-label">Français</span>
                    </button>
                  </li>
                  <li class="dropdown-menu__item">
                    <button type="button" class="dropdown-menu__button" data-language="de">
                      <img src="{{ URL::asset('frontend/img/langs/de.png')}}" alt="" loading="lazy" />
                      <span class="dropdown-menu__button-label">Deutsch</span>
                    </button>
                  </li>
                  <li class="dropdown-menu__item">
                    <button type="button" class="dropdown-menu__button" data-language="it">
                      <img src="{{ URL::asset('frontend/img/langs/it.png')}}" alt="" loading="lazy" />
                      <span class="dropdown-menu__button-label">Italiano</span>
                    </button>
                  </li>
                  <li class="dropdown-menu__item">
                    <button type="button" class="dropdown-menu__button" data-language="zh">
                      <img src="{{ URL::asset('frontend/img/langs/zh.png')}}" alt="" loading="lazy" />
                      <span class="dropdown-menu__button-label">中國</span>
                    </button>
                  </li>
                  <li class="dropdown-menu__item">
                    <button type="button" class="dropdown-menu__button" data-language="hi">
                      <img src="{{ URL::asset('frontend/img/langs/hi.png')}}" alt="" loading="lazy" />
                      <span class="dropdown-menu__button-label">Hindi</span>
                    </button>
                  </li>
                  <li class="dropdown-menu__item">
                    <button type="button" class="dropdown-menu__button" data-language="vi">
                      <img src="{{ URL::asset('frontend/img/langs/vi.png')}}" alt="" loading="lazy" />
                      <span class="dropdown-menu__button-label">Vietnamese</span>
                    </button>
                  </li>
                  <li class="dropdown-menu__item">
                    <button type="button" class="dropdown-menu__button" data-language="pt">
                      <img src="{{ URL::asset('frontend/img/langs/pt.png')}}" alt="" loading="lazy" />
                      <span class="dropdown-menu__button-label">Português</span>
                    </button>
                  </li>
                  <li class="dropdown-menu__item">
                    <button type="button" class="dropdown-menu__button" data-language="ir">
                      <img src="{{ URL::asset('frontend/img/langs/ir.png')}}" alt="" loading="lazy" />
                      <span class="dropdown-menu__button-label">ایرانی</span>
                    </button>
                  </li>
                  <li class="dropdown-menu__item">
                    <button type="button" class="dropdown-menu__button" data-language="ja">
                      <img src="{{ URL::asset('frontend/img/langs/ja.png')}}" alt="" loading="lazy" />
                      <span class="dropdown-menu__button-label">日本語</span>
                    </button>
                  </li>
                  <li class="dropdown-menu__item">
                    <button type="button" class="dropdown-menu__button" data-language="tr">
                      <img src="{{ URL::asset('frontend/img/langs/tr.png')}}" alt="" loading="lazy" />
                      <span class="dropdown-menu__button-label">Türkçe</span>
                    </button>
                  </li>
                  <li class="dropdown-menu__item">
                    <button type="button" class="dropdown-menu__button" data-language="id">
                      <img src="{{ URL::asset('frontend/img/langs/id.png')}}" alt="" loading="lazy" />
                      <span class="dropdown-menu__button-label">Bahasa Indonesia</span>
                    </button>
                  </li>
                  <li class="dropdown-menu__item">
                    <button type="button" class="dropdown-menu__button" data-language="hu">
                      <img src="{{ URL::asset('frontend/img/langs/hu.png')}}" alt="" loading="lazy" />
                      <span class="dropdown-menu__button-label">Hungary</span>
                    </button>
                  </li>
                  <li class="dropdown-menu__item">
                    <button type="button" class="dropdown-menu__button" data-language="kr">
                      <img src="{{ URL::asset('frontend/img/langs/kr.png')}}" alt="" loading="lazy" />
                      <span class="dropdown-menu__button-label">한국인</span>
                    </button>
                  </li>
                  <li class="dropdown-menu__item">
                    <button type="button" class="dropdown-menu__button" data-language="th">
                      <img src="{{ URL::asset('frontend/img/langs/th.png')}}" alt="" loading="lazy" />
                      <span class="dropdown-menu__button-label">Thai</span>
                    </button>
                  </li>
                  <li class="dropdown-menu__item">
                    <button type="button" class="dropdown-menu__button" data-language="ar">
                      <img src="{{ URL::asset('frontend/img/langs/ar.png')}}" alt="" loading="lazy" />
                      <span class="dropdown-menu__button-label">Arabic</span>
                    </button>
                  </li>
                  <li class="dropdown-menu__item">
                    <button type="button" class="dropdown-menu__button" data-language="gr">
                      <img src="{{ URL::asset('frontend/img/langs/gr.png')}}" alt="" loading="lazy" />
                      <span class="dropdown-menu__button-label">Greek</span>
                    </button>
                  </li>
                  <li class="dropdown-menu__item">
                    <button type="button" class="dropdown-menu__button" data-language="pl">
                      <img src="{{ URL::asset('frontend/img/langs/pl.png')}}" alt="" loading="lazy" />
                      <span class="dropdown-menu__button-label">Polski</span>
                    </button>
                  </li>
                  <li class="dropdown-menu__item">
                    <button type="button" class="dropdown-menu__button" data-language="sl">
                      <img src="{{ URL::asset('frontend/img/langs/sl.png')}}" alt="" loading="lazy" />
                      <span class="dropdown-menu__button-label">Slovenian</span>
                    </button>
                  </li>
                  <li class="dropdown-menu__item">
                    <button type="button" class="dropdown-menu__button" data-language="sw">
                      <img src="{{ URL::asset('frontend/img/langs/sw.png')}}" alt="" loading="lazy" />
                      <span class="dropdown-menu__button-label">Sweden</span>
                    </button>
                  </li>
                  <li class="dropdown-menu__item">
                    <button type="button" class="dropdown-menu__button" data-language="bg">
                      <img src="{{ URL::asset('frontend/img/langs/bg.png')}}" alt="" loading="lazy" />
                      <span class="dropdown-menu__button-label">Bengali</span>
                    </button>
                  </li>
                </ul>
              </div>
              <div class="dropdown__arrow"></div>
            </div>
          </form>
          <a href="/investment/account/service.html"
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

  <div class="auth-modal">
    <div class="auth-modal__logo">
      <a href="/investment/index.html">
        <img src="{{ URL::asset('frontend/img/logo.svg')}}" alt="logo" width="80px">
      </a>
    </div>
    <div class="auth-modal__title">
      Sign up
    </div>
    <form action="#" class="auth-form" id="signup_form" name="signup_form">
      <div class="form-control form-control--shadow form-control--round form-control--email d-flex align-center">
        <div class="start-icon">
          <img src="{{ URL::asset('frontend/images/auth/email.svg')}}" alt="email">
        </div>
        <input type="text" name="email" id="email" placeholder="Email address">
      </div>
      <div class="form-control form-control--shadow form-control--round form-control--username d-flex align-center">
        <div class="start-icon">
          <img src="{{ URL::asset('frontend/images/auth/username.svg')}}" alt="user name">
        </div>
        <input type="text" name="username" id="username" placeholder="User name">
      </div>
      <div class="form-control form-control--shadow form-control--round form-control--password d-flex align-center">
        <div class="start-icon">
          <img src="{{ URL::asset('frontend/images/auth/password-lock.svg')}}" alt="login password">
        </div>
        <input type="password" name="login_password" id="login_password" placeholder="Login password">
      </div>
      <div class="form-control form-control--shadow form-control--round form-control--security d-flex align-center">
        <div class="start-icon">
          <img src="{{ URL::asset('frontend/images/auth/security-password.svg')}}" alt="security password">
        </div>
        <input type="password" name="security_password" id="security_password" placeholder="Security password">
      </div>
      <div
        class="form-control form-control--shadow form-control--round form-control--referral-code d-flex align-center">
        <div class="start-icon">
          <img src="{{ URL::asset('frontend/images/auth/referral-code.svg')}}" alt="referral code">
        </div>
        <input type="password" name="security_password" id="security_password" placeholder="Referral code">
      </div>
      <div class="form-control form-control--agree d-flex align-top">
        <input type="checkbox" name="agree" id="agree" class="custom-checkbox">
        <label for="agree">I agree with <span class="text-bold">Wallet Grow</span> <a href="#">Privacy
            Police</a> and <a href="#">Terms of
            Service</a></label>
      </div>
      <div class="form-control auth-btn-group">
        <button type="button" class="auth-btn active">Sign up</button>
      </div>
    </form>
    <div class="form-control forgot-password d-flex align-center justify-center">
      Already have an account?
      <a href="/investment/signin.html" class="login-link">Log in</a>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer_cols">
        <div class="footer_cols_left wow fadeIn" data-wow-delay="0.2s"
          style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn">
          <div class="footer_logo">
            <a href="#">
              <img data-src="{{ URL::asset('frontend/img/logo.svg')}}" src="{{ URL::asset('frontend/img/logo.svg')}}"
                class="js-img" alt="UniJoin Bitcoin Mixer footer logo" /></a>
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
                    <use xlink:href="{{ URL::asset('frontend/icons/sprite.svg#icons-soc-twitter')}}"></use>
                  </svg>
                </span>
              </a>
              <a href="https://www.youtube.com/channel/UCCEfChYfcmcOy8sulHPWt6w" class="soc_item" target="_blank">
                <svg class="icon">
                  <use xlink:href="{{ URL::asset('frontend/icons/sprite.svg#icons-soc-youtube')}}"></use>
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

    <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js')}}" async="">
    </script>
  </footer>

  <!-- Mobile Bottom Navbar -->
  <div class="mobile_navbar">
    <div class="mobile_nav_container">
      <ul class="mobile_nav">
        <li class="mobile_item_active">
          <a href="/investment/">
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
          <a href="/investment/projects">
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
          <a href="/investment/wallet/">
            <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
              width="20px" height="20px" viewBox="0 0 450 450" xml:space="preserve" fill="#636363"
              style="text-align: center">
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
          <a href="/investment/insurance">
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
          <a href="/investment/account">
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
                <path class="cls-1" d="M1.5,23.48l.37-2.05A10.3,10.3,0,0,1,12,13h0a10.3,10.3,0,0,1,10.13,8.45l.37,2.05">
                </path>
              </g>
            </svg>
            Accounts
          </a>
        </li>
      </ul>
    </div>
  </div>

  <!-- Scroll to top -->
  <a id="scrollToTop">
    <svg class="icon">
      <use xlink:href="{{ URL::asset('frontend/icons/sprite.svg#icons-arrow-down')}}"></use>
    </svg>
  </a>
</body>

<script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery-3.6.4.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/js/kit.fontawesome.js')}}"></script>
<script src="{{ URL::asset('frontend/libs/Semantic/fomantic-ui-css/semantic.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="{{ URL::asset('frontend/js/additional.js')}}"></script>
<script src="{{ URL::asset('frontend/js/aos.js')}}"></script>
<script src="{{ URL::asset('frontend/js/slick.js')}}"></script>
<script src="{{ URL::asset('frontend/js/vendors.js')}}"></script>
<script src="{{ URL::asset('frontend/js/app.js')}}"></script>
<script src="{{ URL::asset('frontend/js/lottie-player.js')}}"></script>
<script src="{{ URL::asset('frontend/js/main.js')}}"></script>
<script src="{{ URL::asset('frontend/js/animate_text.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/js/slide.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/libs/html2canvas-master/dist/html2canvas.js')}}"></script>

</html>