<?php

namespace Database\Factories;

use App\Models\SurfSpot;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $lat = fake()->latitude;
        $long = fake()->longitude;

        return [
            'surf_spot_id' => SurfSpot::factory(),
            'address_line' => fake()->streetName,
            'street_number' => fake()->buildingNumber,
            'city' => fake()->city,
            'postal_code' => fake()->postcode,
            'country' => fake()->country,
            'coordinate' => "$long $lat",
        ];
    }
}
