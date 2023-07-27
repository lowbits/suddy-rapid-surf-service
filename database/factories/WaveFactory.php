<?php

namespace Database\Factories;

use App\Enums\WaveType;
use App\Models\SurfSpot;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wave>
 */
class WaveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'surf_spot_id' => SurfSpot::factory(),
            'type' => fake()->randomElement(WaveType::values()),
            'height' => fake()->randomFloat(2, 0.5, 3),
            'width' => fake()->randomFloat(2, 2, 13),
        ];
    }
}
