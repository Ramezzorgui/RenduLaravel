<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
{
    // exécute ProductSeeder (ajoute d'autres seeders si besoin)
    $this->call([
        ProductSeeder::class,
        // CategorySeeder::class, // si tu crées un seeder de catégories
    ]);
}

}
