<?php
namespace frontend\controllers;

use Yii;
use yii\web\controller;

// 定义语言声明
header("Content-Type:text/html;charset=utf8");

/**
* 
*/
class EntranceController extends Controller
{
	/*
    *@author 张龙
    *@time 20161031
    *@return 布尔
    */
	public function actionIndex()
	{
		return $this->renderPartial("index");
	}
}

























