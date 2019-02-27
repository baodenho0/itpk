<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lienheController extends Controller
{
    //
    public function getlienhe(){
    	return view('admin.lienhe.lien-he');
    }
}
