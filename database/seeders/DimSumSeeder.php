<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DimSumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dimSumItems = [
            ['name' => 'Cheong Fun', 'cooking_method' => 'Rebus', 'wrapper' => 'Kulit Tahu', 'price' => 75000, 'gambar' => 'cheong-fun.jpg'],
            ['name' => 'Dimsum Ayam', 'cooking_method' => 'Kukus', 'wrapper' => 'Kulit Tahu', 'price' => 69000, 'gambar' => 'dimsum-ayam.jpg'],
            ['name' => 'Dimsum Salmon', 'cooking_method' => 'Kukus', 'wrapper' => 'Kulit Lumpia', 'price' => 99000, 'gambar' => 'dimsum-salmon.jpg'],
            ['name' => 'Dimsum Udang', 'cooking_method' => 'Kukus', 'wrapper' => 'Kulit Pangsit', 'price' => 85000, 'gambar' => 'dimsum-udang.jpg'],
            ['name' => 'Ebi Furai', 'cooking_method' => 'Goreng', 'wrapper' => 'Kulit Tepung', 'price' => 70000, 'gambar' => 'ebi-furai.jpg'],
            ['name' => 'Fried Wonton', 'cooking_method' => 'Goreng', 'wrapper' => 'Kulit Pangsit', 'price' => 65000, 'gambar' => 'fried-wonton.jpg'],
            ['name' => 'Hakau', 'cooking_method' => 'Kukus', 'wrapper' => 'Kulit Pangsit', 'price' => 88000, 'gambar' => 'hakau.jpg'],
            ['name' => 'Kuo Tie', 'cooking_method' => 'Rebus', 'wrapper' => 'Kulit Tahu', 'price' => 110000, 'gambar' => 'kuo-tie.jpg'],
            ['name' => 'Xiao Long Bao', 'cooking_method' => 'Kukus', 'wrapper' => 'Kulit Lumpia', 'price' => 99000, 'gambar' => 'xiao-long-bao.jpg'],
            ['name' => 'Spring Roll', 'cooking_method' => 'Kukus', 'wrapper' => 'Kulit Lumpia', 'price' => 75000, 'gambar' => 'spring-roll.jpg'],
            ['name' => 'Lumpia Kulit Tahu', 'cooking_method' => 'Kukus', 'wrapper' => 'Kulit Tahu', 'price' => 85000, 'gambar' => 'lumpia-kulit-tahu.jpg'],
            ['name' => 'Chun Juan', 'cooking_method' => 'Goreng', 'wrapper' => 'Kulit Lumpia', 'price' => 73000, 'gambar' => 'chun-juan.jpg'],
            ['name' => 'Wan Ton', 'cooking_method' => 'Kukus', 'wrapper' => 'Kulit Pangsit', 'price' => 65000, 'gambar' => 'wan-ton.jpg'],
            ['name' => 'Mantau', 'cooking_method' => 'Kukus', 'wrapper' => 'Kulit Tepung', 'price' => 50000, 'gambar' => 'mantau.jpg'],
        ];
        DB::table('dimsums')->insert($dimSumItems);
        //
    }
}
