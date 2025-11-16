<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('barang_keluars', function (Blueprint $table) {
            $table->id();
            $table->string('kode_produksi')->nullable(); // atau kode_keluar sesuai desainmu
            $table->integer('jumlah_keluar')->nullable();
            $table->date('tanggal_keluar')->nullable();
            $table->string('tujuan')->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('barang_keluars');
    }
};
