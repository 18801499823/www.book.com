<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// 首页
Route::get('/', function () {
    return view('welcome');
});
// 登陆
Route::get("login","IndexController@login");
// 轮播图
Route::get("carousel","CarouselController@index");
// 学校简介
Route::get("school/content","SchoolController@content");
// 校园资讯
Route::get("school/message","SchoolController@message");





