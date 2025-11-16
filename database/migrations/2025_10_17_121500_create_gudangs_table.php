<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
          Schema::create('gudangs', function (Blueprint $table) {
            $table->id();
            $table->string('kode_produksi');
            $table->string('nama_barang'); // ✅ pastikan kolom ini ada
            $table->integer('jumlah');
            $table->date('tanggal_masuk');
            $table->string('keterangan')->nullable();
            $table->timestamps();

            // baru tambahkan relasi foreign key
            $table->foreign('kode_produksi')
                  ->references('kode_produksi')
                  ->on('produksis')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gudangs');
    }
};
