<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookRoom extends Model
{
    protected $table = "dat_phong";
    protected $fillable = ["ghi_chu","khach_hang_id","phong_id"];
}
