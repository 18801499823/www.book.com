<?php
namespace frontend\controllers;

use Yii;
use yii\web\controller;

// 定义语言声明
header("Content-Type:text/html;charset=utf8");

/**
* 
*/
class CommonquestionController extends Controller
{
	public function actionIndex()
	{
		// 常见问题
		return $this->renderpartial("index");
	}
}




