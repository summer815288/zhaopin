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
	public $enableCsrfValidation = false;
	//首页
	public function actionIndex()
	{
		$data=yii::$app->db->createCommand("select * from category_jobs")->queryAll();
		$list=$this->getList($data);
		$jobs=yii::$app->db->createCommand("select * from jobs")->queryAll();
		return $this->render("index",['list'=>$list,'jobs'=>$jobs]);
	}

	//公司
	public function actionCompany()
	{
		return $this->render("companylist");
	}

	//我的简历
	public function actionMyinfo()
	{
		return $this->render("jianli");
	}

	//发布职位
	public function actionCreate()
	{
		return $this->render("create");
	}

}