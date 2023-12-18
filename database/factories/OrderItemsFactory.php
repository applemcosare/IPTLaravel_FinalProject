<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\Order::factory(),
            'ProductID' => \App\Models\Product::factory(), // Use the Product factory to create a related product
            'Quantity' => $this->faker->numberBetween(1, 10),
            'Subtotal' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
