<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nguoidungController extends Controller
{
    //
    public function gettrangchu(){
    	return view('nguoidung.trangchu.trang-chu');
    }

    public function getgioithieu(){
    	return view('nguoidung.gioithieu.gioi-thieu');
    }
}
