<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Admin user
        User::create([
            'firstname' => 'Admin',
            'lastname' => 'User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
            'role' => 'Admin',
        ]);

        // Normal user
        User::create([
            'firstname' => 'Normal',
            'lastname' => 'User',
            'email' => 'user@example.com',
            'password' => Hash::make('password123'),
            'role' => 'User',
        ]);
    }
}
