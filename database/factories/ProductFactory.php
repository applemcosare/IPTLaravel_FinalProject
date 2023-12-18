<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Name' => $this->faker->word,
            'Description' => $this->faker->paragraph,
            'Price' => $this->faker->randomFloat(2, 10, 1000), // Random decimal with 2 decimal places
            'StockQuantity' => $this->faker->numberBetween(1, 100),
        ];
    }
}
