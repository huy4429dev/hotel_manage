<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{   
    public function create(){
        return view('admin.post.create');
    }

    public function manage(){
        $posts = Post::all()->take(5);
        return view('admin.post.manage')->with('posts', $posts);
    }

    public function remote($id){
        //Post::remote($id);
        echo $id;
    }
}
