<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai>
 */
class PegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'position' => $this->faker->sentence(1, 3),
            'classification' => $this->faker->sentence(1, 2),
            'nip' => '12345678',
            'description' => $this->faker->sentence(3, 5),
        ];
    }
}
