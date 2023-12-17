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
                    <h4 class="card-title mb-0 flex-grow-1">General Settings</h4>
                    
                </div><!-- end card header -->
                <div class="card-body">
              
                    <div class="live-preview">
                        <form action="{{route('admin.general.settings.store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="employeeName" class="form-label">Site Title</label>
                                <input type="text" class="form-control" id="site_title" name="site_title" value="@php if(isset($generalSetting)){ echo $generalSetting->site_title; }else{echo '';} @endphp"
                                    placeholder="Enter site title">

                                <span style="color:#FF0000" id="site_title_error"></span>

                            </div>
                            <div class="mb-3">
                                <label for="employeeUrl" class="form-label">Company Name</label>
                                <input type="text" class="form-control" id="company_name" name="company_name" value="@php if(isset($generalSetting)){ echo $generalSetting->company_name; }else{echo '';} @endphp"
                                    placeholder="Enter company name">
                                <span style="color:#FF0000" id="company_name_error"></span>

                            </div>
                            <div class="mb-3">
                                <label for="employeeUrl" class="form-label">Site Email</label>
                                <input type="email" class="form-control" id="site_email" name="site_email" value="@php if(isset($generalSetting)){ echo $generalSetting->site_email; }else{echo '';} @endphp"
                                    placeholder="Enter site email">
                                <span style="color:#FF0000" id="site_email_error"></span>
                                
                            </div>
                            
                           
                            {{-- <div class="mb-3">
                                <label for="VertimeassageInput" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3" 
                                    placeholder="Enter Description">@php if(isset($generalSetting)){ echo $generalSetting->description; }else{echo '';} @endphp</textarea>

                                <span style="color:#FF0000" id="description_error"></span>
                                
                            </div> --}}
                            <div class="mb-3">
                                <label for="VertimeassageInput" class="form-label">Meta Description</label>
                                <textarea class="form-control" id="meta_description" rows="3" name="meta_description"
                                    placeholder="Enter meta description">@php if(isset($generalSetting)){ echo $generalSetting->meta_description; }else{echo '';} @endphp</textarea>

                                <span style="color:#FF0000" id="meta_description_error"></span>

                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary" id="general_settings">Submit</button>
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