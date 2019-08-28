<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        return view('user');
    }
    public function edit(){
        return view('user');
    }
}
