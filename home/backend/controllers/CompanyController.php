<?php
namespace backend\controllers;
set_time_limit(0);
use Faker\Provider\me_ME\Company;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\Company_profile;
use yii\data\Pagination;
use backend\models\Category_jobs;
use backend\models\Category;
class CompanyController extends CommonController{
    //职位列表
    public function actionCompany_jobs(){
        $sql="select * from jobs";
        $jobs=Yii::$app->db->createCommand($sql)->queryAll();
        foreach($jobs as $item){$uid[]=$item['uid'];}
        if(!isset($uid)){
            return $this->renderPartial('company_jobs',['jobs'=>$jobs]);
        }
        foreach($uid as $k=>$v){
            $sql2="select count(*) from personal_jobs_apply where jobs_id in ($v)";
            $sql3="select count(*) from personal_jobs_apply where personal_look=1 and jobs_id in ($v)";
            $count1=Yii::$app->db->createCommand($sql2)->queryAll();
            $count2=Yii::$app->db->createCommand($sql3)->queryAll();
        }
        foreach($count1 as $k1=>$v1){
            foreach($count2 as $k2=>$v2){
                foreach($jobs as $k=>$v){
                    $jobs[$k]['count1']=$v1;
                    $jobs[$k]['count2']=$v2;
                }
            }
        }
        return $this->renderPartial('company_jobs',['jobs'=>$jobs]);
    }
    //审核职位
    public function actionJobs_audit(){
        $uid=$_POST['uid'];
        $audits=$_POST['audits'];
        if(empty($uid)){
            echo "<script>alert('修改失败,请选择企业');window.location='index.php?r=company/manage'</script>";die;
        }
        $sql="update jobs set audit=$audits where uid in ($uid)";
        $update_audit=Yii::$app->db->createCommand($sql)->execute();
        if($update_audit){
            echo "<script>alert('修改成功');window.location='index.php?r=company/company_jobs'</script>";
        }
    }
    //修改职位列表
    public function actionCompany_jobs_edit(){
        //职业类别
        $category_jobs_parents=Category_jobs::find()->where(['parentid'=>'0'])->asArray()->all();
        $category_jobs=Category_jobs::find()->asArray()->all();
        //工作经验
        $experience_cn=Category::find()->where(['c_alias'=>'QS_experience'])->asArray()->all();
        //月薪
        $wage_cn=Category::find()->where(['c_alias'=>'QS_wage'])->asArray()->all();
        //学历
        $education_cn=Category::find()->where(['c_alias'=>'QS_education'])->asArray()->all();
        return $this->renderPartial('company_jobs_edit',['wage_cn'=>$wage_cn,'experience_cn'=>$experience_cn,'education_cn'=>$education_cn,'category_jobs_parents'=>$category_jobs_parents,'category_jobs'=>$category_jobs]);
    }
    public function actionCompany_jobs_edit_ajax(){
        if($_GET){
            $category_jobs=Category_jobs::find()->where(['parentid'=>$_GET])->asArray()->all();
            echo json_encode($category_jobs);
        }else{
            echo"0";
        }
    }
    //带认证职业
    public function actionCompany_jobs_to(){
        $sql="select * from jobs where audit=2";
        $jobs=Yii::$app->db->createCommand($sql)->queryAll();
        foreach($jobs as $item){$uid[]=$item['uid'];}
        if(!isset($uid)){
            return $this->renderPartial('company_jobs_to',['jobs'=>$jobs]);
        }
        foreach($uid as $k=>$v){
            $sql2="select count(*) from personal_jobs_apply where jobs_id in ($v)";
            $sql3="select count(*) from personal_jobs_apply where personal_look=1 and jobs_id in ($v)";
            $count1=Yii::$app->db->createCommand($sql2)->queryAll();
            $count2=Yii::$app->db->createCommand($sql3)->queryAll();
        }
        foreach($count1 as $k1=>$v1){
            foreach($count2 as $k2=>$v2){
                foreach($jobs as $k=>$v){
                    $jobs[$k]['count1']=$v1;
                    $jobs[$k]['count2']=$v2;
                }
            }
        }
        return $this->renderPartial('company_jobs_to',['jobs'=>$jobs]);
    }
    //待认证审核职位
    public function actionJobs_audit_to(){
        $uid=$_POST['uid'];
        $audits=$_POST['audits'];
        if(empty($uid)){
            echo "<script>alert('修改失败,请选择企业');window.location='index.php?r=company/company_jobs_to'</script>";die;
        }
        $sql="update jobs set audit=$audits where uid in ($uid)";
        $update_audit=Yii::$app->db->createCommand($sql)->execute();
        if($update_audit){
            echo "<script>alert('修改成功');window.location='index.php?r=company/company_jobs_to'</script>";
        }
    }
    //管理企业
    public function actionManage(){
        //companyname,certificate_img,audit,addtime,refreshtime,username,points,count(company_uid),personal_look,personal_uid
        $sql="select * from members as m join company_profile as c on m.uid=c.uid join members_points as mp on c.uid=mp.uid ";
        $data=Yii::$app->db->createCommand($sql)->queryAll();
        return $this->renderPartial('manage',['companyManage'=>$data]);
    }
    //搜索企业
    public function actionManage_search(){
        $search_where=$_POST['search_where'];
        $key=$_POST['key'];
        $sql="select * from members as m join company_profile as c on m.uid=c.uid join members_points as mp on c.uid=mp.uid where $search_where like '%$key%'";
        $data=Yii::$app->db->createCommand($sql)->queryAll();
        return $this->renderPartial('manage',['companyManage'=>$data]);
    }
    //企业日志
    public function actionCompany_log(){
        $uid=$_GET['uid'];
        $sql="select * from members_log where log_uid=$uid";
        $data=Yii::$app->db->createCommand($sql)->queryAll();
        return $this->renderPartial('company_log',['company_log'=>$data]);
    }
    //企业修改
    public function actionCompany_edit(){
        $uid=Yii::$app->request->get('uid');
        /*所有地区*/
        $sql='select * from category_district';
        $country=Yii::$app->db->createCommand($sql)->queryAll();
        /*所有地区*/
        /*信息*/
        $a=$this->tree($country);
        $sql1="select * from members as m join company_profile as mp on m.uid=mp.uid where m.uid=5";
        $members=Yii::$app->db->createCommand($sql1)->queryAll();
        /*信息*/
        /*企业性质*/
        $sql2="select c_id,c_name from category where c_alias='QS_company_type'";
        $company_nature=Yii::$app->db->createCommand($sql2)->queryAll();
        /*企业性质*/
        /*所属行业*/
        $sql3="select c_id,c_name from category where c_alias='QS_trade'";
        $vocation=Yii::$app->db->createCommand($sql3)->queryAll();
        /*所属行业*/
        /*公司规模*/
        $sql4="select c_id,c_name from category where c_alias='QS_wage'";
        $scale=Yii::$app->db->createCommand($sql4)->queryAll();
        /*公司规模*/
        return $this->renderPartial('company_edit',['country'=>$a,'members'=>$members[0],'company_nature'=>$company_nature,'vocation'=>$vocation,'scale'=>$scale]);
    }
    //企业的修改
    public function actionCompany_edit_add(){
        $data=$_POST;
        $data['contents']=strip_tags($_POST['editorValue']);
        unset($data['_csrf-backend']);
        unset($data['editorValue']);
        Company_profile::updateAll($data,['uid'=>$_POST['uid']]);

    }
    //认证企业处理
    public function actionGet_user_info(){
        $uid=$_POST['uid'];
        $audits=$_POST['audits'];
        if(empty($uid)){
            echo "<script>alert('修改失败,请选择企业');window.location='index.php?r=company/manage'</script>";die;
        }
        $sql="update company_profile set audit=$audits where uid in ($uid)";
        $update_audit=Yii::$app->db->createCommand($sql)->execute();
        if($update_audit){
            echo "<script>alert('修改成功');window.location='index.php?r=company/manage'</script>";
        }
        
    }
    //发送邮件
    public function actionCompany_email(){
        $uid=$_GET['uid'];
        $email=$_GET['email'];
        return $this->renderPartial('company_email',['uid'=>$uid,'email'=>$email]);
    }
    //处理邮件
    public function actionCompany_email_to(){
        $send_to=$_GET['send_to'];
        $subject=$_GET['subject'];
        $content=$_GET['content'];
        $mail= Yii::$app->mailer->compose();
        $mail->setFrom(['13161173620@163.com'=>'sdsa']);
        $mail->setTo($send_to);
        $mail->setSubject($subject);
//$mail->setTextBody('zheshisha ');   //发布纯文字文本
        $mail->setHtmlBody($content);    //发布可以带html标签的文本
        if($mail->send())
            echo "<script>alert('success');history.go(-1);</script>";
        else
            echo "<script>alert('failse');history.go(-1);</script>";
        die();
    }
    //待认证企业
    public function actionCompany_await(){
        $sql="select * from members as m join company_profile as c on m.uid=c.uid join members_points as mp on c.uid=mp.uid join personal_jobs_apply as pja on mp.uid=pja.company_id where audit=2";
        $data=Yii::$app->db->createCommand($sql)->queryAll();
        return $this->renderPartial('company_await',['companyManage'=>$data]);
    }
    //企业会员
    public function actionCompany_member(){
        $sql="select uid,username,email,mobile,reg_time,reg_ip,last_login_time from members where utype=1";
        $members=Yii::$app->db->createCommand($sql)->queryAll();
        $sql2="select uid,companyname,audit from company_profile";
        $company_profile=Yii::$app->db->createCommand($sql2)->queryAll();
        foreach($members as $k=>$v){
            foreach($company_profile as $k2=>$v2){
                if($v['uid']==$v2['uid']){
                    $members[$k]['companyname']=$v2['companyname'];
                    $members[$k]['audit']=$v2['audit'];
                }
            }
        }
        return $this->render('company_member',['members'=>$members]);
    }
    //添加企业会员
    public function actionCompany_member_add(){
        return $this->render('company_member_add');
    }
    //删除企业会员
    public function actionDel(){
        $uid=$_GET['uid'];
        if($uid){
            $sql="delete from members where uid in ($uid)";
            $members=Yii::$app->db->createCommand($sql)->execute();
            $sql1="delete from members_setmeal where uid in ($uid)";
            $members_setmeal=Yii::$app->db->createCommand($sql1)->execute();
            $sql2="delete from members_points where uid in ($uid)";
            $members_points=Yii::$app->db->createCommand($sql2)->execute();
            if($members&&$members_setmeal&&$members_points){
                echo"1";
            }
        }else{
            echo "0";
        }
    }
    //搜索企业会员
    public function actionCompany_search(){
        $search_where=$_POST['search_where'];
        $key=$_POST['key'];
        if($search_where=='username'||$search_where=='email'||$search_where=='mobile'||$search_where=='UID'){
            $sql="select uid,username,email,mobile,reg_time,reg_ip,last_login_time from members where $search_where like '%$key%'";
            $members=Yii::$app->db->createCommand($sql)->queryAll();
            $sql2="select uid,companyname,audit from company_profile";
            $company_profile=Yii::$app->db->createCommand($sql2)->queryAll();
            foreach($members as $k=>$v){
                foreach($company_profile as $k2=>$v2){
                    if($v['uid']==$v2['uid']){
                        $members[$k]['companyname']=$v2['companyname'];
                        $members[$k]['audit']=$v2['audit'];
                    }
                }
            }
        }
        if($search_where=='companyname'){

            $sql2="select * from company_profile where $search_where like '%$key%'";
            $company_profile=Yii::$app->db->createCommand($sql2)->queryAll();
            foreach($company_profile as $k=>$v){
                $uid[$k]=$v['uid'];
            }
            foreach($uid as $k=>$v){
                $sql="select * from members where uid in ($v)";
                $members=Yii::$app->db->createCommand($sql)->queryAll();
            }

            foreach($members as $k=>$v){
                foreach($company_profile as $k2=>$v2){
                    if($v['uid']==$v2['uid']){
                        $members[$k]['companyname']=$v2['companyname'];
                        $members[$k]['audit']=$v2['audit'];
                    }
                }
            }
        }
        return $this->render('company_member',['members'=>$members]);
    }
    //处理添加的企业会员
    public function actionCompany_member_adds(){
        if($_POST['username']==""||$_POST['email']==""||$_POST['password']==""){
            echo"<script>alert('添加会员不能为空');window.location='index.php?r=company/company_member_add'</script>";die;
        }
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=md5($_POST['password']);
        $reg_time=time();
        $reg_ip=$_SERVER['REMOTE_ADDR'];
        $points=$_POST['points'];
        $log_amount=$_POST['log_amount'];
            $sql="insert into members (username,email,password,reg_time,reg_ip) values('$username','$email','$password','$reg_time','$reg_ip')";
            $members=Yii::$app->db->createCommand($sql)->execute();
            $uid=Yii::$app->db->getLastInsertID();
            $sql1="insert into members_setmeal (uid) VALUES('$uid')";
            $members_setmeal=Yii::$app->db->createCommand($sql1)->execute();
            $sql2="insert into members_points (uid,points) values('$uid','$points')";
            $members_points=Yii::$app->db->createCommand($sql2)->execute();
            if(isset($points)&&isset($log_amount)) {
                $sql3 = "insert into members_charge_log (log_uid,log_username,log_addtime,log_value,log_amount,log_ismoney,log_type,log_mode) values('$uid','$username','$reg_time','注册会员系统自动赠送：免费会员','$log_amount','2','4','1')";
                $members_charge_log = Yii::$app->db->createCommand($sql3)->execute();
            }elseif(isset($points)){
                $sql3 = "insert into members_charge_log (log_uid,log_username,log_addtime,log_value,log_amount,log_ismoney,log_type,log_mode) values('$uid','$username','$reg_time','注册会员系统自动赠送：免费会员','$log_amount','1','4','1')";
                $members_charge_log = Yii::$app->db->createCommand($sql3)->execute();
            }elseif(isset($log_amount)){
                $sql3 = "insert into members_charge_log (log_uid,log_username,log_addtime,log_value,log_amount,log_ismoney,log_type,log_mode) values('$uid','$username','$reg_time','注册会员系统自动赠送：免费会员','$log_amount','2','4','2')";
                $members_charge_log = Yii::$app->db->createCommand($sql3)->execute();
            }
            if($members&&$members_setmeal&&$members_points&&$members_charge_log){
                echo"<script>alert('添加成功');window.location='index.php?r=company/company_member'</script>";
            }elseif($members&&$members_setmeal&&$members_points){
                echo"<script>alert('添加成功');window.location='index.php?r=company/company_member'</script>";
            }else{
                echo"<script>alert('添加失败');window.location='index.php?r=company/company_member'</script>";
             }
    }

    //无限极分类
    public function tree($list,$parent_id=0,$leave=0,$html='&nbsp;&nbsp;'){
        $tree=array();
        foreach($list as $key=>$value){
            if($value['parentid']==$parent_id){
                $value['leave']=$leave+1;
                $value['html']=str_repeat($html,$leave);
                $tree[]=$value;
                $tree=array_merge($tree,$this->tree($list,$value['id'],$leave+1,$html));
            }
        }
        return $tree;
    }

}