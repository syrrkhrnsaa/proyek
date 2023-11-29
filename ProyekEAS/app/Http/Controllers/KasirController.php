<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kasir;

class KasirController extends Controller
{
    public function index()
    {
        $kasirs = Kasir::all();
        return view('kasirs.index', compact('kasirs'));
    }

    public function create()
    {
        return view('kasirs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_kasir' => 'required',
            'nama' => 'required',
            'hp' => 'required',
        ]);

        $kasir = Kasir::create($validatedData);

        if($kasir){
            return redirect()->route('kasirs.index')->with('success', 'Kasir berhasil ditambahkan!');
        } else {
            return redirect()->route('kasirs.index')->with('error', 'Gagal menambahkan kasir. Silakan coba lagi.');
        }
    }

    public function show(Kasir $kasir)
    {
        return view('kasirs.show', ['kasir' => $kasir]);
    }

    public function edit(Kasir $kasir)
    {
        return view('kasirs.edit', ['kasir' => $kasir]);
    }

    public function update(Request $request, Kasir $kasir)
    {
        $validatedData = $request->validate([
            'kode_kasir' => 'required',
            'nama' => 'required',
            'hp' => 'required',
        ]);

        $kasirUpdated = $kasir->update($validatedData);

        if($kasirUpdated){
            return redirect()->route('kasirs.index')->with('success', 'Kasir berhasil diperbarui!');
        } else {
            return redirect()->route('kasirs.index')->with('error', 'Gagal memperbarui kasir. Silakan coba lagi.');
        }
    }

    public function destroy(Kasir $kasir)
    {
        $kasir->delete();

        return redirect()->route('kasirs.index')->with('success', 'Kasir berhasil dihapus!');
    }
}
