<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Create students user
        User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => Hash::make('password123'),
            'role' => 'student',
        ]);

        User::create([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'password' => Hash::make('password123'),
            'role' => 'student',
        ]);

        //Create a demonstrator user
        User::create([
            'name' => 'Josh Smith',
            'email' => 'demonstrator@example.com',
            'password' => Hash::make('password123'),
            'role' => 'demonstrator',
        ]);
      
        //Create a lecturer user
        User::create([
            'name' => 'John Smith',
            'email' => 'lecturer@example.com',
            'password' => Hash::make('password123'),
            'role' => 'lecturer',
        ]);
            
    }
}
