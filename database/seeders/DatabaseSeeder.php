<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Aqui você chama todos os seeders que quer rodar automaticamente
        $this->call([
            PermissionSeeder::class,
            // Aqui você pode adicionar outros seeders, por exemplo:
            // UserSeeder::class,
        ]);
    }
}