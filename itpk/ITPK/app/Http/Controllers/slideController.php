<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\slide;

class slideController extends Controller
{
    //
    public function getslide(){
    	$data['slide'] = slide::all();
    	return view('admin.slide.slide',$data);
    }

    public function getthem(){
    	return view('admin.slide.them');
    }

    public function postthem(Request $request){
    	$this->validate($request,[
    		'tieude'=>'required',
    		'noidung'=>'required',
    		'mota'=>'required',
    		'link'=>'required',
    		'img'=>'required|mimes:jpg,jpeg,png',
    	],[
    		'tieude.required'=>'Chưa nhập tiêu đề',
    		'noidung.required'=>'Chưa có nội dung',
    		'mota.required'=>'Chưa có mô tả',
    		'link.required'=>'Chưa có link',
    		'img.required'=>'Chưa có ảnh',
    		'img.mimes'=>'Chỉ được tải ảnh',
    	]);
    	$slide = new slide;
    	$slide->tieude = $request->tieude;
    	$slide->baiviet = $request->noidung;
    	$slide->mota = $request->mota;
    	$slide->link = $request->link;
    	// --- upload anh
    	if($request->hasFile('img')){
    	$hinhanh = $request->file('img');
		$hinhanh_name = str_random(4)."-".$hinhanh->getClientOriginalName();
		$hinhanh->move('layout/upload/img',$hinhanh_name);
		$slide->hinhanh = $hinhanh_name;
		}
		// --- 
    	$slide->save();
    	return back()->with('thongbao','Thêm thành công');
    }

    public function getsua($id){
    	$data['slide'] = slide::find($id);
    	return view('admin.slide.sua',$data);
    }

    public function postsua(Request $request, $id){
    	$this->validate($request,[
    		'tieude'=>'required',
    		'noidung'=>'required',
    		'mota'=>'required',
    		'link'=>'required',
    		'img'=>'mimes:jpg,jpeg,png',
    	],[
    		'tieude.required'=>'Chưa nhập tiêu đề',
    		'noidung.required'=>'Chưa có nội dung',
    		'mota.required'=>'Chưa có mô tả',
    		'link.required'=>'Chưa có link',
    		// 'img.required'=>'Chưa có ảnh',
    		'img.mimes'=>'Chỉ được tải ảnh',
    	]);
    	$slide = slide::find($id);
    	$slide->tieude = $request->tieude;
    	$slide->baiviet = $request->noidung;
    	$slide->mota = $request->mota;
    	$slide->link = $request->link;
    	// --- upload anh
    	if($request->hasFile('img')){
    	$hinhanh = $request->file('img');
		$hinhanh_name = str_random(4)."-".$hinhanh->getClientOriginalName();
		unlink('layout/upload/img/'.$slide->hinhanh);
		$hinhanh->move('layout/upload/img',$hinhanh_name);
		$slide->hinhanh = $hinhanh_name;
		}
		// --- 
    	$slide->save();
    	return back()->with('thongbao','Cập nhật thành công');
    }

    public function getxoa($id){
    	$slide = slide::find($id);
    	unlink('layout/upload/img/'.$slide->hinhanh);
    	$slide->delete();
    	return back()->with('thongbao','Xóa thành công');
    }

    
}
