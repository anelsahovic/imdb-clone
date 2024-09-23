<?php

namespace Database\Factories;

use App\Models\Tag;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;


class MovieTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'movie_id' => Movie::inRandomOrder()->first()->id,
            'tag_id' => Tag::inRandomOrder()->first()->id
        ];
    }
}
