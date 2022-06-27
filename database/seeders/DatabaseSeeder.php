<?php

namespace Database\Seeders;

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
            CategorySeeder::class
        ]);
        User::create([
            'username' => 'ADMIN',
            'name' => 'ADMINSTRATOR',
            'phonenumber' => '08080808',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        Umkm::factory(50)->create();
        Product::factory(250)->create();
        User::factory(20)->create();
    }
}
