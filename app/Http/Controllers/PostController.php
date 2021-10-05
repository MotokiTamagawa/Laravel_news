<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Post;
use Auth;


class PostController extends Controller
{
    public function index(){
        return view('posts.index');
    }

    public function create(){
        return view('posts.create');
    }

    public function store(PostRequest $request){
        // dd(Auth::user());

        $post = new Post;
        //インスタンスを作成する。
        $post -> title = $request ->title;
        $post -> body = $request ->body;
        //↓もしかしたら不必要
        $post -> user_id = Auth::user()->id;


        //インスタンスは保存しなければならない・
        $post -> save();

        return redirect()->route('posts.index');
    }

}
