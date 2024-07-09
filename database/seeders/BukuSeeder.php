<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Buku::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            [
                'id_judul' => '1',
                'kode_buku' => '001acj2-982',
                'bahasa' => 'Indonesia',
                'subjek' => 'Novel',
                'edisi' => '2',
                'pengarang' => 'Dilan', 
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis ad esse hic minima perferendis? Rem temporibus iure beatae aperiam excepturi?',
                'jenis' => 'Buku Cerita',
                'penerbit' => 'Erlangga',
                'klasifikasi' => '01',
                'lokasi' => 'Lt 1',
                'ISBN' => '234567898',
                'tahun' => '2017',
                'CP/OR' => 'OR',
                'gambar' => file_get_contents(public_path('dist/img/dilan.png'))
            ],
        ];

        foreach ($data as $bukuData) {
            Buku::create($bukuData);
        }
    }
}