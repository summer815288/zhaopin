<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii\db\Query;

/**
 * Site controller
 */
class RbacController extends Controller
{
	public $enableCsrfValidation = false;
	
	//管理员列表
	public function actionAdmin()
	{
		$query = new Query();
		$admin_list = $query->from("admin")->join('INNER JOIN','arole','arole.r_id = admin.r_id')->all();

		
		return $this->render("admin_list",['admin_list'=>$admin_list]);
	}
	//添加管理员
	public function actionAdminadd()
	{
		$role = yii::$app->db->createCommand("select * from arole")->queryall();
		return $this->render("admin_add",['role'=>$role]);
	}

	public function actionAdminpost()
	{
		$name = $_POST['admin_name'];
		$pwd = $_POST['admin_pwd'];
		$role = $_POST['role'];
		$res = yii::$app->db->createCommand("insert into admin (admin_name,admin_pwd,r_id) value('$name','$pwd','$role')")->query();		
	}

	//角色列表
	public function actionRole()
	{
		$query = new Query();
		$arole = $query->from("arole")->all();
		
		return $this->render("role_list",['arole'=>$arole]);
	}
	//添加角色
	public function actionRoleadd()
	{
		return $this->render("role_add");
	}
	public function actionRolepost()
	{
		$name = $_POST['role_name'];
		$res = yii::$app->db->createCommand("insert into arole (r_name) value('$name')")->query();
		if($res){
			echo "<script>alert('添加成功！');location.href='?r=rbac/role';</script>";
		}	
	}

	public function actionRoledel()
	{
		$id = $_POST['id'];
		$res = yii::$app->db->createCommand("delete from arole where r_id=$id")->query();
		if($res){
			echo "<script>alert('删除成功！');location.href='?r=rbac/role';</script>";
		}	
	}
}