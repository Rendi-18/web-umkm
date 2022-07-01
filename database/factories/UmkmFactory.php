<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Umkm>
 */
class UmkmFactory extends Factory
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
            'NIB' => '12345678',
            'name' => $this->faker->sentence(mt_rand(1, 3)),
            'phonenumber' => $this->faker->phoneNumber(),
            'category_id' => mt_rand(1, 2),
            'description' => $this->faker->paragraph(mt_rand(5, 9)),
            'address' => $this->faker->sentence(mt_rand(5, 9)),
        ];
    }
}
