<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\tuyendung;

class tuyendungController extends Controller
{
    //
    public function gettuyendung(){
    	$data['tuyendung'] = tuyendung::all();
    	return view('admin.tuyendung.tuyen-dung1',$data);
    }

    public function getthem(){
    	return view('admin.tuyendung.them');
    }

    public function postthem(Request $request){
    	$this->validate($request,[
    		'tuyendung'=>'required',
    		'noibat'=>'required',
    		'mota'=>'required',
    		'tieude'=>'required',
    		'img'=>'required|mimes:jpg,jpeg,png',
    	],[
    		'tuyendung.required'=>'Chưa nhập tuyển dụng',
    		'noibat.required'=>'Chưa có nổi bật',
    		'mota.required'=>'Chưa có mô tả',
    		'tieude.required'=>'Chưa có tiêu đề',
    		'img.required'=>'Chưa có ảnh',
    		'img.mimes'=>'Chỉ được tải ảnh',
    	]);
    	$tuyendung = new tuyendung;
    	$tuyendung->noidung = $request->tuyendung;
    	$tuyendung->noibat = $request->noibat;
    	$tuyendung->mota = $request->mota;
    	$tuyendung->tieude = $request->tieude;
    	// --- upload anh
    	if($request->hasFile('img')){
    	$hinhanh = $request->file('img');
		$hinhanh_name = str_random(4)."-".$hinhanh->getClientOriginalName();
		$hinhanh->move('layout/upload/img',$hinhanh_name);
		$tuyendung->hinhanh = $hinhanh_name;
		}
		// --- 
    	$tuyendung->save();
    	return back()->with('thongbao','Thêm thành công');
    }

    public function getsua($id){
    	$data['tuyendung'] = tuyendung::find($id);
    	return view('admin.tuyendung.sua',$data);
    }

    public function postsua(Request $request, $id){
    	$this->validate($request,[
    		'tuyendung'=>'required',
    		'noibat'=>'required',
    		'mota'=>'required',
    		'tieude'=>'required',
    		'img'=>'mimes:jpg,jpeg,png',
    	],[
    		'tuyendung.required'=>'Chưa nhập tuyển dụng',
    		'noibat.required'=>'Chưa có nổi bật',
    		'mota.required'=>'Chưa có mô tả',
    		'tieude.required'=>'Chưa có tiêu đề',
    		'img.required'=>'Chưa có ảnh',
    		'img.mimes'=>'Chỉ được tải ảnh',
    	]);
    	$tuyendung = tuyendung::find($id);
    	$tuyendung->noidung = $request->tuyendung;
    	$tuyendung->noibat = $request->noibat;
    	$tuyendung->mota = $request->mota;
    	$tuyendung->tieude = $request->tieude;
    	// --- upload anh
    	if($request->hasFile('img')){
    	$hinhanh = $request->file('img');
		$hinhanh_name = str_random(4)."-".$hinhanh->getClientOriginalName();
		unlink('layout/upload/img/'.$tuyendung->hinhanh);
		$hinhanh->move('layout/upload/img',$hinhanh_name);
		$tuyendung->hinhanh = $hinhanh_name;
		}
		// --- 
    	$tuyendung->save();
    	return back()->with('thongbao','Cập nhật thành công');
    }

    public function getxoa($id){
    	$tuyendung = tuyendung::find($id);
    	unlink('layout/upload/img/'.$tuyendung->hinhanh);
    	$tuyendung->delete();
    	return back()->with('thongbao','Xóa thành công');
    }

    
}
