<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function index()
    {
        $notas = Nota::all(); // Mengambil semua data nota
        return view('notas.index', compact('notas')); // Mengirim data ke view
    }

    public function create()
    {
        // Metode untuk menampilkan form pembuatan nota baru
        return view('notas.create');
    }

    public function store(Request $request)
    {
        // Validasi request
        $validatedData = $request->validate([
            'kode_tenan' => 'required',
            'kode_kasir' => 'required',
            'tgl_nota' => 'required',
            'jam_nota' => 'required',
            'jumlah_belanja' => 'required|numeric',
            'diskon' => 'required|numeric',
            'total' => 'required|numeric',
        ]);

        // Buat nota baru berdasarkan data yang diterima dari request
        Nota::create($validatedData);

        return redirect()->route('notas.index')
            ->with('success', 'Nota berhasil dibuat'); // Redirect ke halaman index dengan pesan sukses
    }

    public function show(Nota $nota)
    {
        return view('notas.show', compact('nota')); // Menampilkan detail nota
    }

    public function edit(Nota $nota)
    {
        return view('notas.edit', compact('nota')); // Menampilkan form edit nota
    }

    public function update(Request $request, Nota $nota)
    {
        // Validasi request
        $validatedData = $request->validate([
            'kode_tenan' => 'required',
            'kode_kasir' => 'required',
            'tgl_nota' => 'required',
            'jam_nota' => 'required',
            'jumlah_belanja' => 'required|numeric',
            'diskon' => 'required|numeric',
            'total' => 'required|numeric',
        ]);

        // Update data nota berdasarkan data yang diterima dari request
        $nota->update($validatedData);

        return redirect()->route('notas.index')
            ->with('success', 'Nota berhasil diperbarui'); // Redirect ke halaman index dengan pesan sukses
    }

    public function destroy(Nota $nota)
    {
        $nota->delete(); // Hapus nota berdasarkan ID yang diterima
        return redirect()->route('notas.index')
            ->with('success', 'Nota berhasil dihapus'); // Redirect ke halaman index dengan pesan sukses
    }
}
