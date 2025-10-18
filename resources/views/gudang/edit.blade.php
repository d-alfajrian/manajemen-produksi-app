@extends('layouts.app')

@section('content')
<h2>Edit Data Gudang</h2>
<form action="{{ route('gudang.update', $gudang->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Produksi</label>
        <select name="produksi_id" class="form-control" required>
            @foreach ($produksis as $p)
                <option value="{{ $p->id }}" {{ $p->id == $gudang->produksi_id ? 'selected' : '' }}>
                    {{ $p->nama_produksi }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label>Kode Produksi</label>
        <input type="text" name="kode_produksi" class="form-control" value="{{ $gudang->kode_produksi }}" required>
    </div>
    <div class="mb-3">
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" value="{{ $gudang->nama_barang }}" required>
    </div>
    <div class="mb-3">
        <label>Stok</label>
        <input type="number" name="stok" class="form-control" value="{{ $gudang->stok }}" required>
    </div>
    <div class="mb-3">
        <label>Tanggal Masuk</label>
        <input type="date" name="tanggal_masuk" class="form-control" value="{{ $gudang->tanggal_masuk }}" required>
    </div>
    <button class="btn btn-primary">Update</button>
    <a href="{{ route('gudang.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
