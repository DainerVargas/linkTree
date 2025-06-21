<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'rol_id' => 1,
        ]);
        
        User::create([
            'name' => 'client',
            'email' => 'client@gmail.com',
            'password' => Hash::make('client123'),
            'rol_id' => 2,
        ]);
    }
}
