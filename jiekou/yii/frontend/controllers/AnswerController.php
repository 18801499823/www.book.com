<?php
namespace frontend\controllers;

use Yii;
use yii\web\controller;

// 定义语言声明
header("Content-Type:text/html;charset=utf8");

/**
* 
*/
class AnswerController extends Controller
{
	public function actionIndex()
	{
		// 咨询解答
		return $this->renderpartial("index");
	}
}




