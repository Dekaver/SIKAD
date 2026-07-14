<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // seeder user
        $this->call([
            UserSeeder::class,
            MajorSeeder::class,
            LecturerSeeder::class,
            StudentSeeder::class,
        ]);

        User::factory()->count(50)->lecturer()->create();

        User::factory()->count(1000)->student()->create();
    }
}
