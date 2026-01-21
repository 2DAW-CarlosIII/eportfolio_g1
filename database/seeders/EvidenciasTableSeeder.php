<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Evidencia;

class EvidenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('evidencias')->truncate();
        Evidencia::factory()->count(20)->create();
        $this->command->info('¡Tabla evidencias inicializada con datos!');
    }
}
