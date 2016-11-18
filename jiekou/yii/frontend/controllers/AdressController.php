<?php
namespace frontend\controllers;

use Yii;
use yii\data\Pagination;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\Green;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

// 定义语言声明
header('Content-Type:text/html;charset=utf8');

class AdressController extends Controller
{
    public $enableCsrfValidation = false;
    /*
    *@author 张龙
    *@time 20161031
    *@return 布尔
    */
    public function actionIndex()
    {
        // 居住地址
        return $this->renderPartial("index");
    }
}