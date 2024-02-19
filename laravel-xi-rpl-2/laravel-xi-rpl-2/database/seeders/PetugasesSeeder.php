<?php

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PetugasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     */
    public function run(): void
    {
        $levels = ['admin', 'petugas'];

        DB::table('tb_petugases')->insert([
            'id_petugas' => random_int(1, 100),
            'username' => Str::random(25),
            'password' => Str::random(32),
            'nama_petugas' => "dwi-ananda",
            'level' => $levels[array_rand($levels)], 
        ]);
    }
}
