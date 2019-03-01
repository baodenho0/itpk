<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    //
    Route::get('trang-chu','trangchuController@gettrangchu');
    Route::get('banner-top', 'bannertopController@getbannertop');
    Route::post('banner-top', 'bannertopController@postbannertop');
    Route::get('gioi-thieu','gioithieuController@getgioithieu');
    Route::post('gioi-thieu','gioithieuController@postgioithieu');
    Route::get('dich-vu', 'dichvuController@getdichvu');
    Route::post('dich-vu', 'dichvuController@postdichvu');
    // tin tuc
    Route::get('tin-tuc', 'tintucController@gettintuc');
    Route::get('tin-tuc/them', 'tintucController@getthem');
    Route::post('tin-tuc/them', 'tintucController@postthem');
    Route::get('tin-tuc/sua/{id}', 'tintucController@getsua');
    Route::post('tin-tuc/sua/{id}', 'tintucController@postsua');
    Route::get('tin-tuc/xoa/{id}', 'tintucController@getxoa');
    // end tin tuc
    //-- tuyen  dung
    Route::get('tuyen-dung', 'tuyendungController@gettuyendung');
    Route::get('tuyen-dung/them', 'tuyendungController@getthem');
    Route::post('tuyen-dung/them', 'tuyendungController@postthem');
    Route::get('tuyen-dung/sua/{id}','tuyendungController@getsua');
    Route::post('tuyen-dung/sua/{id}','tuyendungController@postsua');
    Route::get('tuyen-dung/xoa/{id}','tuyendungController@getxoa');
    //-- end tuyen dung
    Route::get('lien-he', 'lienheController@getlienhe');
    Route::post('lien-he', 'lienheController@postlienhe');
    Route::get('form-lien-he', 'form_lienheController@getform_lienhe');
    // slide
    Route::get('slide', 'slideController@getslide');
    Route::get('slide/them', 'slideController@getthem');
    Route::post('slide/them', 'slideController@postthem');
    Route::get('slide/sua/{id}', 'slideController@getsua');
    Route::post('slide/sua/{id}', 'slideController@postsua');
    Route::get('slide/xoa/{id}', 'slideController@getxoa');
    // end slide 
    Route::get('banner', 'bannerController@getbanner');
    Route::post('banner', 'bannerController@postbanner');
    //-- du an noi bat
    Route::get('du-an-noi-bat', 'duannoibatController@getduannoibat');
    Route::get('du-an-noi-bat/them', 'duannoibatController@getthem');
    Route::post('du-an-noi-bat/them', 'duannoibatController@postthem');
    Route::get('du-an-noi-bat/sua/{id}', 'duannoibatController@getsua');
    Route::post('du-an-noi-bat/sua/{id}', 'duannoibatController@postsua');
    Route::get('du-an-noi-bat/xoa/{id}', 'duannoibatController@getxoa');
    //- end du an noi bat
    Route::get('video', 'videoController@getvideo');
    Route::post('video', 'videoController@postvideo');
    // doi tac
    Route::get('doi-tac', 'doitacController@getdoitac');
    Route::get('doi-tac/them', 'doitacController@getthem');
    Route::post('doi-tac/them', 'doitacController@postthem');
    Route::get('doi-tac/sua/{id}', 'doitacController@getsua');
    Route::post('doi-tac/sua/{id}', 'doitacController@postsua');
    Route::get('doi-tac/xoa/{id}', 'doitacController@getxoa');
    // end doi tac
    Route::get('footer', 'footerController@getfooter');
    Route::post('footer', 'footerController@postfooter');
    //san pham
    //menu cap 1 2
    Route::get('san-pham', 'sanphamController@getsanpham');
    Route::post('san-pham/menu-1', 'sanphamController@postmenu1');
    Route::post('san-pham/menu-2', 'sanphamController@postmenu2');
    Route::get('san-pham/menu-1/sua/{id}', 'sanphamController@getsuamenu1');
    Route::get('san-pham/menu-2/sua/{id}', 'sanphamController@getsuamenu2');
    Route::post('san-pham/menu-1/sua/{id}', 'sanphamController@postsuamenu1');
    Route::post('san-pham/menu-2/sua/{id}', 'sanphamController@postsuamenu2');
    Route::get('san-pham/menu-1/xoa/{id}', 'sanphamController@getxoamenu1');
    Route::get('san-pham/menu-2/xoa/{id}', 'sanphamController@getxoamenu2');
    //end menu cap 1 2
    //-- san pham menu
    //lam đến đây!
    Route::get('san-pham/menu-1/san-pham', 'sanphamController@getmenu1sanpham');
    Route::get('san-pham/menu-2/san-pham', 'sanphamController@getmenu2sanpham');
    //end san pham menu
    //--

});

Route::get('trang-chu', 'nguoidungController@gettrangchu');
Route::get('gioi-thieu', 'nguoidungController@getgioithieu');

// Route::get('test', 'sanphamController@test');

