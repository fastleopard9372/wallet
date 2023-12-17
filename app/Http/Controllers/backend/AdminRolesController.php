<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Gate;
class AdminRolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('role_or_permission:Role access|Role create|Role edit|Role delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:Role create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:Role edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:Role delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role= Role::latest()->get();

        return view('backend.roles.index',['roles'=>$role]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::get();
        return view('backend.roles.new',['permissions'=>$permissions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required']);

        $role = Role::create(['name'=>$request->name]);

        $role->syncPermissions($request->permissions);
        
        return redirect()->back()->withSuccess('Role created !!!');
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
    public function edit(Role $role)
    {
        $permission = Permission::get();
        $role->permissions;
        $current_user_role = auth()->user()->roles->pluck('name')[0] ?? '';
        if($role->name != 'super admin' || $role->name == $current_user_role){
            return view('backend.roles.edit',['role'=>$role,'permissions' => $permission]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        if($role->name != 'super admin'){
            $role->update(['name'=>$request->name]);
            $role->syncPermissions($request->permissions);
            return redirect()->back()->withSuccess('Role updated !!!');
        }else{
            return redirect()->back()->withError('Role cannot be updated.');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        if($role->name != 'super admin'){
            $role->delete();
            return redirect()->back()->withError('Role deleted !!!');
        }
    }
}
