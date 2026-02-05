<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudent(){
        $students = DB::table('students')
        ->join('cities','student.city','=','cities.id')
        ->select('students.*','cities.city_name')
        ->get();

        // return $students;

        return view('welcome', compact('students')); 
    }
}
