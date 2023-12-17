@extends('backend.layouts.app')
@section('title','Dashboard')
@section('content')
<!-- Content Wrapper. Contains page content -->
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<div class="container-fluid">

    <div class="row">
        <div class="col-xxl-6">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Create QR Data</h4>
                    
                </div><!-- end card header -->
                <div class="card-body">
              
                    <div class="live-preview">
                        <form action="{{ route('admin.store.qrcode.data') }}" method="POST" enctype= "multipart/form-data">
                                @csrf
                                
                               
                                <div class="card-body">
                                    <input type="hidden" id="qr_id" name="record_id" value="@php if(isset($details)){echo $details->id; }else{ echo '';} @endphp">
        
                                    <div class="form-group">
                                        <label for="wallet_address">wallet address</label>
                                        <input type="text" name="wallet_address"  class="form-control"
                                            id="wallet_address" placeholder="Enter wallet address" value="@php if(isset($details)){echo $details->wallet_address; }else{ echo '';} @endphp">
                                            <span style="color:#FF0000" id="wallet_address_error"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="qrcode"> QR Code Image</label> 
                                        
                                        
                                        <input type="file" name="qrcode"  class="form-control"
                                            id="qrcode"   >
                                            <span style="color:#FF0000" id="image_error"></span>
                                    </div>
                                    
                                    {{-- <div class="form-group">
                                                <label for="status">Status</label> <br>
                                                <input type="radio" id="active" name="status" value="1" @php if(isset($details)){ if($details->status=='1'){echo 'checked';}else{ echo '';} }else{ echo 'checked';} @endphp >
                                                <label for="active">ACTIVE</label>
        
                                                <input type="radio" id="deactive" name="status" value="0" @php if(isset($details)){ if($details->status=='0'){echo 'checked';}else{ echo '';} }else{ echo '';} @endphp>
                                                <label for="Deactive">INACTIVE</label>
                                            <span style="color:#FF0000" id="status_error"></span>       
                                     </div> --}}
                                </div>
        
                                    @if(count($errors))
                                        @foreach ($errors->all() as $error)
                                        <p class="alert alert-danger alert-dismissible fade show"> {{ $error}} </p>
                                        @endforeach
        
                                    @endif
                                    <!-- /.card-body -->
        
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary" id="retrieveButton">Submit</button>
                                    </div>
                         </form>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
@section('scripts')
<script>
    // CKEDITOR.replace('description');
    CKEDITOR.replace('meta_description');

</script>

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
<script>
        $(document).ready(function(){
            $('#wallet_address').on('input', function() {   //check qr_title input for unique
                const wallet_address = $(this).val();
                let id = $('#qr_id').val();
                wallet_addressUnique(wallet_address,id)
           });
          
           
    
    
    
            $('#retrieveButton').click(function(e){
              
                
                var wallet_address = $('#wallet_address').val();
;
              
                let error_msg = "This field is required.";
                
                
        
                if (wallet_address == '') {
            
                    $("#wallet_address").text(error_msg);
                    $("#wallet_address").focus();
                    return false;
                }else{
                 
                    $("#wallet_address_error").text("");
                }
                if (qr_image == '') {
               
                    $("#qr_image_error").text(error_msg);
                    $("#qr_image").focus();
                    return false;
                }else{
                   
                    $("#qr_image_error").text("");
                }
                

                wallet_addressUnique(wallet_address,id)

            });
    
                   /*---------------check qr id unique qr_title---------------------*/
                   function wallet_addressUnique(wallet_address,id)
                {
                    // alert(id);
                    $.ajax({
                        type: "POST",
                        url: '{{ route('admin.check.wallet_address.unique') }}',
                        data: 
                        {wallet_address:wallet_address,
                            id:id
                            , _token: '{{ csrf_token() }}'},
                        success: function(data) {
                            console.log(data);
                            
                            
                                if (data.code == 404) {
                                    $("#wallet_address_error").text('This QR Title is already registered');
                                    $("#wallet_address").focus();
                                    $("#retrieveButton").attr('type','button');
                                                    
                                }else{
                                    
                                    $("#wallet_address_error").text('');
                                    $("#retrieveButton").attr('type','submit');
    
    
                                    
                                }
                            
                            
                        }
                        
                    });
                
                }
    
               
        });
    
                        
                    
                
                
    
    </script>

@endsection