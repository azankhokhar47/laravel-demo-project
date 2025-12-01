<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/post', function () {
//     // return view('post');
//     return "<h1>post page</h1>";
// });

// Route::view('/post','post');

// Route::get('post', function () {
//     return view('post');
// });

// Route::get('/post/firstpost', function () {
//     // return view('firstpost');
//     return "<h1>post page</h1>";
// });

// Route::get('/post/firstpost', function () {
//     return view('firstpost');
// });

// Route::get('post/{id?}/comment/{commentid?}', function (string $id = null, string $comment = null) {
//     if($id){
//     return "<h1>Post ID : " .$id. "</h1><h2>".$comment."</h2>";
//     }
//     else
//     {
//     return "<h1>No id found</h1> ";
//     }
// }); 

Route::get('post/{id}', function (string $id ) {
    if($id){
    return "<h1>Post ID : " .$id. "</h1>";
    }
    else
    {
    return "<h1>No id found</h1> ";
    }
})->Where; 