<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'F_name' => 'Admin',
            'L_name' => 'User',
            'no_telp' => '081234567890',
            'email' => 'admin@example.com',
            'password' => bcrypt('adminuser123'),
        ]);
    }
}
