<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
        	'nama' => 'Warriors Jersey',
            'liga_id' => 1,
            'gambar' => 'warriors.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Rockets Jersey',
            'liga_id' => 1,
            'gambar' => 'rockets.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Lakers Jersey',
            'liga_id' => 1,
            'gambar' => 'lakers.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Celtics Jersey',
            'liga_id' => 1,
            'gambar' => 'celtics.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Baskonia Home',
            'liga_id' => 2,
            'gambar' => 'baskonia.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'FC Barcelona',
            'liga_id' => 2,
            'gambar' => 'barcelona.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Dewa United',
            'liga_id' => 4,
            'gambar' => 'dewa.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Griffin Satria Muda',
            'liga_id' => 4,
            'gambar' => 'griffin.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Padre Hosbach Evos Thunder Bogor',
            'liga_id' => 4,
            'gambar' => 'evos.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Korea 2023',
            'liga_id' => 3,
            'gambar' => 'korea.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Japan 2023',
            'liga_id' => 3,
            'gambar' => 'japan.png'
        ]);
    }
}
