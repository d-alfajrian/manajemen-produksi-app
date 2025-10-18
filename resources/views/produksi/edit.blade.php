@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Produksi</h2>

    <form action="{{ route('produksi.update', $produksi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Kode Produksi</label>
            <input type="text" name="kode_produksi" value="{{ $produksi->kode_produksi }}" class="form-control" readonly>
        </div>
        <div class="mb-3">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" value="{{ $produksi->nama_barang }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" name="jumlah" value="{{ $produksi->jumlah }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tanggal Produksi</label>
            <input type="date" name="tanggal_produksi" value="{{ $produksi->tanggal_produksi }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('produksi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
