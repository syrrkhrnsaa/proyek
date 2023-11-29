<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenan;

class TenanController extends Controller
{
    public function index()
    {
        $tenans = Tenan::all();
        return view('tenans.index', compact('tenans'));
    }

    public function create()
    {
        return view('tenans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_tenan' => 'required',
            'nama_tenan' => 'required',
            'hp' => 'required',
        ]);

        Tenan::create($request->all());

        return redirect()->route('tenans.index')
            ->with('success', 'Tenan created successfully.');
    }

    public function show(Tenan $tenan)
    {
        return view('tenans.show', compact('tenan'));
    }

    public function edit(Tenan $tenan)
    {
        return view('tenans.edit', compact('tenan'));
    }

    public function update(Request $request, Tenan $tenan)
    {
        $request->validate([
            'kode_tenan' => 'required',
            'nama_tenan' => 'required',
            'hp' => 'required',
        ]);

        $tenan->update($request->all());

        return redirect()->route('tenans.index')
            ->with('success', 'Tenan updated successfully');
    }

    public function destroy(Tenan $tenan)
    {
        $tenan->delete();

        return redirect()->route('tenans.index')
            ->with('success', 'Tenan deleted successfully');
    }
}
