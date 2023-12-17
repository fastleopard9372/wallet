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
                    <h4 class="card-title mb-0 flex-grow-1">Banner Form</h4>
                    
                </div><!-- end card header -->
                <div class="card-body">
              
                    <div class="live-preview">
                        <form action="{{route('admin.banner.store')}}" method="post"  enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <input type="hidden" class="form-control" id="id" name="id" value="@php if(isset($details)){ echo $details->id; }else{echo '';} @endphp">
                                <label for="employeeName" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="@php if(isset($details)){ echo $details->title; }else{echo '';} @endphp"
                                    placeholder="Enter banner title">

                                <span style="color:#FF0000" id="title_error"></span>

                            </div>
                     
                            <div class="mb-3">
                                
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select mb-3" name="status" aria-label="Default select example">
                                    <option value="0" @php if(isset($details)){ if($details->status===0){ echo "selected";} else{ echo "";}}  @endphp>Inactive</option>
                                    <option value="1" @php if(isset($details)){ if($details->status===1){ echo "selected" ;} else{ echo "";}} @endphp >Active</option>
                                </select>
                                <span style="color:#FF0000" id="site_title_error"></span>

                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Image</label>
                                <input type="file" class="filepond filepond-input-multiple"
                                                        name="image" id="image" data-allow-reorder="true" data-max-file-size="3MB"
                                                         data-max-files="3" accept="image/gif, image/jpeg, image/png" >


                                <span style="color:#FF0000" id="image_error"></span>

                                @if (isset($details->image))
                                    <a href="{{asset('uploads/images/banner/'.$details->image)}}" target="_blank">
                                                    

                                        <img class="rounded" alt="100x100" width="200" src="{{asset('uploads/images/banners/'.$details->image)}}">
                                    </a>
                                @endif

                                


                            </div>


                           
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary" id="banner_sub">Submit</button>
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

<script>
    $(document).ready(function(){
    $('#banner_sub').click(function(e){

       
        
        var title = $('#title').val();
        var image = $('#image').val();
        var id = $('#id').val();
        let error_msg = "This field is required.";

        
        if (title == '') {

            $("#title_error").text(error_msg);
            $("#title").focus();
            return false;
        }else{
            $("#title_error").text("");
        }

        
        if(id>0){
            $("#image_error").text("");
        }else{
            if (image == '') {

            $("#image_error").text(error_msg);
            $("#image").focus();
            return false;
            }else{
            $("#image_error").text("");
            }
        }
        

     
    });
});
</script>

@endsection