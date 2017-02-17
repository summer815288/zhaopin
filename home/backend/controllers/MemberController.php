<?php
namespace backend\controllers;

use backend\models\Members;
use backend\models\Members_info;
use backend\models\Members_log;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\Easyguide;
use yii\data\Pagination;


/**
 *
 */
class MemberController extends Controller
{
    public $layout = false;

    //简历列表的展示
    public function actionResume(){

               $member=Yii::$app->db->createCommand("select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid")->queryAll();

        return $this->render('resume_list',['member'=>$member]);

    }

    //邮件营销（该网站给个人用户发送的消息）
    public  function actionEmail(){

        $email=Yii::$app->request->get('email');
        //$email=$_GET['email'];

        return     $this->render('resume_email.php',['email'=>$email]);


    }




    //邮件营销（该网站给个人用户发送的消息）
    public  function actionEmails(){

        $data=Yii::$app->request->post();
        unset($data['csrf-backend']);
        $data['content']=strip_tags($data['content']);
        $data['send_from']="猎鹰招聘网";

        return     $this->render('email',['data'=>$data]);


    }

    //日志查看
    public function actionMembers_log(){

        $uid=Yii::$app->request->get('uid');
        $all=Members_log::find()->where(['log_uid'=>2]);
        $pages = new Pagination([

            'totalCount' => $all->count(),  //总的页数
            'pageSize'   => 3   //每页显示条数
        ]);


        $log = $all->offset($pages->offset)->limit($pages->limit)->all();

        if(Yii::$app->request->isAjax)
        {
            return $this->renderPartial('members_log',['log'=>$log,'pages'=>$pages]);
        }
        else
        {
            return $this->render('members_log',['log'=>$log,'pages'=>$pages]);
        }

//        return     $this->render('members_log',['log'=>$log,'pages'=>$pages]);


    }

    //查看简历信息
    public function actionMembers_show(){

        $uid=$_GET['uid'];
        $pid=$_GET['id'];
        $sql="select * from  `members_info` join `resume` on `members_info`.uid=`resume`.uid  join `resume_education` on `resume`.id=`resume_education`.pid  join `resume_work` on`resume_education`.pid=`resume_work`.pid  where `resume`.id='$pid'and `resume`.uid='$uid'";
        $info=Yii::$app->db->createCommand($sql)->queryAll();
//        print_r($info);die;
        return   $this->render("members_show",['info'=>$info]);






    }



}