<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\KategoriBuku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $buku = Buku::all();
        return view('admin.buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $kategori = KategoriBuku::all();
        return view('admin.buku.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_buku' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_penerbitan' => 'required',
            'isbn' => 'required',
            'cover' => ['required', 'file', 'mimes:png,jpg,jpeg'],
            'jumlah_tersedia' => 'required',
            'kategori_id' => 'required',
        ]);

        $payload = new Buku($request->all());

        if ($request->cover) {
            $name = time() . '.' . $request->cover->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('images', $request->cover, $name);
        }

        $payload->cover = $name;
        $payload->save();
        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku, $id): View
    {
        $kategori = KategoriBuku::all();
        $buku = Buku::find($id);
        return view('admin.buku.edit', compact('buku', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku, $id)
    {
        $buku = Buku::find($id);

        $request->validate([
            'judul_buku' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_penerbitan' => 'required',
            'isbn' => 'required',
            'cover' => 'required',
            'jumlah_tersedia' => 'required',
            'kategori_id' => 'required',
        ]);

        $payload = $request->all();

        if ($request->cover) {
            if ($buku->cover) {
                Storage::disk('public')->delete('images/' . $buku->cover);
            }
            $name = time() . '.' . $request->cover->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('images', $request->cover, $name);
        }

        $payload['cover'] = $name;
        $buku->update($payload);
        return redirect()->route('buku.index')->with('success', 'Buku berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku, $id)
    {
        $buku = Buku::find($id);
        if ($buku->cover) {
            Storage::disk('public')->delete('images/' . $buku->cover);
        }
        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus');
    }
}
