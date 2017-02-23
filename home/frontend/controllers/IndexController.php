<?php

namespace frontend\controllers;

use frontend\controllers\CommonController;
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

class IndexController extends CommonController
{
	public $layout = false;
<<<<<<< HEAD
	public $enableCsrfValidation = false;
	//首页
	public function actionIndex()
	{
		$data=yii::$app->db->createCommand("select * from category_jobs")->queryAll();
		$list=$this->getList($data);
		$jobs=yii::$app->db->createCommand("select * from jobs")->queryAll();
		return $this->render("index",['list'=>$list,'jobs'=>$jobs]);
=======
    public $enableCsrfValidation = false;
	
	//首页
	public function actionIndex()
	{
		$session = Yii::$app->session;
		$data = $session->get('data');

		return $this->render("index",['data'=>$data]);
			
>>>>>>> de5211a88edcbed0249776b150cb848b1c6a78ca
	}

	//公司
	public function actionCompany()
	{
		return $this->render("companylist");
	}

	

	//发布职位
	public function actionCreate()
	{
		return $this->render("create");
	}

}