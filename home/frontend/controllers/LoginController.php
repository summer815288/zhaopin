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
		$login_time = time();
		$a = yii::$app->db->createCommand("select * from members where email = '$email' and password = '$pwd'")->queryOne();
		yii::$app->db->createCommand("update members set last_login_time='$login_time' where email = '$email' and password = '$pwd'")->query();
		$type = $a['utype'];
		// $data = ['type'=>$type,'email'=>$email];
		$session = yii::$app->session;
		$session->open();
		$session->set('type',$type);
		$session->set('email',$email);
		if($a){
			echo "<script>alert('登录成功');location.href='?r=index/index'</script>";
		}else{
			echo "<script>alert('登录失败，请确认后在登录');location.href='?r=login/login'</script>";

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
		$reg_time=time(); 
		$reg_ip = $_SERVER['REMOTE_ADDR'];		
		$a = yii::$app->db->createCommand("select * from members where email = '$email'")->queryOne();
		if($a){
			echo "<script>alert('用户已存在');location.href='?r=login/register'</script>";
		}else{
			$res = yii::$app->db->createCommand("insert into members(utype,email,password,reg_ip,reg_time) value('$type','$email','$pwd','$reg_ip','$reg_time')")->query();
			if($res){
				echo "<script>alert('注册成功');location.href='?r=login/login'</script>";
			}
		}
	}

	//退出登录
	public function actionLoginout()
	{
		$session = Yii::$app->session;
		$session->remove('email');		
		$session->remove('type');		
		$this->redirect("?r=login/login");
	}
	//忘记密码
	public function actionReset()
	{
		return $this->render("reset");
	}

	//qq第三方登录
	public function actionQq()
	{
		return $this->render("qq/index.php");
	}

}