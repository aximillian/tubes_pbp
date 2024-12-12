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
        Schema::create('jadwal_tayang', function (Blueprint $table) {
            $table->id('id_jadwal_tayang');
            $table->unsignedBigInteger('id_film');
            $table->unsignedBigInteger('id_studio');
            $table->date('tanggal_tayang');
            $table->time('waktu_tayang');

            $table->foreign('id_film')->references('id_film')->on('films')->onDelete('cascade');
            $table->foreign('id_studio')->references('id_studio')->on('studio')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_tayang');
    }
};
