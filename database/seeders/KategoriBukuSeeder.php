<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriBukuSeeder extends Seeder
{
    public function run(): void
    {
        $kategoris = [
            ['nama_kategori' => 'Fiksi', 'deskripsi' => 'Buku cerita fiksi dan novel'],
            ['nama_kategori' => 'Non-Fiksi', 'deskripsi' => 'Buku pengetahuan dan referensi'],
            ['nama_kategori' => 'Teknologi', 'deskripsi' => 'Buku tentang teknologi dan komputer'],
            ['nama_kategori' => 'Sejarah', 'deskripsi' => 'Buku sejarah dan biografi'],
            ['nama_kategori' => 'Sains', 'deskripsi' => 'Buku sains dan penelitian'],
            ['nama_kategori' => 'Agama', 'deskripsi' => 'Buku keagamaan dan spiritual'],
        ];

        foreach ($kategoris as $kategori) {
            DB::table('kategori_buku')->insert([
                'nama_kategori' => $kategori['nama_kategori'],
                'deskripsi' => $kategori['deskripsi'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
