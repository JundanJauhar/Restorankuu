<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'role_name' => 'admin',
                'description' => 'Administrator with full access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_name' => 'customer',
                'description' => 'Regular customer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_name' => 'Chef',
                'description' => 'Chef with limited access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_name' => 'cashier',
                'description' => 'Kasir',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('roles')->insert($roles);
    }
}
