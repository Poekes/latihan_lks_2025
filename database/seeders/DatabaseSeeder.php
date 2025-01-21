<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'admin user',
            'username' => 'admin1234',
            'role' => 'admin',
            'password' => bcrypt('admin1234'),
        ]);
        User::create([
            'name' => 'test user',
            'username' => 'test1234',
            'password' => bcrypt('test1234'),
        ]);
    }
}
