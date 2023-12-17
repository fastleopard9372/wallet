@extends('backend.layouts.app')
@section('title','Users')
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
            <h1 class="m-0">Users</h1>
          </div><!-- /.col -->
          {{-- <div class="col-sm-6"> --}}
            <div class="text-right ">
              @can('User create')
                <a href="{{route('admin.users.create')}}" class="btn btn-block bg-gradient-primary card-primary">New User</a>
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
            <h3 class="card-title">Users</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>User Name</th>
                <th>Email</th>
                <th>My Referred</th>
                <th>Referred by</th>
                <th>Actions</th>
              </tr>
              </thead>
              <tbody>
                @can('User access')
                  @foreach($users as $user)
              <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->my_referral_code }}</td>
                <td>
                  {{$user->referred_by}}
                 
                 
                </td>
                <td width="10%" >
                  {{-- <a href="{{route('admin.users.edit',$user->id)}}" class="link-success fs-15"><i class="ri-edit-2-line"></i></a>
                  <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline">
                    @csrf
                    @method('delete')
                    <button class="link-danger fs-15"><i class="ri-delete-bin-line"></i></button> --}}
                    <div class="hstack gap-3 flex-wrap">
                      <a href="{{route('admin.users.edit',$user->id)}}" class="link-success fs-15"><i class="ri-edit-2-line"></i></a>
                      <a href="{{ route('admin.users.destroy', $user->id) }}" class="link-danger fs-15"><i class="ri-delete-bin-line"></i></a>
                  </div>
                </form>
                  {{-- @php
                    $current_user_role = auth()->user()->roles->pluck('name')[0] ?? '';
                    echo "<pre>";
                    print_r($user);
                    die;
                  @endphp
                  @if($user->roles[0]->name == 'super admin' && $user->roles[0]->name != $current_user_role)
                    <span class="text-danger" >Not allows</span>
                  @else
                  @can('User edit')
                    <a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-block btn-primary btn-sm">Edit</a>
                  @endcan
                  &nbsp;
                  @can('User delete')
                    @if(auth()->user()->id != $user->id)
                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-block btn-danger btn-sm">Delete</button>
                    </form>
                    @endif
                  @endcan
                  @endif --}}
                </td>
              </tr>
              @endforeach
              @endcan
              </tbody>
              <tfoot>
              <tr>
                <th>User Name</th>
                <th>Email</th>
                <th>Role</th>
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