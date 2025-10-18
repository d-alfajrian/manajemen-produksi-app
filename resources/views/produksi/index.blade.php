@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Daftar Produksi</h2>
    <a href="{{ route('produksi.create') }}" class="btn btn-primary mb-3">+ Tambah Produksi</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Produksi</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Tanggal Produksi</th>
                <th>keterangan</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($produksis as $produksi)
                <tr>
                    <td>{{ $produksi->kode_produksi }}</td>
                    <td>{{ $produksi->nama_barang }}</td>
                    <td>{{ $produksi->jumlah_barang }}</td>
                    <td>{{ $produksi->tanggal_produksi }}</td>
                    <td>
                        <a href="{{ route('produksi.show', $produksi->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('produksi.edit', $produksi->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('produksi.destroy', $produksi->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5" class="text-center">Belum ada data</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
