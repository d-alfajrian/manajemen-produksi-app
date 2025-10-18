@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Data Barang Keluar</h2>

    <form action="{{ route('barang-keluar.update', $barangKeluar->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Gudang</label>
            <select name="gudang_id" class="form-control" required>
                @foreach ($gudangs as $g)
                    <option value="{{ $g->id }}" {{ $g->id == $barangKeluar->gudang_id ? 'selected' : '' }}>
                        {{ $g->kode_produksi }} - {{ $g->nama_barang }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Kode Produksi</label>
            <input type="text" name="kode_produksi" class="form-control" value="{{ $barangKeluar->kode_produksi }}" required>
        </div>

        <div class="mb-3">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" value="{{ $barangKeluar->nama_barang }}" required>
        </div>

        <div class="mb-3">
            <label>Jumlah Keluar</label>
            <input type="number" name="jumlah_keluar" class="form-control" value="{{ $barangKeluar->jumlah_keluar }}" required>
        </div>

        <div class="mb-3">
            <label>Tanggal Keluar</label>
            <input type="date" name="tanggal_keluar" class="form-control" value="{{ $barangKeluar->tanggal_keluar }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('barang-keluar.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
