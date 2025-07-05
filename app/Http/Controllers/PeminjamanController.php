<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $peminjaman = Peminjaman::all();
        return view('admin.peminjaman.index', compact('peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $anggota = Anggota::all();
        $buku = Buku::all();
        return view('admin.peminjaman.create', compact('anggota', 'buku'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'anggota_id' => 'required',
            'buku_id' => 'required',
            'tanggal_peminjaman' => 'required',
        ]);

        $buku = Buku::findOrFail($request->buku_id);

        if ($buku->jumlah_tersedia <= 0) {
            return redirect()->back()->with('error', 'Stok buku tidak cukup.');
        }

        DB::transaction(function () use ($request, $buku) {
            // Kurangi stok buku
            $buku->jumlah_tersedia -= 1;
            $buku->save();

            // Simpan peminjaman
            Peminjaman::create([
                'anggota_id' => $request->anggota_id,
                'buku_id' => $request->buku_id,
                'tanggal_peminjaman' => $request->tanggal_peminjaman,
                'tanggal_pengembalian' => $request->tanggal_pengembalian,
                'petugas_id' => Auth::id(),
                'status' => 'dipinjam',
            ]);
        });

        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peminjaman $peminjaman, $id): View
    {
        $peminjaman = Peminjaman::find($id);
        $anggota = Anggota::all();
        $buku = Buku::all();
        $user = Auth::user();
        return view('admin.peminjaman.edit', compact('peminjaman', 'anggota', 'buku', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peminjaman $peminjaman, $id)
    {
        $request->validate([
            'tanggal_pengembalian' => 'required',
            'status' => 'required',
        ]);

        $peminjaman = Peminjaman::findOrFail($id);

        DB::transaction(function () use ($request, $peminjaman) {
            if (
                $peminjaman->status !== 'dikembalikan' &&
                $request->status    === 'dikembalikan'
            ) {
                $buku = Buku::findOrFail($peminjaman->buku_id);
                $buku->jumlah_tersedia += 1;
                $buku->save();
            }

            $peminjaman->update([
                'tanggal_pengembalian' => $request->tanggal_pengembalian,
                'status'               => $request->status,
            ]);
        });

        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil diupdate');
    }
}
