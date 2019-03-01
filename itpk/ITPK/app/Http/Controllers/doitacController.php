<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\doitac;

class doitacController extends Controller
{
    //
    public function getdoitac(){
    	$data['doitac'] = doitac::all();
    	return view('admin.doitac.doi-tac',$data);
    }

    public function getthem(){
    	return view('admin.doitac.them');
    }

    public function postthem(Request $request){
    	$this->validate($request,[
    		'seo'=>'required',
    		'img'=>'required|mimes:jpg,jpeg,png',
    	],[
    		
    		'seo.required'=>'Chưa có Seo',
    		'img.required'=>'Chưa có ảnh',
    		'img.mimes'=>'Chỉ được tải ảnh',
    	]);
    	$doitac = new doitac;
    	$doitac->seo = $request->seo;
    	// --- upload anh
    	if($request->hasFile('img')){
    	$hinhanh = $request->file('img');
		$hinhanh_name = str_random(4)."-".$hinhanh->getClientOriginalName();
		$hinhanh->move('layout/upload/img',$hinhanh_name);
		$doitac->hinhanh = $hinhanh_name;
		}
		// --- 
    	$doitac->save();
    	return back()->with('thongbao','Thêm thành công');
    }

    public function getsua($id){
    	$data['doitac'] = doitac::find($id);
    	return view('admin.doitac.sua',$data);
    }

    public function postsua(Request $request, $id){
    	$this->validate($request,[
    		'seo'=>'required',
    		'img'=>'mimes:jpg,jpeg,png',
    	],[
    		
    		 'seo.required'=>'Chưa có seo',
    		'img.mimes'=>'Chỉ được tải ảnh',
    	]);
    	$doitac = doitac::find($id);
    	$doitac->seo = $request->seo;
    	// --- upload anh
    	if($request->hasFile('img')){
    	$hinhanh = $request->file('img');
		$hinhanh_name = str_random(4)."-".$hinhanh->getClientOriginalName();
		unlink('layout/upload/img/'.$doitac->hinhanh);
		$hinhanh->move('layout/upload/img',$hinhanh_name);
		$doitac->hinhanh = $hinhanh_name;
		}
		// --- 
    	$doitac->save();
    	return back()->with('thongbao','Cập nhật thành công');
    }

    public function getxoa($id){
    	$doitac = doitac::find($id);
    	unlink('layout/upload/img/'.$doitac->hinhanh);
    	$doitac->delete();
    	return back()->with('thongbao','Xóa thành công');
    }

    
}
