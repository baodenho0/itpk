<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class footerController extends Controller
{
    //
    public function getfooter(){
    	return view('admin.footer.footer');
    }
}
