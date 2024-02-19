<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_pembayarans', function (Blueprint $table) {
            $table->id('id_pembayaran');
            $table->foreignId('id_petugas')->references('id_petugas')->on('tb_petugases');
            $table->char('nisn', 10);
            $table->foreign('nisn')->references('nisn')->on('tb_siswas');
            $table->date('tgl_bayar');
            $table->string('bulan_dibayar', 8);
            $table->string('tahun_dibayar', 4);
            $table->foreignId('id_spp')->references('id_spp')->on('tb_siswas');
            $table->integer('jumlah_bayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pembayarans');
    }
};
