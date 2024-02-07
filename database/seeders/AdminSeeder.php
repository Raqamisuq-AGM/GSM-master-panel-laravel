<?php

namespace Database\Seeders;

use App\Models\Company\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define admin data
        $adminData = [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'user_name' => 'johndoe',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
        ];

        // Seed the admin
        Admin::create($adminData);
    }
}
