<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'nombre' => 'admin',
            'apellidos' => 'admin',
            'password' => Hash::make('password'),
        ]);
        User::factory()->count(10)->create();
    }
}
