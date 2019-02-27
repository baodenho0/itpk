<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form_lienheController extends Controller
{
    //
    public function getform_lienhe(){
    	return view('admin.formlienhe.form-lien-he');
    }
}
