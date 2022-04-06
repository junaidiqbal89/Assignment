<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'admin', 'title'=>'Admin','guard_name'=>'web']);
        $staff = Role::create(['name' => 'staff', 'title'=>'Staff','guard_name'=>'web']);
        $user = Role::create(['name' => 'user', 'title'=>'User','guard_name'=>'web']);
        $admin->permissions()->sync(Permission::all());
        $staff->syncpermissions(['view_products','add_product']);
        $user->syncpermissions(['view_products']);
    }
}
