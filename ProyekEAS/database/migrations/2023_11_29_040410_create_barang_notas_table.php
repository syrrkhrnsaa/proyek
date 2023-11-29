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
        Schema::create('barang_notas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kode_nota');
            $table->unsignedBigInteger('kode_barang');
            $table->integer('jumlah_barang');
            $table->double('harga_satuan');
            $table->integer('jumlah');
            $table->timestamps();

            $table->foreign('kode_nota')->references('id')->on('notas')->onDelete('cascade');
            $table->foreign('kode_barang')->references('id')->on('barangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_notas');
    }
};
