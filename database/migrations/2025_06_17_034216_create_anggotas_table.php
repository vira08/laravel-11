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
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id()->primary();
            $table->integer('user_id');
            $table->integer('npm');
            $table->string('nama');
            $table->string('tempat_lahir)');
            $table->date('tgl_lahir');
            $table->enum('jk', ['L','P']);
            $table->string('prodi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggotas');
    }
};
