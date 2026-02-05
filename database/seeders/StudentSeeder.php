<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $json = File::get(database_path('data/students.json'));
        $students = json_decode($json, true);

        DB::table('students')->insert($students);
    }
}
     
// namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;
// use App\Models\student;
// use Illuminate\Support\Carbon;
// use Illuminate\Support\Facades\File;

// class StudentSeeder extends Seeder
// {
    /**
     * Run the database seeds.
     */
    // public function run(): void
    //     {
    //         student::factory(7)->create();

            // for($i=1 ; $i<=10 ; $i++){

            //      student::create([
            // 'name' => fake()->name(),
            // 'email' => fake()->unique()->email(),
            // ]);
        // }
            


        //   $json = File::get(path:'database/json/students.json');
        //   $students = collect(json_decode($json));


        // //     $students = collect(
        // //     [
        // //         [
        // //             'name' => 'Azan',
        // //             'email' => 'azan@gmail.com'
        // //         ],
        // //         [
        // //             'name' => 'Umair',
        // //             'email' => 'Umair@gmail.com'
        // //         ],
        // //         [
        // //             'name' => 'Shahnazar',
        // //             'email' => 'Shahnazar@gmail.com'
        // //         ],
        // //     ]
        // // );

        // $students->each(function($student){

        // //  student::insert($student);

        // student::create([
        //     'name' => $student->name,
        //     'email' => $student->email
           
        // ]);

        // });

    //  student::create([
    //         'name' => 'Azan',
    //         'email' => 'azan@gmail.com'
           
    //     ]);
//     }
// }
