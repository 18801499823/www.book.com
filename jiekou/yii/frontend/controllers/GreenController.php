<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

// 定义语言声明
header('Content-Type:text/html;charset=utf8');

class GreenController extends Controller
{
    public $enableCsrfValidation = false;
    /*
    *@author 张龙
    *@time 20161031
    *@return 布尔
    */
    public function actionIndex()
    {
        // 绿色通道
        return $this->renderPartial("index");
    }
    public function actionCheck()
    {
        $callback = Yii::$app->request->get("callback");                        // callback
        $applyType = Yii::$app->request->post("applyType");                     // 申请类型
        $username = Yii::$app->request->post("username");                       // 姓名
        $nation = Yii::$app->request->post("nation");                           // 民族
        $phone = Yii::$app->request->post("phone");                             // 电话
        $birth = Yii::$app->request->post("birth");                             // 出生年月
        $idNumber = Yii::$app->request->post("idNumber");                       // 身份证号
        $telephone = Yii::$app->request->post("telephone");                     // 联系手机
        $isHouse = Yii::$app->request->post("isHouse");                         // 居住类型
        $politicalLandscape = Yii::$app->request->post("politicalLandscape");   // 政治面貌
        $whereUrl = Yii::$app->request->post("whereUrl");                       // 居住地址
        $detailedURL = Yii::$app->request->post("detailedURL");                 // 详细地址
        $housePeople = Yii::$app->request->post("housePeople");                 // 家庭成员
        $filiation = Yii::$app->request->post("filiation");                     // 关系
        $workUnit = Yii::$app->request->post("workUnit");                       // 工作单位
        $annuallIncome = Yii::$app->request->post("annuallIncome");             // 年收入
        $housePeople2 = Yii::$app->request->post("housePeople2");               // 家庭成员2
        $filiation2 = Yii::$app->request->post("filiation2");                   // 关系2
        $workUnit2 = Yii::$app->request->post("workUnit2");                     // 工作单位2
        $annuallIncome2 = Yii::$app->request->post("annuallIncome2");           // 年收入2
        $housePeople3 = Yii::$app->request->post("housePeople3");               // 家庭成员3
        $filiation3 = Yii::$app->request->post("filiation3");                   // 关系3
        $workUnit3 = Yii::$app->request->post("workUnit3");                     // 工作单位3
        $annuallIncome3 = Yii::$app->request->post("annuallIncome3");           // 年收入3
        $speakContent = Yii::$app->request->post("speakContent");               // 申请原因

        $data = Yii::$app->db->createCommand()->insert('green',[
            'applyType'=>$applyType,
            'username'=>$username,
            'nation'=>$nation,
            'phone'=>$phone,
            'birth'=>$birth,
            'idNumber'=>$idNumber,
            'telephone'=>$telephone,
            'isHouse'=>$isHouse,
            'politicalLandscape'=>$politicalLandscape,
            'whereUrl'=>$whereUrl,
            'detailedURL'=>$detailedURL,
            'housePeople'=>$housePeople,
            'filiation'=>$filiation,
            'workUnit'=>$workUnit,
            'annuallIncome'=>$annuallIncome,
            'housePeople2'=>$housePeople2,
            'filiation2'=>$filiation2,
            'workUnit2'=>$workUnit2,
            'annuallIncome2'=>$annuallIncome2,
            'housePeople3'=>$housePeople3,
            'filiation3'=>$filiation3,
            'workUnit3'=>$workUnit3,
            'annuallIncome3'=>$annuallIncome3,
            'speakContent'=>$speakContent,
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