<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台欢迎页</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href=" css/content.css" />
    <script src="js/jquery-3.1.1.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>


    <style type="text/css">
        td{
            margin:10px;
        }
        td input{
            width:200px;height:20px;background-color: #eef8ff;margin:10px;
        }
    </style>

</head>
<body marginwidth="0" marginheight="0">
<div class="container">
    <div class="public-nav">您当前的位置：<a href="">管理首页</a>><a href="">个人会员</a></div>
    <div class="public-content">
        <div class="public-content-header">
            <h3>添加个人会员</h3>
        </div>
        <?= Html::beginForm(['member/members_adds'], 'post',['name'=>'add']) ?>

        <table >
            <tr >
                <th  aligin="right"  >  用户名：</th>
                <td ><input type="text"  name="username"   class="username" ><span class="usernames"></span></td>
            </tr>
            <tr   >
                <th  aligin="right"> 邮箱地址：</th>
                <td><input type="text"   name="email"  class="email"><span class="emails"></span></td>
            </tr>
            <tr >
                <th  aligin="right">登录密码：</th>
                <td><input  type="text"   name="password" class="password"><span class="passwords"></span></td>
            </tr>
            <tr   >
                <th   aligin="right"> 再次输入密码：</th>
                <td><input type="text"   name="passworded"  class="passworded"><span class="passwordeds"></span></td>
            </tr>
            <tr>
                <th  aligin="right" ></th>
                <td>
                    <input  type="submit" value="添加"  style="width:50px;height:30px;background-color: #f1fffd;" >
                    <a href="<?php  echo Url::to(['member/members_info'])?>" style="display:inline;"><input  type="button" value="返回"  style="width:50px;height:30px;background-color: #f1fffd;" ></a>

                </td>
            </tr>
        </table>
        <?= Html::endForm() ?>

    </div>
</div>
</body>
</html>
<script>
    //jquery验证不能为空 邮箱必须是合法的  登录密码不能少于6个字符
    var validate={
        "checkUsername":false,
        "checkEmail":false,
        "checkPassword":false,
        "checkPassworded":false
    }

    $(document).on('keyup','.username',function(){
        var username=$(this).val();
        var obj=$(this);
        if(username==""){
            $(".usernames").html("用户名不能为空");
            $(".usernames").attr("style",'color:red');
            obj.attr("style",'background:pink;border:1px red red;color:red;');
            validate.checkUsername=false;
            return false;

        }else if(username.length<3||username.length>18){
            $(".usernames").html("确保的值在3-18个字节之间");
            $(".usernames").attr("style",'color:red');
            obj.attr("style",'background:pink;border:1px red red;color:red;');
            validate.checkUsername=false;
            return false;

        }else{
            $(".usernames").html("√");
            $(".usernames").attr("style",'color:green');
            obj.attr("style",'background-color: #eef8ff;color:black;');
            validate.checkUsername=true;
            return true;
        }

    })
    $(document).on('keyup','.email',function(){
        var email=$(this).val();
        var obj=$(this);
        var preg= /^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/;
        if(email==""){
            $(".emails").html("邮箱不能为空");
            $(".emails").attr("style",'color:red');
            obj.attr("style",'background:pink;border:1px red red;color:red;');
            validate.checkEmail=false;
            return false;

        }else if(!preg.test(email)){
            $(".emails").html("邮箱不合法");
            $(".emails").attr("style",'color:red');
            obj.attr("style",'background:pink;border:1px red red;color:red;');
            validate.checkEmail=false;
            return false;

        }else{
            $(".emails").html("√");
            $(".emails").attr("style",'color:green');
            obj.attr("style",'background-color: #eef8ff;color:black;');
            validate.checkEmail=true;
            return true;
        }

    })
    $(document).on('keyup','.password',function(){
        var password=$(this).val();
        var obj=$(this);
        var preg= /^\w{6,}$/;
        if(password==""){
            $(".passwords").html("请填写密码");
            $(".passwords").attr("style",'color:red');
            obj.attr("style",'background:pink;border:1px red red;color:red;');
            validate.checkPassword=false;
            return false;

        }else if(!preg.test(password)){
            $(".passwords").html("填写不能少于6个字符");
            $(".passwords").attr("style",'color:red');
            obj.attr("style",'background:pink;border:1px red red;color:red;');
            validate.checkPassword=false;
            return false;


        }else{
            $(".passwords").html("√");
            $(".passwords").attr("style",'color:green');
            obj.attr("style",'background-color: #eef8ff;color:black;');
            validate.checkPassword=true;
            return true;

        }

    })
    $(document).on('keyup','.passworded',function(){
        var passworded=$(this).val();
        var password=$(".passworded").val();
        var obj=$(this);
        if(passworded==""){
            $(".passwordeds").html("请填写密码");
            $(".passwordeds").attr("style",'color:red');
            obj.attr("style",'background:pink;border:1px red red;color:red;');
            validate.checkPassworded=false;
            return false;


        }else if(password!=passworded){
            $(".passwordeds").html("密码必须保持一致");
            $(".passwordeds").attr("style",'color:red');
            obj.attr("style",'background:pink;border:1px red red;color:red;');
            validate.checkPassworded=false;
            return false;

        }else{
            $(".passwords").html("√");
            $(".passwords").attr("style",'color:green');
            obj.attr("style",'background-color: #eef8ff;color:black;');
            validate.checkPassworded=true;
            return true;
        }

    })

    //实现登录
    $("form[name='add']").submit(function(){

        $(".username").trigger("keyup");
        $(".email").trigger("keyup");
        $(".password").trigger("keyup");
        $(".passworded").trigger("keyup");

        if(validate.checkUsername && validate.checkEmail&&validate.checkPassword&&validate.checkPassworded){
            return true;
        }else{
            return false;
        }
    })


</script>
