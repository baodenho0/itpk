<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hinhanhphu extends Model
{
    //
    protected $table ="hinhanhphu";
    
    public function sanpham(){
    	return $this->belongsTo('App\sanpham','id_sanpham','id');
    }
}
