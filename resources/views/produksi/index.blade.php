@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Daftar Produksi</h2>
    <a href="{{ route('produksi.create') }}" class="btn btn-primary mb-3">+ Tambah Produksi</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Kode Produksi</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Tanggal Produksi</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($produksis as $produksi)
                <tr>
                    <td>{{ $produksi->kode_produksi }}</td>
                    <td>{{ $produksi->nama_barang }}</td>
                    <td>{{ $produksi->jumlah }}</td> <!-- DIUBAH: jumlah_barang -> jumlah -->
                    <td>{{ \Carbon\Carbon::parse($produksi->tanggal_produksi)->format('d-m-Y') }}</td>
                    <td>{{ $produksi->keterangan }}</td>
                    <td>
                        <a href="{{ route('produksi.show', $produksi->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('produksi.edit', $produksi->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('produksi.destroy', $produksi->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Belum ada data produksi</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection