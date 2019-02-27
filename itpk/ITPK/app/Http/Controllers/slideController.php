<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class slideController extends Controller
{
    //
    public function getslide(){
    	return view('admin.slide.slide');
    }
}
