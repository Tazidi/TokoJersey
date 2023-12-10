<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ligaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ligas')->insert([
        	'nama' => 'NBA',
        	'negara' => 'Amerika Serikat',
        	'gambar' => 'nba.png',
        ]);

        DB::table('ligas')->insert([
        	'nama' => 'Euroleague Basketball',
        	'negara' => 'Eropa',
        	'gambar' => 'euroleague.png',
        ]);

        DB::table('ligas')->insert([
        	'nama' => 'FIBA',
        	'negara' => 'Dunia',
        	'gambar' => 'fiba.png',
        ]);

        DB::table('ligas')->insert([
        	'nama' => 'IBL',
        	'negara' => 'Indonesia',
        	'gambar' => 'IBL.png',
        ]);
    }
}
