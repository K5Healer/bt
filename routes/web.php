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


// Route::get('/', function () {
//     return view('pages.trangchu');
// })->name('trang-chu');
Route::get('/trangchu', function () {
    return view('pages.trangchu');
})->name('trang-chu');

Route::get('tintuc', function () {
    return view('pages.tintuc');
})->name('tin-tuc');

Route::get('/chitiet', function () {
    return view('pages.chitiet');
})->name('chi-tiet');

