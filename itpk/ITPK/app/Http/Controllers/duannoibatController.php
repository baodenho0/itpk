<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\duannoibat;

class duannoibatController extends Controller
{
    //
    public function getduannoibat(){
    	$data['duannoibat'] = duannoibat::all();
    	return view('admin.duannoibat.du-an-noi-bat',$data);
    }

    public function getthem(){
    	return view('admin.duannoibat.them');
    }

    public function postthem(Request $request){
    	$this->validate($request,[
    		'noidung'=>'required',
    		'noibat'=>'required',
    		'tieude'=>'required',
    		'mota'=>'required',
    		'img'=>'required|mimes:jpg,jpeg,png',
    	],[
    		'noidung.required'=>'Chưa nhập nội dung',
    		'noibat.required'=>'Chưa có nổi bật',
    		'tieude.required'=>'Chưa có tiêu đề',
    		'mota.required'=>'Chưa có mô tả',
    		'img.required'=>'Chưa có ảnh',
    		'img.mimes'=>'Chỉ được tải ảnh',
    	]);
    	$duannoibat = new duannoibat;
    	$duannoibat->noidung = $request->noidung;
    	$duannoibat->noibat = $request->noibat;
    	$duannoibat->tieude = $request->tieude;
    	$duannoibat->mota = $request->mota;
    	// --- upload anh
    	if($request->hasFile('img')){
    	$hinhanh = $request->file('img');
		$hinhanh_name = str_random(4)."-".$hinhanh->getClientOriginalName();
		$hinhanh->move('layout/upload/img',$hinhanh_name);
		$duannoibat->hinhanh = $hinhanh_name;
		}
		// --- 
    	$duannoibat->save();
    	return back()->with('thongbao','Thêm thành công');
    }

    public function getsua($id){
    	$data['duannoibat'] = duannoibat::find($id);
    	return view('admin.duannoibat.sua',$data);
    }

    public function postsua(Request $request, $id){
    	$this->validate($request,[
    		'noidung'=>'required',
    		'noibat'=>'required',
    		'tieude'=>'required',
    		'mota'=>'required',
    		'img'=>'mimes:jpg,jpeg,png',
    	],[
    		'noidung.required'=>'Chưa nhập nội dung',
    		'noibat.required'=>'Chưa có nổi bật',
    		'tieude.required'=>'Chưa có tiêu đề',
    		'mota.required'=>'Chưa có mô tả',
    		// 'img.required'=>'Chưa có ảnh',
    		'img.mimes'=>'Chỉ được tải ảnh',
    	]);
    	$duannoibat = duannoibat::find($id);
    	$duannoibat->noidung = $request->noidung;
    	$duannoibat->noibat = $request->noibat;
    	$duannoibat->tieude = $request->tieude;
    	$duannoibat->mota = $request->mota;
    	// --- upload anh
    	if($request->hasFile('img')){
    	$hinhanh = $request->file('img');
		$hinhanh_name = str_random(4)."-".$hinhanh->getClientOriginalName();
		unlink('layout/upload/img/'.$duannoibat->hinhanh);
		$hinhanh->move('layout/upload/img',$hinhanh_name);
		$duannoibat->hinhanh = $hinhanh_name;
		}
		// --- 
    	$duannoibat->save();
    	return back()->with('thongbao','Cập nhật thành công');
    }

    public function getxoa($id){
    	$duannoibat = duannoibat::find($id);
    	unlink('layout/upload/img/'.$duannoibat->hinhanh);
    	$duannoibat->delete();
    	return back()->with('thongbao','Xóa thành công');
    }

    
}
