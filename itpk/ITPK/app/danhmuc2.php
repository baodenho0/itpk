<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class danhmuc2 extends Model
{
    //
    protected $table ="danhmuc2";
    
    public function sanpham2(){
    	return $this->hasMany('App\sanpham2','id_sanpham2','id');
    }

    public function danhmuc(){
    	return $this->belongsTo('App\danhmuc','id_danhmuc2','id');
    }
}
