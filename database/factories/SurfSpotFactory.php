<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\SurfSpot;
use App\Models\Wave;
use Illuminate\Database\Eloquent\Factories\Factory;

class SurfSpotFactory extends Factory
{
    protected $model = SurfSpot::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->text(),
        ];
    }

    public function withWave(): static
    {
        return $this->has(Wave::factory());
    }

    public function withAddress(): static
    {
        return $this->has(Address::factory());
    }
}
