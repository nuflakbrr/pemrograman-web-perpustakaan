<?php

namespace App\Http\Controllers;

use App\Models\KategoriBuku;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KategoriBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $kategoriBuku = KategoriBuku::all();
        return view('admin.kategori.index', compact('kategoriBuku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required',
            'deskripsi' => 'required',
        ]);

        KategoriBuku::create($request->all());

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriBuku $kategoriBuku, $id): View
    {
        $kategoriBuku = KategoriBuku::find($id);
        return view('admin.kategori.edit', compact('kategoriBuku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriBuku $kategoriBuku, $id)
    {
        $request->validate([
            'nama_kategori' => 'required',
            'deskripsi' => 'required',
        ]);

        $kategoriBuku = KategoriBuku::find($id);
        $kategoriBuku->update($request->all());

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriBuku $kategoriBuku, $id)
    {
        $kategoriBuku = KategoriBuku::find($id);
        $kategoriBuku->delete();

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus');
    }
}
