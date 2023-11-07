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
        Schema::create('bendungans', function (Blueprint $table) {
            $table->id();
            $table->string('lokasi');
            $table->string('nama');
            $table->string('wilaya_sungai');
            $table->string('daerah_sliran_sungai');
            $table->string('tahun_mulai_pembangunan');
            $table->string('tahun_selesai_pembangunan');
            $table->string('tipe_bendungan');
            $table->string('tinggi_dasar_sungai');
            $table->string('panjang_puncak');
            $table->string('lebar_puncak');
            $table->string('elevasi_puncak');
            $table->string('volume_tampung_normal');
            $table->string('volume_tampung_total');
            $table->string('irigasi');
            $table->string('slug');
            $table->string('body');
            $table->string('url_foto1');
            $table->string('url_foto2');
            $table->string('url_foto3');
            $table->string('url_foto4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bendungans');
    }
};
