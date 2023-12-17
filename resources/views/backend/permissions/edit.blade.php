@extends('backend.layouts.app')
@section('title', 'Edit Permission')
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
                        <h3 class="card-title">Edit Permission</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('admin.permissions.update',$permission->id)}}">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputName">Permission Name</label>
                                <input type="text" name="name" value="{{ old('name',$permission->name) }}" class="form-control"
                                    id="exampleInputName" placeholder="Enter permission name">
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
