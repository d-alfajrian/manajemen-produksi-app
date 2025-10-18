@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Tambah Produksi</h2>

    <form action="{{ route('produksi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Kode Produksi</label>
            <input type="text" name="kode_produksi" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tanggal Produksi</label>
            <input type="date" name="tanggal_produksi" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('produksi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
