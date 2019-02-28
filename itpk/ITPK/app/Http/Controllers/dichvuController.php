<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\dichvu;

class dichvuController extends Controller
{
    //
    public function getdichvu(){
    	$data['dichvu'] = dichvu::first();
    	return view('admin.dichvu.dich-vu',$data);
    }

    public function postdichvu(Request $request){
    	$this->validate($request,[
    		'dichvu'=>'required',
    	],[
    		'dichvu.required'=>'Chưa nhập dịch vụ',
    	]);
    	$dichvu = dichvu::first();
    	$dichvu->noidung = $request->dichvu;
    	$dichvu->save();
    	return back()->with('thongbao','Cập nhật thành công');
    }
}
