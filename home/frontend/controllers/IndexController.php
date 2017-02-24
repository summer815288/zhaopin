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
		$news=yii::$app->db->createCommand("select * from news_list limit 6")->queryAll(); 
		return $this->render("index",['list'=>$list,'jobs'=>$jobs,'news'=>$news]);
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
		$old_p = $_POST['oldpassword'];
		$new_p = $_POST['newpassword'];
		$com_p = $_POST['comfirmpassword'];

		$session = yii::$app->session;
		$email = $session->get('email');
		$user = yii::$app->db->createCommand("select * from members where email='$email'")->queryOne();	
		$pwd = $user['password'];
		if($pwd != $old_p){
			echo "<script>alert('密码错误');localtion.href='?r=index/updatepwd'</script>";
		}
		if($new_p != $com_p){
			echo "<script>alert('两次密码不一致哦！');localtion.href='?r=index/updatepwd'</script>";

		}else{
			yii::$app->db->createCommand("update members set password='$com_p' where email='$email'")->query();
		}
	}
}