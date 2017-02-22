<?php
use yii\helpers\Html;
?>
<script type="text/javascript" charset="utf-8" src="../web/email/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="../web/email/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="../web/email/lang/zh-cn/zh-cn.js"></script>
<style>
    td{
        padding: 5px;
    }
    .input_text_200{
        background-color: #eef8ff;
    }
</style>
<div style="background-color: #f4ffe6;border: 1px solid #007aff;height: 550px;padding-top: 15px">
    <div><font style="color: #0000cc;font-weight: bold;font-size: 20px;margin: 10px">邮件营销</font></div>
    <div style="margin: 20px;line-height: 40px;background-color: #f0f8fd;padding-left: 15px;border: 1px solid #f1fffd;">发送邮件</div>
    <div style="margin: 10px">
        <?=Html::beginForm('index.php?r=company/company_email_to','get')?>
        <table>
            <input type="hidden" name="uid" value="<?=$uid?>"/>
            <tr>
                <td>收邮件地址：</td>
                <td><input class="input_text_200" type="text" name="send_to" value="<?=$email?>"/></td>
            </tr>
            <tr>
                <td>邮件标题</td>
                <td><input class="input_text_200" name="subject" type="text"/></td>
            </tr>
            <tr>
                <td>邮件内容：</td>
                <td><textarea  class="input_text_200" id="editor" name="content" style="width:700px;height:180px;"></textarea></td>
            </tr>
            <tr>
                <td><button style="background-color: #f1fffd;cursor:pointer;padding: 8px 10px">立即发送</button></td>
            </tr>
        </table>
        <?=Html::endForm();?>
    </div>
</div>
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