<?php

namespace Database\Seeders;

use App\Models\JudulBuku;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JudulBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        JudulBuku::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'Dilan 1990', 'Rekayasa Perangkat Lunak', 'Bumi Manusia'
        ];

        foreach ($data as $judulbukuData) {
            JudulBuku::insert([
                'judul_buku' => $judulbukuData
            ]);
        }
    }
}
