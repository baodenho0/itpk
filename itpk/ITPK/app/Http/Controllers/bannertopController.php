<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bannertopController extends Controller
{
    //
    public function getbannertop(){
    	return view('admin.bannertop.banner-top');
    }
}
