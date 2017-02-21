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

}

?>