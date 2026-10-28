<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        //datos de arranque de la tabla
        User::firstOrCreate(
            ['email' => 'limberthtola20@gmail.com'],
            [
                'name' => 'Limberth Mamani Tola',
                'password' => Hash::make('portafolio2026'),
            ],
        );
    }
}
