<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HousingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "img" => 'https://picsum.photos/640/480?t=' . fake()->unique()->numberBetween(1, 100000),
            "name" => fake()->name(),
            "description" => fake()->text(),
            "rooms" => fake()->numberBetween(1, 8),
            "bedrooms" => fake()->numberBetween(1, 6),
            "bathrooms" => fake()->numberBetween(1, 4),
            "size" => fake()->numberBetween(50, 400),
            "price" => fake()->numberBetween(50000, 10000000),
            "contactMail" => fake()->email(),
        ];
    }
}
