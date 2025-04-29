<?php

namespace Database\Factories;

use App\Models\Actualite;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActualiteFactory extends Factory
{
    protected $model = Actualite::class;


    public function definition(): array
    {
        return [
            'title'     => $this->faker->sentence(6),
            'genre'     => $this->faker->sentence(6),

            'excerpt'   => $this->faker->paragraph(2),
            'content'   => $this->faker->paragraphs(5, true),
            'image_url' => 'https://picsum.photos/seed/' . uniqid() . '/600/400',
            'file_url'  => 'https://example.com/files/doc-' . uniqid() . '.pdf',

            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
