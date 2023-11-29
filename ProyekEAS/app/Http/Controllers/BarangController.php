<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view('barangs.index', ['barangs' => $barangs]);
    }

    public function create()
    {
        return view('barangs.create');
    }

    public function store(Request $request)
    {
        // Validasi inputan jika diperlukan
        $validatedData = $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'satuan' => 'required',
            'harga_satuan' => 'required',
            'stok' => 'required',
        ]);

        Barang::create($validatedData);

        return redirect()->route('barangs.index')->with('success', 'Barang berhasil ditambahkan!');
    }

    public function show(Barang $barang)
    {
        return view('barangs.show', ['barang' => $barang]);
    }

    public function edit(Barang $barang)
    {
        return view('barangs.edit', ['barang' => $barang]);
    }

    public function update(Request $request, Barang $barang)
    {
        $validatedData = $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'satuan' => 'required',
            'harga_satuan' => 'required',
            'stok' => 'required',
        ]);

        $barang->update($validatedData);

        return redirect('/barangs')->with('success', 'Barang berhasil diperbarui!');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();

        return redirect('/barangs')->with('success', 'Barang berhasil dihapus!');
    }
}
