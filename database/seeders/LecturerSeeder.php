<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LecturerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('lecturers')->insert([
            ['name' => 'Dr. Ahmed'],
            ['name' => 'Prof. Khan'],
            ['name' => 'Dr. Fatima'],
            ['name' => 'Dr. Ali']
        ]);
    }
}
