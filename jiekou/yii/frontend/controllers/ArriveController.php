<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

// 定义语言声明
header('Content-Type:text/html;charset=utf8');

class ArriveController extends Controller
{
    public $enableCsrfValidation = false;
    /*
    *@author 张龙
    *@time 20161031
    *@return 布尔
    */
    
    public function actionIndex()
    {
        // 抵校登记
        return $this->renderPartial("index");
    }
    public function actionJson()
    {
        $callback = Yii::$app->request->get('callback');
        $jiaotong = Yii::$app->request->post('transportation');
        $jiezhan = Yii::$app->request->post('cityUrl');
        $bagintime = Yii::$app->request->post('goTime');
        $endtime = Yii::$app->request->post('atTime');
        $is_pei = Yii::$app->request->post('isEscort');
        $pei_num = Yii::$app->request->post('ecortNum');
        $data = Yii::$app->db->createCommand()->insert('arrive', [
            'jiaotong' => $jiaotong,
            'jiezhan' => $jiezhan,
            'bagintime' => $bagintime,
            'endtime' => $endtime,
            'is_pei' => $is_pei,
            'pei_num' => $pei_num,
        ])->execute();
        if ($data) {
             $str = "成功";
             echo $callback.'('.json_encode($str).')';
        } else {
             $str = "失败";
             echo $callback.'('.json_encode($str).')';
        }
    }
}