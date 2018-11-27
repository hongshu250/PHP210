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
    return view('home.welcome');
});

//后台登录
Route::any('admin/login','Admin\LoginController@login');
Route::any('/admin/dologin','Admin\LoginController@dologin');
Route::any('/admin/captcha','Admin\LoginController@captcha');

Route::any('/admin/profile','Admin\LoginController@profile');
Route::any('/admin/changepass','Admin\LoginController@changepass');
Route::any('/admin/changeadmin','Admin\LoginController@changeadmin');
Route::any('/admin/upload','Admin\LoginController@upload');
Route::any('/admin/logout','Admin\LoginController@logout');


//后台
Route::group([],function(){
	//后台首页
	Route::get('/admin','Admin\IndexController@index');
	//后台用户管理
	Route::resource('admin/user','Admin\UserController');
	Route::get('/admin/usajax','Admin\UserController@ajaxupdate');
	//后台广告管理
	Route::resource('admin/adv','Admin\AdvController');
	

});

