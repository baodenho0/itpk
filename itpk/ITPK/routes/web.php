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
    Route::get('san-pham', 'sanphamController@getsanpham');
    Route::get('dich-vu', 'dichvuController@getdichvu');
    Route::post('dich-vu', 'dichvuController@postdichvu');
    Route::get('tin-tuc', 'tintucController@gettintuc');
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
    Route::get('du-an-noi-bat', 'duannoibatController@getduannoibat');
    Route::get('video', 'videoController@getvideo');
    Route::get('doitac', 'doitacController@getdoitac');
    Route::get('footer', 'footerController@getfooter');
});

Route::get('trang-chu', 'nguoidungController@gettrangchu');
Route::get('gioi-thieu', 'nguoidungController@getgioithieu');

