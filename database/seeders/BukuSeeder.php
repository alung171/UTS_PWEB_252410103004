<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Buku::create([
            'kode_buku' => 'BK001',
            'judul' => 'Pemrograman Laravel',
            'penulis' => 'Andi',
            'tahun_terbit' => 2024,
        ]);

        Buku::create([
            'kode_buku' => 'BK002',
            'judul' => 'Dasar Basis Data',
            'penulis' => 'Budi',
            'tahun_terbit' => 2023,
        ]);

        Buku::create([
            'kode_buku' => 'BK003',
            'judul' => 'Algoritma Pemrograman',
            'penulis' => 'Siti',
            'tahun_terbit' => 2022,
        ]);
    }
}
