<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class doitacController extends Controller
{
    //
    public function getdoitac(){
    	return view('admin.doitac.doi-tac');
    }
}
