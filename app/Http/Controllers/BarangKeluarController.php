<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use App\Models\Gudang;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    // 🟢 1. Tampilkan semua data
    public function index()
    {
        $barangKeluars = BarangKeluar::with('gudang')->get();
        return view('barangkeluar.index', compact('barangKeluars'));
    }

    // 🟢 2. Form tambah data
    public function create()
    {
        $gudangs = Gudang::all();
        return view('barangkeluar.create', compact('gudangs'));
    }

    // 🟢 3. Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'kode_produksi' => 'required',
            'nama_barang' => 'required',
            'jumlah_keluar' => 'required|numeric',
            'tanggal_keluar' => 'required|date',
            'gudang_id' => 'required'
        ]);

        BarangKeluar::create($request->all());
        return redirect()->route('barang-keluar.index')->with('success', 'Data berhasil ditambahkan!');
    }

    // 🟢 4. Form edit data
    public function edit($id)
    {
        $barangKeluar = BarangKeluar::findOrFail($id);
        $gudangs = Gudang::all();
        return view('barangkeluar.edit', compact('barangKeluar', 'gudangs'));
    }

    // 🟢 5. Update data
    public function update(Request $request, $id)
    {
        $barangKeluar = BarangKeluar::findOrFail($id);

        $request->validate([
            'kode_produksi' => 'required',
            'nama_barang' => 'required',
            'jumlah_keluar' => 'required|numeric',
            'tanggal_keluar' => 'required|date',
            'gudang_id' => 'required'
        ]);

        $barangKeluar->update($request->all());
        return redirect()->route('barang-keluar.index')->with('success', 'Data berhasil diupdate!');
    }

    // 🟢 6. Hapus data
    public function destroy($id)
    {
        $barangKeluar = BarangKeluar::findOrFail($id);
        $barangKeluar->delete();
        return redirect()->route('barang-keluar.index')->with('success', 'Data berhasil dihapus!');
    }
}
