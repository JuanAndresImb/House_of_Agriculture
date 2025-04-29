<?php

namespace Database\Factories;

use App\Models\Document;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentFactory extends Factory
{
    protected $model = Document::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(5),
            'excerpt' => $this->faker->paragraph(2),
            'file_url' => 'https://example.com/fichier.pdf',
            'image_url' => 'https://picsum.photos/seed/'.rand(1,1000).'/600/400',
            'type' => $this->faker->randomElement(['Guide', 'Rapport', 'Fiche']),
            'format' => $this->faker->randomElement(['PDF', 'DOCX', 'PPT']),
            'genre' => $this->faker->randomElement(['Technique', 'Pratique']),
        ];
    }
}
