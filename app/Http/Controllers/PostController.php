<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Post;
use Auth;
use App\Comment;

class PostController extends Controller
{
    public function index(){

        $posts = Post::all();

        return view('posts.index' , compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function show($id){
        //
    }

    public function store(PostRequest $request){
        // dd(Auth::user());

        $post = new Post;
        //インスタンスを作成する。
        $post -> title = $request ->title;
        $post -> body = $request ->body;
        //↓もしかしたら不必要

        // $post -> user_id = 1;

        // 正しいコード
        $post -> user_id = Auth::user()->id;
        


        //インスタンスは保存しなければならない・
        $post -> save();

        return redirect()->route('posts.index');
    }

//実験

}
