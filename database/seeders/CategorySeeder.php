<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{

    public function run(): void
    {
        $categories = [
            [
                'cat_name' => 'Makanan',
                'description' => 'Kategori untuk makanan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cat_name' => 'Minuman',
                'description' => 'Kategori untuk minuman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cat_name' => 'Dessert',
                'description' => 'Kategori untuk dessert',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('categories')->insert($categories);
    }
}
