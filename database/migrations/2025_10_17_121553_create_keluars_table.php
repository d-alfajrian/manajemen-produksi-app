<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('keluars', function (Blueprint $table) {
            $table->id();
            $table->string('kode_produksi');
            $table->date('tanggal_keluar');
            $table->integer('jumlah_keluar');
            $table->string('tujuan');
            $table->timestamps();

            $table->foreign('kode_produksi')->references('kode_produksi')->on('produksis')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('barang_keluars');
    }
};
