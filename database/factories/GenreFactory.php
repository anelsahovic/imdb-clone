<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Genre>
 */
class GenreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement(
                ['Action', 'Adventure', 'Comedy', 'Drama', 'Fantasy', 'Horror', 'Thriller', 'Mystery', 'Sci-Fi', 'Romance', 'Documentary', 'Animation', 'Musical', 'Biography', 'Historical', 'Crime', 'War', 'Family', 'Western', 'Superhero']
            )
        ];
    }
}
