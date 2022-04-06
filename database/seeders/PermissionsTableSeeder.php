<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'group' => 'roles',
                'name' => 'view_roles',
                'title' => 'View Roles',
                'guard_name' => 'web'
            ],
            [
                'group' => 'roles',
                'name' => 'add_role',
                'title' => 'Add Role',
                'guard_name' => 'web'
            ],
            [
                'group' => 'roles',
                'name' => 'delete_role',
                'title' => 'Delete Role',
                'guard_name' => 'web'
            ],
            [
                'group' => 'roles',
                'name' => 'edit_role',
                'title' => 'Edit Role',
                'guard_name' => 'web'
            ],
            [
                'group' => 'roles',
                'name' => 'update_role',
                'title' => 'Update Role',
                'guard_name' => 'web'
            ],
        ];
        Permission::insert($permissions);
    }
}