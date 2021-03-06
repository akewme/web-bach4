<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return "Hello Word";
// });

// Route::get("/hello", function () {
//     return "Haiiii";
// });

// Route::get("/{nama}", function ($nama) {
//     return "Assalamualaikum Ukhtea";
// });

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware("auth")->prefix("admin")->group( function() {

    // Read Banyak Artikel
    Route::get("post","PostController@index");
    // Create
    Route::post("post","PostController@create")->name("create_post");
    // Update
    Route::post("post/{id}","PostController@update");

    // Delete
    Route::get("post/{id}/delete","PostController@delete");
    
    Route::get("comment","CommentController@index");
    // admin/post/
});
    // Public

    // Read 1 Artikel
    Route::get("p/{id}","PostController@show_single");
