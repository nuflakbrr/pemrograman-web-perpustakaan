<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $petugas = User::all();
        return view('admin.petugas.index', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_petugas' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'position' => 'required|string|max:255',
            'nomor_telepon' => 'required',
        ]);

        User::create($request->all());

        return redirect()->route('petugas.index')->with('success', 'Petugas berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $petugas, $id): View
    {
        $petugas = User::find($id);
        return view('admin.petugas.edit', compact('petugas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $petugas, $id)
    {
        $request->validate([
            'nama_petugas' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required',
            'position' => 'required|string|max:255',
            'nomor_telepon' => 'required',
        ]);

        $petugas = User::find($id);
        $petugas->update($request->all());

        return redirect()->route('petugas.index')->with('success', 'Petugas berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $petugas, $id)
    {
        $petugas = User::find($id);
        $petugas->delete();

        return redirect()->route('petugas.index')->with('success', 'Petugas berhasil dihapus');
    }
}
