<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JasaKoperasi>
 */
class JasaKoperasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'koperasi_id' => mt_rand(1, 50),
            'slug' => $this->faker->slug(),
            'name' => $this->faker->sentence(mt_rand(1, 3)),
            'needs' => "Mandi",
            'service' => $this->faker->sentence(mt_rand(1, 3)),
            'description' => $this->faker->sentence(mt_rand(5, 9)),
        ];
    }
}
