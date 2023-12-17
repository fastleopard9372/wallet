<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class AdminPermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('role_or_permission:Permission access|Permission create|Permission edit|Permission delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:Permission create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:Permission edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:Permission delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permission= Permission::latest()->get();
        return view('backend.permissions.index',['permissions'=>$permission]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.permissions.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required',
        ]);

        // Create the permission
        $permission = Permission::create(['name' => $request->name]);

        // Retrieve the super admin role ID (you should replace 'superadmin' with the actual role name)
        $superAdminRoleId = Role::where('name', 'super admin')->value('id');

        if ($superAdminRoleId) {
            // Insert the relationship into role_has_permissions table
            DB::table('role_has_permissions')->insert([
                'permission_id' => $permission->id,
                'role_id' => $superAdminRoleId,
            ]);
        }

        return redirect()->back()->withSuccess('Permission created and assigned to super admin role!!!');
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
    public function edit(Permission $permission)
    {
       return view('backend.permissions.edit',['permission' => $permission]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        if ($permission->delete_status == 0) {
            $permission->update(['name'=>$request->name]);
            return redirect()->back()->withSuccess('Permission updated !!!');
        }else{
            return redirect()->back()->withError('Permission cannot be updated.');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        if ($permission->delete_status == 0) {
            $permission->delete();
            return redirect()->back()->withSuccess('Permission deleted successfully.');
        } else {
            return redirect()->back()->withError('Permission cannot be deleted.');
        }
    }
}
