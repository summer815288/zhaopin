<?php

namespace frontend\controllers;

use frontend\controllers\CommonController;
use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\Resume;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\Pagination; 
use yii\db\Query;

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

		//简历
		$resume = yii::$app->db->createCommand("select * from resume")->queryAll();	

		return $this->render("index",['list'=>$list,'jobs'=>$jobs,'news'=>$news,'resume'=>$resume]);
	}



	//公司
	public function actionCompany()
	{
		//行业领域
		$data = [];
		$trade = yii::$app->db->createCommand("select c_name from category where c_alias='QS_trade'")->queryAll();
		//公司
		$company = yii::$app->db->createCommand("select * from company_profile")->queryAll();
		$id =array();
		foreach($company as $k=>$v){
			$data[$k] = $v;
			// $id[$k] =$v['id'];
			$jobs = yii::$app->db->createCommand("select jobs_name,tag_cn from jobs where company_id='$v[id]'")->queryAll();
			// print_r($jobs);die;
			$data[$k]['job']=$jobs;			
		}
		// print_r($data);die;
		return $this->render("companylist",['trade'=>$trade,'data'=>$data]);
	}

	

	//发布职位
	public function actionCreate()
	{
		return $this->render("create");
	}

	//职位列表
	public function actionMlist()
	{
		$job=yii::$app->request->get('job');
		$list=yii::$app->db->createCommand("select * from jobs where jobs_name='$job'")->queryAll();
//		print_r($list);die;
		if($list)
		{
			return $this->render('mlist',['list'=>$list]);
		}else{
			echo "<script>alert('暂时还没有相关职位，请看看其他的吧！');history.go(-1);</script>";
		}

	}


	//查看更多
	public function actionList()
	{
		//月薪
		$wage_cn=yii::$app->db->createCommand("select c_name from category where c_alias='QS_wage'")->queryAll();
		// print_r($wage_cn);die;
		//工作经验
		$experience_cn=yii::$app->db->createCommand("select c_name from category where c_alias='QS_experience'")->queryAll();
		// print_r($experience_cn);die;
		//学历
		$education_cn=yii::$app->db->createCommand("select c_name from category where c_alias='QS_education'")->queryAll();
		//工作性质
		$nature_cn=yii::$app->db->createCommand("select c_name from category where c_alias='QS_jobs_nature'")->queryAll();
		
		$district=yii::$app->db->createCommand("select * from category_district limit 6")->queryAll();
		$category_district=yii::$app->db->createCommand("select * from category_district")->queryAll();
		$address=$this->getLev($category_district);
        
		$where = [];
		$wage = isset($_GET['yx']) ? $_GET['yx'] : "" ;		
		if(!empty($wage))
		{
			$where = ['=','wage_cn',"$wage"];
		}

		$experience = isset($_GET['gj']) ? $_GET['gj'] : "" ;		
		if(!empty($experience))
		{
			$where = ['=','experience_cn',"$experience"];
		}

		$education = isset($_GET['xl']) ? $_GET['xl'] : "" ;		
		if(!empty($education))
		{
			$where = ['=','education_cn',"$education"];
		}

		$nature = isset($_GET['gx']) ? $_GET['gx'] : "" ;		
		if(!empty($nature))
		{
			$where = ['=','nature_cn',"$nature"];
		}


		$kd = isset($_GET['kd']) ? $_GET['kd'] : "";
		if(!empty($kd))
		{
			$where = ['like','jobs_name',"$kd"];
		}

		$hot = isset($_GET['hot']) ? $_GET['hot'] : "";
		if(!empty($hot))
		{
			$where = ['like','jobs_name',"$hot"];
		}
		
		$query = new Query();
		$a = $query->from('jobs')->where($where)->all();
		
	
		$count = $query->count();
        $pages = new Pagination([
        		'totalCount' => $count,
        		'pageSize'   => 5   //每页显示条数
        	]);
    	$models = $query->offset($pages->offset)
    		->limit($pages->limit)
    		->all();


		return $this->render("list",['wage_cn'=>$wage_cn,
			'experience_cn'=>$experience_cn,
			'education_cn'=>$education_cn,
			'nature_cn'=>$nature_cn,
			// 'jobs'=>$jobs,
			'district'=>$district,
			'address'=>$address,
			'pages'=>$pages,
			'models'=>$models
			]);
	}

	//投递简历
	public function actionToudi()
	{

		$id = $_GET['id'];
		$jobs = yii::$app->db->createCommand("select * from jobs where id=$id")->queryAll();
		//print_r($jobs);die;
		//得到当前用户的简历
		$uid = Yii::$app->session->get('uid');
		$resume = Resume::find()->where(['uid' => $uid])->asArray()->all();
		return $this->render('toudi',['jobs'=>$jobs,'resume'=>$resume]);
	}

	//收藏
	public function actionCollect()
	{
		$id=yii::$app->request->post('id');
//		echo $id;die;
		$uid=Yii::$app->session->get('uid');
//		echo $uid;die;
		$jid=yii::$app->db->createCommand("select jid from collect where uid=$uid")->queryAll();
		if($jid)
		{
			foreach ($jid as $k =>$value)
			{
				$a[$k]=$value['jid'];
			}
			if(in_array($id,$a))
			{
				echo "已收藏";
			}
			else
			{
				yii::$app->db->createCommand("insert into collect VALUES (null,'$uid','$id')")->execute();
				echo "收藏成功";
			}
		}else{
			yii::$app->db->createCommand("insert into collect VALUES (null,'$uid','$id')")->execute();
			echo "收藏成功";
		}

	}




    //个人收藏职位
    public function actionCollection(){
        //接收值，然后入库，返回前台
        $id=$_POST['id'];
        $uid=Yii::$app->session->get('uid');
        $sql="select * from `collect` where `jid`=$id and `uid`=$uid";
        $arr=Yii::$app->db->createCommand($sql)->queryone();
        if($arr){
            echo 2;
        }else{

            $insert=Yii::$app->db->createCommand()->insert('collect',['uid'=>$uid,'jid'=>$id])->execute();
            if($insert){
                echo 1;
            }else{
                echo 0;
            }

        }




    }




    	public function actionDeliever(){
        $data=$_POST;
        $data['apply_addtime']=time();
        $data['notes']=$data['resume_name']."申请职位";
        $insert=Yii::$app->db->createCommand()->insert('personal_jobs_apply',$data)->execute();
        if($insert){
            echo 1;
        }else{
            echo 0;
        }
    }





    //投简历公司介绍
    public function actionCompany_jobs(){
        return $this->render('company_jobs');
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