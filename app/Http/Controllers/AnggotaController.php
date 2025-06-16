<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $anggotas = Anggota::all();
        return view('admin.anggota.index', compact('anggotas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'nullable|email|unique:anggota,email',
        ]);

        Anggota::create($request->all());

        return redirect()->route('anggota.index')->with('success', 'Data anggota berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anggota $anggota): View
    {
        return view('admin.anggota.edit', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anggota $anggota)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'nullable|email|unique:anggota,email,' . $anggota->id,
        ]);

        $anggota->update($request->all());

        return redirect()->route('anggota.index')->with('success', 'Data anggota berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anggota $anggota)
    {
        $anggota->delete();

        return redirect()->route('anggota.index')->with('success', 'Data anggota berhasil dihapus.');
    }
}
