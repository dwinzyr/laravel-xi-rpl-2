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
        Schema::create('tb_siswas', function (Blueprint $table) {
            $table->char('nisn', 10)->primary();
            $table->char('nis',10);
            $table->string('nama',10);
            $table->foreignId('id_kelas')->references('id_kelas')->on('tb_kelases');
            $table->text('alamat');
            $table->string('no_telp', 13);
            $table->foreignId('id_spp')->references('id_spp')->on('tb_spps');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_siswas');
    }
};
