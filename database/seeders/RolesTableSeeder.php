<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
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
        $admin = Role::create(['name' => 'staff', 'title'=>'Staff','guard_name'=>'web']);
        $admin = Role::create(['name' => 'user', 'title'=>'User','guard_name'=>'web']);
        $admin->permission()->sync('add_permission');
    }
}
