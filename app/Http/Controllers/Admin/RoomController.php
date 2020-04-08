<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomController extends Controller
{   
    public function index(){
        return view('admin.room.index');
    }

    public function show(){
        
        return view('admin.room.detail');
    }

    public function getMap(){
        
        return "Vẽ map khi thiết lập phòng";
    }
}
