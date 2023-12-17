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
                    <h4 class="card-title mb-0 flex-grow-1">Farm House List</h4>
                    <a href="{{route('admin.farmhouse.create')}}" class="btn btn-primary ms-auto">Add FarmHouse</a>
                    
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    
                                    <th scope="col">Id</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($farmhouse as $list)

                                    <tr>
                                        <td><a href="#" class="fw-semibold">#{{$list->id}}</a></td>
                                        <td>{{$list->name}}</td>

                                        <td>
                                            @if(isset($list->default_image))
                                            <a href="{{asset('uploads/images/farmhouses/'.$list->default_image)}}" target="_blank">
                                                

                                                <img class="rounded" alt="100x100" width="200" src="{{asset('uploads/images/farmhouses/'.$list->default_image)}}">
                                            </a>
                                        @endif
                                        </td>

                                        @if ($list->status===1)
                                            <td class="text-success"><i class="ri-checkbox-circle-line fs-17 align-middle"></i> Active</td>
                                        @else
                                         <td class="text-danger"><i class="ri-close-circle-line fs-17 align-middle"></i> Inactive</td>    
                                        @endif

                                        <td>
                                            <div class="hstack gap-3 flex-wrap">
                                                <a href="{{route('admin.farmhouse.edit',$list->id)}}" class="link-success fs-15"><i class="ri-edit-2-line"></i></a>
                                                
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