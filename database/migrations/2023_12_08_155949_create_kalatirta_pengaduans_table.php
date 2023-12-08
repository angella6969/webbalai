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
        Schema::create('kalatirta_pengaduans', function (Blueprint $table) {
            $table->id();
            $table->longText('keberatan')->nullable();
            $table->text('dokumen')->nullable();
            $table->string('status')->default('Menunggu Konfirmasi');
            $table->string('nomor_registrasi')->nullable();
            $table->foreignId('kalatirta_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kalatirta_pengaduans');
    }
};
