<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SppsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('tb_spps')->insert([
                'id_spp' => random_int(1, 50), 
                'tahun' => random_int(1999, 2024), 
                'nominal' => random_int(1, 15),
            ]);
    }
}
