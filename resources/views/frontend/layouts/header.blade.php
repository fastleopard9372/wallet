<header class="header navbar-light">
  <div class="container">
    <div class="header__inner" data-controller="nav">
      <a href="##################" class="header__logo-wrapper">
        <img src="{{ URL::asset('frontend/img/logo.svg') }}" alt=" WalletGrow" width="172" height="40" loading="eager"
          class="header__logo" />
      </a>
      <div class="switch_box">
        <div class="amount">
          <span class="leftbtn">
            <img src="{{ URL::asset('frontend/icons/dollar.svg') }}" alt=" left" style="width: 35px; height: 35px" />
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
      <div class="header__actions">


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