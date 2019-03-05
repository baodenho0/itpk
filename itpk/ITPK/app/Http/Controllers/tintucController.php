<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\tintuc;

class tintucController extends Controller
{
    //
    public function gettintuc(){
    	$data['tintuc'] = tintuc::orderBy('id','desc')->paginate(3);
    	return view('admin.tintuc.tin-tuc',$data);
    }

    public function getthem(){
    	return view('admin.tintuc.them');
    }

    public function postthem(Request $request){
    	$this->validate($request,[
    		'noidung'=>'required',
    		'noibat'=>'required',
    		'mota'=>'required',
    		'tieude'=>'required',
    		'img'=>'required|mimes:jpg,jpeg,png',
    	],[
    		'noidung.required'=>'Chưa nhập nội dung',
    		'noibat.required'=>'Chưa có nổi bật',
    		'mota.required'=>'Chưa có mô tả',
    		'tieude.required'=>'Chưa có tiêu đề ',
    		'img.required'=>'Chưa có ảnh',
    		'img.mimes'=>'Chỉ được tải ảnh',
    	]);
    	$tintuc = new tintuc;
    	$tintuc->noidung = $request->noidung;
    	$tintuc->noibat = $request->noibat;
    	$tintuc->mota = $request->mota;
    	$tintuc->tieude = $request->tieude;
    	// --- upload anh
    	if($request->hasFile('img')){
    	$hinhanh = $request->file('img');
		$hinhanh_name = str_random(8)."-".$hinhanh->getClientOriginalName();
		$hinhanh->move('layout/upload/img',$hinhanh_name);
		$tintuc->hinhanh = $hinhanh_name;
		}
		// --- 
    	$tintuc->save();
    	return back()->with('thongbao','Thêm thành công');
    }

    public function getsua($id){
    	$data['tintuc'] = tintuc::find($id);
    	return view('admin.tintuc.sua',$data);
    }

    public function postsua(Request $request, $id){
    	$this->validate($request,[
    		'noidung'=>'required',
    		'noibat'=>'required',
    		'mota'=>'required',
    		'tieude'=>'required',
    		'img'=>'mimes:jpg,jpeg,png',
    	],[
    		'noidung.required'=>'Chưa nhập nội dung',
    		'noibat.required'=>'Chưa có nổi bật',
    		'mota.required'=>'Chưa có mô tả',
    		'tieude.required'=>'Chưa có tiêu đề ',
    		// 'img.required'=>'Chưa có ảnh',
    		'img.mimes'=>'Chỉ được tải ảnh',
    	]);
    	$tintuc = tintuc::find($id);
    	$tintuc->noidung = $request->noidung;
    	$tintuc->noibat = $request->noibat;
    	$tintuc->mota = $request->mota;
    	$tintuc->tieude = $request->tieude;
    	// --- upload anh
    	if($request->hasFile('img')){
    	$hinhanh = $request->file('img');
		$hinhanh_name = str_random(8)."-".$hinhanh->getClientOriginalName();
		unlink('layout/upload/img/'.$tintuc->hinhanh);
		$hinhanh->move('layout/upload/img',$hinhanh_name);
		$tintuc->hinhanh = $hinhanh_name;
		}
		// --- 
    	$tintuc->save();
    	return back()->with('thongbao','Cập nhật thành công');
    }

    public function getxoa($id){
    	$tintuc = tintuc::find($id);
    	unlink('layout/upload/img/'.$tintuc->hinhanh);
    	$tintuc->delete();
    	return back()->with('thongbao','Xóa thành công');
    }

    
}
