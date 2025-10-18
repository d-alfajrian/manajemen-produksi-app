@extends('layouts.app')

@section('content')
<h2>Detail Barang di Gudang</h2>
<div class="card">
    <div class="card-body">
        <p><strong>Kode Produksi:</strong> {{ $gudang->kode_produksi }}</p>
        <p><strong>Nama Barang:</strong> {{ $gudang->nama_barang }}</p>
        <p><strong>Stok:</strong> {{ $gudang->stok }}</p>
        <p><strong>Tanggal Masuk:</strong> {{ $gudang->tanggal_masuk }}</p>
        <p><strong>Produksi:</strong> {{ $gudang->produksi->nama_produksi ?? '-' }}</p>
    </div>
</div>
<a href="{{ route('gudang.index') }}" class="btn btn-secondary mt-3">Kembali</a>
@endsection
