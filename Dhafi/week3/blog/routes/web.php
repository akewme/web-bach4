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
    return view('index');
});