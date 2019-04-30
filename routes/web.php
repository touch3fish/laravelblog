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

Route::get('/test', function (){
    return view('test.test');
});

Route::get('/admin', function (){
    return view('admin.admin');
});

Route::get('111', 'TestController@index');

Route::get('/login',function (){
   return view('admin.login');
});

//登陆注册
Route::get('/register','Admin\RegisterController@index');
Route::post('/register','Admin\RegisterController@register');
Route::get('/login','Admin\LoginController@index');
Route::post('/login','Admin\LoginController@login');

//文章
Route::get('/createpost','Admin\PostController@index');
Route::post('/createpost','Admin\PostController@create');

//home
Route::get('/index','Home\IndexController@index');