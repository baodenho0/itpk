<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dichvuController extends Controller
{
    //
    public function getdichvu(){
    	return view('admin.dichvu.dich-vu');
    }
}
