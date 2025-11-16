@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Tambah Barang Gudang</h2>

    <form action="{{ route('gudang.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="kode_produksi">Kode Produksi</label>
            <input type="text" name="kode_produksi" id="kode_produksi" class="form-control" value="{{ old('kode_produksi') }}" required>
        </div>

        <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="{{ old('nama_barang') }}" required>
        </div>

        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control" value="{{ old('jumlah') }}" required>
        </div>

        <div class="form-group">
            <label for="tanggal_masuk">Tanggal Masuk</label>
            <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control" value="{{ old('tanggal_masuk') }}" required>
        </div>

        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="form-control" rows="3">{{ old('keterangan') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('gudang.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection