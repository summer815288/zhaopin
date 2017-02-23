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
class MemberController extends  CommonController
{
    public $layout = false;

    //简历列表的展示
    public function actionResume(){

                //接收get传过来的值；然后进行带条件的查找
                if(!isset($_GET['key'])||empty($_GET['key'])){
                    $key="";
                    $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid" ;
                }else{
                    $key=$_GET['key'];
                    $keyup_id=$_GET['keyup_id'];
                    if($keyup_id==1){
                        $keyup='fullname';
                        $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where resume.`$keyup` like '%$key%'" ;

                    }else if($keyup_id==2){
                        $keyup='id';
                        $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where resume.`$keyup`='$key'" ;

                    }else if($keyup_id==3){
                        $keyup='uid';
                        $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where resume.`$keyup`='$key'" ;

                    }else if($keyup_id==4){
                        $keyup='telephone';
                        $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where resume.`$keyup`='$key'" ;


                    }else if($keyup_id==5) {
                        $keyup = 'householdaddress';
                        $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where resume.`$keyup` like '%$key%'" ;

                    }


                }
               $member=Yii::$app->db->createCommand($sql)->queryAll();
        //print_r($member);die;

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

        //首先接值，然后发送，发送成功之后进行插入的sql语句
        $data=Yii::$app->request->post();
        unset($data['csrf-backend']);
        //php验证
        if($data['content']==""){
            echo "<script>alert('邮件内容不能为空');history.go(-1)</script>";die;
        }else if($data['subject']==""){
            echo"<script>alert('邮件标题不能为空');history.go(-1)</script>";die;
        }


        $data['content']=strip_tags($data['content']);
        $data['send_from']="猎鹰招聘网";

        $mail = \Yii::$app->mailer->compose()
            ->setFrom(['18335103240@163.com'=>'summer'])
            ->setTo($data['send_to'])
            ->setSubject($data['subject'])
            //->setTextBody('Yii中文网教程真好 www.yii-china.com')   //发布纯文字文本
            ->setHtmlBody($data['content'])    //发布可以带html标签的文本
            ->send();
        //使用send函数进行发送
        $data['sendtime']=time();
        if($mail) {

            $sql="insert into `sys_email_log` values(null,'$data[send_from]','$data[send_to]','$data[subject]','$data[content]','发送成功','$data[sendtime]')";
            $insert=Yii::$app->db->createCommand($sql)->execute();
            if($insert==1){
                echo  "<script>alert('发送成功，请查看邮箱');location.href='http://localhost/zhaopin/home/backend/web/index.php?r=member/resume'</script>";

            }
        } else {
            $data['state']='发送失败';//如果发送失败，则返回错误提示
            $sql="insert into `sys_email_log` values(null,'$data[send_from]','$data[send_to]','$data[subject]','$data[content]','$data[state]','$data[sendtime]')";
            Yii::$app->db->createCommand($sql)->execute();
            echo  "<script>alert('发送失败');location.href='http://localhost/zhaopin/home/backend/web/index.php?r=member/resume'</script>";

        }
    }

    //日志查看
    public function actionMembers_log(){

        $uid=Yii::$app->request->get('uid');
        $all=Members_log::find()->where(['log_uid'=>$uid]);
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
        $sql1="select * from  `members_info` join `resume` on `members_info`.uid=`resume`.uid  where `resume`.id='$pid'and `resume`.uid='$uid'";
        $sql2="select * from `resume_education` where `pid`='$pid' and `uid`='$uid'";
        $sql3="select * from `resume_work` where `pid`='$pid' and `uid`='$uid'";

        $info=Yii::$app->db->createCommand($sql1)->queryAll();
        $education=Yii::$app->db->createCommand($sql2)->queryAll();
        $work=Yii::$app->db->createCommand($sql3)->queryAll();
//         print_r($work);die;
        return   $this->render("members_show",['info'=>$info[0],'education'=>$education,'work'=>$work]);

    }

    //待审核简历的展示
    public function actionResume_wait(){
        //接收get传过来的值；然后进行带条件的查找
        if(!isset($_GET['key'])||empty($_GET['key'])){
            $key="";
            $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where `resume`.`audit`=2" ;
        }else{
            $key=$_GET['key'];
            $keyup_id=$_GET['keyup_id'];
            if($keyup_id==1){
                $keyup='fullname';
                $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where `resume`.`audit`=2 and resume.`$keyup` like '%$key%'" ;

            }else if($keyup_id==2){
                $keyup='id';
                $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where `resume`.`audit`=2  resume.`$keyup`='$key'" ;

            }else if($keyup_id==3){
                $keyup='uid';
                $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where `resume`.`audit`=2  resume.`$keyup`='$key'" ;

            }else if($keyup_id==4){
                $keyup='telephone';
                $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where `resume`.`audit`=2  resume.`$keyup`='$key'" ;


            }else if($keyup_id==5) {
                $keyup = 'householdaddress';
                $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where `resume`.`audit`=2  resume.`$keyup` like '%$key%'" ;

            }
        }

        $member=Yii::$app->db->createCommand($sql)->queryAll();

        return $this->render('resume_wait',['member'=>$member]);
    }




    //批量进行处理 //修改成功之后弹出框同时再次刷新回到当前页面
    public function actionAudit(){
        $data=$_POST;
        $sql="update `resume` set `audit`='$data[audit]' where `id` in ($data[ids])";
       Yii::$app->db->createCommand($sql)->execute();

        //入简历报告表
        $r_id=explode(",",$data['ids']);
        $time=time();
        foreach($r_id as $v){
            $sql2="insert into `report_resume`(resume_id,title,report_type,audit,content,addtime) values('$v','通知','简历审核结果','$data[audit]','$data[reason]','$time')";
            Yii::$app->db->createCommand($sql2)->execute();
        }

        return  $this->redirect("index.php?r=member/".$data['win']);


    }

    //批量进行处理人才等级
    public function actionTalent(){
        $data=$_POST;
        $sql="update `resume` set `talent`='$data[talent]' where `id` in ($data[ids])";
        Yii::$app->db->createCommand($sql)->execute();
        return  $this->redirect("index.php?r=member/".$data['win']);

    }

    //批量进行处理照片批量审核
    public function actionPhoto_audit(){
        $data=$_POST;
        $sql="update `resume` set `photo_audit`='$data[photo_audit]' where `id` in ($data[ids])";
        Yii::$app->db->createCommand($sql)->execute();
        return  $this->redirect("index.php?r=member/".$data['win']);
    }

    //批量删除
    public function actionDel(){

        //首先接收值，然后删除的sql语句
        $ids=$_POST['ids'];
        $sql="delete from `resume` where id in ($ids)";
        Yii::$app->db->createCommand($sql)->execute();

        //入简历报告表
        $r_id=explode(",",$ids);
        $time=time();
        foreach($r_id as $v){
            $sql2="insert into `report_resume`(resume_id,title,report_type,content,addtime) values('$v','通知','简历删除结果','删除成功','$time')";
            Yii::$app->db->createCommand($sql2)->execute();

        }
        echo "1";
    }

    //展示高级人才
    public function actionResume_talent(){
        //接收get传过来的值；然后进行带条件的查找
        if(!isset($_GET['key'])||empty($_GET['key'])){
            $key="";
            $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where `resume`.`audit`=1 and `resume`.`talent`=2" ;
        }else{
            $key=$_GET['key'];
            $keyup_id=$_GET['keyup_id'];
            if($keyup_id==1){
                $keyup='fullname';
                $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where`resume`.`audit`=1 and  `resume`.`talent`=2 and resume.`$keyup` like '%$key%'" ;

            }else if($keyup_id==2){
                $keyup='id';
                $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where `resume`.`audit`=1 and  `resume`.`talent`=2  resume.`$keyup`='$key'" ;

            }else if($keyup_id==3){
                $keyup='uid';
                $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where `resume`.`audit`=1 and  `resume`.`audit`=2  resume.`$keyup`='$key'" ;

            }else if($keyup_id==4){
                $keyup='telephone';
                $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where `resume`.`audit`=1 and  `resume`.`audit`=2  resume.`$keyup`='$key'" ;


            }else if($keyup_id==5) {
                $keyup = 'householdaddress';
                $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where  `resume`.`audit`=1 and  `resume`.`audit`=2  resume.`$keyup` like '%$key%'" ;

            }
        }

        $member=Yii::$app->db->createCommand($sql)->queryAll();

        return $this->render('resume_talent',['member'=>$member]);
    }

    //展示待开通高级人才
    public function actionResume_talent_wait(){
        //接收get传过来的值；然后进行带条件的查找
        if(!isset($_GET['key'])||empty($_GET['key'])){
            $key="";
            $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where `resume`.`audit`=1 and  `resume`.`talent`=3" ;
        }else{
            $key=$_GET['key'];
            $keyup_id=$_GET['keyup_id'];
            if($keyup_id==1){
                $keyup='fullname';
                $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where `resume`.`audit`=1 and `resume`.`talent`=3 and resume.`$keyup` like '%$key%'" ;

            }else if($keyup_id==2){
                $keyup='id';
                $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where `resume`.`audit`=1 and `resume`.`talent`=3  resume.`$keyup`='$key'" ;

            }else if($keyup_id==3){
                $keyup='uid';
                $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where `resume`.`audit`=1 and `resume`.`audit`=3  resume.`$keyup`='$key'" ;

            }else if($keyup_id==4){
                $keyup='telephone';
                $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where `resume`.`audit`=1 and `resume`.`audit`=3  resume.`$keyup`='$key'" ;


            }else if($keyup_id==5) {
                $keyup = 'householdaddress';
                $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where `resume`.`audit`=1 and `resume`.`audit`=3  resume.`$keyup` like '%$key%'" ;

            }
        }

        $member=Yii::$app->db->createCommand($sql)->queryAll();

        return $this->render('resume_talent_wait',['member'=>$member]);
    }

    //展示照片简历
    public function actionResume_photo(){
        //接收get传过来的值；然后进行带条件的查找
        if(!isset($_GET['key'])||empty($_GET['key'])){
            $key="";
            $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where  `resume`.`audit`=1 and `resume`.`photo`>0" ;
        }else{
            $key=$_GET['key'];
            $keyup_id=$_GET['keyup_id'];
            if($keyup_id==1){
                $keyup='fullname';
                $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where  `resume`.`audit`=1 and `resume`.`photo`>0 and resume.`$keyup` like '%$key%'" ;

            }else if($keyup_id==2){
                $keyup='id';
                $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where  `resume`.`audit`=1 and `resume`.`photo`>0  and  resume.`$keyup`='$key'" ;

            }else if($keyup_id==3){
                $keyup='uid';
                $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where`resume`.`audit`=1 and `resume`.`photo`>0  and  resume.`$keyup`='$key'" ;

            }else if($keyup_id==4){
                $keyup='telephone';
                $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where`resume`.`audit`=1 and `resume`.`photo`>0  and  resume.`$keyup`='$key'" ;


            }else if($keyup_id==5) {
                $keyup = 'householdaddress';
                $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where`resume`.`audit`=1 and `resume`.`photo`>0  and  resume.`$keyup` like '%$key%'" ;

            }
        }

        $member=Yii::$app->db->createCommand($sql)->queryAll();

        return $this->render('resume_photo',['member'=>$member]);
    }

    //展示待审核照片简历
    public function actionResume_photo_wait(){
        //接收get传过来的值；然后进行带条件的查找
        if(!isset($_GET['key'])||empty($_GET['key'])){
            $key="";
            $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where  `resume`.`audit`=1 and `resume`.`photo_audit`=2" ;
        }else{
            $key=$_GET['key'];
            $keyup_id=$_GET['keyup_id'];
            if($keyup_id==1){
                $keyup='fullname';
                $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where  `resume`.`audit`=1 and `resume`.`photo_audit`=2 and resume.`$keyup` like '%$key%'" ;

            }else if($keyup_id==2){
                $keyup='id';
                $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where  `resume`.`audit`=1 and `resume`.`photo_audit`=2 and  resume.`$keyup`='$key'" ;

            }else if($keyup_id==3){
                $keyup='uid';
                $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where`resume`.`audit`=1 and `resume`.`photo_audit`=2  and  resume.`$keyup`='$key'" ;

            }else if($keyup_id==4){
                $keyup='telephone';
                $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where`resume`.`audit`=1 and `resume`.`photo_audit`=2  and  resume.`$keyup`='$key'" ;


            }else if($keyup_id==5) {
                $keyup = 'householdaddress';
                $sql="select * from `resume` join `members_info` on `resume`.uid=`members_info`.uid where`resume`.`audit`=1 and `resume`.`photo_audit`=2  and  resume.`$keyup` like '%$key%'" ;

            }
        }

        $member=Yii::$app->db->createCommand($sql)->queryAll();

        return $this->render('resume_photo_wait',['member'=>$member]);
    }

    //展示个人会员
    public function actionMembers_info(){
        //查找的sql语句

        //接收get传过来的值；然后进行带条件的查找
        if(!isset($_GET['key'])||empty($_GET['key'])){
            $key="";
            $sql="select * from `members` where `utype`=2 and `status`=1";
        }else{
            $key=$_GET['key'];
            $keyup_id=$_GET['keyup_id'];
            if($keyup_id==1){
                $keyup='username';
                $sql="select * from `members` where `utype`=2  and `status`=1  and `$keyup` like '%$key%'" ;

            }else if($keyup_id==2){
                $keyup='uid';
                $sql="select * from `members` where `utype`=2 and `status`=1  and  `$keyup`= '%$key%'" ;

            }else if($keyup_id==3){
                $keyup='email';
                $sql="select * from `members` where `utype`=2 and `status`=1  and  `$keyup` = '%$key%'" ;

            }else if($keyup_id==4){
                $keyup='mobile';
                $sql="select * from `members` where `utype`=2  and `status`=1  and  `$keyup`='%$key%'" ;

            }
        }

        $member=Yii::$app->db->createCommand($sql)->queryAll();
        //print_r($member);die;

        return $this->render('members_info',['member'=>$member]);

    }

    //个人会员的批量删除
    public function actionDels(){

//        print_r($_POST);die;
        //首先接收值，然后进行判断，删除的sql语句
        $ids=$_POST['ids'];
        if(isset($_POST['dels_user'])){
            $sql1="delete from `members` where uid in ($ids)";
            $sql2="delete from `members_info` where uid in ($ids)";
            Yii::$app->db->createCommand($sql1)->execute();
            Yii::$app->db->createCommand($sql2)->execute();
            if(isset($_POST['dels_resume'])){
                $sql="delete from `resume` where uid in ($ids)";
                Yii::$app->db->createCommand($sql)->execute();
            }

        }else{
            if(isset($_POST['dels_resume'])){
                $sql="delete from `resume` where uid in ($ids)";
                Yii::$app->db->createCommand($sql)->execute();
            }
        }
        return  $this->redirect("index.php?r=member/members_info");



    }

    //个人会员的添加
    public function actionMembers_add(){

        return $this->render('members_add');

    }
    //个人会员的添加操作
    public function actionMembers_adds(){
        $data=$_POST;
        $sql="insert into `members` (utype,username,email,password) values ('2','$data[username]','$data[email]','$data[password]')";
        $num=Yii::$app->db->createCommand($sql)->execute();
        $uid=Yii::$app->db->getLastInsertID();
        if($uid){
            $time=time();
            $login_ip=$_SERVER['REMOTE_ADDR'];
            $sql1="insert into `members_log` (log_uid,log_username,log_addtime,log_value,log_ip) values ('$uid','$data[username]','$time','后台添加个人会员','$login_ip')";
            Yii::$app->db->createCommand($sql1)->execute();

            return  $this->redirect("index.php?r=member/members_info");
        }



    }

    //个人会员的日志查看
    public function actionMembers_logs(){
        $log_uid=$_GET['uid'];
        $sql="select * from `members_log` where `log_uid`=$log_uid";
        $log=Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('members_logs',['log'=>$log]);
    }

    //个人会员的修改
    public function actionMembers_update(){
        //接收值
        $uid=$_GET['uid'];
        $sql="select * from `members` where `uid`=$uid";
        $sql2="select `title`,`uid`,`id`,`complete_percent` from `resume` where `uid`=$uid";
        $sql3="select `points` from `members_points` where `uid`=$uid";
        $arr=Yii::$app->db->createCommand($sql)->queryone();
        $arr2=Yii::$app->db->createCommand($sql2)->queryAll();
        $arr3=Yii::$app->db->createCommand($sql3)->queryAll();

        $sum="";
       foreach($arr3 as $k=>$v){
           $sum=$sum+$v['points'];
       }

        return $this->render('members_update',['arr'=>$arr,'arr2'=>$arr2,'sum'=>$sum]);
    }

    //个人会员修改--基本信息
    public function  actionMembers_update_j(){
        //接收表单中的值
        $data=$_POST;
        if(isset($data['password'])){
            $data['password']=md5($data['password']);
        }
        unset($data['_csrf-backend']);
//        print_r($data);die;
        Members::updateAll($data,['uid'=>$data['uid']]);
    }
    //个人会员修改--积分设置
    public function  actionMembers_update_ji(){
        //接收表单中的值
        $data=$_POST;
        unset($data['_csrf-backend']);
        $time=time();
        if($data['points']!=0){
            //有积分log_mode是1，无积分log_mode是2

            $sql="insert into `members_charge_log` values (null,'$data[log_uid]','$data[log_username]','$time','$data[log_value]','$data[log_amount]','$data[log_ismoney]','4','1','2')";
            Yii::$app->db->createCommand($sql)->execute();

        }else{
            $sql="insert into `members_charge_log` values (null,'$data[log_uid]','$data[log_username]','$time','$data[log_value]','$data[log_amount]','$data[log_ismoney]','4','2','2')";
            echo $sql;die;
            Yii::$app->db->createCommand($sql)->execute();

        }

        $sql2="insert into `members_points` values(null,'$data[log_uid]','$data[points]')";
        Yii::$app->db->createCommand($sql2)->execute();
        return $this->redirect('index.php?r=member/members_info');
    }


}