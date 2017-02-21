<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
//use backend\models\ConfigForm;
use app\models\Easyguide;
use yii\data\Pagination;

/**
* 
*/
class AdminController extends CommonController
{
	public $layout = false;
	
	//首页
	public function actionIndex()
	{
		// $cookies = Yii::$app->request->cookies;
		// if ($cookies->has('name')){
		//     $name = $cookies->getValue('name');   
		// }		

		$session = Yii::$app->session;
		$names = $session->get('a');
		$name = $names['username'];
		
		return $this->render('index',[
			'name'=>$name,

			]);
	}

	//公共部分
	public function actionMain()
	{

		// $cookies = Yii::$app->request->cookies;
		// if ($cookies->has('name')){
		//     $name = $cookies->getValue('name');   
		// }
		$session = Yii::$app->session;
		$names = $session->get('a');
		$name = $names['username'];
		return $this->render('main',[
			'name'=>$name,
			]);
	}
	//网站配置
	public function actionConfig(){
		$request=\Yii::$app->request;
		if($request->isPost){
        $data=$request->post();
		$connection = \Yii::$app->db;
		$connection->createCommand()->insert('user',['data'=>$data])->execute();
	}
		return $this->render('config');
	}
	//背景音乐
	public function actionAdmin_music(){
		return $this->render('admin_music');
	}
	//名片模板管理
	public function actionAdmin_cardtemplate(){
		return $this->render('admin_cardtemplate');
	}
	//首页推荐导航
	public function actionIndex_tj(){
		$request= \Yii::$app->request;
		if($request->isPost){
			$data=$request->post();
			// var_dump($data);die;
			$connection = \Yii::$app->db;
		    $count=$connection->createCommand()->insert('easyguide',[
		    	'navigate'=>$data['navigate'],'nav_name'=>$data['nav_name'],
		    	'nav_introduce'=>$data['nav_introduce'],'nav_number'=>$data['nav_number'],
		    	'is_show'=>$data['is_show'],'new_column'=>$data['new_column']
		    	])->execute();
		    // var_dump($count);die;
		    if($count){
		    	$query = Easyguide::find();

		        $pagination = new Pagination([
                   'defaultPageSize' => 2,
                   'totalCount' => $query->count(),
             ]);

        $data = $query->orderBy('nav_id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index_tj', [
            'data' => $data,
            'pagination' => $pagination,
          ]);
		}
	  }	
	        $query = Easyguide::find();

	//对象的形式 不能是数组
		        $pagination = new Pagination([
                   'defaultPageSize' => 2,
                   'totalCount' => $query->count(),
             ]);

        $data = $query->orderBy('nav_id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
		// var_dump($data);die;
        return $this->render('index_tj', [
            'data' => $data,
            'pagination' => $pagination,
          ]);
	}



}