<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    //
    protected $table ="sanpham";
    
    public function hinhanhphu(){
    	return $this->hasMany('App\hinhanhphu','id_sanpham','id');
    }

    public function danhmuc(){
    	return $this->belongsTo('App\danhmuc','id_danhmuc','id');
    }
}
