<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    use HasFactory;

    protected $table = 'barang_keluars'; // pastikan nama tabel benar

    protected $fillable = [
        'kode_produksi',
        'nama_barang',
        'tanggal_keluar',
        'tujuan',
        'jumlah_keluar', // atau 'jumlah' sesuai migrationmu
        'keterangan',
    ];

    /**
     * BarangKeluar belongs to Gudang (relasi via kode_produksi).
     * Jika barang_keluars menyimpan direkt foreign key ke gudangs lewat 'kode_produksi'
     * maka gunakan mapping berikut.
     */
    public function gudang()
    {
        return $this->belongsTo(Gudang::class, 'kode_produksi', 'kode_produksi');
    }

    /**
     * Kalau kamu juga mau relasi ke Produksi (jika relevan),
     * uncomment dan sesuaikan jika tabel produksis punya 'kode_produksi'.
     */
    // public function produksi()
    // {
    //     return $this->belongsTo(Produksi::class, 'kode_produksi', 'kode_produksi');
    // }
}
