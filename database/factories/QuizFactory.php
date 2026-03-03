<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quiz>
 */
class QuizFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'slug' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'question' => $this->faker->numberBetween(1, 20),
            'minutes' => $this->faker->numberBetween(1, 60),
            'stage' => $this->faker->randomElement(['basic', 'intermediate' , 'popular', 'advance']),
        ];
    }
}
