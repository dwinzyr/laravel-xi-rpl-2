<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;
class SiswasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $getIdKelas = DB::table("tb_kelases")->insertGetId([
            "id_kelas" => rand(1,50),
            "nama_kelas" => Str::random(10),
            "kompetensi_keahlian" => Str::random(10),
        ]);

        $getIdSpp = DB::table("tb_spps")->insertGetId([
            'id_spp' => rand(1,50),
            'tahun' => random_int(1999, 2024),
            'nominal' => rand(1,15),
        ]);

        DB ::table("tb_siswas")->insert([
            'nisn' => rand(1,50),
            'nis' => rand(1,10),
            'nama' => 'fajar-ff',
            'id_kelas' => $getIdKelas,
            'alamat' => 'timur leste',
            'no_telp' => '089567844321',
            'id_spp' => $getIdSpp,
        ]);
    }
}