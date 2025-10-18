@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Barang di Gudang</h2>

    {{-- Notifikasi sukses --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('gudang.create') }}" class="btn btn-primary mb-3">+ Tambah Barang</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Produksi</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Stock</th>
                <th>Tanggal Masuk</th>
                <th>keterangan</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($gudangs as $g)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $g->kode_produksi }}</td>
                    <td>{{ $g->nama_barang }}</td>
                    <td>{{ $g->jumlah }}</td>
                    <td>{{ $g->stock }}</td>
                    <td>{{ \Carbon\Carbon::parse($g->tanggal_masuk)->format('d-m-Y') }}</td>
                    <td>
                        <a href="{{ route('gudang.show', $g->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('gudang.edit', $g->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('gudang.destroy', $g->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Belum ada data gudang.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
