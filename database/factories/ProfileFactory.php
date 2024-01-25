<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Worker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'city' => fake()->city,
            'skill' => fake()->jobTitle,
            'experience' => fake()->numberBetween(1, 10),
            'finish_stady_at' => fake()->date,
            'worker_id' => Worker::factory()->create()->id,
        ];
    }
}
