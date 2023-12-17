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
                                            <span style="color:#FF0000" id="qr_title_error"></span>
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

@endsection