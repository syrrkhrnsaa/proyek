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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('KodeBarang');
            $table->string('NamaBarang');
            $table->string('Satuan');
            $table->decimal('HargaSatuan', 10, 2); // Angka 10 dan 2 menunjukkan total digit dan jumlah digit di belakang koma
            $table->integer('Stok')->default(0); // Angka default stok diatur ke 0
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
