<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    public function run(): void
    {
        Rol::create([
            'rol' => 'admin'
        ]);

        Rol::create([
            'rol' => 'client'
        ]);
    }
}
