<?php

namespace Database\Seeders;

use App\Models\User;
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
        // Jalankan RoleSeeder terlebih dahulu
        $this->call(RoleSeeder::class);

        // Kemudian jalankan UserSeeder
        $this->call(UserSeeder::class);

        // Buat test user
        User::factory()->create([
            'fullname' => 'Test User',
            'email' => 'test@example.com',
            'role_id' => 1, // Set role_id ke admin
        ]);
    }
}
