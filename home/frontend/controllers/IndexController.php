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

	public $layout = 'header';

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

	

	//发布职位
	public function actionCreate()
	{
		return $this->render("create");
	}


	//查看更多
	public function actionList()
	{
		return $this->render("list");
	}


	public function actionSearch()
	{
		$kd = $_POST['kd'];
		echo $kd;
	}


	//账号设置
	public function actionLoginset()
	{
		$session = yii::$app->session;
		$data = $session->get('email');
		return $this->render("set",['data'=>$data]);
	}

	//修改密码
	public function actionUpdatepwd()
	{

		$session = yii::$app->session;
		$data = $session->get('email');
		return $this->render("updatepwd",['data'=>$data]);
	}

	public function actionPwdup()
	{
		$post = yii::$app->request->post();
		print_r($post);die;
	}
}