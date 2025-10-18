@extends('layouts.app')

@section('content')
<h2>Tambah Barang ke Gudang</h2>
<form action="{{ route('gudang.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Kode Produksi</label>
        <select name="kode_produksi" class="form-control" required>
            <option value="">-- Pilih kode Produksi --</option>
            @foreach ($produksis as $p)
                <option value="{{ $p->kode_produksi }}">
                    {{ $p->kode_produksi }} - {{ $p->nama_barang }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Nama Barang</label>
        <select name="nama_barang" class="form-control" required>
            <option value="">-- Pilih Nama Barang --</option>
            @foreach ($produksis as $p)
                <option value="{{ $p->nama_barang }}">{{ $p->nama_barang }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Jumlah</label>
        <input type="number" name="jumlah" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Stock</label>
        <input type="number" name="stock" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>tanggal Masuk</label>
        <input type="date" name="tanggal_masuk" class="form-control" required>
    </div>

    <button class="btn btn-success">Simpan</button>
    <a href="{{ route('gudang.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
