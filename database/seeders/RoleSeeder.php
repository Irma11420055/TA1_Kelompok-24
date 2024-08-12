<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'Pustakawan',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'Dosen',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'Mahasiswa',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'Staff',
            'guard_name' => 'web'
        ]);
    }
}
