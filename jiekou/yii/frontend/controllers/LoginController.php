<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

header('Content-Type:text/html;charset=utf8');

class LoginController extends Controller
{
	public $enableCsrfValidation = false;
	public function actionIndex()
	{
		return $this->renderPartial("login");
	}
	public function actionLogin()
	{
		$username = Yii::$app->request->post("username");
		$password = Yii::$app->request->post("password");
		// echo $username.",".$password;
		$time = time();
		$key = "username=$username&password=$password&time=$time";
		$k = md5($key);
		// echo $k;die;
		$url = "http://sina/dashixun/day1/laravel-v5.1.11/public/login?username=$username&password=$password&time=$time&key=$k";
		$str = file_get_contents($url);
		json_decode($str,true);
		$fp = fopen("log.txt","a");
		flock($fp, LOCK_EX) ;
		fwrite($fp,"执行日期：".strftime("%Y%m%d%H%M%S",time())."\n".$str."\n");
		flock($fp, LOCK_UN);
		fclose($fp);
		if ($str) {
			echo 1;
			# code...
		} else {
			echo 2;
			# code...
		}
		
		# code...
	}
}









