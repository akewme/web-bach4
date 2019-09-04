<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class PostController extends Controller
{
    //
    public function index(){
        $posting = DB::table("post")
        ->join("users","users.id","post.user_id")
        ->select("post.*","users.name")
        ->orderBy("post.id","DESC")
        ->paginate(9);
        return view("admin.post",compact('posting'));
    }
    public function create(Request $req){
        // dd($req);
        $query = DB::table("post")->insert([
            'title' => $req->title,
            'body' => $req->body,
            'user_id' => Auth::user()->id
        ]);
        return back()->with("info",' Posting Success ');
        // return "Tesss Posting";
    }
}
