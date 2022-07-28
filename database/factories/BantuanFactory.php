<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bantuan>
 */
class BantuanFactory extends Factory
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
            'bantuan' => 'Skin Legend',
            'phonenumber' => $this->faker->phoneNumber(),
            'description' => $this->faker->sentence(mt_rand(5, 9)),
        ];
    }
}
