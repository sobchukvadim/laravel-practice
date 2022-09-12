<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->company,
            'price' => $this->faker->numberBetween(5000, 100000),
            'category' => $this->faker->word,
            'manufacturer' => $this->faker->word,
            'manufactured_in' => $this->faker->numberBetween(2000, 2022),
        ];
    }
}
