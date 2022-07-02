<?php

namespace Database\Seeders;

use App\Models\CategoryIzin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryIzinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryIzin::create([
            'category' => 'Izin Usaha',
        ]);
        CategoryIzin::create([
            'category' => 'Akta Pendirian',
        ]);
    }
}
