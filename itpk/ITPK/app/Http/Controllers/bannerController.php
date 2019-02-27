<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bannerController extends Controller
{
    //
    public function getbanner(){
    	return view('admin.banner.banner');
    }
}
