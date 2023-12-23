<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/account/account.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/mobile_navbar.css') }}" />

  <title>Recharge</title>
</head>

<body>
  <!-- Header -->
  <section class="account_default_header">
    <a href="{{ route('front.wallet_index') }}" class="align_item_center">
      <svg fill="#ffffff" height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
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
      Back
    </a>
    <div class="flexgrow" style="text-align: center">Recharge</div>
  </section>

  <!-- Recharge -->
  <section class="mb50">
    <div class="recharge_wrapper">
      <div class="recharge__ponit_input">
        <div class="label">Quantity</div>
        <div class="point_value">
          <input type="number" id="recharge_coin" class="recharge_coin" value="100" />
        </div>
        <div class="plus_btn_group">
          <button id="plus_1">+</button>
          <button id="plus_k">+K</button>
        </div>
      </div>
      <div class="recharge">
        <div class="recommended_points" id="recommended_points">
          <div id="recharge" class="current">100</div>
          <div id="recharge">200</div>
          <div id="recharge">500</div>
          <div id="recharge">1000</div>
          <div id="recharge">2000</div>
          <div id="recharge">5000</div>
          <div id="recharge">10000</div>
          <div id="recharge">20000</div>
        </div>
        <p class="text-red rule_header text-bold underline">Recharge rules:</p>
        <ol class="recharge_rule text-red">
          <li>Minimum reacharge amount is 10 USDT or 100 TRX.</li>
          <li>The deposit will usually be credited into your account within 10 minutes.</li>
          <li>If you paid but the funds not been credited to your account , please contact customer service.</li>
        </ol>
        <!-- <button class="trade_center_buy">
            <span>icon</span>
            <span>Trade center Buy</span>
          </button> -->
      </div>
    </div>
    <!-- Online Recharges -->
    <div class="online_recharges_wrapper fts">
      <div class="online_recharges__header align_item_center">
        <svg fill="#333333" width="20px" height="20px" viewBox="0 0 256 256" id="Flat"
          xmlns="http://www.w3.org/2000/svg" stroke="#333333">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <g>
              <path
                d="M108,36H48A12,12,0,0,0,36,48v60a12,12,0,0,0,12,12h60a12,12,0,0,0,12-12V48A12,12,0,0,0,108,36ZM96,96H60V60H96Z">
              </path>
              <path
                d="M208,36H148a12,12,0,0,0-12,12v60a12,12,0,0,0,12,12h60a12,12,0,0,0,12-12V48A12,12,0,0,0,208,36ZM196,96H160V60h36Z">
              </path>
              <path
                d="M108,136H48a12,12,0,0,0-12,12v60a12,12,0,0,0,12,12h60a12,12,0,0,0,12-12V148A12,12,0,0,0,108,136ZM96,196H60V160H96Z">
              </path>
              <path
                d="M208,136H148a12,12,0,0,0-12,12v60a12,12,0,0,0,12,12h60a12,12,0,0,0,12-12V148A12,12,0,0,0,208,136Zm-12,60H160V160h36Z">
              </path>
            </g>
          </g>
        </svg>
        Online Recharges
      </div>
      <div class="online_recharges">
        <div class="online_recharge">
          <div>
            <img src="{{ URL::asset('frontend/images/account/Tether.gif') }}" alt="Tether" style="width: 40px" />
            <div class="recharge_badge">
              FAST PAY 1
              <div class="caret"></div>
            </div>
          </div>
          <div>
            <div class="recharge_number" style="width:40%;" id="usdt">
              <div id="usdt_btn">
                USDT <br />
                <span>TRC-20</span>
              </div>
            </div>
            <div class="recharge_detail">
              <div>
                <p class="text-red">
                  After payment success, please return to the pages fill in the Transaction Hash correctly.
                </p>
                <p>Limit USDT: <span>10</span>~<span>10,000</span></p>
              </div>
              <div>
                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                  stroke="#333333">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <path d="M10 7L15 12L10 17" stroke="#333333" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round"></path>
                  </g>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="online_recharge">
          <div>
            <img src="{{ URL::asset('frontend/images/account/TRX.gif') }}" alt="TRX" style="width: 40px" />
            <div class="recharge_badge">
              FAST PAY 2
              <div class="caret"></div>
            </div>
          </div>
          <div>
            <div class="recharge_number" style="width:40%;" id="trx_btn">
              <div id="trx">
                TRX <br />
                <span>TRC-20</span>
              </div>
            </div>
            <div class="recharge_detail">
              <div>
                <p class="text-red">
                  After payment success, please return to the pages fill in the Transaction Hash correctly.
                </p>
                <p>Limit TRX: <span>100</span>~<span>100,000</span></p>
              </div>
              <div>
                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                  stroke="#333333">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <path d="M10 7L15 12L10 17" stroke="#333333" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round"></path>
                  </g>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Invite Friend Modal -->
  <div id="usdt_modal" class="invite_modal">
    <div class="invite_content">
      <div class="invite_modal_content" id="usdt_modal_view_content">Cotent</div>

      <div class="invite_modal_footer">
        <button id="usdt_modal_close">close</button>
      </div>
    </div>
  </div>


  <div id="trx_modal" class="invite_modal">
    <div class="invite_content">
      <div class="invite_modal_content" id="trx_modal_view_content">Cotent</div>

      <div class="invite_modal_footer">
        <button id="trx_modal_close">close</button>
      </div>
    </div>
  </div>
  <!-- Mobile Navbar -->
  @include('frontend.layouts.mobile-navbar')
  <script src="{{ URL::asset('frontend/js/modal_view.js') }}"></script>
  <script src="{{ URL::asset('frontend/js/recharge_btn.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery-3.6.4.min.js')}}"></script>
  <script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery-ui.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
    integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  @include('frontend.layouts.toaster-notifaction')


  <script>
  $(document).ready(function() {

    $('#usdt').click(function(e) {

      var recharge_coin = $('#recharge_coin').val();


      modalViewContent('usdt', recharge_coin);




    });
    $('#trx').click(function(e) {

      var recharge_coin = $('#recharge_coin').val();



      modalViewContent('trx', recharge_coin);


    });

  });

  function modalViewContent(type, recharge_coin) {
    $.ajax({
      url: "{{ route('front.account.modal.view.content') }}",
      data: {
        type: type,
        recharge_coin: recharge_coin,
        _token: '{{ csrf_token() }}',
      },
      type: "POST",
      success: function(response) {
        console.log(type);
        if (type === 'usdt') {
          $('#usdt_modal_view_content').html(response);

        }
        if (type === 'trx') {
          $('#trx_modal_view_content').html(response);

        }
        // console.log(response);

      }
    });
  }
  </script>


</body>

</html>