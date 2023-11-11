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
        Schema::create('bendungs', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('tahun_pembangunan')->nullable();
            $table->string('slug');
            $table->string('body');
            $table->string('url_foto1')->nullable();
            $table->string('url_foto2')->nullable();
            $table->string('url_foto3')->nullable();
            $table->string('url_foto4')->nullable();
            $table->string('jenis')->default('bendungs');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bendungs');
    }
};
