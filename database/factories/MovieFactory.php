<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->company(),
            'description' => fake()->realText(),
            'year_published' => fake()->year(),
            'rating' => fake()->randomFloat(1, 0, 10),
            'img_url' => 'https://picsum.photos/400/600?random=' . rand(),
            'director_id' => Person::inRandomOrder()->where('role', 'Director')->first()->id

        ];
    }
}
