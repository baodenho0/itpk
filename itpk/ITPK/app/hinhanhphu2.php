<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hinhanhphu2 extends Model
{
    //
    protected $table ="hinhanhphu";
    
    public function sanpham2(){
    	return $this->belongsTo('App\sanpham2','id_sanpham2','id');
    }
}
