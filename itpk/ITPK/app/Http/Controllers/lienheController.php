<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\lienhe;

class lienheController extends Controller
{
    //
    public function getlienhe(){
    	$data['lienhe'] = lienhe::first();
    	return view('admin.lienhe.lien-he',$data);
    }

    public function postlienhe(Request $request){
    	$this->validate($request,[
    		'lienhe'=>'required',
    		'bando'=>'required',
    	],[
    		'lienhe.required'=>'Chưa nhập liên hệ',
    		'bando.required'=>'Chưa nhập bản đồ',
    	]);
    	$lienhe = lienhe::first();
    	$lienhe->noidung = $request->lienhe;
    	$lienhe->bando = $request->bando;
    	$lienhe->save();
    	return back()->with('thongbao','Cập nhật thành công');
    }
}
