@extends('backend.layouts.app')
@section('title','Dashboard')
@section('content')
<!-- Content Wrapper. Contains page content -->
   <!-- dropzone css -->
   <link rel="stylesheet" href="{{ URL::asset('backend_assets/libs/dropzone/dropzone.css') }}" type="text/css" />

   <!-- Filepond css -->
   <link rel="stylesheet" href="{{ URL::asset('backend_assets/libs/filepond/filepond.min.css') }}" type="text/css" />
   <link rel="stylesheet" href="{{ URL::asset('backend_assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css') }}">

<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<div class="container-fluid">

    <div class="row">
        <div class="col-xxl-6">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Farm House Form</h4>
                    
                </div><!-- end card header -->
                <div class="card-body">
              
                    <div class="live-preview">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0"></h5>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{route('admin.wallet.recharge.update')}}">
                                            @csrf
                                            @method('post')
                                            <div class="vstack gap-3 ">
                                                <select class="js-example-disabled" name="user_id">
                                                    @foreach ($data as $item)
                                                        <option value="{{$item->user_id}}">{{$item->user_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-text">₹</span>
                                                <input type="text" class="form-control"name="amount" aria-label="Amount (to the nearest dollar)">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                            <div class="hstack gap-2 mt-3">
    
                                                <button type="submit" class="js-programmatic-enable btn btn-primary">
                                                    Submit
                                                </button>
                                                {{-- <button type="button" class="js-programmatic-disable btn btn-success">
                                                    Disable
                                                </button> --}}
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                   
                  
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
@section('scripts')

    <!-- dropzone min -->
    <script src="{{ URL::asset('backend_assets/libs/dropzone/dropzone-min.js') }}"></script>
    <!-- filepond js -->
    <script src="{{ URL::asset('backend_assets/libs/filepond/filepond.min.js') }}"></script>
    <script src="{{ URL::asset('backend_assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') }}"></script>
    <script src="{{ URL::asset('backend_assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js') }}"></script>
    <script src="{{ URL::asset('backend_assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js') }}"></script>
    <script src="{{ URL::asset('backend_assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js') }}"></script>

    <script src="{{ URL::asset('backend_assets/js/pages/form-file-upload.init.js') }}"></script>
<script>
    CKEDITOR.replace('description');
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