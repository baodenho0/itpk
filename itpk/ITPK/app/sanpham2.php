<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham2 extends Model
{
    //
    protected $table ="sanpham2";
    
    public function hinhanhphu2(){
    	return $this->hasMany('App\hinhanhphu2','id_sanpham2','id');
    }

    public function danhmuc2(){
    	return $this->belongsTo('App\danhmuc2','id_danhmuc2','id');
    }
}
