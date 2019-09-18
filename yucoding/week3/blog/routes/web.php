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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/getDataInfinite',"PostController@getDataInfinite");

// Route::get("/","PostController@getData");

// Auth::routes();
Auth::routes(['register' => false]);


Route::get('/home', 'HomeController@index')->name('home');

Route::middleware("auth")->prefix("admin")->group( function() {

     // Read banyak Artikel
    Route::get("post","PostController@index");
    // Create
    Route::post("post","PostController@create")->name("create_post");
    //  update
    Route::post("post/{id}","PostController@update");

    // Data Single 
    Route::get("data/{id}","PostController@data_single");

    // Delete
    Route::get("post/{id}/delete","PostController@delete");

    Route::get("comment","CommentController@index");
    // 'admin/post/
});

// Public

// Read 1 Artikel 
Route::get("p/{id}","PostController@show_single");

