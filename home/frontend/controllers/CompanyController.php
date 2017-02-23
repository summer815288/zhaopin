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
class CompanyController extends Controller
{
	public $layout = 'header';
    public $enableCsrfValidation = false;

	//我发布的职位
	public function actionPositions()
	{
		return $this->render("positions");
	}

	//我公司主页
	public function actionMyhome()
	{
		return $this->render("myhome");
	}

	//我要招人
	public function actionCreate()
	{
		return $this->render("create");
	}
	//投递反馈
	public function actionDelivery()
	{
		return $this->render("delivery");
	}

	

}