<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('gudangs', function (Blueprint $table) {
            $table->id();
            $table->foreign('kode_produksi')->references('kode_produksi')->on('produksis')->onDelete('cascade');
            $table->string('nama_barang');
            $table->integer('jumlah');
            $table->integer('stock');
            $table->string('tanggal_masuk');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gudangs');
    }
};
