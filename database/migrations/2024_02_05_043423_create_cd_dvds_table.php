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
        Schema::create('cd_dvds', function (Blueprint $table) {
            $table->id();
            $table->string('subjek');
            $table->string('judul');
            $table->integer('tahun');
            $table->string('pengarang');
            $table->string('prodi');
            $table->string('sumber');
            $table->text('deskripsi');
            $table->string('jenis_koleksi');
            $table->binary('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cd_dvds');
    }
};
