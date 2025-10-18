@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Detail Produksi</h2>
    <table class="table">
        <tr><th>Kode Produksi</th><td>{{ $produksi->kode_produksi }}</td></tr>
        <tr><th>Nama Barang</th><td>{{ $produksi->nama_barang }}</td></tr>
        <tr><th>Jumlah</th><td>{{ $produksi->jumlah }}</td></tr>
        <tr><th>Tanggal Produksi</th><td>{{ $produksi->tanggal_produksi }}</td></tr>
    </table>

    <a href="{{ route('produksi.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
