<?php
namespace frontend\controllers;

use Yii;
use app\models\Json;
use yii\web\Controller;

// 定义语言声明
header('Content-Type:text/html;charset=utf8');

class IndexController extends Controller
{
    public $enableCsrfValidation = false;
    /*
    *@author 张龙
    *@time 20161031
    *@return 布尔
    */
    
    public function actionIndex()
    {
        //轮播图
        $url = "http://sina/dashixun/day1/laravel-v5.1.11/public/carousel";
        $arr = file_get_contents($url);
        $data = json_decode($arr);
        // 校园简介
        $schoolContentUrl = "http://sina/dashixun/day1/laravel-v5.1.11/public/school/content";
        $schoolContentArr = file_get_contents($schoolContentUrl);
        $schoolContentData = json_decode($schoolContentArr);
        // 校园资讯
        $schoolMessageUrl = "http://sina/dashixun/day1/laravel-v5.1.11/public/school/message";
        $schoolMessageArr = file_get_contents($schoolMessageUrl);
        $schoolMessageData = json_decode($schoolMessageArr);
        // var_dump($schoolContentData);die;
        // 首页
        return $this->renderPartial("index",['data'=>$data,'schoolContentData'=>$schoolContentData,'schoolMessageData'=>$schoolMessageData]);
    }
}