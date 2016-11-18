<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Jsons\Json;
use Session;
use Cookie;
use DB,Input,Redirect,url,Validator,Request;
use App\Http\Controllers\Controller;

/**
* 
*/
class CarouselController extends Controller
{
	
	function __construct()
	{
		//定义语言声明
		header("Content-Type:text/html;charset=utf8");
	}
	 /*
    *@author 张龙
    *@time 20161031
    *@return json数组
    */
	 public function index(Request $request)
	 {
	 	// 查询轮播图
	 	$code = "200";
	 	$message = "请求成功";
	 	$data  = DB::table("img")->get();
	 	$arr = Json::json($code,$message,$data);
	 	return $arr;
	 }
}














