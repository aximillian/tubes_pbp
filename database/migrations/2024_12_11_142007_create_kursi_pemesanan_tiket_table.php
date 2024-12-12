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
        Schema::create('kursi_pemesanan_tiket', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pemesanan_tiket');
            $table->unsignedBigInteger('id_kursi');

            $table->foreign('id_pemesanan_tiket')->references('id_pemesanan_tiket')->on('pemesanan_tiket')->onDelete('cascade');
            $table->foreign('id_kursi')->references('id_kursi')->on('kursi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kursi_pemesanan_tiket');
    }
};
