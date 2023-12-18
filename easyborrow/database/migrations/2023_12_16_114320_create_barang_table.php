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
        Schema::create('barang', function (Blueprint $table) {
            $table->id('id_barang');
            $table->string('nama_barang');
            $table->string('kondisi');
            $table->boolean('tersedia')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('barang', function (Blueprint $table) {
            $table->dropColumn('status_barang');
        });
    }
};