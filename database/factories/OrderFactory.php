<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'UserID' => \App\Models\User::factory(), // Use the User factory to create a related user
            'OrderDate' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'TotalAmount' => $this->faker->randomFloat(2, 50, 500),
        ];
    }
}
