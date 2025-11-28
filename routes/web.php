<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', function () {
    // return view('post');
    return "<h1>post page</h1>";
});

// Route::view('post','/post');

// Route::get('hello', function () {
//     return view('post');
// });
