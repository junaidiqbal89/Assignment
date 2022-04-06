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
                'group' => 'products',
                'name' => 'view_products',
                'title' => 'View products',
                'guard_name' => 'web'
            ],
            [
                'group' => 'products',
                'name' => 'add_product',
                'title' => 'Add product',
                'guard_name' => 'web'
            ],
            [
                'group' => 'products',
                'name' => 'delete_product',
                'title' => 'Delete product',
                'guard_name' => 'web'
            ],
            [
                'group' => 'products',
                'name' => 'edit_product',
                'title' => 'Edit product',
                'guard_name' => 'web'
            ],
        ];
        Permission::insert($permissions);
    }
}