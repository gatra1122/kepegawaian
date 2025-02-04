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
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@email.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Admin User 2',
            'email' => 'admin2@email.com',
            'password' => Hash::make('admin2123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Operator User',
            'email' => 'operator@email.com',
            'password' => Hash::make('operator123'),
            'role' => 'operator',
        ]);

        User::create([
            'name' => 'Operator User 2',
            'email' => 'operator2@email.com',
            'password' => Hash::make('operator2123'),
            'role' => 'operator',
        ]);
    }
}
