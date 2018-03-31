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


//静态页面路由设置，指向name为可使用route方法
Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

//设置注册页面的路由，用resource对用户资源进行定义，包含了跳转，创建，储存，更新，退出
Route::get('signup', 'UsersController@create')->name('signup');
Route::resource('users', 'UsersController');


//显示登录页面，创建新会话（登录），销毁会话（退出登录）
Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');

