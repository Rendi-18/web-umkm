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
            'nib' => '12345678',
            'name' => $this->faker->sentence(mt_rand(1, 3)),
            'slug' => $this->faker->slug(),
            'phonenumber' => $this->faker->phoneNumber(),
            'city' => $this->faker->city(),
            'description' => $this->faker->paragraph(mt_rand(5, 9)),
            'address' => $this->faker->sentence(mt_rand(5, 9)),
        ];
    }
}
