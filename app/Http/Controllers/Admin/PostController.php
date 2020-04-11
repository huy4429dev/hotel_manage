<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{   
    public function create(){
        return view('admin.post.create');
    }

    public function manage(){
        return view('admin.post.manage');
    }
}
