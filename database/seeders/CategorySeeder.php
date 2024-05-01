<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory()
        //     ->count(10)
        //     ->create();

        $categories = [
            'Pelajaran',
            'Buku Cerita',
            'Novel',
            'Cerpen',
            'Biologi',
            'Matematika',
            'Perangkat Lunak',
            'Komputer',
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'slug' => Str::slug($category, '-'),
            ]);
        }
    }
}
