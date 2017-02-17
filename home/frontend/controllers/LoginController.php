<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class LoginController extends Controller
{
	public $layout = false;

	//登录
	public function actionLogin()
	{
		return $this->render("login");
	}

	//注册
	public function actionRegister()
	{
		return $this->render("register");
	}

	//忘记密码
	public function actionReset()
	{
		return $this->render("reset");
	}
}