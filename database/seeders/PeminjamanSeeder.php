<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeminjamanSeeder extends Seeder
{
    public function run(): void
    {
        $peminjamans = [
            [
                'anggota_id' => 1,
                'buku_id' => 1,
                'petugas_id' => 2,
                'tanggal_peminjaman' => '2024-03-01',
                'tanggal_pengembalian' => null, // masih dipinjam
                'status' => 'dipinjam',
            ],
            [
                'anggota_id' => 2,
                'buku_id' => 2,
                'petugas_id' => 2,
                'tanggal_peminjaman' => '2024-03-05',
                'tanggal_pengembalian' => '2024-03-12',
                'status' => 'dikembalikan',
            ],
            [
                'anggota_id' => 3,
                'buku_id' => 3,
                'petugas_id' => 3,
                'tanggal_peminjaman' => '2024-03-10',
                'tanggal_pengembalian' => null, // masih dipinjam
                'status' => 'dipinjam',
            ],
        ];

        foreach ($peminjamans as $peminjaman) {
            DB::table('peminjaman')->insert([
                'anggota_id' => $peminjaman['anggota_id'],
                'buku_id' => $peminjaman['buku_id'],
                'petugas_id' => $peminjaman['petugas_id'],
                'tanggal_peminjaman' => $peminjaman['tanggal_peminjaman'],
                'tanggal_pengembalian' => $peminjaman['tanggal_pengembalian'],
                'status' => $peminjaman['status'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
