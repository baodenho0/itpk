<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trangchuController extends Controller
{
    //
    public function gettrangchu(){
    	return view('admin.trangchu.trang-chu');
    }
}
