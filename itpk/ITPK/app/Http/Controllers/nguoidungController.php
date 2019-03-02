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
    	$data['duannoibat'] = duannoibat::all();
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
    //den day


}
