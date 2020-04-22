<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;

class PostController extends Controller
{   
    public function create(){
        return view('admin.post.create');
    }

    public function save(Request $request){
        $user = Auth::user();
        $post = new Post();
        $post->noi_dung = $_POST['text'];
        $post->tieu_de = $_POST['tieu_de'];
        $post->hinh_anh = $_POST['hinh_anh'];
        $post->mo_ta = $_POST['mo_ta'];
        $post->user_id = $user->id;
        $post->save();
        return redirect()->back()->withErrors('msg', 'Bạn lưu thành công!');
    }

    public function manage(){
        $posts = Post::all();
        return view('admin.post.manage')->with('posts', $posts);
    }

    public function delete($id){
        return Post::destroy($id);
    }

    public function update($id){
        $post = Post::find($id);
        return view('admin.post.update')->with('post', $post);
    }

    public function saveUpdate($id){
        $post = Post::find($id);
        $post->noi_dung = $_POST['text'];
        $post->tieu_de = $_POST['tieu_de'];
        $post->hinh_anh = $_POST['hinh_anh'];
        $post->mo_ta = $_POST['mo_ta'];
        $post->save();
        return redirect()->back()->withErrors('msg', 'Bạn lưu thành công!');
    }
}
