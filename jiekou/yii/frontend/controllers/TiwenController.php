<?php
namespace frontend\controllers;

use Yii;
use yii\web\controller;

// 定义语言声明
header("Content-Type:text/html;charset=utf8");

/**
* 
*/
class TiwenController extends Controller
{
	public $enableCsrfValidation = false;
	/*
    *@author 张龙
    *@time 20161031
    *@return 布尔
    */
	public function actionIndex()
	{
		// 我要提问
		return $this->renderPartial("index");
	}
	public function actionJson()
    {
        $callback = Yii::$app->request->get('callback');
        $time = date("Y-m-d H:i:s",time());
        $qname = Yii::$app->request->post('qname');
        $data = Yii::$app->db->createCommand()->insert('question',['quame' => $qname,'qtime'=>$time])->execute();
        if ($data) {
             $str = "成功";
             echo $callback.'('.json_encode($str).')';
        } else {
             $str = "失败";
             echo $callback.'('.json_encode($str).')';
        }
    }
}


