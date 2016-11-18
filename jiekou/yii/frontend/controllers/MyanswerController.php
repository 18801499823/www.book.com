<?php
namespace frontend\controllers;

use Yii;
use Memcache;
use app\models\Json;
use yii\web\controller;

// 定义语言声明
header("Content-Type:text/html;charset=utf8");

/**
* 
*/
class MyanswerController extends Controller
{
	/*
    *@author 张龙
    *@time 20161031
    *@return 布尔
    */
	public function actionIndex()
	{ 
		$pathUrl = "http://sina/dashixun/day1/yii/frontend/web/index.php?r=myanswer/sel";
        $array = file_get_contents($pathUrl);
        $data = json_decode($array);
        $mem = new Memcache;
        $mem->connect("127.0.0.1", 11211);
        $mem->set('key1', $data, 0, 60);
        $memVal = $mem->get('key1');
        
		// 我的提问
		return $this->renderPartial("index",['data'=>$memVal]);
	}
	public function actionSel()
	{
		$data = (new \yii\db\Query())
        ->from('question')
        ->all();
        $code = 200;
        $message = "成功";
        // var_dump($data);die;
        $str = Json::json($code,$message,$data);
        return $str;
	}
}


