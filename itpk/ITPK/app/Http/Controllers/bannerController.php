<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\banner;

class bannerController extends Controller
{
    //
    public function getbanner(){
    	$data['banner'] = banner::first();
    	return view('admin.banner.banner',$data);
    }

    public function postbanner(Request $request){
    	$this->validate($request,[
    		'tieude'=>'required',
    		'link'=>'required',
    		'seo'=>'required',
    		'img'=>'mimes:jpg,jpeg,png',
    	],[
    		'tieude.required'=>'Chưa nhập tiêu đề',
    		'link.required'=>'Chưa có nội dung',
    		'seo.required'=>'Chưa có mô tả',
    		// 'img.required'=>'Chưa có ảnh',
    		'img.mimes'=>'Chỉ được tải ảnh',
    	]);
    	$banner = banner::first();
    	$banner->tieude = $request->tieude;
    	$banner->link = $request->link;
    	$banner->seo = $request->seo;
    	// --- upload anh
    	if($request->hasFile('img')){
    	$hinhanh = $request->file('img');
		$hinhanh_name = str_random(4)."-".$hinhanh->getClientOriginalName();
		unlink('layout/upload/img/'.$banner->hinhanh);
		$hinhanh->move('layout/upload/img',$hinhanh_name);
		$banner->hinhanh = $hinhanh_name;
		}
		// --- 
    	$banner->save();
    	return back()->with('thongbao','Cập nhật thành công');
    }
}
