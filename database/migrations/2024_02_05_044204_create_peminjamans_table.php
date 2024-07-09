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
        Schema::create('peminjamans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_jenis');
            $table->foreign('id_jenis')->references('id')->on('jenis');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->unsignedBigInteger('id_buku')->nullable();
            $table->foreign('id_buku')->references('id')->on('bukus');
            $table->unsignedBigInteger('id_cd_dvd')->nullable();
            $table->foreign('id_cd_dvd')->references('id')->on('cd_dvds');
            $table->date('tanggal_pengembalian');
            $table->date('tanggal_aktual_pengembalian')->nullable();
            $table->integer('denda')->nullable();
            $table->string('status')->default('dipinjam');
            $table->date('tanggal_akhir_perpanjangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamans');
    }
};
