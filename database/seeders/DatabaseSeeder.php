<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Database\Seeders\FamiliasProfesionalesTableSeeder;
use Database\Seeders\CiclosFormativosTableSeeder;
use Database\Seeders\ResultadosAprendizajeTableSeeder;
use Database\Seeders\CriteriosEvaluacionTableSeeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;


    public function run(): void
    {
        Model::unguard();
        Schema::disableForeignKeyConstraints();

        $this->call(FamiliasProfesionalesTableSeeder::class);
        $this->call(CiclosFormativosTableSeeder::class);
        $this->call(ResultadosAprendizajeTableSeeder::class);
        $this->call(CriteriosEvaluacionTableSeeder::class);


        Model::reguard();

        Schema::enableForeignKeyConstraints();
    }
}
