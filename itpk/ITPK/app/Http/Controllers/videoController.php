<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class videoController extends Controller
{
    //
    public function getvideo(){
    	return view('admin.video.video');
    }
}