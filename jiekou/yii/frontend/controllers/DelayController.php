<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

// 定义语言声明
header('Content-Type:text/html;charset=utf8');

class DelayController extends Controller
{
    public $enableCsrfValidation = false;
    /*
    *@author 张龙
    *@time 20161031
    *@return 布尔
    */
    
    public function actionIndex()
    {
        // 推迟报到
        return $this->renderPartial("index");
    }
    public function actionCheck()
    {
        $callback = Yii::$app->request->get("callback");                        // callback
        $holiday = Yii::$app->request->post("holiday");                         // 推迟
        $username = Yii::$app->request->post("username");                       // 姓名
        $number = Yii::$app->request->post("number");                           // 学号
        $school = Yii::$app->request->post("school");                           // 学院
        $job = Yii::$app->request->post("job");                                 // 专业
        $idNumber = Yii::$app->request->post("idNumber");                       // 身份证号
        $lateTime = Yii::$app->request->post("lateTime");                       // 推迟时间
        $content = Yii::$app->request->post("content");                         // 原因
        $data = Yii::$app->db->createCommand()->insert('delay',[
            'holiday'=>$holiday,
            'username'=>$username,
            'number'=>$number,
            'school'=>$school,
            'job'=>$job,
            'idNumber'=>$idNumber,
            'lateTime'=>$lateTime,
            'content'=>$content,
        ])->execute();
        if($data){
            $str = "提交成功";
            echo $callback.'('.json_encode($str).')';
        }else{
            $str = "提交失败";
            echo $callback.'('.json_encode($str).')';
        }
    }
}