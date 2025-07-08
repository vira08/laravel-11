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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('kode_transaksi');
            $table->integer('anggota_id');
            $table->integer('buku_id');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->enum('status', ['L','P']);
            $table->text('ket');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
