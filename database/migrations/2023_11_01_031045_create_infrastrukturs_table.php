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
        Schema::create('infrastrukturs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenis');
            $table->string('url_foto1')->nullable();
            $table->string('url_foto2')->nullable();
            $table->string('url_foto3')->nullable();
            $table->string('body');
            $table->string('alamat');
            $table->string('wilayah_sungai');
            $table->string('total_tampungan');
            $table->string('luas_dta_waduk');
            $table->string('kapasitas_tampungan_mati');
            $table->string('elevasi_muka_air_banjir');
            $table->string('elevasi_muka_air_rendah');
            $table->string('debit_rerata');
            $table->string('tahun_pembangunan');
            $table->string('daerah_aliran_sungai');
            $table->string('luas_das_waduk');
            $table->string('Kapasitas_tampungan_waduk_efektif');
            $table->string('Kapasitas_tampungan_total_waduk_m3');
            $table->string('elevasi_muka_air_normal');
            $table->string('banjir_rencana');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infrastrukturs');
    }
};
