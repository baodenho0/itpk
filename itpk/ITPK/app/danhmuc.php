<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class danhmuc extends Model
{
    //
    protected $table ="danhmuc";

    public function sanpham(){
    	return $this->hasMany('App\sanpham','id_sanpham','id');
    }

    public function danhmuc2(){
    	return $this->hasMany('App\danhmuc2','id_danhmuc2','id');
    }
}
