@extends('backend.layouts.app')
@section('title','Dashboard')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="container-fluid">


    <div class="card card-">
        <div class="card-header">
                {{-- <h3 class="card-title">Add New QR Code</h3> --}}
                <a href="{{route('admin.create')}}" class="btn btn-primary ms-auto">Add New QR Code</a>
            </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>QR ID</th>
                            <th>wallet address</th>
                            <th>Image</th>
                            
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                       
                        <td>{{$item->id}}</td>
                        <td>{{$item->wallet_address}}</td>
                        <td>
                           
                           
                            <img src="{{ asset('uploads/images/qrCode/' . $item->qrcode) }}" alt="{{ $item->qrcode}}" width="100" height="110">
                           
                        </td>
                        
                        <td>
                            <a href="{{route('admin.update.qr',encrypt($item->id))}}" >edit
                                <i class="fa fa-edit" style="font-size: 22px"></i>
                            </a>&nbsp;&nbsp;&nbsp;&nbsp;
                            
                            {{-- <a href="{{route('admin.qr.row.delete',encrypt($item->id))}}">
                                <i class="fa fa-trash" style="font-size:22px;color:red" aria-hidden="true"></i>
                            </a> --}}

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


    </div>
            <!-- /.card -->



        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
@endsection
@section('scripts')

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
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script>
            new DataTable('#qrcode_list');
        </script>
@endsection