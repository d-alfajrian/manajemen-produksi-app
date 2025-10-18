<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\ProduksiController;

// Halaman utama -> Barang Keluar
Route::get('/', [BarangKeluarController::class, 'index']);

// CRUD Barang Keluar
Route::resource('barang-keluar', BarangKeluarController::class);

// CRUD Gudang
Route::resource('gudang', GudangController::class);

// CRUD Produksi
Route::resource('produksi', ProduksiController::class);
