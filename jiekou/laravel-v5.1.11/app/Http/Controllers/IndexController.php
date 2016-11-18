<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Session;
use Cookie;
use DB,Input,Redirect,url,Validator,Request;
use App\Http\Controllers\Controller;

/**
* 
*/
class IndexController extends Controller
{
	
	function __construct()
	{
		header("content-type:text/html;charset=utf8");
		# code...
	}
	public function login(Request $request)
	{
		$key = Request::get("key");
		// echo $key;die;
		$username = Request::get("username");
		$password = Request::get("password");
		$time = Request::get("time");
		// echo $username.",".$password.",".$time;die;
		$dy = "username=$username&password=$password&time=$time";
		$d = md5($dy);
		if(time()-$time<120){
			if ($d==$key) {
				// echo 3;die;
				$user = DB::table("a")
				->where("username","=",$username)
				->where("password","=",$password)
				->get();
				if($user){
					$token = md5($username."456");
					DB::table('a')
					->where("username","=",$username)
					->where("password","=",$password)
					->update(array('token'=>$token));
					return json_encode($user);
				}else{
					echo 5;die;
				}
			} else {
				echo 4;die;
			}
		}else{
			echo 2;die;
		}
		
	}
}

















