<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\banner_top;

class bannertopController extends Controller
{
    //
    public function getbannertop(){
    	$data['bannertop'] = banner_top::first();
    	return view('admin.bannertop.banner-top',$data);
    }

    public function postbannertop(Request $request){
    	$this->validate($request,[
    		'bannerdautrang'=>'mimes:jpg,jpeg,png',
    		'logo'=>'required',
    		'hotline'=>'required',
    		'diachi'=>'required',
    		'email'=>'required',
    		'img'=>'mimes:jpg,jpeg,png',
    		'slogan'=>'required',
    	],[
    		'bannerdautrang.mimes'=>'Chưa có Banner đầu trang',
    		'logo.required'=>'Chưa nhập Logo đầu trang',
    		'hotline.required'=>'Chưa nhập Hotline đầu trang',
    		'diachi.required'=>'Chưa nhập địa chỉ đầu trang',
    		'email.required'=>'Chưa nhập email đầu trang',
    		// 'img.required'=>'Chưa có ảnh',
    		'img.mimes'=>'Chỉ được tải ảnh',
    		'slogan.required'=>'Chưa nhập slogan đầu trang',
    	]);
    	$banner_top = banner_top::first();
    	// $banner_top->bannerdautrang = $request->bannerdautrang;
        // --- upload banner dau trang
        if($request->hasFile('bannerdautrang')){
        $hinhanh = $request->file('bannerdautrang');
        $hinhanh_name = str_random(4)."-".$hinhanh->getClientOriginalName();
        unlink('layout/upload/img/'.$banner_top->bannerdautrang);
        $hinhanh->move('layout/upload/img',$hinhanh_name);
        $banner_top->bannerdautrang = $hinhanh_name;
        }
        // --- 
    	$banner_top->logo = $request->logo;
    	$banner_top->hotline = $request->hotline;
    	$banner_top->diachi = $request->diachi;
    	$banner_top->email = $request->email;
    	$banner_top->slogan = $request->slogan;
    	// --- upload anh
    	if($request->hasFile('img')){
    	$hinhanh = $request->file('img');
		$hinhanh_name = str_random(4)."-".$hinhanh->getClientOriginalName();
		unlink('layout/upload/img/'.$banner_top->background);
		$hinhanh->move('layout/upload/img',$hinhanh_name);
		$banner_top->background = $hinhanh_name;
		}
		// --- 
		$banner_top->save();
    	return back()->with('thongbao','Cập nhật thành công');
    }
}
