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
        Schema::create('foodbevs', function (Blueprint $table) {
            $table->id('id_foodbev');
            $table->string('nama_item');
            $table->string('kategori_item');
            $table->text('deskripsi_item')->nullable();
            $table->float('harga_item');
            $table->string('gambar_item')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foodbevs');
    }
};
