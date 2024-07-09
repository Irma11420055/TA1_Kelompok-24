<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
use Illuminate\Support\Facades\Schema;
=======
use Illuminate\Support\Facades\Hash;
>>>>>>> aa867f62850738522b91d16cea9683c58f5c2260
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            [
                'no_anggota' => 'admin',
                'nama' => 'admin',
                'password' => '$2y$10$i2KyaA47gPln4MhF41bQEOS06EWt9Civ2VQUIk/GryP7dNE7mA4WW', // Nilai default untuk password admin
                'email' => 'admin@del.ac.id',
                'id_role' => '1'
            ],
            [
                'no_anggota' => 'if420057',
                'nama' => 'Tahnia',
                'password' => '$2y$10$Y52TTBWXw.ViQgDi7LiYKus/c/WMU/fK9iVmspfRGOn93dglpmKPe', // Nilai default untuk password Tahnia
                'email' => 'tahnia@del.ac.id',
                'id_role' => '4'
            ],
            [
                'no_anggota' => 'if420055',
                'nama' => 'Irma',
                'password' => '$2y$10$hNmi5j6tFf6w506z795cc./NtaiG352Q7QQqSBt5QNPTJQVPz.0w2', // Nilai default untuk password Irma
                'email' => 'irma@del.ac.id',
                'status' => 'tidak aktif',
                'id_role' => '4'
            ],
            [
                'no_anggota' => 'dosen',
                'nama' => 'dosen',
                'password' => '$2y$10$X0wSyq2ZnWNymUYMFbmZbelUe9r4H7ojApspT999yznsV/hziqBYy', // Nilai default untuk password dosen
                'email' => 'dosen@del.ac.id',
                'id_role' => '2'
            ],
            [
                'no_anggota' => 'staff',
                'nama' => 'staff',
                'password' => '$2y$10$MaggpYSOWQCLaCVGcba1oeCs/eqAS3iS6qxm9EYxt2sWyYQY4hV5u', // Nilai default untuk password staff
                'email' => 'staff@del.ac.id',
                'id_role' => '3'
            ]
        ];

        foreach ($data as $userData) {
            User::create($userData);
        }
=======
        $admin = User::create([
            'id_member' => 'ADM001',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $admin->assignRole('admin');

>>>>>>> aa867f62850738522b91d16cea9683c58f5c2260
    }
}
