<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\danhmuc;
use App\danhmuc2;
use App\sanpham;
use App\sanpha2;
use App\hinhanhphu;
use App\hinhanhphu2;

class sanphamController extends Controller
{
    //
    public function getsanpham(){
    	$data['danhmuc'] = danhmuc::all();
    	$data['danhmuc2'] = danhmuc2::all();
    	return view('admin.sanpham.menu',$data);
    }

    public function postmenu1(Request $request){
    	$this->validate($request,[
    		'tendanhmuc'=>'required',
    		'checkhienthi'=>'required',
    		'noibat'=>'required',
    		'img'=>'required|mimes:jpg,jpeg,png',
    	],[
    		'tendanhmuc.required'=>'Chưa có tên danh mục',
    		'checkhienthi.required'=>'Chưa có check hiển thị',
    		'noibat.required'=>'Chưa có check nổi bật',
    		'img.required'=>'Chưa có ảnh',
    		'img.mimes'=>'Chỉ được tải ảnh',
    	]);
    	$menu1 = new danhmuc;
    	$menu1->tendanhmuc = $request->tendanhmuc;
    	$menu1->checkhienthi = $request->checkhienthi;
    	$menu1->noibat = $request->noibat;
    	// --- upload anh
    	if($request->hasFile('img')){
    	$hinhanh = $request->file('img');
		$hinhanh_name = str_random(4)."-".$hinhanh->getClientOriginalName();
		$hinhanh->move('layout/upload/img',$hinhanh_name);
		$menu1->hinhanh = $hinhanh_name;
		}
		// --- 
		$menu1->save();
		return back()->with('thongbao','Thêm thành công');
    }

    public function postmenu2(Request $request){
    	$this->validate($request,[
    		'tendanhmuc'=>'required',
    		'id_danhmuc2'=>'required',
    		
    	],[
    		'tendanhmuc.required'=>'Chưa có tên danh mục',
    		'id_danhmuc2.required'=>'Chưa chọn menu 1',
    		
    	]);
    	$menu2 = new danhmuc2;
    	$menu2->tendanhmuc = $request->tendanhmuc;
    	$menu2->id_danhmuc2 = $request->id_danhmuc2;
    	
		$menu2->save();
		return back()->with('thongbao','Thêm thành công');
    }


    //sua 
    public function getsuamenu1($id){
		$data['menu'] = danhmuc::find($id);
		return view('admin/sanpham/sua1',$data);
    }
    public function getsuamenu2($id){
    	$data['danhmuc'] = danhmuc::all();
		$data['menu'] = danhmuc2::find($id);
		return view('admin/sanpham/sua2',$data);		
    }
    public function postsuamenu1(Request $request,$id){
    	$this->validate($request,[
    		'tendanhmuc'=>'required',
    		'checkhienthi'=>'required',
    		'noibat'=>'required',
    		'img'=>'mimes:jpg,jpeg,png',
    	],[
    		'tendanhmuc.required'=>'Chưa có tên danh mục',
    		'checkhienthi.required'=>'Chưa có check hiển thị',
    		'noibat.required'=>'Chưa có check nổi bật',
    		'img.mimes'=>'Chỉ được tải ảnh',
    	]);
    	$menu1 = danhmuc::find($id);
    	$menu1->tendanhmuc = $request->tendanhmuc;
    	$menu1->checkhienthi = $request->checkhienthi;
    	$menu1->noibat = $request->noibat;
    	// --- upload anh
    	if($request->hasFile('img')){
    	$hinhanh = $request->file('img');
		$hinhanh_name = str_random(4)."-".$hinhanh->getClientOriginalName();
		unlink('layout/upload/img/'.$menu1->hinhanh);
		$hinhanh->move('layout/upload/img',$hinhanh_name);
		$menu1->hinhanh = $hinhanh_name;
		}
		// --- 
		$menu1->save();
		return back()->with('thongbao','Cập nhật thành công');
    }

    public function postsuamenu2(Request $request,$id){
    	$this->validate($request,[
    		'tendanhmuc'=>'required',
    		'id_danhmuc2'=>'required',
    		
    	],[
    		'tendanhmuc.required'=>'Chưa có tên danh mục',
    		'id_danhmuc2.required'=>'Chưa chọn menu 1',
    		
    	]);
    	$menu2 = danhmuc2::find($id);
    	$menu2->tendanhmuc = $request->tendanhmuc;
    	$menu2->id_danhmuc2 = $request->id_danhmuc2;
    	
		$menu2->save();
		return back()->with('thongbao','Cập nhật thành công');
    }
    //end sua

    public function getxoamenu1($id){
    	$menu1 = danhmuc::find($id);
    	unlink('layout/upload/img/'.$menu1->hinhanh);
    	$menu1->delete();
    	return back()->with('thongbao','Xóa thành công');
    }

    public function getxoamenu2($id){
    	$menu2 = danhmuc2::find($id);
    	$menu2->delete();
    	return back()->with('thongbao','Xóa thành công');
    }

    //tuong tac san pham
    public function getmenu1sanpham(){
    	return view('admin.sanpham.sanpham1');
    }
    //end tuong tac san pham


    // public function test(){
    // 	$danhmuc = danhmuc::first();
    // 	echo $danhmuc;
    // 	echo "<br>--------------<br>-------<br>";
    // 	$danhmuc2 = danhmuc2::first();
    // 	echo $danhmuc2->tendanhmuc;
    // 	echo "<br>--------------<br>-------<br>";
    // 	echo $danhmuc->danhmuc2;
    // 	echo "<br>--------------<br>-------<br>";
    // 	// foreach ($danhmuc2->danhmuc as $key ) {
    // 	// 	echo $key->tendanhmuc;
    // 	// }
    // 	echo $danhmuc2->danhmuc->tendanhmuc;
    // }


}
