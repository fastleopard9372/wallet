@extends('backend.layouts.app')
@section('title', 'Add New Role')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col">
                        {{-- <h1 class="m-0">Add New Role</h1> --}}
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">


                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add New Role</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('admin.roles.store') }}">
                        @csrf
                        @method('post')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Role Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                    id="exampleInputEmail1" placeholder="Enter role name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPermissions">Permissions</label><br />
                                @foreach ($permissions as $permission)
                                {{-- <div class="flex flex-col justify-cente"> --}}
                                    {{-- <div class="flex flex-col"> --}}
                                        @if($permission->delete_status == 0)
                                        <label class="col-sm-4 col-md-2">
                                            <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600"
                                            name="permissions[]" value="{{ $permission->id }}">
                                            <span class="ml-2 text-gray-700">{{ $permission->name }}</span>
                                    </label>
                                    @endif
                                    {{-- </div> --}}
                                    {{-- </div> --}}
                                @endforeach
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->



            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
