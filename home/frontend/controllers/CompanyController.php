<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\Category;
use frontend\models\Company_profile;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
class CompanyController extends Controller
{
	public $layout = 'header';
    public $enableCsrfValidation = false;

    //填写公司信息成功页面
    public function actionSuccess(){

    }
    //发布新职位
    public function actionCreate()
    {
        $uid=Yii::$app->user->id;
        //薪资
        $wage_cn=Category::find()->where(['c_alias'=>'QS_wage'])->asArray()->all();
        //学历
        $education_cn=Category::find()->where(['c_alias'=>'QS_education'])->asArray()->all();
        //工作经验
        $experience_cn=Category::find()->where(['c_alias'=>'QS_experience'])->asArray()->all();
        //联系方式
        $company_profile=Company_profile::find()->where(['c_alias'=>'QS_experience'])->asArray()->all();


        return $this->render("create",['wage_cn'=>$wage_cn,'education_cn'=>$education_cn,'experience_cn'=>$experience_cn]);
    }
    //管理职位
    public function actionJobs(){
        return $this->render("jobs");
    }
	//我发布的职位
	public function actionPositions()
	{
		return $this->render("positions");
	}
    //成功发布职位页面
    public function actionIndex06(){

    }
	//我公司主页
	public function actionMyhome()
	{
		return $this->render("myhome");
	}


    //邀请面试
    public function actionRecruitment(){
        return $this->render('recruitment');
    }
    //收到的简历
    public function actionCanInterviewResumes(){

    }
    //简历查看
    public function actionPreview(){

    }
    //不合适的简历
    public function actionHaveRefuseResumes(){

    }



	//投递反馈
	public function actionDelivery()
	{
		return $this->render("delivery");
	}

	

}