<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "hoa_don";
    protected $fillable = ["trang_thai","tong_tien","khach_hang_id","user_id","phong_id"];
}
