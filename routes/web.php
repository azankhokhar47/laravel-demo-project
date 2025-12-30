<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestingController;

Route::get('/', function () {
    return ('welcome');
});

Route::controller(PageController::class)->group(function(){

Route::get('/','ShowHome')->name('home');
Route::get('/blog','ShowBlog')->name('blog');
Route::get('/user/{id}','Showuser')->name('users');

});

Route::get('/test',TestingController::class);

// Route::get('/',[PageController::class,'ShowHome'])->name('home');
// Route::get('/blog',[PageController::class,'ShowBlog'])->name('blog');
// Route::get('/user/{id}',[PageController::class,'Showuser'])->name('users');


// Route::get('/users', function () {
//     $name ="azan";

//     return view('users')->with ('user', $name) -> with('city',$Islamabad) ;

//     return view('users')->withUser ($name) ->withCity ($Islamabad) ;
// });

// Route::get('/users', function () {
//     $name ="azan";

//     return view('users',['user' => $name, 'city' => 'Islamabad']);
// });

// Route::get('/users', function () {
    // $name ="azan";
//     return view('users',['user' => "Azan"]);
// });




// Route::get('/about-us', function () {
//     return view('about');
// });

// Route::get('/post', function () {
//     return view('post');
// });

// Route::get('/test', function () {
//     return view('test');
// });




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

// Route::get('post/{id}', function (string $id ) {
//     if($id){
//     return "<h1>Post ID : " .$id. "</h1>";
//     }
//     else
//     {
//     return "<h1>No id found</h1> ";
//     }
// })->WhereNumber('id', '[0-9]+'); 



// Route::get('post/{id?}/comment/{commentid?}', function (string $id, string $comment) {
//     if($id){
//     return "<h1>Post ID : " .$id. " & Comment : ".$comment."</h1>";
//     }
//     else
//     {
//     return "<h1>No id found</h1> ";
//     }
// })->WhereNumber('id', '[0-9]+')->WhereAlpha('commentid');



// Route::get('post/{id?}/comment/{commentid?}', function (string $id = null, string $commentid = null) {

//     if ($id) {
//         return "<h1>Post ID : " . $id . " & Comment : " . $commentid . "</h1>";
//     } else {
//         return "<h1>No id found</h1>";
//     }

// })->whereNumber('id')
//   ->whereAlpha('commentid');



// Route::get('/', function () {
//     return view('welcome');
// })->name('home');


// Route::get('page/post', function () {
//     return view('post');
// })->name('mypost');


// Route::get('/test', function () {
//     return view('about');
// });

// Route::redirect('/about', '/test', 301);


// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// Route::prefix('page')->group(function(){

//     Route::get('/about', function () {
//     return "<h1>About page</h1>";
// });

// Route::get('/gallary', function () {
//     return "<h1>gallary page</h1>";
// });

// Route::get('/post/firstpost', function () {
//     return "<h1>first post page</h1>";
// });

// });


// Route::fallback(function(){
//     return "<h1>Page not found.</h1>";
// });