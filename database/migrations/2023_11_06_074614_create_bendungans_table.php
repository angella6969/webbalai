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
            $table->string('lokasi')->nullable();
            $table->string('nama')->nullable();
            $table->string('wilaya_sungai')->nullable();
            $table->string('daerah_sliran_sungai')->nullable();
            $table->string('tahun_mulai_pembangunan')->nullable();
            $table->string('tahun_selesai_pembangunan')->nullable();
            $table->string('tipe_bendungan')->nullable();
            $table->string('tinggi_dasar_sungai')->nullable();
            $table->string('panjang_puncak')->nullable();
            $table->string('lebar_puncak')->nullable();
            $table->string('elevasi_puncak')->nullable();
            $table->string('volume_tampung_normal')->nullable();
            $table->string('volume_tampung_total')->nullable();
            $table->string('irigasi')->nullable();
            $table->string('slug')->nullable();
            $table->longText('body')->nullable();
            $table->string('jenis')->default('bendungans')->nullable();
            $table->string('url_foto1')->nullable();
            $table->string('url_foto2')->nullable();
            $table->string('url_foto3')->nullable();
            $table->string('url_foto4')->nullable();
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
