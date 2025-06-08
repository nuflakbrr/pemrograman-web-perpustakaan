<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetugasSeeder extends Seeder
{
    public function run(): void
    {
        $petugass = [
            [
                'nama_petugas' => 'Admin Perpustakaan',
                'position' => 'Kepala Perpustakaan',
                'nomor_telepon' => '081234567800',
                'email' => 'admin@perpustakaan.com',
                'password' => bcrypt('password')
            ],
            [
                'nama_petugas' => 'Librarian 1',
                'position' => 'Petugas Peminjaman',
                'nomor_telepon' => '081234567801',
                'email' => 'librarian1@perpustakaan.com',
                'password' => bcrypt('password')
            ],
            [
                'nama_petugas' => 'Librarian 2',
                'position' => 'Petugas Pengembalian',
                'nomor_telepon' => '081234567802',
                'email' => 'librarian2@perpustakaan.com',
                'password' => bcrypt('password')
            ],
        ];

        foreach ($petugass as $petugas) {
            DB::table('users')->insert([
                'nama_petugas' => $petugas['nama_petugas'],
                'position' => $petugas['position'],
                'nomor_telepon' => $petugas['nomor_telepon'],
                'email' => $petugas['email'],
                'password' => $petugas['password'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
