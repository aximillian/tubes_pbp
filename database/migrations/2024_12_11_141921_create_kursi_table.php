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
        Schema::create('kursi', function (Blueprint $table) {
            $table->id('id_kursi');
            $table->unsignedBigInteger('id_studio');
            $table->string('kode_kursi'); 
            $table->integer('baris'); 
            $table->integer('kolom'); 
            $table->boolean('status_tersedia')->default(true);

            $table->foreign('id_studio')->references('id_studio')->on('studio')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kursi');
    }
};
