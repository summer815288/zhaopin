<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
//use backend\models\ConfigForm;
use app\models\Easyguide;
use yii\data\Pagination;
use app\models\UploadModel;
use yii\web\UploadedFile;
/**
 *
 */
class SystemController extends CommonController
{
    public $layout = false;
    public $enableCsrfValidation=false;

    //网站配置
    public function actionWeb_config()
    {
        $data=yii::$app->request->post();
        if($data)
        {
            $re=yii::$app->db->createCommand("select * from config")->queryAll();
            foreach($re as $key=>$val)
            {
                foreach($data as $k=>$v)
                {
                    if($val['name']==$k)
                    {
                        yii::$app->db->createCommand("update config set value='$v' where name='$k'")->execute();
                    }
                }
            }
        }
//        else{
            $data=yii::$app->db->createCommand("select * from config")->queryAll();
            $value = [];
            foreach($data as $key=>$val)
            {
                $value[$val['name']] = $val['value'];
            }
            return $this->render("config",['value'=>$value]);
//        }
    }

    //企业设置
    public function actionCompany_set()
    {
        $data=yii::$app->request->post();
        if($data)
        {
            $re=yii::$app->db->createCommand("select * from config")->queryAll();
            foreach($re as $key=>$val)
            {
                foreach($data as $k=>$v)
                {
                    if($val['name']==$k)
                    {
                        yii::$app->db->createCommand("update config set value='$v' where name='$k'")->execute();
                    }
                }
            }
        }
        $data=yii::$app->db->createCommand("select * from config")->queryAll();
        $value = [];
        foreach($data as $key=>$val)
        {
            $value[$val['name']] = $val['value'];
        }
        return $this->render("company_set",['value'=>$value]);
    }

    //个人设置
    public function actionPerson_set()
    {
        $data=yii::$app->request->post();
        if($data)
        {
            $re=yii::$app->db->createCommand("select * from config")->queryAll();
            foreach($re as $key=>$val)
            {
                foreach($data as $k=>$v)
                {
                    if($val['name']==$k)
                    {
                        yii::$app->db->createCommand("update config set value='$v' where name='$k'")->execute();
                    }
                }
            }
        }
        $data=yii::$app->db->createCommand("select * from config")->queryAll();
        $value = [];
        foreach($data as $key=>$val)
        {
            $value[$val['name']] = $val['value'];
        }
        return $this->render("person_set",['value'=>$value]);
    }


    //系统 工作管理
    public function actionJobs()
    {
        $list = yii::$app->db->createCommand("select * from category_jobs")->queryAll();
        $data = $this->getList($list);
        // print_r($data);die;
        return $this->render("jobs",['data'=>$data]);
    }

    public function actionJobsdel()
    {
        $id = $_POST['id'];
        yii::$app->db->createCommand("delete from category_jobs where id=$id")->query();
    }

    public function actionTitle()
    {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $res = yii::$app->db->createCommand("update category_jobs set categoryname='$title' where id=$id")->query();
        if($res){
            echo 1;
        }
    }

    public function actionSort()
    {
        $id = $_POST['id'];
        $sort = $_POST['sort'];
        $res = yii::$app->db->createCommand("update category_jobs set category_order='$sort' where id=$id")->query();
        if($res){
            echo 1;
        }
    }

    public function actionJobsadd()
    {
        $id = $_GET['id'];
        $data = yii::$app->db->createCommand("select categoryname from category_jobs where id=$id")->queryAll();

        return $this->render("jobsadd",['data'=>$data,'id'=>$id]);
    }

    public function actionJobsaddpost()
    {
        $cate = $_POST['cate'];
        $name = $_POST['name'];
        $sort = $_POST['sort'];
        $res = yii::$app->db->createCommand("insert into category_jobs(parentid,categoryname,category_order) value('$cate','$name','$sort')")->query();
        if($res){
            echo "<script>alert('添加成功！');location.href='?r=system/jobs'</script>";
        }
    }

}

?>