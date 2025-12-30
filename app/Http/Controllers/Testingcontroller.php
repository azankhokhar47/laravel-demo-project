<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function __invoke(Request $request)
    {
       return view('Testing');
    }
}