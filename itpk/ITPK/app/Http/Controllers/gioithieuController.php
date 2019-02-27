<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gioithieuController extends Controller
{
    //
    public function getgioithieu(){
    	return view('admin.gioithieu.gioi-thieu');
    }
}
