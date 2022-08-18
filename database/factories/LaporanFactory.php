<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Laporan>
 */
class LaporanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(1, 6),
            'umkm_id' => mt_rand(1, 50),
            'tahun' => '2000',
            'phonenumber' => $this->faker->phoneNumber(),
            'description' => $this->faker->sentence(mt_rand(5, 9)),
        ];
    }
}
