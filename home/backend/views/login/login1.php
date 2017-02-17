<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\url;
use yii\captcha\Captcha;
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>登录</title>
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <link href="./js/slide-unlock.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>
</head>
<body>
<div class="bg"></div>
<div class="container">
    <div class="line bouncein">
        <div class="xs6 xm4 xs3-move xm4-move">
            <div style="height:50px;"></div>
            <div class="media media-y margin-big-bottom">
            </div>
<!--            表单begin-->
            <?php $form = ActiveForm::begin([
                'action' => '?r=login/logindo',
                'method'=>'post',
            ]); ?>
            <div class="panel loginbox">
                    <div style="font-family: "微软雅黑", "黑体"" class="text-center margin-big padding-big-top"><h1><span style="font-family: '文鼎霹雳体'">猎鹰</span>招聘网</h1></div>
                    <div class="panel-body" style="padding:30px; padding-bottom:10px; padding-top:10px;">
                        <div class="form-group">
                            <div class="field field-icon-right">
                                <input type="text" class="input input-big" name="username" placeholder="登录账号" data-validate="required:请填写账号" />
                                <span class="icon icon-user margin-small"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="field field-icon-right">
                                <input type="password" class="input input-big" name="password" placeholder="登录密码" data-validate="required:请填写密码" />
                                <span class="icon icon-key margin-small"></span>
                            </div>
                        </div>
                        <input type="hidden" value="0" id="yan" name="yan">
                        <div id="demo">
                            <div id="slider" style="margin:20px 30px;">
                                <div id="slider_bg"></div>
                                <span id="label">>></span> <span id="labelTip">拖动滑块验证</span> </div>
                            <script src="jquery-1.12.1.min.js"></script>
                            <script src="jquery.slideunlock.js"></script>
                            <script>
                                $(function () {
                                    var slider = new SliderUnlock("#slider",{
                                        successLabelTip : "欢迎登录"
                                    },function(){
                                        $('#yan').val('1');
//                                        alert("验证成功,即将跳转至素材家园首页");
//                                        window.location.href="?r=login/login"
                                    });
                                    slider.init();
                                })
                            </script>
                        </div>
                        <script src="js/jquery-1.12.1.min.js"></script>
                        <script src="js/jquery.slideunlock.js"></script>
                        <div style="padding:30px;"><input type="submit" class="button button-block bg-main text-big input-big" value="登录"></div>
                </div>
            </div>
        <?php ActiveForm::end(); ?>

    </div>
    </div>
</body>                               