<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        $bukus = [
            [
                'nama_buku' => 'Laskar Pelangi',
                'judul' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'penerbit' => 'Bentang Pustaka',
                'tahun_penerbitan' => 2005,
                'ISBN' => '978-979-17-0167-2',
                'jumlah_tersedia' => 5,
                'kategori_id' => 1, // Fiksi
            ],
            [
                'nama_buku' => 'Filosofi Teras',
                'judul' => 'Filosofi Teras',
                'penulis' => 'Henry Manampiring',
                'penerbit' => 'Kompas Gramedia',
                'tahun_penerbitan' => 2018,
                'ISBN' => '978-602-03-5829-1',
                'jumlah_tersedia' => 3,
                'kategori_id' => 2, // Non-Fiksi
            ],
            [
                'nama_buku' => 'Clean Code',
                'judul' => 'Clean Code: A Handbook of Agile Software Craftsmanship',
                'penulis' => 'Robert C. Martin',
                'penerbit' => 'Prentice Hall',
                'tahun_penerbitan' => 2008,
                'ISBN' => '978-0-13-235088-4',
                'jumlah_tersedia' => 2,
                'kategori_id' => 3, // Teknologi
            ],
            [
                'nama_buku' => 'Sejarah Indonesia',
                'judul' => 'Sejarah Indonesia Modern 1200-2008',
                'penulis' => 'M.C. Ricklefs',
                'penerbit' => 'Serambi',
                'tahun_penerbitan' => 2008,
                'ISBN' => '978-979-99-4072-6',
                'jumlah_tersedia' => 4,
                'kategori_id' => 4, // Sejarah
            ],
            [
                'nama_buku' => 'Sapiens',
                'judul' => 'Sapiens: A Brief History of Humankind',
                'penulis' => 'Yuval Noah Harari',
                'penerbit' => 'Harvill Secker',
                'tahun_penerbitan' => 2014,
                'ISBN' => '978-0-06-231609-7',
                'jumlah_tersedia' => 3,
                'kategori_id' => 5, // Sains
            ],
        ];

        foreach ($bukus as $buku) {
            DB::table('buku')->insert([
                'nama_buku' => $buku['nama_buku'],
                'judul' => $buku['judul'],
                'penulis' => $buku['penulis'],
                'penerbit' => $buku['penerbit'],
                'tahun_penerbitan' => $buku['tahun_penerbitan'],
                'ISBN' => $buku['ISBN'],
                'jumlah_tersedia' => $buku['jumlah_tersedia'],
                'kategori_id' => $buku['kategori_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
