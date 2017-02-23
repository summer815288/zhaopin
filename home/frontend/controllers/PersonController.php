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
class PersonController extends Controller
{
	public $layout = 'header';
    public $enableCsrfValidation = false;

    //具体的个人中心
    public function actionPerson()
    {
        return $this->render("person");
    }
	//我的简历
	public function actionMyinfo()
	{
		return $this->render("jianli");
	}



    //账号管理---基本资料
    public function actionMan(){


        return  $this->renderPartial('man.php');
    }




	//收藏的职位
	public function actionCollections()
	{
		return $this->render("collections");
	}


	//我的订阅
	public function actionSubscribe()
	{
		return $this->render("subscribe");
	}



}