<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PembayaransSeeder extends Seeder
{
    public function run(): void
    {
        // Mendapatkan data siswa (contoh, Anda harus menggantinya sesuai dengan logika aplikasi Anda)
        $siswa = DB::table("tb_siswas")->first();

        // Mendapatkan data petugas
        $petugas = DB::table("tb_petugases")->first();

        // Mendapatkan data SPP
        $spp = DB::table("tb_spps")->where('id_spp', $siswa->id_spp)->first();

        // Insert data pembayaran
        DB::table("tb_pembayarans")->insert([
            'id_pembayaran' => rand(1, 100),
            'id_petugas' => $petugas->id_petugas, // Menggunakan $petugas yang sudah didefinisikan sebelumnya
            'nisn' =>  $siswa->nisn,
            'tgl_bayar' => now(),
            'bulan_dibayar' => Str::random(8),
            'tahun_dibayar' => Str::random(4),
            // tambahkan field lainnya sesuai kebutuhan
        ]);
    }
}
