<?php

namespace Database\Seeders;

use App\Models\Actualite;
use App\Models\Book;
use App\Models\Document;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Remplit la base avec des données fictives pour le développement et les tests.
     */
    public function run(): void
    {
        // 1. Crée quelques utilisateurs de test (membres et admin)
        User::factory(5)->create(); // membres aléatoires
        User::factory()->create([
            'name'  => 'Admin HoA',
            'email' => 'admin@hoa.local',
            'role'  => 'admin',        // si tu as un champ role
            'password' => bcrypt('secret123'),
        ]);

        // 2. Actualités
        Actualite::factory(10)->create();

        // 3. Documents internes
        Document::factory(20)->create();

        // Ajoute d'autres factories ici si nécessaire
        Book::factory(10)->create();
    }
}
