<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
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
                ['Epic', 'Based on a True Story', 'Cult Classic', 'Oscar-Winning', 'Indie', 'Blockbuster', 'Sequel', 'Prequel', 'Remake', 'Reboot', 'Low Budget', 'Character-Driven', 'Action-Packed', 'Coming of Age', 'Dark Humor', 'Feel-Good', 'Mind-Bending', 'Nonlinear', 'Plot Twist', 'Slow Burn']
            )
        ];
    }
}
