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
use app\models\Navigation;
use app\models\NavigationCategory;
use app\models\CategoryDistrict;
/**
 *
 */
class AddressController extends CommonController
{
    public $layout = false;
    public $enableCsrfValidation = false;

    public function actionIndex()
    {
        $model = new CategoryDistrict();
        $data = yii::$app->request->post();
        if ($data) {
            $id = $data['id'];
            $title = $data['title'];
            $model->updateAll(['categoryname' => $title], ['id' => $id]);
        } else {
            $list = yii::$app->db->createCommand("select * from category_district")->queryAll();
            $data=$this->getList($list);
            return $this->render('index', ['data' => $data]);
        }

    }

    //修改地区排序
    public function actionSort()
    {
        $model = new CategoryDistrict();
        $data = yii::$app->request->post();
        $id = $data['id'];
        $sort = $data['sort'];
        $model->updateAll(['category_order' => $sort], ['id' => $id]);
    }

    //删除指定的导航栏
    public function actionDel()
    {
        $model = new CategoryDistrict();
        $data=yii::$app->request->post();
        $id=$data['id'];
        $model->deleteAll(['id'=>$id]);
        $model->deleteAll(['parentid'=>$id]);
    }

    //添加子地区
    public function actionAddarea()
    {
        $model = new CategoryDistrict();
        $data=yii::$app->request->post();
        if($data)
        {
            $parentid=$data['parentid'];
            $list=$model->find()->where(['categoryname'=>$parentid])->asArray()->one();
            $data['parentid']=$list['id'];
            $model->setAttributes($data);
            $re=$model->insert();
            if($re)
            {
//                echo $re;die;
                return $this->redirect('?r=address/index');
            }
            else{
                echo "没添加成功";
            }
        }else{
            $id=yii::$app->request->get('id');
            $data=$model->find()->where(['id'=>$id])->asArray()->one();
            return $this->render('addarea',['data'=>$data]);
        }
    }

}

?>