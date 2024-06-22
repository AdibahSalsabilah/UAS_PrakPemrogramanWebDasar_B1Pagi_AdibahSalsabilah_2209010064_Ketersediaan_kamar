<?php

namespace App\Http\Controllers;

use App\Models\kamar;
use App\Models\pasien;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index()
    {
        $kamar = Kamar::all();
        return view('kamar.index', compact('kamar'));
    }

    public function create()
    {
        return view('kamar.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_kamar' => 'required|unique:kamar',
            'level' => 'required',
            'status' => 'required'
        ]);

        Kamar::create($request->all());
        return redirect()->route('kamar.index')
                         ->with('success', 'Kamar berhasil ditambahkan.');
    }

    public function show(Kamar $kamar)
    {
        return view('kamar.show', compact('kamar'));
    }

    public function edit(Kamar $kamar)
    {
        return view('kamar.edit', compact('kamar'));
    }

    public function update(Request $request, Kamar $kamar)
    {
        $request->validate([
            'nomor_kamar' => 'required',
            'level' => 'required',
            'status' => 'required'
        ]);

        $kamar->update($request->all());
        return redirect()->route('kamar.index')
                         ->with('success', 'Kamar berhasil diupdate.');
    }

    public function destroy(Kamar $kamar)
    {
        $kamar->delete();
        return redirect()->route('kamar.index')
                         ->with('success', 'Kamar berhasil dihapus.');
    }
}