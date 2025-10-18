<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_produksi',
        'nama_barang',
        'jumlah_barang',
        'tanggal_produksi',
        'keterangan',
    ];

    public function gudangs(): HasMany
    {
        return $this->hasMany(Gudang::class, 'kode_produksi', 'kode_produksi');
    }
}
