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
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('instansi')->nullable();
            $table->string('mewakili')->nullable();
            $table->string('responsif')->nullable();
            $table->string('kopetensi')->nullable();
            $table->string('waktu')->nullable();
            $table->string('kepuasan')->nullable();
            $table->string('fasilitas')->nullable();
            $table->foreignId('permintaan_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surveys');
    }
};
