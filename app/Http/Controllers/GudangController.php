<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use App\Models\Produksi;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    public function index()
    {
        $gudangs = Gudang::with('produksi')->get();
        return view('gudang.index', compact('gudangs'));
    }

    public function create()
    {
        $produksis = Produksi::all();
        return view('gudang.create', compact('produksis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_produksi' => 'required|exists:produksis,id',
            'nama_barang' => 'required',
            'jumlah' => 'required',
            'stock' => 'required|numeric',
            'tanggal_masuk' => 'required|date',
        ]);

        Gudang::create($request->all());

        return redirect()->route('gudang.index')->with('success', 'Data gudang berhasil ditambahkan');
    }

    public function show(Gudang $gudang)
    {
        return view('gudang.show', compact('gudang'));
    }

    public function edit(Gudang $gudang)
    {
        $produksis = Produksi::all();
        return view('gudang.edit', compact('gudang', 'produksis'));
    }

    public function update(Request $request, Gudang $gudang)
    {
        $request->validate([
            'stok' => 'required|numeric',
            'tanggal_masuk' => 'required|date',
        ]);

        $gudang->update($request->all());

        return redirect()->route('gudang.index')->with('success', 'Data gudang berhasil diperbarui');
    }

    public function destroy(Gudang $gudang)
    {
        $gudang->delete();
        return redirect()->route('gudang.index')->with('success', 'Data gudang berhasil dihapus');
    }
}
