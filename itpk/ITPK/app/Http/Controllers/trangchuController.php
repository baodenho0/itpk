<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\user;
// den day

class trangchuController extends Controller
{
    //
    public function gettrangchu(){
    	return view('admin.trangchu.trang-chu');
    }
     public function getdoimatkhau(){
        return view('admin.doimatkhau.doimatkhau');
    }
    public function postdoimatkhau(Request $request){
        $this->validate($request,[
            'matkhaucu'=>'required',
            'matkhaumoi'=>'required',
            'nhaplai'=>'required|same:matkhaumoi',
        ],[
            'matkhaucu.required'=>'Chưa nhập mật khẩu cũ',
            'matkhaumoi.required'=>'Chưa nhập mật khẩu mới',
            'nhaplai.required'=>'Chưa nhập lại mật khẩu mới',
            'nhaplai.same'=>'Mật khẩu không trùng khớp',
        ]);
        if(Auth::attempt(['name'=>Auth::user()->name,'password'=>$request->matkhaucu])){
            $taikhoan = user::first();
            $taikhoan->password = bcrypt($request->matkhaumoi);
            $taikhoan->save();
            return back()->with('thongbao','Đổi mật khẩu thành công');
            
        }
        else{
            return back()->with('error','Sai mật khẩu cũ');
        }
    }
}
