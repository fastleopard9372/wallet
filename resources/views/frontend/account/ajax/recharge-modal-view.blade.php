<div class="container">
  <div class="recharge_wrapper">
      <div class="recharge__ponit_input">
          <div class="label">QR Code</div>
          <div class="point_value">

              <span>Wallet Address: </span>
              <i class="copy-icon" onclick="copyToClipboard()"><img id="copy_icon" style ="width: 12px" class="copy-icon" src="{{ URL::asset('frontend/images/copy.png') }}" alt="" srcset=""></i> <!-- Unicode for the clipboard icon -->
              <input type="text" id="wallet_address" readonly class="wallet_address" value="@php if(isset($qrCodeDetails)){echo $qrCodeDetails->wallet_address;} @endphp" />

              <span>Coins: @php if(isset($rechargeCoins)){echo $rechargeCoins;} @endphp</span>

          </div>
      </div>

      <img src="{{ asset('uploads/images/qrCode/' . $qrCodeDetails->qrcode) }}" alt="{{ $qrCodeDetails->qrcode }}" width="100" height="110">
      <div>
        <form action="{{route('front.account.recharge.coins')}}" method="POST">
          @csrf
          <input type="text" name="txn_id" id="txn_id" placeholder="Enter Transaction Id">
          <input type="hidden" name="coins" id="coins"value="@php if(isset($rechargeCoins)){echo $rechargeCoins;} @endphp">


          <button type="submit">submit</button>
        </form>
       
      </div>
   
  </div>
</div>

<script>
  function copyToClipboard() {
      var copyText = document.getElementById("wallet_address");
      copyText.select();
      document.execCommand("copy");
      alert("Copied the wallet address: " + copyText.value);
  }
</script>