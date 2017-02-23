<?php
use yii\helpers\Html;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台欢迎页</title>
    <link rel="stylesheet" href="../web/css/reset.css" />
    <link rel="stylesheet" href=" ../web/css/content.css" />
    <script src="../../web/js/jquery-3.1.1.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <script type="text/javascript" charset="utf-8" src="../web/email/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="../web/email/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="../web/email/lang/zh-cn/zh-cn.js"></script>

    <style type="text/css">
        div{
            width:100%;
        }
        td{
            margin:10px;
        }
    </style>

</head>
<body marginwidth="0" marginheight="0">
<div class="container">
    <div class="public-nav">您当前的位置：<a href="">管理首页</a>><a href="">个人管理</a></div>
    <div class="public-content">
        <div class="public-content-header">
            <h3>邮件营销--发送邮件</h3>
        </div>
        <?= Html::beginForm(['member/emails'], 'post') ?>

        <table >
              <tr >
                  <td  aligin="right" style="margin:10px;" >  收件人地址：</td>
                  <td ><input type="text"    name="send_to"  value="<?php   echo $email;?>" style="width:150px;height:20px;background-color: #eef8ff;margin:10px;" ></td>
              </tr>
              <tr   >
                  <td  aligin="right" style="margin:10px;"> 邮件标题：</td>
                  <td><input type="text"   name="subject" style="width:250px;height:20px;background-color: #eef8ff;margin:10px;"></td>
              </tr>
              <tr>
                  <td  aligin="right" style="width:100px;margin:10px;" valign="top">邮件内容：</td>
                  <td> <div>
                          <script id="editor"  name="content"  type="text/plain" style="width:700px;height:238px;"></script>
                      </div></td>
              </tr>
            <br>
              <tr>
                  <td aligin="right" style="width:100px;margin:10px;" valign></td>
                  <td><input type="submit" value="立即发送"  style="width:100px;height:40px;background-color: #f1fffd;padding:8px 10px" ></td>
              </tr>
        </table>
        <?= Html::endForm() ?>

    </div>
</div>
</body>
</html>

<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');
    function isFocus(e){
        alert(UE.getEditor('editor').isFocus());
        UE.dom.domUtils.preventDefault(e)
    }
    function setblur(e){
        UE.getEditor('editor').blur();
        UE.dom.domUtils.preventDefault(e)
    }






</script>