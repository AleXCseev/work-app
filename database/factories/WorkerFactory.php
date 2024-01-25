<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Position;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Worker>
 */
class WorkerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,   
            'surname' => fake()->lastName,
            'email' => fake()->unique()->safeEmail(),  
            'age' => fake()->numberBetween(18, 65),
            'description' => fake()->text(200),
            'is_married' => fake()->boolean,
            'position_id' => Position::inRandomOrder()->first()->id,
        ];
    }
}
