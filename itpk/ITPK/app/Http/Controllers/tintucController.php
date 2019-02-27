<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tintucController extends Controller
{
    //
    public function gettintuc(){
    	return view('admin.tintuc.tin-tuc');
    }
}
