<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Admin
        User::create([
            'name'     => 'Admin Sovereign',
            'email'    => 'admin@sovereign.com',
            'password' => Hash::make('password123'),
            'role'     => 'admin',
        ]);

        // 2. Akun Customer
        User::create([
            'name'     => 'Customer Test',
            'email'    => 'customer@gmail.com',
            'password' => Hash::make('password123'),
            'role'     => 'customer',
        ]);
    }
}