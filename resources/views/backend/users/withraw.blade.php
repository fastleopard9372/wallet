@extends('backend.layouts.app')
@section('title','Dashboard')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="container-fluid">

  <div class="row">
    <div class="col-xxl-6">
      <div class="card">
        <div class="card-header align-items-center d-flex">
        </div><!-- end card header -->
        <div class="card-body">
          <div class="table-responsive">
            <table class="table align-middle mb-0">
              <thead class="table-light">
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col" style="text-align:center;">Wallet<br>address</th>
                  <th scope="col" style="text-align:center;">User<br>balance</th>
                  <th scope="col">Amount</th>
                  <th scope="col">Date</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($data as $list)
                <input type="hidden" id="record_id_{{ $list->id }}" name="record_id" value="{{ $list->id }}">
                <?php
                    try {
                        $payment_method = Crypt::decryptString($list->payment_method);
                        //  $payment_method = substr($payment_method, 0, 4) . '****' . substr($payment_method, -4);
                    } catch (DecryptException $e) {
                        // ...
                    }
                    $date = date('m/d/Y H:i:s', strtotime($list->created_at));
                ?>
                <tr>

                  <td><a href="#" class="fw-semibold">{{$list->user_name}}</a></td>
                  <td>{{$list->email}}</td>
                  <td>{{$payment_method}}</td>
                  <td>{{$list->wallet_balance}}</td>
                  <td>{{$list->amount}}</td>
                  <td>{{$date}}</td>
                  <td><i id="StatueShow_{{ $list->id }}"
                      class="@php if($list->statue==1){echo 'ri-checkbox-circle-line align-middle text-success';}else{ echo 'ri-close-circle-line align-middle text-danger';} @endphp"></i>@php
                    if($list->statue==1){ echo "Success";}else{ echo "Waiting";} @endphp</td>
                  <td>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" @php if($list->statue==0){
                      echo 'checked';}
                      else{ echo 'disabled';}
                      @endphp onclick="allow_withraw({{ $list->id }})">
                      <label class="form-check-label" for="SwitchCheck2"></label>
                    </div>
                  </td>


                </tr>

                @endforeach


              </tbody>
              <tfoot class="table-light">
                <tr>

                </tr>
              </tfoot>
            </table>
            <!-- end table -->
          </div>
        </div>
        <!-- end table responsive -->
      </div>
    </div>
  </div>

</div>
@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="jquery-3.7.1.min.js"></script>

<script>
@if(Session::has('success'))
toastr.success("{{ Session::get('success') }}");
@endif


@if(Session::has('info'))
toastr.info("{{ Session::get('info') }}");
@endif


@if(Session::has('warning'))
toastr.warning("{{ Session::get('warning') }}");
@endif


@if(Session::has('error'))
toastr.error("{{ Session::get('error') }}");
@endif
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
function allow_withraw(id) {

  var id = id
  $.ajax({
    type: "POST",
    url: "{{ route('admin.withraw.allow') }}",
    data: {
      id: id,
      _token: '{{ csrf_token() }}'
    },
    success: function(data) {
      console.log(data)
      if (data.code == 404) {
        $('#StatueShow_' + id).removeClass('ri-close-circle-line align-middle text-danger').addClass(
          'ri-checkbox-circle-line align-middle text-success');

      }
      if (data.code == 200) {

        $('#StatueShow_' + id).removeClass('ri-checkbox-circle-line align-middle text-success').addClass(
          'ri-close-circle-line align-middle text-danger');

      }
      location.reload();
    }

  });
}
</script>

@endsection