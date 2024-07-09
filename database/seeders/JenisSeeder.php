<?php

namespace Database\Seeders;

use App\Models\Jenis;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Jenis::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'buku', 'cd_dvd', 'peraturan_perpustakaan', 'panduan_pesan_pinjam', 'penghargaan'
        ];

        foreach ($data as $value) {
            Jenis::insert([
                'jenis' => $value
            ]);
        }
    }
}
