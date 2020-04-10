<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = "phong";
    protected $fillable = ["ma_phong","trang_thai","loai_phong_id"];

    public function typeRoom()
    {
        return $this->belongsTo('App\Models\TypeRoom','loai_phong_id');
    }

    public function customer(){
        return $this->belongsToMany('App\Models\Customer','dat_phong','phong_id','khach_hang_id')->withPivot('ghi_chu')->withTimestamps();
    }

    public function order(){
        return $this->hasMany('App\Models\Order','phong_id');
    }
}
