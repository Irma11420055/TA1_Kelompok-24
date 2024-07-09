<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
=======
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> aa867f62850738522b91d16cea9683c58f5c2260

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD
        Schema::disableForeignKeyConstraints();
        Role::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            [
                'nama' => 'admin',
                'batas_buku' => 8, // Nilai default untuk batas_buku admin
                'batas_waktu' => '1 semester'
            ],
            [
                'nama' => 'dosen',
                'batas_buku' => 8, // Nilai default untuk batas_buku dosen
                'batas_waktu' => '1 semester'
            ],
            [
                'nama' => 'staff',
                'batas_buku' => 5, // Nilai default untuk batas_buku staff
                'batas_waktu' => '2 minggu'
            ],
            [
                'nama' => 'mahasiswa',
                'batas_buku' => 4, // Nilai default untuk batas_buku mahasiswa
                'batas_waktu' => '1 minggu'
            ],
        ];

        foreach ($data as $roleData) {
            Role::create($roleData);
        }
=======
        Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'lecturer',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'student',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'staff',
            'guard_name' => 'web'
        ]);
>>>>>>> aa867f62850738522b91d16cea9683c58f5c2260
    }
}
