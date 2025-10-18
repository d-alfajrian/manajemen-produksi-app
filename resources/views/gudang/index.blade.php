@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>📦 Data Gudang</h2>
    <a href="{{ route('gudang.create') }}" class="btn btn-primary">+ Tambah Barang</a>
</div>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Kode Produksi</th>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Tanggal Masuk</th>
            <th>Produksi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($gudangs as $gudang)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $gudang->kode_produksi }}</td>
            <td>{{ $gudang->nama_barang }}</td>
            <td>{{ $gudang->stok }}</td>
            <td>{{ $gudang->tanggal_masuk }}</td>
            <td>{{ $gudang->produksi->nama_produksi ?? '-' }}</td>
            <td>
                <a href="{{ route('gudang.show', $gudang->id) }}" class="btn btn-info btn-sm">Detail</a>
                <a href="{{ route('gudang.edit', $gudang->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('gudang.destroy', $gudang->id) }}" method="POST" class="d-inline"
                      onsubmit="return confirm('Yakin ingin hapus data ini?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7" class="text-center">Belum ada data gudang</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
