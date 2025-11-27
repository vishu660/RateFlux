<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // --- Create Admin ---
        User::create([
            'name'  => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('Admin@123'),    // change if needed
            'phone' => '9999999999',
            'username' => 'admin',
            'profile_image' => null,
            'role' => 'admin',
            'otp' => null,
            'otp_expires_at' => null,
            'email_verified_at' => now(),
        ]);

        // --- Create Normal User ---
        User::create([
            'name'  => 'Normal User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('User@123'),    // change if needed
            'phone' => '8888888888',
            'username' => 'user1',
            'profile_image' => null,
            'role' => 'user',
            'otp' => null,
            'otp_expires_at' => null,
            'email_verified_at' => now(),
        ]);
    }
}
