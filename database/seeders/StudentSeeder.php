<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $path = database_path('json/students.json');
        $students = json_decode(File::get($path), true);

        // Assign lecturers in round-robin
        $lecturerIds = [1,2,3,4];
        $i = 0;

        foreach ($students as &$student) {
            $student['city_id'] = $student['city']; // map city to city_id
            unset($student['city']); // remove old key
            $student['lecturer_id'] = $lecturerIds[$i % count($lecturerIds)];
            $i++;
        }

        DB::table('students')->insert($students);
    }
}