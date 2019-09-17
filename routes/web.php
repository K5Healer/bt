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
    return view('pages.trangchu');
})->name('trang-chu');
Route::get('/trangchu', function () {
    return view('pages.trangchu');
})->name('trang-chu1');

Route::get('tintuc', function () {
    return view('pages.tintuc');
})->name('tin-tuc');

Route::get('/chitiet', function () {
    return view('pages.chitiet');
})->name('chi-tiet');
Route::group(['prefix' => 'admin','middleware'=>'auth'], function () {
    Route::get('/','PagesController@getIndex')->name('admin');
    Route::get('admin/login','PagesController@logout')->name('logout');
    Route::get('/registation','PagesController@getRegistation')->name('loginRegister');
    Route::post('/registation','PagesController@postRegistation')->name('loginRegister');
    Route::get('listregistation','PagesController@getListRegistation')->name('listRegister');
    Route::get('suaTaiKhoanDangNhap/{id}','PagesController@getSuaTaikhoan')->name('suaTKDangNhap');
    Route::post('suaTaiKhoanDangNhap/{id}','PagesController@postSuaTaikhoan');
    
});

Route::get('/admin/login','PagesController@login')->name('login');
Route::post('/admin/login','PagesController@postlogin')->name('login');
