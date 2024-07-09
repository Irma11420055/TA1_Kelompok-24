<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
=======
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            // BookSeeder::class,
            // CompactDiskSeeder::class,
            AnnouncementSeeder::class,
            ArticleSeeder::class,
            // LendingSeeder::class,
        ]);
    }
}
>>>>>>> aa867f62850738522b91d16cea9683c58f5c2260
