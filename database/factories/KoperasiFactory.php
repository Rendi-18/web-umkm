<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Koperasi>
 */
class KoperasiFactory extends Factory
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
            'nik' => '12345678',
            'slug' => $this->faker->slug(),
            'name' => $this->faker->sentence(mt_rand(1, 4)),
            'category_koperasi_id' => mt_rand(1, 3),
            'phonenumber' => $this->faker->phoneNumber(),
            'city' => $this->faker->city(),
            'description' => $this->faker->paragraph(mt_rand(5, 9)),
            'address' => $this->faker->sentence(mt_rand(5, 9)),
        ];
    }
}
