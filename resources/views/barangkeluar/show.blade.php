@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Detail Barang Keluar</h2>

    <div class="card p-3">
        <p><strong>Kode Produksi:</strong> {{ $barangKeluar->kode_produksi }}</p>
        <p><strong>Nama Barang:</strong> {{ $barangKeluar->nama_barang }}</p>
        <p><strong>Jumlah Keluar:</strong> {{ $barangKeluar->jumlah_keluar }}</p>
        <p><strong>Tanggal Keluar:</strong> {{ $barangKeluar->tanggal_keluar }}</p>
        <p><strong>Gudang:</strong> {{ $barangKeluar->gudang->nama_barang ?? '-' }}</p>
    </div>

    <a href="{{ route('barang-keluar.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
