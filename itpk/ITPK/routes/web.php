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
    Route::get('gioi-thieu','gioithieuController@getgioithieu');
    Route::get('san-pham', 'sanphamController@getsanpham');
    Route::get('dich-vu', 'dichvuController@getdichvu');
    Route::get('tin-tuc', 'tintucController@gettintuc');
    Route::get('tuyen-dung', 'tuyendungController@gettuyendung');
    Route::get('lien-he', 'lienheController@getlienhe');
    Route::get('form-lien-he', 'form_lienheController@getform_lienhe');
    Route::get('slide', 'slideController@getslide');
    Route::get('banner', 'bannerController@getbanner');
    Route::get('du-an-noi-bat', 'duannoibatController@getduannoibat');
    Route::get('video', 'videoController@getvideo');
    Route::get('doitac', 'doitacController@getdoitac');
    Route::get('footer', 'footerController@getfooter');
});

Route::get('trang-chu', 'nguoidungController@gettrangchu');
Route::get('gioi-thieu', 'nguoidungController@getgioithieu');

