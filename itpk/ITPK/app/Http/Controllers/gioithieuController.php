<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\gioithieu;

class gioithieuController extends Controller
{
    //
    public function getgioithieu(){
    	$data['gioithieu'] = gioithieu::first();
    	return view('admin.gioithieu.gioi-thieu',$data);
    }

    public function postgioithieu(Request $request){
    	$this->validate($request,[
    		'gioithieu'=>'required',
    	],[
    		'gioithieu.required'=>'Chưa nhập giới thiệu',
    	]);
    	$gioithieu = gioithieu::first();
    	$gioithieu->noidung = $request->gioithieu;
    	$gioithieu->save();
    	return back()->with('thongbao','Cập nhật thành công');
    }
}
