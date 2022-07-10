<?php

namespace Database\Seeders;

use App\Models\JasaKoperasi;
use App\Models\Koperasi;
use App\Models\Pegawai;
use App\Models\Product;
use App\Models\ProductKoperasi;
use App\Models\Umkm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Website;

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

        Website::create([
            'sitename' => 'SIBADU',
            'title' => 'Sibadu',
            'longsitename' => 'Sistem Basis Data Utama',
            'phonenumber' => '085669920357',
            'email' => 'admin@gmail.com',
            'address' => 'Jl. Cut Mutia No.40, Gulak Galik, Kec. Tlk. Betung Utara, Kota Bandar Lampung, Lampung 35214',
            'email' => 'admin@gmail.com',
            'map' => 'https://goo.gl/maps/oy5ZEBxuii7d3eSi9',
            'iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2033608.884445827!2d103.14939449999999!3d-5.433317899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40da31475e767d%3A0x6a6f0108ae6b67e2!2sDinas%20Koperasi%20Dan%20UMKM!5e0!3m2!1sen!2sid!4v1657462690158!5m2!1sen!2sid'
        ]);

        User::factory(5)->create();
        Umkm::factory(50)->create();
        Koperasi::factory(50)->create();
        Product::factory(250)->create();
        ProductKoperasi::factory(250)->create();
        JasaKoperasi::factory(250)->create();
        Pegawai::factory(10)->create();
    }
}
