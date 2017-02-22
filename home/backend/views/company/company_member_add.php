<?php
use yii\helpers\Html;
?>
<style>
    .input_text_200{
        background-color: #ffffff;
    }
    td{
        padding: 10px;
        line-height: 15px;
        border-bottom: 1px dashed #8c8c8c;
    }
</style>
<div>
    <div style="color: #000099;margin: 10px"><h2>企业会员</h2></div>
    <div style="line-height: 15px;padding: 10px 20px;margin-left:25px;background-color: #f0f8fd">添加企业会员</div>
    <div>
        <?=Html::beginForm('index.php?r=company/company_member_adds','post')?>
        <table width="100%" style="margin-left: 50px">
            <tr>
                <td width="115px">用户名：</td>
                <td><input class="input_text_200" name="username" type="text"/></td>
            </tr>
            <tr>
                <td>邮箱地址：</td>
                <td><input class="input_text_200" name="email"  type="text"/></td>
            </tr>
            <tr>
                <td>登录密码：</td>
                <td><input class="input_text_200" name="password" type="text"/></td>
            </tr>
            <tr>
                <td>再次输入密码：</td>
                <td><input class="input_text_200" name="passwords" type="text"/></td>
            </tr>
            <tr>
                <td>是否赠送积分：</td>
                <td>
                    <input type="radio" name="radio" class="radio" value="y"/><span id="y">赠送</span>
                    <input type="radio" name="radio" class="radio"  value="n"/><span id="n">不赠送</span></td>
            </tr>
            <tr hidden id="input_num" >
                <td>赠送数量：</td>
                <td><input class="input_text_200" name="points" type="text"/></td>
            </tr>
            <tr>
                <td><input type="submit" style="background-color: #f6fffd;padding: 8px 20px;cursor: pointer" value="添加"/></td>
                <td><input type="reset" style="background-color: #f6fffd;padding: 8px 20px;cursor: pointer" value="返回"/></td>
            </tr>
        </table>
        <?=Html::endForm();?>
    </div>
</div>
<script src="js/jquery-3.1.1.min.js"></script>
<script>
    $(document).on('click',".radio",function(){
        if($(this).val()=='y'){
            $("#input_num").attr('style','display:table-row');
            $("#y").attr('style','color: rgb(0, 153, 0)');
            $("#n").attr('style','color: rgb(102, 102, 102)')
        }else{
            $("#input_num").attr('style','display:none');
            $("#n").attr('style','color: rgb(0, 153, 0)');
            $("#y").attr('style','color: rgb(102, 102, 102)');
        }
    })
</script>