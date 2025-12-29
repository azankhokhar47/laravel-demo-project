<?php

namespace App\Http\Contrllers;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function __invoke(Request $request)
    {
       return('Testing');
    }
}