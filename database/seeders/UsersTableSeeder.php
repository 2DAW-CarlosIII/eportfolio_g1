<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
   
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         User::truncate();
         
         User::factory()->create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'nombre' => 'Administrador',
            'apellidos' => 'Administrador',
            'password' => 'admin'
        ]);

       User::factory()->count(10)->create();

    }
}
