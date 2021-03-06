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
        $uid=Yii::$app->session->get('uid');
        $resume=Resume::find()->where(['uid'=>$uid])->asArray()->all();

        return $this->render("resume_list",['resume'=>$resume]);
	}

    //申请职位
    public function  actionResume_deliever(){
        //通过uid查找
        $uid=Yii::$app->session->get('uid');
        $sql="select * from `personal_jobs_apply` ";
        $data=Yii::$app->db->createCommand($sql)->queryAll();
        $count=count($data);
        //没看的
        $sql2="select * from `personal_jobs_apply` where `personal_look`=1 ";
        $data2=Yii::$app->db->createCommand($sql2)->queryAll();
        $count2=count($data2);
        //看了的
        $sql3="select * from `personal_jobs_apply` where `personal_look`=2 ";
        $data3=Yii::$app->db->createCommand($sql3)->queryAll();
        $count3=count($data3);

       return $this->render('resume_deliever',['data'=>$data,'count'=>$count,'data2'=>$data2,'count2'=>$count2,'data3'=>$data3,'count3'=>$count3]) ;

    }

    //面试邀请
    public function actionInterview(){

        //得到本用户的Uid,进行查找的操作
        $uid=Yii::$app->session->get('uid');

        $sql="select * from `company_interview` where `resume_uid`=$uid";
        $data=Yii::$app->db->createCommand($sql)->queryAll();
        $count=count($data);
        //没看的
        $sql2="select * from `company_interview` where `personal_look`=1 ";
        $data2=Yii::$app->db->createCommand($sql2)->queryAll();
        $count2=count($data2);
        //看了的
        $sql3="select * from `company_interview` where `personal_look`=2 ";
        $data3=Yii::$app->db->createCommand($sql3)->queryAll();
        $count3=count($data3);
        return $this->render('resume_interview',['data'=>$data,'count'=>$count,'data2'=>$data2,'count2'=>$count2,'data3'=>$data3,'count3'=>$count3]) ;


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
            $this->redirect('index.php?r=person/resume_crea&pid='.$id);
        }

    }

    //现在相当于是简历展示页面
    public function actionResume_crea(){
        $pid=$_GET['pid'];
        @$id=$_GET['id'];
        $uid=Yii::$app->session->get('uid');
        $info=Resume::find()->where(['id'=>$pid])->one();
        $education=Category::find()->where(['c_alias'=>'QS_education'])->asArray()->all();
        $edu=Yii::$app->db->createCommand("select * from `resume_education` where `uid`=$uid and `pid`=$pid")->queryAll();
        return $this->render('resume_creat',['edu'=>$edu,'info'=>$info,'education'=>$education]);

    }

    //教育经历的修改
    public function actionAeducation_update(){
        $edu=$_POST;
        //print_r($edu);die;
        $uid=Yii::$app->session->get('uid');
        //要修改的字段
        if(!isset($edu['todate'])){
            $arr=[
                'school'=>$edu['school'],
                'speciality'=>$edu['speciality'],
                'education_cn'=>$edu['education_cn'],
                'education'=>$edu['education'],
                'startyear'=>$edu['startyear'],
                'startmonth'=>$edu['startmonth'],
                'endyear'=>$edu['endyear'],
                'endmonth'=>$edu['endmonth'],
                'todate'=>0

            ];
        }else if($edu['todate']==1){
            $arr=[
                'school'=>$edu['school'],
                'speciality'=>$edu['speciality'],
                'education_cn'=>$edu['education_cn'],
                'education'=>$edu['education'],
                'startyear'=>$edu['startyear'],
                'startmonth'=>$edu['startmonth'],
                'todate'=>$edu['todate']

            ];
        }
        //要修改的条件
        $where=['uid'=>$uid,'id'=>$edu['id']];

        $update=Yii::$app->db->createCommand()->update('resume_education',$arr,$where)->execute();
        $this->redirect('index.php?r=person/resume_crea&pid='.$edu['pid']);

    }

    //教育经历的删除
    public function actionAducation_del(){
        $id=$_POST['id'];
        $pid=$_POST['pid'];
        $del=Yii::$app->db->createCommand()->delete('resume_education',['id'=>$id,'pid'=>$pid])->execute();
        if($del){
            echo 1;
        }else{
            echo 0;
        }

    }

    //添加教育资料信息
    public function actionAeducation(){
        $edu=$_POST;
        $uid=Yii::$app->session->get('uid');

        if(!isset($edu['todate'])){
            $arr=[
                'pid'=>$edu['pid'],
                'uid'=>$uid,
                'school'=>$edu['school'],
                'speciality'=>$edu['speciality'],
                'education_cn'=>$edu['education_cn'],
                'education'=>$edu['education'],
                'startyear'=>$edu['startyear'],
                'startmonth'=>$edu['startmonth'],
                'endyear'=>$edu['endyear'],
                'endmonth'=>$edu['endmonth'],

            ];
        }else if($edu['todate']==1){
            $arr=[
                'pid'=>$edu['pid'],
                'uid'=>$uid,
                'school'=>$edu['school'],
                'speciality'=>$edu['speciality'],
                'education_cn'=>$edu['education_cn'],
                'education'=>$edu['education'],
                'startyear'=>$edu['startyear'],
                'startmonth'=>$edu['startmonth'],
                'todate'=>1

            ];
        }

        $insert=Yii::$app->db->createCommand()->insert('resume_education',$arr)->execute();
        if($insert){

            $this->redirect('index.php?r=person/resume_crea&pid='.$arr['pid']);


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

    public function actionImg(){
        //接收值
        $id=$_POST['id'];
        $photo=$_POST['photo'];
        //设置文件名
        $img=date('Y-m-d',time()).$id.".jpg";
        //移动文件
        $imgs=move_uploaded_file($_FILES['img']['tmp_name'],"uploads/".$img);
        if($imgs){
                //进行更新的操作
                Yii::$app->db->createCommand()->update('resume',['photo_img'=>$img,'photo'=>1],['id'=>$id])->execute();
                $this->redirect('index.php?r=person/resume_crea&pid='.$id);
        }else{
            echo "<script>alert('图片上传失败，请重新上传');history.go(-1)</script>";

        }

    }

    //简历发布完成页面
    public function  actionResume_finish(){
        $id=$_GET['id'];
        //展示出完成页面
     return    $this->render('resume_finish',['id'=>$id]);

    }
    //简历最终版的展示
    public function actionResume_end(){
        $id=$_GET['id'];  //这是简历的id
        $sql="select * from `resume` where id=$id";
        $sql1="select * from `resume_education` where pid=$id";
        $sql2="select * from `resume_work` where pid=$id";
        $sql3="select * from `resume_language` where pid=$id";
        $sql4="select * from `resume_credent` where pid=$id";
        $sql5="select * from `resume_img` where pid=$id";   //查找附件照片
        $info=Yii::$app->db->createCommand($sql)->queryOne();
        $edu=Yii::$app->db->createCommand($sql1)->queryAll();
        $work=Yii::$app->db->createCommand($sql2)->queryAll();
        $language=Yii::$app->db->createCommand($sql3)->queryAll();
        $credent=Yii::$app->db->createCommand($sql4)->queryAll();
        $img=Yii::$app->db->createCommand($sql5)->queryAll();
        //print_r($edu);die;

        return $this->render('resume_end',['id'=>$id,'info'=>$info,'edu'=>$edu,'work'=>$work,'language'=>$language,'credent'=>$credent,'img'=>$img]);


    }

    //简历最终版的展示
    public function actionResume_ends(){
        $id=$_GET['id'];  //这是简历的id
        $sql="select * from `resume` where id=$id";
        $sql1="select * from `resume_education` where pid=$id";
        $sql2="select * from `resume_work` where pid=$id";
        $sql3="select * from `resume_language` where pid=$id";
        $sql4="select * from `resume_credent` where pid=$id";
        $sql5="select * from `resume_img` where pid=$id";   //查找附件照片
        $info=Yii::$app->db->createCommand($sql)->queryOne();
        $edu=Yii::$app->db->createCommand($sql1)->queryAll();
        $work=Yii::$app->db->createCommand($sql2)->queryAll();
        $language=Yii::$app->db->createCommand($sql3)->queryAll();
        $credent=Yii::$app->db->createCommand($sql4)->queryAll();
        $img=Yii::$app->db->createCommand($sql5)->queryAll();
        //print_r($edu);die;

        return $this->render('resume_ends',['id'=>$id,'info'=>$info,'edu'=>$edu,'work'=>$work,'language'=>$language,'credent'=>$credent,'img'=>$img]);


    }



    //职位收藏夹
    public function actionCollection(){
        $uid=Yii::$app->session->get('uid');
        $sql="select * from `collect` join `jobs`   on `collect`.`jid`=`jobs`.id where `collect`.uid=$uid";
        $data=Yii::$app->db->createCommand($sql)->queryAll();
        //print_r($data);die;

        return $this->render('resume_collection',['data'=>$data]);

    }




	//收藏的职位
	public function actionCollections()
	{
        $uid=Yii::$app->session->get('uid');
        $collect=yii::$app->db->createCommand("select * from collect INNER JOIN jobs on collect.jid=jobs.id where collect.uid=$uid")->queryAll();
		return $this->render("collections",['collect'=>$collect]);
	}
    
    public function actionCollectdel()
    {
        $id=yii::$app->request->post('id');
        $uid=Yii::$app->session->get('uid');
        $re=yii::$app->db->createCommand("delete from collect where uid=$uid and jid=$id")->execute();
        if($re)
        {
            echo 1;
        }
    }


	//我的订阅
	public function actionSubscribe()
	{
		return $this->render("subscribe");
	}



}