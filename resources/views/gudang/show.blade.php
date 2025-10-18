@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Barang Gudang</h2>

    <div class="card mt-4">
        <div class="card-body">
            <p><strong>Kode Produksi:</strong> {{ $gudang->kode_produksi }}</p>
            <p><strong>Nama Barang:</strong> {{ $gudang->nama_barang }}</p>
            <p><strong>Jumlah:</strong> {{ $gudang->jumlah }}</p>
            <p><strong>Stok:</strong> {{ $gudang->stok }}</p>
            <p><strong>Tanggal Masuk:</strong> {{ \Carbon\Carbon::parse($gudang->tanggal_masuk)->format('d-m-Y') }}</p>
        </div>
    </div>

    <a href="{{ route('gudang.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
