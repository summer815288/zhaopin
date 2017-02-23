<?php
namespace frontend\controllers;
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

    public function getList($list,$parentid=0)
    {
        $data=array();
        foreach ($list as $key =>$value)
        {
            if($value['parentid']==$parentid)
            {
                $data[$key]=$value;
//                print_r($data[$key]);die;
                $data[$key]['son']=$this->getval($list,$value['id']);
//                print_r($data[$key]['son']);die;
            }
        }
     return $data;
    }

    public function getval($list,$parentid)
    {
        $data=array();
        foreach ($list as $key =>$value)
        {
            if($value['parentid']==$parentid)
            {
                $data[$key]=$value;
//                print_r($data[$key]);die;
                $data[$key]['sun']=$this->getval($list,$value['id']);

//                print_r($data[$key]['son']);die;
            }
        }
        return $data;
    }
}
