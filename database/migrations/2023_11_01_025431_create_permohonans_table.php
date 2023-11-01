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
        Schema::create('permohonans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemohon');
            $table->string('no_ktp');
            $table->string('url_foto_ktp');
            $table->string('instansi');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('email');
            $table->string('jenis_informasi');
            $table->string('tujuan_penggunaan_informasi');
            $table->string('cara_memperoleh_informasi');
            $table->string('cara_mengirimkan_informasi');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permohonans');
    }
};
