<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Investment;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // foreach (range(1, 100) as $i) {
        //     Investment::create([
        //         'user_id' => [7, 8][array_rand([7, 8])], // Randomly selects 7 or 8
        //         'currency' => "USD",
        //         'amount' => rand(999, 3829), // Random amount between 999 and 3829
        //         'profit' => rand(999, 3829), // Random profit between 999 and 3829
        //     ]);
        // }

    User::create([
        'name' => 'admin',
        'email' => 'admin@gmail.com',
        'is_admin' => true,
        'password' => bcrypt("1234")
    ]);
        
        
    }
}
