<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'birth_date' => fake()->date(),
            'country' => fake()->country(),
            'biography' => fake()->paragraph(),
            'img_url' => 'https://api.randomuser.me/portraits/men/' . rand(1, 99) . '.jpg',
            'role' => fake()->randomElement(['Actor', 'Director']),
        ];
    }

    public function director()
    {
        return $this->state([
            'role' => 'Director',
        ]);
    }

    public function actor()
    {
        return $this->state([
            'role' => 'Actor',
        ]);
    }
}
