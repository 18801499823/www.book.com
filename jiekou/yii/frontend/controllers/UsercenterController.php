<?php
namespace frontend\controllers;

use Yii;
use yii\web\controller;

// 定义语言声明
header("Content-Type:text/html;charset=utf8");

/**
* 
*/
class UsercenterController extends Controller
{
	public $enableCsrfValidation = false;
	public function actionIndex()
	{
		// 个人中心
		return $this->renderpartial("index");
	}
	public function actionUserinfo()
	{
		// 个人信息
		return $this->renderpartial("userinfo");
	}
	public function actionCheck()
	{
		$callback = Yii::$app->request->get("callback");                                      // callback
        $username = Yii::$app->request->post("username");                                     // 姓名
    	$email = Yii::$app->request->post("email");                                           // 邮箱
    	$phone = Yii::$app->request->post("phone");                                           // 手机
    	$homeHost = Yii::$app->request->post("homeHost");                                     // 家庭主机
    	$mobilePhone = Yii::$app->request->post("mobilePhone");                               // 移动电话
    	$accountMigration = Yii::$app->request->post("accountMigration");                     // 户口迁移
    	$partyMember = Yii::$app->request->post("partyMember");                               // 党员关系
    	$uname = Yii::$app->request->post("uname");                                           // 紧急联系人1电话
    	$nexus = Yii::$app->request->post("nexus");                                           // 与当事人关系
    	$usname = Yii::$app->request->post("usname");                                         // 紧急联系人1电话
    	$nexus1 = Yii::$app->request->post("nexus1");                                         // 与当事人关系
    	$adress = Yii::$app->request->post("adress");                                         // 所在地地址
    	$detailedAdress = Yii::$app->request->post("detailedAdress");                         // 详细地址
    	// var_dump(Yii::$app->request->post());die;                        
        $data = Yii::$app->db->createCommand()->insert('userinfo',[
            'username'=>$username,
            'email'=>$email,
            'phone'=>$phone,
            'homeHost'=>$homeHost,
            'mobilePhone'=>$mobilePhone,
            'accountMigration'=>$accountMigration,
            'partyMember'=>$partyMember,
            'uname'=>$uname,
            'nexus'=>$nexus,
            'usname'=>$usname,
            'nexus1'=>$nexus1,
            'adress'=>$adress,
            'detailedAdress'=>$detailedAdress,
        ])->execute();
        if($data){
            $str = "提交成功";
            echo $callback.'('.json_encode($str).')';
        }else{
            $str = "提交失败";
            echo $callback.'('.json_encode($str).')';
        }
	}
	public function actionDormbook()
	{
		return $this->renderpartial("dormbook");
	}
	public function actionCheckcheck()
	{
		$callback = Yii::$app->request->get("callback");                                    //callback
		$schoolZone = Yii::$app->request->post("schoolZone");                               // 校区
    	$building = Yii::$app->request->post("building");                                   // 楼栋号
    	$roomType = Yii::$app->request->post("roomType");                                   // 宿舍类型
    	$roomNum = Yii::$app->request->post("roomNum");                                     // 房间号
    	$roomNumber = Yii::$app->request->post("roomNumber");                               // 铺位
    	$data = Yii::$app->db->createCommand()->insert('dormbook',[
            'schoolZone'=>$schoolZone,
            'building'=>$building,
            'roomType'=>$roomType,
            'roomNum'=>$roomNum,
            'roomNumber'=>$roomNumber
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




