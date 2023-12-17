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
                    <h4 class="card-title mb-0 flex-grow-1">Content List</h4>
                    <a href="{{route('admin.users.wallet.recharge.manually')}}" class="btn btn-primary ms-auto">Manually Recharge</a>
                    
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    
                                    <th scope="col">User Name</th>
                                    <th scope="col">User ID</th>
                                    <th scope="col">Amount Recharge</th>
                                    <th scope="col">Date Of Recharge</th> 
                                    {{-- <th scope="col">Action</th> --}}

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $list)

                                    <tr>
                                        <td><a href="#" class="fw-semibold">{{$list->user_name}}</a></td>
                                        <td>{{$list->user_id}}</td>
                                        <td>{{$list->manual_amount_reacharge_by_admin}}</td>
                                        <td>{{$list->amount_reacharge_date}}</td>
                                        
                                       

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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


@endsection