<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\footer;

class footerController extends Controller
{
    //
    public function getfooter(){
    	$data['footer'] = footer::first();
    	return view('admin.footer.footer',$data);
    }

    public function postfooter(Request $request){
    	$this->validate($request,[
    		'vechungtoi'=>'required',
    		'hotline'=>'required',
    		'email'=>'required',
    		'mxh'=>'required',
    		'hotrotructuyen'=>'required',
    		'thongtincty'=>'required',
    		'chinhsach'=>'required',
    		'fanpage'=>'required',
    	],[
    		'vechungtoi.required'=>'Chưa có Về chúng tôi',
    		'hotline.required'=>'Chưa có Hotline',
    		'email.required'=>'Chưa có Email',
    		'mxh.required'=>'Chưa có MXH',
    		'hotrotructuyen.required'=>'Chưa có Hỗ trợ trực tuyến',
    		'thongtincty.required'=>'Chưa có Thông tin công ty',
    		'chinhsach.required'=>'Chưa có Chính sách',
    		'fanpage.required'=>'Chưa có Fanpage',
    	]);
    	$footer = footer::first();
    	$footer->vechungtoi = $request->vechungtoi;
    	$footer->hotline = $request->hotline;
    	$footer->email = $request->email;
    	$footer->mxh = $request->mxh;
    	$footer->hotrotructuyen = $request->hotrotructuyen;
    	$footer->trongtincty = $request->thongtincty;
    	$footer->chinhsach = $request->chinhsach;
    	$footer->fanpage = $request->fanpage;
    	$footer->save();
    	return back()->with('thongbao','Cập nhật thành công');
    }
}
