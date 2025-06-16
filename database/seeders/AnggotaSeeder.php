<?php

namespace Database\Seeders;

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
            ],
            [
                'nama' => 'Siti Nurhaliza',
                'alamat' => 'Jl. Gatot Subroto No. 45, Malang',
                'nomor_telepon' => '081234567891',
                'email' => null,
            ],
            [
                'nama' => 'Budi Santoso',
                'alamat' => 'Jl. Diponegoro No. 67, Malang',
                'nomor_telepon' => '081234567892',
                'email' => 'budi.santoso@yahoo.com',
            ],
            [
                'nama' => 'Dewi Lestari',
                'alamat' => 'Jl. Sudirman No. 89, Malang',
                'nomor_telepon' => '081234567893',
                'email' => 'dewi.lestari@gmail.com',
            ],
            [
                'nama' => 'Rizki Pratama',
                'alamat' => 'Jl. Ahmad Yani No. 12, Malang',
                'nomor_telepon' => '081234567894',
                'email' => null,
            ],
            [
                'nama' => 'Indah Permata',
                'alamat' => 'Jl. Letjen S. Parman No. 9, Malang',
                'nomor_telepon' => '081234567895',
                'email' => 'indah.permata@gmail.com',
            ],
            [
                'nama' => 'Fajar Nugroho',
                'alamat' => 'Jl. Ijen No. 23, Malang',
                'nomor_telepon' => '081234567896',
                'email' => 'fajar.nugroho@gmail.com',
            ],
            [
                'nama' => 'Yulia Rahmawati',
                'alamat' => 'Jl. Bondowoso No. 45, Malang',
                'nomor_telepon' => '081234567897',
                'email' => 'yulia.rahmawati@gmail.com',
            ],
            [
                'nama' => 'Andi Saputra',
                'alamat' => 'Jl. Veteran No. 88, Malang',
                'nomor_telepon' => '081234567898',
                'email' => null,
            ],
            [
                'nama' => 'Lestari Wulandari',
                'alamat' => 'Jl. Bandung No. 10, Malang',
                'nomor_telepon' => '081234567899',
                'email' => 'lestari.wulandari@gmail.com',
            ],
        ];

        foreach ($anggotas as $anggota) {
            DB::table('anggota')->insert([
                'nama' => $anggota['nama'],
                'alamat' => $anggota['alamat'],
                'nomor_telepon' => $anggota['nomor_telepon'],
                'email' => $anggota['email'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
