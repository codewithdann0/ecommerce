<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Ensure the user is only created if it does not already exist
        User::firstOrCreate(
            ['email' => 'test@example.com'], // Unique constraint to check
            [
                'name' => 'Test User',
                'password' => bcrypt('password'), // Ensure the password is hashed
            ]
        );

        // Call other seeders
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
    }
}
