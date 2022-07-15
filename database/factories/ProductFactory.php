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
            'umkm_id' => mt_rand(1, 50),
            'slug' => $this->faker->slug(),
            'name' => $this->faker->sentence(mt_rand(1, 3)),
            'price' => "50000",
            'weight' => mt_rand(5, 40),
            'description' => $this->faker->sentence(mt_rand(5, 9)),
        ];
    }
}
