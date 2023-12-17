<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('role_or_permission:User access|User create|User edit|User delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:User create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:User edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:User delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user= User::latest()->get();

        return view('backend.users.index',['users'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();
        $permissions = Permission::get();
        return view('backend.users.new',['roles'=>$roles, 'permissions'=>$permissions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'email' => 'required|email|unique:users',
            'password'=>'required|confirmed'
        ]);
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> bcrypt($request->password),
        ]);
        $user->syncRoles($request->roles);
        $user->syncPermissions($request->permissions);
        return redirect()->back()->withSuccess('User created !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $current_user_role = auth()->user()->roles->pluck('name')[0] ?? '';
        $edit_user = $user->roles->pluck('name')[0] ?? '';
        if($edit_user != 'super admin' || $current_user_role == $edit_user){
            $role = Role::get();
            $user->roles;
            $permission = Permission::get();
            $user->permissions;
            $current_user_role = auth()->user()->roles->pluck('name')[0] ?? '';
            return view('backend.users.edit',['user'=>$user,'roles' => $role, 'permissions'=>$permission]);
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $validated = $request->validate([
            'name'=>'required',
            'email' => 'required|email|unique:users,email,'.$user->id.',id',
        ]);
        if($request->password != null){
            $request->validate([
                'password' => 'required|confirmed'
            ]);
            $validated['password'] = bcrypt($request->password);
        }

        $current_user_role = auth()->user()->roles->pluck('name')[0] ?? '';
        $edit_user = $user->roles->pluck('name')[0] ?? '';
        if($edit_user != 'super admin' || $current_user_role == $edit_user){
            $user->update($validated);
            if($current_user_role != $edit_user){
                $user->syncRoles($request->roles);
                $user->syncPermissions($request->permissions);
            }
            return redirect()->back()->withSuccess('User updated !!!');
        }else{
            return redirect()->back()->withError('User cannot be updated !!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if($user->roles[0]->name != 'super admin'){
            $user->delete();
            return redirect()->back()->withError('User deleted !!!');
        }
    }
}
