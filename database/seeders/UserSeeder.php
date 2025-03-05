<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'User Användare',
            'email' => 'user@example.com',
            'password' => bcrypt('lösenord'),
            'role' => 'user',
            'email_verified_at' => now()
            ]);

        User::create([
                'name' => 'Admin Användare',
                'email' => 'admin@example.com',
                'password' => bcrypt('lösenord'),
                'role' => 'admin',
                'email_verified_at' => now()
                ]);
    }
}
