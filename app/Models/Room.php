<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = "phong";
    protected $fillable = ["trang_thai","loai_phong_id"];
}
