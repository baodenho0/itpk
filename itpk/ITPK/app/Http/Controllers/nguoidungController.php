<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\banner;
use App\banner_top;
use App\danhmuc;
use App\danhmuc2;
use App\dichvu;
use App\doitac;
use App\duannoibat;
use App\footer;
use App\form_lienhe;
use App\gioithieu;
use App\hinhanhphu;
use App\hinhanhphu2;
use App\lienhe;
use App\sanpham;
use App\sanpham2;
use App\slide;
use App\tintuc;
use App\tuyendung;
use App\video;

class nguoidungController extends Controller
{
    //
    function __construct(){
    	$banner_top = banner_top::first();
        view()->share('banner_top',$banner_top);

        $danhmuc = danhmuc::all();
        view()->share('danhmuc',$danhmuc);

        $danhmuc2 = danhmuc2::all();
        view()->share('danhmuc2',$danhmuc2);

        $footer = footer::first();
        view()->share('footer',$footer);
    }
    public function gettrangchu(){
    	$data['banner'] = banner::first();
        $data['slide'] = slide::all();
        $data['doitac'] = doitac::all();
    	$data['video'] = video::first();
        $data['duannoibat'] = duannoibat::all();
    	$data['tintuc'] = tintuc::where('noibat',1)->take(4)->get();

    	return view('nguoidung.trangchu.trang-chu',$data);
    }

    public function getgioithieu(){
    	$data['gioithieu'] = gioithieu::first();
    	return view('nguoidung.gioithieu.gioi-thieu',$data);
    }

    public function getdichvu(){
    	$data['dichvu'] = dichvu::first();
    	return view('nguoidung.dichvu.dich-vu',$data);
    }

    public function getlienhe(){
    	$data['lienhe'] = lienhe::first();
    	return view('nguoidung.lienhe.lien-he',$data);
    }

    public function gettuyendung(){
    	$data['tuyendung'] = tuyendung::all();
    	return view('nguoidung.tuyendung.tuyen-dung',$data);
    }

    public function gettintuc(){
    	$data['tintuc'] = tintuc::orderBy('id','desc')->paginate(1);
    	return view('nguoidung.tintuc.tin-tuc',$data);
    }

    //thong tin lien he
    public function postthongtinlienhe(Request $request){
        $lienhe = new form_lienhe;
        $lienhe->hoten = $request->hoten;
        $lienhe->diachi = $request->diachi;
        $lienhe->sdt = $request->sdt;
        $lienhe->email = $request->email;
        $lienhe->save();
        return back()->with('thongbao','Liên hệ thành công');
    }
    //end thong tin lien he

    public function posttimkiem(Request $request){
        $data['tintuc'] = tintuc::where('tieude','like',"%".$request->search."%")->take(2)->get();
          return view('nguoidung.timkiem.tim-kiem',$data);
         // echo $data->tieude;
    }

    public function getsanpham(){
        $data['sanpham1'] = sanpham::all();
        $data['sanpham2'] = sanpham2::all();
        return view('nguoidung.sanpham.san-pham',$data);
    }

    public function getchitietsanpham1($id){ 
        $data['sanpham'] = sanpham::find($id);
        return view('nguoidung/chitietsanpham/chi-tiet-san-pham',$data);
    }
    public function getchitietsanpham2($id){ 
        $data['sanpham'] = sanpham2::find($id);
        return view('nguoidung/chitietsanpham/chi-tiet-san-pham',$data);
    }

    

    //den day
    // public function test(){
    //     $tintuc = tintuc::where('noibat',1)->take(4)->get();
        
       
    //         echo $tintuc[1]->mota;
        
    // }

}
