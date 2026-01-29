<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    // use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // student::factory(21)->create();



    $this->call([
        StudentSeeder::class
    ]);

        // User::factory(10)->create();

    //     User::factory()->create([
    //         'name' => 'Test User',
    //         'email' => 'test@example.com',
    //     ]);



    }
}
