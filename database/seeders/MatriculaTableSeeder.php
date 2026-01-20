<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Matricula;
use App\Models\User;
use App\Models\ModuloFormativo;

class MatriculaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Matricula::truncate();
        Matricula::factory()->count(100)->create();
    }
}

