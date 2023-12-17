@extends('backend.layouts.app')
@section('title', 'Edit User')
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


                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit User</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('admin.users.update',$user->id)}}">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputName">Name</label>
                                <input type="text" name="name" value="{{ old('name',$user->name) }}" class="form-control"
                                    id="exampleInputName" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail">User Email</label>
                                <input type="email" name="email" value="{{ old('email',$user->email) }}" class="form-control"
                                    id="exampleInputEmail" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword">Password</label>
                                <input type="password" name="password" class="form-control"
                                    id="exampleInputPassword" placeholder="Enter password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword">Password</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                    id="exampleInputPassword" placeholder="Confirm password">
                            </div>
                            {{-- @php
                                $current_user_role = auth()->user()->roles->pluck('name')[0] ?? '';
                                $edit_user = $user->roles->pluck('name')[0] ?? '';
                            @endphp
                            @if($current_user_role != $edit_user)
                            <div class="form-group">
                                <label for="exampleInputRoles">Role</label><br />
                                @foreach ($roles as $role)
                                    @if($role->name != 'super admin')
                                        <label class="col-sm-4 col-md-2 border">
                                            <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600"
                                            name="roles[]" value="{{ $role->id }}"
                                            @if(count($user->roles->where('id',$role->id)))
                                                checked 
                                            @endif
                                            >
                                            <span class="ml-2 text-gray-700">{{ $role->name }}</span>
                                    </label>
                                    @endif
                                @endforeach
                            </div>
                            
                            @role('super admin')
                            <div class="form-group">
                                <label for="exampleInputPermissions">Permissions</label><br />
                                @foreach ($permissions as $permission)
                                @if($permission->delete_status == 0)
                                        <label class="col-sm-4 col-md-2 border" >
                                            <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600"
                                            name="permissions[]" value="{{ $permission->id }}"
                                            @if(count($user->permissions->where('id',$permission->id)))
                                                checked 
                                            @endif
                                            >
                                            <span class="ml-2 text-gray-700">{{ $permission->name }}</span>
                                    </label>
                                @endif
                                @endforeach
                            </div>
                            @endrole
                            @endif --}}
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
