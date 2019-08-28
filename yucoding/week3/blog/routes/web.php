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


// Route::get("/", function(){
//     return "Home";
// });

// Route::get("/login", function(){
//     return "Login";
// });

// // Blog
// Route::get("/blog", function($nama){
//     return "Blog";
// });






Route::get('/', function () {
    return view('index');
});



// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/user', 'UserController@index')->name('user');
// Route::get('/user/edit', 'UserController@edit')->name('user');
