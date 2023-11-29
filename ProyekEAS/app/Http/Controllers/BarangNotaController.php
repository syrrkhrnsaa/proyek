<?php

namespace App\Http\Controllers;

use App\Models\BarangNota;
use Illuminate\Http\Request;

class BarangNotaController extends Controller
{
    // Method untuk menampilkan semua data barang notas
    public function index()
    {
        $barangNotas = BarangNota::with(['nota', 'barang'])->get();
        return view('barang-notas.index', compact('barangNotas'));
    }

    // Method untuk menampilkan form tambah barang nota
    public function create()
    {
        // Logika jika diperlukan sebelum menampilkan form
        return view('barang-notas.create');
    }

    // Method untuk menyimpan data barang nota yang baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_nota' => 'required|exists:notas,id',
            'kode_barang' => 'required|exists:barangs,id',
            'jumlah_barang' => 'required|numeric',
            'harga_satuan' => 'required|numeric',
            'jumlah' => 'required|numeric',
        ]);

        BarangNota::create($validatedData);

        return redirect()->route('barang-notas.index')
            ->with('success', 'Barang nota berhasil ditambahkan');
    }

    // Method untuk menampilkan detail data barang nota
    public function show(BarangNota $barangNota)
    {
        return view('barang-notas.show', compact('barangNota'));
    }

    // Method untuk menampilkan form edit barang nota
    public function edit(BarangNota $barangNota)
    {
        return view('barang-notas.edit', compact('barangNota'));
    }

    // Method untuk menyimpan perubahan pada data barang nota yang diedit
    public function update(Request $request, BarangNota $barangNota)
    {
        $validatedData = $request->validate([
            'kode_nota' => 'required|exists:notas,id',
            'kode_barang' => 'required|exists:barangs,id',
            'jumlah_barang' => 'required|numeric',
            'harga_satuan' => 'required|numeric',
            'jumlah' => 'required|numeric',
        ]);

        $barangNota->update($validatedData);

        return redirect()->route('barang-notas.index')
            ->with('success', 'Barang nota berhasil diperbarui');
    }

    // Method untuk menghapus data barang
    public function destroy(BarangNota $barangNota)
    {
        $barangNota->delete(); // Hapus nota berdasarkan ID yang diterima
        return redirect()->route('barang-notas.index')
            ->with('success', 'Nota berhasil dihapus'); // Redirect ke halaman index dengan pesan sukses
    }
}
