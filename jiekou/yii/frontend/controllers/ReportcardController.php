<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

// 定义语言声明
header('Content-Type:text/html;charset=utf8');

class ReportcardController extends Controller
{
    public $enableCsrfValidation = false;
    /*
    *@author 张龙
    *@time 20161031
    *@return 布尔
    */
    
    public function actionIndex()
    {
        $pathUrl = "http://sina/dashixun/day1/yii/frontend/web/index.php?r=reportcard/sel";
        $array = file_get_contents($pathUrl);
        // var_dump($array);die;
        $data = json_decode($array);
        // var_dump($data);die;
        $url = "http://sina/dashixun/day1/yii/frontend/web/index.php?r=reportcard/lists";
        $str = file_get_contents($url);
        // var_dump($str);die;
        $priteArr = json_decode($str);
        // 抵校登记
        return $this->renderPartial("index",['arr'=>$priteArr,'data'=>$data]);
    }
    public function actionLists()
    {
        $data = (new \yii\db\Query())
        ->from('prite')
        ->all();
        // var_dump($data);die;
        $str = json_encode($data);
        return $str;
    }
    public function actionSel()
    {
        $data = (new \yii\db\Query())
        ->from('message')
        ->all();
        // var_dump($data);
        $stt = json_encode($data);
        return $stt;
    }
}