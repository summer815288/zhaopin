<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
//use backend\models\ConfigForm;
use app\models\Easyguide;
use yii\data\Pagination;
use backend\models\Admin;

/**
* 
*/
class LoginController extends Controller
{
	public $layout = false;
	
	public function actionLogin()
	{
		return $this->render("login1");
	}

	public function  actionLogindo()
	{
		$username = $_POST['username'];
		$pwd = $_POST['password'];
		$time = time();
		$yan = $_POST['yan'];
		if($yan == 1){
			$cookies = Yii::$app->response->cookies;
			$cookies->add(new \yii\web\Cookie([
			    'name' => 'name',
			    'value' => $username,
			]));

			$admin = \yii::$app->db->createCommand("select * from admin WHERE admin_name='$username' AND admin_pwd='$pwd'")->queryOne();
			\yii::$app->db->createCommand("update admin set login_time=$time WHERE admin_name='$username'")->query();
			if($admin){
				$this->redirect("?r=admin/index");
			}else{
				echo "<script>alert('请输入正确的用户名或密码！');location.href='?r=login/login'</script>";
			}
		}else{
			echo "<script>alert('请输入正确的用户名或密码！');location.href='?r=login/login'</script>";
		}

	}


	public function actionLoginout()
	{
		\yii::$app->response->cookies->remove('name');
		$this->redirect("?r=login/login");
	}


}