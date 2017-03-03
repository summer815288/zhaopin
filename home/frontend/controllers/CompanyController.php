<?php
namespace frontend\controllers;

use backend\models\Members;
use Codeception\Module\Memcache;
use Yii;
use frontend\models\ContactForm;
use frontend\models\Category;
use frontend\models\Category_district;
use frontend\models\Company_profile;
use frontend\models\Category_jobs;
use frontend\models\Jobs;
use frontend\models\Color;
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
        //用户id
        $uid=Yii::$app->session->get('uid');
        //薪资
        $wage_cn=Category::find()->where(['c_alias'=>'QS_wage'])->asArray()->all();
        //学历
        $education_cn=Category::find()->where(['c_alias'=>'QS_education'])->asArray()->all();
        //工作经验
        $experience_cn=Category::find()->where(['c_alias'=>'QS_experience'])->asArray()->all();
        //职业亮点
        $redstar=Category::find()->where(['c_alias'=>'QS_jobtag'])->asArray()->all();
        //联系方式也是用与和jobs_contact表连接数据
        $company_profile=Company_profile::find()->where(['uid'=>"$uid"])->asArray()->all();
//        print_r($company_profile[0]);die;
        //职业类别
        $category_jobs_parents=Category_jobs::find()->where(['parentid'=>'0'])->asArray()->all();
        $category_jobs=Category_jobs::find()->asArray()->all();
        //城市
        $category_one=Category_district::find()->where(['parentid'=>'0'])->asArray()->all();
        $category_district=Category_district::find()->asArray()->all();
        return $this->render("create",['wage_cn'=>$wage_cn,'education_cn'=>$education_cn,'experience_cn'=>$experience_cn,'company_profile'=>$company_profile[0],'redstar'=>$redstar,'category_jobs_parents'=>$category_jobs_parents,'category_jobs'=>$category_jobs,'category_one'=>$category_one,'category_district'=>$category_district]);
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
        $uid=$_POST['uid'];
        $company_profile=Company_profile::find()->where(['uid'=>"$uid"])->asArray()->all();
        if(empty($company_profile)){
            $title='发布新职位';
            $content='请先完善企业信息';
            $href="<?php echo Url::to(['company/create'])?>";
            return $this->render('success',['title'=>$title,'content'=>$content,'href'=>$href]);
        }
        $arr=array(
        'jobs_name'=>isset($_POST['jobs_name'])?$_POST['jobs_name']:'',
        'nature'=>isset($_POST['nature'])?$_POST['nature']:'',
        'nature_cn'=>isset($_POST['nature_cn'])?$_POST['nature_cn']:'',
        'topclass'=>isset($_POST['topclass'])?$_POST['topclass']:'',
        'category'=>isset($_POST['category'])?$_POST['category']:'',
        'subclass'=>isset($_POST['subclass'])?$_POST['subclass']:'',
        'category_cn'=>isset($_POST['category_cn'])?$_POST['category_cn']:'',
        'amount'=>isset($_POST['amount'])?$_POST['amount']:'',
        'district'=>isset($_POST['district'])?$_POST['district']:'',
        'sdistrict'=>isset($_POST['sdistrict'])?$_POST['sdistrict']:'',
        'district_cn'=>isset($_POST['district_cn'])?$_POST['district_cn']:'',
        'wage_cn'=>isset($_POST['wage_cn'])?$_POST['wage_cn']:'',
        'tag'=>isset($_POST['tag'])?$_POST['tag']:'',
        'tag_cn'=>isset($_POST['tag_cn'])?$_POST['tag_cn']:'',
        'sex_cn'=>isset($_POST['sex_cn'])?$_POST['sex_cn']:'',
        'sex'=>isset($_POST['sex'])?$_POST['sex']:'',
        'education'=>isset($_POST['education'])?$_POST['education']:'',
        'education_cn'=>isset($_POST['education_cn'])?$_POST['education_cn']:0,
        'experience'=>isset($_POST['experience'])?$_POST['experience']:'',
        'experience_cn'=>isset($_POST['experience_cn'])?$_POST['experience_cn']:0,
        'age'=>isset($_POST['minage'])?$_POST['minage']:''.'-'.isset($_POST['maxage'])?$_POST['maxage']:'',
        'contents'=>isset($_POST['contents'])?$_POST['contents']:'',
         'addtime'=>strtotime(isset($_POST['addtime'])?$_POST['addtime']:''),
         'deadline'=>strtotime(isset($_POST['deadline'])?$_POST['deadline']:''),
         'refreshtime'=>time(),
        'uid'=>$uid,
        'companyname'=>$company_profile[0]['companyname'],
        'company_id'=>$company_profile[0]['id'],
        'company_addtime'=>$company_profile[0]['addtime'],
        'company_audit'=>$company_profile[0]['audit'],
        'trade'=>$company_profile[0]['trade'],
        'trade_cn'=>$company_profile[0]['trade_cn'],
        'scale'=>$company_profile[0]['scale'],
        'scale_cn'=>$company_profile[0]['scale_cn'],
        'street'=>$company_profile[0]['street'],
        'street_cn'=>$company_profile[0]['street_cn'],
        );
        $win=Yii::$app->db->createCommand()->insert('jobs',$arr)->execute();
        if(!$win){
            echo"<script>alert('发布职位失败');window.la='index.php?r=company/create';</script>";die;
        }
        $pid=Yii::$app->db->lastInsertID;
        $contact_show=isset($_POST['contact_show'])?$_POST['contact_show']:0;
        $telephone_show=isset($_POST['telephone_show'])?$_POST['telephone_show']:0;
        $email_show=isset($_POST['email_show'])?$_POST['email_show']:0;
        $address_show=isset($_POST['address_show'])?$_POST['address_show']:0;
        $notify=isset($_POST['notify'])?$_POST['notify']:0;
        $notify_mobile=isset($_POST['notify_mobile'])?$_POST['notify_mobile']:0;
        $arr2 = array(
            'pid' => $pid,
            'contact' => isset($_POST['contact'])?$_POST['contact']:'',
            'contact_show' => $contact_show,
            'telephone' => isset($_POST['telephone_two'])?$_POST['telephone_two']:'',
            'telephone_show' =>$telephone_show,
            'email' => isset($_POST['email'])?$_POST['email']:'',
            'email_show' => $email_show,
            'address' => isset($_POST['address'])?$_POST['address']:'',
            'address_show' => $address_show,
            'email' =>isset($_POST['email'])?$_POST['email']:'',
            'notify' =>$notify,
            'notify_mobile' =>$notify_mobile,
        );
        $wins=Yii::$app->db->createCommand()->insert('jobs_contact',$arr2)->execute();
        if($wins){
            $title='发布职位';
            $content='发布职位成功';
            $href="index.php?r=company/create";
            return $this->render('success',['title'=>$title,'content'=>$content,'href'=>$href]);
        }else{
            $title='发布职位';
            $content='发布职位失败';
            $href="index.php?r=company/create";
            return $this->render('success',['title'=>$title,'content'=>$content,'href'=>$href]);
        }
    }
    //管理职位
    public function actionJobs(){
        $uid=Yii::$app->session->get('uid');
        $jobs=Jobs::find()->where(['uid'=>$uid])->asArray()->all();
        $color=Color::find()->asArray()->all();
        return $this->render("jobs",['jobs'=>$jobs,'color'=>$color,'uid'=>$uid]);
    }
    //职位套色
    public function actionJobs_color(){
        print_r($_POST);
        unset($_POST['_csrf']);
        $id=$_POST['id'];
        unset($_POST['id']);
        $data=$_POST;
        $success=Jobs::updateAll($data,['id'=>$id]);
        if($success){
            $title='管理职位';
            $content='职位套色成功';
            $href="index.php?r=company/jobs";
            return $this->render('success',['title'=>$title,'content'=>$content,'href'=>$href]);
        }else{
            $title='管理职位';
            $content='职位套色失败';
            $href="index.php?r=company/jobs";
            return $this->render('success',['title'=>$title,'content'=>$content,'href'=>$href]);
        }
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
        $uid=Yii::$app->session->get('uid');
        $members=Members::find()->where(['uid'=>$uid])->asArray()->all();
        $company_profile=Company_profile::find()->where(['uid'=>$uid])->asArray()->all();
		return $this->render("myhome",['members'=>$members[0],'company_profile'=>$company_profile[0]]);
	}


    //邀请面试
    public function actionRecruitment(){
        return $this->render('recruitment');
    }
    //收到的简历
    public function actionResumes(){
        return $this->render('resumes');
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

    //企业资料20
    public function actionCompany_profile(){
        $uid=Yii::$app->session->get('uid');//用户id
            //企业性质
            $experience_cn=Category::find()->where(['c_alias'=>'QS_company_type'])->asArray()->all();
            //所属行业
            $trade=Category::find()->where(['c_alias'=>'QS_major'])->asArray()->all();
            //企业规模
            $scale=Category::find()->where(['c_alias'=>'QS_scale'])->asArray()->all();
            //城市
            $category_one=Category_district::find()->where(['parentid'=>'0'])->asArray()->all();
            $category_district=Category_district::find()->asArray()->all();
            //所属街道
            $street=Category::find()->where(['c_alias'=>'QS_street'])->asArray()->all();
            return $this->render("company_profile",['uid'=>$uid,'experience_cn'=>$experience_cn,'trade'=>$trade,'scale'=>$scale,'category_one'=>$category_one,'category_district'=>$category_district,'street'=>$street]);

    }
    //企业资料入库
    public function actionCompany_profile_to()
    {
        unset($_POST['_csrf']);
        $data=$_POST;
        $data['audit']='2';
        $data['addtime']=time();
        $success=Yii::$app->db->createCommand()->insert('company_profile',$data)->execute();
        if($success){
            $title='企业信息';
            $content='恭喜您信息完善成功';
            $href="index.php?r=company/company_profile";
            return $this->render('success',['title'=>$title,'content'=>$content,'href'=>$href]);
        }else{
            $title='企业信息';
            $content='信息完善失败';
            $href="index.php?r=company/company_profile";
            return $this->render('success',['title'=>$title,'content'=>$content,'href'=>$href]);
        }
    }
//    //成功页面
//    public function actionSuccess($title,$content,$href){
//        return $this->render('success',['title'=>$title,'content'=>$content,'href'=>$href]);
//    }
	

}