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
                        <form action="{{route('admin.farmhouse.store')}}" method="post"  enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <input type="hidden" class="form-control" id="id" name="id" value="@php if(isset($details)){ echo $details->id; }else{echo '';} @endphp">
                                <label for="employeeName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="@php if(isset($details)){ echo $details->name; }else{echo '';} @endphp"
                                    placeholder="Enter content name">

                                <span style="color:#FF0000" id="name_error"></span>

                            </div>
                            <div class="mb-3">
                                <label for="VertimeassageInput" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3" 
                                    placeholder="Enter Description">@php if(isset($details)){ echo $details->description; }else{echo '';} @endphp</textarea>

                                <span style="color:#FF0000" id="description_error"></span>
                                
                            </div>
                            <div class="mb-3">
                                
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select mb-3" name="status" aria-label="Default select example">
                                    <option value="0" @php if($details->status==0){ echo "selected";} else{ echo "";}  @endphp>Inactive</option>
                                    <option value="1" @php if($details->status==1){ echo "selected" ;} else{ echo "";} @endphp >Active</option>
                                </select>
                                <span style="color:#FF0000" id="site_title_error"></span>

                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Images</label>
                                <input type="file" class="filepond filepond-input-multiple" multiple
                                                        name="images[]" id="images" data-allow-reorder="true" data-max-file-size="3MB"
                                                         data-max-files="3" accept="image/gif, image/jpeg, image/png" >


                                <span style="color:#FF0000" id="images_error"></span>

                            </div>


                           
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary" id="framhouse_sub">Submit</button>
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
    $('#framhouse_sub').click(function(e){

        alert(1234);
        
        var name = $('#name').val();
        var description = $('#description').val();
        var images = $('#images').val();
        let error_msg = "This field is required.";

        
        if (name == '') {

            $("#name_error").text(error_msg);
            $("#name").focus();
            return false;
        }else{
            $("#name_error").text("");
        }
        if (images == '') {

            $("#images_error").text(error_msg);
            $("#images").focus();
            return false;
        }else{
           
            
            $("#images_error").text("");
        }

     
    });
});
</script>

@endsection