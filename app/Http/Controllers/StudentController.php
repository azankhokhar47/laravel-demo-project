<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        // Fetch all students from DB
        $students = DB::table('students')->get();

        // Send students data to view
        return view('welcome', ['students' => $students]);
    }
}
