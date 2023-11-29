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
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kode_tenan')->constrained('tenans')->onDelete('cascade');
            $table->foreignId('kode_kasir')->constrained('kasirs')->onDelete('cascade');
            $table->date('tgl_nota');
            $table->time('jam_nota');
            $table->decimal('jumlah_belanja', 10, 2);
            $table->decimal('diskon', 10, 2);
            $table->decimal('total', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};

