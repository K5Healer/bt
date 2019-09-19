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
})->name('trang-chu1');
Route::get('/chitiet', function () {
    return view('pages.chitiet');
})->name('chi-tiet');
Route::group(['prefix' => 'admin','middleware'=>'auth'], function () {
    Route::get('/','PagesController@getIndex')->name('admin'); 
});
Route::get('admin/login','PagesController@logout')->name('logout');
Route::get('/admin/login','PagesController@login')->name('login');
Route::post('/admin/login','PagesController@postlogin')->name('login');
Route::get('/registation','PagesController@getRegistation')->name('loginRegister');
Route::post('/registation','PagesController@postRegistation')->name('loginRegister');
Route::get('/News','NewsController@index')->name('News');
Route::get('get_AddNews','NewsController@create')->name('get_AddNews');
Route::post('post_AddNews','NewsController@store')->name('post_AddNews');


Route::get('EditNews/{id}',[
	'as'=>'get_news_edit',
	'uses'=>'NewsController@edit'
]);
Route::post('EditNews/{id}',[
	'as'=>'post_news_edit',
	'uses'=>'NewsController@post_edit'
]);
Route::get('deleteNews/{id}',[
	'as'=>'news_delete',
	'uses'=>'NewsController@delete'
]);
// Route::get('tintuc', function () {
//     return view('pages.tintuc');
// })->name('tin-tuc');
Route::get('tintuc',[
	'as'=>'tin-tuc',
	'uses'=>'NewsController@show'
]);
Route::get('chitiettintuc/{id}',[
     'as'=>'chitiet',
     'uses'=>"NewsController@showchitiet"
]);
Route::post('search',[
   'as'=>'search_new',
   'uses'=>'NewsController@search_new'
]);