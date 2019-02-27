<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tuyendungController extends Controller
{
    //
    public function gettuyendung(){
    	return view('admin.tuyendung.tuyen-dung');
    }
}
