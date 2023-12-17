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
                    <h4 class="card-title mb-0 flex-grow-1">Content Form</h4>
                    
                </div><!-- end card header -->
                <div class="card-body">
              
                    <div class="live-preview">
                        <form action="{{route('admin.content.store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <input type="hidden" class="form-control" id="id" name="id" value="@php if(isset($details)){ echo $details->id; }else{echo '';} @endphp">
                                <label for="employeeName" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="@php if(isset($details)){ echo $details->title; }else{echo '';} @endphp"
                                    placeholder="Enter content title">

                                <span style="color:#FF0000" id="title_error"></span>

                            </div>
                            <div class="mb-3">
                                <label for="VertimeassageInput" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3" 
                                    placeholder="Enter Description">@php if(isset($details)){ echo $details->description; }else{echo '';} @endphp</textarea>

                                <span style="color:#FF0000" id="description_error"></span>
                                
                            </div>
                            <div class="mb-3">
                                
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select mb-3" name="status"  aria-label="Default select example">
                                    <option value="0" @php if($details->status===0){ echo "selected";} else{ echo "";}  @endphp>Inactive</option>
                                    <option value="1" @php if($details->status===1){ echo "selected" ;} else{ echo "";} @endphp >Active</option>
                                </select>
                                <span style="color:#FF0000" id="site_title_error"></span>

                            </div>

                          
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary" id="content_sub">Submit</button>
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
    $('#content_sub').click(function(e){

        
        var title = $('#title').val();
        var description = $('#description').val();
        let error_msg = "This field is required.";


        if (title == '') {

            $("#title_error").text(error_msg);
            $("#title").focus();
            return false;
        }else{
            $("#title_error").text("");
        }
        // if (description == '') {

        //     $("#description_error").text(error_msg);
        //     $("#description").focus();
        //     return false;
        // }else{
           
            
        //     $("#description_error").text("");
        // }

     
    });
});
</script>

@endsection