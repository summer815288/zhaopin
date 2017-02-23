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
    public $enableCsrfValidation = false;

	//登录
	public function actionLogin()
	{
		return $this->render("login");
	}
	public function actionLogindo()
	{
		$email = $_POST['email'];
		$pwd = $_POST['password'];
		$a = yii::$app->db->createCommand("select * from user where u_email = '$email' and u_pwd = '$pwd'")->queryOne();
		$type = $a['u_type'];
		$data = ['type'=>$type,'email'=>$email];		
		$session = yii::$app->session;
		$session->open();
		$session->set('data',$data);
		if($a){
			echo "<script>alert('登录成功');location.href='?r=index/index'</script>";
		}
	}

	//注册
	public function actionRegister()
	{
		return $this->render("register");
	}
	public function actionRegisterdo()
	{
		$type= $_POST['type'];
		$pwd= $_POST['password'];
		$email= $_POST['email'];
		$a = yii::$app->db->createCommand("select * from user where u_email = '$email'")->queryOne();
		if($a){
			echo "<script>alert('用户已存在');location.href='?r=login/register'</script>";
		}else{
			$res = yii::$app->db->createCommand("insert into user(u_type,u_email,u_pwd) value('$type','$email','$pwd')")->query();
			if($res){
				echo "<script>alert('注册成功');location.href='?r=login/login'</script>";
			}
		}
	}

	//退出登录
	public function actionLoginout()
	{
		$session = Yii::$app->session;
		$session->remove('data');		
		$this->redirect("?r=login/login");
	}
	//忘记密码
	public function actionReset()
	{
		return $this->render("reset");
	}

	//账号设置
	public function actionLoginset()
	{
		return $this->render("set");
	}

	//修改密码
	public function actionUpdatepwd()
	{
		return $this->render("updatepwd");
	}

}