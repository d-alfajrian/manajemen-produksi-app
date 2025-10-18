@extends('layouts.app')

@section('content')
<h2>Tambah Barang ke Gudang</h2>
<form action="{{ route('gudang.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Produksi</label>
        <select name="produksi_id" class="form-control" required>
            <option value="">-- Pilih Produksi --</option>
            @foreach ($produksis as $p)
                <option value="{{ $p->id }}">{{ $p->nama_produksi }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label>Kode Produksi</label>
        <input type="text" name="kode_produksi" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Stok</label>
        <input type="number" name="stok" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Tanggal Masuk</label>
        <input type="date" name="tanggal_masuk" class="form-control" required>
    </div>
    <button class="btn btn-success">Simpan</button>
    <a href="{{ route('gudang.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
