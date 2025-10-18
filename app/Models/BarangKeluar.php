<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    use HasFactory;

    protected $table = 'keluars';

    protected $fillable = [
        'gudang_id',
        'kode_produksi',
        'nama_barang',
        'jumlah_keluar',
        'tanggal_keluar'
    ];

    public function gudang()
    {
        return $this->belongsTo(Gudang::class);
    }
}
