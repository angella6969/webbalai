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
        Schema::create('embungs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('lokasi');
            $table->string('volume_tampung');
            $table->string('luas_genangan');
            $table->string('tahun_pembangunan');
            $table->string('body');
            $table->string('slug'); 
            $table->string('url_foto1')->nullable();
            $table->string('url_foto2')->nullable();
            $table->string('url_foto3')->nullable();
            $table->string('jenis')->default('embungs');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('embungs');
    }
};
