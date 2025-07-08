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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('judul');
            $table->string('Isbn');
            $table->string('Pengarang');
            $table->string('Penerbit');
            $table->integer('Tahun_terbit');
            $table->integer('Jumlah_buku');
            $table->text('Deskripsi',);
            $table->enum('lokasi', ['L','P']);
            $table->string('Cover');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
