<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaSeeder extends Seeder
{
    public function run(): void
    {
        $anggotas = [
            [
                'nama' => 'Ahmad Fauzi',
                'alamat' => 'Jl. Merdeka No. 123, Malang',
                'nomor_telepon' => '081234567890',
                'email' => 'ahmad.fauzi@gmail.com',
                'tanggal_bergabung' => '2024-01-15',
            ],
            [
                'nama' => 'Siti Nurhaliza',
                'alamat' => 'Jl. Gatot Subroto No. 45, Malang',
                'nomor_telepon' => '081234567891',
                'email' => null, // contoh email kosong
                'tanggal_bergabung' => '2024-01-20',
            ],
            [
                'nama' => 'Budi Santoso',
                'alamat' => 'Jl. Diponegoro No. 67, Malang',
                'nomor_telepon' => '081234567892',
                'email' => 'budi.santoso@yahoo.com',
                'tanggal_bergabung' => '2024-02-01',
            ],
            [
                'nama' => 'Dewi Lestari',
                'alamat' => 'Jl. Sudirman No. 89, Malang',
                'nomor_telepon' => '081234567893',
                'email' => 'dewi.lestari@gmail.com',
                'tanggal_bergabung' => '2024-02-10',
            ],
            [
                'nama' => 'Rizki Pratama',
                'alamat' => 'Jl. Ahmad Yani No. 12, Malang',
                'nomor_telepon' => '081234567894',
                'email' => null, // contoh email kosong
                'tanggal_bergabung' => '2024-02-15',
            ],
        ];

        foreach ($anggotas as $anggota) {
            DB::table('anggota')->insert([
                'nama' => $anggota['nama'],
                'alamat' => $anggota['alamat'],
                'nomor_telepon' => $anggota['nomor_telepon'],
                'email' => $anggota['email'],
                'tanggal_bergabung' => $anggota['tanggal_bergabung'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
