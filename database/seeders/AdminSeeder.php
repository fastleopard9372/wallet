<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = User::create([
            'name'=>'Super Admin',
            'email'=>'superadmin@superadmin.com',
            'password'=>bcrypt('password'),
        ]);

        $admin = User::create([
            'name'=>'Admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('password')
        ]);


        $super_admin_role = Role::create(['name' => 'super admin', 'delete_status'=>1]);
        $admin_role = Role::create(['name' => 'admin']);

        $permission = Permission::create(['name' => 'Role access', 'delete_status'=>1]);
        $permission = Permission::create(['name' => 'Role edit', 'delete_status'=>1]);
        $permission = Permission::create(['name' => 'Role create', 'delete_status'=>1]);
        $permission = Permission::create(['name' => 'Role delete', 'delete_status'=>1]);

        $permission = Permission::create(['name' => 'User access']);
        $permission = Permission::create(['name' => 'User edit']);
        $permission = Permission::create(['name' => 'User create']);
        $permission = Permission::create(['name' => 'User delete']);

        $permission = Permission::create(['name' => 'Permission access', 'delete_status'=>1]);
        $permission = Permission::create(['name' => 'Permission edit', 'delete_status'=>1]);
        $permission = Permission::create(['name' => 'Permission create', 'delete_status'=>1]);
        $permission = Permission::create(['name' => 'Permission delete', 'delete_status'=>1]);

        $admin->assignRole($admin_role);
        $superAdmin->assignRole($super_admin_role);

        $super_admin_role->givePermissionTo(Permission::all());
    }
}
