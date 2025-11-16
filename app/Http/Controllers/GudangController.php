<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    public function index()
    {
        $gudangs = Gudang::all();
        return view('gudang.index', compact('gudangs'));
    }

    public function create()
    {
        return view('gudang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_produksi' => 'required|unique:gudangs',
            'nama_barang' => 'required',
            'jumlah' => 'required|numeric',
            'tanggal_masuk' => 'required|date',
            'keterangan' => 'nullable',
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
        return view('gudang.edit', compact('gudang'));
    }

    public function update(Request $request, Gudang $gudang)
    {
        $request->validate([
            'kode_produksi' => 'required|unique:gudangs,kode_produksi,' . $gudang->id,
            'nama_barang' => 'required',
            'jumlah' => 'required|numeric',
            'tanggal_masuk' => 'required|date',
            'keterangan' => 'nullable',
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