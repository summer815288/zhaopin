<?php
namespace frontend\controllers;

use Yii;
use frontend\models\ContactForm;
use frontend\models\Category;
use frontend\models\Category_district;
use frontend\models\Company_profile;
use frontend\models\Category_jobs;
use frontend\models\Jobs;
use yii\web\Controller;
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
        //薪资
        $wage_cn=Category::find()->where(['c_alias'=>'QS_wage'])->asArray()->all();
        //学历
        $education_cn=Category::find()->where(['c_alias'=>'QS_education'])->asArray()->all();
        //工作经验
        $experience_cn=Category::find()->where(['c_alias'=>'QS_experience'])->asArray()->all();
        //职业亮点
        $redstar=Category::find()->where(['c_alias'=>'QS_jobtag'])->asArray()->all();
        //联系方式
        $email=Yii::$app->session->get('email');
        $company_profile=Company_profile::find()->where(['email'=>"$email"])->asArray()->all();
        //职业类别
        $category_jobs_parents=Category_jobs::find()->where(['parentid'=>'0'])->asArray()->all();
        $category_jobs=Category_jobs::find()->asArray()->all();
        //城市
        $category_one=Category_district::find()->where(['parentid'=>'0'])->asArray()->all();
        $category_district=Category_district::find()->asArray()->all();
        return $this->render("create",['wage_cn'=>$wage_cn,'education_cn'=>$education_cn,'experience_cn'=>$experience_cn,'company_profile'=>$company_profile,'redstar'=>$redstar,'category_jobs_parents'=>$category_jobs_parents,'category_jobs'=>$category_jobs,'category_one'=>$category_one,'category_district'=>$category_district]);
    }
    //处理职业分类
    public function actionCategory_jobs(){
        $parentid=$_POST['parentid'];
        $category_jobs=Category_jobs::find()->where(['parentid'=>"$parentid"])->asArray()->all();
        $data['category_jobs']=$category_jobs;
        echo json_encode($category_jobs);
    }
    //处理发布新职位
    public function actionCreate_to(){
        print_r($_POST);die;
        $arr=array(
        'jobs_name'=>$_POST['jobs_name'],
        'nature'=>$_POST['nature'],
        'nature_cn'=>$_POST['nature_cn'],
        'topclass'=>$_POST['topclass'],
        'category'=>$_POST['category'],
        'subclass'=>$_POST['subclass'],
        'category_cn'=>$_POST['category_cn'],
        'amount'=>$_POST['amount'],
        'district_cn'=>$_POST['district_cn'],
        'district'=>$_POST['district'],
        'sdistrict'=>$_POST['sdistrict'],
        'wage_cn'=>$_POST['wage_cn'],
        'tag'=>$_POST['tag'],
        'tag_cn'=>$_POST['tag_cn'],
        'sex_cn'=>$_POST['sex_cn'],
        'education_cn'=>$_POST['education_cn'],
        'experience_cn'=>$_POST['experience_cn'],
        'age'=>$_POST['minage'].'-'.$_POST['maxage'],
       // 'contact'=>$_POST['contact'],
        //'contact_show'=>$_POST['contact_show'],
        //'telephone'=>$_POST['telephone'],
        //'telephone_show'=>$_POST['telephone_show'],
        //'email'=>$_POST['email'],
        //'email_show'=>$_POST['email_show'],
        //'address'=>$_POST['address'],
//        'telephone_two'=>$_POST['telephone_two'],
        );
       Yii::$app->db->createCommand()->insert('jobs',$arr)->execute();
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

    //企业资料
    public function actionCompany_profile(){
        $uid=Yii::$app->session->get('id');
        echo $uid;die;
        //城市
        $category_one=Category_district::find()->where(['parentid'=>'0'])->asArray()->all();
        $category_district=Category_district::find()->asArray()->all();
        return $this->render("company_profile",['category_one'=>$category_one,'category_district'=>$category_district]);
    }

	

}