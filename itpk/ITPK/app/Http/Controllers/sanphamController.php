<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sanphamController extends Controller
{
    //
    public function getsanpham(){
    	return view('admin.sanpham.san-pham');
    }
}
