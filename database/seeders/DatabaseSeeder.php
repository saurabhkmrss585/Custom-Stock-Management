<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 10 random users with a default role
        \App\Models\User::factory(10)->create([
            'role' => 'user', // Default role for regular users
        ]);

        // Create an admin user
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin12345'),
            'role' => 'admin', // Set role to admin for this user
        ]);
    }
}