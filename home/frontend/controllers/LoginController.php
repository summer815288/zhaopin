<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class LoginController extends Controller
{
	public $layout = false;
    public $enableCsrfValidation = false;

	//登录
	public function actionLogin()
	{
		return $this->render("login");
	}
	public function actionLogindo()
	{
		$email = $_POST['email'];
		$pwd = $_POST['password'];
		$login_time = time();
		$a = yii::$app->db->createCommand("select * from members where email = '$email' and password = '$pwd'")->queryOne();


		if($a){

            yii::$app->db->createCommand("update members set last_login_time='$login_time' where email = '$email' and password = '$pwd'")->query();
            $type = $a['utype'];
            $uid=$a['uid'];
            // $data = ['type'=>$type,'email'=>$email];
            $session = yii::$app->session;
            $session->open();
            $session->set('type',$type);
            $session->set('email',$email);
            $session->set('uid',$uid);

            $ip=$_SERVER['REMOTE_ADDR'];
            $ipInfos = GetIpLookup($ip); //baidu.com
            @$city=@$ipInfos['city'];

            //存到登录日志中
            $sql="insert into `members_log` (log_uid, log_username,log_addtime,log_value,log_ip,log_address,log_utype)values('$uid','$a[username]','$login_time','成功登录','$ip','$city','$type')";
            Yii::$app->db->createCommand($sql)->execute();

			echo "<script>alert('登录成功');location.href='?r=index/index'</script>";
		}else{
			echo "<script>alert('登录失败，请确认后在登录');location.href='?r=login/login'</script>";

		}
	}

	//注册
	public function actionRegister()
	{
		return $this->render("register");
	}
	public function actionRegisterdo()
	{
		$type= $_POST['type'];
		$pwd= $_POST['password'];
		$email= $_POST['email'];
		$reg_time=time(); 
		$reg_ip = $_SERVER['REMOTE_ADDR'];		
		$a = yii::$app->db->createCommand("select * from members where email = '$email'")->queryOne();
		if($a){
			echo "<script>alert('用户已存在');location.href='?r=login/register'</script>";
		}else{
			$res = yii::$app->db->createCommand("insert into members(utype,email,password,reg_ip,reg_time) value('$type','$email','$pwd','$reg_ip','$reg_time')")->query();
			if($res){
				echo "<script>alert('注册成功');location.href='?r=login/login'</script>";
			}
		}
	}

	//退出登录
	public function actionLoginout()
	{
		$session = Yii::$app->session;
		$session->remove('email');		
		$session->remove('type');		
		$this->redirect("?r=login/login");
	}
	//忘记密码
	public function actionReset()
	{
		return $this->render("reset");
	}

	//qq第三方登录
	public function actionQq()
	{
		return $this->render("qq/index.php");
	}

}


//通过ip地址  得到城市
function GetIp(){
    $realip = '';
    $unknown = 'unknown';
    if (isset($_SERVER)){
        if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) && strcasecmp($_SERVER['HTTP_X_FORWARDED_FOR'], $unknown)){
            $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            foreach($arr as $ip){
                $ip = trim($ip);
                if ($ip != 'unknown'){
                    $realip = $ip;
                    break;
                }
            }
        }else if(isset($_SERVER['HTTP_CLIENT_IP']) && !empty($_SERVER['HTTP_CLIENT_IP']) && strcasecmp($_SERVER['HTTP_CLIENT_IP'], $unknown)){
            $realip = $_SERVER['HTTP_CLIENT_IP'];
        }else if(isset($_SERVER['REMOTE_ADDR']) && !empty($_SERVER['REMOTE_ADDR']) && strcasecmp($_SERVER['REMOTE_ADDR'], $unknown)){
            $realip = $_SERVER['REMOTE_ADDR'];
        }else{
            $realip = $unknown;
        }
    }else{
        if(getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), $unknown)){
            $realip = getenv("HTTP_X_FORWARDED_FOR");
        }else if(getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), $unknown)){
            $realip = getenv("HTTP_CLIENT_IP");
        }else if(getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), $unknown)){
            $realip = getenv("REMOTE_ADDR");
        }else{
            $realip = $unknown;
        }
    }
    $realip = preg_match("/[\d\.]{7,15}/", $realip, $matches) ? $matches[0] : $unknown;
    return $realip;
}

function GetIpLookup($ip = ''){
    if(empty($ip)){
        $ip = GetIp();
    }
    $res = @file_get_contents('http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip=' . $ip);
    if(empty($res)){ return false; }
    $jsonMatches = array();
    preg_match('#\{.+?\}#', $res, $jsonMatches);
    if(!isset($jsonMatches[0])){ return false; }
    $json = json_decode($jsonMatches[0], true);
    if(isset($json['ret']) && $json['ret'] == 1){
        $json['ip'] = $ip;
        unset($json['ret']);
    }else{
        return false;
    }
    return $json;
}