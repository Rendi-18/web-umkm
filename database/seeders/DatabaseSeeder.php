<?php

namespace Database\Seeders;

use App\Models\Koperasi;
use App\Models\Product;
use App\Models\Umkm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoryKoperasiSeeder::class,
            CategoryIzinSeeder::class,
        ]);
        User::create([
            'username' => 'ADMIN',
            'name' => 'ADMINSTRATOR',
            'phonenumber' => '08080808',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'address' => "SBW"
        ]);

        User::factory(5)->create();
        Umkm::factory(50)->create();
        Koperasi::factory(50)->create();
        Product::factory(250)->create();
    }
}
