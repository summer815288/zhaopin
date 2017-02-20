<?php
namespace backend\controllers;
header("content-type:textml;charset=utf8");
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Session;

/**
 * Login controller
 */
class CommonController extends Controller
{
    public function init()
    {
        $this->check();
    }
    public function check()
    {
        
        $session = Yii::$app->session;
        $names = $session->get('a');
        $u_name = $names['username'];
        // print_r($u_name);die;
        if (!isset($u_name)) {
            echo "<script>alert('非法登录');location.href='?r=login/login';</script>";
        }
        if($this->checkNode()==false)
        {
            echo "<script>alert('无权操作请联系管理员');window.history.back(-1);</script>";
        }
    }
    public function checkNode()
    {
        $controller = $this->id;

        // print_r($controller);die;
       
        if($controller=='admin')
        {
            return true;
        }

        $session = Yii::$app->session;

        // $names = $session->get('a');
        // $admin_id = $names['admin_id'];
        // print_r($admin_id);die;

        $uid =isset( $session['a']['admin_id']) ? $session['a']['admin_id'] : "0";

        if($uid == '0') {
            exit("<script>alert('请登录...');location.href='?r=login/login';</script>");
        }
        // $uid = '3';
        // $sql="SELECT node_controller from fresh_node where node_id in(SELECT node_id from fresh_role_node where role_id = (SELECT role_id from fresh_admin_role WHERE admin_id=$uid))";
        $myNode = Yii::$app->db->createCommand("SELECT * FROM aa_r WHERE admin_id=$uid")->queryone();
        $r_id = $myNode['r_id'];
        $role = Yii::$app->db->createCommand("SELECT * FROM arole WHERE r_id=$r_id")->queryone();
        $r = $role['r_id'];
        $ro = Yii::$app->db->createCommand("SELECT * FROM ar_p WHERE r_id=$r")->queryall();

        // print_r($ro);die;
        foreach ($ro as $key => $value){
            $q_id = $value['p_id'];
            $ro = Yii::$app->db->createCommand("SELECT * FROM apower WHERE p_id=$q_id")->queryall();

            foreach ($ro as $key => $value) {
                //echo $controller;
                //echo $value['p_methd'];
                if($value['p_controller']==$controller)
                {
                    return true;
                }
            }
        }
        return false;
    }
}
