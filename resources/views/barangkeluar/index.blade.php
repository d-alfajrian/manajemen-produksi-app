@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Data Barang Keluar</h2>

    <a href="{{ route('barang-keluar.create') }}" class="btn btn-primary mb-3">+ Tambah Barang Keluar</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Kode Produksi</th>
                <th>Nama Barang</th>
                <th>Jumlah Keluar</th>
                <th>Tanggal Keluar</th>
                <th>Gudang</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangKeluars as $bk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $bk->kode_produksi }}</td>
                    <td>{{ $bk->nama_barang }}</td>
                    <td>{{ $bk->jumlah_keluar }}</td>
                    <td>{{ $bk->tanggal_keluar }}</td>
                    <td>{{ $bk->gudang->nama_barang ?? '-' }}</td>
                    <td>
                        <a href="{{ route('barang-keluar.edit', $bk->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('barang-keluar.destroy', $bk->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
