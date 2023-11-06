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
            $table->string('tipe_bendungan');
            $table->string('tinggi_puncak_bendungan');
            $table->string('luas');
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
