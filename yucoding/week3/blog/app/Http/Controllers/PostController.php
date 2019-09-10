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
    public function update(Request $req, $id){

        $query = DB::table("post")
        ->where("id",$id)
        ->update([
            'title' => $req->title,
            'body' => $req->body,
            'user_id' => Auth::user()->id
        ]);
        
        if($query){
            return back()->with("info",' Update Posting Success ');
        }else{
            return back()->with("error",' Update Posting Failed ');
        }
       
    }
    public function delete($id){

        $query = DB::table("post")
        ->where("id",$id)
        ->delete();

        return back()->with("delete",' Delete Posting Success ');
    }

    public function show_single($id){

        $post = DB::table("post")
            ->where("id",$id)
            ->first();

        return view("single",compact("post"));
    }
}
