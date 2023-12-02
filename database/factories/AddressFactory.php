<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    protected $model = Address::class;

    public function definition(): array
    {
        return [
            'street' => fake()->streetAddress(),
            'city' => fake()->city(),
            'apartment' => fake()->numberBetween(1, 300),
            'zipcode' => fake()->numberBetween(10000, 99999),
            'country' => fake()->country(),
        ];
    }
}
