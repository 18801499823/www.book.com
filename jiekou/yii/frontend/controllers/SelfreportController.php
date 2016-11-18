<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

// 定义语言声明
header('Content-Type:text/html;charset=utf8');

class SelfreportController extends Controller
{
    public $enableCsrfValidation = false;
    /*
    *@author 张龙
    *@time 20161031
    *@return 布尔
    */
    public function actionIndex()
    {
        // 自助报到
        return $this->renderPartial("index");
    }
}