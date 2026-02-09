<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function addUser(Request $req){


    $req->validate([
     'username'=> 'required',
     'useremail'=> 'required|email',
     'userage'=> 'required|numeric|min:18',
     'usercity'=> 'required',
    ],[
        "username.required" => 'User name is required',
        "useremail.required" => 'User email is required',
        "useremail.required" => 'User email is Invalid',
        "userage.required" => 'User age is required',
        "userage.required" => 'User age is must be number',
        "userage.required" => 'User age is less than 18',
        "usercity.required" => 'User city is required',
    ]);
        return $req->all();
    }
}