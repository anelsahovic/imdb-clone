<?php

namespace Database\Factories;

use App\Models\Movie;
use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;


class MovieActorFactory extends Factory
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
            'actor_id' => Person::inRandomOrder()->where('role', 'Actor')->first()->id
        ];
    }
}
