<?php
/*
extension=php_sockets.dll
extension=php_openssl.dll
*/
if($data['content']==""){
    echo "<script>alert('邮件内容不能为空');history.go(-1)</script>";die;
}else if($data['subject']==""){
    echo"<script>alert('邮件标题不能为空');history.go(-1)</script>";die;
}

    require   'PHPMailer/class.phpmailer.php';
    $mail             = new PHPMailer();
    /*服务器相关信息*/
    $mail->IsSMTP();                        //设置使用SMTP服务器发送
    $mail->SMTPAuth   = true;               //开启SMTP认证
    $mail->Host       = 'smtp.sina.cn';   	    //设置 SMTP 服务器,自己注册邮箱服务器地址
    $mail->Username   = '18335103240';  		//发信人的邮箱名称
    $mail->Password   = '815288xy';          //发信人的邮箱密码
    /*内容信息*/
    $mail->IsHTML(true); 			         //指定邮件格式为：html
    $mail->CharSet    ="UTF-8";			     //编码
    $mail->From       = '18335103240@sina.cn';	 		 //发件人完整的邮箱名称
    $mail->FromName   = $data['send_from'];			 //发信人署名
    $mail->Subject    = $data['subject'];  			 //信的标题
    $mail->MsgHTML($data['content']);  				 //发信主体内容
    /*发送邮件*/
    $mail->AddAddress($data['send_to']);  			 //收件人地址
    //使用send函数进行发送
    $data['sendtime']=time();
    if($mail->Send()) {

       $sql="insert into `sys_email_log` values(null,'$data[send_from]','$data[send_to]','$data[subject]','$data[content]','发送成功','$data[sendtime]')";
       $insert=Yii::$app->db->createCommand($sql)->execute();
        if($insert==1){
            echo  "<script>alert('发送成功，请查看邮箱');location.href='http://localhost/zhaopin/home/backend/web/index.php?r=member/resume'</script>";

        }



    } else {
        $data['state']=$mail->ErrorInfo;//如果发送失败，则返回错误提示
        $sql="insert into `sys_email_log` values(null,'$data[send_from]','$data[send_to]','$data[subject]','$data[content]','$data[state]','$data[sendtime]')";
        $insert=Yii::$app->db->createCommand($sql)->execute();
       echo  $data['state'];
    }

?>
