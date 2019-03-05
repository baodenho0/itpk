<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\danhmuc;
use App\danhmuc2;
use App\sanpham;
use App\sanpham2;
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
		$hinhanh_name = str_random(6)."-".$hinhanh->getClientOriginalName();
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
		$hinhanh_name = str_random(6)."-".$hinhanh->getClientOriginalName();
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

    //tuong tac san pham 1
    public function getmenu1sanpham(){
    	$data['menu'] =  danhmuc::all();
    	$data['sanpham1'] =  sanpham::all();
    	return view('admin.sanpham.sanpham1',$data);
    }

    public function postmenu1sanpham(Request $request){
    	$this->validate($request,[
    		'tieude'=>'required',
    		'giatien'=>'required',
    		'thongsokythuat'=>'required',
    		'mota'=>'required',
    		'chitietsanpham'=>'required',
    		'cmtfb'=>'required',
    		'seo'=>'required',
    		// 'id_danhmuc'=>'required',
    		'img'=>'required|mimes:jpg,jpeg,png',
    		// 'menu'=>'required',
    	],[
    		'tieude.required'=>'Chưa nhập tiêu đề',
    		'giatien.required'=>'Chưa nhập giá tiền',
    		'thongsokythuat.required'=>'Chưa nhập thông số kỹ thuật',
    		'mota.required'=>'Chưa nhập mô tả',
    		'chitietsanpham.required'=>'Chưa nhập chi tiết sản phẩm',
    		'nhungcmtfb.required'=>'Chưa nhập nhúng cmt FB',
    		'seo.required'=>'Chưa nhập seo',
    		// 'id_danhmuc.required'=>'Chưa có menu',
    		'img.required'=>'Chưa có hình ảnh',
    		'img.mimes'=>'Chỉ được tải ảnh',
    		// 'menu.mimes'=>'Chưa có menu',
    	]);
    	$sanpham1 = new sanpham;
    	$sanpham1->tieude = $request->tieude;
    	$sanpham1->giatien = $request->giatien;
    	$sanpham1->thongsokythuat = $request->thongsokythuat;
    	$sanpham1->mota = $request->mota;
    	$sanpham1->chitietsanpham = $request->chitietsanpham;
    	$sanpham1->cmtfb = $request->cmtfb;
    	$sanpham1->seo = $request->seo;
    	$sanpham1->id_danhmuc = $request->menu;
    	// --- upload anh
    	if($request->hasFile('img')){
    	$hinhanh = $request->file('img');
		$hinhanh_name = str_random(6)."-".$hinhanh->getClientOriginalName();
		$hinhanh->move('layout/upload/img',$hinhanh_name);
		$sanpham1->hinhanhchinh = $hinhanh_name;
		}
		// --- 

    	$sanpham1->save();
    	return back()->with('thongbao','Thêm thành công');
    }

    //sua san pham 1 menu 1
    public function getsuamenu1sanpham($id){
    	$data['menu'] =  danhmuc::all();
    	$data['sanpham1'] =  sanpham::find($id);
    	return view('admin.sanpham.suasanpham1',$data);
    }

    public function postsuamenu1sanpham(Request $request,$id){
    	$this->validate($request,[
    		'tieude'=>'required',
    		'giatien'=>'required',
    		'thongsokythuat'=>'required',
    		'mota'=>'required',
    		'chitietsanpham'=>'required',
    		'cmtfb'=>'required',
    		'seo'=>'required',
    		// 'id_danhmuc'=>'required',
    		'img'=>'mimes:jpg,jpeg,png',
    		// 'menu'=>'required',
    	],[
    		'tieude.required'=>'Chưa nhập tiêu đề',
    		'giatien.required'=>'Chưa nhập giá tiền',
    		'thongsokythuat.required'=>'Chưa nhập thông số kỹ thuật',
    		'mota.required'=>'Chưa nhập mô tả',
    		'chitietsanpham.required'=>'Chưa nhập chi tiết sản phẩm',
    		'nhungcmtfb.required'=>'Chưa nhập nhúng cmt FB',
    		'seo.required'=>'Chưa nhập seo',
    		// 'id_danhmuc.required'=>'Chưa có menu',
    		// 'img.required'=>'Chưa có hình ảnh',
    		'img.mimes'=>'Chỉ được tải ảnh',
    		// 'menu.mimes'=>'Chưa có menu',
    	]);
    	$sanpham1 =  sanpham::find($id);
    	$sanpham1->tieude = $request->tieude;
    	$sanpham1->giatien = $request->giatien;
    	$sanpham1->thongsokythuat = $request->thongsokythuat;
    	$sanpham1->mota = $request->mota;
    	$sanpham1->chitietsanpham = $request->chitietsanpham;
    	$sanpham1->cmtfb = $request->cmtfb;
    	$sanpham1->seo = $request->seo;
    	$sanpham1->id_danhmuc = $request->menu;
    	// --- upload anh
    	if($request->hasFile('img')){
    	$hinhanh = $request->file('img');
		$hinhanh_name = str_random(6)."-".$hinhanh->getClientOriginalName();
		unlink('layout/upload/img/'.$sanpham1->hinhanhchinh);
		$hinhanh->move('layout/upload/img',$hinhanh_name);
		$sanpham1->hinhanhchinh = $hinhanh_name;
		}
		// --- 

    	$sanpham1->save();
    	return back()->with('thongbao','Cập nhật thành công');
    }

    public function getxoamenu1sanpham($id){
    	$sanpham1 =  sanpham::find($id);
    	unlink('layout/upload/img/'.$sanpham1->hinhanhchinh);
    	$sanpham1 ->delete();
    	return back()->with('thongbao','Xóa thành công');

    }
    //--end sua san pham 1 menu 1
    //end tuong tac san pham 1

     //tuong tac san pham 2 
    public function getmenu2sanpham(){
    	$data['menu'] =  danhmuc2::all();
    	$data['sanpham2'] =  sanpham2::all();
    	return view('admin.sanpham.sanpham2',$data);
    }

    public function postmenu2sanpham(Request $request){
    	$this->validate($request,[
    		'tieude'=>'required',
    		'giatien'=>'required',
    		'thongsokythuat'=>'required',
    		'mota'=>'required',
    		'chitietsanpham'=>'required',
    		'cmtfb'=>'required',
    		'seo'=>'required',
    		// 'menu'=>'required',
    		'img'=>'required|mimes:jpg,jpeg,png',
    		// 'menu'=>'required',
    	],[
    		'tieude.required'=>'Chưa nhập tiêu đề',
    		'giatien.required'=>'Chưa nhập giá tiền',
    		'thongsokythuat.required'=>'Chưa nhập thông số kỹ thuật',
    		'mota.required'=>'Chưa nhập mô tả',
    		'chitietsanpham.required'=>'Chưa nhập chi tiết sản phẩm',
    		'nhungcmtfb.required'=>'Chưa nhập nhúng cmt FB',
    		'seo.required'=>'Chưa nhập seo',
    		// 'id_danhmuc2.required'=>'Chưa nhập menu',
    		'img.required'=>'Chưa có hình ảnh',
    		'img.mimes'=>'Chỉ được tải ảnh',
    		// 'menu.mimes'=>'Chưa có menu',
    	]);
    	$sanpham2 = new sanpham2;
    	$sanpham2->tieude = $request->tieude;
    	$sanpham2->giatien = $request->giatien;
    	$sanpham2->thongsokythuat = $request->thongsokythuat;
    	$sanpham2->mota = $request->mota;
    	$sanpham2->chitietsanpham = $request->chitietsanpham;
    	$sanpham2->cmtfb = $request->cmtfb;
    	$sanpham2->seo = $request->seo;
    	$sanpham2->id_danhmuc2 = $request->menu;
    	// --- upload anh
    	if($request->hasFile('img')){
    	$hinhanh = $request->file('img');
		$hinhanh_name = str_random(6)."-".$hinhanh->getClientOriginalName();
		$hinhanh->move('layout/upload/img',$hinhanh_name);
		$sanpham2->hinhanhchinh = $hinhanh_name;
		}
		// --- 

    	$sanpham2->save();
    	return back()->with('thongbao','Thêm thành công');
    }

    //sua san pham 2 menu 2
    public function getsuamenu2sanpham($id){
    	$data['menu'] =  danhmuc2::all();
    	$data['sanpham2'] =  sanpham2::find($id);
    	return view('admin.sanpham.suasanpham2',$data);
    }

    public function postsuamenu2sanpham(Request $request,$id){
    	$this->validate($request,[
    		'tieude'=>'required',
    		'giatien'=>'required',
    		'thongsokythuat'=>'required',
    		'mota'=>'required',
    		'chitietsanpham'=>'required',
    		'cmtfb'=>'required',
    		'seo'=>'required',
    		// 'id_danhmuc2'=>'required',
    		'img'=>'mimes:jpg,jpeg,png',
    		// 'menu'=>'required',
    	],[
    		'tieude.required'=>'Chưa nhập tiêu đề',
    		'giatien.required'=>'Chưa nhập giá tiền',
    		'thongsokythuat.required'=>'Chưa nhập thông số kỹ thuật',
    		'mota.required'=>'Chưa nhập mô tả',
    		'chitietsanpham.required'=>'Chưa nhập chi tiết sản phẩm',
    		'nhungcmtfb.required'=>'Chưa nhập nhúng cmt FB',
    		'seo.required'=>'Chưa nhập seo',
    		// 'id_danhmuc2.required'=>'Chưa có menu',
    		// 'img.required'=>'Chưa có hình ảnh',
    		'img.mimes'=>'Chỉ được tải ảnh',
    		// 'menu.mimes'=>'Chưa có menu',
    	]);
    	$sanpham2 =  sanpham2::find($id);
    	$sanpham2->tieude = $request->tieude;
    	$sanpham2->giatien = $request->giatien;
    	$sanpham2->thongsokythuat = $request->thongsokythuat;
    	$sanpham2->mota = $request->mota;
    	$sanpham2->chitietsanpham = $request->chitietsanpham;
    	$sanpham2->cmtfb = $request->cmtfb;
    	$sanpham2->seo = $request->seo;
    	$sanpham2->id_danhmuc2 = $request->menu;
    	// --- upload anh
    	if($request->hasFile('img')){
    	$hinhanh = $request->file('img');
		$hinhanh_name = str_random(6)."-".$hinhanh->getClientOriginalName();
		unlink('layout/upload/img/'.$sanpham2->hinhanhchinh);
		$hinhanh->move('layout/upload/img',$hinhanh_name);
		$sanpham2->hinhanhchinh = $hinhanh_name;
		}
		// --- 

    	$sanpham2->save();
    	return back()->with('thongbao','Cập nhật thành công');
    }

    public function getxoamenu2sanpham($id){
    	$sanpham2 =  sanpham::find($id);
    	unlink('layout/upload/img/'.$sanpham2->hinhanhchinh);
    	$sanpham2 ->delete();
    	return back()->with('thongbao','Xóa thành công');

    }
    //--end sua san pham 1 menu 1
    //end tuong tac san pham 1


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
