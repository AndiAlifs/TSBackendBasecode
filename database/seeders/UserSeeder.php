<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'username' => 'admin',
            'password' => 'admin'
        ]);
        User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'username' => 'user',
            'password' => 'user'
        ]);
    }
}
