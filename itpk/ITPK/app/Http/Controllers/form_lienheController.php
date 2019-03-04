<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\App;
use App\form_lienhe;

class form_lienheController extends Controller
{
    //
    public function getform_lienhe(){
    	$data['form_lienhe'] = form_lienhe::all();
    	return view('admin.formlienhe.form-lien-he',$data);
    }
}
