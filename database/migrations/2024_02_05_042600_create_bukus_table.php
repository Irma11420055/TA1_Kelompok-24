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
            $table->id();
            $table->unsignedBigInteger('id_judul');
            $table->foreign('id_judul')->references('id')->on('judul_bukus');
            $table->string('kode_buku');
            $table->string('bahasa');
            $table->string('subjek');
            $table->string('edisi');
            $table->string('pengarang');
            $table->string('deskripsi');
            $table->string('jenis');
            $table->string('penerbit');
            $table->string('klasifikasi');
            $table->string('lokasi');
            $table->integer('ISBN');
            $table->integer('tahun');
            $table->string('status')->default('tersedia');
            $table->string('cp_or');
            $table->binary('gambar');
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
