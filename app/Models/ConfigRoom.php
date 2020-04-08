<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConfigRoom extends Model
{
    protected $table = "cau_hinh_phong";
    protected $fillable = ["so_phong","phong_bat_dau","so_tang"];
}
