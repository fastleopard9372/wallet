@extends('backend.layouts.app')
@section('title','Permissions')
@section('content')
@section('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col">
            <h1 class="m-0">Permissions</h1>
          </div><!-- /.col -->
          {{-- <div class="col-sm-6"> --}}
            <div class="text-right">
              @can('Permission create')
                <a href="{{route('admin.permissions.create')}}" class="btn btn-block bg-gradient-primary">New Permission</a>
            </div>
            @endcan
          {{-- </div> --}}
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">


        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Permissions</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Permission</th>
                <th>Actions</th>
              </tr>
              </thead>
              <tbody>
                @can('Permission access')
                  @foreach($permissions as $permission)
              <tr>
                <td>{{ $permission->name }}</td>
               
                <td width="10%">
                  @if($permission->delete_status == 0)
                  @can('Permission edit')
                    <a href="{{route('admin.permissions.edit',$permission->id)}}" class="btn btn-block btn-primary btn-sm">Edit</a>
                  @endcan
                  &nbsp;
                  @can('Permission delete')
                    <form action="{{ route('admin.permissions.destroy', $permission->id) }}" method="POST" class="inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-block btn-danger btn-sm">Delete</button>
                    </form>
                  @endcan
                  @endif
                </td>
                
              </tr>
              @endforeach
              @endcan
              </tbody>
              <tfoot>
              <tr>
                <th>Permission</th>
                <th>Actions</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->


        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('scripts')
<!-- DataTables  & Plugins -->
<script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('backend/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('backend/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('backend/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection