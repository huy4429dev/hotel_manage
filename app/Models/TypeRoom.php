<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeRoom extends Model
{
    protected $table = "loai_phong";
    protected $fillable = ["ten","gia_phong"];

}
