<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\video;

class videoController extends Controller
{
    //
    public function getvideo(){
    	$data['video'] = video::first();
    	return view('admin.video.video',$data);
    }

    public function postvideo(Request $request){
    	$this->validate($request,[
    		'video'=>'required',
    	],[
    		'video.required'=>'Chưa nhập video',
    	]);
    	$video =  video::first();
    	$video->link = $request->video;
    	$video->save();
    	return back()->with('thongbao','Cập nhật thành công');
    }
}
