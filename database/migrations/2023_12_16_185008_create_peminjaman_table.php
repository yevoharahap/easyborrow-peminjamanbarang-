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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id('id_peminjaman');
            $table->unsignedBigInteger('id_user')->unique();
            $table->unsignedBigInteger('id_barang')->unique();
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_pengembalian')->nullable();
            $table->string('status_peminjaman')->default('dipinjam');

            $table->foreign('id_user')->references('id_user')->on('user')->onDelete('cascade');
            $table->foreign('id_barang')->references('id_barang')->on('barang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};