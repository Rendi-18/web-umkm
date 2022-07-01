<?php

namespace Database\Seeders;

use App\Models\CategoryKoperasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryKoperasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryKoperasi::create([
            'category' => 'Konsumen',
            'slug' => 'konsumen',
        ]);

        CategoryKoperasi::create([
            'category' => 'Produsen',
            'slug' => 'produsen',
        ]);
        CategoryKoperasi::create([
            'category' => 'Simpan Pinjam',
            'slug' => 'simpan-pinjam',
        ]);
        CategoryKoperasi::create([
            'category' => 'Pemasaran',
            'slug' => 'pemasaran',
        ]);
    }
}
