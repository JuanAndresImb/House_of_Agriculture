<?php
namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition(): array
    {
        return [
            'title'     => $this->faker->sentence(3),
            'genre'     => $this->faker->randomElement(['Roman', 'Essai', 'Biographie', 'Technique']),
            'year'      => $this->faker->year(),
            'author'    => $this->faker->name(),
            'collector' => $this->faker->optional()->name(),
        ];
    }
}
