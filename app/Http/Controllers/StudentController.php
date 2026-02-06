<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentSeeder extends Controller
{
    public function run(): void
    {
      $students = DB::select("select * from students");

    //  return $students;
    }
}