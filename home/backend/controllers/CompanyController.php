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
class CompanyController extends CommonController{
    //职位列表
    public function actionJob(){

       return $this->renderPartial('job');
    }
    //待认证企业
    public function actionManage(){
        $sql="select companyname,certificate_img,audit,addtime,refreshtime,username,points,count(company_uid),personal_look,personal_uid from members as m join company_profile as c on m.uid=c.uid join members_points as mp on c.uid=mp.uid join personal_jobs_apply as pja on mp.uid=pja.company_id";
        $data=Yii::$app->db->createCommand($sql)->queryAll();
        return $this->renderPartial('manage',['companyManage'=>$data]);
    }
    //企业日志
    public function actionCompany_log(){
        $sql="select * from company_profile as cp join members_log as ml on cp.uid=ml.log_uid";
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
    public function actionCompany_edit_add(){
        $data=$_POST;
        $data['contents']=strip_tags($_POST['editorValue']);
        unset($data['_csrf-backend']);
        unset($data['editorValue']);
        Company_profile::updateAll($data,['uid'=>5]);  // 一行新数据插入 customer 表

    }
    //无限极分类
    public function tree($list,$parent_id=0){
        $tree=array();
        foreach($list as $key=>$value){
            if($value['parentid']==$parent_id){
                $tree[]=$value;
                $tree=array_merge($tree,$this->tree($list,$value['id']));
            }
        }
        return $tree;
    }

}