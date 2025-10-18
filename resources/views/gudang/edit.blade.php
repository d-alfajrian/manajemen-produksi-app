@extends('layouts.app')

@section('content')
<h2>Edit Barang di Gudang</h2>
<form action="{{ route('gudang.update', $gudang->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Kode Produksi</label>
        <select name="kode_produksi" class="form-control" required>
            <option value="">-- Pilih kode Produksi --</option>
            @foreach ($produksis as $p)
                <option value="{{ $p->kode_produksi }}" {{ $gudang->kode_produksi == $p->kode_produksi ? 'selected' : '' }}>
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
                <option value="{{ $p->nama_barang }}" {{ $gudang->nama_barang == $p->nama_barang ? 'selected' : '' }}>
                    {{ $p->nama_barang }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>jumlah</label>
        <input type="number" name="jumlah" class="form-control" value="{{ $gudang->jumlah }}" required>
    </div>

    <div class="mb-3">
        <label>Stock</label>
        <input type="number" name="stock" class="form-control" value="{{ $gudang->stok }}" required>
    </div>

    <div class="mb-3">
        <label>Tanggal Masuk</label>
        <input type="date" name="tanggal_masuk" class="form-control" value="{{ $gudang->tanggal_masuk }}" required>
    </div>

    <button class="btn btn-primary">Update</button>
    <a href="{{ route('gudang.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
