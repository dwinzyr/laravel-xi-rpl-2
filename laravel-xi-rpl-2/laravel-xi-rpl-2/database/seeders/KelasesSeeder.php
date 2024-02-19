<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KelasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_kelases')->insert([
            'id_kelas'=> random_int(1, 50),
            'nama_kelas'=> random_int(1, 10),
            'kompetensi_keahlian'=> random_int(1, 10),
        ]);
    }
}
