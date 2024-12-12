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
        Schema::create('pemesanan_tiket', function (Blueprint $table) {
            $table->id('id_pemesanan_tiket');
            $table->unsignedBigInteger('id_customer');
            $table->unsignedBigInteger('id_jadwal_tayang');
            $table->unsignedBigInteger('id_studio');
            $table->integer('jumlah_tiket');
            $table->float('total_harga');
            $table->enum('status', ['pending', 'success', 'cancel']);

            $table->foreign('id_customer')->references('id_customer')->on('customers')->onDelete('cascade');
            $table->foreign('id_jadwal_tayang')->references('id_jadwal_tayang')->on('jadwal_tayang')->onDelete('cascade');
            $table->foreign('id_studio')->references('id_studio')->on('studio')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan_tiket');
    }
};
