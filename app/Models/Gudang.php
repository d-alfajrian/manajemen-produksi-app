<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gudang extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_produksi',
        'nama_barang',
        'jumlah',
        'stock',
        'tanggal_masuk',
    ];

    /**
     * Relasi ke Produksi berdasarkan kode_produksi
     */
    public function produksi(): BelongsTo
    {
        return $this->belongsTo(Produksi::class, 'kode_produksi', 'kode_produksi');
    }
}

