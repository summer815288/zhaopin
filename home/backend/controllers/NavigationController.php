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
/**
 *
 */
class NavigationController extends CommonController
{
    public $layout = false;
    public $enableCsrfValidation = false;

    public function actionIndex()
    {
        $model = new Navigation();
        $data = yii::$app->request->post();
        if ($data) {
            $id = $data['id'];
            $title = $data['title'];
            $re = $model->updateAll(['title' => $title], ['id' => $id]);
            if ($re) {
                echo 1;
            } else {
                echo 0;
            }
        } else {
            $list = $model->find()->asArray()->all();
            return $this->render('index', ['list' => $list]);
        }

    }

    //修改导航栏排序
    public function actionSort()
    {
        $model = new Navigation();
        $data = yii::$app->request->post();
        $id = $data['id'];
        $sort = $data['sort'];
        $re = $model->updateAll(['navigationorder' => $sort], ['id' => $id]);
        if ($re) {
            echo 1;
        } else {
            echo 0;
        }
    }

    //删除指定的导航栏
    public function actionDel()
    {
        $model = new Navigation();
        $data=yii::$app->request->post();
        $id=$data['id'];
        $model->deleteAll(['id'=>$id]);
    }

    //添加导航栏目
    public function actionNavadd()
    {
        $model = new Navigation();
        $data=yii::$app->request->post();
        if($data)
        {
//            print_r($data);die;
            $model->setAttributes($data);
            $re=$model->save();
            if($re)
            {
//                echo $re;die;
                return $this->redirect('?r=navigation/index');
            }
        }else{
            return $this->render('navadd');
        }
    }

    //修改导航
    //添加导航栏目
    public function actionNavupdate()
    {
        $model = new Navigation();
        $data=yii::$app->request->post();
        $id=yii::$app->request->post('id');
        if($data)
        {
            unset($data['id']);
            $re = $model->updateAll($data,['id'=>$id]);
            if($re)
            {
                return $this->redirect('?r=navigation/index');
            }
            else
            {
                return $this->redirect('?r=navigation/index');
            }
        }else{
            $id=yii::$app->request->get('id');
            $info=$model->find()->where(['id'=>$id])->asArray()->one();
            return $this->render('navupdate',['info'=>$info]);
        }
    }

    //导航分类
    public function actionNavcate()
    {
        $list = yii::$app->db->createCommand("select * from navigation_category")->queryAll();
        return $this->render('navcate', ['list' => $list]);
    }

    //添加类别
    public function actionCateadd()
    {
        $data = yii::$app->request->post();
        if ($data) {
            $categoryname = $data['categoryname'];
            $alias = $data['alias'];
            $re = yii::$app->db->createCommand("insert into navigation_category VALUES (null,'$categoryname','$alias','0')")->execute();
            if ($re) {
                return $this->redirect('?r=navigation/navcate');
            }
        } else {
            return $this->render('cateadd');
        }
    }


    //修改类别
    public function actionCateupdate()
    {
        $model=new NavigationCategory();
        $data = yii::$app->request->post();
        $id=yii::$app->request->post('id');
        if ($data) {
            unset($data['id']);
            $re = $model->updateAll($data,['id'=>$id]);
            if($re)
            {
                return $this->redirect('?r=navigation/navcate');
            }
            else
            {
                return $this->redirect('?r=navigation/navcate');
            }
        } else {
            $id= yii::$app->request->get('id');
            $re = yii::$app->db->createCommand("select * from navigation_category where id='$id'")->queryAll();
            $info = [];
            foreach ($re as $val){
                $info = $val;
            }
            return $this->render('cateupdate',['info'=>$info]);
        }
    }

    //删除分类
    public function actionCatedel()
    {
        $model = new NavigationCategory();
        $data=yii::$app->request->post();
        $id=$data['id'];
        $model->deleteAll(['id'=>$id]);
    }

}

?>