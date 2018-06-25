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

Route::get('/', 'FrontController@frontIndex');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/news/desc/{id}','FrontController@newsDesc')->where('id', '[0-9]+');


//category
Route::get('/category/show','CategoryController@index');
Route::post('/category/post','CategoryController@post');
Route::get('/category/edit/{id}','CategoryController@edit');
Route::post('/category/update','CategoryController@update');
//subcat
Route::post('/sub/cat/post','CategoryController@subCatPost');
Route::get('/show-cat-sub/{id}','CategoryController@showSub');

Route::resource('news','Newscontroller');
Route::get('news/slider/add/{id}','Newscontroller@sliderFromNews');
Route::get('/news/featured/add/{id}','Newscontroller@sliderFeatured');


Route::post('/front/commend/add','CommendController@commendAdd');
Route::post('/front/commend/replay/{id}','CommendReplayController@replayAdd');

Route::resource('pages','PagesController');
Route::resource('banner','BannerController');

Route::resource('settings','SettingController');