<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use app\models\UploadForm;
use yii\web\UploadedFile;
use yii\db\Query;
/**
 * Site controller
 */
class ContentController extends Controller
{
	public $enableCsrfValidation = false;
	public function actionList()
	{
        $limit = 5;
		$query  = new Query();
		$list = $query->from('news_list')->join('INNER JOIN','news_cate','news_list.nc_id = news_cate.nc_id')->limit($limit)->orderby('news_id')->all();
		$list_models = new \app\models\NewsList;
		$page_model=new \app\models\Page();
        $count = $list_models->find()->count(); //总条数
        $str=$page_model->page($count,$p=1,$limit);

		return $this->render("news_list",['list'=>$list,'str'=>$str]);
	}

	 //分页 搜索
	 public function actionGetajax()
	    {
	        $str=$_GET;
	        $page=$_GET['p'];
	        $where[]=" 1=1 ";
	        if(!empty($str['title'])){
	            $where[]="news_title like '%".$str['title']."%'";
	        }
	//        if(!empty($str['car_type'])){
	//            $where[]="sbin_cate_id=".$str['car_type'];
	//         }
	//        print_r($where);die;
	        $wheres=implode(' And ',$where);
	        $limit=5;
	        $offset=($page-1)*5;
	        $model=Yii::$app->db;
	        $sql="select * from news_list inner join news_cate on news_cate.nc_id=news_list.nc_id where $wheres";
	        $ad_list=$model->createCommand($sql)->queryAll();
	        $sql="select * from news_list inner join news_cate on news_cate.nc_id=news_list.nc_id where $wheres limit $offset,$limit";
	        $list=$model->createCommand($sql)->queryAll();
	        $count=count($ad_list);
	        $page_model=new \app\models\Page;
	        $page=$page_model->page($count,$page,$limit);
	        $data['list']=$list;
	        $data['page']=$page;
	        echo json_encode($data);
	    }

    //标题的即点即改
    public function actionGetcha()
    {
    	$id = $_POST['id'];
    	$titles = $_POST['titles'];
    	// print_r($id);die;
    	$list_models = new \app\models\NewsList;
    	$data = ['news_title'=>$titles];
    	$list_models->updateAll($data,['news_id'=>$id]);
    }


	public function actionAdd()
	{
		$cate_models = new \app\models\NewsCate;
		$cate_list = $cate_models->find()->asArray()->all();
		$model = new UploadForm();
		return $this->render("news_add",['list'=>$cate_list,'model'=>$model]);
	}

	public function actionAddpost()
	{
		$model = new UploadForm();
        if(Yii::$app->request->isPost)
        {
            $imginfo=$model->imageFiles = UploadedFile::getInstances($model, 'imageFiles');
            $img_name=$imginfo[0]->name;
            $img_path='uploads/'.$img_name;
           // var_dump($img_path);die;
        }
           
		$post = \Yii::$app->request->post();
		$list_models = new \app\models\NewsList;
		$data = ['nc_id'=>$post['cate'],
				'news_title'=>$post['title'],
				'news_content'=>$post['content'],
				'news_time'=>$post['time'],
				'news_author'=>$post['author'],
				'news_img'=>$img_path,
				];
		$list_models->setAttributes($data);
		$list_models->insert();
		if($model->upload()) 
		{
            // echo "上传成功";
            $this->redirect('?r=content/list');
            return;
        }

	}

	//删除
	public function actionGetdel()
	{
		$id = $_POST['id'];
		$list_models = new \app\models\NewsList;
		$list_models->deleteAll(['nc_id'=>$id]);
	}
}