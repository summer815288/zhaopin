<?php
namespace frontend\controllers;


use backend\models\Members_info;
use frontend\models\Resume;
use Yii;
use common\models\LoginForm;
use frontend\models\District;
use frontend\models\Category_jobs;
use frontend\models\Category_major;
use frontend\models\Category;
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
	public function actionResume_list()
	{

		return $this->render("resume_list");
	}



    //账号管理---基本资料
    public function actionMan(){

        //得到学历的一级分类
        $edu=Category::find()->where(['c_alias'=>'QS_education'])->asArray()->all();
        //得到专业的大分类
        $major=Category_major::find()->where(['parentid'=>'0'])->asArray()->all();
        //得到经验
        $experience=Category::find()->where(['c_alias'=>'QS_experience'])->asArray()->all();
        //得到邮箱号
        $email=Yii::$app->session->get('email');
        //得到登录日志
        $uid=Yii::$app->session->get('uid');
        $sql="select * from `members_log`where `log_uid`=$uid";
        $log=Yii::$app->db->createCommand($sql)->queryAll();

        //从发哦送的邮件中得到给我发送的消息（注意这里应该是得到我收到的信息，但是不知道邮箱中的呃东西怎么可以自动接收到）
        $sql="select * from `sys_email_log`where `send_to`='$email'";
        $msg=Yii::$app->db->createCommand($sql)->queryAll();
        return  $this->render('man',['edu'=>$edu,'major'=>$major,'experience'=>$experience,'email'=>$email,'log'=>$log,'msg'=>$msg]);
    }

    //得到学历的二级分类
    public function actionMajor(){
        //接收值
        $parentid=$_POST['id'];
        $ma=Category_major::find()->where(['parentid'=>$parentid])->asArray()->all();
        echo  json_encode($ma);

    }

    public function actionMan_log(){

        $uid=Yii::$app->session->get('uid');
        $sql="select * from `members_log`where `log_uid`=$uid";
        $log=Yii::$app->db->createCommand($sql)->queryAll();

        return $this->render('man_log',['log'=>$log]);

    }

    //创建简历
    public function  actionResume_create(){
        //得到目前状态
        $current=Category::find()->where(['c_alias'=>'QS_current'])->asArray()->all();
        //得到期望薪资
        $wage=Category::find()->where(['c_alias'=>'QS_wage'])->asArray()->all();
        //得到行业的大分类
        $trade=Category::find()->where(['c_alias'=>'QS_major'])->asArray()->all();
        //得到所有的地区 首先得到一级分类
        $district=District::find()->where(['parentid'=>0])->asArray()->all();
        //得到所有的一级职位
        $job=Category_jobs::find()->where(['parentid'=>0])->asArray()->all();
        $job_all=Category_jobs::find()->asArray()->all();

        return $this->render('resume_create',['current'=>$current,'trade'=>$trade,'wage'=>$wage,'district'=>$district,'job'=>$job,'job_all'=>$job_all]);

    }

    //简历展示
    public function actionResume_creat(){
        //接收表单中的值，通过uid得到用户的基础数据，然后一起入库
        $data=$_POST;
       // print_r($data);die;
        $uid=Yii::$app->session->get('uid');
        $arr=Members_info::find()->where(['uid'=>$uid])->asArray()->one();
        //print_r($arr);die;
        $time=time();
        //通过字段来输出完整度，简历的字段数
        foreach($data as $k=>$v){
            $arr[$k]=$v;
        }
       // print_r($arr);die;
        $complete_percent=ceil((count($arr)/42)*100)."%";

        $insert=Yii::$app->db->createCommand()->insert('resume',['uid'=>$uid,'title'=>$arr['title'],'fullname'=>$arr['realname'],'sex'=>$arr['sex'],'sex_cn'=>$arr['sex_cn'],'nature'=>$arr['nature'],'nature_cn'=>$arr['nature_cn'],'trade'=>$arr['trade'],'trade_cn'=>$arr['trade_cn'],'birthdate'=>$arr['birthday'],'householdaddress'=>$arr['householdaddress'],
        'height'=>$arr['height'],'marriage'=>$arr['marriage'],'marriage_cn'=>$arr['marriage_cn'],'experience'=>$arr['experience'],'experience_cn'=>$arr['experience_cn'],'district_cn'=>$arr['district_cn'],'wage'=>$arr['wage'],'wage_cn'=>$arr['wage_cn'],'education'=>$arr['education'],'education_cn'=>$arr['education_cn'],'major'=>$arr['major'],'major_cn'=>$arr['major_cn'],'telephone'=>$arr['phone'],'email'=>$arr['email'],'intention_jobs'=>$arr['intention_jobs'],'addtime'=>$time,'current'=>$arr['current'],'current_cn'=>$arr['current_cn'],'complete_percent'=>$complete_percent])->execute();

        if($insert){
            //查找信息
            $id=Yii::$app->db->getLastInsertID();
            $info=Resume::find()->where(['id'=>$id])->one();
            $education=Category::find()->where(['c_alias'=>'QS_education'])->asArray()->all();
            return $this->render('resume_creat',['info'=>$info,'education'=>$education]);
        }

    }




    public function actionDistrict(){
        //接收传过来的值，返回前台数据
        $id=$_POST['id'];
        $data=District::find()->where(['parentid'=>$id])->asArray()->all();
        echo json_encode($data);
    }


    //添加个人基本信息
    public function  actionMans(){
        $data=$_POST;
        //print_r($data);die;
        $uid=Yii::$app->session->get('uid');
        $sql="insert into `members_info` values(null,'$uid','$data[realname]','$data[sex]','$data[sex_cn]','$data[birthday]','$data[residence]','$data[education]','$data[education_cn]','$data[major]','$data[major_cn]','$data[experience]','$data[experience_cn]','$data[phone]','$data[email]','$data[height]','$data[householdaddress]','$data[marriage]','$data[marriage_cn]')";
        Yii::$app->db->createCommand($sql)->execute();
        return $this->redirect(['person/man']);

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