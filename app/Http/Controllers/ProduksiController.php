<?php

namespace App\Http\Controllers;

use App\Models\Produksi;
use Illuminate\Http\Request;

class ProduksiController extends Controller
{
    public function index()
    {
        $produksis = Produksi::all();
        return view('produksi.index', compact('produksis'));
    }

    public function create()
    {
        return view('produksi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_produksi' => 'required|unique:produksis',
            'nama_barang' => 'required',
            'jumlah_produksi' => 'required|numeric',
            'tanggal_produksi' => 'required|date',
        ]);

        Produksi::create($request->all());

        return redirect()->route('produksi.index')->with('success', 'Data produksi berhasil ditambahkan');
    }

    public function show(Produksi $produksi)
    {
        return view('produksi.show', compact('produksi'));
    }

    public function edit(Produksi $produksi)
    {
        return view('produksi.edit', compact('produksi'));
    }

    public function update(Request $request, Produksi $produksi)
    {
        $request->validate([
            'nama_barang' => 'required',
            'jumlah_produksi' => 'required|numeric',
            'tanggal_produksi' => 'required|date',
        ]);

        $produksi->update($request->all());

        return redirect()->route('produksi.index')->with('success', 'Data produksi berhasil diperbarui');
    }

    public function destroy(Produksi $produksi)
    {
        $produksi->delete();
        return redirect()->route('produksi.index')->with('success', 'Data produksi berhasil dihapus');
    }
}
