<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gudang extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_produksi',
        'nama_barang',
        'jumlah',
        'lokasi',
    ];

    public function produksi(): BelongsTo
    {
        return $this->belongsTo(Produksi::class, 'kode_produksi', 'kode_produksi');
    }

    public function keluars(): HasMany
    {
        return $this->hasMany(Keluar::class, 'kode_produksi', 'kode_produksi');
    }
}
