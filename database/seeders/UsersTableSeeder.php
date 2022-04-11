<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'junaid',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'type' => 'admin',
        ]);
        $admin->assignRole('admin');
        
        $staff = User::create([
            'name' => 'staff',
            'email' => 'staff@gmail.com',
            'password' => Hash::make('12345678'),
            'type' => 'staff',
        ]);
        $staff->assignRole('staff');
        $user = User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('12345678'),
            'type' => 'user',
        ]);
        $user->assignRole('user');
    }
}
